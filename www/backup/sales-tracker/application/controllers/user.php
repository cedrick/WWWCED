
<?php
class User extends CI_Controller
{
	function User()
	{
		parent::__construct();
		$this->view_data['base_url'] = base_url();
		$this->load->model('User_model');
	}

	function index()  
	{
		redirect('user/call_phone/','refresh');
   	}
	
	
   	function call_phone()
   	{
   		if($this->session->userdata('user_type') != '')
		{
	   		$this->load->library('form_validation');
			$this->form_validation->set_rules('phone','PhoneNumber','trim|required|numeric|xss_clean|callback_call_valid');
			if($this->form_validation->run() == FALSE)
				{
					$agent_id= $this->session->userdata('username');
					$stats = $this->User_model->stat($agent_id,$sdate_unix = NULL);
					$data = array(
						'stats' => $stats,
					);
					$this->load->view('master_view', array('page' => 'view_main', 'data' => $data));
				}else
				{
					$phone = $this->input->post('phone');
					$this->session->set_userdata('phone',$phone);
					$agent_id= $this->session->userdata('username');
					
					$exist = $this->User_model->search($phone,$agent_id);
					
				if($exist ==  FALSE) { 			//if no record found, redirect to create new record
						redirect('/user/call_tracker_new/'.$phone,'refresh');				
					} else {						//if record found, load data
						$record = $exist->row();
						
						redirect('/user/call_tracker/'.$phone, 'refresh');
					}
				}
		}else
				{
					redirect('/login/','refresh');
				}
		
		
   	}
   	
   	function call_valid($phone)
		{
			$this->form_validation->set_message('call_valid','That record was already tagged as sale by another agent.');
			$agent_id= $this->session->userdata('username');
			if($this->User_model->search_valid($phone,$agent_id))
			{
				return FALSE;
			}else
			{
				return TRUE;
			}
		}
		

