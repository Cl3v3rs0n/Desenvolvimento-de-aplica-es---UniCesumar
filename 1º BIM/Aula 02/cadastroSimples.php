<?php
$nome = 'nome';
$usuario = 'usuario';
$senha = 'senha';

$nome = readline("cadastre o usuário: \n");
    if(($nome == $nome) && ($usuario ==$usuario) && ($senha == $senha)){
        echo "Olá " .$nome;
    }

$senha = readline("\nCadastre uma senha: \n");
    if(($senha) != ($senha)){
        echo "Senha incorreta";
    }
?>