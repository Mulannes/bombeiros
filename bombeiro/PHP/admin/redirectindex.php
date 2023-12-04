<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verifica se o usuário é admin
$isAdmin = isset($_SESSION['admin']) && $_SESSION['admin'] === true;

if ($isAdmin) {
    // redireciona para a página de admin
    header("Location: index_admin.php");
    exit();
} elseif (isset($_POST['btnRedirect'])) {
    // Se não for admin e o botão foi pressionado, redireciona para a página do usuário
    header("Location: index.php");
    exit();
}
?>
