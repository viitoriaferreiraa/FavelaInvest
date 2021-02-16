<?php
    require_once("./models/Usuarios.php");

    $data = Usuarios::getUsuarios();
    return $data;
    