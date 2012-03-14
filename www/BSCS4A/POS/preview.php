<html>
<head>
<title>
	Sales Reciept
</title>
<script type="text/javascript" src="../js/jss.jsp"> </script>
<script type="text/javascript">
	function printpage()
	{
	 window.print();
	}
</script>
</head>
<body>
<center>
<?php
				include("connection/rec_class.php");
				$check = new Check();
				
				$check->get_birno();
				$check->show_all_basket();
				echo "<br>";
				$check->preview_transaction();
				
				
?>
</center>
<a href="#" onclick=window.print()>Print</a>
</body>
</html>
