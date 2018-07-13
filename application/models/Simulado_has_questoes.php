<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simulado_has_questoes extends Simulado{
  private $idSimulado;
  private $idQuestao;

  function __construct() {
    parent ::__construct();
  }
  
  public function inserir(){
    $data = array(
        'Simulados_idSimulado'=> $this->idSimulado,
        'Questoes_idPergunta'=>$this->idQuestao
    );
   $this->db->insert('Simulados_has_questoes', $data);
  }
  
  function getIdSimulado(){
    return $this->idSimulado;
  }
  
  function setIdSimulado($id) {
    $this->idSimulado = $id;
  }
  
  function getIdQuestao(){
    return $this->idQuestao;
  }
  
  function setIdQuestao($idQuestao) {
    $this->idQuestao = $idQuestao;
  }
}
