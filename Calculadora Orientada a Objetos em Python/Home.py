# Calculadora Orientada a Objeto feita em Python !! :D

#Importa o arquivo operacoes.py e suas classes !
import operacoes

#Variavel Utilizada para quebrar o Loop 
cond = 0

#Front-End '-'
print("Esta Funcionando")
print("---------CALCULADORA--------")
print("- [1]- Adição              -")
print("- [2]- Subtração           -")
print("- [3]- Divisao             -")
print("- [4]- Multiplicacao       -")
print("----------------------------")

#Loop para escolher uma opção entre 1 a 4 !
while cond == 0:
    escolha = int(input("Escolha Uma Opção: "))
    if escolha >= 1 and escolha <= 4:
        cond = 1
    else:
        print("Opção Invalida !!")

#Variaveis que recebem o valor das entradas !!
Valor1 = float(input("Escolha O Valor 1: "))
Valor2 = float(input("Escolha O Valor 2: "))

#Variavel Final recebe o retorno de Resul que retorna da função operar !
#Nota: operacoes.operacoes.operar é o caminho aonde se encontra a função !
final = resul = operacoes.operacoes.operar(Valor1, Valor2, escolha)


#Mostra o Resultado da Operação Final !
print("Resultado: ", final)
