<?php

require "Operacao.php";
require "Calculadora.php";

$op = new Operacao('soma', 100, 450);
$calculadora = new Calculadora($op);               

//var_dump($op);
//var_dump($calculadora);

$calculadora -> acao();





