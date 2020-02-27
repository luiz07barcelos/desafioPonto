<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Login';
$route['cadastro'] = 'Login/cadastro';
$route['login'] = 'Login/validaLogin';
$route['logout'] = 'Login/logout';
$route['dashboard'] = 'Dashboard';
$route['cadastrar'] = 'Cadastro/cadastrar';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
