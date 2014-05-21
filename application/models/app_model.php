<?php 
class App_model extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('gear_model');
        $this->load->model('tag_model');
        $this->load->model('estilo_model');
    }

    function get_total(){
        return $this->gear_model->total();
    }

    function get_limited_gears($tipo, $since, $qtd){
        if($tipo == "gears"){        
            $sql = "SELECT m.id, url, nome 
            FROM musica m JOIN tag t JOIN tags ts 
            ON m.id = ts.musica_id AND ts.tag_id = t.id 
            ORDER BY nome LIMIT $since,  $qtd";
        }else{
            $sql = "SELECT m.id, url, nome 
            FROM musica m JOIN estilo e ON m.estilo = e.id 
            ORDER BY nome LIMIT $since,  $qtd";
        }

        $res = $this->db->query($sql);
        $res = $res->result();
        return $res;
    }

    function get_gears_like($tag){
        $sql = "SELECT url, nome 
        FROM musica m JOIN tag t JOIN tags ts ON m.id = ts.musica_id AND ts.tag_id = t.id
        WHERE nome LIKE '$tag%'";
        $res = $this->db->query($sql);
        $res = $res->result();
        return $res;
    }


    function get_tag_like($q){
        return $this->tag_model->get_like($q);
    }

    function get_one($id){
        return $this->gear_model->get($id);
    }

    function get_by($tag){
        return $this->tag_model->get($id);
    }

    function get_estilos(){
        return $this->estilo_model->get_all();
    }

    function insert($url, $tag, $estilo, $sender){  
        $teste = explode("/", $url);
        
        if(count($teste) <= 3){
            return -1;
        }

        if($teste[2] == "www.youtube.com" || strpos($teste[3], 'watch?v=') !== false){
            $estilo_id  = $this->estilo_model->insert($estilo);      
            $musica_id  = $this->gear_model->insert($url, $estilo_id, $sender);    
            $tag_id     = $this->tag_model->insert_tag($tag);       
            return $this->insert_relashionship($musica_id, $tag_id);
        }
        
        return -1;
    }

    function insert_relashionship($musica_id, $tag_id){
        $values = array('musica_id' => $musica_id, 'tag_id' => $tag_id);
        $this->db->insert('tags', $values); 
        return $this->db->insert_id();
    }
}

//ALTER TABLE post_cat ADD FOREIGN KEY ( cat_id ) REFERENCES categoria( categoria_id ) 
//http://www.w3schools.com/sql/sql_foreignkey.asp

?>