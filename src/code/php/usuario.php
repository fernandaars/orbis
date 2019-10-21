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

    function __construct($Nome, $Email, $Senha, $Foto, $Idade, $Favoritos, $Avaliacoes){
        $this->Nome = $Nome;
        $this->Email = $Email;
        $this->Senha = $Senha;
        $this->Idade = $Idade;

        $this->Favoritos = $Favoritos;
        $this->Avaliacoes = $Avaliacoes;

        include "conexao_banco.php"; //importa conexão $conn
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
            $this->insertFavoritos($Livro->getISBN());
            return TRUE;
        }
        else
            return FALSE;
    }

    function insertFavoritos($ISBN){
        $stmt = $this->Conexao->prepare('INSERT INTO usuarioListaFav(isbn, email) VALUES ( :ISBN, :Email)');
        $stmt->bindParam(':ISBN', $ISBN, PDO::PARAM_INT);
        $stmt->bindParam(':Email', $this->Email, PDO::PARAM_STR);
        $stmt->execute();
        #echo " adicionou: ";
        #print($ISBN);
    }


    function removeFavoritos($Nome_Livro){
        $Livro = $this->Base_Usuario->retornaLivroTitulo($Nome_Livro);
        if ($Livro != NULL){
            $key = array_search($Livro->getISBN(), $this->Favoritos);
            unset($this->Favoritos[$key]);
            $this->deleteFavoritos($Livro->getISBN());
            
        }
    }

    function deleteFavoritos($ISBN){
        $query = 'DELETE FROM usuarioListaFav WHERE isbn = :ISBN AND email = :Email';
        $stmt = $this->Conexao->prepare('DELETE FROM usuarioListaFav WHERE isbn = :ISBN AND email = :Email');
        $stmt->bindParam(':ISBN', $ISBN, PDO::PARAM_INT);
        $stmt->bindParam(':Email', $this->Email, PDO::PARAM_STR);
        $stmt->execute();
        #echo " excluiu: ";
        #print($ISBN);
    }

    function inFavoritos($Nome_Livro){
        $Livro = $this->Base_Usuario->retornaLivroTitulo($Nome_Livro);
        return in_array($Livro->getISBN(), $this->Favoritos);
    }

    function addAvaliacoes($Nome_Livro, $Nota){
        $Livro = $this->Base_Usuario->retornaLivroTitulo($Nome_Livro);
        if ($Livro != NULL){
            $this->Avaliacoes[$Livro->getISBN()] = $Nota;
            $this->insertAvaliacoes((int)$Livro->getISBN(), $Nota);
            return TRUE;
        }
        else
            return FALSE;
    }

    function insertAvaliacoes($ISBN, $Nota){
        $stmt = $this->Conexao->prepare('INSERT INTO usuarioAvaliacao(email, isbn ,nota) VALUES (:Email, :ISBN, :Nota)');
        $params = array(
            'ISBN' => $ISBN, 
            'Nota' => $Nota,
            'Email'=> $this->Email,
        );
        #print_r($params);
        if ( ! $stmt->execute ($params )){
            print_r( $stmt->errorInfo ());
        }
        echo " adicionou: ";
        print($ISBN);
    }

    function removeAvaliacoes($Nome_Livro){
        $Livro = $this->Base_Usuario->retornaLivroTitulo($Nome_Livro);
        if ($Livro != NULL){
            unset($this->Avaliacoes[$Livro->getISBN()]);
            $this->deleteAvaliacoes($Livro->getISBN());
        }
    }

    function deleteAvaliacoes($ISBN){
        $stmt = $this->Conexao->prepare('DELETE FROM usuarioAvaliacao WHERE isbn = :ISBN AND email = :Email');
        $stmt->bindParam(':ISBN', $ISBN, PDO::PARAM_INT);
        $stmt->bindParam(':Email', $this->Email, PDO::PARAM_STR);
        $params = array(
            'ISBN' => $ISBN,
            'Email'=> $this->Email,
        );
        if(! $stmt->execute($params)){
            print_r( $stmt->errorInfo());
        }
        #echo " excluiu: ";
        #print($ISBN);
    }

    function returnAvaliacaoLivro($Nome_livro){
        $Livro = $this->Base_Usuario->retornaLivroTitulo($Nome_Livro);
        if(isset($this->Avaliacoes[$Livro->getISBN()])) {
            return $this->Avaliacoes[$Livro->getISBN()];
        }
        else 
            return FALSE;
    }
    
    function __destruct(){  
    }

}

#$u = new Usuario("cristina", "cristina@gmail.com", "123", NULL, 9, NULL, NULL);
#$u->addFavoritos("O Menino Maluquinho");
#$u->removeFavoritos("O Menino Maluquinho");
#$u->addAvaliacoes("O Menino Maluquinho", 5);
#$u->removeAvaliacoes("O Menino Maluquinho");

?>