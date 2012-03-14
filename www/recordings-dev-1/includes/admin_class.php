
<?php
 
 include ("connection.php");
Class Check extends Connection
{
    function login($user,$password)
	{	
		if($this->connectdb("db_recordings"))
		{
			$user=$this->escape_string($user);
			$password=$this->escape_string($password);
			$key="NORTHSTAR";
			$password=md5($password.$key);
			$result= mssql_query("select * from rec_admin where username1='$user' and password='$password'")or die("ERROR!");
			$count=mssql_num_rows($result);
			if ($count==1 && $user!= NULL && $password!= NULL)
			{	
				$row=mssql_fetch_array($result);
				$id=$row['id'];
				$login="LOGIN";
				$sql="insert into rec_logs(userId,logDate,logDetail) values('".$id."',GETDATE(),'".$login."')"; 
				if (mssql_query($sql))
				{
					
							setcookie('user',$user);
			        session_register("username1");
			        header("location:admin_portal.php");
					
				}else
				
				{
				    $_COOKIE['error_msg'] = "COOKIE Error!";
				}
				
			}else
			{
				  $_COOKIE['error_msg'] = "Error Login!";
			}
		}else
		{
			 $_COOKIE['error_msg'] = "Database Error!";
		}
	}
	
	//function for registration
	function register($user,$password,$conpass,$name,$permission)
	{
					
		if($this->connectdb("db_recordings"))
		{
			$user=$this->escape_string($user);
			$password=$this->escape_string($password);
			$conpass=$this->escape_string($conpass);
			$name=$this->escape_string($name);
			$sql= mssql_query("select * from rec_admin where username1='$user'")or die("ERROR!");
			if(mssql_num_rows($sql)== 0 && $user!=NULL && $password!= NULL  )
			
			{
				if($password==$conpass)
				{
					$key="NORTHSTAR";
			   		$password=md5($password.$key);
					$sql="insert into rec_admin(username1, password,name,rdate,allowsave) values('".$user."','".$password."',                 	'".$name."',GETDATE(),'".$permission."')"; 
			
					if (mssql_query($sql))
					{
						$_COOKIE['error_msg'] = '<font color=#99FFFF face=Arial size=2>'.$user.'&nbsp;is now registered!</font>';
					}else
					{
				    	$_COOKIE['error_msg'] = "<font color=#800000 face=Arial size=2>Registration Failed!</font>";
					}
				}else
			  {
				 	$_COOKIE['error_msg'] = "<font color=#800000 face=Arial size=2>Password do not match!</font>";
			  }
				
				 
			}else
			{
					$_COOKIE['error_msg'] = "<font color=#800000 face=Arial size=2>Existing Username/field error!</font>";		
			}
			
		}else
		{
				$_COOKIE['error_msg'] = "<font color=#800000 face=Arial size=2>Database Error!</font>";		
		}	
			
				$this->closedb();
		}
	
	
	function escape_string($string)
	{
	  
	 	return str_replace("'","''",$string);
	}
	 
	
	
	 function logout()
	 {
		 if($this->connectdb("db_recordings"))
		{
			$user=$_COOKIE['user'];
		    $result= mssql_query("select * from rec_admin where username1='$user'")or die("ERROR!");
			$count=mssql_num_rows($result);
			if ($count==1)
			{	
				$row=mssql_fetch_array($result);
				$id=$row['id'];
				$logout="LOGOUT";
				$sql="insert into rec_logs(userId,logDate,logDetail) values('".$id."',GETDATE(),'".$logout."')"; 
				if (mssql_query($sql))
				{
					
					session_start();
					session_destroy();
					$this->closedb();
					header("location:admin.php");

					
				}else
				
				{
				   echo'<div class="counter">'. "Error Logout!".'</div>';
				}
		 
			}
			
		}
		else
		
			{
				echo'<div class="counter">'. "Database error".'</div>';
			}
	 }
	 
	 
	 function manage_user1()
	 {
		
		 if($this->connectdb("db_recordings"))
		 {
			 
				
		$result = mssql_query ("SELECT * FROM rec_user") or die(mssql_error());
		
		
					echo '<br>'.'<br>';
	        echo "<table width=900 border=0 align=center cellspacing=1 bgcolor=	#AFC7C7>";
					echo"<td>"."<b>"."USER_ID"."</b>"."</td>";
					echo"<td>"."<b>"."USER_NAME"."</b>"."</td>";
					echo"<td>"."<b>"."NAME"."</b>"."</td>";
					echo"<td>"."<b>"."DATE" ."</b>"."</td>";
					echo"<td>"."<b>"."PERMISSION" ."</b>"."</td>";
					echo"<td>"."<b>"."SET_PERMISSION" ."</b>"."</td>";
					echo"<td>"."<b>"."DELETE" ."</b>"."</td>";
					
					while($row=mssql_fetch_array($result))
						{
							
							if($row['id']%2==0)
								{$color=" bgcolor = '#a19f9e' ";}
								else{$color=" bgcolor='#FFF5EE'";}
							echo '<tr'.$color.'>';
							echo"<td>". $row['id'] ."</td>";
							echo"<td>". $row['username'] ."</td>";
							echo"<td>". $row['name'] ."</td>";
							echo"<td>". $row['rdate'] ."</td>";
							echo"<td>". $row['allowsave'] ."</td>";
							$checked1 = NULL; $checked2 = NULL;
							$row['allowsave'] == 1 ? $checked1 = 'checked = "checked"' : $checked2 = 'checked = "checked"';
							echo "<td>".'<a href="update.php?id='.$row['id'].'&value=1">'
																.	"Yes".
															'<input name="'.$row['id'].'" type="radio" id="'.$row['id'].'" value="1" '.$checked1.'/>'.
														
														'</a>'.'<a href="update.php?id='.$row['id'].'&value=0">'
    												  	."No".
        											'<input name="'.$row['id'].'" type="radio" id="'.$row['id'].'" value="0" '.$checked2.' />'.
														'</a>'.
										"</td>";
							echo"<td>". '<a href=delete.php?id='.$row['id'].'>'.
														'<img src="templates/images/Delete.png" width="25" height="25" border="0" />'.
													'<a/>' .
									"</td>";
							echo"</tr>";

						}
	    				 echo "</table>";
	

			 
			  $this->closedb();
		 }
		 else{echo'<div class="counter">'. "Database error".'</div>';}
		 
	 }
	 
	 
	 
	 
	 function manageuser2($search)
	 {
		 if($this->connectdb("db_recordings"))
		 {
	
		     if($search == NULL)
			{
		     	$result2 = mssql_query("select * from rec_user INNER JOIN rec_logs ON rec_user.id = rec_logs.userid order by logdate desc") or die(mssql_error());
			}else 
			{
				$result2 = mssql_query("select * from rec_user INNER JOIN rec_logs ON rec_user.id = rec_logs.userid where username = '$search' order by logdate desc") or die(mssql_error());	
			}
					echo '<br>'.'<br>';
	        echo "<table width=900 border=0 align=center cellspacing=1 bgcolor=	#AFC7C7>";
					echo"<td>"."<b>"."LOG_ID"."</b>"."</td>";
					echo"<td>"."<b>"."USER_ID"."</b>"."</td>";
					echo"<td>"."<b>"."USERNAME"."</b>"."</td>";
					echo"<td>"."<b>"."LOG_DATE" ."</b>"."</td>";
					echo"<td>"."<b>"."LOG_DETAIL" ."</b>"."</td>";
					echo"<td>"."<b>"."OTHER_DETAIL" ."</b>"."</td>";
					while($row=mssql_fetch_array($result2))
						{
							if($row['logId']%2==0)
								{$color=" bgcolor = '#a19f9e' ";}
								else{$color=" bgcolor='#FFF5EE'";}
							echo '<tr'.$color.'>';
							echo"<td>". $row['logId'] ."</td>";
							echo"<td>". $row['userId'] ."</td>";
							echo"<td>". $row['username'] ."</td>";
							echo"<td>". $row['logDate'] ."</td>";
							echo"<td>". $row['logDetail'] ."</td>";
							echo"<td>".'<a target="_blank" href="view_info.php?id='.$row['logId'].'">View Info</a>'."</td>";
		
							echo"</tr>";

						}
	    				 echo "</table>";
			  $this->closedb();
		 }
		 else{echo'<div class="counter">'. "Database error".'</div>';}
		 
	}
	 
	 
}
?>