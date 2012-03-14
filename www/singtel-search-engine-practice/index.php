<html>
<head>
<title>Singtel Search Portal</title>
<link rel="shortcut icon" href="templates/images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="library/ui-lightness/jquery-ui.css" />
<script type="text/javascript" src="library/jquery.js"></script>
<script type="text/javascript" src="library/jquery-ui.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	 $("#form1").submit(function(){
		 $.post('view_search.php',{ input_text : $(".inp_text").val(), input_radio : $(".inp_radio").val()},function(data){
				$(".content").html(data);
			});

			return false;
	});
});
</script>
</head>
<body>
	<div id="box" style = "display:none;">
	 	Searching Record....
	</div>
<?php include ("templates/style.css"); ?>
<?php include ("templates/template.php"); ?>
<div class="liner">
<div class = "data" style = "display:none;">

</div>
  </div>
	<style>
		body{
		font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
		font-size:12px;
		}
		p, h1, form, button{border:0; margin:0; padding:0;}
		.spacer{clear:both; height:1px;}
		/* ----------- My Form ----------- */
		.myform{
		margin:0 auto;
		width:400px;
		padding:14px;
		}
		
		/* ----------- stylized ----------- */
		#stylized{
		border:solid 2px #b7ddf2;
		background:#ebf4fb;
		margin: 30px 0 30px 130px;
		}
		#stylized h1 {
		font-size:14px;
		font-weight:bold;
		margin-bottom:8px;
		}
		#stylized p{
		font-size:11px;
		color:#666666;
		margin-bottom:20px;
		border-bottom:solid 1px #b7ddf2;
		padding-bottom:10px;
		}
		#stylized label{
		display:block;
		font-weight:bold;
		text-align:right;
		width:140px;
		float:left;
		}
		#stylized .small{
		color:#666666;
		display:block;
		font-size:11px;
		font-weight:normal;
		text-align:right;
		width:140px;
		}
		#stylized .inp_text{
		float:left;
		font-size:12px;
		padding:4px 2px;
		border:solid 1px #aacfe4;
		width:200px;
		margin:2px 0 20px 10px;
		}
		#stylized button{
		clear:both;
		margin-left:150px;
		width:125px;
		height:31px;
		background:#666666 url(img/button.png) no-repeat;
		text-align:center;
		line-height:31px;
		color:#FFFFFF;
		font-size:11px;
		font-weight:bold;
		}
		.radioFields {
			padding:4px 2px;
			border:solid 1px #aacfe4;
			width:195px;
			margin:2px 0 20px 10px;
			float: left;
			background-color: #FFFFFF;
		}
		.inp_radio{
			width: 20px;
		}
	</style>
	
	<div id="stylized" class="myform">
		<form id="form1" name="form1" method="post" action="">
			  	<img src="templates/images/singtel.png" width="60" height="27" /><h1> Search Engine</h1>
			<p>You can enter Phone Number,Name, NRIC</p>
			
			<label>Search Box
			<span class="small">Input</span>
			</label>
			<input type="text" name="txtsearch" id="txtsearch" class = "inp_text" value="<?php echo $search=trim($_POST['input_text']);?> " />
			
			<label>Search By
			</label>
			<div class = "radioFields">
				 <div>
	            	<input name="rad_id" type="radio" id="radio6" class  = "inp_radio" value="1"  <?php if($_REQUEST['input_radio'] == "1" || $_REQUEST['input_radio'] == NULL ) echo "checked";  ?>/>
	               	<span>Name</span> 
	            </div>
	           <div>
	            	<input name="rad_id" type="radio" id="radio5" class = "inp_radio" value="2"  <?php if($_REQUEST['input_radio'] == "2" || $_REQUEST['input_radio'] == NULL ) echo "checked";  ?>/>
	               	<span>NRIC</span> 
	            </div>
	            <div>
	            	<input name="rad_id" type="radio" id="radio4" class  = "inp_radio" value="3"  <?php if($_REQUEST['input_radio'] == "3" || $_REQUEST['input_radio'] == NULL ) echo "checked";  ?>/>
	               	<span>Phone Number</span> 
	            </div>
			</div>
			<div id = "but">
				<button type="submit" name="search" id="search">Search</button>
			</div>
			<div class="spacer"></div>
		
		</form>
	</div>
<center>
<div class="content">

<?php include "view_search.php";?>
</div>
<br />
  <?php include ("templates/footer.php"); ?>
</center>
</body>
</html>

