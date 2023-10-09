<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="container-fluid m-0 p-0"
        style="background-image: url('images/bg-drop-fade-marquinhos.png'); background-size: cover; height: 100vh;">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-3 d-flex align-items-center justify-content-center w-100 p-3 h-75">
                    <div class="login-container w-75 h-75 bg-white rounded-4">
                        
                        <form class="w-100 h-100 d-flex flex-column justify-content-center p-4" action="processamento_login.php"
                            method="post">
                            <div class="d-flex flex-column h-25">
                                Email:
                                <input class="mt-1 shadow-lg bg-white border-0" type="text" name="usuario" placeholder="Email"
                                    required>
                            </div>
                            Senha:
                            <input class="mt-1 shadow-lg bg-white border-0" type="password" name="senha" placeholder="Senha"
                                required>
                            <div class="d-flex w-100 h-25 align-items-center justify-content-center">
                                <button class="mt-3 shadow-lg border-0 bg-danger w-75 h-50 text-light" type="submit">Entrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>