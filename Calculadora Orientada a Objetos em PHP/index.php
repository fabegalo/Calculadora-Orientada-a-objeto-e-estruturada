<?php
#Inclui o arquivo Opercacoes.php
include("Operacoes.php");



#Loop que se repete até opção Sair ser selecionada. 
do {
    
 $exit = 0;
 $cond = 0;
 $cond2 = 0;
 $cond3 = 0;
 $cond4 = 0;
 $resul = 0;
 $final = 0;
 $escolha = 0;
 
 echo "                            ", PHP_EOL;
 echo "---------CALCULADORA--------", PHP_EOL;
 echo "- [1]- Adição              -", PHP_EOL;
 echo "- [2]- Subtração           -", PHP_EOL;
 echo "- [3]- Divisao             -", PHP_EOL;
 echo "- [4]- Multiplicacao       -", PHP_EOL;
 echo "- [5]- Sair                -", PHP_EOL;
 echo "----------------------------", PHP_EOL;
 
 #Loop que aceita opcoes entre 1 a 5
  while($cond == 0)
  { 
  $escolha = readline("\nEscolha Uma Opção: ");
    if ($escolha >=1 && $escolha <=5){
        break;
        $cond = 1;
     }
     else{
        echo "\nOpção Invalida !! ";
     }
  }
  
  #Finaliza o programa se escolha = 5.
  if ($escolha == 5) {
    $exit = 1;
 }
  else{
  
  #Recebe O Valor1 se for numero !.
  while ($cond3 == 0)
  {  
   $Valor1 = readline("Escolha O Valor 1: ");
    if (is_numeric($Valor1))
    {
        $cond3 = 1;
    }
     else
     {
        print("\nValor não é numero !!"); 
     }
  }
 
  
  
  while ($cond2 == 0)
  {  
    #Recebe O Valor2 se for numero
         while ($cond4 == 0)
         {  
             $Valor2 = readline("Escolha O Valor 2: ");
              if (is_numeric($Valor2))
              {
                  $cond4 = 1;
              }
              else
              {
                  print("\nValor não é numero !!"); 
              }
         }
 
    
 #Quando for divisao so recebe valores acima de 0
    if ($escolha == 3 && $Valor2 <= 0)
    {
    print("\n0 Não é divisivel !! "); 
    $cond4 = 0;
    }
     else
     {
        $cond2 = 1;
     }
  }

 #Atribui o resultado da operação na variavel final
 $resul = new Operacoes;
 $final = $resul -> operar($Valor1, $Valor2, $escolha);

 #Mostra o resultado final na tela
 echo ("Resultado: $final");
 }

}
while ($exit == 0);