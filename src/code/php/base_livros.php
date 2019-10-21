<?php

class Base{

    //Variavel para salvar conexão
    private $Conexao = NULL;

    //Atributos da Base
    private $Array_Livros= NULL;
    private $Array_Editoras = NULL;
    private $Array_Categorias = NULL;
    private $Array_Autores = NULL;

    function __construct($Faixa_Etaria){

        include "conexao_banco.php"; //importa conexão $conn
        $this->Conexao = $conn;

        //importa classes da base
        include_once "livro.php";
        include_once "categoria.php";
        include_once "autor.php";
        include_once "editora.php";

        $this->importaLivros($Faixa_Etaria);
        $this->importaCategorias();
        $this->importaAutores();
        $this->importaEditoras();

        $this->defineCategoria();

    }

    function importaLivros($idade){

        //Consulta ao banco para importar livros com faixa etaria correspondente
        $stmt = $this->Conexao->prepare('SELECT * FROM livros WHERE faixaEtaria<=:idade');
        $stmt->bindParam(':idade', $idade, PDO::PARAM_INT);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
            /*
            print($row->titulo);
            echo "   ";
            print($row->faixaEtaria);
            echo "   ";
            */
            $livro = new Livro($row->isbn, $row->titulo, $row->anoPublicacao, $row->faixaEtaria, $row->descricao, $row->pdf, $row->codAutor, $row->codEditora);
            $this->Array_Livros[$row->isbn] = $livro;
        } 
    }
    
    function importaCategorias(){
    
        //Consulta ao banco para importar categorias
        $stmt = $this->Conexao->prepare('SELECT * FROM categoria');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
            /*
            print($row->nome);
            echo "   ";
            print($row->codCategoria);
            echo "   ";
            */
            $categoria = new Categoria($row->nome, $row->codCategoria);
            $this->Array_Categorias[$row->codCategoria] = $categoria;
        }

    }

    function importaAutores(){
    
        //Consulta ao banco para importar autores
        $stmt = $this->Conexao->prepare('SELECT * FROM autor');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
            /*
            print($row->nome);
            echo "  ";
            print($row->codAutor);
            echo "   ";
            */
            $autor = new Autor($row->nome, $row->codAutor);
            $this->Array_Autores[$row->codAutor] = $autor;
        }

    }

    function importaEditoras(){
    
        //Consulta ao banco para importar editoras
        $stmt = $this->Conexao->prepare('SELECT * FROM editora');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
            /*
            print($row->nome);
            echo "   ";
            print($row->codEditora);
            echo "   ";
            */
            $editora = new Editora($row->nome, $row->codEditora);
            $this->Array_Editoras[$row->codEditora] = $editora;
        }

    } 

    function defineCategoria(){

        //Consulta ao banco para importar categorias de cada livro
        $stmt = $this->Conexao->prepare('SELECT * FROM categoriaLivro');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
            $ISBN = $row->isbn;
            $livro = $this->retornaLivroISBN($ISBN);
            if ($livro != NULL){
                $livro->setCod_Categoria($row->codCategoria);
            }
        }

    }

    function retornaLivroISBN($ISBN){
        if (array_key_exists($ISBN, $this->Array_Livros))
            return $this->Array_Livros[$ISBN];
        else
            return NULL;
    }

    function retornaCategoriaCod($codigo){
        if (array_key_exists($codigo, $this->Array_Categorias))
            return $this->Array_Categorias[$codigo];
        else
            return NULL;
    }

    function retornaEditoraCod($codigo){
        if (array_key_exists($codigo, $this->Array_Editoras))
            return $this->Array_Editoras[$codigo];
        else
            return NULL;
    }

    function retornaAutorCod($codigo){
        if (array_key_exists($codigo, $this->Array_Autores))
            return $this->Array_Autores[$codigo];
        else
            return NULL;
    }

    function retornaLivroTitulo($Titulo){
        foreach ($this->Array_Livros as &$livro) {
            if ($livro->getTitulo() == $Titulo)
                return $livro;
        }
    }

    function retornaCategoriaNome($nomeCategoria){
        foreach ($this->Array_Categorias as &$categoria) {
            if ($categoria->getNome() == $nomeCategoria)
                return $categoria;
        }
    }

    function retornaEditoraNome($nomeEditora){
        foreach ($this->Array_Editoras as &$editora) {
            if ($editora->getNome() == $nomeEditora)
                return $editora;
        }
    }

    function retornaAutorNome($nomeAutor){
        foreach ($this->Array_Autores as &$autor) {
            if ($autor->getNome() == $nomeAutor)
                return $autor;
        }
    }

    function livrosCategoria($nomeCategoria){
        $lista_livros = array();
        $categoria = $this->retornaCategoriaNome($nomeCategoria);
        foreach ($this->Array_Livros as &$livro) {
            $key = array_search($categoria->getCodigo(), $livro->getCod_Categoria());
            echo " @@ ";
            print($key);
            echo " -- ";
            print_r($livro->getCod_Categoria());
            echo " @@ ";
            if ($key === 0 or $key != NULL){
                $lista_livros[] = $livro;
                echo " >>>>>Na lista: ";
                print($livro->getTitulo());
                echo " <<<<<<<< ";
            }
            else{
                echo " ******Fora da Lista: ";
                print($livro->getTitulo());
                echo " ******** ";
            }
        }
        return $lista_livros;
    }

    function livrosEditora($nomeEditora){
        $lista_livros = array();
        $editora = $this->retornaEditoraNome($nomeEditora);
        foreach ($this->Array_Livros as &$livro) {
            if ($editora->getCodigo() == $livro->getCod_Editora()){
                $lista_livros[] = $livro;
                echo " >>>>>Na lista: ";
                print($livro->getTitulo());
                echo " <<<<<<<< ";
            }
            else{
                echo " ******Fora da Lista: ";
                print($livro->getTitulo());
                echo " ******** ";
            }
        }
        return $lista_livros;
    }

    function livrosAutor($nomeAutor){
        $lista_livros = array();
        $autor = $this->retornaAutorNome($nomeAutor);
        foreach ($this->Array_Livros as &$livro) {
            if ($autor->getCodigo() == $livro->getCod_Autor()){
                $lista_livros[] = $livro;
                echo " >>>>>Na lista: ";
                print($livro->getTitulo());
                echo " <<<<<<<< ";
            }
            else{
                echo " ******Fora da Lista: ";
                print($livro->getTitulo());
                echo " ******** ";
            }
        }
        return $lista_livros;
    }

    function __destruct(){
        /*
        print "Destruindo a Base\n";
        echo "  ";
        */
    }

}

#$b = new Base(5);
#$booksCat = $b->livrosCategoria("Drama");
#$booksEdi = $b->livrosEditora("Rocco");
#$booksAut = $b->livrosAutor("Eleanor H. Porter");
#$book = $b->retornaLivroTitulo("O Mágico de Oz");
#print_r($book);
#$book = $b->retornaCategoriaCod(6);
#print_r($book);
#$book = $b->retornaAutorCod(7);
#print_r($book);
#$book = $b->retornaEditoraCod(3);
#print_r($book);
#print ($book->getTitulo());
#echo " ";

?>