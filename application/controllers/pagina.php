<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

  function __construct() {
    parent ::__construct();
    $this->load->helper('url');
  }

  public function index() {
    $this->load->view('header');
    $this->load->view('sobre_nos');
    $this->load->view('curiosidades');
    $this->load->view('galeria');
    $this->load->view('footer');
    $this->load->view('links');
  }

  public function LoginProfessor() {
    $this->load->view('login_professor');
  }
  
  public function LoginAluno() {
    $this->load->view('login_aluno');
  }

  public function EntrarProfessor() { 
// criar entrar diferenciados para alunos e professores. (2 funcoes diferentes)
    $data['email'] = $this->input->post('email');
    $data['senha'] = $this->input->post('senha');
       
    $usr = new Professor();
    $id = $usr->validar($data);
    
    if (isset($id)){
      if ($usr->validar($data)){
        $this->session->set_userdata('login', $id);
        $this->load->view('restrito_prof');
      } 
      }else {
        $data['mensagem'] = "Email e/ou senha inválidos";
        $this->load->view('login_professor', $data);
    }
  }
  
   public function EntrarAluno() { 
// criar entrar diferenciados para alunos e professores. (2 funcoes diferentes)
    $data['email'] = $this->input->post('email');
    $data['senha'] = $this->input->post('senha');
    
    $usr = new Aluno();
    
    $id = $usr->validar($data);
   
    if (isset($id)){
      if ($usr->validar($data)) {
        $this->session->set_userdata('login', $id);
        $this->load->view('restrito_aluno');
      } 
      }else{
        $data['mensagem'] = "Email e/ou senha inválidos";
        $this->load->view('login_aluno', $data);
    }
   }
  
  public function CadastrarAluno() {
    $this->load->view('cadastraraluno');
  }

  public function CadastrarProfessor() {
    $this->load->view('cadastrarprofessor');
  }

  public function SalvarAluno() {
    $aluno = new Aluno();
    $aluno->setNome($this->input->post('nome'));
    $aluno->setCpf($this->input->post('cpf'));
    $aluno->setEmail($this->input->post('email'));
    $aluno->setSenha($this->input->post('senha'));
    $aluno->setTelefone($this->input->post('telefone'));
    $aluno->setStatus(1);
//    var_dump($aluno);
    $aluno->inserir();
//     var_dump($aluno);
    $dados['sucesso']="Parabéns aluno, foi cadastrado com sucesso!! Agora, faça seu login.";
    $this->load->view('login_aluno', $dados);
  }

  public function SalvarProfessor() { // alterar conforme feito para aluno
    $professor = new Professor();
    $professor->setNome($this->input->post('nome'));
    $professor->setCpf($this->input->post('cpf'));
    $professor->setEmail($this->input->post('email'));
    $professor->setSenha($this->input->post('senha'));
    $professor->setTelefone($this->input->post('telefone'));
    $professor->setDisciplina($this->input->post('disciplina'));
    $professor->inserir();

    //var_dump($professor);
   $dados['sucesso']="Parabéns professor, foi cadastrado com sucesso!!";
   $this->load->view('cadastrarprofessor', $dados);
  }
  
  public function LogoutProf(){
    $this->session->sess_destroy('login');
    $this->load->view('logout_prof');
  }
  public function LogoutAluno(){
    $this->session->sess_destroy('login');
    $this->load->view('logout_aluno');
  }
  public function Simulado(){
     $dados = [
      'options_questoes' => $this->Questao->montaCheckbox()
    ];
    $this->load->view('simulado.php',$dados);
  }
  public function Questao_texto() {
    $this->load->helper('richtext');
    $dados = [
      'options_assuntos' => $this->Assunto->selectAssuntos(),
      'options_texto'=> $this->Texto->selectTextos()
    ];
    $this->load->view('questao_texto.php', $dados);
  }
  
  public function SalvarSimulado(){
    $dados['mensagem']="Seu simulado foi cadastrado com sucesso!";;
   
    $data_atual = date("Y-m-d");
    $simulado = new Simulado();
      $simulado->setData($data_atual);
      $idSimulado = $simulado->inserir();

    $simulado_has_questao = new Simulado_has_questoes();
    $simulado_has_questao->setIdSimulado($idSimulado);
    $selecionados= $this->input->post('questao');
    
    foreach ($selecionados as $id) {
        echo $id;
        $simulado_has_questao->setIdQuestao($id);
        $simulado_has_questao->inserir();
    }
 }
 
  public function SalvarTexto() {
    $texto = new Texto();
    $texto->setTitulo($this->input->post('titulo'));
    $texto->setAutor($this->input->post('autor'));
    $texto->setTexto($this->input->post('texto'));
    $texto->inserir();
    $dados = [
      'mensagem'=>"Texto cadastrado com sucesso. Agora, adicione as questões referentes a ele.",
      'options_assuntos' => $this->Assunto->selectAssuntos(),
      'options_texto'=> $this->Texto->selectTextos()
    ];
    $this->load->view('questao_texto.php', $dados);
    //$this->load->helper('richtext');
  }
  
  public function SalvarQuestao() {
    $questao = new Questao();
    $questao->setQuestao($this->input->post('questao'));
    $questao->setNumTexto($this->input->post('texto'));
    $questao->setResposta($this->input->post('resposta'));
    $idPergunta= $questao->inserir();

    $questao_has_assunto = new Questoes_has_assuntos();
    
    $questao_has_assunto->setIdPergunta($idPergunta);
    $questao_has_assunto->setIdAssunto($this->input->post('assunto'));
    $questao_has_assunto->inserirIds();
    
    $dados = [
      'mensagem'=>"Questão cadastrada com sucesso.",
      'options_assuntos' => $this->Assunto->selectAssuntos(),
      'options_texto'=> $this->Texto->selectTextos()
    ];
    
    $this->load->view('questao_texto.php', $dados);
  }
  
  public function GerarSimulado(){
    $idSimuladoGerado = $this->Questao->gerarQuestoes();
    foreach ($idSimuladoGerado as $value) {
      echo $value->Pergunta."<BR>"; 
    }
    //print_r($idSimuladoGerado);
    //$this->session->set_userdata('idSimuladoGerado', $idSimuladoGerado);
  }

}
