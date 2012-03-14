<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="anoceanofsky.css" />
<title>An Ocean of Sky by Bryant Smith</title>
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
        	<div id="headerTitle">Online Registration</div>
            <div id="headerSubtext">An Online registration system by PICC/JAV/SRE</div>
        </div>
    </div>
    
  <form name="register" action="" method="POST">
    
        <div class="contentBox">
    	<div class="innerBox">






			<div class="contentTitle">Registration Form</div><br><br>
			<div class="contentText"><p>First Name:&nbsp&nbsp<input type="text" name ="firstname" id ="firstname" value ="" size="20" maxlength="25"><br>Last Name:&nbsp&nbsp<input type="text" name ="lastname" id ="lastname" value ="" size="20" maxlength="25">						<br>Username:&nbsp&nbsp<input type="text" name ="username" id ="username" value =""  size="20" maxlength="25"><br>
			Password:&nbsp&nbsp<input type="password" name ="password" id ="password" value =""   size="20" maxlength="25"><br>
			Re-enter Password:&nbsp&nbsp<input type="password" name ="conpass" id ="conpass" value =""  size="20" maxlength="25"><br>
			Email:&nbsp&nbsp<input type="text" name ="email" id ="email" value =""   size="20" maxlength="25"><br>
			Re-enter Email:&nbsp&nbsp<input type="text" name ="con_email" id ="con_email" value =""   size="20" maxlength="25"><br>Address:&nbsp&nbsp<input type="text" name ="address" id ="address" value ="" size="20" maxlength="25">						<br>
			Age:&nbsp&nbsp<input type="text"  name ="age" id ="age" value =""    size="20" maxlength="25"><br>
			Date of bith:&nbsp&nbsp<input type="text"  name ="birth" id ="birth"  value =""   size="20" maxlength="25"><br>
			Contact no.:&nbsp&nbsp<input type="text"  name ="contact" id ="contact" value =""    maxlength="25"><br><br>
			<input type="Submit" name = "register" id = "register" value="Register"><input type="Reset" value="Cancel"><br>Please click						<a href="req.html">here</a> for installation requirements and expenses.</p></div>
			
			     <?php 
					$first_name = $_POST['fistname'];
					$last_name = $_POST['lastname'];
					$username = $_POST['username'];
					$password = $_POST['password'];
					$con_pass = $_POST['conpass'];
					$email = $_POST['email'];
					$con_email = $_POST['con_email'];
					$age = $_POST['age'];
					$birth= $_POST['birth'];
					$contact = $_POST['contact'];
					$address = $_POST['address'];
					
					require_once "includes/record_class.php";
					$check = new Record();
					if(isset($_POST['register']))
					{
						$check->register($username,$password,$con_pass,$first_name,$last_name,$email,$con_email,$address,$age,$birth,$contact);
					}
				
			
				?>

		       </div>
		        
		    </div>
</form>	  

	
         <div id="footer"><a href="http://www.aszx.net">web development</a> by <a href="http://www.facebook.com/zurcnai">PICC</a> | <a href="http://www.facebook.com/Shehehe">SRE</a> | <a href="http://www.facebook.com/fookz01jhay">JAV</a> </div>
</body>
</html>
