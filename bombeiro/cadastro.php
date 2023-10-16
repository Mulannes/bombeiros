<?php
include('dbconnect.php');
?>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST['CPF'];

    $sql = "INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario, CPF_usuario) VALUES (?, ?, ?, ?)";

    $stmt = $conexao->prepare($sql);
    
    // Vincular os valores das variáveis à consulta preparada
    $stmt->bind_param('ssss', $nome, $email, $senha, $cpf);

    if ($stmt->execute()) {
        // O INSERT foi bem-sucedido, você pode redirecionar para a página inicial
        $_SESSION['email_usuario'] = $email;
        header("Location: ../index.html");
        exit();
    } else {
        $error = "Erro ao inserir usuário no banco de dados: " . $stmt->error;
    }
}

$conexao->close();
?>
