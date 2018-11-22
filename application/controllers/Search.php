<?php 
/**
* @author Jay Rathod
*/
class Search extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('website');
	}
	public function index()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->data['category_key'] = $this->website->getRandomCategoryLimitedBySix();
			$this->data['all_category_key'] = $this->website->getAllCategory();
			$this->data['area_key'] = $this->website->getRandomAreaLimitedten($this->session->userdata('current_locaation'));
			$this->data['services_key'] = $this->website->getRandomServicesLimitedten();
			$this->data['all_cities_key'] = $this->website->getAllCitiesDataByCountryName($this->session->userdata('current_locaation_country'));
			$this->filter_search['search_query'] = $this->input->post('query');
			$this->filter_search['services_id'] = $this->input->post('services');
			$this->filter_search['city_id'] = $this->input->post('city');
			
			$this->data['search_result_key'] = $this->website->getQuerySearchResult($this->filter_search);

			$this->load->view('search_view',$this->data);
		} else {
			redirect(base_url());
		}
	}
}