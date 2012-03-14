<?php
include 'connection.php';

Class Record extends Connection
{
	var $conn;
	
	function __construct()
	{
		$this->conn = $this->connectdb('sj_data');
	}
	
	function login($username,$password)
	{
		$query = "
			SELECT * FROM sj_login where username = '$username' AND password = '$password'
		";		
		
		$result = mysql_query($query);
		
		//check if record found
		if (mysql_num_rows($result) > 0)
		{
			header("location:index.html");
			return TRUE;
		} else {
			echo "Error!";
			return FALSE;
		}
		
	}
	

	function register($username,$password,$con_pass,$first_name,$last_name,$email,$con_email,$address,$age,$birth,$contact)
	{
		//if($username!=NULL && $password!=NULL && $con_pass!=NULL && $first_name!=NULL && $last_name!=NULL && $email!=NULL && $con_email!=NULL && $address!=NULL && $age!=NULL && $birth!=NULL && $contact!=NULL)
		//{
			$query = "
						insert into sj_login(username, password,fname,lname,address,birth,age,contact,email,rdate) values('".$username."','".$password."','".$first_name."','".$last_name."','".$address."','".$birth."','".$age."','".$contact."','".$email."',NOW()) 
					";		
			
			
			//check if record was inserted
			if (mysql_query($query))
			{
				header("location:index.html");
				return TRUE;
			} else {
				echo "Error_Query!";
				return FALSE;
			}
		
		//}else 
		//{
			//echo "Error!";
			//return FALSE;
		//}
	}
	
	
	private function escape_string($string)
	{
		return str_replace("'", "''", $string);
	}
	
}