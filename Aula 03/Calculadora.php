<?php
/**
 * classe Calculadora
 */

 class Calculadora
 {
     //atributos
     public $operacao;

     //metodos
    public function __construct($operacao)
    {
        $this -> operacao = $operacao;
    }

     public function acao()
     {
        $this -> operacao -> calculo(); //chama o método calculo da operação
        echo "Resultado: " . $this -> operacao -> resultado;
     }

 }