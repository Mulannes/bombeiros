<?php
include('../../PHP/processamento_cadastro.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
// Verifica se o usuário é admin
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    // Redireciona para a página de index
    header("Location: ../../PHP/index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<body>

    <div class="container-fluid m-0 p-0"
        style="background-image: url('../../images/bg-drop-fade-marquinhos.png'); background-size: cover; height: 100vh;">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-3 d-flex align-items-center justify-content-center w-100 p-3 h-75">
                    <div class="login-container w-75 h-75 bg-white rounded-4">
                        <!-- Adicione um botão de voltar no canto superior esquerdo -->
                        <a href="../../PHP/index.php" class="btn btn-light fixed-top m-1">Voltar</a>

                        <form class="w-100 h-100 d-flex flex-column justify-content-around p-4"
                            action="../../PHP/processamento_cadastro.php" method="post">

                            <h2 class="text-center mb-4">Cadastro</h2>
                            <?php
                            // Exibir mensagens de sucesso
                            if (isset($_SESSION['cadastro_sucesso'])) {
                                echo '<p class="success text-center">' . $_SESSION['cadastro_sucesso'] . '</p>';
                                unset($_SESSION['cadastro_sucesso']); // Limpar a mensagem de sucesso
                            }
                            // Exibir mensagens de erro
                            if (isset($_SESSION['cadastro_erro_email'])) {
                                echo '<p class="error text-center">' . $_SESSION['cadastro_erro_email'] . '</p>';
                                unset($_SESSION['cadastro_erro_email']); // Limpar a mensagem de erro
                            }

                            if (isset($_SESSION['cadastro_erro_cpf'])) {
                                echo '<p class="error text-center">' . $_SESSION['cadastro_erro_cpf'] . '</p>';
                                unset($_SESSION['cadastro_erro_cpf']); // Limpar a mensagem de erro
                            }

                            if (isset($_SESSION['cadastro_erro'])) {
                                echo '<p class="error text-center">' . $_SESSION['cadastro_erro'] . '</p>';
                                unset($_SESSION['cadastro_erro']); // Limpar a mensagem de erro
                            }
                            ?>
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" name="nome" placeholder="Nome" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                            </div>

                            <div class="form-group">
                                <label for="cpf">CPF:</label>
                                <input type="text" class="form-control" name="CPF" placeholder="CPF" required>
                            </div>

                            <div class="form-group">
                                <label for="senha">Senha:</label>
                                <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-danger w-75" type="submit">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
