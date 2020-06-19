<?php
//login é o q vai controlar a sessão
require 'Usuario.php';

class Login
{
    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function getUsuarioID(){
        if($this->estaLogado()){
            return $_SESSION['usuario']['id_usuario'];
        }
    }
    public function estaLogado()
    {
        // verificar $_SESSION['usuario']
        if (isset($_SESSION['usuario'])) {
            return true;
        }
        return false;
    }

    public function validarlogin($email, $senha)
    {
        $u = new Usuario();
        $usuario = $u->verificaLogin($email, $senha);
        if ($usuario === false) {
            return false;
        }
        $_SESSION['usuario'] = $usuario;
        return $usuario;
    }

    public function sair()
    {
        // apagar o $_SESSION['usuario']
        unset($_SESSION['usuario']);
    }


}