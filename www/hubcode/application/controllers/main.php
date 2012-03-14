<?php
class Main extends CI_Controller
{
	function Main()
	{
		parent::__construct();
		$this->view_data['base_url'] = base_url();
		$this->load->model('Main_model');
	}

	function index()  
	{
			redirect('/main/insert_data/','refresh');
   	}
	
	function insert_data()
	{
		//Validation
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('mi', 'M.I.', 'trim|required|xss_clean');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required|xss_clean');
		$this->form_validation->set_rules('area_code', 'Area Code', 'trim|required|numeric|xss_clean');
		$this->form_validation->set_rules('number', 'Phone Number', 'trim|required|numeric|xss_clean');
		$this->form_validation->set_rules('address', 'Address', 'trim|required|xss_clean');
		$this->form_validation->set_rules('month', 'Month', 'trim|required|xss_clean');
		$this->form_validation->set_rules('day', 'Day', 'trim|required|xss_clean');
		$this->form_validation->set_rules('year', 'Year', 'trim|required|numeric|xss_clean');
		$this->form_validation->set_rules('guardian', 'Guardian', 'trim|required|xss_clean');
		if($this->form_validation->run() == FALSE)
			{
				
				$this->load->view('hub_main',array('page'=>'form_hub','data'=>NULL));
			}else{
				
				$fname= $this->input->post('fname');
				$lname= $this->input->post('lname');
				$mi= $this->input->post('mi');
				$gender= $this->input->post('gender');
				$area_code= $this->input->post('area_code');
				$number= $this->input->post('number');
				$address= $this->input->post('address');
				$month= $this->input->post('month');
				$day= $this->input->post('day');
				$year= $this->input->post('year');
				$guardian= $this->input->post('guardian');
				$remarks= $this->input->post('remarks');
				if($this->Main_model->bday_checker($month,$day))
				{
						if($this->Main_model->network_checker($area_code,$number,$net_status=NULL))
						{
							if($this->Main_model->insert($fname,$lname,$mi,$gender,$address,$area_code,$number,$month,$day,$year,$guardian,$remarks))
							{
							
								$data = "Data was inserted!";
								$this->load->view('hub_main',array('page'=>'form_hub','data'=>$data ));
							}else 
							{
								$data = "Data Error!";
								$this->load->view('hub_main',array('page'=>'form_hub','data'=>$data ));
							}
						}else 
						{
							$data = "Invalid Area Code!";
							$this->load->view('hub_main',array('page'=>'form_hub','data'=>$data ));
						}
				}else{
							$data = "Invalid Birth Day!";
							$this->load->view('hub_main',array('page'=>'form_hub','data'=>$data ));
				}		
					
			}
			
	}
   	
	 
	
	
}


?>