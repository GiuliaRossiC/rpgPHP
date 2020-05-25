<?php
require_once 'model/Login.php';

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
                // exibe o form com o erro
                echo "erro no form";
            }
        }
    }
}

?>