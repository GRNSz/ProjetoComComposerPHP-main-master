<?php

// Inclui o autoload do Composer
require __DIR__ . "/../vendor/autoload.php";


// Usa a classe Login do namespace MeuProjeto\Login
use MeuProjeto\model\Login;
use MeuProjeto\model\UsuarioSistema;
use MeuProjeto\model\Cadastrar;

// Cria uma instância da classe Login
$login = new Login();

$usr = new UsuarioSistema();
$usr->nome = "GustavoR";

echo print_r(value:$usr, return: true);

$cadastro = new Cadastrar();

var_dump($usr->nome);

// Verifica o login (se o formulário foi enviado)
$login->verificarLogin();
$cadastro->getCadastrar();