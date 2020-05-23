<?php
// define qual o controller e action

$controller = $_GET['controller'];
$action = $_GET['action'];
$login = new Login();
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