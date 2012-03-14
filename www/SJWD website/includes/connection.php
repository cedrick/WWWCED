<?php 
Class Connection {

		var $connection;

		function connectdb($database) {

			$this->connection = mysql_connect("localhost","root", "")
					or die("Could not connect: " . mysql_error());
			$db = mysql_select_db($database, $this->connection)
					or die("Unable to select database" . mysql_error());
			return true;
		}


		function closedb() {
			mysql_close($this->connection)
				or die("Unable to close database: " . mysql_errno());
			$this->connection = false;
			return;
		}
}