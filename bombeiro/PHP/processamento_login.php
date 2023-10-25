<?php
// Inicia a sessão
session_start();

include("dbconnect.php");

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Dados do formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Consulta para verificar se o usuário existe
    $sql = "SELECT * FROM usuario WHERE email_usuario = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $usuario_bd = $result->fetch_assoc();

        // Verifica se a senha fornecida corresponde à senha armazenada
        if ($usuario_bd['senha_usuario'] == $senha) {
            $_SESSION['nome_usuario'] = $usuario_bd['nome_usuario'];
            $_SESSION['loggedIn'] = true;
            $nomeUsuario = $_SESSION['nome_usuario'];

            // Define a mensagem do popup
            $_SESSION['popup_msg'] = "Bem-vindo(a), $nomeUsuario! Você está logado(a) e autenticado(a).";

            // Fecha a conexão com o banco de dados
            $conn->close();

            header('Location: ../HTML/index.php');
            exit();
        }
    }

    // Usuário não encontrado ou senha incorreta, exibe uma mensagem de erro
    $_SESSION['nao_autenticado'] = true;

    // Fecha a conexão com o banco de dados
    $conn->close();

    header('Location: login.php?msg=autenticacao-erro');
    exit();
} else {
    // Formulário não enviado, redireciona para a página de login
    header('Location: login.php');
    exit();
}
?>