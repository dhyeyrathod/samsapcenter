<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay rathod
*/
class Location extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('admin_id')) : redirect('account/login') ; endif ;
		$this->load->model('admin');
	}
	public function country()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->form_validation->set_rules('new_country','Country','required|is_unique[country.country_name]');
			if ($this->form_validation->run()) {
				if ($this->input->post('country_id') == 0) {
					$this->admin->setCountryData($this->input->post('new_country'));
					$this->session->set_flashdata('success_country','Country Added successfully..!!');
				} else {
					$this->admin->setCountryData($this->input->post('new_country'),$this->input->post('country_id'));
					$this->session->set_flashdata('success_country','Country Updated successfully..!!');
				}
				redirect('location/country');
			} 
		}
		$data['all_country_key'] = $this->admin->getAllCountry();
		$this->load->view('country_view',$data);
	}
	public function delete_country()
	{
		$country_id = $this->friend->base64url_decode($this->uri->segment(3));
		$this->admin->deleteCountry($country_id);
	}
	public function city()
	{
		$this->load->view('city_view');
	}
}