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
		$sql_str = "SELECT spa_profile.id AS id , spa_profile.title AS title , spa_profile_location.city_name AS city_name from spa_profile JOIN spa_profile_location ON spa_profile.id = spa_profile_location.fk_profile_id JOIN spa_profile_payment_info ON spa_profile.id = spa_profile_payment_info.fk_profile_id JOIN spa_profile_services_category ON spa_profile.id = spa_profile_services_category.fk_profile_id WHERE spa_profile_payment_info.fk_payment_type_id = 1 AND spa_profile_payment_info.fk_payment_type_name = 'Paid' ";
		if ($this->checkProfilePresentInCity($current_location) > 3) {
			$sql_str .= " AND spa_profile_location.city_name = ".$this->db->escape($this->friend->get_Location()->city);
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
		$sql_str = "SELECT spa_profile.id AS id , spa_profile.title AS title , spa_profile_location.city_name AS city_name from spa_profile JOIN spa_profile_location ON spa_profile.id = spa_profile_location.fk_profile_id JOIN spa_profile_payment_info ON spa_profile.id = spa_profile_payment_info.fk_profile_id JOIN spa_profile_services_category ON spa_profile.id = spa_profile_services_category.fk_profile_id WHERE spa_profile_payment_info.fk_payment_type_id = 2 AND spa_profile_payment_info.fk_payment_type_name = 'Free' ";
		if ($this->checkProfilePresentInCity($current_location) > 3) {
			$sql_str .= " AND spa_profile_location.city_name = ".$this->db->escape($this->friend->get_Location()->city);
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
	public function getProfileByCategory($current_location , $category_id)
	{
		$sql_str = "SELECT spa_profile.id AS id , spa_profile.title AS title , spa_profile_location.city_name AS city_name , spa_profile.contact_number as contact_number , spa_profile_services_category.fk_category_name as category_name , spa_profile.ranking as ranking , spa_profile_services_category.fk_services_names as services_name from spa_profile JOIN spa_profile_location ON spa_profile.id = spa_profile_location.fk_profile_id JOIN spa_profile_payment_info ON spa_profile.id = spa_profile_payment_info.fk_profile_id JOIN spa_profile_services_category ON spa_profile.id = spa_profile_services_category.fk_profile_id WHERE spa_profile_services_category.fk_category_id = ".$this->db->escape($category_id);
		if ($this->getProfilePresentInCurrentLocationByCategory($current_location,$category_id) > 3) {
			$sql_str .= " AND spa_profile_location.city_name = ".$this->db->escape($current_location);
		}
		$sql_str .= " ORDER BY RAND()";
		return $this->db->query($sql_str)->result();
	}
	
}