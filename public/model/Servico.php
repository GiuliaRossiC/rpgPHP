<?php
// CRUD Servico

class Servico
{
    public function criar($set)
    {
        $data = new Data('servico');
        $data->save($set['missao'], $set);
    }

    public function save($dados, $chave = null)
    {
        $data = new Data('servico');
        $set = [
            'codigo'=>$dados['codigo'],
            'missao'=>$dados['missao'],
            'materia'=>$dados['materia']
        ];
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

    public function unico($chave)
    {
        $data = new Data('servico');
        var_dump($chave);
        return $data->get($chave);
    }


}

