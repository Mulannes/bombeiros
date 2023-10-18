<?php
include('dbconnect.php');

session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE email_usuario = ? AND senha_usuario = ?";

    $stmt = $conn->prepare($sql);
    $stmt -> bind_param('ss' ,$email,$senha);
    $stmt ->execute();
    $resultado = $stmt->get_result();

    if($resultado->num_rows == 1) {
        //login foi efetuado com sucesso
        header("Location: index.html");
        exit();
        
    }else{
         header("Location: login.php?error=incorrect username or password");
         exit();
        
        // header("Location: login.php");
        // $error = "Credenciais inválidas. verificar seu email";
    }
    
// }
$conn->close();
?>