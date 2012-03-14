
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="anoceanofsky.css" />
<title>San Juan Water District</title>
</head>

<body>

    <div id="page">
        <div class="topNaviagationLink"><a href="index.html">Home</a></div>
        <div class="topNaviagationLink"><a href="aboutus.html">About</a></div>
        
        <div class="topNaviagationLink"><a href="service.html">Services</a></div>
	    <div class="topNaviagationLink"><a href="log.php">Log-in</a></div>

	</div>
    <div id="mainPicture">
    	<div class="picture">
        	<div id="headerTitle">Admins and Clients Log-in</div>
            <div id="headerSubtext">An Online registration system by PICC/JAV/SRE</div>
        </div>
    </div>
  <form name="login" action="" method="POST">
        <div class="contentBox">
    	<div class="innerBox">
        	<div class="contentTitle">Log-in</div>
          <div class="contentText"><p>Username:&nbsp&nbsp <input type="text" name="username" id = "username" value = "" /> <br><br>Password:&nbsp&nbsp<input type="password" name="password" id = "password" value = "" /><br><input type="Submit" name = "login" id = "login" value="Login"><input type="Reset" value="Cancel"></p><br>
       </div>
   </form>
				<?php 
				       $username = $_POST['username'];
				       $password = $_POST['password'];
				      	require_once "includes/record_class.php";
				      	$check = new Record();
				      	if(isset($_POST['login']))
				      	{
				      		$check->login($username,$password);
				      	}
				       
				?>
				       
        
        
       </div>
        <div id="footer"><a href="http://www.aszx.net">web development</a> by <a href="http://www.facebook.com/zurcnai">PICC</a> | <a href="http://www.facebook.com/Shehehe">SRE</a> | <a href="http://www.facebook.com/fookz01jhay">JAV</a> </div>
</body>
</html>
