<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod
*/
class Admin extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function loginAuthentication($email,$password)
	{
		$sql_str = "SELECT * FROM admin WHERE email_id = ".$this->db->escape($email)." AND password = ".$this->db->escape($password);
		return $this->db->query($sql_str)->num_rows();
	}
	public function adminSessionDataGet($email,$password)
	{
		$sql_str = "SELECT * FROM admin WHERE email_id = ".$this->db->escape($email)." AND password = ".$this->db->escape($password);
		return $this->db->query($sql_str)->row();
	}
	public function setCountryData($country_name,$country_id=0)
	{
		if ($country_id == 0) {
			$sql_str = "INSERT INTO country SET country_name = ".$this->db->escape($country_name).",created_date=NOW()";
			return $this->db->query($sql_str);
		} else {
			$sql_str = "UPDATE country SET country_name = ".$this->db->escape($country_name).",updated_date=NOW(),meta_title = NULL , meta_desscription = NULL , meta_keyword = NULL WHERE id = ".$this->db->escape($country_id);
			return $this->db->query($sql_str);
		}
	}
	public function getAllCountry()
	{
		$sql_str = "SELECT * FROM country";
		return $this->db->query($sql_str)->result();
	}
	public function deleteCountry($country_id)
	{
		$sql_str = "DELETE FROM country WHERE id = ".$this->db->escape($country_id);
		return $this->db->query($sql_str);
	}
	public function setCity($data , $city_id = 0)
	{
		$sql_str = "INSERT INTO city SET city_name = ".$this->db->escape($data['new_city']).", fk_country_id = ".$this->db->escape($data['country'])." , created_date = NOW() , status = true";
		return $this->db->query($sql_str);
	}
	public function getAllCity()
	{
		$sql_str = "SELECT city.id as id ,country.id as country_id, city.created_date , country_name , city_name FROM city INNER JOIN country ON city.fk_country_id = country.id";
		return $this->db->query($sql_str)->result();
	}
	public function deleteCity($city_id)
	{
		$sql_str = "DELETE FROM city WHERE id = ".$this->db->escape($city_id);
		return $this->db->query($sql_str);
	}
	public function checkCityPresent($country_id)
	{
		$sql_str = "SELECT * FROM city WHERE fk_country_id = ".$this->db->escape($country_id);
		return $this->db->query($sql_str)->num_rows();
	}
	public function getAllCityByCountryId($country_id)
	{
		$sql_str = "SELECT * FROM city WHERE fk_country_id = ".$this->db->escape($country_id);
		return $this->db->query($sql_str)->result();
	}
	public function setArea($data,$area_id = 0)
	{
		$sql_str = "INSERT INTO area SET area_name = ".$this->db->escape($data['area_name']).",fk_city_id = ".$this->db->escape($data['city']).",fk_country_id = ".$this->db->escape($data['country']).",created_date = NOW() , status = true";
		return $this->db->query($sql_str);
	}
	public function getAllArea()
	{
		$sql_str = "SELECT area.id as id , area.area_name as area_name , area.created_date as created_date , city.city_name as city_name , country.country_name as country_name , CASE WHEN area.status = TRUE THEN 'active' ELSE 'deactive' END AS status FROM area JOIN city ON area.fk_city_id = city.id JOIN country ON area.fk_country_id = country.id";
		return $this->db->query($sql_str)->result();
	}
	public function deleteArea($area_id)
	{
		$sql_str = "DELETE FROM area WHERE id = ".$this->db->escape($area_id);
		return $this->db->query($sql_str);
	}
	public function setCategory($data)
	{
		$sql_str = "INSERT INTO category SET category_name = ".$this->db->escape($data['category_name']).",description = ".$this->db->escape($data['description']).",status = ".$this->db->escape($data['status']).",created_date = NOW()";
		return $this->db->query($sql_str);
	}
	public function checkCategoryPresent($category_name)
	{
		$sql_str = "SELECT * FROM category WHERE category_name = ".$this->db->escape($category_name);
		return $this->db->query($sql_str)->num_rows();
	}
	public function getAllCategory()
	{
		$sql_str = "SELECT id , category_name , description , created_date ,  CASE WHEN category.status = TRUE THEN 'active' ELSE 'deactive' END AS status  FROM category";
		return $this->db->query($sql_str)->result();
	}
	public function deleteCategory($category_id)
	{
		$sql_str = "DELETE FROM category WHERE id = ".$this->db->escape($category_id);
		return $this->db->query($sql_str);
	}
	public function checkCategoryPresentById($category_id)
	{
		$sql_str = "SELECT * FROM category WHERE id = ".$this->db->escape($category_id);
		return $this->db->query($sql_str)->num_rows();
	}
	public function getCategoryById($category_id)
	{
		$sql_str = "SELECT id , category_name , description , created_date , CASE WHEN category.status = TRUE THEN 'active' ELSE 'deactive' END AS status FROM category WHERE id = ".$this->db->escape($category_id);
		return $this->db->query($sql_str)->row();
	}
	public function checkservicesPresent($services_name)
	{
		$sql_str = "SELECT * FROM services WHERE services_name = ".$this->db->escape($services_name);
		return $this->db->query($sql_str)->num_rows();
	}
	public function getAllservices()
	{
		$sql_str = "SELECT id , services_name , description , created_date ,  CASE WHEN services.status = TRUE THEN 'active' ELSE 'deactive' END AS status  FROM services";
		return $this->db->query($sql_str)->result();
	}
	public function deleteservices($services_id)
	{
		$sql_str = "DELETE FROM services WHERE id = ".$this->db->escape($services_id);
		return $this->db->query($sql_str);
	}
	public function checkservicesPresentById($services_id)
	{
		$sql_str = "SELECT * FROM services WHERE id = ".$this->db->escape($services_id);
		return $this->db->query($sql_str)->num_rows();
	}
	public function getservicesById($services_id)
	{
		$sql_str = "SELECT id , services_name , description , created_date , CASE WHEN services.status = TRUE THEN 'active' ELSE 'deactive' END AS status FROM services WHERE id = ".$this->db->escape($services_id);
		return $this->db->query($sql_str)->row();
	}
	public function setservices($data)
	{
		$sql_str = "INSERT INTO services SET services_name = ".$this->db->escape($data['services_name']).",description = ".$this->db->escape($data['description']).",status = ".$this->db->escape($data['status']).",created_date = NOW()";
		return $this->db->query($sql_str);
	}
}