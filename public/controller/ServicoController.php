<?php
//servico - missões

require_once 'model/Servico.php';

class ServicoController
{
    public function index()
    {
        $servicos = new Servico();
        return $servicos->todos();
    }

    public function alterar()
    {
        $servicos = new Servico();
        $chave = $_GET['codigo'];

        if ($_POST)  {
            $servicos->save($chave, $_POST);
            header('Location: index.php?controller=servico&action=index');
        }

        return $servicos->unico($chave);
    }

    public function criar()
    {
        if ($_POST)  {
            $servicos = new Servico();
            $servicos->save($_POST['codigo'], $_POST);
            header('Location: index.php?controller=servico&action=index');
        }
    }

    public function apagar()
    {
        $chave = $_GET['codigo'];
        $servicos = new Servico();
        $servicos->apagar($chave);
        header('Location: index.php?controller=servico&action=index');
    }
}

?>