<?php
//login é o q vai controlar a sessão

class Login
{
    public static function estaLogado()
    {
        // verificar $_SESSION['usuario']
        if(isset($_SESSION['usuario'])){
            return true;
        }
        return false;
    }

    public static function login($email, $senha)
    {
        $usuario = Usuario::verificarLogin($email, $senha);
        if(is_null($usuario)){
            header('Location: cadastro.php');
        }else{
            session_start();
            $_SESSION['usuario'] = $usuario;
            header('Location: servico.php');
        }
        // usar Usuario::LoginValido e gravar $_SESSION['usuario']
    }

    public static function logout()
    {
        // apagar o $_SESSION['usuario']
        session_start();
        unset($_SESSION['usuario']);
    }

}