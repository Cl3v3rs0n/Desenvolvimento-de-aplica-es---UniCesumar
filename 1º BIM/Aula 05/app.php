app.php

<?php

//importa os arquivos
require "Cliente.php";
require "ClienteFisico.php";
require "ClienteJuridico.php";

$Cli			= new Cliente();
$CliFisico		= new ClienteFisico();
$CliJuridico	= new ClienteJuridico();

//vendo o conteúdo dos objetos
echo '<pre>';
var_dump($Cli);
var_dump($CliFisico);
var_dump($CliJuridico);
echo '</pre>';