<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home/index';
$route['exercicios'] = "Exercicio/index";
$route['indicador'] = "Exercicio/indicador";
//$route['resolver'] = "Exercicio/resolucao";
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['email'] = "Email/email_controller";
$route['pdf'] = "Exercicio/geraPDF";