<?php 
class Tag_model extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function get_like($q){
        $sql = "SELECT nome FROM tag WHERE nome LIKE '$q%'";
        $res = $this->db->query($sql);
        $res = $res->result();
        $tags = array();

        foreach ($res as $tag) {
            $tags[] =  $tag->nome;
        }

        return $tags;
    }

    function get($id){

    }

    function get_by($by, $tag){
        $sql = "SELECT id FROM tag WHERE ".$by." like '".$tag."' LIMIT 1";
        $res = $this->db->query($sql);
        $res = $res->result();
        if(count($res) == 0){
            return -1;
        }
        return $res[0]->id;
    }
    
    function get_all(){
        $this->db->select('id, nome');
        $query = $this->db->get('tag');
        return $query->result();
    }

    function insert_tag($tag){
        $data_hj = date("Y-m-d H:i:s"); 
        $existe = $this->get_by("nome", $tag);
        
        if( $existe != -1){
            return $existe;
        }

        $values = array('nome' => $tag, 'data' => $data_hj, 'status' => 1);
        $this->db->insert('tag', $values); 
        return $this->db->insert_id();
    }
}

//ALTER TABLE post_cat ADD FOREIGN KEY ( cat_id ) REFERENCES categoria( categoria_id ) 
//http://www.w3schools.com/sql/sql_foreignkey.asp

?>