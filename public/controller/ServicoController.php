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
        if ($_POST) {
            $temErro = [];
            if (empty($_POST['missao'])) {
                $temErro['missao'] = "Digite sua missão.";
            }
            if (!empty($temErro)) {
                return ['servico' => $servicos->unico($chave), 'erro' => $temErro];
            }
            $servicos->save($chave, $_POST);
            header('Location: index.php?controller=servico&action=index');
        }
        return ['servico' => $servicos->unico($chave), 'erro' => []];
    }

    public function criar()
    {
        $temErro = [];
        if ($_POST) {
            $servicos = new Servico();
            if (empty($_POST['codigo'])) {
                $temErro['codigo'] = "escreva um código para a missão";
            }
            if (empty($_POST['missao'])) {
                $temErro['missao'] = "Digite sua missão.";
            }
            if (!empty($temErro)) {
                return $temErro;
            }
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