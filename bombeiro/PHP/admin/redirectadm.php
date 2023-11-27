<?php
if (session_status() == PHP_SESSION_NONE) {
session_start();
}

if (isset($_POST['btnRedirect'])) {
    // Verifica se o usuário é admin
    $isAdmin = isset($_SESSION['admin']) && $_SESSION['admin'] === true;

    if ($isAdmin) {
        // redireciona para a página de admin
        header("Location: ../conta_admin.php");
        exit();
    } else {
        // redirecione para a página do usuário
        header("Location: ../conta.php");
        exit();
    }
}
?>