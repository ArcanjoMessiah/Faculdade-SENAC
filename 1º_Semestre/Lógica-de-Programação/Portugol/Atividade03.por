programa {
	funcao inicio() {
		
		real mes1, mes2, consumo, conta
		
		escreva("  Calculo de conta \n\n\n")
		
		escreva(" Informe a leitura do m�s anterior: ")
		leia (mes1)
		
		escreva(" Informe a leitura do m�s atual; ")
		leia (mes2)
		
		consumo= mes2-mes1
		
		conta= consumo*3.00
		
		escreva (" O seu consumo foi de ", consumo, " metros cubicos \n\n")
		
		escreva (" O total da sua conta � de : R$ ", conta)
		
		
		
	}
}
