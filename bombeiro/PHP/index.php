<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../CSS/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="../components/nav-pills.js"></script>
    <script src="../components/navbar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
                        <a href="../HTML/conta.html"><img src="../images/botãologin.png"></a>
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
                                <a class="nav-link" href="../HTML/ocorrencia.html">Fazer Registro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../HTML/registro.html">Registro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../HTML/conta.html">Conta</a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </header>
        <div class="container-fluid">
            <div class="row text">
                <div class="col-lg">
                    <p class="display-1">Bombeiros,</p>
                    <p class="display-3">Página inicial.</p>
                </div>
            </div>
        </div>
        <br>
        <div class="container-fluid">

            <div class="row text">
                <div class="col">
                    <p class="h5">Opções</p>
                </div>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">

                <label class="btn btn-outline-danger" for="btnradio1" data-bs-target="#carouselExampleDark"
                    data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">Menu</label>

                <label class="btn btn-outline-danger" for="btnradio2" data-bs-target="#carouselExampleDark"
                    data-bs-slide-to="1" aria-label="Slide 2">Fazer Registro</label>

                <label class="btn btn-outline-danger" for="btnradio3" data-bs-target="#carouselExampleDark"
                    data-bs-slide-to="2" aria-label="Slide 3">Ver Registro</label>
            </div>

            <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" data-bs-ride="carousel">
                    <div class="carousel-item active"onclick="window.location.href='informacoes.html'">
                        <img src="../images/red.png" class="d-block w-100">
                        <div class="carousel-caption text-light">
                            <h5>Menu</h5>
                            <p>Veja as informações<br>
                            do aplicativo aqui.</p>
                        </div>
                    </div>
                    <div class="carousel-item"onclick="window.location.href='doRegister.html'">
                        <img src="../images/blue.png" class="d-block w-100">
                        <div class="carousel-caption text-light">
                            <h5>Fazer Registro</h5>
                            <p>Faça o registro de sua<br>
                                ocorrência aqui.</p>
                        </div>
                    </div>
                    <div class="carousel-item"onclick="window.location.href='registro.html'">
                        <img src="../images/green.png" class="d-block w-100">
                        <div class="carousel-caption text-light">
                            <h5>Ver Registro</h5>
                            <p>Veja todos os registros<br>
                                já feitos.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>

            <ul class="nav nav-pills nav-justified">
                <li class="nav-item">
                    <img src="../images/home.png" class="rounded mx-auto d-block">
                    <a class="nav-link active" aria-current="page" href="../HTML/index.html">Menu</a>
                </li>
                <li class="nav-item">
                    <img src="../images/fazerregistro.png" class="rounded mx-auto d-block">
                    <a class="nav-link" href="../HTML/ocorrencia.html">Fazer Registro</a>
                </li>
                <li class="nav-item">
                    <img src="../images/registro.png" class="rounded mx-auto d-block">
                    <a class="nav-link" href="../HTML/registro.html">Registros</a>
                </li>
            </ul>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>

<?php
            // Inicia a sessão
            session_start();
        
            // Verifica se há uma mensagem de popup na sessão
            if (isset($_SESSION['popup_msg'])) {
                $popup_msg = $_SESSION['popup_msg'];
                unset($_SESSION['popup_msg']);
        
                // Exibe o popup de boas-vindas personalizado
                echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "Bem-vindo(a)!",
                        text: "' . $popup_msg . '",
                        timer: 3000, // 3 segundos
                        showConfirmButton: false,
                        customClass: {
                            popup: "swal-custom-popup",
                            title: "swal-custom-title",
                            content: "swal-custom-content"
                        }
                    });
                </script>';
            }
            ?>

</body>


</html>