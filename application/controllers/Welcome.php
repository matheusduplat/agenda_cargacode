<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('index');
	}



	public function home(){
		$this->load->model("agenda_model");		
		$data["agenda"]= $this->agenda_model->listaAgendados1();    
		$this->load->view('home', $data);
	  }


public function agenda(){
	$this->load->view('agendar');
}

}