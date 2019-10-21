<?php

class Autor{

    private $Nome;
    private $Codigo;

    function __construct($Nome, $Codigo){

        $this->Nome = $Nome;
        $this->Codigo = $Codigo;
        
        #print "Criando o objeto do tipo Autor " . $this->Nome . "\n";
    }

    function getNome(){
        return $this->Nome;
    }

    function getCodigo(){
        return $this->Codigo;
    }

    function ImprimeAutor(){
        print $this->getNome();
        print $this->getCodigo();
    }

    function __destruct(){
        #print "Destruindo o objeto do tipo Autor " . $this->Nome . "\n";
    }

}

#$autor = new Autor("Aventura", 1);
#$autor->ImprimeAutor();

?>