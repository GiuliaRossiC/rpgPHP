<?php
//login é o q vai controlar a sessão

class Login
{
    public static function estaLogado()
    {
        // verificar $_SESSION['usuario']
    }

    public static function login($email, $senha)
    {
        // usar Usuario::LoginValido e gravar $_SESSION['usuario']
    }

    public static function logout()
    {
        // apagar o $_SESSION['usuario']
    }

}