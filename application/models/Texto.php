<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Texto extends CI_Model{
  private $id;
  private $titulo;
  private $autor;
  private $texto;
  
  function __construct() {
    parent ::__construct();
  }
  
  public function inserir() {
    $data= array(
        'Titulo'=> $this->titulo,
        'Autor'=> $this->autor,
        'Texto'=> $this->texto
    );
    
    $this->db->insert('Simulados_textos', $data);
    $last_id = $this->db->insert_id();
    $this->id = $last_id;
    return $last_id;
  }
  
  public function selectTextos(){
    // retorna tds os textos 
    $this->db-> select('*');
     $this->db-> from('simulados_textos');
     $resultado = $this->db->get();
  
  //monta um select com tds os textos cadastrados
    $options="<option value=''> Selecione um texto</option>";
    foreach($resultado -> result_array() as $texto ){
      $options .= "<option value='" .$texto['idTexto']. "'>".$texto['Titulo']."</option>";
    }
    return $options;
  }
  
  function getIdTexto() {
    return $this->id;
  }
  function setId($id) {
    $this->id = $id;
  }
   function getTitulo() {
    return $this->titulo;
  }
  function setTitulo($titulo) {
    $this->titulo = $titulo;
  }
  function getAutor() {
    return $this->autor;
  }
  function setAutor($autor) {
    $this->autor = $autor;
  }
   function getTexto() {
    return $this->texto;
  }

  function setTexto($texto) {
    $this->texto = $texto;
  }
}
