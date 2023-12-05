<?php
include('dbconnect.php');

if (isset($_POST['id'])) {
    $id_usuario = $_POST['id'];

    // Prepara a declaração SQL para excluir o usuário
    $sql = "DELETE FROM usuario WHERE id_usuario = ?";
    $stmt = $conn->prepare($sql);

    // Vincula o parâmetro e executa a declaração
    $stmt->bind_param('i', $id_usuario);

    if ($stmt->execute()) {
        // Resposta indicando sucesso
        echo json_encode(['success' => true]);
    } else {
        // Resposta indicando falha com mensagem de erro
        echo json_encode(['success' => false, 'error' => 'Erro ao excluir o usuário: ' . $stmt->error]);
    }

    // Fecha a declaração e a conexão
    $stmt->close();
    $conn->close();
} else {
    // Resposta indicando que o ID do usuário não foi fornecido
    echo json_encode(['success' => false, 'error' => 'ID do usuário não foi fornecido.']);
}
?>
