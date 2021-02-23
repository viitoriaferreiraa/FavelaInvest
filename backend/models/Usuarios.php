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

    public static function login($email, $senha){
        
        $conn = Connection::getDb();
        $stmt = $conn->prepare("SELECT * FROM usuarios where email='$email' and senha='$senha'");
        $stmt-> execute();
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
                return false;
        }
    }

    public static function getInfo($email){
        $conn = Connection::getDb();
        $stmt = $conn->prepare("SELECT * FROM usuarios where email='$email'");
        $stmt-> execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public static function editAtuacao($id, $atuacao)
        {
            $conn = Connection::getDb();
            $stmt = $conn->prepare("UPDATE usuarios SET atuacao='$atuacao' WHERE id_usuario=$id");
            $stmt-> execute();
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }

        }

    public static function editUser($id, $ramo, $endereco, $idade)
    {
        $conn = Connection::getDb();
        $stmt = $conn->prepare("UPDATE usuarios SET ramo='$ramo', endereco='$endereco', idade='$idade' WHERE id_usuario=$id");
        $stmt-> execute();
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }

    }

    public static function deleteUser($email){
        $conn = Connection::getDb();
        $stmt = $conn->prepare("DELETE FROM usuarios where email='$email'");
        $stmt-> execute();
        $stmt = $conn->prepare("SELECT * FROM usuarios where email='$email'");
        $stmt-> execute();
        if ($stmt->rowCount() > 0) {
            return false;
        } else {
            return true;
        }
    }

    public static function getUsuarios(){
        $conn = Connection::getDb();

            $i=0;

            $stmt = $conn->prepare("SELECT * FROM usuarios where fk_tipo='2'");
            $stmt->execute();
            while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                $json[$i]= 
                    $row
                ;
                $i++;
            }

            header('Access-Control-Allow-Origin: *');
            header('Content-type: application/json');
            echo json_encode($json);
    }

}

