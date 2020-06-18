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

    public function criar($set)
    {
        // validar se está tudo certo
        // ex isset($set['nome])

        $data = new Data('usuario');
        $data->save($set['email'], $set);
    }

    public function save($dados, $chave = null)
    {
        // usar data::load(usuario) verificar se existe e usar data::save(usuario)
        // $data = new data;
        // $data-> save(usuario);
        $data = new Data('usuario');
        $set = [
            'usuario'=>$dados['usuario'],
            'email'=>$dados['email'],
            'senha'=>$dados['senha'],
            'data_nascimento'=>$dados['dataNascimento'],
            'sexo'=>$dados['sexo'],
            'estado_civil'=>$dados['estadoCivil'],
            'telefone_residencial'=>$dados['telefoneResidencial'],
            'telefone_celular'=>$dados['telefoneCelular'],
            'endereco'=>$dados['endereco']
        ];
        $data->save($set, $chave);
        return $dados;
    }

    public function todos()
    {
        $data = new Data('usuario');
        return $data->load();
    }
}
