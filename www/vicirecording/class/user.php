<?php 
	include 'connection.php';
	
	class User extends Connection{
		
		public $errorMsg;
		
		function login($username,$password){
			
			$this->NewConnection();
			
			$query=mysql_query("select user_id,user from vicidial_users where user='".mysql_escape_string($username)."' and pass='".mysql_escape_string($password)."'");
			
			if(mysql_affected_rows() > 0){
				
				$check_right=mysql_query("select user_id,user,modify_leads from vicidial_users where user='".mysql_escape_string($username)."' and modify_leads='1'");
				
				if(mysql_affected_rows() > 0){
					
					$row=mysql_fetch_object($check_right);
				
					setcookie("vici_uid", $row->user_id, time()+43200);
					setcookie("vici_uname", $row->user, time()+43200);
					
					header("Location:index.php");	
					
				}else{
					
					$this->errorMsg="<div class='errMsg'>You have no access to use this portal</div>";
					
				}
				
			}else{
				
				$this->errorMsg="<div class='errMsg'>Invalid Username/Password</div>";
				
			}
		}
		
	}
	
	
?>