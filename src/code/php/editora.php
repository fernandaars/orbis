<?php

class Editora{

    private $Nome;
    private $Codigo;

    function __construct($Nome, $Codigo){

        $this->Nome = $Nome;
        $this->Codigo = $Codigo;
        
        #print "Criando o objeto do tipo Editora " . $this->Nome . "\n";
    }

    function getNome(){
        return $this->Nome;
    }

    function getCodigo(){
        return $this->Codigo;
    }

    function ImprimeEditora(){
        print $this->getNome();
        print $this->getCodigo();
    }

    function __destruct(){
        #print "Destruindo o objeto do tipo Editora " . $this->Nome . "\n";
    }

}

#$editora = new Editora("Aventura", 1);
#$editora->ImprimeEditora();

?>