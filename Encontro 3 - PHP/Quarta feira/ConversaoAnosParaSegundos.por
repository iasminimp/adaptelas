
/* by Iasmin Marques Pereira (05/07/2022) 

2- Escreva uma fun��o que calcule a sua idade em segundos, a fun��o deve receber a sua idade 
como par�metro, e escrever o resultado. (para n�o dificultar muito n�o se preocupe com a data e 
a hora do seu nascimento nem quantos dias j� passaram do seu anivers�rio, apenas com a sua idade 
em ANOS mesmo, ex: 23).

Ex: Entrada: 25
Ex: Sa�da: 

788400000
 */
 
programa
{
	funcao inicio()
	{
		inteiro idade, conversao
		
		escreva("Digite sua idade: ") // usuario insere informa��o da idade
		leia(idade)
		
	    conversao = 31536000 * idade //calculo da conversao de ANOS para SEGUNDOS
		
		escreva("Idade convertida para segundos: ", conversao, "\n")
	}
}

