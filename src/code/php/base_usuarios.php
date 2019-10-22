<?php

class BaseUsuarios{

    //Variavel para salvar conexão
    private $Conexao;

    //Atributos da Base
    private $Array_Usuarios;

    function __construct(){
        
        include "conexao_banco.php"; //importa conexão $conn
        include "usuario.php";

        $this->Conexao = $conn;

        
        $this->importaUsuarios();
        echo " usuarios: ";
        #print_r($this->Array_Usuarios->getNome());
        print_r($this->Array_Usuarios);
        echo " ";


    }

    function importaUsuarios(){
        //Consulta banco para importar usuarios
        $stmt = $this->Conexao->prepare('SELECT * FROM usuario');
        $stmt->execute();

        while($row = $stmt->fetch(PDO::FETCH_OBJ)) {
            /*
            print($row->titulo);
            echo "   ";
            print($row->faixaEtaria);
            echo "   ";
            */
            $usuario = new Usuario($row->nome, $row->email, $row->senha, $row->foto, $row->idade, NULL, NULL);
            $this->Array_Usuarios[$row->email] = $usuario;
        } 
    }

    function getArray_Usuarios(){
        return $this->Array_Usuarios;
    }
    
    function __destruct(){
        
    }

}

#$u = new BaseUsuarios();

?>