<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @author Jay Rathod
*/
class Members extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function dashboard()
	{
		$this->load->view('dashboard_view');
	}
}