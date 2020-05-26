<?php ?>
<div style="margin: 10px">
    <form method="post" action="/index.php?controller=login&action=index" id="formLogin" style="margin:15px">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" name="email"
                   placeholder="Digite aqui seu email">
        </div>

        <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-block btn-primary" id="btnLogin">Login</button>
    </form>
</div>
<div style="margin: 10px; margin-left: 50px">
    Ou
    <p>
        <a href="index.php?controler=login&action=cadastro">Cadastre-se</a>
    </p>
</div>