<?php
require_once 'model/Usuario.php';

//cadastro
class UsuarioController
{
    public function index()
    {
        $usuarios = new Usuario();
        return $usuarios->todos();
    }

    public function criar($redirect = 'index.php?controller=usuario&action=index')
    {
        if ($_POST) {
            $usuarios = new Usuario();
            $temErro = [];
            if (empty($_POST['usuario'])) {
                $temErro['usuario'] = "Digite um usuário.";
            }
            if (empty($_POST['email'])) {
                $temErro['email'] = "Digite um email.";
            }
            if ($_POST['confirmarEmail'] != $_POST['email']) {
                $temErro['confirmarEmail'] = "Os emails digitados não conferem.";
            }
            if (empty($_POST['senha'])) {
                $temErro['senha'] = "Digite uma senha.";
            }
            if (($_POST['confirmarSenha']) != $_POST['senha']) {
                $temErro['confirmarSenha'] = "As senhas não conferem.";
            }
            if (empty($_POST['dataNascimento'])) {
                $temErro['dataNascimento'] = "Digite sua data.";
            }
            if (!isset($_POST['sexo']) || ($_POST['sexo'] != "masculino" && $_POST['sexo'] != "feminino")) {
                $temErro['sexo'] = "Escolha seu sexo.";
            }
            if (!in_array($_POST['estadoCivil'], ["solteiro", "casado", "divorciado", "viuvo", "separadoJudicialmente"])) {
                $temErro['estadoCivil'] = "Escolha seu estado civil.";
            }
            if (empty($_POST['telefoneResidencial'])) {
                $temErro['telefoneResidencial'] = "Digite seu telefone residencial.";
            }
            if (empty($_POST['telefoneCelular'])) {
                $temErro['telefoneCelular'] = "Digite seu telefone celular.";
            }
            if (empty($_POST['endereco'])) {
                $temErro['endereco'] = "Digite seu endereço.";
            }
            if (empty($_POST['actCadastro'])) {
                $temErro['actCadastro'] = "Você deve aceitar os termos.";
            }

            if (empty($temErro)) {
                $usuarios->save($_POST);
                header("Location:$redirect");
            }
            return $temErro;
        }
    }

    public function alterar()
    {
        $usuario = new Usuario();
        $chave = $_GET['id'];
        if ($_POST) {
            $temErro = [];
            if (empty($_POST['idUsuario'])) {
                $temErro['usuario'] = "Digite seu usuario.";
            }
            if (!empty($temErro)) {
                return ['usuario' => $usuario->unico($chave), 'erro' => $temErro];
            }
            $usuario->save($_POST, $chave);
            var_dump($usuario);
            //gambiarra pra funcionar la fora por conta da fila no server
            sleep(3);
            header('Location: index.php?controller=usuario&action=index');

            return $temErro;
        }
    }
}

