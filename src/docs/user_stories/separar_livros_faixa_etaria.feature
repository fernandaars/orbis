# language: pt-br

Funcionalidade: Separar Livros por Faixa Etária
	
	Como o responsável da criança que irá usar o sistema Orbis
	Eu quero que os livros sejam separados por faixa etária
	Para que a criança tenha acesso aos livros compatíveis com a idade dela

	Cenário: Criança busca por livros no sistema
		Dado a idade da criança
		E o conjunto de livros no sistema
		Quando ela entra em qualquer categoria de livros
		Então aparecem apenas os livros compatíveis para a faixa etária dela