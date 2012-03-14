<?php
class Main_model extends CI_Model
{
	function main_model()
	{
		parent::__construct();
	}
	
	function insert($fname,$lname,$mi,$gender,$address,$area_code,$number,$month,$day,$year,$guardian,$remarks)
	{
			$datestring = "%m/%d/%Y";
			$rdate = mdate($datestring);
		$data = array(
					   'name' =>$fname." ".$mi." ".$lname,
					   'gender' =>$gender,
					   'address' =>$address,
		 			   'phone_no' =>$area_code.$number,
					   'network_status' =>$this->session->userdata('net_status'),
					   'b_day' =>$month." ".$day." ".$year,
					   'guardian' =>$guardian,
					   'remarks'=>$remarks,
					   'rdate'=>$rdate
					);

			if($this->db->insert('hub_tbl',$data))
			{
				return TRUE;
			}else 
			{
				return FALSE;
			}
		
	}
	
	
	 function network_checker($area_code,$number,$net_status=NULL)
	{
		
		
		
							$network = array(
											     '0905' => 'Globe',
												 '0906'  => 'Globe',
												 '0915'  => 'Globe',
												 '0916'  => 'Globe',
												 '0917'  => 'Globe',
												 '0926'  => 'Globe',
												 '0927'  => 'Globe',
												 '0935'  => 'Globe',
												 '0936'  => 'Globe',
												 '0937'  => 'Globe',
												 '0908' =>  'Smart',
												 '0909'  => 'Smart',
												 '0910'  => 'Smart',
												 '0912'  => 'Smart',
												 '0918'  => 'Smart',
												 '0919'  => 'Smart',
												 '0920'  => 'Smart',
												 '0921'  => 'Smart',
												 '0928'  => 'Smart',
												 '0929'  => 'Smart',
												 '0923'  => 'Sun',
												 '0932'  => 'Sun',
												 '0933'  => 'Sun',
												 '0942'  => 'Sun',
												 '0943'  => 'Sun',
											);
											
											$area = $area_code;
											foreach ($network as $key => $value) {
											    while (strpos($area, $key) === 0) {
											        $net_status = $value;
											        $area = substr($area, strlen($key));
											    }
											}
											
											
											if($net_status!='')
											{
												$this->session->set_userdata('net_status',$net_status);
												//echo $net_status;
												//echo $area = $area_code;
												//echo $number;
												return TRUE;
												
											}else {
												//echo "Error!";
												return False;
											}
											
											
		
											
	}

function bday_checker($month,$day)
{
	if($month == 'September' && $day<=30 || $month == 'April' && $day<=30 || $month == 'June' && $day<=30 || $month == 'November' && $day<=30 || $month == 'February' && $day<=29 || $month == 'January' && $day<=31 || $month == 'March' && $day<=31 || $month == 'May' && $day<=31 || $month == 'July' && $day<=31 || $month == 'August' && $day<=31 || $month == 'October' && $day<=31  || $month == 'December' && $day<=31)
		{
			return TRUE;
		}else{
			return FALSE;
		}
}
	
	
}
?>