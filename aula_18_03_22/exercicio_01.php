<?php

    $idade = 25; 
    $carteira = TRUE;

    $teste = "";
    if($carteira == TRUE){
        $teste = "SIM";
    }
    else {
        $teste = "NÃO";
    }

    if($idade>=18){
      if($carteira == TRUE){
        echo "PODE";
    }
}
    else {
        echo "NÃO PODE";
    }



?>