<?php
// define qual o controller e action

session_start();
require 'model/Login.php';
require 'template/Login.php';

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'login';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$login = new Login();
if (!$login->estaLogado()) {
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