
/* By Iasmin Marques Pereira

1- Escreva uma função que calcule a área de um circulo (PI vezes o raio do círculo ao quadrado), 
a função deve receber o valor do raio como parâmetro e escrever o resultado. (considere PI = 3.14)

Dica: o computador ainda não sabe o que ^ significa, então use raio*raio // A = pi * r*r
 */
 
programa 
{ 
	funcao inicio () 
	{ 
		real raio, area, pi = 3.14
		
		escreva("Digite o raio do circulo: ") // usuario insere informação do raio
		leia(raio)
		
		area = pi * raio * raio //calculo da area do circulo
		
		escreva("Área do circulo é: ", area, "\n")
	} 
}

