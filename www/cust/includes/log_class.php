<?php

include ("class.connection.php");
Class Check extends Connection
{
    //function for login
	function login($user,$password)
	{	
			$this->NewConnection("localhost","customer_care","root","");
			if($this->CONNECTED)
			{
					$user=$this->escape_string($user);
					$password=$this->escape_string($password);
					$key="NORTHSTAR";
					$password=md5($password.$key);
					$result= mysql_query("select * from cc_user where username='$user' and password='$password'")or die("ERROR!");
					$count=mysql_num_rows($result);
					if ($count==1 && $user!= NULL && $password!= NULL)
					{	
	
									 $result= mysql_query("select * from cc_user where username='$user'")or die("ERROR!");
									 $count=mysql_num_rows($result);
										if ($count==1)
										{	
											setcookie('user',$user);
											$_SESSION['username'] = $user;
											header("location:admin_portal.php");

						}else
						{
							$_COOKIE['error_msg'] = "<font color=#AA0000 face=Arial>Error Login!</font>";
						}
					}else
					{
						$_COOKIE['error_msg'] = "<font color=#AA0000 face=Arial>Error Login!</font>";
					}
		}else
		{
			$_COOKIE['error_msg'] = "<font color=#AA0000 face=Arial>Database Error!</font>";
		}
	}
	
	
	//function for registration
	function register($user,$password,$conpass,$name)
	{
			$this->NewConnection("localhost","customer_care","root","");
			if($this->CONNECTED)
			{
						$user=$this->escape_string($user);
						$password=$this->escape_string($password);
						$conpass=$this->escape_string($conpass);
						$name=$this->escape_string($name);
						$sql= mysql_query("SELECT * FROM cc_user where username='$user'")or die("ERROR!");
						if(mysql_num_rows($sql)== 0 && $user!=NULL && $password!= NULL && $user!= "admin" && $user!="Admin" && $user!="ADMIN"   )
						{
									if($password==$conpass)
									{
											$key="NORTHSTAR";
											$password=md5($password.$key);
											$sql="INSERT INTO cc_user(username,rname,rdate,password)values('".$user."','".$name."',NOW(),'".$password."')"; 
									
											if (mysql_query($sql))
											{
												$msg = $_COOKIE['error_msg'] = '<font color=#AA0000 face=Arial size=2>'.$user.'&nbsp;is now registered!</font>';
											}else
										
											{
												$msg = $_COOKIE['error_msg'] = "<font color=#AA0000 face=Arial size=2>Registration Failed!</font>";
											}
									}else
									{
											$msg = $_COOKIE['error_msg'] = "<font color=#AA0000 face=Arial size=2>Password do not match!</font>";
									}
			
						}	else
						{
								$msg = $_COOKIE['error_msg'] = "<font color=#AA0000 face=Arial size=2>Existing Username/field error!</font>";		
						}
			
				}else
				{
					 	$msg = $_COOKIE['error_msg'] = "<font color=#AA0000 face=Arial size=2>Database Error!</font>";		
				}

}
	
	
	//function escape string
	function escape_string($string)
	{
	  
	 	return str_replace("'","''",$string);
	}
	
	
	//function search
	function main($search,$rad_id)
	{
		 $this->NewConnection("localhost","customer_care","root","");
		 if($this->CONNECTED)
		 {
				$filters = array("-", "(", ")", " ","#","'",'"','*','+');
				$escape = str_replace($filters,"",$search);
										if($search!= NULL)
										{
													if($escape!= NULL && $rad_id==1)
													{
															$sorter.= "rdate";
															$query.= "phone = '$escape' ";
															$str_query = str_replace($filters,"",$query);
															
													}elseif($escape!= NULL && $rad_id==2)
													{
															$sorter.= "rdate";
															$query.= "ista_id = '$escape' ";
															$str_query = str_replace($filters,"",$query);
													}elseif($escape!= NULL && $rad_id==3)
													{
															$sorter.= "rdate";
															$query.= "callid = '$escape' ";
															$str_query = str_replace($filters,"",$query);
													}
											
										echo $sql= "select * from cc_logs where $str_query order by $sorter desc";  
										$result=mysql_query($sql);
										$count=mysql_num_rows($result);
										$counter="<b>Result</b>".":"." ".$count." "."Records Found!";
										echo '<div class="search_result">'.'<font color="#800000" face="Arial">'.'<center>'.$counter.'</center>'.'</font>'.'</div>';
										if($count>0)
												{   
													$x=0; 
												echo "<table width=825 border=0 align=center cellspacing=1 cellpadding=2 bgcolor=#A0C0FF style='font-size:12px' class='main'>";
												echo"<td>"."<b>"."#"."</b>"."</td>";
												echo"<td>"."<b>"."Phone&nbsp;number"."</b>"."</td>";
												echo"<td>"."<b>"."Ista&nbsp;id"."</b>"."</td>";
												echo"<td>"."<b>"."Call&nbsp;id"."</b>"."</td>";
												echo"<td>"."<b>"."Call Date" ."</b>"."</td>";
												while($row=mysql_fetch_array($result))
													{
														
														if($x%2==0)
														{
															$color = " bgcolor = '#C6DEFF' ";
														}else
														{
															$color=" bgcolor='#FFF5EE'";
															}
						
																$x++;
														echo '<tr'.$color.'>';
														echo"<td>".$x."</td>";
														echo"<td>". $row['phone'] ."</td>";
														echo"<td>". $row['ista_id'] ."</td>";
														echo"<td>". $row['callid'] ."</td>";
														echo"<td>". $row['rdate'] ."</td>";
														
													}
												
								
								
								
								}else
								{
									$msg = $_COOKIE['error_msg'] = "<font color=#AA0000 face=Arial size=2>Search has a Null Value!</font>";		
								}
		 	
		 
		 
		 
		 
		 }else
		 {
		 	$msg = $_COOKIE['error_msg'] = "<font color=#AA0000 face=Arial size=2>Database Error!</font>";		
		 }
	
	}
	 
	}
}
?>