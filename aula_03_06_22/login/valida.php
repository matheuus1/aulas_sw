<?php
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $user = 'MATHEUS';
    $pass = '1234';

    if(($usuario == $user) && ($senha == $pass)){
        session_start();
        $_SESSION['nome'] = $usuario;
        $_SESSION['logado'] = 1;
        header("Location: restrita.php");
    }
    else{
        echo "Usuário e/ou senha incorretos!";
    }
?>