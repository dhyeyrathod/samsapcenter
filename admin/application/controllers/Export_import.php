<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod
*/
class Export_import extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('admin_id')) : redirect('account/login') ; endif ;
		$this->load->model('admin');
		$this->load->library('excel');
	}
	private function file_type_check($file_name)
	{
		if (PHPExcel_IOFactory::identify($file_name) == "Excel2007") {
			return true ;
		} else {	
			return false ;
		}
	}
	public function index()
	{
		$this->form_validation->set_rules('option','Excel type','required');	
		if ($this->input->server('REQUEST_METHOD') == 'POST' && $this->form_validation->run()) {

			if ($this->input->post('option') == "country") {
				$file_name = $_FILES['excel_sheet']['tmp_name'];
				if ($this->file_type_check($file_name)) {
					$respons = json_decode($this->country_import($file_name));
					if ($respons->status == "failed") {
						$data['error'] = $respons->message ; 
					} else {
						$data['success'] = $respons->message ;
					}
				} else {
					$data['error'] = "File is not in propar formate..!!";
				}
			}
			if ($this->input->post('option') == "city") {
				$file_name = $_FILES['excel_sheet']['tmp_name'];
				if ($this->file_type_check($file_name)) {
					$respons = json_decode($this->city_import($file_name));
					if ($respons->status == "failed") {
						$data['error'] = $respons->message ;
					} else {
						$data['success'] = $respons->message ;
					}
				} else {
					$data['error'] = "File is not in propar formate..!!";
				}
			}
			if ($this->input->post('option') == "area") {
				$file_name = $_FILES['excel_sheet']['tmp_name'];
				if ($this->file_type_check($file_name)) {
					// $respons = $this->area_import($file_name);
					echo "<pre>";
					print_r($this->area_import($file_name));
					exit();
				} else {
					echo "Not Validate";
				}
				exit();
			}
		}
		$data['empty'] = '';
		$this->load->view('export_import_view_form',$data);
	}
	private function country_import($filename)
	{
		$inputFileType = PHPExcel_IOFactory::identify($filename);
		$objReader = PHPExcel_IOFactory::createReader($inputFileType);
		$objReader->setReadDataOnly(true);
		$reader = $objReader->load($filename);

		$country_data = $this->counrty_data($reader);

		$response = $this->validate_country_excel_sheet($country_data);

		if ($response) {
			return json_encode(array("Validation"=>"Error" , "status"=>"failed" , 'message'=>$response));
			exit();
		}
		
		foreach ($country_data as $key => $country_value) {

			if (!$this->admin->checkCountryPrsentByName($country_value['country_name'])) {
				if ($this->admin->setCountryData($country_value['country_name']) === false) {
					break ;
					return json_encode(array("Validation"=>'Error',"status"=>"failed" , 'message'=>'error has been ocured'));
				} 
			}
		}
		return json_encode(array("Validation"=>"success" , "status"=>"success" , 'message'=>'excel sheet import successfully.!!'));
	}
	private function city_import($filename)
	{
		$inputFileType = PHPExcel_IOFactory::identify($filename);
		$objReader = PHPExcel_IOFactory::createReader($inputFileType);
		$objReader->setReadDataOnly(true);
		$reader = $objReader->load($filename);

		$city_data = $this->city_data($reader);

		$respons = $this->checkCityExcelValidation($city_data);

		if ($respons) {
			return json_encode(array("Validation"=>"Error","status"=>"failed",'message'=>$respons));
			exit();
		}

		foreach ($city_data as $key => $city_value) {

			if ($this->admin->checkCountryPrsentByName(rtrim($city_value['country_name'])) == 0) {
				$this->admin->setCountryData($city_value['country_name']);
			} 
			if ($this->admin->checkCityPresentByName(rtrim($city_value['city_name'])) == 0) {
				if ($this->admin->setCityByExcel($city_value) === false) {
					break ;
					return json_encode(array("Validation"=>'Error',"status"=>"failed" , 'message'=>'error has been ocured'));
				} 
			}	
		}
		return json_encode(array("Validation"=>"success" , "status"=>"success" , 'message'=>'excel sheet import successfully.!!'));
	}
	private function area_import($file_name)
	{
		$inputFileType = PHPExcel_IOFactory::identify($file_name);
		$objReader = PHPExcel_IOFactory::createReader($inputFileType);
		$objReader->setReadDataOnly(true);
		$reader = $objReader->load($file_name);

		$area_data = $this->area_data($reader);

		$respons = $this->areaExcelSheetValidation($area_data);

		if ($respons) {
			return json_encode(array("Validation"=>"Error","status"=>"failed",'message'=>$respons));
			exit();
		}

		foreach ($area_data as $key => $area_value) {

			if ($this->admin->checkCountryPrsentByName($area_value['country_name']) == 0) {
				$this->admin->setCountryData($area_value['country_name']);
			}
			if ($this->admin->checkCityPresentByName($area_value['city_name']) == 0) {
				$this->admin->setCityByExcel($area_value);
			}

			if ($this->admin->checkAreaPresentByname($area_value['area_name']) == 0) {
				if ($this->admin->setAreaByExcel($area_value) === false) {
					break ;
					return json_encode(array("Validation"=>'Error',"status"=>"failed" , 'message'=>'error has been ocured'));
				}
			}
		} 
		return json_encode(array("Validation"=>"success" , "status"=>"success" , 'message'=>'excel sheet import successfully.!!'));
	}


	private function city_data($reader)
	{	
		$objWorksheet = $reader->getActiveSheet();
		$city_main_array = array();
		$highestRow = $this->get_highest_row($reader);

		$excel_array = $objWorksheet->toArray();

		for($i = 1 ; $i < $highestRow - 1 ; $i++ )
		{
			$city['city_name'] = $excel_array[$i][0];
			$city['country_name'] = $excel_array[$i][1];
			$city['status'] = $excel_array[$i][2]; 
			array_push($city_main_array, $city);	
		}
		return $city_main_array ;
	}	
	private function counrty_data($reader)
	{
		$objWorksheet = $reader->getActiveSheet();
		$country_fields = $this->admin->getCountryTableField();
		$country_main_arrray = array();
		$highestRow = $this->get_highest_row($reader);

		$excel_array = $objWorksheet->toArray();

		for ($i = 1 ; $i < $highestRow - 1 ; $i++ )
		{	
			$country['country_name'] = $excel_array[$i][0];
			$country['statsu'] = "true";
			array_push($country_main_arrray, $country);	
		}
		return $country_main_arrray ;
	}
	private function area_data($reader)
	{
		$objWorksheet = $reader->getActiveSheet();
		$area_main_array = array();
		$highestRow = $this->get_highest_row($reader);

		$excel_array = $objWorksheet->toArray();

		for ($i = 1 ; $i < $highestRow - 1 ; $i++) { 

			$area['area_name'] = $excel_array[$i][0];
			$area['city_name'] = $excel_array[$i][1];
			$area['country_name'] = $excel_array[$i][2];
			$area['status'] = $excel_array[$i][3];
			$area['excel_code'] = $excel_array[$i][4];
			array_push($area_main_array,$area);	
		}
		return $area_main_array ;
	}
	private function validate_country_excel_sheet($country_data)
	{
		$error_message = "";

		foreach ($country_data as $key => $country_value) {
			
			$row = $key + 2 ;

			if (!count($country_value['country_name']) || is_numeric($country_value['country_name']) || $country_value['country_name'] == '') {
				$error_message .= "Error at Row : " . $row . " | Col : country_name | Country name is blank or not in correct formate."."<br>";
			}
		}
		return $error_message;
	}
	private function checkCityExcelValidation($city_data)
	{
		$error_message = "";

		foreach ($city_data as $key => $city_value) {

			$row = $key + 2 ;

			if (count($city_value['country_name']) == 0 || is_numeric($city_value['country_name'])) {
				$error_message .= "Error at Row : " . $row . " | Col : country_name | Country name is blank or not in correct formate."."<br>";
			} 

			if (count($city_value['city_name']) == 0 || is_numeric($city_value['city_name'])) {
				$error_message .= "Error at Row : " . $row . " | Col : city_name | City name is blank or not in correct formate."."<br>";
			}

			if (count($city_value['status']) == 0 || is_numeric($city_value['status'])) {
				$error_message .= "Error at Row : " . $row . " | Col : status | status is blank or not in correct formate."."<br>";
			}
		}
		return $error_message;
	}
	private function areaExcelSheetValidation($area_data)
	{
		$error_message = ""; 

		foreach ($area_data as $key => $area_value) {

			if (count($area_value['area_name']) == 0 || is_numeric($area_value['area_name'])) {
				$error_message .= "Error at Row : " . $row . " | Col : area_name | Area name is blank or not in correct formate."."<br>";
			}

			if (count($area_value['city_name']) == 0 || is_numeric($area_value['city_name'])) {
				$error_message .= "Error at Row : " . $row . " | Col : city_name | City name is blank or not in correct formate."."<br>";
			}

			if (count($area_value['country_name']) == 0 || is_numeric($area_value['country_name'])) {
				$error_message .= "Error at Row : " . $row . " | Col : country_name | Country name is blank or not in correct formate."."<br>";
			}

			if (count($area_value['status']) == 0 || is_numeric($area_value['status'])) {
				$error_message .= "Error at Row : " . $row . " | Col : status | status name is blank or not in correct formate."."<br>";
			}
		}
		return $error_message ;
	}







	private function get_highest_row($reader)
	{
		$objWorksheet = $reader->getActiveSheet();
		$excel_array = $objWorksheet->toArray();
		$count_array = array();
		foreach ($excel_array as $key => $value) {
			if ($value[0]) {
				array_push($count_array, $value[0]);
			} else {
				break ;
			}
		}
		return count($count_array) + 1;
	}
}