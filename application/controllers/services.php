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

	public function get_more(){
		$tipo  = $this->input->post("tipo");
		$since = $this->input->post("since");

		$videos = $this->app_model->get_limited_gears($tipo, $since, 6);
		
		if(count($videos) == 0){
			echo "-1";
			exit;
		}

		$conteudo = array();

		foreach ($videos as $v) {
			$embed = get_embed($v->url);
			$v->url = $embed;
			$conteudo[$v->nome][] = $v;
		}
		echo json_encode($conteudo);
	}
}