<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questoes_has_assuntos extends Questao{
  private $idPergunta;
  private $idAssunto;
  
  function __construct() {
    parent ::__construct();
  }
  public function inserirIds(){
    $data= array(
        'Questoes_idPergunta'=> $this->idPergunta,
      'Assuntos_idAssuntos'=> $this->idAssunto,
    );
    
     $this->db->insert('Questoes_has_assuntos', $data);
  }
  
  public function getIdAssunto() {
    return $this->idAssunto;
  }
  function setIdAssunto($idAssunto) {
    $this->idAssunto = $idAssunto;
  }
   public function getIdPergunta() {
    return $this->idPergunta;
  }
  function setIdPergunta($idPergunta) {
    $this->idPergunta = $idPergunta;
  }
}
 