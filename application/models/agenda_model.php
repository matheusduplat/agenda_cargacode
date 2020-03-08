<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class agenda_model extends CI_Model{ 

    public function __construct(){
        $this->load->database();
    }


public function cadastrar($agendar){
    
    $this->db->insert("agenda",$agendar);

}
public function listaAgendados(){

    $sql="select id_agend,nome_agend , data_agend, id_forn from agenda order by data_agend;";
    /*$sql="select * from consulta";*/
    $query= $this->db->query($sql);
    return $query->result_array();
}

public function delete($id){
    $this->db->where('id_agend',$id);
    return $this->db->delete('agenda');
}
public function retorna($id){
   
    $sql="select * from agenda where id_agend = $id";
    $query=$this->db->query($sql);
    return $query->row_array();

    }


}