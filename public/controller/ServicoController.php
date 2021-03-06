<?php
//servico - missões

require_once 'model/Servico.php';

class ServicoController
{
    public function index()
    {
        $servicos = new Servico();
        return $servicos->todosDoUsuario((new Login())->getUsuarioID());
    }

    public function alterar()
    {
        $servicos = new Servico();
        $chave = $_GET['id'];
        if ($_POST) {
            $temErro = [];
            if (empty($_POST['missao'])) {
                $temErro['missao'] = "Digite sua missão.";
            }
            if (!empty($temErro)) {
                return ['servico' => $servicos->unico($chave), 'erro' => $temErro];
            }
            $servicos->save($_POST, $chave);
            //gambiarra pra funcionar la fora por conta da fila no server
            sleep(3);
            header('Location: restrito.php?controller=servico&action=index');
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
            $servicos->save($_POST);
            //gambiarra pra funcionar la fora por conta da fila no server
            sleep(3);
            header('Location: restrito.php?controller=servico&action=index');
        }
    }

    public function apagar()
    {
        $chave = $_GET['id'];
        $servicos = new Servico();
        $servicos->apagar($chave);
        //gambiarra pra funcionar la fora por conta da fila no server
        sleep(3);
        header('Location: restrito.php?controller=servico&action=index');
    }
}

?>