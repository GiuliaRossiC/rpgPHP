<?php
class Usuario
{


    public function verifUsuarios()
    {

        if ($submit) {
            $data = new Data();
            $usuarios = $data->load('usuario');

            if (!isset($usuarios[$email])) {
                return false;
            } elseif ($usuarios[$email] !== $senha) {
                return false;
            } else {
                return $usuarios[$email];
            }


        }
    }
}
