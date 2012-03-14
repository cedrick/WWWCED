<?php error_reporting(E_ERROR);?>
<?php
		session_start();
    if($_SESSION['username'] ==NULL)
		{
 			header("location:login.php");
		}else
		{
			
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
      	<div style="width: 820px;margin-left: 200px;"><div id="nslogo"></div><div id="appTitle">AE Customer Care</div><div id="greeting">&nbsp;&nbsp;Hello!&nbsp;<?php echo $_COOKIE['user']; ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="logout.php"><font face="Arial" color="#FFFFFF"><b>Logout</b></font></a></div></div>
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
      	<div id="contentTitle">Search Portal</div> 
        <br /><br /><br /><br /><br />

        <div id="leftcontentBody">
        	<form id="portal" method="post" action="">
            <font face="Arial">
            <b>
              <table>
                <tr>
                   <td>
                    <input type="text" name="txtsearch" id="txtsearch" class = "inp_text" value=" <?php echo $search=trim($_POST['txtsearch']); ?>" />
                   </td>
                   <td>
                      <input type="submit" name="search" id="button" value="Search"  />
                   </td>
                </tr>
                <tr>
                  <td>
                    Search by:
                  </td>
                   <td>
                    Phone#:&nbsp;<input name="rad_id" type="radio" id="radio1" class = "inp_radio" value="1" <?php if($_REQUEST['rad_id'] == "1" || $_REQUEST['rad_id'] == NULL ) echo "checked";  ?>/>
                  </td>
                  <td>
                  </td>
                   <td>
                  </td>
                   <td>
                  </td>
                   <td>
                  </td>
                  <td>
                  </td>
                  <td>
                  </td>
                   <td>
                    ISTA_ID:&nbsp;<input name="rad_id" type="radio" id="radio2" class = "inp_radio" value="2" <?php if($_REQUEST['rad_id'] == "2") echo "checked";  ?>/>
                  </td>
                   <td>
                  </td> 
                  <td>
                  </td>
                  <td>
                  </td>
                  <td>
                  </td>
                  <td>
                  </td>
                  <td>
                  </td>
                  <td>
                  </td>
                   <td>
                  </td>
                   <td>
                  </td>
                  <td>
                    Call_ID:&nbsp;<input name="rad_id" type="radio" id="radio3" class = "inp_radio" value="3" <?php if($_REQUEST['rad_id'] == "3") echo "checked";  ?>/>
                  </td>
                   <td>
                  </td> 
                  <td>
                  </td>
                  <td>
                  </td>
                  <td>
                  </td>
                </tr>
                <tr>
                  <td>
                  <?php //echo $msg = $_COOKIE['error_msg'];  ?>
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

<?php
  if(isset($_POST['search']))
	  { 
			$search=trim($_POST['txtsearch']);
			$rad_id=$_POST['rad_id'];
			include ("includes/log_class.php");
			$check= new Check();
			$check->main($search,$rad_id);
			//$check->search_logs($search);
	  }
?>

