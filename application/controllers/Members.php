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
		if (!$this->session->userdata('user_id')) : redirect('account/login'); endif ;  
	}
	public function dashboard()
	{
		$this->load->view('dashboard_view');
	}
	public function new_profile()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->response = json_decode($this->website->setProfile($this->input->post(),$this->session->userdata('user_id')));
			if ($this->response->status == "success") {
				$this->website->setSpaProfileLocation($this->input->post(),$this->session->userdata('user_id'),$this->response->last_inserted_id);
				$this->website->setSpaProfileServicesCategory($this->input->post(),$this->session->userdata('user_id'),$this->response->last_inserted_id);
				$this->profile_data_response = json_decode($this->website->setProfilePaymentDetails($this->input->post(),$this->session->userdata('user_id'),$this->response->last_inserted_id));
				if ($this->profile_data_response->status == TRUE) {
					for($i = 0 ; $i < count($_FILES['image_to_upload']['name']) ; $i++ ) {
						$_FILES['file']['name']     	= $_FILES['image_to_upload']['name'][$i];
		                $_FILES['file']['type']     	= $_FILES['image_to_upload']['type'][$i];
		                $_FILES['file']['tmp_name'] 	= $_FILES['image_to_upload']['tmp_name'][$i];
		                $_FILES['file']['error']     	= $_FILES['image_to_upload']['error'][$i];
		                $_FILES['file']['size']     	= $_FILES['image_to_upload']['size'][$i];
		                $this->load->library('upload', $this->friend->profile_image_upload());
		                if ($this->upload->do_upload('file')) {
		                	$this->website->setProfileImage($this->upload->data('file_name'),$this->response->last_inserted_id,$this->session->userdata('user_id'));
		                }
					}
				}
			};
			exit();
		}
		$this->data['all_cities_key'] = $this->website->getAllCitiesDataByCountryName($this->session->userdata('current_locaation_country'));
		$this->data['category_key'] = $this->website->getRandomCategoryLimitedBySix(100);
		$this->data['services_key'] = $this->website->getRandomServicesLimitedten(100);
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