<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod
*/
class Website extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('friend');
		$this->friend = new friend ;
	}
	public function getRandomCategoryLimitedBySix($limit = 6)
	{
		$sql_str = "SELECT * FROM category ORDER BY RAND() LIMIT ".$this->db->escape($limit);
		return $this->db->query($sql_str)->result();
	}
	public function getRandomAreaLimitedten($current_location,$limit = 10)
	{
		$sql_str = "SELECT * FROM area";
		if ($this->checkAreaPresentByCity($current_location)) {
		 	$sql_str .= " WHERE city_name = ".$this->db->escape($current_location);
		 } 
		$sql_str .= " ORDER BY RAND() LIMIT ".$this->db->escape($limit);
		return $this->db->query($sql_str)->result();
	}
	public function getRandomServicesLimitedten($limit = 10)
	{
		$sql_str = "SELECT * FROM services ORDER BY RAND() LIMIT ".$this->db->escape($limit);
		return $this->db->query($sql_str)->result();
	}
	public function getPaidProfile($current_location,$limit = 6)
	{
		$sql_str = "SELECT spa_profile.id AS id , spa_profile.title AS title , spa_profile_location.city_name AS city_name , (SELECT image_name FROM spa_profile_images WHERE fk_profile_id = spa_profile.id ORDER BY RAND() LIMIT 1) as image , spa_profile.description as description from spa_profile JOIN spa_profile_location ON spa_profile.id = spa_profile_location.fk_profile_id JOIN spa_profile_payment_info ON spa_profile.id = spa_profile_payment_info.fk_profile_id JOIN spa_profile_services_category ON spa_profile.id = spa_profile_services_category.fk_profile_id WHERE spa_profile_payment_info.fk_payment_type_id = 1 AND spa_profile_payment_info.fk_payment_type_name = 'Paid'";
		if ($this->checkProfilePresentInCity($current_location) > 3) {
			$sql_str .= " AND spa_profile_location.city_name = ".$this->db->escape($current_location);
		}
		$sql_str .= " ORDER BY RAND() LIMIT $limit";
		return $this->db->query($sql_str)->result();
	}
	public function getProfilePresentInCurrentLocationByCategory($current_location,$category_id)
	{
		$sql_str = "SELECT spa_profile_location.city_name AS city_name FROM spa_profile JOIN spa_profile_location ON spa_profile.id = spa_profile_location.fk_profile_id JOIN spa_profile_services_category ON spa_profile.id = spa_profile_services_category.fk_profile_id WHERE spa_profile_location.city_name = ".$this->db->escape($current_location)." AND spa_profile_services_category.fk_category_id = ".$this->db->escape($category_id);
		return $this->db->query($sql_str)->num_rows();
	}
	public function getFreeProfiles($current_location,$limit = 9)
	{
		$sql_str = "SELECT spa_profile.id AS id , spa_profile.title AS title , spa_profile_location.city_name AS city_name , (SELECT image_name FROM spa_profile_images WHERE fk_profile_id = spa_profile.id ORDER BY RAND() LIMIT 1) as image , spa_profile.description as description from spa_profile JOIN spa_profile_location ON spa_profile.id = spa_profile_location.fk_profile_id JOIN spa_profile_payment_info ON spa_profile.id = spa_profile_payment_info.fk_profile_id JOIN spa_profile_services_category ON spa_profile.id = spa_profile_services_category.fk_profile_id WHERE spa_profile_payment_info.fk_payment_type_id = 2 AND spa_profile_payment_info.fk_payment_type_name = 'Free'";
		if ($this->checkProfilePresentInCity($current_location) > 3) {
			$sql_str .= " AND spa_profile_location.city_name = ".$this->db->escape($current_location);
		}
		$sql_str .= " ORDER BY RAND() LIMIT $limit";
		return $this->db->query($sql_str)->result();
	}
	public function setMembers($data)
	{
		$sql_str = "INSERT INTO members SET username = ".$this->db->escape($data['username']).", password = ".$this->db->escape($data['password']).",contact_number = ".$this->db->escape($data['contact']).",email = ".$this->db->escape($data['email']).",created_date = NOW() , status = TRUE";
		return $this->db->query($sql_str);
	}
	public function UserAuthentication($data)
	{
		$sql_str = "SELECT * FROM members WHERE email = ".$this->db->escape($data['email'])." AND password = ".$this->db->escape($data['password']);
		return $this->db->query($sql_str)->num_rows();
	}
	public function getSingleUserDataByEmail($email_id)
	{
		$sql_str = "SELECT * FROM members WHERE email = ".$this->db->escape($email_id);
		return $this->db->query($sql_str)->row();
	}
	public function checkProfilePresentInCity($city_name)
	{
		$sql_str = "SELECT spa_profile_location.city_name AS city_name FROM spa_profile JOIN spa_profile_location ON spa_profile.id = spa_profile_location.fk_profile_id WHERE city_name = ".$this->db->escape($city_name);
		return $this->db->query($sql_str)->num_rows();
	}
	public function checkAreaPresentByCity($city_name)
	{
		$sql_str = "SELECT * FROM area WHERE city_name = ".$this->db->escape($city_name);
		return $this->db->query($sql_str)->num_rows();
	}
	public function getProfileByCategory($current_location , $category_id , $limit , $offset = 0)
	{
		$sql_str = "SELECT spa_profile.id AS id , spa_profile.title AS title , spa_profile_location.city_name AS city_name , spa_profile.contact_number as contact_number , spa_profile_services_category.fk_category_name as category_name , spa_profile.ranking as ranking , spa_profile_services_category.fk_services_names as services_name from spa_profile JOIN spa_profile_location ON spa_profile.id = spa_profile_location.fk_profile_id JOIN spa_profile_payment_info ON spa_profile.id = spa_profile_payment_info.fk_profile_id JOIN spa_profile_services_category ON spa_profile.id = spa_profile_services_category.fk_profile_id WHERE spa_profile_services_category.fk_category_id = ".$this->db->escape($category_id);
		if ($this->getProfilePresentInCurrentLocationByCategory($current_location,$category_id) > 3) {
			$sql_str .= " AND spa_profile_location.city_name = ".$this->db->escape($current_location);
		}
		$sql_str .= " LIMIT $limit OFFSET $offset";
		return $this->db->query($sql_str)->result();
	}
	public function getProfileByCategoryCount($current_location , $category_id)
	{
		$sql_str = "SELECT spa_profile.id AS id , spa_profile.title AS title , spa_profile_location.city_name AS city_name , spa_profile.contact_number as contact_number , spa_profile_services_category.fk_category_name as category_name , spa_profile.ranking as ranking , spa_profile_services_category.fk_services_names as services_name from spa_profile JOIN spa_profile_location ON spa_profile.id = spa_profile_location.fk_profile_id JOIN spa_profile_payment_info ON spa_profile.id = spa_profile_payment_info.fk_profile_id JOIN spa_profile_services_category ON spa_profile.id = spa_profile_services_category.fk_profile_id WHERE spa_profile_services_category.fk_category_id = ".$this->db->escape($category_id);
		if ($this->getProfilePresentInCurrentLocationByCategory($current_location,$category_id) > 3) {
			$sql_str .= " AND spa_profile_location.city_name = ".$this->db->escape($current_location);
		}
		return $this->db->query($sql_str)->num_rows();
	}
	public function getServicesProfile($current_location , $services_id , $limit , $offset = 0)
	{
		$sql_str = "SELECT spa_profile.id AS id , spa_profile.title AS title , spa_profile_location.city_name AS city_name , spa_profile.contact_number as contact_number , spa_profile_services_category.fk_services_names as services_name , spa_profile.ranking as ranking , spa_profile_services_category.fk_category_name as category_name , (SELECT image_name FROM spa_profile_images WHERE fk_profile_id = spa_profile.id ORDER BY RAND() LIMIT 1) as image from spa_profile JOIN spa_profile_location ON spa_profile.id = spa_profile_location.fk_profile_id JOIN spa_profile_payment_info ON spa_profile.id = spa_profile_payment_info.fk_profile_id JOIN spa_profile_services_category ON spa_profile.id = spa_profile_services_category.fk_profile_id WHERE spa_profile_services_category.fk_services_id = ".$this->db->escape($services_id);
		if ($this->getProfilePresentInCurrentLocationByServices($current_location,$services_id) > 3) {
			$sql_str .= " AND spa_profile_location.city_name = ".$this->db->escape($current_location);
		}
		$sql_str .= " LIMIT $limit OFFSET $offset";
		return $this->db->query($sql_str)->result();
	}
	public function getProfileByServicesCount($current_location , $services_id)
	{
		$sql_str = "SELECT spa_profile.id AS id , spa_profile.title AS title , spa_profile_location.city_name AS city_name , spa_profile.contact_number as contact_number , spa_profile_services_category.fk_services_names as services_name , spa_profile.ranking as ranking , spa_profile_services_category.fk_category_name as category_name , (SELECT image_name FROM spa_profile_images WHERE fk_profile_id = spa_profile.id ORDER BY RAND() LIMIT 1) as image from spa_profile JOIN spa_profile_location ON spa_profile.id = spa_profile_location.fk_profile_id JOIN spa_profile_payment_info ON spa_profile.id = spa_profile_payment_info.fk_profile_id JOIN spa_profile_services_category ON spa_profile.id = spa_profile_services_category.fk_profile_id WHERE spa_profile_services_category.fk_services_id = ".$this->db->escape($services_id);
		if ($this->getProfilePresentInCurrentLocationByServices($current_location,$services_id) > 3) {
			$sql_str .= " AND spa_profile_location.city_name = ".$this->db->escape($current_location);
		}
		return $this->db->query($sql_str)->num_rows();
	}
	public function getProfilePresentInCurrentLocationByServices($current_location,$services_id)
	{
		$sql_str = "SELECT spa_profile_location.city_name AS city_name FROM spa_profile JOIN spa_profile_location ON spa_profile.id = spa_profile_location.fk_profile_id JOIN spa_profile_services_category ON spa_profile.id = spa_profile_services_category.fk_profile_id WHERE spa_profile_location.city_name = ".$this->db->escape($current_location)." AND spa_profile_services_category.fk_services_id = ".$this->db->escape($services_id);
		return $this->db->query($sql_str)->num_rows();
	}
	public function getSingleProfileDataById($profile_id)
	{
		$sql_str = "SELECT spa_profile.id as id , spa_profile.title as title,spa_profile.contact_number as contact_number , spa_profile.description as description , spa_profile.ranking as ranking , spa_profile.email_id as email_id , spa_profile_location.fk_counry_id as counry_id , spa_profile_location.country_name as country_name , spa_profile_location.fk_city_id as city_id , spa_profile_location.city_name as city_name ,spa_profile_location.address as address , spa_profile_location.google_map_url as google_map_url ,spa_profile_location.fk_area_id as area_id , spa_profile_location.area_name as area_name , spa_profile_location.pincode as pincode , spa_profile_services_category.fk_category_id as category_id , spa_profile_services_category.fk_category_name as category_name , spa_profile_services_category.fk_services_id as services_id , spa_profile_services_category.fk_services_names as services_names FROM spa_profile JOIN spa_profile_location ON spa_profile.id = spa_profile_location.fk_profile_id JOIN spa_profile_payment_info ON spa_profile.id = spa_profile_payment_info.fk_profile_id JOIN spa_profile_services_category ON spa_profile.id = spa_profile_services_category.fk_profile_id WHERE spa_profile.id = ".$this->db->escape($profile_id);
		return $this->db->query($sql_str)->row();
	}
	public function getImagesByProfileId($profile_id)
	{
		$sql_str = "SELECT * FROM spa_profile_images WHERE fk_profile_id = ".$this->db->escape($profile_id);
		return $this->db->query($sql_str)->result();
	}
	public function getProfileByAreaId($area_id , $limit , $offset = 0)
	{
		$sql_str = "SELECT spa_profile.id AS id , spa_profile.title AS title , spa_profile_location.city_name AS city_name , spa_profile.contact_number as contact_number , spa_profile_services_category.fk_services_names as services_name , spa_profile.ranking as ranking , spa_profile_services_category.fk_category_name as category_name , (SELECT image_name FROM spa_profile_images WHERE fk_profile_id = spa_profile.id ORDER BY RAND() LIMIT 1) as image from spa_profile JOIN spa_profile_location ON spa_profile.id = spa_profile_location.fk_profile_id JOIN spa_profile_payment_info ON spa_profile.id = spa_profile_payment_info.fk_profile_id JOIN spa_profile_services_category ON spa_profile.id = spa_profile_services_category.fk_profile_id WHERE spa_profile_location.fk_area_id = ".$this->db->escape($area_id);
		$sql_str .= " LIMIT $limit OFFSET $offset";
		return $this->db->query($sql_str)->result();
	}
	public function getProfileCountByAreaId($area_id)
	{
		$sql_str = "SELECT spa_profile.id AS id , spa_profile.title AS title , spa_profile_location.city_name AS city_name , spa_profile.contact_number as contact_number , spa_profile_services_category.fk_services_names as services_name , spa_profile.ranking as ranking , spa_profile_services_category.fk_category_name as category_name , (SELECT image_name FROM spa_profile_images WHERE fk_profile_id = spa_profile.id ORDER BY RAND() LIMIT 1) as image from spa_profile JOIN spa_profile_location ON spa_profile.id = spa_profile_location.fk_profile_id JOIN spa_profile_payment_info ON spa_profile.id = spa_profile_payment_info.fk_profile_id JOIN spa_profile_services_category ON spa_profile.id = spa_profile_services_category.fk_profile_id WHERE spa_profile_location.fk_area_id = ".$this->db->escape($area_id)." ORDER BY RAND()";
		return $this->db->query($sql_str)->num_rows();
	}
	public function getCityNameByAreaId($area_id)
	{
		$sql_str = "SELECT * FROM area WHERE id = ".$this->db->escape($area_id);
		return $this->db->query($sql_str)->row();
	}
	public function getReletedAreaByCitiesName($cities_name)
	{
		$sql_str = "SELECT * FROM area WHERE city_name = ".$this->db->escape($cities_name);
		return $this->db->query($sql_str)->result();
	}
	public function getAllCitiesDataByCountryName($country_name)
	{
		$sql_str = "SELECT * FROM city WHERE country_name = ".$this->db->escape($country_name);
		return $this->db->query($sql_str)->result();
	}
	public function getCityDataBYId($city_id)
	{
		$sql_str = "SELECT * FROM city WHERE id = ".$this->db->escape($city_id);
		return $this->db->query($sql_str)->row();
	}
	public function getAllprofilesByCitiesId($city_id , $limit , $offset = 0)
	{
		$sql_str = "SELECT spa_profile.id AS id , spa_profile.title AS title , spa_profile_location.city_name AS city_name , spa_profile.contact_number as contact_number , spa_profile_services_category.fk_services_names as services_name , spa_profile.ranking as ranking , spa_profile_services_category.fk_category_name as category_name , (SELECT image_name FROM spa_profile_images WHERE fk_profile_id = spa_profile.id ORDER BY RAND() LIMIT 1) as image from spa_profile JOIN spa_profile_location ON spa_profile.id = spa_profile_location.fk_profile_id JOIN spa_profile_payment_info ON spa_profile.id = spa_profile_payment_info.fk_profile_id JOIN spa_profile_services_category ON spa_profile.id = spa_profile_services_category.fk_profile_id WHERE spa_profile_location.fk_city_id = ".$this->db->escape($city_id);
		$sql_str .= " LIMIT $limit OFFSET $offset";
		return $this->db->query($sql_str)->result();
	}
	public function getAllProfileCountByCityId($city_id)
	{
		$sql_str = "SELECT spa_profile.id AS id , spa_profile.title AS title , spa_profile_location.city_name AS city_name , spa_profile.contact_number as contact_number , spa_profile_services_category.fk_services_names as services_name , spa_profile.ranking as ranking , spa_profile_services_category.fk_category_name as category_name , (SELECT image_name FROM spa_profile_images WHERE fk_profile_id = spa_profile.id ORDER BY RAND() LIMIT 1) as image from spa_profile JOIN spa_profile_location ON spa_profile.id = spa_profile_location.fk_profile_id JOIN spa_profile_payment_info ON spa_profile.id = spa_profile_payment_info.fk_profile_id JOIN spa_profile_services_category ON spa_profile.id = spa_profile_services_category.fk_profile_id WHERE spa_profile_location.fk_city_id = ".$this->db->escape($city_id);
		return $this->db->query($sql_str)->num_rows();
	}
	public function getCategoryById($category_id)
	{
		$sql_str = "SELECT * FROM category WHERE id = ".$this->db->escape($category_id);
		return $this->db->query($sql_str)->row();
	}
	public function getServicesInfoById($services_id)
	{
		$sql_str = "SELECT * FROM services WHERE id = ".$this->db->escape($services_id);
		return $this->db->query($sql_str)->row();
	}
	public function getCityInfoById($city_id)
	{
		$sql_str = "SELECT * FROM city WHERE id = ".$this->db->escape($city_id);
		return $this->db->query($sql_str)->row();
	}
	public function getAllServicesInfoForSearch()
	{
		$sql_str = "SELECT * FROM services ORDER BY RAND()";
		return $this->db->query($sql_str)->result();
	}
	public function getCityByCurrentLocationCountryName($country_name)
	{
		$sql_str = "SELECT * FROM city WHERE country_name = ".$this->db->escape($country_name);
		return $this->db->query($sql_str)->result();
	}
	public function getQuerySearchResult($data)
	{
		$sql_str = "SELECT spa_profile.id as id , spa_profile.title as title,spa_profile.contact_number as contact_number , spa_profile.description as description , spa_profile.ranking as ranking , spa_profile.email_id as email_id , spa_profile_location.fk_counry_id as counry_id , spa_profile_location.country_name as country_name , spa_profile_location.fk_city_id as city_id , spa_profile_location.city_name as city_name ,spa_profile_location.address as address , spa_profile_location.google_map_url as google_map_url ,spa_profile_location.fk_area_id as area_id , spa_profile_location.area_name as area_name , spa_profile_location.pincode as pincode , spa_profile_services_category.fk_category_id as category_id , spa_profile_services_category.fk_category_name as category_name , spa_profile_services_category.fk_services_id as services_id , spa_profile_services_category.fk_services_names as services_names FROM spa_profile JOIN spa_profile_location ON spa_profile.id = spa_profile_location.fk_profile_id JOIN spa_profile_payment_info ON spa_profile.id = spa_profile_payment_info.fk_profile_id JOIN spa_profile_services_category ON spa_profile.id = spa_profile_services_category.fk_profile_id WHERE  spa_profile_services_category.fk_category_name LIKE '%". $data['search_query'] ."%' OR spa_profile.title LIKE '%".$data['search_query']."%'";

		if ($data['city_id'] != 0) {
			$sql_str .= " AND spa_profile_location.fk_city_id = ".$this->db->escape($data['city_id']);
		}
		if ($data['services_id'] != 0 && $data['services_id'] == '') {
			$sql_str .= " AND spa_profile_services_category.fk_services_id = ".$this->db->escape($data['services_id']);
		}
		return $this->db->query($sql_str)->result();
	}
	public function getCategoryBySearchStr($search_query)
	{
		$sql_str = "SELECT * FROM category WHERE category_name LIKE '%" . $search_query . "%'";
		return $this->db->query($sql_str)->result();
	}
	public function getAllCategory()
	{
		$sql_str = "SELECT * FROM category";
		return $this->db->query($sql_str)->result();
	}
}