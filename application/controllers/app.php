<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class App extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('app_model');
		$this->load->helper('util');	
		//$this->load->library('libyoutube');
	}

	public function index(){	
		$this->load->view('comum/header');
		$this->load->view('comum/menu_home');
		$this->load->view('app/index');
		$this->load->view('comum/loadjs');
		$this->load->view('comum/rodape');
	}

	public function ouvir(){
		if(count($_POST) > 0){
			$feel 	= $this->input->post("gear");
			$videos = $this->app_model->get_gears_like($feel);
			$embed 	= array();

			if(count($videos) == 0){
				$this->set_msg(get_tag("strong","", "Nenhum resultado."));
				redirect(base_url()."gears");	
			}

			foreach ($videos as $v) {		
				$embed[][$v->nome] = get_embed($v->url);
			}

			$data['videos'] = $embed;
			$data['titulo'] = strtoupper($feel);	

			$this->load->view('comum/header');
			$this->load->view('comum/menu');
			$this->load->view('app/ouvindo', $data);
			$this->load->view('comum/loadjs');
			$this->load->view('comum/rodape');	

		}else{
			$estilos = $this->app_model->get_estilos();
			$data['estilos'] = $estilos;
			$this->load->view('comum/header');
			$this->load->view('comum/menu');
			$this->load->view('app/ouvir', $data);
			$this->load->view('comum/loadjs');
			$this->load->view('comum/rodape');	
		}
	}
	public function set_msg($msg){
		$this->session->set_flashdata('res', $msg);
	}
}

