<?php

abstract class Connection 
{
        protected static function getDb()
        {
            $conn = new PDO("mysql:host=localhost;
            dbname=favelainvest",
            "root",
            ""          
        );

        if ($conn) {
            return $conn;
        }else{
            echo "<h1>Não foi possível se conectar</h1>";
        }
    }
}