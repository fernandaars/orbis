# language: pt-br

Funcionalidade: Avaliar livros lidos
	
	Como uma criança que irá usar o sistema Orbis
	Eu quero poder avaliar os livros que eu li
	
	Cenario: Criança leu o livro
		Dado Criança selecionou um livro
		E ela leu o livro
		Quando criança tentar avaliar o livro
		Então ela pode fazer a avaliação

	Cenario: Criança não leu o livro
		Dado Criança selecionou um livro
		E ela não leu o livro
		Quando criança tentar avaliar o livro
		Então ela não consegue avalia-lo

	