   	function call_tracker()
	{
		if($this->session->userdata('user_type') != '')
		{
				$this->load->library('form_validation');
				//$this->form_validation->set_rules('agent_id','Agent ID','trim||xss_clean');
				$this->form_validation->set_rules('sn','S/N','trim|xss_clean');
				//$this->form_validation->set_rules('appt_date','Application Date','trim||xss_clean|required');
				$this->form_validation->set_rules('actv_date','Activation Date','trim|xss_clean');
				$this->form_validation->set_rules('appt_time','Application Time','trim|xss_clean');
				$this->form_validation->set_rules('adsl_no','ADSL NO','trim|xss_clean');
				$this->form_validation->set_rules('mobile_no','Mobile No','trim|xss_clean');
				$this->form_validation->set_rules('iptv_no','IPTV NO','trim|xss_clean');
				$this->form_validation->set_rules('inst_add','Installation Address','trim|xss_clean');
				$this->form_validation->set_rules('applcnt_name','Applicant Name','trim|xss_clean');
				$this->form_validation->set_rules('nric','NRIC','trim|xss_clean');
				$this->form_validation->set_rules('product','Product','trim|xss_clean');
				$this->form_validation->set_rules('speed','Speed','trim|xss_clean');
				$this->form_validation->set_rules('ssp','SSP','trim|xss_clean');
				$this->form_validation->set_rules('dealer','Dealer','trim|xss_clean');
				$this->form_validation->set_rules('notes','Notes','trim|xss_clean');
				$this->form_validation->set_rules('snd_contact','Second Contact','trim|xss_clean');
				$this->form_validation->set_rules('prod_officer','Product Officer','trim||xss_clean');
				$this->form_validation->set_rules('campaign','Campaign','trim||xss_clean|required');
				
				$phone = $this->uri->segment(3);
				
					$agent_id= $this->session->userdata('username');
					$stats = $this->User_model->stat($agent_id,$sdate_unix = NULL);
					$phone= $this->session->userdata('phone');
					$call_search = $this->User_model->search($phone,$agent_id);
					$data = array(
						'stats' => $stats,
			   			'call_search' => $call_search
					);
				
				if($this->form_validation->run() == FALSE)
				{
					$this->load->view('master_view',array('page' => 'view_search', 'data' => $data) );
				}else 
				{
					
					$stats = $this->User_model->stat($agent_id,$sdate_unix = NULL);
					$phone= $this->session->userdata('phone');
					$agent_id= $this->session->userdata('username');
					$call_search = $this->User_model->search($phone,$agent_id);
					$data = array(
						'stats' => $stats,
			   			'call_search' => $call_search
					);
					
					
					$phone= $this->session->userdata('phone');
					$agent_id= $this->session->userdata('username');
					$sn = $this->input->post('sn');
					//$appt_date = $this->input->post('appt_date');
					$actv_date = $this->input->post('actv_date');
					$appt_time = $this->input->post('appt_time');
					$adsl_no = $this->input->post('adsl_no');
					$mobile_no = $this->input->post('mobile_no');
					$iptv_no = $this->input->post('iptv_no');
					$inst_add = $this->input->post('inst_add');
					$applcnt_name = $this->input->post('applcnt_name');
					$nric = $this->input->post('nric');
					$product = $this->input->post('product');
					$speed = $this->input->post('speed');
					$ssp = $this->input->post('ssp');
					$dealer = $this->input->post('dealer');
					$notes = $this->input->post('notes');
					$snd_contact = $this->input->post('snd_contact');
					$prod_officer = $this->input->post('prod_officer');
					$campaign = $this->input->post('campaign');
					
					
					if (isset($_POST['save']) && $_POST['save'] == 'Save All') {
					if($this->User_model->update($phone,$agent_id,$sn,$actv_date,$appt_time,$adsl_no,$mobile_no,$iptv_no,$inst_add,$applcnt_name,$nric,$product,$speed,$ssp,$dealer,$notes,$snd_contact,$prod_officer,$campaign))
								{
									$this->session->set_flashdata('insertdata', 'The data was inserted');
									$this->load->view('master_view',array('page' => 'view_search','data' => $data));
								}else
								{
									return FALSE;
								}
					}
					
				}
		}else
				{
					redirect('/login/','refresh');
				}
	
	
	}
	
	
	function call_tracker_new()
		{
			
			if($this->session->userdata('user_type') != '')
			{	
				$this->load->library('form_validation');
				//$this->form_validation->set_rules('agent_id','Agent ID','trim||xss_clean');
				$this->form_validation->set_rules('sn','S/N','trim|xss_clean');
				//$this->form_validation->set_rules('appt_date','Application Date','trim||xss_clean|required');
				$this->form_validation->set_rules('actv_date','Activation Date','trim|xss_clean');
				$this->form_validation->set_rules('appt_time','Application Time','trim|xss_clean');
				$this->form_validation->set_rules('adsl_no','ADSL NO','trim|xss_clean');
				$this->form_validation->set_rules('mobile_no','Mobile No','trim||xss_clean');
				$this->form_validation->set_rules('iptv_no','IPTV NO','trim|xss_clean');
				$this->form_validation->set_rules('inst_add','Installation Address','trim|xss_clean');
				$this->form_validation->set_rules('applcnt_name','Applicant Name','trim|xss_clean');
				$this->form_validation->set_rules('nric','NRIC','trim|xss_clean');
				$this->form_validation->set_rules('product','Product','trim|xss_clean');
				$this->form_validation->set_rules('speed','Speed','trim|xss_clean');
				$this->form_validation->set_rules('ssp','SSP','trim|xss_clean');
				$this->form_validation->set_rules('dealer','Dealer','trim|xss_clean');
				$this->form_validation->set_rules('notes','Notes','trim|xss_clean');
				$this->form_validation->set_rules('prod_officer','Product Officer','trim|xss_clean');
				$this->form_validation->set_rules('snd_contact','Second Contact','trim|xss_clean');
				$this->form_validation->set_rules('campaign','Campaign','trim|xss_clean|required');
				$phone = $this->uri->segment(3);
				
					$phone= $this->session->userdata('phone');
					$agent_id= $this->session->userdata('username');
				if($this->form_validation->run() == FALSE)
				{
					$stats = $this->User_model->stat($agent_id,$sdate_unix = NULL);
					$data = array(
						'stats' => $stats
					);
					$this->load->view('master_view',array('page' => 'new_view_search','data' => $data) );
				}else 
				{
					
					$stats = $this->User_model->stat($agent_id,$sdate_unix = NULL);
					$phone= $this->session->userdata('phone');
					$agent_id= $this->session->userdata('username');
					$call_search = $this->User_model->search($phone,$agent_id);
					$data = array(
			   			'call_search' => $call_search,
						'stats' => $stats
					);
					
					
					$sn = $this->input->post('sn');
					//$appt_date = $this->input->post('appt_date');
					$actv_date = $this->input->post('actv_date');
					$appt_time = $this->input->post('appt_time');
					$adsl_no = $this->input->post('adsl_no');
					$mobile_no = $this->input->post('mobile_no');
					$iptv_no = $this->input->post('iptv_no');
					$inst_add = $this->input->post('inst_add');
					$applcnt_name = $this->input->post('applcnt_name');
					$nric = $this->input->post('nric');
					$product = $this->input->post('product');
					$speed = $this->input->post('speed');
					$ssp = $this->input->post('ssp');
					$dealer = $this->input->post('dealer');
					$notes = $this->input->post('notes');
					$snd_contact = $this->input->post('snd_contact');
					$prod_officer = $this->input->post('prod_officer');
					$campaign = $this->input->post('campaign');
					
					
					if($this->User_model->insert($phone,$agent_id,$sn,$actv_date,$appt_time,$adsl_no,$mobile_no,$iptv_no,$inst_add,$applcnt_name,$nric,$product,$speed,$ssp,$dealer,$notes,$snd_contact,$prod_officer,$campaign))
								{
									$this->session->set_flashdata('insertdata', 'The data was inserted');
									redirect('/user/call_tracker/'.$phone, 'refresh');
								}else
								{
									return FALSE;
								}
					
				}
			
			}else
				{
					redirect('/login/','refresh');
				}
			
		}
	
   	
	}



?>