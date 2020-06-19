<?php
// CRUD Servico

class Servico
{
    public function criar($set)
    {
        $data = new Data('servico');
        $data->save($set);
    }

    public function save($dados, $chave = null)
    {
        $data = new Data('servico');
        $set = [
            'codigo'=>$dados['codigo'],
            'missao'=>$dados['missao'],
            'materia'=>$dados['materia']
        ];

        if ($chave === null) {
            $set['id_usuario'] = (new Login())->getUsuarioID();
        }
        $data->save($set, $chave);
        return $dados;
    }

    public function apagar($missao)
    {
        $data = new Data('servico');
        $data->apagar($missao);
    }

    public function todos()
    {
        $data = new Data('servico');
        $servico = $data->getall();
        return $servico;
    }

    public function todosDoUsuario($id)
    {
        $data = new Data('servico');
        $servico = $data->getAllBy('id_usuario', $id);
        return $servico;
    }

    public function unico($chave)
    {
        $data = new Data('servico');
        return $data->get($chave);
    }


}

