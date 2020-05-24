<form name="" method="post" action="">
<label>Usuário: <input type="text" name="user" /></label><br /><br />
<label>Senha: <input type="password" name="pass" /></label><br /><br />
<input type="submit" name="submit" value="Logar!" />
</form>
<?php
class Usuario{


    public function usuarios (){
        echo 'Usuários';


    $user = @$_REQUEST['user'];
    $pass = @$_REQUEST['pass'];
    $submit = @$_REQUEST['submit'];


    $user1 = 'Nancy';
    $pass1 = 'nancy123';

    $user2 = 'Caio';
    $pass2 = 'caio123';

    if($submit){

    if($user == "" || $pass == ""){
    echo "<script:alert('Por favor, preencha todos os campos!');</script>";
}


    else{
        if(($user == $user1 && $pass == $pass1) || ($user == $user2 && $pass == $pass2)){
        session_start();
        $_SESSION['usuario']=$user;
        $_SESSION['senha']=$pass;
        header("Location: painel.php");
    }

    else{
        echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
    }
}

}
    }
