<?php  #by Iasmin Marques 13/07/2022
/*Escolha 2 atividade do bloco Praticando o que aprendemos - 2 (em Portugol) transcrevendo para a linguagem PHP.
https://classroom.google.com/u/0/c/NTM2MTE5NjUzNDc0/a/NDg4NDc1MTQ3NzQx/details 

1 - Faça um programa que leia a idade e escreva se ele possui mais do que 18 anos ou não. 
O programa deve possuir duas funções: a função INICIO e uma segunda função criada por você 
que irá comparar as idades.*/

# echo "Digite o idade: ";
#fscanf(STDIN, "%d",$idade);
#estava tendo problema ao inserir o elemento pelo terminal, ae pra resolver coloquei um valor fixo 
#(o que sempre vai dar maior que 18)


$idade = 25; #trocar por 13/18/etc... para testar
if ($idade>=18){
    echo "Possui mais de 18 anos";
}else{
    echo "Possui menos que 18 anos";
}


?>