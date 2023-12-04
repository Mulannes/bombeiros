<?php
include('dbconnect.php');

// Verifica se o ID foi enviado via POST
if (isset($_POST['id'])) {
    $id_ficha = $_POST['id'];

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Prepara a declaração SQL para excluir a ficha
    $sql = "DELETE FROM fichas WHERE id_fichas = ?";
    $stmt = $conn->prepare($sql);

    // Vincula o parâmetro e executa a declaração
    $stmt->bind_param('i', $id_ficha);

    if ($stmt->execute()) {
        echo "Ficha excluída com sucesso!";
    } else {
        echo "Erro ao excluir a ficha: " . $stmt->error;
    }

    // Fecha a declaração e a conexão
    $stmt->close();
    $conn->close();
} else {
    echo "ID da ficha não foi fornecido.";
}
?>