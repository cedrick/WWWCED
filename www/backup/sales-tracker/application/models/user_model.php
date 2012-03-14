<?php
class User_model extends CI_Model
{
	function user_model()
	{
		parent::__construct();
	}


	function insert($phone,$agent_id,$sn,$actv_date,$appt_time,$adsl_no,$mobile_no,$iptv_no,$inst_add,$applcnt_name,$nric,$product,$speed,$ssp,$dealer,$notes,$snd_contact,$prod_officer,$campaign)
	{
		$query_str =  "INSERT INTO trck_sales (SN,appt_date,actv_date,appt_time,ADSL_NO,mobile_no,phone_no,IPTV_NO,inst_add,app_name,NRIC,product,speed,SSP,dealer,agent_id,notes,snd_contact,prod_officer,campaign) Values (?,NOW(),?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
		if($this->db->query($query_str,array($sn,$actv_date,$appt_time,$adsl_no,$mobile_no,$phone,$iptv_no,$inst_add,$applcnt_name,$nric,$product,$speed,$ssp,$dealer,$agent_id,$notes,$snd_contact,$prod_officer,$campaign))){
			return TRUE;
		}
		else
		{
			return FALSE;
		}

	}

	 function search($phone,$agent_id)
		{
		
			$exist = $this->db->query("SELECT * FROM trck_sales where phone_no = '$phone' AND agent_id = '$agent_id' order by appt_date desc LIMIT 0, 1");
			
			if($exist->num_rows() > 0) {
				return $exist;
			}
			
			return FALSE;
		}
	
	function search_valid($phone,$agent_id)
			{
				
				$exist = $this->db->query("SELECT * FROM trck_sales where phone_no = '$phone'");
				
				if($exist->num_rows() > 0) {
					$exist = $this->db->query("SELECT * FROM trck_sales where phone_no = '$phone' AND agent_id = '$agent_id' order by appt_date desc LIMIT 0, 1");
					
					if($exist->num_rows() > 0) {
						return FALSE;
					} else {
						return $exist;
					}
				}
				
				return FALSE;
			}
			
	function update($phone,$agent_id,$sn,$actv_date,$appt_time,$adsl_no,$mobile_no,$iptv_no,$inst_add,$applcnt_name,$nric,$product,$speed,$ssp,$dealer,$notes,$snd_contact,$prod_officer,$campaign)
		{
			return $this->db->query("UPDATE trck_sales SET SN = '$sn',last_update = NOW(),actv_date = '$actv_date',appt_time = '$appt_time',ADSL_NO = '$adsl_no',mobile_no = '$mobile_no',phone_no = '$phone',IPTV_NO = '$iptv_no',inst_add = '$inst_add',app_name = '$applcnt_name',NRIC = '$nric',product = '$product',speed = '$speed',SSP = '$ssp',dealer = '$dealer',agent_id = '$agent_id',notes = \"$notes\",snd_contact = '$snd_contact',prod_officer = '$prod_officer',campaign = '$campaign' WHERE phone_no ='$phone' and agent_id = '$agent_id'");
		}
	
	function stat($agent_id,$sdate_unix = NULL)
	{
		
		$agent_id= $this->session->userdata('username');
		if(NULL == $sdate_unix) {
				//get current date
				$format = 'DATE_RFC1123';
				
				$sdate_unix = time() + 28800;
				
				$sdate_human = unix_to_human($sdate_unix);
				
			}
			$date = mdate("%Y-%m-%d",$sdate_unix);
		return $this->db->query("SELECT * FROM trck_sales where agent_id = '$agent_id' and  appt_date  like '$date%'");
	}
	

}
?>