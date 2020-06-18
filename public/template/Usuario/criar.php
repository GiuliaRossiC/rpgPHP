<html>
<head>
    <title>Cadastro</title>
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
                        <a class="nav-link" href="../../pagina-principal.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../sobre.php">O Jogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../sobre_nos.php">A Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../mini-currilo.php">Nossa equipe</a>
                    </li>
                </ul>
                <ul class="navbar-nav  navbar-right">
                    <li class="nav-item">
                        <a id="lblSessao" class="nav-link" href="index.php?controller=login&action=cadastro">Cadastre-se agora!</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-secondary" class="nav-link" href="index.php?controller=login&action=index">Iniciar Sessão</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main>
    <section class="bgComImagem"
             style="background-image: url('../img/background-floresta.jpg');">
        <div class="container">
            <div class="cadastro-card card my-5 shadow-sm">
                <div class="card-body">
                    <div class="card-text">
                        <form method="post" id="formCadastro">
                            <h1 class="text-center">Cadastre-se agora!</h1>
                            <hr/>
                            <div class="form-group">
                                <label>Usuário:</label>
                                <input type="text" name="usuario" class="form-control" id="InputUser">
                                <?php if (isset($data['usuarios'])):?>
                                    <div style="color: darkred;"><b><?=$data['usuarios']?></b></div>
                                <?php endif ?>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-sm-6">
                                    <label>Email:</label>
                                    <input type="text" class="form-control" name="email" id="InputEmailCadastro">
                                    <?php if (isset($data['email'])):?>
                                        <div style="color: darkred;"><b><?=$data['email']?></b></div>
                                    <?php endif ?>
                                </div>
                                <div class="form-group col-12 col-sm-6">
                                    <label>Confirmar Email:</label>
                                    <input type="text" class="form-control" id="confirmarEmail" name="confirmarEmail">
                                    <?php if (isset($data['confirmarEmail'])):?>
                                        <div style="color: darkred;"><b><?=$data['confirmarEmail']?></b></div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-sm-4">
                                    <label>Senha:</label>
                                    <input type="password" name="senha" class="form-control" id="senha">
                                    <?php if (isset($data['senha'])):?>
                                        <div style="color: darkred;"><b><?=$data['senha']?></b></div>
                                    <?php endif ?>
                                </div>
                                <div class="form-group col-12 col-sm-4">
                                    <label>Confirmar Senha:</label>
                                    <input type="password" class="form-control" id="confirmarSenha" name="confirmarSenha">
                                    <?php if (isset($data['confirmarSenha'])):?>
                                        <div style="color: darkred;"><b><?=$data['confirmarSenha']?></b></div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-sm-4">
                                    <label>Data Nascimento:</label>
                                    <input type="date" class="form-control" name="dataNascimento" id="inputNascimento">
                                    <?php if (isset($data['dataNascimento'])):?>
                                        <div style="color: darkred;"><b><?=$data['dataNascimento']?></b></div>
                                    <?php endif ?>
                                </div>
                                <div class="form-group">
                                    <div class="col-12 col-sm-8">
                                        <label>Informe seu sexo:</label><br/>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sexo"
                                                   id="sexoF"
                                                   value="feminino">
                                            <label class="form-check-label" for="sexoF">Feminino</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="sexo"
                                                   id="sexoM"
                                                   value="masculino">
                                            <label class="form-check-label" for="sexoM">Masculino</label>
                                        </div>
                                        <?php if (isset($data['sexo'])):?>
                                            <div style="color: darkred;"><b><?=$data['sexo']?></b></div>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Estado Civil:</label>
                                <select name="estadoCivil" class="form-control" id="inputEstadoCivil">
                                    <option></option>
                                    <option value="solteiro">Solteiro(a)</option>
                                    <option value="casado">Casado(a)</option>
                                    <option value="divorciado">Divorciado(a)</option>
                                    <option value="viuvo">Viúvo(a)</option>
                                    <option value="separadoJudicialmente">Separado Judiciamente</option>
                                </select>
                                <?php if (isset($data['estadoCivil'])):?>
                                    <div style="color: darkred;"><b><?=$data['estadoCivil']?></b></div>
                                <?php endif ?>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-sm-6">
                                    <label>Telefone Residencial</label>
                                    <input name="telefoneResidencial" type="number" class="form-control"
                                           id="inputTelefoneRes">
                                    <?php if (isset($data['telefoneResidencial'])):?>
                                        <div style="color: darkred;"><b><?=$data['telefoneResidencial']?></b></div>
                                    <?php endif ?>
                                </div>
                                <div class="form-group col-12 col-sm-6">
                                    <label>Telefone Celular</label>
                                    <input name="telefoneCelular" type="number" class="form-control"
                                           id="inputTelefoneCelular">
                                    <?php if (isset($data['telefoneCelular'])):?>
                                        <div style="color: darkred;"><b><?=$data['telefoneCelular']?></b></div>
                                    <?php endif ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Endereço</label>
                                <input name="endereco" type="text" class="form-control" id="endereco">
                                <?php if (isset($data['endereco'])):?>
                                    <div style="color: darkred;"><b><?=$data['endereco']?></b></div>
                                <?php endif ?>
                                </div>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="actCadastro" name="actCadastro">
                                <label class="form-check-label" for="actCadastro">Aceito os termos</label>
                                <?php if (isset($data['actCadastro'])):?>
                                    <div style="color: darkred;"><b><?=$data['actCadastro']?></b></div>
                                <?php endif ?>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary mt-2" id="btnCadastrar" name="btnCadastrar">Cadastrar
                            </button>
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
                <a>
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
                <p>Precisa falar com a gente? envie sua mensagem <a class="text-decoration-none">
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