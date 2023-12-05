<!DOCTYPE html>
<html lang="pt-BR">
<?php
include("dbconnect.php");
include("admin/redirectadm.php");

// Verifica se o usuário está logado
if (!isset($_SESSION['loggedIn'])) {
    // Se não estiver, redirecione para a página de login
    header("Location: login.php");
    exit();
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="../CSS/registro.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="/bombeiro/components/navbar.js"></script>
    <style>
        .dropdown-toggle::after {
            margin: 0;
            transition: .5s;
        }

        .dropdown-toggle:hover::after {
            transform: rotate(180deg);
        }
    </style>
</head>

<body>
    <header>
        <div class="d-lg-none">

            <nav class="navbar">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasNav"
                        style="width: 50px; height: 50px; position: relative; border: transparent;">
                        <img src="../images/MenuIcon.png" class="navbar-toggler-icon"
                            style="width: 58px; height: 58px; position: absolute; top: 0; left: 0; background-image: none;">
                    </button>
                    <form method="post" action="admin/redirectadm.php">
                        <button type="submit" name="btnRedirect" class="btn btn">
                            <img src="../images/botãologin.png" alt="Botão de Login">
                        </button>
                    </form>
                </div>
            </nav>
            <div class="offcanvas offcanvas-start" id="offcanvasNav">

                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
                </div>

                <div class="offcanvas-body">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ocorrencia.php">Fazer Registro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="registro.php">Registro</a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </header>
    <div class="container-fluid m-0 p-0">
        <div class="container-fluid">
            <div class="row text">
                <div class="col-lg">
                    <p class="display-1">Registros</p>
                </div>
            </div>
        </div>
        <div class="container-align" style="display: flex; flex-direction: column; align-items: center;gap: 6px;">
            <div class="borda"
                style="width: 95%; border-radius: 10px; height: 35px; display: flex; align-items: center; color: #000;font-family: Poppins;font-size: 14px;font-style: normal;font-weight: 700;line-height: normal;">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col text-center">
                            ID
                        </div>
                        <div class="col text-center">
                            Nome
                        </div>
                        <div class="col text-center">
                            Ação
                        </div>
                    </div>
                </div>
            </div>
            <?php
            // Suponha que você tenha a informação se o usuário é um administrador em $isAdmin
            $id_usuario = $_SESSION['id_usuario'];
            $isAdmin = isset($_SESSION['admin']) && $_SESSION['admin'] === true;

            if ($isAdmin) {
                // Se o usuário for um administrador, consulta sem a condição WHERE
                $sql = "SELECT * FROM fichas";
                $stmt = $conn->prepare($sql);
            } else {
                // Se não for um administrador, consulta com a condição WHERE
                $sql = "SELECT * FROM fichas WHERE id_usuario = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param('i', $id_usuario);
            }

            if ($stmt) {
                if ($stmt->execute()) {
                    $result = $stmt->get_result();

                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id_fichas'];
                        $nome = $row['nome_paciente'];

                        // Imprima o HTML formatado com os dados do banco de dados
                        echo '<div class="borda" style="width: 95%; border-radius: 10px; height: 50px; display: flex; align-items: center;">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col text-center">
                                    <p class="h6" style="margin: 0;">#' . $id . '</p>
                                </div>
                                <div class="col text-center">
                                    <p class="h6" style="margin: 0;">' . $nome . '</p>
                                </div>
                                <div class="col text-center" style="align-items: center;">
                                    <div class="btn-group" role="group" style="margin-bottom: 0;">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                            data-bs-toggle="dropdown" style="color: #000; background-color: #FFF; border: none; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.50); display: flex; align-items: center;justify-content: center; transition: .5s ease-in-out; ">
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <li><a class="dropdown-item" href="relatorio.php?id=' . $id . '">Relatório</a></li>
                                        <li><a class="dropdown-item text-danger" href="#" onclick="excluirFicha(' . $id . ')">Excluir</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
                } else {
                    echo "Erro na consulta: " . $stmt->error;
                }

                $stmt->close();
            } else {
                echo "Erro na preparação da consulta: " . $conn->error;
            }

            $conn->close();
            ?>

            <br>
            <div style="width: 100%; display: flex; justify-content: center; bottom: 60px; position:absolute;">
                <div class="nav-pills-style"
                    style="width: 95%; height: 75px; flex-shrink: 0; border-radius: 50px; background: #FFF; box-shadow: 0px 0px 100px 0px rgba(0, 0, 0, 0.50);">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item" style=" max-height: 65px;">
                            <img src="../images/home.png" class=" mx-auto d-block" style="padding: 10px;">
                            <a class="nav-link" href="index.php"
                                style="color: black; padding: 0; font-size: 14px">Menu</a>
                        </li>
                        <li class="nav-item" style="max-height: 65px;">
                            <img src="../images/fazerregistro.png" class=" mx-auto d-block"
                                style="padding: 10px 10px 5px 10px;">
                            <a class="nav-link" href="ocorrencia.php"
                                style="color: black; padding: 0; font-size: 14px; height: 28px; line-height: 13px;">Fazer<br>Registro</a>
                        </li>
                        <li class="nav-item" style="max-height: 65px;">
                            <img src="../images/registroR.png" class=" mx-auto d-block" style="padding: 10px;">
                            <a class="nav-link" href="registro.php"
                                style="color: #C21219; padding: 0; font-size: 14px;font-weight: bold;">Registros</a>
                        </li>
                        <li class="nav-item" style="max-height: 65px;">
                            <form action="admin/redirectadm.php" method="post">
                                <img src="../images/contaP.png" class=" mx-auto d-block" style="padding: 10px;">
                                <button type="submit" name="btnRedirect"
                                    style="color: #black; padding: 0; font-size: 14px; background-color: transparent; border: none;">Conta</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <footer class="text-center text-lg-start">
            <div class="text-center p-3" style="bottom: 10px; position:absolute;">
                &copy; 2023 Noar. Todos os direitos reservados.
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
            </script>
</body>

</html>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    function excluirFicha(id) {
        if (confirm('Tem certeza que deseja excluir esta ficha?')) {
            $.ajax({
                type: 'POST',
                url: 'excluir_ficha.php', // Substitua pelo script que processa a exclusão
                data: {
                    id: id
                },
                success: function (response) {
                    // Lide com a resposta, talvez recarregando a página ou atualizando a lista de fichas
                    console.log(response);
                },
                error: function (error) {
                    console.error(error);
                }
            });
        }
    }
</script>