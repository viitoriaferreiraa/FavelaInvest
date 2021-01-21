<?php

require_once("./Connection.php");

class Usuarios extends Connection {
    private $id_usuario; 
    private $nome;
    private $email;
    private $senha;
    private $idade;
    private $contato;
    private $endereco; 
    private $fk_tipo;
    private $perfil;
    private $materiais;


public function Usuarios($nome, $email, $senha, $fk_tipo){
    $this->nome = $nome;
    $this->email = $email;
    $this->senha = $senha;
    $this->tipo = $fk_tipo;
    
    $conn= Connection::getDb();
    $sql =  $conn->prepare("INSERT INTO usuarios(nome, email,senha, fk_tipo) values ('$this->nome','$this->email', '$this->senha', '$this->tipo')");
    $sql->execute();

    if($sql->rowCount()>0){
        return true;
    }else{
        return false;
    }
}

}

