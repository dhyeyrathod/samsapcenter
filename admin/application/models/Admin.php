<?php 
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
}