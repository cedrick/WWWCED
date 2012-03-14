<?php
	$source = "C:/021211_dahssingtel.xlsxghsced.xlsx";
	$destination = 'uploads/021211_dahssingtel.xlsxghsced.xlsx';

	if( copy($source,$destination) ) 
		$message = "Copies $source<br /> to $destination";
	else
		$message = "Failed copying $source";
?>
<html>
<head><title>File Copy</title></head>
<body>
<?php echo $message; ?>
</body>
</html>

