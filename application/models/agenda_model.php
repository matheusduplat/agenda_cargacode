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

    $sql="select a.id_agend,a.nome_agend ,a.volume, a.data_agend, a.id_forn, ar.nome_area from agenda a inner join area ar using(id_area) order by data_agend;";
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

    public function salvar(){
        $id = $this->input->post('id_agend');
        
        $agenda = array(

          "nome_agend"=> $this->input->post("nome"),
          "data_agend"=> $this->input->post("data"),
          "id_forn"=> $this->input->post("cod_forne")     


        );

        $this->db->where('id_agend',$id);
        return $this->db->update('agenda',$agenda);


    }
    

}