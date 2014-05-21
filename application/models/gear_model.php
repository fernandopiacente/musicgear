<?php 
class Gear_model extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function total(){
        $sql = "SELECT COUNT(DISTINCT id) AS total FROM musica";
        $res = $this->db->query($sql);
        $res = $res->result();
        return $res[0]->total;
    }

    function get($id){

    }

    function get_by($tag){

    }

    function insert($url, $estilo, $sender){  
        $data_atual = date("Y-m-d H:i:s"); 
        $data = array(
            "url"    => $url,
            "data"   => $data_atual,
            "estilo" => $estilo,
            "sender" => $sender
            );

        $this->db->insert('musica', $data);
        return $this->db->insert_id();
    }
}

//ALTER TABLE post_cat ADD FOREIGN KEY ( cat_id ) REFERENCES categoria( categoria_id ) 
//http://www.w3schools.com/sql/sql_foreignkey.asp

?>