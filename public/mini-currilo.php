<?php require 'model/Login.php';
$login = new Login();
?>
<html>
<head>
    <title>Nossa Equipe - RPGZADA</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/main.css">
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
                        <a class="nav-link"href="index.php">Home</a>
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
        <div class="container">
            <div class="text-center mb-5">
                <h1>Nossa Equipe!</h1>
                <h5>Clicando no botão de mini-currículo abaixo de cada um dos integrantes da nossa equipe poderá
                    descobrir
                    mais sobre cada um!</h5>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-3">
                    <div class="equipe-member">
                        <div class="equipe-img">
                            <img src="img/carol.jpeg" alt="carol" class="img-fluid">
                        </div>
                        <div class="equipe-hover text-center">
                            <div class="texto-hover">
                                <h5>Oi! Sou a Carol!</h5>
                                <p class="small">
                                    Sou uma das idealizadoras desse projeto e Web Developer!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="equipe-titulo">
                        <h5>Carolina Cinque</h5>
                        <a class="btn btn-sm btn-primary" data-toggle="collapse" href="#curriculoCarol" role="button"
                           aria-expanded="false" aria-controls="curriculoCarol">Meu
                            mini-currículo!</a>
                        <div class="collapse multi-collapse" id="curriculoCarol">
                            <ul>
                                <br/>
                                <li>
                                    Profissão: Estudante
                                </li>
                                <br/>
                                <li>
                                    Contatos: <a
                                        href="https://www.linkedin.com/in/carolina-cinque-79a092185/">Linkedin</a> ;
                                    <a href="https://www.instagram.com/carolinacinque/">Instagram</a>
                                </li>
                                <br/>
                                <li>
                                    Instituição de ensino: <a href="https://portal.anhembi.br/">Anhembi Morumbi</a>
                                </li>
                                <br/>
                                <li>
                                    Conhecimentos técnicos: HTML ; CSS ; SQL ; Java ; SCRUM
                                </li>
                                <br/>
                                <li>
                                    Cursos Realizados: HTML & CSS (Alura)
                                </li>
                                <br/>
                                <li>
                                    Habilidades: Documentação
                                </li>
                                <br/>
                                <li>
                                    Interesses: Viajar
                                </li>
                                <br/>
                                <li>
                                    Hobbies: Jogar ; Ouvir música ; Cinema
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <div class="equipe-member">
                        <div class="equipe-img">
                            <img src="img/giulia.jpg" alt="giulia" class="img-fluid">
                        </div>
                        <div class="equipe-hover text-center">
                            <div class="texto-hover">
                                <h5>Oi! Sou a Giulia!</h5>
                                <p class="small">
                                    Sou uma das idealizadoras desse projeto e Web Developer!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="equipe-titulo">
                        <h5>Giulia Rossi</h5>
                        <a class="btn btn-sm btn-primary" data-toggle="collapse" href="#curriculoGiulia" role="button"
                           aria-expanded="false" aria-controls="curriculoGiulia">Meu
                            mini-currículo!</a>
                        <div class="collapse multi-collapse" id="curriculoGiulia">
                            <br/>
                            <ul>
                                <li>
                                    Profissão: Estudante & Estágiaria no Itaú Unibanco
                                </li>
                                <br/>
                                <li>
                                    Contatos: <a href="https://www.linkedin.com/in/giuliarossic/">Linkedin</a> ;
                                    <a href="https://www.instagram.com/giulia.qq/">Instagram</a>
                                </li>
                                <br/>
                                <li>
                                    Instituição de ensino: <a href="https://portal.anhembi.br/">Anhembi Morumbi</a>
                                </li>
                                <br/>
                                <li>
                                    Conhecimentos técnicos: HTML ; CSS ; Javascript ; Java ; Python ; Bootstrap ;
                                </li>
                                <br/>
                                <li>
                                    Cursos Realizados: Curso completo de desenvolvimento Web (Udemy)
                                </li>
                                <br/>
                                <li>
                                    Habilidades: Inglês & Programação
                                </li>
                                <br/>
                                <li>
                                    Interesses: Crescer no mercado de tecnologia e me especializar em desenvolvimento.
                                </li>
                                <br/>
                                <li>
                                    Hobbies: Jogar ; Ouvir música ; Dançar ; Aprender novas linguas ; Anime
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-3">
                    <div class="equipe-member">
                        <div class="equipe-img">
                            <img src="img/nancy.jpeg" alt="nancy" class="img-fluid">
                        </div>
                        <div class="equipe-hover text-center">
                            <div class="texto-hover">
                                <h5>Oi! Sou a Nancy!</h5>
                                <p class="small">
                                    Sou uma das idealizadoras desse projeto e Web Developer!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="equipe-titulo">
                        <h5>Nancy Nery</h5>
                        <a class="btn btn-sm btn-primary" data-toggle="collapse" href="#curriculoNancy" role="button"
                           aria-expanded="false" aria-controls="curriculoNancy">Meu
                            mini-currículo!</a>
                        <div class="collapse multi-collapse" id="curriculoNancy">
                            <ul>
                                <br />
                                <li>
                                    Profissão: Estudante & Estagiária em Gestão administrativa
                                </li>
                                <br/>
                                <li>
                                    Contatos: <a
                                        href="https://www.linkedin.com/in/nancielly-nery-2230461a3/">Linkedin</a> ;
                                    <a href="https://www.instagram.com/xnanna_/">Instagram</a>
                                </li>
                                <br/>
                                <li>
                                    Instituição de ensino: <a href="https://portal.anhembi.br/">Anhembi Morumbi</a>
                                </li>
                                <br/>
                                <li>
                                    Conhecimentos técnicos: Gestão Administrativa ; Redes de Internet ; Java ;
                                </li>
                                <br/>
                                <li>
                                    Habilidades: Inglês e Espanhol
                                </li>
                                <br/>
                                <li>
                                    Interesses: Crescer no meio tecnológico, fornecendo ideias para o avanço e progresso
                                    da
                                    sociedade.
                                </li>
                                <br/>
                                <li>
                                    Hobbies: Jogadora de Vôlei ; Apreciadora de séries e livros ;
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-3">
                    <div class="equipe-member">
                        <div class="equipe-img">
                            <img src="img/luiz.jpg" alt="luiz" class="img-fluid">
                        </div>
                        <div class="equipe-hover text-center">
                            <div class="texto-hover">
                                <h5>Oi! Sou o Luiz Felipe!</h5>
                                <p class="small">
                                    Sou um dos idealizadores desse projeto e Web Developer!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="equipe-titulo">
                        <h5>Luiz Felipe Felix</h5>
                        <a class="btn btn-sm btn-primary" data-toggle="collapse" href="#curriculoLuiz" role="button"
                           aria-expanded="false" aria-controls="curriculoLuiz">Meu
                            mini-currículo!</a>
                        <div class="collapse multi-collapse" id="curriculoLuiz">
                            <ul>
                                <br />
                                <li>
                                    Profissão: Estudante & Estagiário de Suporte de Tecnologia
                                </li>
                                <br/>
                                <li>
                                    Contatos: <a
                                        href="https://www.linkedin.com/in/luizfelipefelix/">Linkedin</a> ;
                                    <a href="https://www.instagram.com/lffelix_/">Instagram</a>
                                </li>
                                <br/>
                                <li>
                                    Instituição de ensino: <a href="https://portal.anhembi.br/">Anhembi Morumbi</a>
                                </li>
                                <br/>
                                <li>
                                    Conhecimentos técnicos: Arquitetura e Manutenção de Computadores ; Redes ; Java ; HTML ; CSS ; Javascript
                                </li>
                                <br/>
                                <li>
                                    Habilidades: Inglês & Espanhol
                                </li>
                                <br/>
                                <li>
                                    Interesses: Evoluir no ramo de tecnologia e criar projetos benéficos para as pessoas
                                </li>
                                <br/>
                                <li>
                                    Hobbies: Viciado em jogos ; Mero amador no basquete
                                </li>
                            </ul>
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

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

