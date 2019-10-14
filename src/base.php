<?php

class Base{

    //Variavel para salvar conexão
    private $conexao = NULL;

    //Atributos da Base
    private $Array_Livros= NULL;
    private $Array_Editoras = NULL;
    private $Array_Categorias = NULL;
    private $Array_Autores = NULL;

    function __construct(){

        include_once "conexao_banco.php"; //importa conexão $conn
        $this->conexao = $conn;

        //importa classes da base
        include_once "livro.php";
        include_once "categoria.php";
        include_once "autor.php";
        include_once "editora.php";

        $this->importaLivros(5);
        $this->importaCategorias();
        $this->importaAutores();
        $this->importaEditoras();


    }

    function importaLivros($idade){

        //Consulta ao banco para importar livros com faixa etaria correspondente
        $stmt = $this->conexao->prepare('SELECT * FROM livros WHERE faixaEtaria<=:idade');
        $stmt->bindParam(':idade', $idade, PDO::PARAM_INT);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
            print($row->titulo);
            echo "   ";
            #print($row->faixaEtaria);
            #echo "   ";
            $livro = new Livro($row->isbn, $row->titulo, $row->anoPublicacao, $row->faixaEtaria, $row->descricao);
            $this->Array_Livros[] = $livro;
        }

    }
    
    function importaCategorias(){
    
        //Consulta ao banco para importar categorias
        $stmt = $this->conexao->prepare('SELECT * FROM categoria');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
            print($row->nome);
            echo "   ";
            print($row->codCategoria);
            echo "   ";
            $categoria = new Categoria($row->nome, $row->codCategoria);
            $this->Array_Categorias[] = $categoria;
        }

    }

    function importaAutores(){
    
        //Consulta ao banco para importar autores
        $stmt = $this->conexao->prepare('SELECT * FROM autor');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
            print($row->nome);
            echo " oi  ";
            print($row->codAutor);
            echo "   ";
            $autor = new Autor($row->nome, $row->codAutor);
            $this->Array_Autores[] = $autor;
        }

    }

    function importaEditoras(){
    
        //Consulta ao banco para importar editoras
        $stmt = $this->conexao->prepare('SELECT * FROM editora');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
            print($row->nome);
            echo "   ";
            print($row->codEditora);
            echo "   ";
            $editora = new Editora($row->nome, $row->codEditora);
            $this->Array_editoras[] = $editora;
        }

    }

    function __destruct(){
        print "Destruindo a Base\n";
        echo "  ";
    }

}

$b = new Base();

?>