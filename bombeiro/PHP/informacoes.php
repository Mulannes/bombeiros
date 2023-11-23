<?php
session_start();

include("dbconnect.php");

// Verifica se a chave 'nome_usuario' está definida na sessão
if (isset($_SESSION['nome_usuario'])) {
    $nome_usuario = $_SESSION['nome_usuario'];

    // Consulta SQL para recuperar informações do usuário
    $sql = "SELECT * FROM usuario WHERE nome_usuario = ?";
    $stmt = $conn->prepare($sql);

    // Verifica se a preparação da consulta foi bem-sucedida
    if ($stmt) {
        $stmt->bind_param('s', $nome_usuario);

        // Executa a consulta
        if ($stmt->execute()) {
            $result = $stmt->get_result();

            // Verifica se há algum resultado
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $nome_usuario = $row['nome_usuario'];

            } else {
                echo "Nenhum usuário encontrado com nome de usuário $nome_usuario";
            }
        } else {
            echo "Erro na consulta: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Erro na preparação da consulta: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="/bombeiro/components/navbar.js"></script>
    <style>
        :root {
            --dedada2: rgba(222, 218, 218, 0.45);
            --bg-itens: rgba(222, 218, 218, 0.45);


        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap');
        *{
            font-family: "Poppins",sans-serif;
        }
    </style>
</head>

<body>
    <div class="container-fluid m-0 p-0">
        <header>
            <div class="d-lg-none">

                <nav class="navbar">
                    <div class="container">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasNav">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <a href="../PHP/conta.php"><img src="../images/botãologin.png"></a>
                    </div>
                </nav>
                <div class="offcanvas offcanvas-start" id="offcanvasNav">

                    <div class="offcanvas-header">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Fechar"></button>
                    </div>

                    <div class="offcanvas-body">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="../PHP/index.php">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../HTML/ocorrencia.html">Fazer Registro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../HTML/registro.html">Registro</a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </header>
            <div class="container d-flex flex-column">
                <div class="container d-flex justify-content-center"><img src="../images/perfil2.png"></div>
                <div class="container d-flex justify-content-center">
                <?php
        if (isset($nome_usuario)) {
            // O usuário está logado
            ?>
            <h1><?php echo $nome_usuario; ?></h1>
            <?php
        } else {
            // O usuário não está logado
            ?>
            <h1>Usuário não logado</h1>
            <?php
        }
        ?>
                </div>
            </div>

            <div class="container d-flex justify-content-around align-items-center rounded shadow-lg"
                style="background-color: #DEDADA; width: 90%;">
                <b>Sexo</b>
                <div class="btn-group w-75" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                    <label class="btn btn-outline-light text-dark border-0" for="btnradio2">Masculino</label>

                    <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" checked>
                    <label class="btn btn-outline-light text-dark border-0" for="btnradio3">Feminino</label>
                </div>
            </div>
            <div class="container w-100 d-flex justify-content-around mt-3">
                <div class="btn-group shadow-lg" style="background-color: #DEDADA; width: 45%; height: 100px;"
                    role="group" aria-label="Basic radio toggle button group2">
                    <input type="radio" class="btn-check" name="btnradio2" id="btnradio4" autocomplete="off" checked>
                    <label
                        class="btn btn-outline-light text-dark border-0 d-flex align-items-center justify-content-center"
                        style="height: 100%; width: 100%;" for="btnradio4">Bombeiro(a)</label>
                </div>

                <div class="btn-group shadow-lg" style="background-color: #DEDADA; width: 45%;" role="group"
                    aria-label="Basic radio toggle button group2">
                    <input type="radio" class="btn-check" name="btnradio2" id="btnradio5" autocomplete="off">
                    <label
                        class="btn btn-outline-light text-dark border-0 d-flex align-items-center justify-content-center"
                        style="height: 100%; width: 100%;" for="btnradio5">Médico(a)</label>
                </div>
            </div>

            <a href="../PHP/logout.php" class="text-decoration-none text-dark">
                <div class="container rounded d-flex align-items-center mt-4"
                    style="background-color: #DEDADA; width: 90%; height: 50px;">
                    <img src="../images/sair.png" alt="">
                    <div class="container" style="height: 50px; width: 100%;"><b
                            class="h-100 d-flex align-items-center text-danger">Sair</b>
                    </div>
                </div>
            </a>

        </div>
    </div>
<br>
<br>
<div style="width: 100%; display: flex; justify-content: center; margin-bottom: 20px;">
    <div class="nav-pills-style" style="width: 95%; height: 75px; flex-shrink: 0; border-radius: 50px; background: #FFF; box-shadow: 0px 0px 100px 0px rgba(0, 0, 0, 0.50);">
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item" style=" max-height: 65px;">
                <img src="../images/home.png" class=" mx-auto d-block" style="padding: 10px;">
                <a class="nav-link" href="../PHP/index.php" style="color: black; padding: 0; font-size: 14px">Menu</a>
            </li>
            <li class="nav-item" style="max-height: 65px;">
                <img src="../images/fazerregistro.png" class=" mx-auto d-block" style="padding: 10px 10px 5px 10px;"> 
                <a class="nav-link" href="../HTML/ocorrencia.html" style="color: black; padding: 0; font-size: 14px; height: 28px; line-height: 13px;">Fazer<br>Registro</a>
            </li>
            <li class="nav-item" style="max-height: 65px;">
                <img src="../images/registro.png" class=" mx-auto d-block" style="padding: 10px;">
                <a class="nav-link" href="../HTMl/registro.html" style="color: black; padding: 0; font-size: 14px">Registros</a>
            </li>
            <li class="nav-item" style="max-height: 65px;">
                <img src="../images/contaR.png" class=" mx-auto d-block" style="padding: 10px;">
                <a class="nav-link" href="../PHP/conta.php" style="color: #C21219; padding: 0; font-size: 14px; font-weight: bold;">Conta</a>
            </li>
        </ul>
    </div>
</div>

<footer class="text-center text-lg-start">
    <div class="text-center p-3">
        &copy; 2023 Noar. Todos os direitos reservados.
    </div>
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script>

    </script>
</body>