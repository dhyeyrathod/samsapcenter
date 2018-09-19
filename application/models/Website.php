<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod
*/
class Website extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function getRandomCategoryLimitedBySix($limit = 6)
	{
		$sql_str = "SELECT * FROM category ORDER BY RAND() LIMIT ".$this->db->escape($limit);
		return $this->db->query($sql_str)->result();
	}
	public function getRandomAreaLimitedten($limit = 10)
	{
		$sql_str = "SELECT * FROM area ORDER BY RAND() LIMIT ".$this->db->escape($limit);
		return $this->db->query($sql_str)->result();
	}
	public function getRandomServicesLimitedten($limit = 10)
	{
		$sql_str = "SELECT * FROM services ORDER BY RAND() LIMIT ".$this->db->escape($limit);
		return $this->db->query($sql_str)->result();
	}
	public function getPaidProfile($limit = 6)
	{
		$sql_str = "SELECT spa_profile.id AS id , spa_profile.title AS title , spa_profile_location.city_name AS city_name from spa_profile JOIN spa_profile_location ON spa_profile.id = spa_profile_location.fk_profile_id JOIN spa_profile_payment_info ON spa_profile.id = spa_profile_payment_info.fk_profile_id JOIN spa_profile_services_category ON spa_profile.id = spa_profile_services_category.fk_profile_id WHERE spa_profile_payment_info.fk_payment_type_id = 1 AND spa_profile_payment_info.fk_payment_type_name = 'Paid' ORDER BY RAND() LIMIT $limit";
		return $this->db->query($sql_str)->result();
	}
	public function getFreeProfiles($limit = 9)
	{
		$sql_str = "SELECT spa_profile.id AS id , spa_profile.title AS title , spa_profile_location.city_name AS city_name from spa_profile JOIN spa_profile_location ON spa_profile.id = spa_profile_location.fk_profile_id JOIN spa_profile_payment_info ON spa_profile.id = spa_profile_payment_info.fk_profile_id JOIN spa_profile_services_category ON spa_profile.id = spa_profile_services_category.fk_profile_id WHERE spa_profile_payment_info.fk_payment_type_id = 2 AND spa_profile_payment_info.fk_payment_type_name = 'Free' ORDER BY RAND() LIMIT $limit";
		return $this->db->query($sql_str)->result();
	}
	public function setMembers($data)
	{
		$sql_str = "INSERT INTO members SET username = ".$this->db->escape($data['username']).", password = ".$this->db->escape($data['password']).",contact_number = ".$this->db->escape($data['contact']).",email = ".$this->db->escape($data['email']).",created_date = NOW() , status = TRUE";
		return $this->db->query($sql_str);
	}
}