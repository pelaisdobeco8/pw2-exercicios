<?php

$operacao = $_GET["operacao"];

if ($operacao == "soma"){
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];
    $n4 = $_GET["n4"];
    
    $resul = $n1+$n2+$n3+$n4;
    echo $resul;
}
if ($operacao == "multiplicacao"){
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];
    $n4 = $_GET["n4"];
    
    $resul = $n1*$n2*$n3*$n4;
    echo $resul;
}
if ($operacao == "subtracao"){
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    
    $resul = $n1-$n2;
    echo $resul;
}
if ($operacao == "divisao"){
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    
    $resul = $n1/$n2;
    echo $resul;
}

