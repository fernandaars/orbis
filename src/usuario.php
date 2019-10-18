<?php

class Usuario{

    private $Nome;
    private $Email;
    private $Senha;
    private $Idade;
    private $Foto;

    private $Base_Usuario;
    private $Favoritos;
    private $Avaliacoes;

    private $Conexao;

    function __construct($Nome, $Email, $Senha, $Idade, $Favoritos, $Avaliacoes){
        $this->Nome = $Nome;
        $this->Email = $Email;
        $this->Senha = $Senha;
        $this->Idade = $Idade;

        $this->Favoritos = $Favoritos;
        $this->Avaliacoes = $Avaliacoes;

        include_once "conexao_banco.php"; //importa conexão $conn
        $this->Conexao = $conn;

        include_once "base.php"; //Importa Base
        $this->Base_Usuario = new Base($Idade);


    }

    function setFoto($Foto){
        $this->Foto = Foto;
    }

    function getNome(){
        return $this->Nome;
    }

    function getEmail(){
        return $this->Email;
    }

    function getSenha(){
        return $this->Senha;
    }

    function getIdade(){
        return $this->Idade;
    }

    function getFoto(){
        return $this->Foto;
    }

    function getBase(){
        return $this->Base;
    }

    function getFavoritos(){
        return $this->ListaFavoritos;
    }

    function getAvaliacoes(){
        return $this->Avaliacoes;
    }

    function addFavoritos($Nome_Livro){
        $Livro = $this->Base_Usuario->retornaLivroTitulo($Nome_Livro);
        if ($Livro != NULL){
            $this->Favoritos[] = $Livro->getISBN();
            #$this->insertFavoritos($Livro->getISBN());
            return TRUE;
        }
        else
            return FALSE;
    }


    function removeFavoritos($Nome_livro){
        $Livro = $this->Base_Usuario->retornaLivroTitulo($Nome_Livro);
        $key = array_search($Livro->getISBN(), $this->Favoritos);
        if(isset($this->Favoritos[$Livro->getISBN()])) {
            unset($this->Favoritos[$Livro->getISBN()]);
        }
    }

    function inFavoritos($Nome_livro){
        $Livro = $this->Base_Usuario->retornaLivroTitulo($Nome_Livro);
        return in_array($Livro->getISBN(), $this->Favoritos);
    }

    function addAvaliacoes($Nome_Livro, $Nota){
        $Livro = $this->Base_Usuario->retornaLivroTitulo($Nome_Livro);
        if ($Livro != NULL){
            $this->Avaliacoes[$Livro->getISBN()] = $Nota;
            #$this->insertAvaliacoes($Livro->getISBN(), $Nota);
            return TRUE;
        }
        else
            return FALSE;
    }

    function removeAvaliacoes($Nome_livro, $Nota){
        $Livro = $this->Base_Usuario->retornaLivroTitulo($Nome_Livro);
        if(isset($this->Avaliacoes[$Livro->getISBN()])) {
            unset($this->Avaliacoes[$Livro->getISBN()]);
        }
    }

    function returnAvaliacaoLivro($Nome_livro){
        $Livro = $this->Base_Usuario->retornaLivroTitulo($Nome_Livro);
        if(isset($this->Avaliacoes[$Livro->getISBN()])) {
            return $this->Avaliacoes[$Livro->getISBN()];
        }
        else 
            return FALSE;
    }

    function insertFavoritos($ISBN){
        $query = 'INSERT INTO usuarioListaFav(isbn, email) VALUES ( :ISBN, :Email)';
        $stmt = $this->Conexao->prepare('INSERT INTO usuarioListaFav(isbn, email) VALUES ( :ISBN, :Email)');
        $stmt->bindParam(':ISBN', $ISBN, PDO::PARAM_INT);
        $stmt->bindParam(':Email', $this->Email, PDO::PARAM_STR);
        $stmt->execute();
        print($ISBN);
    }

    function insertAvaliacoes($ISBN, $Nota){
        $query = 'INSERT INTO usuarioAvaliacao(isbn, email, nota) VALUES ( :ISBN, :Email, :Nota)';
        $stmt = $this->Conexao->prepare('INSERT INTO usuarioAvaliacao(isbn, email, nota) VALUES ( :ISBN, :Email, :Nota)');
        $stmt->bindParam(':ISBN', $ISBN, ':Nota', $Nota, PDO::PARAM_INT);
        $stmt->bindParam(':Email', $this->Email, PDO::PARAM_STR);
        $stmt->execute();
        print($ISBN);
    }
    
    function __destruct(){
        
    }

}

$u = new Usuario("cristina", "cristina@gmail.com", "123", 9, NULL, NULL);
$u->addFavoritos("O Menino Maluquinho");

?>