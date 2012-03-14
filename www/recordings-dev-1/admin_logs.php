<html>
<head>
<title>LOGS</title>
</head>
<body>
  <center>
		<?php
       		 session_start();
	           if(!session_is_registered('username1'))
	          {
	           header("location:admin.php");
	          }
     	 ?>
      <?php include ("templates/template.php"); ?>
		<div class="liner"></div>
    <div style="width: 1200px;">
    	  <form id="form1" name="form1" method="post" action="">
          <table>
          <tr>
          <td>
              <div>
              		<font face="Arial">
                  	Enter Username:
                  </font>
              </div>
            </td>
            <td>
              <div>
                  <input type="text" name="txtsearch" id="txtsearch" value="<?php echo $search=trim($_POST['txtsearch']); ?>" />
              </div>
            </td>
             <td>
              <div>
                  <input type="submit" name="search" id="search" value="Search" />
              </div>
            </td>
          </tr>
        </table> 
      </form>
      <div class="leftcontent">
      	<?php
					include ("templates/navigation.php"); 
				?>
      </div>
      <div class="rightcontent">
				<?php 
					 $search=trim($_POST['txtsearch']);
					 include"includes/admin_class.php";
					$check= new Check();
					echo $check->manageuser2($search);
      	?> 
      </div>
    </div>
		<?php include ("templates/footer.php"); ?>    
    
  </center>
</body>
</html>
