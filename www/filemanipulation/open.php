<?php
	$dirName = 'uploads/';
	$fileList = null;
	$dir = opendir($dirName);
	while ($file = readdir($dir)) {
		if( $file != "." and $file !="..") {
			$fileList .="<li>$file</li>";
		}
	}
	closedir($dir);
?>
<html>
<head><title>File List</title></head>
<body>
<p>Files in <?php echo $dirName ; ?> </p>
<ul>
<?php echo $fileList; ?>
</ul>
</body>
</html>