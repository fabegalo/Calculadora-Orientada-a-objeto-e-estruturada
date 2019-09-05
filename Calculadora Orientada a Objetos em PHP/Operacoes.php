<?php
#Inclui as Classes
include("Soma.php");
include("Subtracao.php");
include("Divisao.php");
include("Multiplicacao.php");

#Cria a classe operações
class Operacoes
{  
   private $resul;
   private $final;
    #Cria a função operar que recebe valor 1, valor2 e a escolha da operação.
    public function operar($Valor1, $Valor2, $entrada)
   {
     #Escolhe a operação a ser executada.
     switch ($entrada) {
      case '1':
          # code...
          $this->resul = new Soma;
          $this->final = $this->resul -> somar($Valor1,$Valor2);
          break;
      case '2':
          $this->resul = new subtracao;
          $this->final = $this->resul -> subtrair($Valor1,$Valor2);
          break;     
      case '3':
          # code...
          $this->resul = new divisao;
          $this->final = $this->resul -> dividir($Valor1,$Valor2);
          break;
      case '4':
          # code...
          $this->resul = new multiplicacao;
          $this->final = $this->resul -> multiplicar($Valor1,$Valor2);
          break;   
      default:
          # code...
          echo ("Escolha Invalida!!");
          break;
        }
        
        return $this->final;

    }
 
}