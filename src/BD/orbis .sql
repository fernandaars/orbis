-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 19/10/2019 às 02:26
-- Versão do servidor: 10.4.8-MariaDB
-- Versão do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `orbis`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `autor`
--

CREATE TABLE `autor` (
  `codAutor` int(255) NOT NULL,
  `nome` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `autor`
--

INSERT INTO `autor` (`codAutor`, `nome`) VALUES
(1, 'Ruth Rocha'),
(2, 'H. G. Wells'),
(3, 'Jules Verne'),
(4, 'R. L. Stine'),
(5, 'Irmãos Grimm'),
(6, 'Domingos Pellegrini'),
(7, 'J. K. Rowling'),
(8, 'Katherine Paterson'),
(9, 'Lewis Carroll'),
(10, 'Roald Dahl'),
(11, 'José Mauro de Vasconcelos'),
(12, 'Diana Wynne Jones'),
(13, 'Lucia Machado de Almeida'),
(14, 'Marcos Rey'),
(15, 'Antoine de Saint-Exupery'),
(16, 'Maurice Sendak'),
(17, 'Eleanor H. Porter'),
(18, 'Lemony Snicket'),
(19, 'Ziraldo'),
(20, 'Lyman Frank Baum'),
(21, 'Frances Hodgson Burnett');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `codCategoria` int(255) NOT NULL,
  `nome` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`codCategoria`, `nome`) VALUES
(1, 'Aventura'),
(2, 'Comédia'),
(3, 'Educacional'),
(4, 'Fantasia'),
(5, 'Mistério'),
(6, 'Romance'),
(7, 'Sci-fi'),
(8, 'Terror'),
(9, 'Drama');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoriaLivro`
--

CREATE TABLE `categoriaLivro` (
  `isbn` bigint(255) NOT NULL,
  `codCategoria` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `categoriaLivro`
--

INSERT INTO `categoriaLivro` (`isbn`, `codCategoria`) VALUES
(855651068, 7),
(8501075469, 4),
(8501075469, 6),
(8506055105, 2),
(8506055105, 3),
(8506067588, 9),
(8508018967, 5),
(8508145551, 8),
(8516050521, 9),
(8528103269, 3),
(8532511015, 1),
(8532511015, 4),
(8535900942, 1),
(8535900942, 9),
(8537801720, 4),
(8537802743, 4),
(8537809667, 4),
(8551300156, 9),
(8551300164, 9),
(8572328890, 1),
(8578272412, 9),
(8582180306, 9),
(9898205318, 4),
(9788529600499, 9),
(9788576765646, 8),
(9788595081512, 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `editora`
--

CREATE TABLE `editora` (
  `codEditora` int(255) NOT NULL,
  `nome` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `editora`
--

INSERT INTO `editora` (`codEditora`, `nome`) VALUES
(1, 'Salamandra'),
(2, 'Suma'),
(3, 'Martin Claret'),
(4, 'Fundamento'),
(5, 'Zahar'),
(6, 'Literatura para todos'),
(7, 'Rocco'),
(8, 'WMF'),
(9, 'Melhoramentos'),
(10, 'Galera'),
(11, 'África'),
(12, 'Novo Século'),
(13, 'Autêntica'),
(14, 'Seguinte'),
(15, 'Dracaena');

-- --------------------------------------------------------

--
-- Estrutura para tabela `editoraLivro`
--

CREATE TABLE `editoraLivro` (
  `isbn` bigint(255) NOT NULL,
  `codEditora` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `editoraLivro`
--

INSERT INTO `editoraLivro` (`isbn`, `codEditora`) VALUES
(855651068, 3),
(8501075469, 10),
(8506055105, 9),
(8506067588, 9),
(8508018967, 11),
(8508145551, 11),
(8516050521, 1),
(8528103269, 1),
(8532511015, 7),
(8535900942, 14),
(8537801720, 2),
(8537802743, 5),
(8537809667, 5),
(8551300156, 13),
(8551300164, 13),
(8572328890, 5),
(8578272412, 8),
(8582180306, 15),
(9898205318, 4),
(9788529600499, 6),
(9788576765646, 4),
(9788595081512, 12);

-- --------------------------------------------------------

--
-- Estrutura para tabela `livroAutor`
--

CREATE TABLE `livroAutor` (
  `isbn` bigint(255) NOT NULL,
  `codAutor` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `livroAutor`
--

INSERT INTO `livroAutor` (`isbn`, `codAutor`) VALUES
(855651068, 2),
(8501075469, 12),
(8506055105, 19),
(8506067588, 11),
(8508018967, 14),
(8508145551, 13),
(8516050521, 8),
(8528103269, 1),
(8532511015, 7),
(8535900942, 18),
(8537801720, 9),
(8537802743, 5),
(8537809667, 20),
(8551300156, 17),
(8551300164, 17),
(8572328890, 3),
(8578272412, 10),
(8582180306, 21),
(9898205318, 16),
(9788529600499, 6),
(9788576765646, 4),
(9788595081512, 15);

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `isbn` bigint(255) NOT NULL,
  `titulo` varchar(80) NOT NULL,
  `codAutor` int(255) NOT NULL,
  `codEditora` int(255) NOT NULL,
  `anoPublicacao` bigint(255) NOT NULL,
  `faixaEtaria` int(255) DEFAULT NULL,
  `descricao` text NOT NULL,
  `pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`isbn`, `titulo`, `codAutor`, `codEditora`, `anoPublicacao`, `faixaEtaria`, `descricao`, `pdf`) VALUES
