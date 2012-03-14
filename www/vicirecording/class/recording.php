<?php 
	include 'connection.php';
	include 'zipit.php';
	class Recording extends Connection{
		
		public $count_save=0;
		
		function search($method,$phonenumber=NULL,$status=NULL,$calldate=NULL){
			$this->NewConnection();

			switch ($method){
				case "phone" :
					$query=mysql_query("SELECT rclog.recording_id,vclog.phone_number,vclog.user,vclog.status,vclog.call_date,vclog.length_in_sec,rclog.filename,rclog.location FROM vicidial_log AS vclog INNER JOIN recording_log AS rclog ON vclog.uniqueid = rclog.vicidial_id AND vclog.phone_number IN ($phonenumber) ORDER BY vclog.phone_number,vclog.call_date");
					break;
				case "status-date" :
					$query=mysql_query("SELECT rclog.recording_id,vclog.phone_number,vclog.user,vclog.status,vclog.call_date,vclog.length_in_sec,rclog.filename,rclog.location FROM vicidial_log AS vclog INNER JOIN recording_log AS rclog ON vclog.uniqueid = rclog.vicidial_id WHERE vclog.status = '$status' AND vclog.call_date >= '$calldate 00:00:00' AND vclog.call_date <= '$calldate 23:59:59' ORDER BY vclog.phone_number,vclog.call_date");
					break;
			}
			
			echo "
			<div class='section width950' >
				<div class='sectionHeader'>Result - check/uncheck all <input type='checkbox' name='checkall' onclick='checkedAll();' /></div>
				<div class='sectionBody'>
					<form action='' method='post' id ='frm1' >
					<table class = 'tablesorter' border=0 cellpadding=0 cellspacing=0 >
					<thead>
						<td><input type='submit' name='submit_download' value='..' /></td>
						<th>#</th>
						<th>Phone Number</th>
						<th>User</th>
						<th>Call Date</th>
						<th>Status</th>
						<th>Length(s)</th>
						<th >&nbsp;</th>
					</thead>
					<tbody>
					";
			
			$i=0;
			
			while ($row=mysql_fetch_array($query)){
				if($i%2==0){
					$color=" bgcolor='#d8ebeb'";
				}else{
					$color=" bgcolor='#FFFFFF'";
				}
				echo "<tr $color>";
				echo "<td><input type='checkbox' name='download[]' value='".$row['recording_id']."' /></td>";
				echo "<td>".++$i."</td>";
				echo "<td>".$row['phone_number']."</td>";
				echo "<td>".$row['user']."</td>";
				echo "<td>".$row['call_date']."</td>";
				echo "<td>".$row['status']."</td>";
				echo "<td>".$row['length_in_sec']."</td>";
				echo "<td style='font-size: 10px;'><a href='".$row['location']."'>".$row['filename']."</a></td>";
				
				
			}
			echo "</tr>"; 
			echo "</tbody>";
			echo "</table>
			     
			</form>
				</div>
			</div>
			";
			
		}
		
		function downloadZip ($recordingID){
			
			$this->NewConnection();
			
			foreach ( $recordingID as $value ){
				
				$ids=$ids.$value.",";
				
			}
			
			$stripped_ids = substr($ids, 0, strlen($ids)-1);
			
			$query=mysql_query("SELECT rclog.recording_id,vclog.phone_number,vclog.user,vclog.status,vclog.call_date,vclog.length_in_sec,rclog.filename,rclog.location FROM vicidial_log AS vclog INNER JOIN recording_log AS rclog ON vclog.uniqueid = rclog.vicidial_id WHERE rclog.recording_id IN ($stripped_ids)");
			
			$folderName=$this->getUniqueCode(25);
			
			if (!mkdir('./zip-recordings/'.$folderName, 0, true)) {
			    die('Failed to create folders...');
			}
			
			while ($row=mysql_fetch_array($query)){
				$this->copy($row['location'],$folderName,$row['filename']);
				
			}
			
			$i=0;
			if ($handle = opendir('./zip-recordings/'.$folderName)) {
			    while (false !== ($file = readdir($handle))) {
			        if ($file != "." && $file != "..") {
			        	$files_to_zip[$i]='zip-recordings/'.$folderName.'/'.$file;
			        	$i++;
			        }
			    }
			    closedir($handle);
			}

			$result = create_zip($files_to_zip,'./zip-recordings/'.$folderName.'/vici-zip-recording.zip');
			echo $this->count_save." files copied";
			
			header("Location: zip-recordings/".$folderName.'/vici-zip-recording.zip');
			
		}
		
		function copy($url,$folderName,$filename){
			if(!@copy($url,'./zip-recordings/'.$folderName.'/'.$filename.'.gsm'))
			{
				echo $url;
				$errors= error_get_last();
			    echo "COPY ERROR: ".$errors['type'];
			    echo "<br />\n".$errors['message'];
			} else {
			    $this->count_save ++;
			}
		}
		
		function getUniqueCode($length = "")
      	{
	      	$code = md5(uniqid(rand(), true));
	      	if ($length != "") return substr($code, 0, $length);
	      	else return $code;
      	}
		
	}	

?>