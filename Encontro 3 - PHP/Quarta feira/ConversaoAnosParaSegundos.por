
/* by Iasmin Marques Pereira (05/07/2022) 

2- Escreva uma função que calcule a sua idade em segundos, a função deve receber a sua idade 
como parâmetro, e escrever o resultado. (para não dificultar muito não se preocupe com a data e 
a hora do seu nascimento nem quantos dias já passaram do seu aniversário, apenas com a sua idade 
em ANOS mesmo, ex: 23).

Ex: Entrada: 25
Ex: Saída: 

788400000
 */
 
programa
{
	funcao inicio()
	{
		inteiro idade, conversao
		
		escreva("Digite sua idade: ") // usuario insere informação da idade
		leia(idade)
		
	    conversao = 31536000 * idade //calculo da conversao de ANOS para SEGUNDOS
		
		escreva("Idade convertida para segundos: ", conversao, "\n")
	}
}