(855651068, 'A Máquina do Tempo', 2, 2, 2018, 3, 'A bordo de sua Máquina do Tempo, o cientista que narra esta história parte do século XIX para o ano de 802701. Nesse futuro distante, ele descobre que o sofrimento da humanidade foi transformado em beleza, felicidade e paz. A Terra é habitada pelos dóceis Eloi, uma espécie que descende dos seres humanos e já formou uma antiga e enorme civilização. Mas os Eloi parecem ter medo do escuro, e têm todos os motivos para isso: em túneis subterrâneos vivem os Morlocks, seus maiores inimigos. Quando a Máquina do Tempo que levou o Viajante some, ele é obrigado a descer às profundezas para recuperá-la e voltar ao presente.', 'https://drive.google.com/uc?export=download&id=1TFbP8xei2Fs6xLXDh6G6b2rlfKlzuUsN\r\n'),
(8501075469, 'O Castelo Animado', 12, 10, 2007, 3, 'O Castelo Animado conta a história de Sophie, uma jovem de 18 anos, amaldiçoada por uma bruxa que a transforma em uma velha de 90 anos. Para se livrar da maldição, ela foge e emprega-se no Castelo de Howl. Essa “velha senhora”, dinâmica e misteriosa, dá nova vida à antiga habitação onde vivem Marko, um jovem aprendiz, e Calcifer, o demônio do fogo, responsável pela “vida” do castelo. Além de ficar condenada ao corpo de uma senhora, o feitiço impede que Sophie revele que está sob uma maldição. Ainda assim, ela e Calcifer, também amaldiçoado, fazem um pacto, jurando que um vai tentar quebrar a maldição do outro, descobrindo sua natureza. O livro mergulha fundo em seus personagens para encontrar humanidade e compaixão nos corações de todos eles. ', 'https://drive.google.com/uc?export=download&id=1-c5S4EfpLPRI3YN6h3OzRrdE7WQbIVK5'),
(8506055105, 'O Menino Maluquinho', 19, 9, 1999, 1, 'Na grande obra infantil de Ziraldo, verso e desenho contam a história de um menino traquinas que aprontava muita confusão. Alegria da casa, liderava a garotada, era sabido e um amigão. Fazia versinhos, canções, inventava brincadeiras. Tirava dez em todas as matérias, mas era zero em comportamento. Menino maluquinho, diziam. Mas na verdade ele era um menino feliz.', 'https://drive.google.com/uc?export=download&id=1HlGD5CBr1LWoIHMas4v8DS_-akWxw0z-'),
(8506067588, 'Meu Pé de Laranja Lima', 11, 9, 2013, 3, 'O protagonista Zezé tem 6 anos e mora num bairro modesto, na zona norte do Rio de Janeiro. O pai está desempregado, e a família passa por dificuldades. O menino vive aprontando, sem jamais se conformar com as limitações que o mundo lhe impõe – viaja com sua imaginação, brinca, explora, descobre, responde aos adultos, mete-se em confusões, causa pequenos desastres. As surras que lhe aplicam seu pai e sua irmã mais velha são seu suplício, a ponto de fazê-lo querer desistir da vida. No entanto, o apego ao mundo que criou felizmente sempre fala mais alto. Só não há remédio para a dor, para a perda. E Zezé muito cedo descobrirá isso.', 'https://drive.google.com/uc?export=download&id=1bc064e8PKqqbmccYZPqGfjRMC9RpFW0T'),
(8508018967, 'O Mistério do Cinco Estrelas', 14, 11, 1995, 3, 'Em O Mistério do 5 Estrelas , um homem e assassinado no apartamento 222 do Emperor Park Hotel. O único que viu o corpo foi Leo, o mensageiro. Mas ninguém acredita em suas historias, a não ser seus amigos Gino e Angela. Leo e apenas um garoto e seus inimigos sao poderosos. Quem conseguira desvendar o mistério do cinco estrelas?', 'https://drive.google.com/uc?export=download&id=1Uh4azgn-TetQgQjbV9BE8Y02kIll1ujJ'),
(8508145551, 'O Escaravelho do Diabo', 13, 11, 2002, 3, 'A única pista que Alberto tem sobre a série de assassinatos que está acontecendo é que vítimas ruivas recebem um escaravelho pelo correio antes de morrer. Ele precisa descobrir o que está por trás desses crimes misteriosos antes que outras mortes ocorram na cidade.', 'https://drive.google.com/uc?export=download&id=16utVJjZ-ACm8Pex4PcXPp8WZzn05WK6i'),
(8516050521, 'Ponte para Terabítia', 8, 1, 2006, 3, 'Jess Aarons, um garoto de 10 anos, passou o verão treinando para ser o campeão de corrida da escola. Na volta as aulas, e ultrapassado por uma aluna nova. Os dois tornam-se grandes amigos, e criam um reino imaginário chamado Terabítia , onde governam soberanos protegidos das ameaças e zombarias da vida cotidiana. Ate que um dia, uma fatalidade os separa, e Jess precisa ser forte para enfrentar essa triste realidade.', 'https://drive.google.com/uc?export=download&id=1GT6nVkgIFd8Lz1lbDIllgwRRGCqz03aU'),
(8528103269, 'Marcelo, Marmelo, Martelo', 1, 1, 1999, 1, 'Este livro nos mostra a esperteza e vivacidade com que seus personagens resolvem seus impasses: Marcelo cria palavras novas, Terezinha e Gabriela descobrem a identidade na diferença e Carlos Alberto entende que não temos nada sem amigos.', 'https://drive.google.com/uc?export=download&id=179YRFhqmNpzQ4hr7-7mGqquy7iI8O7bc'),
(8532511015, 'Harry Potter e a Pedra Filosofal', 7, 7, 2000, 2, 'Em Harry Potter e a Pedra Filosofal, o leitor é apresentado a Harry, filho de Tiago e Lílian Potter, feiticeiros que foram assassinados por um poderosíssimo bruxo, quando ele ainda era um bebê. Com isso, o menino acaba sendo levado para a casa dos tios que nada tinham a ver com o sobrenatural pelo contrário. Até os 10 anos, Harry foi uma espécie de gata borralheira: maltratado pelos tios, herdava roupas velhas do primo gorducho, tinha óculos remendados e era tratado como um estorvo. No dia de seu aniversário de 11 anos, entretanto, ele parece deslizar por um buraco sem fundo, que o conduz a um mundo mágico. Descobre sua verdadeira história e seu destino: ser um aprendiz de feiticeiro até o dia em que terá que enfrentar a pior força do mal, o terrível Lorde das Trevas. ', 'https://drive.google.com/uc?export=download&id=1yqCDQ3O4OtKkwWEFyjmKnKNj8coo6Dj8'),
(8535900942, 'Desventuras em Série – Mau Começo', 18, 14, 2005, 3, '\"Mau começo\" é o primeiro volume de uma série em que Lemony Snicket conta as desventuras dos irmãos Baudelaire. Violet, Klaus e Sunny são encantadores e inteligentes, mas ocupam o primeiro lugar na classificação das pessoas mais infelizes do mundo. De fato, a infelicidade segue os seus passos desde a primeira página, quando eles estão na praia e recebem uma trágica notícia. Esses ímãs que atraem desgraças terão de enfrentar, por exemplo, roupas que pinicam o corpo, um gosmento vilão dominado pela cobiça, um incêndio calamitoso e mingau frio no café da manhã. É por isso que, logo na quarta capa, Snicket avisa ao leitor: \'Não há nada que o impeça de fechar o livro imediatamente e sair para uma outra leitura sobre coisas felizes, se é isso que você prefere\'.', 'https://drive.google.com/uc?export=download&id=1eB42oCqLuPLgGSdKSjCxwcdFjgQIVrob'),
(8537801720, 'Alice no País das Maravilhas', 9, 5, 2010, 2, 'Alice era uma garota curiosa e imaginativa, comum como qualquer outra, até ser subitamente transportada para um lugar que era tudo menos comum. Após entrar na toca de um coelho, a pequena Alice se vê em um mundo mágico, comandado por uma rainha neurótica e habitado por seres fantásticos, como uma lagarta falante, um filhote de cachorro do tamanho de uma casa e um gato que aparece e desaparece em um piscar de olhos. Será que esse mundo é mesmo real? E, se for, como Alice fará para voltar para casa?', 'https://drive.google.com/uc?export=download&id=1_MwD-yrhlG14dPqikWcBm4EXUFkjEmKG'),
(8537802743, 'Contos de Fadas', 5, 5, 2010, 2, 'As mais famosas histórias infantis, em suas versões originais, sem adaptações, de Grimm, Perrault e Andersen, entre outros. Nesses contos de fadas, bruxas, princesas, encantamentos e finais felizes! ', 'https://drive.google.com/uc?export=download&id=1uqcCIDr8wfxl6VCRcO5eycdvIMZy3k0H'),
(8537809667, 'O Mágico de Oz', 20, 5, 2013, 2, 'A obra nos conta a encantadora história da garota Dorothy, que é levada por um ciclone à fantástica Terra de Oz, onde entra em contato com o Homem de Lata, o Espantalho, o velho mágico e uma série de outros personagens fabulosos, em uma jornada de pura magia e beleza.', 'https://drive.google.com/uc?export=download&id=1gVB9Oxd-9JQ9yen7ZnEcLjUpRMrQvq63'),
(8551300156, 'Pollyanna Moça', 17, 13, 2016, 3, 'Pollyanna agora é uma encantadora adolescente, amada por todos os que conviveram com ela e aprenderam o Jogo do Contente. Sua fama de pessoa especial ultrapassa os limites de Beldingsville. Quando recebe um convite para passar uma temporada em Boston, novas experiências vêm enriquecer sua vida. Ela passa a conviver com pessoas interessantes, faz amizades, ensina e aprende muito, e ajuda pessoas necessitadas que vai encontrando em seu caminho.e as emoções pelas quais passam as pessoas apaixonadas.', 'https://drive.google.com/uc?export=download&id=1lF8WryTRClHZb0zww4W_uxuM-0jMe9cY'),
(8551300164, 'Pollyanna', 17, 13, 2016, 2, 'Órfã e pai e mãe, Pollyanna, uma menina de 11 anos, é acolhida pela tia Polly, sua única parente viva. Rica e intransigente, a tia é desprovida de compreensão e afetividade, e recebe a menina em sua casa como um dever. Pollyanna, por sua vez, é uma menina encantadora, que a todos conquista com sua paixão pela vida e pelas pessoas, seu otimismo, sua alegria de viver... e o Jogo do Contente, que pratica e ensina a quem quiser aprender. Um jogo em que ninguém perde, todos ganham – e se transformam.', 'https://drive.google.com/uc?export=download&id=1rpsFcrFpSnnsCNaeL-mKRBVK3cyzMlR4'),
(8572328890, 'A Volta ao Mundo em 80 Dias', 3, 3, 2012, 3, 'Phileas Fogg, um inglês pacato, calmo, metódico e solitário, cumpria todos os dias a mesma rotina. Misterioso, nunca compartilhava sua intimidade com ninguém. Mas tudo mudou quando apostou com alguns sócios do clube metade de sua fortuna, afirmando que daria a volta ao mundo em 80 dias! Era o ano de 1872, e ele e seu novo criado, Passepartout, embarcaram em uma aventura que nenhum dos dois imaginava como seria o seu fim!', 'https://drive.google.com/uc?export=download&id=1NDxsqbPdkL7fxV2YDU0bxgJKVJbs97Cm'),
(8578272412, 'Matilda', 10, 8, 2010, 2, 'Matilda adorava ler. Passava horas na biblioteca, lendo um livro atrás do outro. Mas, quanto mais ela lia e aprendia, mais aumentava seus problemas. Os pais viam televisão o tempo todo e achavam muito estranho uma menina gostar tanto de ler. A diretora da escola achava Matilda uma fingida, pois ela não acreditava que uma criança tão nova pudesse saber tantas coisas. Depois de mil peripécias, em que tentou se livrar da tirania dos pais e da diretora, Matilda acabou encontrando a compreensão de uma professora, srta. Mel, com quem foi morar.', 'https://drive.google.com/uc?export=download&id=1W4JfV5KUV7SM_HzT0CoLHjVwF2FEzHNU'),
(8582180306, 'O Jardim Secreto ', 21, 15, 2012, 2, 'Órfã, Mary chega da Índia para morar com o tio viúvo em uma propriedade rural da Inglaterra. A princípio deslocada naquele imenso casarão, a menina, aos poucos, explora os arredores e encontra o jardim secreto, onde depara com uma natureza exuberante. Então redescobre o amor, faz vários amigos e ainda devolve ao primo a alegria de viver.', 'https://drive.google.com/uc?export=download&id=12gfKzAjsJInV-eOCdZ9Jjz3QFGYfDilz'),
(9898205318, 'Onde Vivem os Monstros', 16, 4, 2014, 1, 'A história é a do menino Max. Vestido com sua fantasia de lobo, faz tamanha malcriação que é mandado para o quarto sem jantar. Lá, ele se transporta para uma floresta, embarca em um miniveleiro, navega pelo oceano, por dias, semanas, meses, até chegar numa ilha, onde vivem os monstros...', 'https://drive.google.com/uc?export=download&id=1BBDjcvKcbCJksh9qydLwdi9HqelaCF_R'),
(9788529600499, 'Família Composta', 6, 6, 2006, 2, 'Família composta é um livro que fala um pouco da nossa vida e a das pessoas que nós conhecemos. Um texto que trata de afetividade, problemas de relacionamento, família, amor, valores sociais, poesia, meios de comunicação, enfim, coisas do dia-a-dia dos brasileiros. Existem diferentes maneiras de escrever um texto. Este livro, Família composta, pertence ao que nós chamamos de dramaturgia, ou seja, um texto que pode ser lido e ao mesmo tempo encenado no teatro ou transformado em filme. ', 'https://drive.google.com/uc?export=download&id=1c7feAhevRGkM7iNfsWcVqg4o78r7NY8Y'),
(9788576765646, 'Um Dia no Parque do Terror', 4, 4, 2009, 3, 'A família de Lizzi queria ir ao Jardim Zoológico, mas acabou se perdendo. A sorte foi ter encontrado um outro parque de diversões superlegal: o Parque do Terror. As atrações são bem assustadoras. Um brinquedo mais amedrontador que o outro. Mas, de repente, coisas bizarras começam a acontecer, e o que era diversão se torna real demais...', 'https://drive.google.com/uc?export=download&id=1slJ2BaxtneH10oAUfIPspXcQzL7uBcrD'),
(9788595081512, 'O Pequeno Príncipe', 15, 12, 2015, 2, 'Um piloto cai com seu avião no deserto e ali encontra uma criança loura e frágil. Ela diz ter vindo de um pequeno planeta distante. E ali, na convivência com o piloto perdido, os dois repensam os seus valores e encontram o sentido da vida. ', 'https://drive.google.com/uc?export=download&id=17DFjZjDVvtogjN8BviCL0hm9jYadNKCK');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senha` int(10) NOT NULL,
  `foto` blob DEFAULT NULL,
  `idade` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `email`, `senha`, `foto`, `idade`) VALUES
('amanda ', 'amanda@gmail.com', 123, NULL, 6),
('antonio gustavo', 'antoniogustavo@gmail.com', 123, NULL, 11),
('cristina', 'cristina@gmail.com', 123, NULL, 9),
('felipe', 'felipe@gmail.com', 123, NULL, 6),
('lindalva', 'lindalva@gmail.com', 123, NULL, 11),
('Maria julia', 'mj@gmail.com', 123, NULL, 7),
('Paulo cesar', 'pls@gmail.com', 123, NULL, 8),
('roberto', 'roberto@gmail.com', 123, NULL, 10),
('vitoria pereira', 'vitoria@gmail.com', 123, NULL, 6),
('viviane ', 'viviane@gmail.com', 123, NULL, 8);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarioAvaliacao`
--

