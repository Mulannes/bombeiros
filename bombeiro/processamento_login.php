<?php
include('dbconnect.php');

session_start();
//verifica o formulário da tela de login
// if($_SERVER["RESQUEST_METHOD"] == 'POST'){

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE email_usuario = ? AND senha_usuario = ?";

    $stmt = $conn->prepare($sql);
    $stmt -> bind_param('ss' ,$email,$senha);
    $stmt ->execute();
    $resultado = $stmt->get_result();

    if($resultado->num_rows == 1) {
        //login foi efetuado com sucesso
        $_SESSION['email_usuario'] = $email;
        header("Location: index.html");
        exit();
        
    }else{
        header("Location: login.php");
        $error = "Credenciais inválidas. verificar seu email";
    }
// }
$conn->close();
?>