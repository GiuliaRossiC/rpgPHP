<?php require 'model/Login.php';
$login = new Login();
?>
<html>
<head>
    <title>Sobre Nossa Empresa</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/main.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body class="d-flex flex-column">

<header>
    <nav class="navbar navbar-expand-sm bg-nav">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo_rpg.png" class="img-fluid" width="60" height="45">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
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
                            <a id="lblSessao" class="nav-link" href="restrito.php?controller=login&action=cadastro">Cadastre-se agora!</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-secondary" class="nav-link" href="restrito.php?controller=login&action=index">Iniciar Sessão</a>
                        </li>
                    </ul>
                <?php else:?>
                    <ul class="navbar-nav  navbar-right">
                        <li class="nav-item">
                            <a class="btn btn-secondary" class="nav-link" href="restrito.php?controller=servico&action=index">Meu Perfil</a>
                        </li>
                    </ul>
                <?php endif ?>
            </div>
        </div>
    </nav>
</header>

<main>

    <section class="bg-default">
        <div class="container text-center">
            <h1 class="display-2">
                SOBRE NÓS
            </h1>
            <p class="lead">
                A School Hero foi fundada em 2020 por quatro graduandos em Sistemas de Informação:
                Carolina Cinque, Giulia Rossi, Luiz Felipe Felix e Nancy Nery;
                todos com o mesmo objetivo: mudar a maneira com que os jogos para aulas e estudos são feitos.
                Desde então, o projeto se tornou motivo de orgulho para nós por estar em constante evolução
                com novos conteúdos, funcionalidades e avaliações da comunidade.<br>
                Os estudantes/jogadores são responsáveis pelo crescimento do nosso projeto e é por eles que
                continuamos evoluindo e melhorando a experiência de School Hero cada vez mais.
            </p>
            <br>
        </div>
    </section>

    <section class="bg-default">
        <div class="row container-fluid text-center justify-content-center">
            <div class="col-xs-6">
                <div class="card mb-3 border-0" style="max-width: 661px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="img/missao512.png" class="card-img" alt="Missão">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">MISSÃO</h5>
                                <p class="card-text">Nossa missão é propagar a versatilidade nos estudos diários de
                                    crianças
                                    e adolescentes,
                                    combinando a competitividade de um estilo de jogo com a seriedade no conhecimento
                                    dos
                                    alunos.
                                    <br>
                                    E é por isso que School Hero foi criado: para facilitar o aprendizado e entreter com
                                    desafios.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <div class="card mb-3 border-0" style="max-width: 661px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="img/produtos512.png" class="card-img" alt="Produtos">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">PRODUTOS</h5>
                                <p class="card-text">A equipe RPGZADA está se dedicando mais do que nunca em negócios de
                                    inovação
                                    tecnológica para a educação, que inclui sistemas de informação e de
                                    telecomunicações.
                                    <br>
                                    Oferecemos produtos e soluções de excelência para a comunidade.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xs-6">

                <div class="card mb-3 border-0" style="max-width: 661px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="img/valores512.png" class="card-img" alt="Valores">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">VALORES</h5>
                                <p class="card-text">Os valores são nossa estrela guia.
                                    Com a indústria de jogos em constante mudança, a tecnologia é lapidada, as
                                    técnicas mudam e ideais de plano tornam-se arcaicos.
                                    <br>
                                    Portanto, temos como principal valor a vontade de aprender e crescer, transmitindo
                                    essa
                                    sensação da equipe à comunidade.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <div class="card mb-3 border-0" style="max-width: 661px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="img/servicos512.png" class="card-img" alt="Serviços">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">SERVIÇOS</h5>
                                <p class="card-text">Nosso site foi desenvolvido em necessidades atuais e
                                    futuras da sociedade, voltando-se principalmente a infraestrutura social.
                                    <br>
                                    Sendo assim, nossos serviços e aplicações estarão sempre disponíveis gratuitamente
                                    para
                                    toda a comunidade.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <dl>
                <dt><font size="5" face="verdana">School Hero</font></dt>
                <dd>Uma plataforma livre e de código aberto desenvolvida pela equipe RPGZADA.</dd>
                <dd>O RPGZADA consiste em um grupo de estudantes universitários</dd>
            </dl>
        </div>
    </section>

    <section>
        <div class="maplocation">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.267440022048!2d-46.66106008447566!3d-23.558836467385376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59cd060ea13b%3A0x7c535e9d9784e6c2!2sAv.%20Paulista%2C%202000%20-%20Bela%20Vista%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001310-200!5e0!3m2!1spt-BR!2sbr!4v1586531790259!5m2!1spt-BR!2sbr"
                    width="1450" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
        </div>
    </section>
    <section class="bg-default">
        <div class="container">
            <h2 class="text-center mb-5">Deseja entrar em contato conosco? preencha o formulário!</h2>
            <form action="suporte-enviado.html">
                <fieldset>
                    <legend>Informações para contato:</legend>
                    <label for="fname">Nome:</label>
                    <input type="text" id="fname" name="fname"><br><br>
                    <label for="lname">Sobrenome:</label>
                    <input type="text" id="lname" name="lname"><br><br>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email"><br><br>
                    <label for="birthday">Data de nascimento:</label>
                    <input type="date" id="birthday" name="birthday"><br><br>
                    <label for="suportTexto">Fale sobre o que você precisa de suporte:</label><br>
                    <textarea id="suportTexto" name="suportTexto" rows="5" cols="45"></textarea><br>
                    <input type="submit" value="Enviar">
                </fieldset>
            </form>
        </div>
    </section>
</main>

<footer class="pt-4 pt-md-5 mt-auto small text-white bg-nav">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <a href="index.php">
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
                <p>Precisa falar com a gente? envie sua mensagem <a class="text-decoration-none>
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