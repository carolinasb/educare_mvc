<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Model {
  private $id;
  private $nome;
  private $cpf;
  private $email;
  private $senha;
  private $telefone;
  private $disciplina;

  function __construct() {
    parent ::__construct();
  }
  
  public function inserir() {
    $data = array(
        'Nome_completo' => $this->nome,
        'cpf' => $this->cpf,
        'Email' => $this->email,
        'senha' => $this->senha,
        'telefone' => $this->telefone
    );

    //echo var_dump($data);
    //$sql = $this->db->set($data)->get_compiled_insert('Usuarios');
    //echo $sql;
    $this->db->insert('Usuarios', $data);
    $last_id = $this->db->insert_id();
    $this->id = $last_id;
  }
  
  function getId() {
    return $this->id;
  }

  function setId($id) {
    $this->id = $id;
  }

  function getNome() {
    return $this->nome;
  }

  function getCpf() {
    return $this->cpf;
  }

  function getEmail() {
    return $this->email;
  }

  function getSenha() {
    return $this->senha;
  }

  function getTelefone() {
    return $this->telefone;
  }

  function getDisciplina() {
    return $this->disciplina;
  }

  function setNome($nome) {
    $this->nome = $nome;
  }

  function setCpf($cpf) {
    $this->cpf = $cpf;
  }

  function setEmail($email) {
    $this->email = $email;
  }

  function setSenha($senha) {
    $this->senha = $senha;
  }

  function setTelefone($telefone) {
    $this->telefone = $telefone;
  }
}
