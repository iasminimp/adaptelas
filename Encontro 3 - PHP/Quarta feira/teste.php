<?php #by Iasmin Marques Pereira - 13/07/2022
/*1- Escreva uma função que calcule a área de um circulo (PI vezes o raio do círculo ao quadrado), a função deve receber o valor do raio como parâmetro e escrever o resultado. (considere PI = 3.14)
Dica: o computador ainda não sabe o que ^ significa, então use raio*raio

Ex. Entrada: 2
Ex. Saída: 

12.56

2- Escreva uma função que calcule a sua idade em segundos, a função deve receber a sua idade como parâmetro, e escrever o resultado. (para não dificultar muito não se preocupe com a data e a hora do seu nascimento nem quantos dias já passaram do seu aniversário, apenas com a sua idade em ANOS mesmo, ex: 23).

Ex: Entrada: 25
Ex: Saída: 

788400000*/
//  Questao 1;
echo "Digite o raio: ";
fscanf(STDIN, "%d",$raio);
$calculo = 3.14 * $raio * $raio;
echo "Resultado: $calculo ";


?>
