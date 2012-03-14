<?php

	include 'pageTemplate/top-section.php';

	if(isset($_POST['submit_download'])){
		if(is_array($_POST['download'])){
			include_once 'class/recording.php';

			$recording=new Recording();
			
			$recording->downloadZip($_POST['download']);
		}
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>ViciDial Recording Search Tool</title>
		<link type="text/css" href="lib/jqueryui/css/ui-lightness/jquery-ui-1.7.3.custom.css" rel="stylesheet" />
		<link type="text/css" href="lib/jquery/blue/style.css" rel="stylesheet" />
		<script type="text/javascript" src="lib/jqueryui/js/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="lib/jqueryui/js/jquery-ui-1.7.3.custom.min.js"></script>
		<script type="text/javascript" src="lib/jquery/jquery.tablesorter.min.js"></script>
		<link href="style2.css" rel="stylesheet" type="text/css" />
		<script>
			var checked=false;
			function checkedAll () {
				
				var aa= document.getElementById('frm1');
				
				 if (checked == false)
			          {
			           checked = true;
			          }
			        else
			          {
			          checked = false;
			          }
				for (var i =0; i < aa.elements.length; i++) 
				{
				 aa.elements[i].checked = checked;
				}
			      }

						
			$(function(){
				$('.tablesorter').tablesorter();
			});
		</script>
	</head>
	<body>
		<div id="content">
			<div id="contentHeader">
				<?php include 'pageTemplate/top-menu.php' ;?>
			</div>
			<div id="contentBody">
				<div id="leftcontentBody">
					<?php include 'pageTemplate/side-menu.php' ;?>
				</div>
				<div id="rightcontentBody">
					
					<div class="section width700" >
						<div class="sectionHeader">Search by Phone</div>
						<div class="sectionBody">
							<form action="" method="post">
								<table>
									<tr>
										<td>Phonenumber</td>
										<td><input type="text" name="phone_number" <?php echo isset($_POST['phone_number'])? "value='".$_POST['phone_number']."'":""; ?> style="width: 500px;" /></td>
									</tr>
									<tr>
										<td></td>
										<td><input type="submit" name="submit_phone" value="Search" /></td>
									</tr>
								</table>
							</form>
						</div>
					</div>
					<div class="section width700" >
						<div class="sectionHeader">Search by Status and Date</div>
						<div class="sectionBody">
							<form action="" method="post">
								<table>
									<tr>
										<td>Status</td>
										<td><input type="text" name="status" <?php echo isset($_POST['status'])? "value='".$_POST['status']."'":""; ?>/></td>
									</tr>
									<tr>
										<td>Call Date</td>
										<td><input type="text" name="calldate" <?php echo isset($_POST['calldate'])? "value='".$_POST['calldate']."'":""; ?>/></td>
									</tr>
									<tr>
										<td></td>
										<td><input type="submit" name="submit_status_calldate" value="Search" />
										</td>
									</tr>
								</table>
							</form>
						</div>
					</div>
					
							<?php 
								if(isset($_POST['submit_phone'])){
									include_once 'class/recording.php';
									$recording=new Recording();
									$recording->search("phone",$_POST['phone_number']);
								}elseif(isset($_POST['submit_status_calldate'])){
									include_once 'class/recording.php';
									$recording=new Recording();
									$recording->search("status-date","",$_POST['status'],$_POST['calldate']);
								}
							?>	
				
				</div>
			</div>
			<div id="contentFooter">
				<?php include 'pageTemplate/footer.php' ;?>
			</div>
		</div>
	
		
	</body>
</html>