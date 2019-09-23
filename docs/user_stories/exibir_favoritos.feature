# language: pt-br

Funcionalidade: Exibir Lista de Favoritos
	
	Como uma criança que irá usar o sistema Orbis
	Eu quero ver a minha lista de favoritos

	Cenário: Criança tem livros na lista de favoritos
		Dado que existem livros na lista
		Quando a criança solicitar a opção ver a lista de favoritos
		Então os livros da lista de favoritos são exibidos

	Cenário: Lista de favoritos está vazia
		Dado que não existem livros na lista
		Quando a criança solicitar a opção ver a lista de favoritos
		Então é exibida uma mensagem de lista vazia