CREATE TABLE `usuarioAvaliacao` (
  `email` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `isbn` bigint(255) NOT NULL,
  `nota` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarioListaFav`
--

CREATE TABLE `usuarioListaFav` (
  `isbn` bigint(255) NOT NULL,
  `email` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuarioListaFav`
--

INSERT INTO `usuarioListaFav` (`isbn`, `email`) VALUES
(8532511015, 'lindalva@gmail.com'),
(8537801720, 'lindalva@gmail.com');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`codAutor`);

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`codCategoria`);

--
-- Índices de tabela `categoriaLivro`
--
ALTER TABLE `categoriaLivro`
  ADD PRIMARY KEY (`isbn`,`codCategoria`),
  ADD KEY `categoriaCod` (`codCategoria`);

--
-- Índices de tabela `editora`
--
ALTER TABLE `editora`
  ADD PRIMARY KEY (`codEditora`);

--
-- Índices de tabela `editoraLivro`
--
ALTER TABLE `editoraLivro`
  ADD PRIMARY KEY (`isbn`,`codEditora`),
  ADD KEY `codEditora` (`codEditora`);

--
-- Índices de tabela `livroAutor`
--
ALTER TABLE `livroAutor`
  ADD PRIMARY KEY (`isbn`,`codAutor`),
  ADD KEY `autorCod` (`codAutor`);

