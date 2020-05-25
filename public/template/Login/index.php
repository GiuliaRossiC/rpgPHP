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
                    <h1 class="card-title text-center">Iniciar Sessão</h1>
                    <hr/>
                    <div class="card-text">
                        <form method="post" action="/index.php?controller=login&action=login" id="formLogin" style="margin:15px">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" id="email"
                                       placeholder="Digite aqui seu email">
                                                            </div>
                            <div class="form-group">
                                <label for="senha">Senha:</label>
                                <input type="password" class="form-control" id="senha" placeholder="Senha">
                            </div>
                            <button type="submit" class="btn btn-block btn-primary" id="btnLogin">Login</button>
                        </form>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <label class="mg-t-10">Ainda não tem uma conta?
                        <br>
                        <a href="cadastro.html">
                            Cadastre-se agora!
                        </a>
                    </label>
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
<!--TODOS OS SCRIPTS ESTÃO DENTRO DA PAGINA HTML _SCRIPTS.HTML, SENDO IMPORTADOS COM SASS!!!!!-->
</body>
</html>