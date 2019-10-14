<?php

class Categoria{
    
    private $Nome;
    private $Codigo;

    function __construct($Nome, $Codigo){

        $this->Nome = $Nome;
        $this->Codigo = $Codigo;
        
        #print "Criando o objeto do tipo categoria " . $this->Nome . "\n";
    }

    function getNome(){
        return $this->Nome;
    }

    function getCodigo(){
        return $this->Codigo;
    }

    function ImprimeCategoria(){
        print $this->getNome();
        print $this->getCodigo();
    }

    function __destruct(){
        #print "Destruindo o objeto do tipo categoria " . $this->Nome . "\n";
    }

}

#$categoria = new Categoria("Aventura", 1);
#$categoria->ImprimeCategoria();

?>