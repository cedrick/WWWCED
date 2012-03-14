<?php error_reporting(E_ERROR);?>
<?php
		session_start();
    if($_SESSION['username'] !=NULL)
		{
 			header("location:admin_portal.php");
		}else
		{
			
		}
	?>	
<?php
		if(isset($_POST['login']))
				{
				$user=trim($_POST['txtusername']);
				$password=trim($_POST['txtpassword']);
				include ("includes/log_class.php");
				$check= new Check();
				$check->login($user,$password);
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
      	<div id="contentTitle">Admin Login</div> 
        <br /><br /><br /><br /><br />

        <div id="leftcontentBody">
        	<form id="form1" method="post" action="">
           <font face="Arial">
           <b>
            <table>
              <tr>
                <td>
                    Username:
                </td>
                 <td>
                  <input type="text" name="txtusername" id="txtusername" />
               </td>
              </tr>
               <tr>
                <td>
              		 Password:
                </td>
                 <td>
               		<input type="password" name="txtpassword" id="txtpassword" />
                </td>
              </tr>
              <tr>
              	<td>
                </td>
              	<td >
                	<input type="submit" name="login" id="button" value="Login"  />
                </td>
              </tr>
              <tr>
              	<td>
                		<?php echo $_COOKIE['error_msg']; ?>
                </td>
              </tr>
            </table>
           </b>
           </font>
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