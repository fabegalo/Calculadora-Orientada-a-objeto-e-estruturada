// CALCULADORA ESTRUTURADA EM C
// Inclui Biblioteca
#include <stdio.h>
#include <string.h>
//#Inicio

main()
{
 
 // Declaracoes de Variaveis
 float Valor1,Valor2,resul,final;
 int escolha,cond,debug;
 cond = 0;
 Valor1 = 0;
 Valor2 = 0;
 resul = 0;
 final = 0;
 escolha = 0;
 debug = 0;
 

 
 printf("---------CALCULADORA--------\n");
 printf("- [1]- Adicao              -\n");
 printf("- [2]- Subtracao           -\n");
 printf("- [3]- Divisao             -\n");
 printf("- [4]- Multiplicacao       -\n");
 printf("----------------------------\n");
 
 // Loop para escolher uma opcao
 while (cond == 0)
 {

    printf("Escolha Uma Opcao: ");
    scanf("%d", &escolha);
    if (escolha >= 1 && escolha <=4){
        cond = 1;
    }
    else
    {
       printf("Opcao Invalida !!");
    }
    
 }



// Recebe o Valor1
 printf("Escolha o Valor1: "); 
 scanf("%f", &Valor1);
// Recebe o Valor2
 printf("Escolha o Valor2: ");
 scanf("%f", &Valor2);

  
  // escolhe a operacao
  switch (escolha)
  {
  case 1:
    resul = Valor1 + Valor2;
    break; 

  case 2:
    resul = Valor1 - Valor2;
    break;

  case 3:
    resul = Valor1 / Valor2;
    break;

  case 4:
    resul = Valor1 * Valor2;
    break;


  default:
    printf("Opcao Invalida!!");
    break;
  }
// mostra o resultado final
 printf("O Resultado e: %f", resul);
 getch();
}
