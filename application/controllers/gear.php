<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gear extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('app_model');
		$this->load->helper('util');
	}

	public function add(){
		$url 	= $this->input->post("url");
		$tag 	= $this->input->post("tag");
		$estilo = $this->input->post("estilo");
		$sender = $this->input->post("sender");
		$res 	= $this->app_model->insert($url, $tag, $estilo, $sender);

		if($res > 0){
			$this->set_msg(get_tag("strong","", "Salvo com sucesso. "));
			redirect(base_url());
		}else{
			$this->set_msg(get_tag("strong","", "ERRO: Informe um vídeo válido. "));
			redirect(base_url());
		}
	}

	public function gears(){
		$videos = $this->app_model->get_limited_gears("gears",1, 6);
		
		if(count($videos) == 0){
			$this->set_msg(get_tag("strong","", "Nenhum resultado."));
			redirect(base_url());	
		}

		$conteudo = array();
		foreach ($videos as $v) {
			$embed = get_embed($v->url);
			$v->url = $embed;
			$conteudo[$v->nome][] = $v;
		}
		$data['conteudo'] = $conteudo;
		$data['tipo'] 	  = "gears";	
		$this->load->view('comum/header');
		$this->load->view('comum/menu');
		$this->load->view('app/gears', $data);
		$this->load->view('comum/loadjs');
		$this->load->view('comum/rodape');	
	}

	public function estilos($t){
		echo $t;
		$videos = $this->app_model->get_limited_gears("estilos",1, 6);
		
		if(count($videos) == 0){
			$this->set_msg(get_tag("strong","", "Nenhum resultado."));
			redirect(base_url());	
		}
		
		$conteudo = array();
		foreach ($videos as $v) {
			$embed = get_embed($v->url);
			$v->url = $embed;
			$conteudo[$v->nome][] = $v;
		}

		$data['conteudo'] = $conteudo;	
		$data['tipo'] 	  = "estilos";		
		$this->load->view('comum/header');
		$this->load->view('comum/menu');
		$this->load->view('app/gears', $data);
		$this->load->view('comum/loadjs');
		$this->load->view('comum/rodape');	
	}

	public function set_msg($msg){
		$this->session->set_flashdata('res', $msg);
	}
}

