<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Northstar Solutions - Singtel Sales Export</title>
	<script src="calendar.js" type="text/javascript"></script>
	<link href="style.css" rel="stylesheet" type="text/css">
	<style>
	a:link {
		color: #FFF;
	}
	
	a:hover {
		color: #FFF;
	}
	
	a:visited {
		color: #FFF;
	}
	
	a:active {
		color: #FFF;
	}
	</style>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php include"template/header.php";?>
	<div class='container'>
		<div class="header">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img
				src="template/images/head.png" alt="" width="351" height="78" />
		</div>
		<div class="liner"></div>
		<br />
		<center>
		<div class="content">
			<br /> <br />
			<div>
				<form class="date-form" method="post" action="">
					<input type="text" size="50" name="sdate" id="sdate" value="<?php echo $_POST["sdate"];?>"
						onfocus='showCalendarControl(this);' />
					<input type="submit" name="submit" value="Go" />
				</form>
			</div>
			<div class="logo">
			<?php
			session_start();
			if(isset($_POST["submit"])){
				session_unset();
				require_once "includes/connection.php";
				$dbConn = new connection();
				if($dbConn->connectdb("NSI_SINGTEL_MID_ARPU_GRPC")){
					$query = "sales_export '".$_POST["sdate"]."'";
					$result = mssql_query($query);
					
					//Get Result Count
					$result_count = mssql_num_rows($result);

					//Print headers on excel
					$fields = array();
					for ($i = 0; $i < mssql_num_fields($result); ++$i) {
						// Fetch the field information
						$field = mssql_fetch_field($result, $i);
						//Convert to array;
						$fields[$i] = $field->name;
					}
					$_SESSION['report_header'] = $fields;

					//Print rows in excel
					$j = 0;
					while($row = mssql_fetch_object($result))
					{
						for ($i = 0; $i < mssql_num_fields($result); ++$i) {
							$field = mssql_fetch_field($result, $i);
							$field_name = $field->name;
							$_SESSION['report_values'][$j][$i]=$row->$field_name." ";
						}
						$j++;
					}
					$counter='<font color="#2A0000" size="4">'
					.$result_count.
                                            '</font>'.
                                            '<font size="4" color="#2A1FFF">'.
                                              "Found".
                                            '</font>';

					echo '<div class="result">'
					.$counter.'&nbsp; '.'&nbsp; '.'&nbsp; '.'&nbsp; '.'&nbsp; '.'&nbsp; '.'&nbsp; '.
                                            '<a href="export_report.php?fn=Sales_Report_ARPU_GRPC" style="border-style:0;">
                                              
                                                <font color="#000000" size="4">Export to</font><font color="#2A1FFF" size="4"> Excel
                                              
                                            </a>'. 
                                         '</div>';


				}
			}
			?>


			</div>
		</div>
		</center>
	</div>
	<br />
	<?php include"template/footer.php";?>
</body>
</html>
