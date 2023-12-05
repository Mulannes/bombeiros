<?php
include("dbconnect.php");

if (isset($_GET['id'])) {
    $id_usuario = $_GET['id'];

    // Consulta para obter o tipo de usuário atual e inverter
    $consulta_tipo_usuario = "SELECT tipo_usuario FROM usuario WHERE id_usuario = ?";
    $stmt_tipo_usuario = $conn->prepare($consulta_tipo_usuario);
    $stmt_tipo_usuario->bind_param('i', $id_usuario);

    if ($stmt_tipo_usuario->execute()) {
        $resultado_tipo_usuario = $stmt_tipo_usuario->get_result();

        if ($resultado_tipo_usuario->num_rows > 0) {
            $dados_tipo_usuario = $resultado_tipo_usuario->fetch_assoc();
            $novo_tipo_usuario = ($dados_tipo_usuario['tipo_usuario'] == 'admin') ? 'user' : 'admin';

            // Atualize o tipo de usuário no banco de dados
            $atualizar_tipo_usuario = "UPDATE usuario SET tipo_usuario = ? WHERE id_usuario = ?";
            $stmt_atualizar_tipo_usuario = $conn->prepare($atualizar_tipo_usuario);
            $stmt_atualizar_tipo_usuario->bind_param('si', $novo_tipo_usuario, $id_usuario);

            if ($stmt_atualizar_tipo_usuario->execute()) {
                echo '<script>
                        setTimeout(function(){
                            window.location.href = "usuarios.php";
                        }, 200); // Redireciona após meio segundo
                      </script>';
            } else {
                echo "Erro ao atualizar o tipo de usuário: " . $stmt_atualizar_tipo_usuario->error;
            }

            $stmt_atualizar_tipo_usuario->close();
        } else {
            echo "ID de usuário não encontrado.";
        }
    } else {
        echo "Erro na consulta de tipo de usuário: " . $stmt_tipo_usuario->error;
    }

    $stmt_tipo_usuario->close();
    $conn->close();
} else {
    echo 'ID de usuário não especificado na URL.';
}
?>
