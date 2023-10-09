<?php
        include('dbconnect.php'); /*arquivo de conexão com o bando de dados*/

        if(isset($_POST['submit-button'])) {
            $email = $_POST['email']; /*name do email-input*/
            $senha = $_POST['senha']; /*name do password-input*/
            
            $sql = "SELECT email_usuario, senha_usuario FROM usuario WHERE email_usuario = '$email' && senha_usuario = '$senha'"; /*informações de tabela e campos de acordo como seu BD*/
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) { 
              header("Location: index.html"); /*local para onde deseja redirecionar o usuário*/
            } else {
                header("Location: login.html"); /*local para onde deseja redirecionar o usuário*/
                /*echo "<script>document.querySelector('#form-text').innerText = 'E-mail ou senha inválidos'</script>";*/
            }
        }
        
        mysqli_close($conn);
    ?>