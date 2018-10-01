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
	public function details()
	{
		$profile_id = $this->friend->base64url_decode($this->uri->segment(3));
		$this->data['category_key'] = $this->website->getRandomCategoryLimitedBySix();
		$this->data['area_key'] = $this->website->getRandomAreaLimitedten($this->session->userdata('current_locaation'));
		$this->data['services_key'] = $this->website->getRandomServicesLimitedten();
		$this->data['profile_data'] = $this->website->getSingleProfileDataById($profile_id);
		$this->data['profile_images'] = $this->website->getImagesByProfileId($profile_id);
		$this->data['all_cities_key'] = $this->website->getAllCitiesDataByCountryName($this->session->userdata('current_locaation_country'));
		$this->load->view('profile_details_view',$this->data);
	}
	public function category()
	{
		$category_id = $this->friend->base64url_decode($this->uri->segment(3));
		$data['category_key'] = $this->website->getRandomCategoryLimitedBySix();
		$data['area_key'] = $this->website->getRandomAreaLimitedten($this->session->userdata('current_locaation'));
		$data['services_key'] = $this->website->getRandomServicesLimitedten();
		$data['get_category_profile'] = $this->website->getProfileByCategory($this->session->userdata('current_locaation'),$category_id);
		$data['all_cities_key'] = $this->website->getAllCitiesDataByCountryName($this->session->userdata('current_locaation_country'));
		$this->load->view('category_view',$data);
	}
	public function services()
	{
		$services_id = $this->friend->base64url_decode($this->uri->segment(3));
		$data['category_key'] = $this->website->getRandomCategoryLimitedBySix();
		$data['area_key'] = $this->website->getRandomAreaLimitedten($this->session->userdata('current_locaation'));
		$data['services_key'] = $this->website->getRandomServicesLimitedten();
		$data['get_services_profile'] = $this->website->getServicesProfile($this->session->userdata('current_locaation'),$services_id);
		$data['all_cities_key'] = $this->website->getAllCitiesDataByCountryName($this->session->userdata('current_locaation_country'));
		$this->load->view('services_view',$data);
	}
	public function area()
	{
		$area_id = $this->friend->base64url_decode($this->uri->segment(5));
		$this->session->set_userdata(array('current_locaation' => $this->website->getCityNameByAreaId($area_id)->city_name));
		$this->data['category_key'] = $this->website->getRandomCategoryLimitedBySix();
		$this->data['area_key'] = $this->website->getReletedAreaByCitiesName($this->website->getCityNameByAreaId($area_id)->city_name);
		$this->data['services_key'] = $this->website->getRandomServicesLimitedten();
		$this->data['get_area_profile'] = $this->website->getProfileByAreaId($area_id);
		$this->data['all_cities_key'] = $this->website->getAllCitiesDataByCountryName($this->session->userdata('current_locaation_country'));
		$this->load->view('area_view',$this->data);
	}
	public function cities()
	{
		$city_id = $this->friend->base64url_decode($this->uri->segment(4));
		$this->session->set_userdata(array('current_locaation' => $this->website->getCityDataBYId($city_id)->city_name));
		$this->data['category_key'] = $this->website->getRandomCategoryLimitedBySix();
		$this->data['area_key'] = $this->website->getReletedAreaByCitiesName($this->website->getCityDataBYId($city_id)->city_name);
		$this->data['services_key'] = $this->website->getRandomServicesLimitedten();
		$this->data['all_cities_key'] = $this->website->getAllCitiesDataByCountryName($this->session->userdata('current_locaation_country'));
		$this->data['get_cities_profiles'] = $this->website->getAllprofilesByCitiesId($city_id);
		$this->load->view('cities_view',$this->data);
	}
}