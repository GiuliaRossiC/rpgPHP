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
                    <h1 class="card-title text-center">Alterar</h1>
                    <hr/>
                    <div class="card-text">
                        <form action="index.php?controller=servico&action=criar" method="Post">
                            <div class="form-group">
                                <label>codigo:</label>
                                <input type="text" class="form-control" id="codigo" name="codigo">
                                <?php if (isset($data['codigo'])):?>
                                    <div style="color: darkred;"><b><?=$data['codigo']?></b></div>
                                <?php endif ?>
                            </div>
                            <div class="form-group">
                                <label>missao:</label>
                                <input type="text" class="form-control" id="missao" name="missao" value="<?=$data['missao']?>">
                                <?php if (isset($data['missao'])):?>
                                    <div style="color: darkred;"><b><?=$data['missao']?></b></div>
                                <?php endif ?>
                            </div>
                            <div class="form-group">
                                <label>materia:</label>
                                <select name="materia" class="form-control">
                                    <option value="portugues">portugues</option>
                                    <option value="matematica">matematica</option>
                                </select>
                                <?php if (isset($data['materia'])):?>
                                    <div style="color: darkred;"><b><?=$data['materia']?></b></div>
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
                    <img class="mb-2 img-fluid" src="img/logo_rpg.png" alt="" width="40%"></a>
            </div>
            <div class="col-12 col-md-2">
                <h5>Sobre a School Hero</h5>
                        <i>Clica aqui!</i></a>
                </p>
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
                        <i>Aqui!</i></a>
                </p>
            </div>
            <div class="col-12 col-md-2">
                <h5>Sobre nossa equipe</h5>
                <p>
                    Quer saber mais sobre a equipe idealizadora desse projeto?
                    <br>
                </p>
            </div>
        </div>
        <p class="text-white-50 text-center">&copy; 2020 RPGZADA. - CNPJ
            00.000.000/0000-00 - São Paulo/SP - Brasil</p>
    </div>
</footer>

</body>
</html>


