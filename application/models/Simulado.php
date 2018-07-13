<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simulado extends CI_Model{
  private $idSimulado;
  private $data;

  function __construct() {
    parent ::__construct();
  }
  public function inserir(){
    $data = array(
        'Data_criacao'=> $this->data
    );
    $this->db->insert('Simulados', $data);
    $last_id = $this->db->insert_id();
    $this->idSimulado = $last_id;
    return $last_id;
  }
  
   function getIdSimulado(){
    return $this->idSimulado;
  }
  function setIdSimulado($id) {
    $this->idSimulado = $id;
  }
   function getData() {
    return $this->data;
  }

  function setData($data) {
    $this->data = $data;
  }
}

