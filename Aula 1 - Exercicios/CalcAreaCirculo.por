
/* By Iasmin Marques Pereira

1- Escreva uma fun��o que calcule a �rea de um circulo (PI vezes o raio do c�rculo ao quadrado), 
a fun��o deve receber o valor do raio como par�metro e escrever o resultado. (considere PI = 3.14)

Dica: o computador ainda n�o sabe o que ^ significa, ent�o use raio*raio // A = pi * r*r
 */
 
programa 
{ 
	funcao inicio () 
	{ 
		real raio, area, pi = 3.14
		
		escreva("Digite o raio do circulo: ") // usuario insere informa��o do raio
		leia(raio)
		
		area = pi * raio * raio //calculo da area do circulo
		
		escreva("�rea do circulo �: ", area, "\n")
	} 
}

