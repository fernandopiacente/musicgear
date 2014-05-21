<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper('util');
		$this->load->model('app_model');
	}

	public function get_gear(){
		if (isset($_GET['query'])) {
			$query = $_GET['query'];
			$like = $this->app_model->get_tag_like($query);			
			echo json_encode ($like);
		}
	}
}