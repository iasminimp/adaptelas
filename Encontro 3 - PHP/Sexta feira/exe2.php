<?php  #by Iasmin Marques 13/07/2022
/*Escolha 2 atividade do bloco Praticando o que aprendemos - 2 (em Portugol) transcrevendo para a linguagem PHP.
https://classroom.google.com/u/0/c/NTM2MTE5NjUzNDc0/a/NDg4NDc1MTQ3NzQx/details 

3 - Faça um programa que leia um número e escreva se ele é par ou impar. O programa 
deve possuir duas funções: a função INICIO e uma segunda função criada por você que 
irá fazer a verificação. Dica: Um número par quando é dividido por 2, a divisão sempre 
possuirá resto 0.
*/

#echo "Digite o numero: ";
#fscanf(STDIN, "%d",$num);
#estava tendo problema ao inserir o elemento pelo terminal, ae pra resolver coloquei um valor fixo 
#(o que sempre vai dar maior que 18)


$num= 25; #trocar por 2/4/3/5/etc... para testar
if ($num%2 ==0){
    echo "Par";
}else{
    echo "Impar";
}

?>