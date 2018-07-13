<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assunto extends CI_Model{
  private $id;
  private $nome_assunto;
  private $idDisciplina;

  function __construct() {
    parent ::__construct();
  }
  public function inserir() {
    $data = array(
      'Nome_assunto'=> $this->nome_assunto,
      'Disciplinas_idDisciplina'=>$this->idDisciplina,
    );
    
    $this->db->insert('Assuntos', $data);
    $last_id = $this->db->insert_id();
    $this->id = $last_id;
  }
   
  public function selectAssuntos(){
    // retorna tds os assuntos 
    $this->db-> select('*');
     $this->db-> from('Assuntos');
     $resultado = $this->db->get();
  
  //monta um select com tds os assuntos cadastrados
    $options="<option value=''> Selecione um assunto</option>";
    foreach($resultado -> result_array() as $assunto ){
      $options .= "<option value='" .$assunto['idAssuntos']. "'>".$assunto['Nome_assunto']."</option>";
    }
    return $options;
  }
  
  function getId() {
    return $this->id;
  }
  function setId($id) {
    $this->id = $id;
  }
   function getAssunto() {
    return $this->nome_assunto;
  }
  function setAssunto($assunto) {
    $this->nome_assunto = $assunto;
  }
  function getIdDisciplina() {
    return $this->idDisciplina;
  }
  function setIdDisciplina($idDisciplina) {
    $this->idDisciplina = $idDisciplina;
  }
  
}

