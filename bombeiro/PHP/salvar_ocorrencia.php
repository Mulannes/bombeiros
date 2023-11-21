<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inclui o arquivo de conexão com o banco de dados
    include('dbconnect.php');

    // Recebendo dados do formulário
    $data_ocorrencia = $_POST['date'];
    $genero_paciente = isset($_POST['genero_DP']) ? $_POST['genero_DP'] : '';
    $nome_hospital = $_POST['nome_hospital_DP'];
    $nome_paciente = $_POST['nome_paciente_DP'];
    $idade_paciente = $_POST['idade_paciente_DP'];
    $CPF_paciente = $_POST['cpf_paciente_DP'];
    $telefone_paciente = $_POST['telefone_paciente_DP'];
    $nome_acompanhante = $_POST['acompanhante_DP'];
    $idade_acompanhante = $_POST['idade_acompanhante_DP'];
    $local_da_ocorrencia = $_POST['local_ocorrencia_DP'];

    // Verifica se os campos foram preenchidos
    if (!empty($CPF_paciente) && !preg_match('/^\d{11}$/', $CPF_paciente)) {
        echo "O CPF deve conter exatamente 11 números.";
    } else {
        // Inserir no banco de dados
        $sql = "INSERT INTO ficha_paciente (data_ocorrencia, genero_paciente, nome_hospital, nome_paciente, idade_paciente, CPF_paciente, telefone_paciente, nome_acompanhante, idade_acompanhante, local_da_ocorrencia) 
                VALUES ('$data_ocorrencia', '$genero_paciente', '$nome_hospital', '$nome_paciente', '$idade_paciente', '$CPF_paciente', '$telefone_paciente', '$nome_acompanhante', '$idade_acompanhante', '$local_da_ocorrencia')";

        if ($conn->query($sql) === TRUE) {
            echo "Registro salvo com sucesso!";
        } else {
            echo "Erro ao salvar registro: " . $conn->error;
        }
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
} else {
    // Se o formulário não foi enviado redireciona para a página inicial
    header("Location: index.php");
    exit();
}
?>
