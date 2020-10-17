<?php
        $n1 = $_GET "numero1";
        $n2 = $_GET "numero2";
        $operacao = $_GET "operacao";
        $a = []
        if($operacao == "soma")
            $a = $n1 + $n2;
            echo $a = "resultado";
        else if($operacao == "subtracao")
            $a = $n1 - $n2;
            echo $a = "resultado";
        else if($operacao == "multiplicacao")
            $a = $n1 * $n2;
            echo $a = "resultado";
        else
            $a = $n1 / $n2;
         echo "O resultado da operação é: $a";
    ?>      
    </body>
</html>