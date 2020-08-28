<?php

$primeiroNumero = $_GET['primeiroNumero'];
$segundoNumero = $_GET['segundoNumero'];

$soma = $primeiroNumero + $segundoNumero;

echo "O resultado  é $soma" . "<br>";

if($soma % 2 ==0)
{
    echo "é par";
}
else
{
    echo "é impar";
}










