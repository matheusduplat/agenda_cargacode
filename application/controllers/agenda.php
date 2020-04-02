<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class agenda extends CI_Controller{

    public function novo(){

        $agendar= array(
            
          "nome_agend"=> $this->input->post("nome"),
          "data_agend"=> $this->input->post("data"),
          "id_forn"=> $this->input->post("cod_forne"),
          "id_area"=> $this->input->post("area"),
          "volume"=>$this->input->post("volume"),      

        );

        $this->load->model("agenda_model");
        $this->agenda_model->cadastrar($agendar);
        $this->load->view("relatorio_agendar");


    }

    public function delete(){
      $agenda =$this->input->get("id");		
      $this->load->model("agenda_model");
      $this->agenda_model->delete($agenda);
      redirect('/agenda/agendados?#');
  
    }
    public function agendados(){
      $this->load->model("agenda_model");		
      $data["agenda"]= $this->agenda_model->listaAgendados();    
      $this->load->view('agendados', $data);
    }

    public function detalhe(){
      $id= $this->input->get("id");
      $this->load->model("agenda_model");
      $agenda = $this->agenda_model->retorna($id);
      $dados = array("agenda"=> $agenda);
      $this->load->view("deletar_agendados",$dados);
  
  
    }

    public function editar(){
      $id= $this->input->get("id");
      $this->load->model("agenda_model");
      $agenda = $this->agenda_model->retorna($id);
      $dados = array("agenda"=> $agenda);
      $this->load->view("editar",$dados);


    }

    public function salvar($id){

      $this->load->model("agenda_model");
      $this->agenda_model->salvar($id);
      $this->session->set_flashdata('success','Produto alterado com sucesso');
      redirect('/agenda/agendados');


    }
  
public function pesquisar(){
  $this->load->model("agenda_model");	 
		$data["agenda"]= $this->agenda_model->pesquisar();    
		$this->load->view('agendados', $data);

}

public function filtro(){
  $this->load->model("agenda_model");	 
		$data["agenda"]= $this->agenda_model->filtro();    
		$this->load->view('home', $data);

}

public function filtro2(){
  $this->load->model("agenda_model");	 
		$data["agenda"]= $this->agenda_model->filtro2();    
		$this->load->view('home', $data);

}

}