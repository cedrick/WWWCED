
<?php
 
			$search=trim($_POST['input_text']);
			echo $rad_id=$_POST['input_radio'];
			//$rad_sort=$_POST['rad_sort'];
			include ("includes/rec_class.php");
			$check= new Check();
			$check->main($search,$rad_id);
			//$check->search_logs($search);
	 
?>