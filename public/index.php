<?php
// define qual o controller e action

session_start();

$controller = $_GET['controller'];
$action = $_GET['action'];
$login = new LoginController();
if (!$login->estaLogado) {
    // redirect para o login.html
    $controller = 'Login';
    $action = 'login';
}
$this->view = new View;
require "controller/$controller.php";
$model = new $controller;
$data = $model->$action();
$this->view->load($controller, $action, $data);
?>