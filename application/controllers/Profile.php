<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod
*/
class Profile extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('website');
	}
	public function category()
	{
		$category_id = $this->friend->base64url_decode($this->uri->segment(3));
		$data['category_key'] = $this->website->getRandomCategoryLimitedBySix();
		$data['area_key'] = $this->website->getRandomAreaLimitedten($this->session->userdata('current_locaation'));
		$data['services_key'] = $this->website->getRandomServicesLimitedten();
		$data['get_category_profile'] = $this->website->getProfileByCategory($this->session->userdata('current_locaation'),$category_id);
		$this->load->view('category_view',$data);
	}
}