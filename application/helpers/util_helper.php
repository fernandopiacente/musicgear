<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('test_method')){
	function get_option($id, $nome){
		return "<option value='$id'>$nome</option>";
	}

	function get_embed($url){
		preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
		$id = $matches[1];
		$width = '250';
		$height = '150';
		return '<object width="' . $width . '" height="' . $height .
		'"><param name="movie" value="http://www.youtube.com/v/' . $id . 
		'&amp;hl=en_US&amp;fs=1?rel=0"></param><param name="allowFullScreen" value="true">
		</param><param name="allowscriptaccess" value="always">
		</param><embed src="http://www.youtube.com/v/' .
		$id . '&amp;hl=en_US&amp;fs=1?rel=0" type="application/x-shockwave-flash" 
		allowscriptaccess="always" allowfullscreen="true" 
		width="' . $width . '" height="' . $height . '">
		</embed>
		</object>';
	}
	
	function get_idade($data){
		$date = new DateTime($data);
		$now = new DateTime();
		$interval = $now->diff($date);
		return $interval->y;
	}

	function get_human_data($data, $dia, $mes, $ano){
		$data = get_brdata($data);
		$data = explode(" ", $data);
		$data = explode("-", $data[0]);
		
		$novo = "";
		if($dia){
			$novo = $data[0]." de ";
		}
		if($mes){
			$mes = get_mes($data[1]);
			$novo .= $mes." de ";
		}
		if($ano){
			$novo .= $data[2]."";
		}

		echo $novo;
	}

	function get_mes($num){
		switch ($num) {
			case 1: 	return "Janeiro"; 	break;
			case 2: 	return "Fevereiro"; break;
			case 3: 	return "MarÃ§o"; 	break;
			case 4: 	return "Abril"; 	break;
			case 5: 	return "Maio"; 		break;
			case 6: 	return "Junho"; 	break;
			case 7: 	return "Julho"; 	break;
			case 8: 	return "Agosto"; 	break;
			case 9: 	return "Setembro"; 	break;
			case 10: 	return "Outubro"; 	break;
			case 11: 	return "Novembro"; 	break;
			case 12: 	return "Dezembro"; 	break;
			default: 	return "Janeiro"; 	break;
		}
	}
	function get_brdata($datetime){
		$data = date("d-m-Y", strtotime($datetime));
		return $data;
	}

	function get_link($to, $c, $n) {
		//espera: $to = link; $c = class, $n = nome
		return "<a href='".$to."' class='".$c."'>$n</a>";
	}   

	function get_tag($tag, $class, $nome){
		return "<$tag class='$class'>$nome</$tag>";
	}

	function get_img($class, $nome){
		return "<img src='".IMG."$nome' class='$class' />";
	}

	function get_js($nome){
		$caminho = JS."carica.me/plugins/".$nome;
		return '<script type="text/javascript" src="'.$caminho.'"></script>';
	}

	function get_url_atual() {
		$t = $_SERVER['REQUEST_URI'];
		$s = explode("/", $t);
		return $s;
	}

	function get_estado($sigla){
		switch ($sigla) {
			case "AC": return "Acre"; break;
			case "AL": return "Alagoas"; break;
			case "AP": return "Amap&aacute;"; break;
			case "AM": return "Amazonas"; break;
			case "BA": return "Bahia"; break;
			case "CE": return "Cear&aacute;"; break;
			case "DF": return "Distrito Federal"; break;
			case "ES": return "Esp&iacute;rito Santo"; break;
			case "GO": return "Goi&aacute;s"; break;
			case "MA": return "Maranh&atilde;o"; break;
			case "MT": return "Mato Grosso"; break;
			case "MS": return "Mato Grosso do Sul"; break;
			case "MG": return "Minas Gerais"; break;
			case "PA": return "Par&aacute;"; break;
			case "PB": return "Para&iacute;ba"; break;
			case "PR": return "Paran&aacute;"; break;
			case "PE": return "Pernambuco"; break;
			case "PI": return "Piau&iacute;"; break;
			case "RJ": return "Rio de Janeiro"; break;
			case "RN": return "Rio Grande do Norte"; break;
			case "RS": return "Rio Grande do Sul"; break;
			case "RO": return "Rond&ocirc;nia"; break;
			case "RR": return "Roraima"; break;
			case "SC": return "Santa Catarina"; break;
			case "SP": return "S&atilde;o Paulo"; break;
			case "SE": return "Sergipe"; break;
			case "TO": return "Tocantins"; break;
		}
	}

	function get_plural($palavra){
		return $palavra."s";
	}
}

//doc: http://stackoverflow.com/questions/804399/codeigniter-create-new-helper
?>