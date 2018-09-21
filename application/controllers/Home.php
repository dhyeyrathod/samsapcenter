<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod
*/
class Home extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('website');
	}
	public function index()
	{
		$this->set_current_locaation();
		$data['category_key'] = $this->website->getRandomCategoryLimitedBySix();
		$data['area_key'] = $this->website->getRandomAreaLimitedten($this->session->userdata('current_locaation'));
		$data['services_key'] = $this->website->getRandomServicesLimitedten();
		$data['paid_profile_key'] = $this->website->getPaidProfile($this->session->userdata('current_locaation'));
		$data['free_profile_key'] = $this->website->getFreeProfiles($this->session->userdata('current_locaation'));
		$this->load->view('home_view',$data);
	}
}