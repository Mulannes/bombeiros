<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verifica se o usuário é admin
$isAdmin = isset($_SESSION['admin']) && $_SESSION['admin'] === true;

// Se o usuário não for admin, redireciona para a página do usuário
if (!$isAdmin) {
    header("Location: index.php");
    exit();
}
?>