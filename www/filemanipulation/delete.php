<?php function file_delete($file) {
	if( unlink($file) ) 
		echo "$file<br />deleted. <hr>";
	else
		echo "Could not delete $file <hr>";
      }
?>
<html>
<head><title>File Delete</title></head>
<body>
<?php
	$fileA = 'uploads/021211_dahssingtel.xlsxghsced.xlsx';
	//$fileB = "C:/php/news.bak";
	file_delete($fileA);
	//file_delete($fileB);
?>
</body>
</html>