<?php
// CRUD Servico

class Servico
{
    public function criar($set)
    {
        $data = new Data('servico');
        $data->save($set['missao'], $set);
    }

    public function save($missao, $dados)
    {
        $data = new Data('servico');
        $data->save($missao, $dados);
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
       return  $data->load();
    }

    public function unico($chave)
    {
        $data = new Data('servico');
        return $data->get($chave);
    }


}