<script>
    let formCadastro, formLogin;
    (function () {
        formCadastro = document.getElementById("formCadastro");
        if (formCadastro) {
            formCadastro.addEventListener("submit", function (event) {
                if (!cadastroClick()) {
                    event.preventDefault();
                } /*else {
                    const infoCadastro = "Dados corretos! <br> Dados Informados: <br><br>"
                        + "usuário: " + document.getElementById("InputUser").value + "<br>"
                        + "email: " + document.getElementById("InputEmailCadastro").value + "<br>"
                        + "senha: " + document.getElementById("InputSenhaCadastro").value + "<br>"
                        + "data de nascimento: " + document.getElementById("inputNascimento").value + "<br>"
                        + "sexo: " + document.getElementById("inputNascimento").value + "<br>"
                        + "estado civil: " + document.getElementById("inputEstadoCivil").value + "<br>"
                        + "telefone residencial: " + document.getElementById("inputTelefoneRes").value + "<br>"
                        + "telefone celular: " + document.getElementById("inputTelefoneCelular").value + "<br>"
                        + "endereço: " + document.getElementById("inputEndereco").value;

                    document.getElementById("dumpCadastro").innerHTML = infoCadastro;
                    setTimeout(function () {
                       // document.location = formCadastro.action;
                    }, 10000);
        }*/
    });
    }
    formLogin = document.getElementById("formLogin");
    if (formLogin) {
        formLogin.addEventListener("submit", function (event) {
            if (!loginClick()) {
                event.preventDefault();
            } /*else {
                event.preventDefault();
                const infoLogin = "Dados corretos! <br> Dados informados: <br><br> email: " +
                    document.getElementById("loginEmail").value +
                    "<br> senha: " + document.getElementById("loginSenha").value;

                document.getElementById("dumpLogin").innerHTML = infoLogin;
                setTimeout(function () {
                    document.location = formLogin.action;
                }, 3000);
            }*/
        });
    }
    }
    )
    ();

    function loginClick(event) {
        var email = document.getElementById("loginEmail").value;
        var senha = document.getElementById("loginSenha").value;
        var valid = true;

        if (email === "") {
            var x = document.getElementById("invalidEmailLogin");
            x.style.display = 'block';
            valid = false;
        }
        if (senha === "") {
            var x = document.getElementById("invalidSenhaLogin");
            x.style.display = 'block';
            valid = false;
        }
        return valid;
    }

    function cadastroClick(event) {
        $('#userInvalido').hide();
        $('#emailInvalido').hide();
        $('#confirmaEmailInvalido').hide();
        $('#senhaInvalido').hide();
        $('#confirmaSenha').hide();
        $('#dataInvalido').hide();
        $('#sexoInvalido').hide();
        $('#civilInvalido').hide();
        $('#residencialInvalido').hide();
        $('#celInvalido').hide();
        $('#endInvalido').hide();
        $('#ckeckInvalido').hide();
        var nome = document.getElementById("InputUser").value;
        var email = document.getElementById("InputEmailCadastro").value;
        var confirmaEmail = document.getElementById("InputConfirmaEmail").value;
        var senha = document.getElementById("InputSenhaCadastro").value;
        var confirmaSenha = document.getElementById("inputConfirmaSenha").value;
        var nasci = document.getElementById("inputNascimento").value;
        var estadoCivil = document.getElementById("inputEstadoCivil").value;
        var telResidencial = document.getElementById("inputTelefoneRes").value;
        var telCel = document.getElementById("inputTelefoneCelular").value;
        var end = document.getElementById("inputEndereco").value;
        var eValido = true;

        if (nome === "") {
            $('#userInvalido').show();
            eValido = false;
        }
        if (email === "") {
            $('#emailInvalido').show();
            eValido = false;
        }
        if(confirmaEmail === ""){
            $('#confirmaEmailInvalido').show();
            eValido = false;
        }
        if (senha === "") {
            $('#senhaInvalido').show();
            eValido = false;
        }
        if (confirmaSenha === "") {
            $('#confirmaSenha').show();
            eValido = false;
        }
        if (nasci === "") {
            $('#dataInvalido').show();
            eValido = false;
        }

        if ((document.getElementById("sexoM").checked || document.getElementById("sexoF").checked) === false) {
            $('#sexoInvalido').show();
            eValido = false;
        }

        if (document.getElementById("inputEstadoCivil").querySelector("option:checked").text === "") {
            $('#civilInvalido').show();
            eValido = false;
        }

        if (telResidencial === "") {
            $('#residencialInvalido').show();
            eValido = false;
        }

        if (telCel === "") {
            $('#celInvalido').show();
            eValido = false;
        }

        if (end === "") {
            $('#endInvalido').show();
            eValido = false;
        }

        if (document.getElementById("aceitaCadastro").checked === false) {
            $('#ckeckInvalido').show();
            eValido = false;
        }
        if (confirmaSenha !== senha) {
            $('#confirmaSenha').show();
            eValido = false;
        }
        if (confirmaEmail !== email) {
            $('#confirmaEmailInvalido').show();
            eValido = false;
        }
        return eValido;
    }
</script>
</body>
</html>
