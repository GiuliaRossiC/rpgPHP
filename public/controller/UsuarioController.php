<?php
require_once 'model/Usuario.php';
require_once 'model/Servico.php';

//cadastro
class UsuarioController
{
    public function index()
    {
        $usuarios = new Usuario();
        return $usuarios->todos();
    }

    public function criar($redirect = 'restrito.php?controller=usuario&action=index')
    {
        if ($_POST) {
            $usuarios = new Usuario();
            $temErro = [];
            if (empty($_POST['usuario'])) {
                $temErro['usuario'] = "Digite um usuário.";
            }else {
                $existe = $usuarios->unicoPorCampo('usuario', $_POST['usuario']);
                if (!empty($existe)) {
                    $temErro['usuario'] = "Este usuário já está cadastrado";
                }
            }
            if (empty($_POST['email'])) {
                $temErro['email'] = "Digite um email.";
            }else {
                $existe = $usuarios->unicoPorCampo('email', $_POST['email']);
                if (!empty($existe)) {
                    $temErro['email'] = "Este email já está cadastrado";
                }
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
                $usuario = $usuarios->unicoPorCampo('usuario', $_POST['usuario']);
                $servico = new Servico();
                $servico->criar(['id_usuario'=>$usuario['id_usuario'],'codigo'=> 'onomatopeia', 'missao'=>'aprender onomatopeia', 'materia' => 'portugues']);
                $servico->criar(['id_usuario'=>$usuario['id_usuario'],'codigo'=> 'fibonacci', 'missao'=>'aprender fibonacci', 'materia' => 'matematica']);
                $servico->criar(['id_usuario'=>$usuario['id_usuario'],'codigo'=> 'numerosprimos', 'missao'=>'aprender numeros primos', 'materia' => 'matematica']);
                $servico->criar(['id_usuario'=>$usuario['id_usuario'],'codigo'=> 'funcao', 'missao'=>'aprender função de 1 grau', 'materia' => 'matematica']);
                $servico->criar(['id_usuario'=>$usuario['id_usuario'],'codigo'=> 'mmc', 'missao'=>'aprender MMC',  'materia' => 'matematica']);
                $cadastrado = $_POST;
                $cadastrado['cadastrado'] = true;
                return $cadastrado;
            }

            $temErro['cadastrado'] = false;
            return $temErro;
        }
    }

/*    public function alterar()
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
            //gambiarra pra funcionar la fora por conta da fila no server
            sleep(3);
            header('Location: restrito.php?controller=usuario&action=index');

            return $temErro;
        }
    }*/
}

