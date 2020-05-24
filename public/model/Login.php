<?php
//login é o q vai controlar a sessão

class Login
{
    public function estaLogado()
    {
        // verificar $_SESSION['usuario']
        if(isset($_SESSION['usuario'])){
            return true;
        }
        return false;
    }

    public function validarlogin($email, $senha)
    {
        $u = new Usuario();
        $usuario = $u->verificarLogin($email, $senha);
        if($usuario == false){
            return false;
        }else{
            $_SESSION['usuario'] = $usuario;

            header('Location: servico.php');
        }
        // usar Usuario::LoginValido e gravar $_SESSION['usuario']
    }

    public function logout()
    {
        // apagar o $_SESSION['usuario']
        unset($_SESSION['usuario']);
    }

}