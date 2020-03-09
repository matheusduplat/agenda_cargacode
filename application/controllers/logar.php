<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class logar extends CI_controller{

    public function autenticar(){
        $this->load->model("login_model");
        $login= $this->input->post("login");
        $senha= $this->input->post("senha");
        $usuario= $this->login_model->logar($login,$senha);
        
        
            if($usuario){
                $this->session->set_userdata("usuario_logado",$usuario);
                $this->session->set_flashdata("sucesso", "logado com sucesso");   
                redirect('/welcome/home');
               
            }else{
                
                
                $this->session->set_flashdata("danger","Usuario ou senha invalidar");
                redirect('/');
                                
            }

          
            
        }

    }