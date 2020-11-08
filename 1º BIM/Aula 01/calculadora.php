<?php
echo "Iniciando a calculadora" . PHP_EOL;

echo "Digite X para fechar o programa!" . PHP_EOL;
echo "Digite + para soma"  . PHP_EOL;
echo "Digite - para subtração"  . PHP_EOL;
echo "Digite * para multiplicar" . PHP_EOL;
echo "Digite / para dividir"  . PHP_EOL;


$operacao = readline('Informe a operação desejada: ');

$num1 = readline('Informe o primeiro numero: ');
$num2 = readline('Informe o segundo numero: ');



if ($operacao == 'X') {
	echo "Saiu do programa";
	return false;
} else if ($operacao == '+') {

  $resultado = $num1 + $num2; 

} else if ($operacao == '-') {

  $resultado = $num1 - $num2; 

} else if ($operacao == '*') {

  $resultado = $num1 * $num2; 

} else if ($operacao == '/') {

  $resultado = $num1 / $num2; 

}

echo "Resultado da " . $num1 . " " . $operacao . " " . $num2 . " = " . $resultado; 