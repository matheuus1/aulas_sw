<?php
    $teste = [10, 'oi', 1.6, true];
    // $teste = array(10, 'oi', 1.6, true);
    // echo $teste
    $qtde = count($teste);
    echo " Num de elementos no vetor : $qtde";
    echo "<hr>";
    
    for ( $i=0; $i<4; $i++){
        echo " valor do i = $i - Valor: $teste[$i] <br> ";
    }
    echo "<hr>";

    $numero = (rand(1, 10))/10;
    //$resultado = $numero/10;
    echo $numero;
    echo "<hr>";

    $vetor = [1, 5, 8, 10];
    $n = count($vetor);
    $soma = 0;

    for($a=0;$a<$n;$a++){
        $soma = $soma + $vetor[$a]/4;
    }
    echo $soma;


    
?>