<?php
session_start(); // Inicialização da sessão

$erro_autenticacao = isset($_GET['msg']) && $_GET['msg'] == 'autenticacao-erro' && isset($_SESSION['erro_autenticacao']) ? $_SESSION['erro_autenticacao'] : null;
unset($_SESSION['erro_autenticacao']); // Remove a mensagem da sessão
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="container-fluid m-0 p-0"
        style="background-image: url('../images/bg-drop-fade-marquinhos.png'); background-size: cover; height: 100vh;">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-3 d-flex align-items-center justify-content-center w-100 p-3 h-75">
                    <div class="login-container w-75 h-75 bg-white rounded-4">
                        <form class="w-100 h-100 d-flex flex-column justify-content-around p-4"
                            action="processamento_login.php" method="post">
                            <h2 class="text-center mb-4">Login</h2>

                            <?php
                            if ($erro_autenticacao) {
                                echo '<p class="error text-center">' . $erro_autenticacao . '</p>';
                            }
                            ?>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" class="form-control" name="email" placeholder="E-mail" required>
                            </div>

                            <div class="form-group">
                                <label for="senha">Senha:</label>
                                <input type="password" class="form-control" name="senha" placeholder="Senha" required>
                            </div>

                            <div class="d-flex justify-content-center">
                                <button class="btn btn-danger w-75" type="submit">Acessar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI/tZ1Zl3zOBOO7fWoeGdx9pd21tT+0zUm+RDk= sha512-fpEzQhVeoB9Zg8pZNr+1RQDiNunBz2a6JbT2uAGSV7OfeL6qm2UHNIfMvF3MC2jcBQ9h8BEz1tqBz66lZ9hjnA=="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
