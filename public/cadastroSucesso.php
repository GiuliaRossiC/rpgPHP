<?php require 'model/Login.php';
$login = new Login();
?>
<html>
<head>
    <title>Iniciar sessão</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/main.css">

    <!--TODOS OS SCRIPTS ESTÃO DENTRO DA PAGINA HTML _SCRIPTS.HTML, SENDO IMPORTADOS COM SASS!!!!!-->
</head>

<body class="d-flex flex-column">

<body class="d-flex flex-column">

<header>
    <nav class="navbar navbar-expand-sm bg-nav">
        <div class="container">
            <a class="navbar-brand" href="index.php?controller=servico&action=index">
                <img src="img/logo_rpg.png" class="img-fluid" width="60" height="45">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre.php">O Jogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre_nos.php">A Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mini-currilo.php">Nossa equipe</a>
                    </li>
                </ul>
                <?php
                if(!$login->estaLogado()):?>
                    <ul class="navbar-nav  navbar-right">
                        <li class="nav-item">
                            <a id="lblSessao" class="nav-link" href="index.php?controller=login&action=cadastro">Cadastre-se agora!</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-secondary" class="nav-link" href="index.php?controller=login&action=index">Iniciar Sessão</a>
                        </li>
                    </ul>
                <?php else:?>
                    <ul class="navbar-nav  navbar-right">
                        <li class="nav-item">
                            <a class="btn btn-secondary" class="nav-link" href="index.php?controller=servico&action=index">Meu Perfil</a>
                        </li>
                    </ul>
                <?php endif ?>
            </div>
        </div>
    </nav>
</header>
<main>
    <div>
        <h4 class="text-center" id="dumpCadastro"></h4>
        <div class="container">
            <div class="my-5">
                <div>
                    <div class="text-center">
                        <h1>Cadastro finalizado com sucesso!</h1>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-primary" href="index.php?controller=login&action=index">Clique aqui para acessar
                            sua conta!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="pt-4 pt-md-5 mt-auto small text-white bg-nav">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <a href="index.php?controller=servico&action=index">
                    <img class="mb-2 img-fluid" src="img/logo_rpg.png" alt="" width="40%"></a>
            </div>
            <div class="col-12 col-md-2">
                <h5>Sobre a School Hero</h5>
                <p>Quer saber mais sobre o jogo?<a class="text-decoration-none" href="sobre.php">
                    <i>Clica aqui!</i></a>
                </p>
            </div>
            <div class="col-12 col-md-2">
                <h5>A Empresa School Hero</h5>
                <p>
                    Para saber mais sobre nossa empresa?
                    <br>
                    <a class="text-decoration-none" href="sobre_nos.php"><i>Clica aqui!</i></a>
                </p>
            </div>
            <div class="col-12 col-md-2">
                <h5>Fale com a gente</h5>
                <p>Precisa falar com a gente? envie sua mensagem <a class="text-decoration-none">
                    <i>Aqui!</i></a>
                </p>
            </div>
            <div class="col-12 col-md-2">
                <h5>Sobre nossa equipe</h5>
                <p>
                    Quer saber mais sobre a equipe idealizadora desse projeto?
                    <br>
                    <a href="mini-currilo.php" class="text-decoration-none"><i>Clica aqui!</i></a>
                </p>
            </div>
        </div>
        <p class="text-white-50 text-center">
            <a href="termos.html" class="text-decoration-none">Termos e condições</a>
            &bull;
            <a href="politicas.html" class="text-decoration-none">Políticas de privacidade</a>

        </p>
        <p class="text-white-50 text-center">&copy; 2020 RPGZADA. - CNPJ
            00.000.000/0000-00 - São Paulo/SP - Brasil</p>
    </div>
</footer>
</body>
</html>