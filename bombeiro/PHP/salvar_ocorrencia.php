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
        // Recebendo dados do formulário
    $causado_por_animais = isset($_POST['Causado_Por_Animais']) ? 1 : 0;
    $com_meio_de_transporte = isset($_POST['Com_Meio_De_Transporte']) ? 1 : 0;
    $desmoronamento_deslizamento = isset($_POST['Desmoronamento_Deslizamento']) ? 1 : 0;
    $emergencia_medica = isset($_POST['Emergencia_Medica']) ? 1 : 0;
    $queda_de_altura_2m = isset($_POST['Queda_De_Altura_2M']) ? 1 : 0;
    $tentativa_de_suicidio = isset($_POST['Tentativa_De_Suicidio']) ? 1 : 0;
    $queda_propria_altura = isset($_POST['Queda_Propria_Altura']) ? 1 : 0;
    $afogamento = isset($_POST['Afogamento']) ? 1 : 0;
    $agressao = isset($_POST['Agressao']) ? 1 : 0;
    $atropelamento = isset($_POST['Atropelamento']) ? 1 : 0;
    $choque_eletrico = isset($_POST['Choque_Eletrico']) ? 1 : 0;
    $desabamento = isset($_POST['Desabamento']) ? 1 : 0;
    $domestico = isset($_POST['Domestico']) ? 1 : 0;
    $esportivo = isset($_POST['Esportivo']) ? 1 : 0;
    $intoxicacao = isset($_POST['Intoxicacao']) ? 1 : 0;
    $queda_bicicleta = isset($_POST['Queda_Bicicleta']) ? 1 : 0;
    $queda_moto = isset($_POST['Queda_Moto']) ? 1 : 0;
    $queda_nivel_2m = isset($_POST['Queda_Nivel_2M']) ? 1 : 0;
    $trabalho = isset($_POST['Trabalho']) ? 1 : 0;
    $transferencia = isset($_POST['Transferencia']) ? 1 : 0;
    $outro_campo = isset($_POST['Outro_Campo']) ? $_POST['Outro_Campo'] : '';
    $outro_campo_text = isset($_POST['Outro_Campo_Text']) ? $_POST['Outro_Campo_Text'] : '';

    $outro_campo = mysqli_real_escape_string($conn, $outro_campo);

    // Inserir no banco de dados
    $sql = "INSERT INTO ficha_tipo_de_ocorrencia (
        Causado_Por_Animais, Com_Meio_De_Transporte, Desmoronamento_Deslizamento, Emergencia_Medica,
        Queda_De_Altura_2M, Tentativa_De_Suicidio, Queda_Propria_Altura, Afogamento, Agressao,
        Atropelamento, Choque_Eletrico, Desabamento, Domestico, Esportivo, Intoxicacao,
        Queda_Bicicleta, Queda_Moto, Queda_Nivel_2M, Trabalho, Transferencia, Outro_Campo
     ) VALUES (...,
        '$outro_campo_text'
     )";
     
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
