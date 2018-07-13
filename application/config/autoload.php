<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('database', 'session');

$autoload['drivers'] = array();

//$autoload['helper'] = array('richtext');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('Usuario', 'Aluno', 'Professor', 'Simulado','Texto','Questao','Questoes_has_Assuntos', 'Assunto', 'Simulado_has_questoes');
