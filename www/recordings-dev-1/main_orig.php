<html>
<head>
<title>MAIN_PAGE</title>
<script type="text/javascript" src="library/jquery.js">
</script>
<script>
$(function() {
	$("#search :input").tooltip({
	
		// place tooltip on the right edge
		position: "center right",
	
		// a little tweaking of the position
		offset: [-45, 70],
	
		// use the built-in fadeIn/fadeOut effect
		effect: "fade",
	
		// custom opacity setting
		opacity: 0.6
	
	});
});

</script> 
</head>
<body>
<?php
		 session_start();
     if(!session_is_registered('username'))
		{
 		 header("location:index.php");
		}
?>
<?php include ("templates/template.php"); ?>
<div class="liner">
    <div class="logout">
      <a href="logout.php" style="text-decoration:underline;">
        <font color="#A3C4D1" size="3" face="Arial Rounded MT Bold">
        	Logout
        </font>
      </a>
	</div>
    <div class="hello">
      <font color="#FFFBF0" size="3" face="Arial Rounded MT Bold">
        Hello!
        <?php echo $_COOKIE['user']; ?>
      </font>
    </div>
  </div>
  <form id="form1" name="form1" method="post" action="" style="margin:40 0 20 0;">    	
    <div class="head_top" style="width:413px; height:20px;"></div>
  <table style="margin-left:188px;">
        <tr>
         <th>
           <div id="search" style=" background-color:#A9C8D3; width:410px; height:24px; margin-bottom:0px;">
               <input type="text" size="50" name="txtsearch" id="txtsearch" value="<?php echo $search=trim($_POST['txtsearch']);?> "           		 title=" 10 digits Phonenumber/Call_ID<br><em style='font-size:11px;'>note: For multiple search, separate it by COMMA &quot;,&quot;</em>"/>
               <input type="submit" name="search" id="search" value="    Search    " style="width:70px;"/>
           </div>
          </th>
</tr>
        <tr>
          <td>
           <div style="background-color:#E0FFFF; width:410px; height:44px; margin-top:0px;"> 
              <div style="margin-left: 20px; float:left;top:79px; left:9px;	">                   
                <strong>
                  Search By:  
                </strong>
              </div>
              <div style="margin-left: 20px; float:left;top:79px; left:9px;	">
               <input name="rad_id" type="radio" id="radio3" value="0" <?php if($_REQUEST['rad_id'] == "0") echo "checked";  ?>/>
                Call_ID
              </div>
              <div style="margin-left: 80px; float:left;top:79px; left:9px;	">
             	 <input name="rad_id" type="radio" id="radio4" value="1"  <?php if($_REQUEST['rad_id'] == "1" || $_REQUEST['rad_id'] ==			 					 						NULL ) echo "checked";  ?>/>
               	Phone_Number
              </div>
              <br />
              <div style="margin-left: 20px; float:left;top:79px; left:9px;	">
                 <strong>
                  Sort By:  
                </strong >
              </div>
              <div style="margin-left: 37px; float:left;top:79px; left:9px;	">
                <input name="rad_sort" type="radio" id="radio" value="0" <?php if($_REQUEST['rad_sort'] == "0") echo "checked";  ?> />
                  Phone_Number
             </div>
             <div style="margin-left: 33px; float:left;top:79px; left:9px;	">
              <input name="rad_sort" type="radio" id="radio2" value="1" <?php if($_REQUEST['rad_sort'] == "1" || $_REQUEST['rad_sort'] ==			 			  	NULL ) echo "checked";  ?> />      
                Date
            </div>
             </div>
           </td>
        </tr>
      </table>
  </form>	
<center>
<div class="content">
<?php
  if(isset($_POST['search']))
	  { 
			$search=trim($_POST['txtsearch']);
			$rad_id=$_POST['rad_id'];
			$rad_sort=$_POST['rad_sort'];
			include ("includes/rec_class.php");
			$check= new Check();
			$check->main($search,$rad_id,$rad_sort);
			$check->search_logs($search);
	  }
?>
<br />
  <?php include ("templates/footer.php"); ?>
</div>
</center>
</body>
</html>

