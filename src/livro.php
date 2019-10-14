<?php

class Livro{

    private $ISBN;
    private $Titulo;
    private $Ano;
    private $Faixa_Etaria;
    private $Descricao;

    function __construct($ISBN, $Titulo, $Ano, $Faixa_Etaria, $Descricao){

        $this->ISBN = $ISBN;
        $this->Titulo = $Titulo;
        $this->Ano = $Ano;
        $this->Faixa_Etaria = $Faixa_Etaria;
        $this->Descricao = $Descricao;

        print "Criando o objeto ".$this->Titulo."\n";
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

    function ImprimeLivro(){
        print $this->getISBN();
        print $this->getTitulo();
        print $this->getAno();
    }

    function __destruct(){
        #print "Destruindo o objeto " . $this->Titulo . "\n";
    }

}

#$book = new Livro("123", "Um livro", 2019);
#print $book->getISBN();
#$book->ImprimeLivro();

?>