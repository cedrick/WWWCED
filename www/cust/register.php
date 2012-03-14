<?php error_reporting(E_ERROR);?>
<?php
if(isset($_POST['register']))
	{
		$user = $_POST['txtusername'];
		$name = $_POST['txtname'];
		$password = $_POST['txtpassword'];
		$conpass = $_POST['txtconfirm'];
		
		include("includes/log_class.php");
		$check =  new Check();
		$check->register($user,$password,$conpass,$name);
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Template</title>
    <link type="text/css" href="template/css/style.css" rel="stylesheet" />  
  </head>
  <body>
    <div id="content">
      <div id="contentHeader">
      	<div style="width: 820px;margin-left: 200px;"><div id="nslogo"></div><div id="appTitle">AE Customer Care</div></div>
      </div>
      <div id="navMenu">
      	<div id="location"></div>
      	<div>
      		<ul>
      		</ul>
      	</div>
      </div>
      <div class="clearFix"></div>
      <div id="contentBody" class="login">
      	<div id="contentTitle">Agent Registration</div> 
        <br /><br /><br /><br /><br />

        <div id="leftcontentBody">
        	<form id="reg" method="post" action="">
          	<b>
            <table>
              <tr>
                <td>
                  <font face="Arial">
                    Username
                  </font>
                </td>
                 <td>
                  <input type="text" name="txtusername" id="txtusername" />
               </td>
              </tr>
              <tr>
                <td>
                  <font face="Arial">
                    Name
                  </font>
                </td>
                 <td>
                  <input type="text" name="txtname" id="txtname" />
               </td>
              </tr>
               <tr>
                <td>
                  <font face="Arial">
                   Password
                  </font>
                </td>
                 <td>
               		<input type="password" name="txtpassword" id="txtpassword" />
                </td>
              </tr>
               <tr>
                <td>
                  <font face="Arial">
                   Confirm Password
                  </font>
                </td>
                 <td>
               		<input type="password" name="txtconfirm" id="txtcomfirm" />
                </td>
              </tr>
              <tr>
              	<td>
                </td>
              	<td >
                	<input type="submit" name="register" id="button" value="  Register   "  />
                </td>
              </tr>
              <tr>
              	<td>
                <?php echo $msg = $_COOKIE['error_msg'];  ?>
                </td>
              </tr>
            </table>
            </b>
         </form>
        </div>
        <div id="rightcontentBody">
        </div>
      </div>
      <div id="contentFooter">
      	NorthStar Solutions Inc.     |     Copyright © 2011
      </div>
    </div>
  </body>
</html>

