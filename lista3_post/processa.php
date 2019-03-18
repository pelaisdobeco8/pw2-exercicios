<?php

$maior = 0;

    $vetor = array();
    $vetor[0] = $_POST["n1"];
    $vetor[1] = $_POST["n2"];
    $vetor[2] = $_POST["n3"];
    $vetor[3] = $_POST["n4"];
    $vetor[4] = $_POST["n5"];
   
    //questao a:
    for ($i=0; $i<=4; $i++) {
        if ($maior < $vetor[$i]) {
            $maior = $vetor[$i];
        }
    }
    
    echo "O maior número é: $maior <br><br>"; 
    
    
    echo "Os números pares são: <br><br>";
    for ($i=0; $i<=4; $i++) {
        if ($vetor[$i] % 2 == 0) {
            echo $vetor[$i];
            echo "<br>";
        }
    }
   
    echo "<pre>";
        print_r($vetor);
    echo "<pre>";


