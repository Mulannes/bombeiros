<?php

    $host = "localhost:3307";
    $username = "root";
    $password = "root";
    $database = "bombeirosdb";

    // cria a conexão
    $conn = mysqli_connect($host, $username, $password, $database);
    // verifica a conexão
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
?>