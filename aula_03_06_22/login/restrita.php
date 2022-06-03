<?php
    session_start();
    if($_SESSION['logado'] != 1){
        header("Location: index.php");
    }
    $nome = $_SESSION['nome'];
    echo "BEM VINDO $nome <br>";
    echo "VOCÊ ESTÁ NA PÁGINA RESTRITA!!";

    echo "<br>";

    echo "<a href='logout.php'>SAIR</a>";
?>