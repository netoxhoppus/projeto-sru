<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {
	
	public function index()	{

	// Carrega somente a View BuscarUsuário
	// $this->load->view('BuscarUsuario');
            
        // Faz a leitura do Modelo Usuario_model	
	$this->load->model('usuario_model');

	// Carrega o model e apelida o model
        $this->load->model('acesso_model', 'colaboradores');

	// Faz a leitura do Modelo Cardapio_model	
	$this->load->model('cardapio_model');
                
	// dados['usuarios'] irá receber a consulta feita no método listarUsuariosTodos que está
	//localizado no model Usuario_model
	// $dados['usuarios'] = $this->usuario_model->listarUsuariosTodos();

	//dados['cardapio'] irá receber a consulta feita no método listarCardapioTodos que está
	//localizado no model Cardapio_model
	$dados['cardapio'] = $this->cardapio_model->listarCardapioTodos();
		
        //Pega dados do model
	$dados['colaboradores'] = $this->colaboradores->getColaboradores();
		
	// Carrega todos os templates dentro da View
	$this->template->show('home', $dados); 
        
	}  

    // Função que buscará o metodo listarNome da model Usuario_model
    public function pesquisaUsuario() {

        $this->load->model('usuario_model');

        $dados['listagem'] = $this->usuario_model->listarUsuariosNome($_POST);

        $this->template->show('home', $dados);
    }

    public function pesquisaColaborador() {

        $this->load->model('acesso_model');

        $dados['listagem'] = $this->acesso_model->listarColaborador($_POST);

        $this->template->show('home', $dados);
    }

}
