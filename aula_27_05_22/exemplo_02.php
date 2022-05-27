<?php
    $num = [3,5,8,10,20,23,57];

    function soma($vetor){
        $soma = 0;
        for($i=0;$i<count($vetor);$i++){
            //echo "$vetor[$i] <br>";
            $soma = $soma + $vetor[$i];

            if($vetor[$i] %2 == 1){
                echo "$vetor[$i] <br>";
            }
        }
        echo "<hr>";
        echo "A soma é $soma ";
    }
    soma($num);
    
?>