--
-- Índices de tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`isbn`),
  ADD KEY `editora` (`codEditora`),
  ADD KEY `autor` (`codAutor`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`);

--
-- Índices de tabela `usuarioAvaliacao`
--
ALTER TABLE `usuarioAvaliacao`
  ADD PRIMARY KEY (`isbn`,`email`),
  ADD KEY `usuario` (`email`);

--
-- Índices de tabela `usuarioListaFav`
--
ALTER TABLE `usuarioListaFav`
  ADD PRIMARY KEY (`isbn`,`email`),
  ADD KEY `usuarioListaFav_ibfk_1` (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `codAutor` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `codCategoria` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `categoriaLivro`
--
ALTER TABLE `categoriaLivro`
  ADD CONSTRAINT `categoriaLivro_ibfk_3` FOREIGN KEY (`codCategoria`) REFERENCES `categoria` (`codCategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `categoriaLivro_ibfk_4` FOREIGN KEY (`isbn`) REFERENCES `livros` (`isbn`);

--
-- Restrições para tabelas `editoraLivro`
--
ALTER TABLE `editoraLivro`
  ADD CONSTRAINT `editoraLivro_ibfk_1` FOREIGN KEY (`codEditora`) REFERENCES `editora` (`codEditora`),
  ADD CONSTRAINT `editoraLivro_ibfk_2` FOREIGN KEY (`isbn`) REFERENCES `livros` (`isbn`);

--
-- Restrições para tabelas `livroAutor`
--
ALTER TABLE `livroAutor`
  ADD CONSTRAINT `livroAutor_ibfk_3` FOREIGN KEY (`codAutor`) REFERENCES `autor` (`codAutor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `livroAutor_ibfk_4` FOREIGN KEY (`isbn`) REFERENCES `livros` (`isbn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `livros`
--
ALTER TABLE `livros`
  ADD CONSTRAINT `livros_ibfk_2` FOREIGN KEY (`codeditora`) REFERENCES `editora` (`codEditora`),
  ADD CONSTRAINT `livros_ibfk_3` FOREIGN KEY (`codAutor`) REFERENCES `autor` (`codAutor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `usuarioAvaliacao`
--
ALTER TABLE `usuarioAvaliacao`
  ADD CONSTRAINT `usuarioAvaliacao_ibfk_2` FOREIGN KEY (`email`) REFERENCES `usuario` (`email`),
  ADD CONSTRAINT `usuarioAvaliacao_ibfk_3` FOREIGN KEY (`isbn`) REFERENCES `livros` (`isbn`);

--
-- Restrições para tabelas `usuarioListaFav`
--
ALTER TABLE `usuarioListaFav`
  ADD CONSTRAINT `usuarioListaFav_ibfk_1` FOREIGN KEY (`email`) REFERENCES `usuario` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarioListaFav_ibfk_2` FOREIGN KEY (`isbn`) REFERENCES `livros` (`isbn`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
