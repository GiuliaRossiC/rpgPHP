<html>
<head>
    <title>Alterar sua missão</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/main.css">

    <!--TODOS OS SCRIPTS ESTÃO DENTRO DA PAGINA HTML _SCRIPTS.HTML, SENDO IMPORTADOS COM SASS!!!!!-->
</head>

<body class="d-flex flex-column">

<header>
    <nav class="navbar navbar-expand-sm bg-nav">
        <div class="container">
            <a class="navbar-brand">
                <img src="img/logo_rpg.png" class="img-fluid" width="60" height="45">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="pagina-principal.php">Home</a>
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
                    <ul class="navbar-nav  navbar-right">
                        <li class="nav-item">
                            <a class="btn btn-secondary" class="nav-link" href="index.php?controller=servico&action=index">Meu Perfil</a>
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
            <div class="login-cardServico card my-5 shadow-sm">
                <div class="card-body">
                    <h1 class="card-title text-center">Alterar sua missão</h1>
                    <hr/>
                    <div class="card-text">
                        <form method="post">
                            <div class="form-group">
                                <label>Código:</label>
                                <input type="text" class="form-control" disabled="disabled" value="<?=$data['servico']['missao']?>">
                                <input name="codigo" type="hidden" value="<?=$data['servico']['codigo']?>">
                            </div>
                            <div class="form-group">
                                <label>missao:</label>
                                <input type="text" class="form-control" id="missao" name="missao" value="<?=$data['servico']['missao']?>">
                                <?php if (isset($data['erro']['missao'])):?>
                                    <div style="color: darkred;"><b><?=$data['erro']['missao']?></b></div>
                                <?php endif ?>
                            </div>
                            <div class="form-group">
                                <label>materia:</label>
                                <select name="materia" class="form-control">
                                    <option value="portugues" <?php if ($data['servico']['materia'] == 'portugues') echo 'selected="selected"'?>>portugues</option>
                                    <option value="matematica" <?php if ($data['servico']['materia'] == 'matematica') echo 'selected="selected"'?>>matemagica</option>
                                </select>
                                <?php if (isset($data['erro']['confirmarSenha'])):?>
                                    <div style="color: darkred;"><b><?=$data['erro']['confirmarSenha']?></b></div>
                                <?php endif ?>
                            </div>
                            <button type="submit" class="btn btn-primary">salvar</button>
                        </form>

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
                <>
                    <img class="mb-2 img-fluid" src="img/logo_rpg.png" alt="" width="40%"></>
            </div>
            <div class="col-12 col-md-2">
                <h5>Sobre a School Hero</h5>
            </div>
            <div class="col-12 col-md-2">
                <h5>A Empresa School Hero</h5>
                <p>
                    Para saber mais sobre nossa empresa?
                    <br>
                </p>
            </div>
            <div class="col-12 col-md-2">
                <h5>Fale com a gente</h5>
            </div>
            <div class="col-12 col-md-2">
                <h5>Sobre nossa equipe</h5>
            </div>
        </div>
        <p class="text-white-50 text-center">&copy; 2020 RPGZADA. - CNPJ
            00.000.000/0000-00 - São Paulo/SP - Brasil</p>
    </div>
</footer>

</body>
</html>

