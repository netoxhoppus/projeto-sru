<?php

class Movimento_model extends CI_Model{   

    public function setEntrada($id){        

        $query = $this->db->query("select * from Usuario, Cardapio where Usuario.idUsuario = $id and Cardapio.data = date(now())");
        
        $dados['data'] = date('y-m-d');
        $dados['idUsuarios'] = $query->row()->idUsuario;
        $dados['idCardapio'] = $query->row()->idCardapio;
        $dados['idTipoMovimento'] = '1';
        $this->db->insert('Movimento', $dados);

        return $dados;    
        
        // return $query->row();        
    }

}

?>