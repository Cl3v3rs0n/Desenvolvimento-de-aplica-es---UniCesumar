<?php

Function main() {
	
	$num = 0;
	$r = 0;
	$e = 0;
	
	$num = readline("Informe um número: \n");
	while ($num <= 0) {
		$num = readline("Informe um número: \n");
	}
	
	$e = pow($num, $num);
	$r = sqrt($num);
	
	$eformatada = number_format($e, 2);
	echo "potencia: $eformatada \n";
    echo "A raiz de $num e: $r";
    
    echo "Muito bem";
}

main();