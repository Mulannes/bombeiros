<!DOCTYPE html>
<html lang="pt-BR">
<?php
include("admin/redirectadm.php")
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Ocorrência</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="/bombeiro/components/navbar.js"></script>

</head>

<body>
    <div class="container-fluid m-0 p-0">
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
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Fechar"></button>
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
        <div class="container-fluid">
            <div class="row text">
                <div class="col-lg">
                    <p class="display-1"><b>Ocorrência</b></p>
                </div>
            </div>

            <div class="container rounded p-5" style="background-color: #33338D; width: 90%; height: 300px;">
                <div class="container" style="height: 50px; width: 100%;">
                    <h1 class="text-light text-center">Você deseja finalizar o registro da ocorrência?</h1>
                </div>
                <h6 class="text-light text-center" style="margin-top: 140px;">Você pode voltar depois e edita-lo
                    novamente.</h6>
            </div>

            <a href="#" class="text-decoration-none text-light">
                <div class="container rounded mt-3" style="background-color: #33338D; width: 90%; height: 50px;">
                    <div class="container d-flex align-items-center justify-content-center"
                        style="height: 50px; width: 100%;">
                        <b class="h3">Voltar</b>
                    </div>
                </div>
            </a>

            <a href="#" class="text-decoration-none text-light">
                <div class="container rounded mt-3" style="background-color: #078F0D; width: 90%; height: 50px;">
                    <div class="container d-flex align-items-center justify-content-center"
                        style="height: 50px; width: 100%;">
                        <b class="h3">Continuar</b>
                    </div>
                </div>
            </a>
            <br>
            <div style="width: 100%; display: flex; justify-content: center; margin-bottom: 20px;">
                <div class="nav-pills-style" style="width: 95%; height: 75px; flex-shrink: 0; border-radius: 50px; background: #FFF; box-shadow: 0px 0px 100px 0px rgba(0, 0, 0, 0.50);">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item" style=" max-height: 65px;">
                            <img src="../images/home.png" class=" mx-auto d-block" style="padding: 10px;">
                            <a class="nav-link" href="index.php" style="color: black; padding: 0; font-size: 14px">Menu</a>
                        </li>
                        <li class="nav-item" style="max-height: 65px;">
                            <img src="../images/fazerregistroR.png" class=" mx-auto d-block" style="padding: 10px 10px 5px 10px;"> 
                            <a class="nav-link" href="ocorrencia.php" style="color: #C21219; padding: 0; font-size: 14px; font-weight: bold; height: 28px; line-height: 13px;">Fazer<br>Registro</a>
                        </li>
                        <li class="nav-item" style="max-height: 65px;">
                            <img src="../images/registro.png" class=" mx-auto d-block" style="padding: 10px;">
                            <a class="nav-link" href="registro.php" style="color: black; padding: 0; font-size: 14px">Registros</a>
                        </li>
                        <li class="nav-item" style="max-height: 65px;">
                <form action="admin/redirectadm.php" method="post">
                    <img src="../images/contaP.png" class=" mx-auto d-block" style="padding: 10px;">
                    <button type="submit" name="btnRedirect" style="color: #black; padding: 0; font-size: 14px; background-color: transparent; border: none;">Conta</button>
                </form>
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