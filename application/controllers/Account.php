<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay rathod/
*/
class Account extends MY_Controller
{
	public function __construct()
	{	
		parent::__construct();
		$this->load->model('website');
	}
	public function login()
	{

		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->form_validation->set_rules('email', 'Email Id', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if ($this->form_validation->run()) {
				$this->website->authentication($this->input->post());
			} 
		}
		$this->load->view('login_view');
	}
	public function registration()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			if ($this->form_validation->run('signup')) {
				if ($this->website->setMembers($this->input->post())) {
					$data['success'] = "Registration Successfully";
				} else {
					echo "error";
				}
			}
			exit();
		}
		$data[''] = "";
		$this->load->view('registration_view',$data);
	}
}