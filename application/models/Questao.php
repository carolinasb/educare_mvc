<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questao extends CI_Model{
  private $id;
  private $questao;
  private $num_texto;
  private $resposta;

  function __construct() {
    parent ::__construct();
  }
  
  public function inserir(){
    $data= array(
      'Pergunta'=> $this->questao,
      'Simulados_textos_idTexto'=> $this->num_texto,
      'Gabarito'=> $this->resposta
    );
    
    $this->db->insert('Questoes', $data);
    $last_id = $this->db->insert_id();
    $this->id = $last_id;
    return $last_id;
  }
  
  public function montaCheckbox() {
    // retorna tds as questões 
    $this->db-> select('*');
     $this->db-> from('Questoes');
     $resultado = $this->db->get();
  $options="";
  //monta um checkbox com tds os assuntos cadastrados
    foreach($resultado -> result_array() as $questoes ){
       $options .= "<input type='checkbox' name='questao[]' value='". 
               $questoes['IdPergunta']."'> (" .$questoes['IdPergunta']. ") - ".$questoes['Pergunta']."<br>";
    }
    return $options;
  }
  
 public function gerarQuestoes() {
   $this->db-> select('Pergunta');
   $this->db-> from('Questoes');
   $this->db->order_by('rand()');
   //$this->db->limit(2);
   $resultado = $this->db->get();
   return $resultado->result();
 }
  
  function getIdPergunta() {
    return $this->id;
  }
  function setId($id) {
    $this->id = $id;
  }
   function getQuestao() {
    return $this->questao;
  }
  function setQuestao($questao) {
    $this->questao = $questao;
  }
   function getNumTexto() {
    return $this->num_texto;
  }
  function setNumTexto($num_texto) {
    $this->num_texto = $num_texto;
  }
   function getResposta() {
    return $this->texto;
  }
  function setResposta($resposta) {
    $this->resposta = $resposta;
  }
  
} 

