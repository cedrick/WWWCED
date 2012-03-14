<?php
	$old = 'uploads/02092012_HILLS_CED.jpeg';
	$new = 'uploads/02092012_BLUE_HILLS.jpeg';

	if( rename($old,$new) ) 
		$message = "Renamed $old<br /> to $new";
	else
		$message = "Failed copying $old";
?>
<html>
<head><title>File Rename</title></head>
<body>
<?php echo $message; ?>
</body>
</html>