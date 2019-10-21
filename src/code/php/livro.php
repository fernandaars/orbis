<?php

class Livro{

    private $ISBN;
    private $Titulo;
    private $Ano;
    private $Faixa_Etaria;
    private $Descricao;
    private $PDF;

    private $Cod_Autor;
    private $Cod_Editora;
    private $Cod_Categoria;

    function __construct($ISBN, $Titulo, $Ano, $Faixa_Etaria, $Descricao, $PDF, $Cod_Autor, $Cod_Editora){

        $this->ISBN = $ISBN;
        $this->Titulo = $Titulo;
        $this->Ano = $Ano;
        $this->Faixa_Etaria = $Faixa_Etaria;
        $this->Descricao = $Descricao;
        $this->PDF = $PDF;

        $this->Cod_Autor = $Cod_Autor;
        $this->Cod_Editora = $Cod_Editora;
        

        #print "Criando o objeto ".$this->Titulo."\n";
    }

    function setCod_Categoria($Cod_Categoria){
        $this->Cod_Categoria[] = $Cod_Categoria;
    }

    function getISBN(){
        return $this->ISBN;
    }

    function getTitulo(){
        return $this->Titulo;
    }

    function getAno(){
        return $this->Ano;
    }

    function getFaixa_Etaria(){
        return $this->Faixa_Etaria;
    }

    function getDescricao(){
        return $this->Descricao;
    }

    function getPDF(){
        return $this->PDF;
    }

    function getCod_Autor(){
        return $this->Cod_Autor;
    }

    function getCod_Editora(){
        return $this->Cod_Editora;
    }

    function getCod_Categoria(){
        return $this->Cod_Categoria;
    }

    function ImprimeLivro(){
        print $this->getISBN();
        print $this->getTitulo();
        print $this->getAno();
    }

    function __destruct(){
        #print "Destruindo o objeto " . $this->Titulo . "\n";
    }

}

#$book = new Livro("123", "Um livro", 2019, 2, NULL);
#print $book->getISBN();
#$book->ImprimeLivro();

?>