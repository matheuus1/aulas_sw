<?php
    echo " 1 - Função sem retorno e sem parametros <br>";
    function teste(){
        echo "Anderson Vanin";
    }
    teste();
    echo "<hr>";

    echo " 2 - Função com retorno e sem parametros <br>";
    function teste2(){
        $retorno = "Matheus Nascimento";
        return $retorno;
    }
    $recebe = teste2();
    echo "$recebe <br>";
    echo "<hr>";

    echo " 3 - Função sem retorno e com parametros <br>";
    function teste3($a){
        echo "$a <br>";
    }
    $x = 10;

    teste3('oi galera!');
    teste3('Aula de SW-I');
    teste3($x);
    echo "<hr>";

    echo " 4 - Função com retorno e com parametros <br>";
    function teste4($x,$y){
        $mult = $x * $y;
        return $mult;
    }
    $resultado = teste4(15,12);
    echo "A multiplicação é igual a $resultado";
    
    echo "<hr>";





?>