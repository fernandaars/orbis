<?php

class Usuario{

    private $Idade;
    private $Base_Usuario;
    private $ListaFavoritos;
    private $Avaliações;

    private $nome;
    private $senha;
    private $avatar;

    function __construct($Idade){
        $this->Idade = Idade;

    }

    
    function __destruct(){
        
    }

}

?>