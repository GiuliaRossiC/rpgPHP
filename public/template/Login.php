<?php
$login = $_REQUEST['login'];
?>;

<html>
<head>
    <title>Iniciar sessão</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- build:css css/main.css -->
    <link type="text/css" href="scss/main.scss">
    <!-- endbuild -->

    <!--TODOS OS SCRIPTS ESTÃO DENTRO DA PAGINA HTML _SCRIPTS.HTML, SENDO IMPORTADOS COM SASS!!!!!-->
</head>

<body class="d-flex flex-column">

@@include('./_header.html')

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
                        <form action="conteudo-jogo.html" id="formLogin" style="margin:15px">
                            <!--<div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" id="loginEmail"
                                       placeholder="Digite aqui seu email">
                                <div id="invalidEmailLogin" style="display: none; color: darkred; font-weight: bold">Por
                                    favor,
                                    digite o e-mail.
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Senha:</label>
                                <input type="password" class="form-control" id="loginSenha" placeholder="Senha">
                                <div id="invalidSenhaLogin" style="display: none; color: darkred; font-weight: bold">Por
                                    favor,
                                    digite a senha.
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary" id="btnLogin">Login</button>
                            <div id="form_login">
                            </form>-->
                                <?php echo validation_errors(); ?>
                                <?php
                                echo form_open();

                                echo form_label('Email', 'loginEmail');
                                echo form_input('loginEmail', '');

                                echo form_label('Senha', 'loginSenha');
                                echo form_password('loginSenha', '');

                                echo form_submit('submit', 'Login');
                                ?>
                                <?php form_close(); ?>

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

@@include('./_footer.html')
@@include('./_scripts.html')
<!--TODOS OS SCRIPTS ESTÃO DENTRO DA PAGINA HTML _SCRIPTS.HTML, SENDO IMPORTADOS COM SASS!!!!!-->
</body>
</html>
