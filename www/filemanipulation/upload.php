<html>
<head><title>File Upload</title></head>
<body>
<form action="uploaded.php" method="post" enctype="multipart/form-data" />
	<div>
	  Choose a file to upload: <br />
	  <input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
	  <input type="file" name="userfile" id="userfile" size="50" />
	  <br />
	  <input type="submit" value="Upload File" />
	</div>
</form>
</body>
</html>