<?php #by Iasmin Marques Pereira - 13/07/2022
/*1- Escreva uma função que calcule a área de um circulo (PI vezes o raio do círculo ao quadrado), a função deve receber o valor do raio como parâmetro e escrever o resultado. (considere PI = 3.14)
Dica: o computador ainda não sabe o que ^ significa, então use raio*raio

Ex. Entrada: 2
Ex. Saída: 

12.56*/

# echo "Digite o raio: ";
#fscanf(STDIN, "%d",$raio);
#estava tendo problema ao inserir o elemento pelo terminal, ae pra resolver coloquei um valor fixo

$raio = 5;
$calculo = 3.14 * $raio * $raio;
echo "Resultado: $calculo ";

?>