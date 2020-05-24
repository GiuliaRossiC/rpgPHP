<?php
require '../model/Login.php';
//login
class LoginController
{
    public function LoginController($data)
    {

        if (isset($_POST['email'], $_POST['senha'] )) {
            // varidar se é email
            $login = new Login();
            $foi = $login->validarlogin($data);
            if ($foi) {
                // redirect para o index controler
                header('Location: cadastro.php');
            } else {
                // exibe o form com o erro
            }
        }


    }


}

?>