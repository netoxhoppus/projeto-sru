<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model{    
    
    // Metodo para listar todos os usuários da tabela Usuario do banco SRU
    public function listarUsuariosTodos(){
        return $this->db->get('Usuario')->result_array();
    }

    // Metodo para listar os usuários por nome utilizado pela classe controler pesquisaUsuario
    public function listarUsuariosNome($lista){

        if(empty($lista))
            return array();
        
        $lista = $this->input->post('busca');

        $this->db->like('nome', $lista);

        $query = $this->db->get('Usuario');

        return $query->result_array();

    }
    
}

?>