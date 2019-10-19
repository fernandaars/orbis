# language: pt-br

Funcionalidade: Efetuar Login
	
	Como uma criança que irá usar o sistema Orbis
	Eu quero entrar na minha conta
	Para que eu possa ler livros

	Cenário: Dados de login válidos
		Dado dados de login validos
		Quando a criança tenta entrar no sistema
		Então o login é efetuado

	Cenário: Dados de login inválidos
		Dado dados de login invalidos
		Quando a criança tenta entrar no sistema
		Então o login não é efetuado
		E uma mensagem de erro é mostrada
