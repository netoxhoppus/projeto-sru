<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Relatorios_controller extends CI_Controller {
    
    public function index() {                
       
    }

    public function relatorios() {

        $this->load->model('relatorios_model');

        $data['titulo'] = "Relatórios"; //titulo da página
        $this->template->show('relatorios/relatorios', $data);
    }
    
    public function resultado() {

        $this->load->model('relatorios_model');

        if($_POST['ConsultaPorGenero'] != ""){

            $data['listagem'] = $this->relatorios_model->consultaPorGenero($_POST['dataHoraI'], $_POST['dataHoraF']);
        }
    
        $data['titulo'] = "Resultado Relatório"; //titulo da página
       // $this->template->show('relatorios/resultadoRelatorio', $data);
       $this->template->show('usuario/teste', $data);
    }
}

