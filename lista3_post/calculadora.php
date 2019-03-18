<?php

$op = $_POST["operacao"];
$N1 = $_POST["n1"];
$N2 = $_POST["n2"];

if ($op == "som"){
    $opsoma = $N1 + $N2;
    echo "Resultado da soma: $opsoma";
}
if ($op == "sub") {
    $opsub = $N1 - $N2;
    echo "Resultado da subtração: $opsub";
}
if ($op == "div") {
    $opdiv = $N1/$N2;
    echo "Resultado da divisão: $opdiv";
}
if ($op == "mult") {
    $opmult = $N1 * $N2;
    echo "Resultado da multiplicação: $opmult";
}

