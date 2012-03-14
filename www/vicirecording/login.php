<?php 
	if(isset($_POST['submit'])){
		$pword=trim($_POST['password']);
		$uname=trim($_POST['username']);
		$errorMsg="";
		include "class/user.php";
		$user = new User();
		
		$user->login($uname, $pword);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>ViciDial Recording Search Tool</title>
		<link type="text/css" href="lib/jqueryui/css/ui-lightness/jquery-ui-1.7.3.custom.css" rel="stylesheet" />
		<script type="text/javascript" src="lib/jqueryui/js/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="lib/jqueryui/js/jquery-ui-1.7.3.custom.min.js"></script>
		<link href="style2.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="content">
			<div id="contentHeader">
				<div id="logoContentHeader"><img alt="" src="images/northstar_logo.jpg" /><div id="titleText">ViciDial Recording Search Tool v1.00</div></div>
			</div>
			<div id="contentBody">
				<div id="leftcontentBody">
					<div class="section width350" >
						<div class="sectionHeader">User Login</div>
						<div class="sectionBody">
							<form action="" method="post">
							 <table width="100%" border="0" cellpadding="10">
							 	<tr>
									<td width="10%">
										Username:
									</td>
									<td width="80%">
										<input name="username" type="text" value="<?php echo $_POST['username'];?>" />
									</td>
								</tr>
							 	<tr>
									<td>
										Password:
									</td>
									<td>
										<input name="password" type="password" />
									</td>
								</tr>
								<tr>
									<td>
										
									</td>
									<td>
										<input name="submit" type="submit" value="Submit" />
									</td>
								</tr>
								
							 </table>
							</form>	
						</div>
						<?php echo $user->errorMsg; ?>
					</div>
				</div>
				
			</div>
			<div id="contentFooter">
				<?php include 'pageTemplate/footer.php' ;?>
			</div>
		</div>
	</body>
</html>