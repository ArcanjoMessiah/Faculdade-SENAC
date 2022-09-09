programa {
	funcao inicio() {
		real preco, custo, venda, lucro, lucrot, estoque
		
		escreva (" Calculo do lucro de vendas \n\n")
		
		escreva(" Informe o valor de venda do produto: R$ ")
		leia (preco)
		
		escreva(" Informa o preço de curso do produto  R$ ")
		leia (custo)
		
		escreva (" informe o total de estoque do produto : ")
		leia (estoque)
		
		lucro= preco-custo
		lucrot= lucro*estoque
		
		escreva("\n\n O lucro por unidade é de R$ ", lucro )
		escreva("\n\n O lucro do total do estoque será e R$ ", lucrot)
		
		
		
	}
}
