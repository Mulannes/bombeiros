<?php
// Inicia a sessão
session_start();

include("dbconnect.php");

// Verifica se o formulário foi enviado e se os campos estão definidos
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['senha'])) {

    // Dados do formulário
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Consulta para verificar se o usuário existe
    $stmt = $conn->prepare("SELECT * FROM usuario WHERE email_usuario = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $usuario_db = $result->fetch_assoc();

        // Verifica se a senha fornecida corresponde à senha armazenada
        if ($senha == $usuario_db['senha_usuario']) {
            $_SESSION['nome_usuario'] = $usuario_db['nome_usuario'];
            $_SESSION['loggedIn'] = true;

            // Fecha a conexão com o banco de dados
            $stmt->close();
            $conn->close();

            header('Location: index.php');
            exit();
        } else {
            $_SESSION['erro_autenticacao'] = "Senha incorreta.";
        }
    } else {
        $_SESSION['erro_autenticacao'] = "Usuário não encontrado.";
    }

    // Fecha a conexão com o banco de dados
    $stmt->close();
    $conn->close();

    header('Location: login.php?msg=autenticacao-erro');
    exit();
} else {
    // Formulário não enviado ou campos não definidos, redireciona para a página de login
    $_SESSION['erro_autenticacao'] = "Campos de formulário não definidos.";
    header('Location: login.php?msg=autenticacao-erro');
    exit();
}
?>
