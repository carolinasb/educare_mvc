<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno extends Usuario {
  private $status;

  function __construct() {
    parent ::__construct();
  }

  function getStatus() {
    return $this->status;
  }

  function setStatus($status) {
    $this->status = $status;
  }
  
  public function inserir() {
    parent::inserir();
    $data = array(
        'Status' => $this->status,
        'Usuarios_idUsuarios' => $this->getId()
    );
//    echo var_dump($data);
    $this->db->insert('Aluno', $data);
  }

  public function validar($data) {
    $condition = "Email=" . "'" . $data['email'] 
            . "' AND " . "senha=" . "'" . $data['senha'] . "'";

    $this->db->select('*');
    $this->db->from('usuarios');
    $this->db->join('aluno', 'Usuarios_idUsuarios = usuarios.idUsuarios');
    $this->db->where($condition);
    $this->db->limit(1);
    $resultado = $this->db->get();
    
  //echo $this->db->last_query();
    
    foreach ($resultado->result_array() as $row)
      {
        $idAluno = $row['idUsuarios'];
     }
   if ($resultado->num_rows() == 1) {
      return $idAluno;
    }else {
      null;
    }
  }
}

