<?php #by Iasmin Marques Pereira - 13/07/2022
/*2- Escreva uma função que calcule a sua idade em segundos, a função deve receber a sua idade como parâmetro, e escrever o resultado. (para não dificultar muito não se preocupe com a data e a hora do seu nascimento nem quantos dias já passaram do seu aniversário, apenas com a sua idade em ANOS mesmo, ex: 23).

Ex: Entrada: 25
Ex: Saída: 

788400000*/

/*echo "Digite a idade que deseja converter: ";
fscanf(STDIN, "%d",$idade);*/
#estava tendo problema ao inserir o elemento pelo terminal, ae para resolver coloquei um valor fixo
$idade = 25; #valor fixo de idade
$conversao = 31536000 * $idade;
echo "Idade: $idade";
echo "Idade convertida: $conversao";



?>