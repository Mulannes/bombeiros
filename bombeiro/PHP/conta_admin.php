<?php
session_start();

include('dbconnect.php');

// Verifica se a chave 'id_usuario' está definida na sessão
if (isset($_SESSION['id_usuario'])) {
    $id_usuario = $_SESSION['id_usuario'];

    // Consulta SQL para recuperar informações do usuário
    $sql = "SELECT * FROM usuario WHERE id_usuario = ?";
    $stmt = $conn->prepare($sql);

    // Verifica se a preparação da consulta foi bem-sucedida
    if ($stmt) {
        $stmt->bind_param('i', $id_usuario);

        // Executa a consulta
        if ($stmt->execute()) {
            $result = $stmt->get_result();

            // Verifica se há algum resultado
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $nome_usuario = $row['nome_usuario'];
            } else {
                echo "Nenhum usuário encontrado com ID $id_usuario";
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
    <title>Conta</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="/bombeiro/components/nav-pills.js"></script>
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
                            data-bs-target="#offcanvasNav" style="width: 50px; height: 50px; position: relative; border: transparent;">
                            <img src="../images/MenuIcon.png" class="navbar-toggler-icon" style="width: 58px; height: 58px; position: absolute;top: 0; left: 0; background-image: none;">
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
        <div class="container d-flex justify-content-around align-items-center p-4">
    <img src="../images/perfil.png">
    <div style="display: flex; flex-direction: column; gap: 0;">
        <?php
        if (isset($nome_usuario)) {
            // O usuário está logado
            ?>
            <p class="h1" style="color: #000; font-family: Poppins; font-size: 24px; font-style: normal; font-weight: 700; line-height: normal; margin: 0;"><?php echo $nome_usuario; ?></p>
            <p class="h2" style="color: rgba(0, 0, 0, 0.40); font-family: Poppins; font-size: 20px; font-style: normal; font-weight: 300; line-height: normal;">Bombeiro</p>
            <?php
        } else {
            // O usuário não está logado
            ?>
            <p class="h1" style="color: #000; font-family: Poppins; font-size: 24px; font-style: normal; font-weight: 700; line-height: normal; margin: 0;">Usuário não logado</p>
            <p class="h2" style="color: rgba(0, 0, 0, 0.40); font-family: Poppins; font-size: 20px; font-style: normal; font-weight: 300; line-height: normal;">Faça login para visualizar as informações</p>
            <?php
        }
        ?>
    </div>
</div>
    </div>
    </div>
        <div class="container d-flex w-20 h-20" style="gap: 8px;">
            <div class="container d-flex flex-column align-items-center justify-content-center"
                style="height:80px; width:50%; background-color: var(--dedada2); border-radius: 15px;">
                <p class="d-flex align-items-center justify-content-around" style="font-size: 24px; font-weight: 800; margin: 0;">9</p>
                <p class="d-flex justify-content-around text-muted" style="font-size: 15px; width: 90%;margin: 0;">Registros Realizados</p>
            </div>
            <div class="container d-flex flex-column align-items-center justify-content-center"
                style="height:80px; width:50%; background-color:  var(--dedada2); border-radius: 15px">
                <p class="d-flex justify-content-around" style="font-size: 24px; font-weight: 800; margin: 0">2</p>
                <p class="d-flex justify-content-around text-muted" style="font-size: 15px; width: 90%; margin: 0;">Em andamento</p>
            </div>
        </div>

        <a href="../PHP/informacoes.php" class="text-decoration-none text-dark">
            <div class="container d-flex align-items-center mt-3"
                style="background-color:  var(--bg-itens); width: 95%; height: 50px; border-radius: 15px; padding-left: 30px;">
                <img src="../images/contaP.png" alt="">
                <div class="container" style="height: 50px; width: 100%;"><b
                        class="h-100 d-flex align-items-center" style="font-size: 16px; padding-left: 25px;">Informações da conta</b></div>
            </div>
        </a>

        <a href="../HTML/suporte.html" class="text-decoration-none text-dark">
            <div class="container  d-flex align-items-center mt-3"
                style="background-color:  var(--bg-itens); width: 95%; height: 50px; border-radius: 15px; padding-left: 30px">
                <img src="../images/suporte.png" alt="">
                <div class="container" style="height: 50px; width: 100%;"><b
                        class="h-100 d-flex align-items-center"style="font-size: 16px;padding-left: 25px;">Suporte</b></div>
            </div>
        </a>

        <a href="admin/cadastro.php" class="text-decoration-none text-dark">
            <div class="container  d-flex align-items-center mt-3"
                style="background-color:  var(--bg-itens); width: 95%; height: 50px; border-radius: 15px; padding-left: 30px">
                <img src="../images/cadastro2.png" alt="">
                <div class="container" style="height: 50px; width: 100%;"><b
                        class="h-100 d-flex align-items-center"style="font-size: 16px;padding-left: 25px;">Fazer Cadastro</b></div>
            </div>
        </a>

        <a href="../PHP/logout.php" class="text-decoration-none text-dark">
            <div class="container  d-flex align-items-center mt-3"
                style="background-color:  var(--bg-itens); width: 95%; height: 50px; border-radius: 15px; padding-left: 30px; margin-bottom: 100px;">
                <img src="../images/sair.png" alt="">
                <div class="container" style="height: 50px; width: 100%;"><b
                        class="h-100 d-flex align-items-center text-danger"style="font-size: 16px;padding-left: 25px;">Sair</b></div>
            </div>
        </a>
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

</body>

</html>