<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class login_model extends CI_Model{ 

    public function __construct(){
        $this->load->database();
    }



public function logar($login,$senha){
               
    $this->db->where("login", $login);
    $this->db->where("senha", $senha);
    $usuario= $this->db->get("usuario")->row_array();
    return $usuario;
   



}

}
