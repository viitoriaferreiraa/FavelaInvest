<?php

session_start();

    $email = $_SESSION['email'];

    $conn = mysqli_connect("localhost", "root", "", "favelainvest");
    $sql = "delete from usuarios where email='$email'";
    $result = $conn->query($sql);
    
    session_destroy();

    echo "<script>window.location.href = './index.php';</script>";


?>
