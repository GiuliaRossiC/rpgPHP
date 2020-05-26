<?php
// define qual o controller e action

session_start();
require 'model/Login.php';
require 'view.php';

$controller = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Login';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$login = new Login();
if (!$login->estaLogado() && $controller!='Login') {
    // redirect para o login.html
    $controller = 'Login';
    $action = 'index';
    echo "Acesso não autorizado";
}elseif ($login->estaLogado() && $controller=='Login' && $action!='sair'){
    $controller = 'Servico';
    $action = 'index';
}

$controllerName = "{$controller}Controller";
require "controller/$controllerName.php";
$controllerModel = new $controllerName();
$data = $controllerModel->$action();
$view = new View();
$view->load($controller, $action, $data);
?>