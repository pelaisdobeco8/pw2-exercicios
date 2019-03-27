<?php

    $vetor = array();
    $vetor[0] = $_GET["v1"];
    $vetor[1] = $_GET["v2"];
    $vetor[2] = $_GET["v3"];
    $vetor[3] = $_GET["v4"];
    $vetor[4] = $_GET["v5"];
    
    echo "<pre>";
        print_r($vetor);
    echo "<pre>";
    
    $par = array();
    $multiplo = array();
    $maiorn = 0;
    
        //questao a:
    for ($i=0; $i<=4; $i++){
        if ($vetor[$i]>$maiorn){
            $maiorn = $vetor[$i];
        }
        //questao b:
        if ($vetor[$i]%2 == 0){
            $par[] = $vetor[$i];
        }
        //questao c:
        if (($vetor[$i]%3 == 0) && ($vetor[$i]%5 == 0)){
            $multiplo[] = $vetor[$i];
        }
    }
    
    echo "O maior valor entre os números do vetor é: <br> $maiorn". "<br>";
    
    echo "Os números pares são: <br>";
    for ($j=0; $j<count($par); $j++){
        echo $par[$j]. "<br>";
    }
    
    echo "Os valores múltiplos de 3 e de 5 são: <br>";
    for ($k=0; $k<count($multiplo); $k++){
        echo $multiplo[$k]. "<br>";
    }
        
    


