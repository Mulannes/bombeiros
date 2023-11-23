<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="../CSS/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        .btn:hover{
            transform: scale(1.05);transition: .5s ease-in-out;background: rgba(0, 0, 0, 0.50);
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
        <div class="container-fluid">
            <div class="row text">
                <div class="col-lg">
                    <p class="display-1" style="color: #000;font-family: Poppins;font-size: 48px;font-style: normal;font-weight: 700;line-height: normal; margin:0;">Bombeiros,</p>
                    <p class="display-3" style="color: #000;font-family: Poppins;font-size: 44px;font-style: normal;font-weight: 500;line-height: normal;">Página inicial.</p>
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
                    data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="border-radius: 10px;border: 1px solid rgba(0, 0, 0, 0.10);background: #FFF; transition: .5s ease-in-out;
"><p style="color: #000;text-align: center;font-family: Poppins;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal; margin:0;">Menu</p></label>

                <label class="btn btn-outline-danger" for="btnradio2" data-bs-target="#carouselExampleDark"
                    data-bs-slide-to="1" aria-label="Slide 2" style="border-radius: 10px;border: 1px solid rgba(0, 0, 0, 0.10);background: #FFF;
"><p style="color: #000;text-align: center;font-family: Poppins;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal; margin:0;">Fazer Registro</p></label>

                <label class="btn btn-outline-danger" for="btnradio3" data-bs-target="#carouselExampleDark"
                    data-bs-slide-to="2" aria-label="Slide 3" style="border-radius: 10px;border: 1px solid rgba(0, 0, 0, 0.10);background: #FFF;
"><p style="color: #000;text-align: center;font-family: Poppins;font-size: 14px;font-style: normal;font-weight: 600;line-height: normal; margin:0;">Ver Registro</p></label>
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
                    <div class="carousel-item active"onclick="window.location.href='#'">
                        <img src="../images/red.png" class="d-block w-100">
                        <div class="carousel-caption text-light">
                            <h5>Menu</h5>
                            <p>Veja as informações<br>
                            do aplicativo aqui.</p>
                        </div>
                    </div>
                    <div class="carousel-item"onclick="window.location.href='../HTML/ocorrencia.html'">
                        <img src="../images/blue.png" class="d-block w-100">
                        <div class="carousel-caption text-light">
                            <h5>Fazer Registro</h5>
                            <p>Faça o registro de sua<br>
                                ocorrência aqui.</p>
                        </div>
                    </div>
                    <div class="carousel-item"onclick="window.location.href='../HTML/registro.html'">
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

            <div style="width: 100%; display: flex; justify-content: center; margin-bottom: 20px;">
            <div class="nav-pills-style" style="width: 95%; height: 75px; flex-shrink: 0; border-radius: 50px; background: #FFF; box-shadow: 0px 0px 100px 0px rgba(0, 0, 0, 0.50);">
                <ul class="nav nav-pills nav-justified">
                    <li class="nav-item" style=" max-height: 65px;">
                        <img src="../images/homeR.png" class=" mx-auto d-block" style="padding: 10px;">
                        <a class="nav-link" href="../PHP/index.php" style="color: #C21219; padding: 0; font-size: 14px;font-weight: bold; ">Menu</a>
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
                        <img src="../images/contaP.png" class=" mx-auto d-block" style="padding: 10px;">
                        <a class="nav-link" href="../PHP/conta.php" style="color: black; padding: 0; font-size: 14px">Conta</a>
                    </li>
                </ul>
            </div>
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