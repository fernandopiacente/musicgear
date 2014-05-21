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
		$videos = $this->app_model->get_limited_gears("gears",1, 10);
		
		if(count($videos) == 0){
			$this->set_msg(get_tag("strong","", "Nenhum resultado."));
			redirect(base_url());	
		}

		$data['conteudo'] = $videos;		
		$this->load->view('comum/header');
		$this->load->view('comum/menu');
		$this->load->view('app/gears', $data);
		$this->load->view('comum/loadjs');
		$this->load->view('comum/rodape');	
	}

	public function estilos(){
		$videos = $this->app_model->get_limited_gears("estilos",1, 10);
		
		if(count($videos) == 0){
			$this->set_msg(get_tag("strong","", "Nenhum resultado."));
			redirect(base_url());	
		}
	
		$data['conteudo'] = $videos;		
		$this->load->view('comum/header');
		$this->load->view('comum/menu');
		$this->load->view('app/gears', $data);
		$this->load->view('comum/loadjs');
		$this->load->view('comum/rodape');	
	}

	public function vermais(){
		$tipo = $this->input->post("tipo");
		$videos = $this->app_model->get_limited_gears($tipo, 1, 10);
		
		if(count($videos) == 0){
			echo json_encode(array());
		}

		$embed = array();

		foreach ($videos as $v) {		
			$embed[$v->nome][] = get_embed($v->url);
		}

		echo json_encode($embed);
	}

	public function set_msg($msg){
		$this->session->set_flashdata('res', $msg);
	}
}

