<?php
require_once 'Data.php';

class Usuario
{

    public function verificaLogin($email, $senha)
    {
        $data = new Data('usuario');
        $usuario = $data->get($email);
        if (empty($usuario)) {
            return false;
        } elseif ($usuario['senha'] !== $senha) {
            return false;
        } else {
            return $usuario;
        }
    }

    public function create($set)
    {
        // validar se está tudo certo
        // ex isset($set['nome])

        $data = new Data('usuario');
        $data->save($set['email'], $set);
    }

    public function save($email, $senha)
    {
        // usar data::load(usuario) verificar se existe e usar data::save(usuario)
        // $data = new data;
        // $data-> save(usuario);
        $data = new Data('usuario');
        $usuario = $data->get($email);

        if (!empty($usuario)) {
            return false;
        } else {
            $data->save($email, $senha);
            return $email;
        }

    }
}
