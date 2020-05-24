<form name="" method="post" action="">
    <label>Usuário: <input type="text" name="user" /></label><br /><br />
    <label>Senha: <input type="password" name="pass" /></label><br /><br />
    <input type="submit" name="submit" value="Logar!" />
</form>
<?php
class View{
    public function load($model, $acao, $data = null){
        $model = ucfirst($model);
        include("templates/$model/$acao.php");
    }
}
?>