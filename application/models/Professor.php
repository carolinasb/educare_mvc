<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Professor extends Usuario{
  private $disciplina;

  function __construct() {
    parent ::__construct();
  }

  function getDisciplina() {
    return $this->disciplina;
  }

  function setDisciplina($disciplina) {
    $this->disciplina = $disciplina;
  }
  
  public function inserir() {
    parent::inserir();
    $data = array(
        'Disciplinas_idDisciplina' => $this->disciplina,
        'Usuarios_idUsuarios' => $this->getId()
    );
//    echo var_dump($data);
    $this->db->insert('Professores', $data);
  }

  public function validar($data) {
    $condition = "Email=" . "'" . $data['email'] . 
            "' AND " . "senha=" . "'" . $data['senha'] . "'";

    $this->db->select('*');
    $this->db->from('usuarios');
    $this->db->join('Professores', 'Usuarios_idUsuarios = usuarios.idUsuarios');
    $this->db->where($condition);
    $this->db->limit(1);
    $resultado = $this->db->get();
    
        //echo $this->db->last_query();
    foreach ($resultado->result_array() as $row)
      {
        $idProfessor = $row['idUsuarios'];
      }
////     while($linha = mysqli_fetch_array($resultado)){
////        $idProfessor = linha['idUsuarios'];
////     }
//     
    if ($resultado->num_rows() == 1) {
      return $idProfessor;
    }
     else {
      null;
    }
  }
}
