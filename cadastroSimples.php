<?php
$nome = 'nome';
$usuario = 'usuario';
$senha = 'senha';

$nome = readline("Informe o usuário: \n");
    if(($nome == $nome) && ($usuario ==$usuario) && ($senha == $senha)){
        echo "Olá " .$nome;
    }

$senha = readline("\nDigite uma senha: \n");
    if(($senha) != ($senha)){
        echo "Senha incorreta";
    }
?>