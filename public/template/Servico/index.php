<html>
<head>
    <title>Iniciar sessão</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/main.css">

    <!--TODOS OS SCRIPTS ESTÃO DENTRO DA PAGINA HTML _SCRIPTS.HTML, SENDO IMPORTADOS COM SASS!!!!!-->
</head>

<body class="d-flex flex-column">

<header>
    <nav class="navbar navbar-expand-sm bg-nav">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="img/logo_rpg.png" class="img-fluid" width="60" height="45">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre.html">O Jogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre_nos.html">A Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mini-currilo.html">Nossa equipe</a>
                    </li>
                </ul>
                <ul class="navbar-nav  navbar-right">
                    <li class="nav-item">
                        <a id="lblSessao" class="nav-link" href="cadastro.html">Cadastre-se agora!</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-secondary" class="nav-link" href="iniciar-sessao.html">Iniciar Sessão</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    <section class="bgComImagem" style="background-image: url('../img/background-floresta2.jpg');">
        <div class="container">
            <div>
                <h4 class="text-center" id="dumpLogin"></h4>
            </div>
            <div class="login-card card my-5 shadow-sm">
                <div class="card-body">
                    <h1 class="card-title text-center">Missões</h1>
                    <hr/>
                    <div class="card-text">
                        <?php if ($data): ?>
                            <table>
                                <thead>
                                <tr>
                                    <th>codigo</th>
                                    <th>missao</th>
                                    <th>materia</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($data as $missao): ?>
                                    <tr>
                                        <td><?=$missao['codigo']?></td>
                                        <td><?=$missao['missao']?></td>
                                        <td><?=$missao['materia']?></td>
                                        <td>
                                            <a href="index.php?controller=servico&action=alterar&codigo=<?=$missao['codigo']?>"
                                               class="btn btn-primary">alterar</a>
                                            <a href="index.php?controller=servico&action=apagar&codigo=<?=$missao['codigo']?>"
                                            class="btn btn-primary">apagar</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        <?php else: ?>
                        <?php endif ?>

                        <a href="index.php?controller=servico&action=criar" class="btn btn-primary">nova missao</a>
                        <a href="index.php?controller=login&action=sair" class="btn btn-primary">Logout</a>


                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer class="pt-4 pt-md-5 mt-auto small text-white bg-nav">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <a href="index.html">
                    <img class="mb-2 img-fluid" src="img/logo_rpg.png" alt="" width="40%"></a>
            </div>
            <div class="col-12 col-md-2">
                <h5>Sobre a School Hero</h5>
                <p>Quer saber mais sobre o jogo?<a class="text-decoration-none" href="sobre.html">
                        <i>Clica aqui!</i></a>
                </p>
            </div>
            <div class="col-12 col-md-2">
                <h5>A Empresa School Hero</h5>
                <p>
                    Para saber mais sobre nossa empresa?
                    <br>
                    <a class="text-decoration-none" href="sobre_nos.html"><i>Clica aqui!</i></a>
                </p>
            </div>
            <div class="col-12 col-md-2">
                <h5>Fale com a gente</h5>
                <p>Precisa falar com a gente? envie sua mensagem <a class="text-decoration-none" href="suporte.html">
                        <i>Aqui!</i></a>
                </p>
            </div>
            <div class="col-12 col-md-2">
                <h5>Sobre nossa equipe</h5>
                <p>
                    Quer saber mais sobre a equipe idealizadora desse projeto?
                    <br>
                    <a href="mini-currilo.html" class="text-decoration-none"><i>Clica aqui!</i></a>
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

