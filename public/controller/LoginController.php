<?php
require_once 'model/Login.php';
require_once 'UsuarioController.php';
//login
class LoginController
{
    public function index()
    {
        if (isset($_POST['email'], $_POST['senha'])) {
            // varidar se é email
            $login = new Login();
            $foi = $login->validarlogin($_POST['email'], $_POST['senha']);
            if ($foi) {
                // redirect para o index controler
                header('Location: index.php?controller=servico&action=index');
            } else {
                return ['erro'=>'seu email ou sua senha estão incorretas!'];
            }
        }
    }
    public function sair(){
        $login = new Login();
        $login->sair();
        header('Location: index.php?controller=login&action=index');
    }

    public function cadastro(){
        $cadastro = new UsuarioController();
        return $cadastro->criar('cadastroSucesso.php');
    }
}

?>