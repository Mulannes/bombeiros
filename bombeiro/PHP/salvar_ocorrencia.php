<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluir o arquivo de conexão com o banco de dados
    include('dbconnect.php');

// Receber dados do formulário para ficha_paciente
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

    // Verificar se os campos foram preenchidos
    if (!empty($CPF_paciente) && !preg_match('/^\d{11}$/', $CPF_paciente)) {
        echo "O CPF deve conter exatamente 11 números.";
    } else {
        // Inserir no banco de dados para ficha_paciente
        $sql_paciente = "INSERT INTO ficha_paciente (data_ocorrencia, genero_paciente, nome_hospital, nome_paciente, idade_paciente, CPF_paciente, telefone_paciente, nome_acompanhante, idade_acompanhante, local_da_ocorrencia) 
            VALUES ('$data_ocorrencia', '$genero_paciente', '$nome_hospital', '$nome_paciente', '$idade_paciente', '$CPF_paciente', '$telefone_paciente', '$nome_acompanhante', '$idade_acompanhante', '$local_da_ocorrencia')";

        // Executar a query para ficha_paciente
        if ($conn->query($sql_paciente) === TRUE) {

// Receber dados do formulário para ficha_tipo_de_ocorrencia
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
            $outro_campo_text = isset($_POST['Outro_Campo_Text']) ? mysqli_real_escape_string($conn, $_POST['Outro_Campo_Text']) : '';

            // Inserir no banco de dados para ficha_tipo_de_ocorrencia
            $sql_tipo_ocorrencia = "INSERT INTO ficha_tipo_de_ocorrencia (
                Causado_Por_Animais, Com_Meio_De_Transporte, Desmoronamento_Deslizamento, Emergencia_Medica,
                Queda_De_Altura_2M, Tentativa_De_Suicidio, Queda_Propria_Altura, Afogamento, Agressao,
                Atropelamento, Choque_Eletrico, Desabamento, Domestico, Esportivo, Intoxicacao,
                Queda_Bicicleta, Queda_Moto, Queda_Nivel_2M, Trabalho, Transferencia, Outro_Campo
                ) VALUES (
                 $causado_por_animais, $com_meio_de_transporte, $desmoronamento_deslizamento, $emergencia_medica,
                 $queda_de_altura_2m, $tentativa_de_suicidio, $queda_propria_altura, $afogamento, $agressao,
                 $atropelamento, $choque_eletrico, $desabamento, $domestico, $esportivo, $intoxicacao,
                 $queda_bicicleta, $queda_moto, $queda_nivel_2m, $trabalho, $transferencia, '$outro_campo_text'
                 )";

            // Executar a query para ficha_tipo_de_ocorrencia
            if ($conn->query($sql_tipo_ocorrencia) === TRUE) {

// Receber dados do formulário para ficha_transporte_forma_de_conducao
                $forma_conducao = isset($_POST['forma_conducao']) ? $_POST['forma_conducao'] : '';

                // Verificar se a checkbox da forma de condução foi marcada
                if (!empty($forma_conducao)) {
                    // Inserir no banco de dados para forma_conducao
                    $sql_forma_conducao = "INSERT INTO ficha_transporte_forma_de_conducao (forma_conducao) VALUES ('$forma_conducao')";            

                    // Executar a query para forma_conducao
                    if ($conn->query($sql_forma_conducao) === TRUE) {
                        echo "Registro salvo com sucesso!";
                    } else {
                        echo "Erro ao salvar registro para forma_conducao: " . $conn->error;
                    }
                } else {
                    echo "Nenhuma opção de forma de condução selecionada.";
                }
            } else {
                echo "Erro ao salvar registro para ficha_tipo_de_ocorrencia: " . $conn->error;
            }
        } else {
            echo "Erro ao salvar registro para ficha_paciente: " . $conn->error;
        }
    }
// Receber dados do formulário para Observações Importantes
    $observacoes_importantes = isset($_POST['obsImpor']) ? mysqli_real_escape_string($conn, $_POST['obsImpor']) : '';

    // Inserir no banco de dados para Observações Importantes
    $sql_observacoes = "INSERT INTO ficha_observacoes_importantes (observacoes_importantes) VALUES ('$observacoes_importantes')";

    // Executar a query para Observações Importantes
    if ($conn->query($sql_observacoes) === TRUE) {
        echo "Observações importantes salvas com sucesso!";
    } else {
        echo "Erro ao salvar observações importantes: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
} else {
    // Se o formulário não foi enviado redireciona para a página inicial
    header("Location: index.php");
    exit();
}
?>
