<?php

/**
 * classe Operacao
 */

 class Operacao
 {
     //atributos da classe
     public $numero1;
     public $numero2;
     public $tipo;
     public $resultado;

     // método construtor
    public function __construct($tipo, $numero1, $numero2)
    {
        $this -> tipo = $tipo;
        $this -> $numero1 = $numero1;
        $this -> $numero2 = $numero2;
    }
    // verifica o tipo do cálculo
    public function calculo()
    {
        switch ($this -> tipo)
        {
            case "soma":
                $this -> soma();
                break;  
            case 'subtracao':
                $this -> subtracao();
                break;
            case 'multiplicacao':
                $this -> multiplicacao();
                break;
            case 'divisao':
                $this -> divisao();
                break;
            default:
                echo "tipo inválido";
                break;
        }

    }
    // regra das operações
     public function soma()
     {
        $this->$resultado = this->numero1 + this->numero2;
     }

     public function subtracao()
     {
        $this->$resultado = this->numero1 - this->numero2;
     }

     public function multiplicacao()
     {
        $this->$resultado = this->numero1 * this->numero2;
     }

     public function divisao()
     {
        $this->$resultado = this->numero1 / this->numero2;
     }
     

 }
