<?php

    session_start();

    if(!isset($_SESSION['nome'])){
        header('location: index.php');
        exit;
    }

   
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
    <h1> teste <?php echo $_SESSION['nome'] ?> </h1>
</body>
</html>