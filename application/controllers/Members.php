<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod
*/
class Members extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('website');
	}
	public function dashboard()
	{
		$this->load->view('dashboard_view');
	}
	public function new_profile()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->response = json_decode($this->website->setProfile($this->input->post(),1));
			if ($this->response->status == "success") {
				echo "<pre>";print_r($this->input->post());exit();
				$this->website->setSpaProfileLocation($this->input->post(),1);
			}
		}
		$this->data['country_data'] = $this->website->getAllCountry();
		$this->load->view('add_new_profile',$this->data);
	}
	public function get_city()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$country_id = $this->security->xss_clean($this->input->post('country_id'));
			if ($country_id && is_numeric($country_id) && $this->website->checkCityPresent($country_id)) {
				$respons = array('status' => 'success','message'=>'fetch data successfully','data'=>$this->website->getAllCityByCountryId($country_id));
			} else {
				$respons = array('status'=>'failure','message'=>'City is not present');
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($respons));
		}
	}
	public function get_area()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$city_id = $this->security->xss_clean($this->input->post('city_id'));
			if ($city_id && is_numeric($city_id)) {
				$respons = array('status' => 'success','message'=>'fetch data successfully','data'=>$this->website->getAllAreasByCityId($city_id));
			} else {
				$respons = array('status'=>'failure','message'=>'Area is not present');	
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($respons));
		}
	}

}