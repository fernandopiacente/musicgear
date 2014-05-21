<?php 
class Estilo_model extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function get($id){

    }

    function get_by($by, $estilo){
        $sql = "SELECT id, nome 
        FROM estilo WHERE ".$by." like '".$estilo."' LIMIT 1";
        $res = $this->db->query($sql);
        $res = $res->result();
        if(count($res) == 0){
            return -1;
        }
        return $res[0]->id;
    }
    
    function get_all(){
        $this->db->select('id, nome');
        $query = $this->db->get('estilo');
        return $query->result();
    }

    function insert($estilo){
        $data = date("Y-m-d H:i:s"); 

        $existe = $this->get_by("nome", $estilo);
        if($existe != -1){
            return $existe;
        }

        $values = array('nome' => $estilo);
        $this->db->insert('estilo', $values); 
        return $this->db->insert_id();
    }
}

//ALTER TABLE post_cat ADD FOREIGN KEY ( cat_id ) REFERENCES categoria( categoria_id ) 
//http://www.w3schools.com/sql/sql_foreignkey.asp

?>