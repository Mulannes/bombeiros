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
                $causado_por_animais = isset($_POST['Causado_Por_Animais']) ? 1 : null;
                $com_meio_de_transporte = isset($_POST['Com_Meio_De_Transporte']) ? 1 : null;
                $desmoronamento_deslizamento = isset($_POST['Desmoronamento_Deslizamento']) ? 1 : null;
                $emergencia_medica = isset($_POST['Emergencia_Medica']) ? 1 : null;
                $queda_de_altura_2m = isset($_POST['Queda_De_Altura_2M']) ? 1 : null;
                $tentativa_de_suicidio = isset($_POST['Tentativa_De_Suicidio']) ? 1 : null;
                $queda_propria_altura = isset($_POST['Queda_Propria_Altura']) ? 1 : null;
                $afogamento = isset($_POST['Afogamento']) ? 1 : null;
                $agressao = isset($_POST['Agressao']) ? 1 : null;
                $atropelamento = isset($_POST['Atropelamento']) ? 1 : null;
                $choque_eletrico = isset($_POST['Choque_Eletrico']) ? 1 : null;
                $desabamento = isset($_POST['Desabamento']) ? 1 : null;
                $domestico = isset($_POST['Domestico']) ? 1 : null;
                $esportivo = isset($_POST['Esportivo']) ? 1 : null;
                $intoxicacao = isset($_POST['Intoxicacao']) ? 1 : null;
                $queda_bicicleta = isset($_POST['Queda_Bicicleta']) ? 1 : null;
                $queda_moto = isset($_POST['Queda_Moto']) ? 1 : null;
                $queda_nivel_2m = isset($_POST['Queda_Nivel_2M']) ? 1 : null;
                $trabalho = isset($_POST['Trabalho']) ? 1 : null;
                $transferencia = isset($_POST['Transferencia']) ? 1 : null;
                $outro_campo = isset($_POST['Outro_Campo']) ? $_POST['Outro_Campo'] : null;
                $outro_campo_text = isset($_POST['Outro_Campo_Text']) ? mysqli_real_escape_string($conn, $_POST['Outro_Campo_Text']) : null;


            // Inserir no banco de dados para ficha_tipo_de_ocorrencia
            $sql_tipo_ocorrencia = "INSERT INTO ficha_tipo_de_ocorrencia (
                Causado_Por_Animais, Com_Meio_De_Transporte, Desmoronamento_Deslizamento, Emergencia_Medica,
                Queda_De_Altura_2M, Tentativa_De_Suicidio, Queda_Propria_Altura, Afogamento, Agressao,
                Atropelamento, Choque_Eletrico, Desabamento, Domestico, Esportivo, Intoxicacao,
                Queda_Bicicleta, Queda_Moto, Queda_Nivel_2M, Trabalho, Transferencia, Outro_Campo
            ) VALUES (
                " . ($causado_por_animais ?? 'NULL') . ",
                " . ($com_meio_de_transporte ?? 'NULL') . ",
                " . ($desmoronamento_deslizamento ?? 'NULL') . ",
                " . ($emergencia_medica ?? 'NULL') . ",
                " . ($queda_de_altura_2m ?? 'NULL') . ",
                " . ($tentativa_de_suicidio ?? 'NULL') . ",
                " . ($queda_propria_altura ?? 'NULL') . ",
                " . ($afogamento ?? 'NULL') . ",
                " . ($agressao ?? 'NULL') . ",
                " . ($atropelamento ?? 'NULL') . ",
                " . ($choque_eletrico ?? 'NULL') . ",
                " . ($desabamento ?? 'NULL') . ",
                " . ($domestico ?? 'NULL') . ",
                " . ($esportivo ?? 'NULL') . ",
                " . ($intoxicacao ?? 'NULL') . ",
                " . ($queda_bicicleta ?? 'NULL') . ",
                " . ($queda_moto ?? 'NULL') . ",
                " . ($queda_nivel_2m ?? 'NULL') . ",
                " . ($trabalho ?? 'NULL') . ",
                " . ($transferencia ?? 'NULL') . ",
                " . ($outro_campo !== '' ? "'$outro_campo'" : 'NULL') . "
            )";

            // Executar a query para ficha_tipo_de_ocorrencia
            if ($conn->query($sql_tipo_ocorrencia) === TRUE) {

 // Receber dados do formulário para ficha_transporte_forma_de_conducao
            $forma_conducao = isset($_POST['forma_conducao']) ? $_POST['forma_conducao'] : null;

            // Verificar se a checkbox da forma de condução foi marcada
            if ($forma_conducao !== null) {
                // Inserir no banco de dados para forma_conducao
                $sql_forma_conducao = "INSERT INTO ficha_transporte_forma_de_conducao (forma_conducao) VALUES ('$forma_conducao')";            

                // Executar a query para forma_conducao
                if ($conn->query($sql_forma_conducao) === TRUE) {
                    echo "Registro salvo com sucesso!";
                } else {
                    echo "Erro ao salvar registro para forma_conducao: " . $conn->error;
                }
            } else {
                // Nenhuma opção de forma de condução selecionada, inserir NULL
                $sql_forma_conducao = "INSERT INTO ficha_transporte_forma_de_conducao (forma_conducao) VALUES (NULL)";

                // Executar a query para forma_conducao
                if ($conn->query($sql_forma_conducao) === TRUE) {
                    echo "Registro salvo com sucesso!";
                } else {
                    echo "Erro ao salvar registro para forma_conducao: " . $conn->error;
                }
            }
                } else {
                    echo "Nenhuma opção de forma de condução selecionada.";
                }
            } else {
                echo "Erro ao salvar registro para ficha_tipo_de_ocorrencia: " . $conn->error;
            }
    }
// Receber dados do formulário para ficha_observacoes_importantes
    $observacoes_importantes = isset($_POST['obsImpor']) ? mysqli_real_escape_string($conn, $_POST['obsImpor']) : '';

    // Inserir no banco de dados para Observações Importantes
    $sql_observacoes = "INSERT INTO ficha_observacoes_importantes (observacoes_importantes) VALUES ('$observacoes_importantes')";

    // Executar a query para Observações Importantes
    if ($conn->query($sql_observacoes) === TRUE) {
    } else {
        echo "Erro ao salvar observações importantes: " . $conn->error;
    }
    
// Obter valores do formulário Sinais Vitais
function getSafePost($key, $default = '') {
    return isset($_POST[$key]) ? $_POST[$key] : $default;
}

    // Obter valor do campo 'perfusao'
$perfusao_option = isset($_POST['perfusão']) ? $_POST['perfusão'] : null;

// Definir $perfusao diretamente ou como NULL
$perfusao = ($perfusao_option === 'perfusão2maior' || $perfusao_option === 'perfusão2menor') ? $perfusao_option : null;


    // Inserir dados no banco de dados para Sinais Vitais usando declaração preparada
    $stmt = $conn->prepare("INSERT INTO ficha_sinais_vitais (pressao_arterial0, pressao_arterial1, pulso, respiracao, saturacao, hgt, temperatura, perfusao) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssss", $pressao_arterial0, $pressao_arterial1, $pulso, $respiracao, $saturacao, $hgt, $temperatura, $perfusao);

    $pressao_arterial0 = getSafePost('Pressão_arterial0');
    $pressao_arterial1 = getSafePost('Pressão_arterial1');
    $pulso = getSafePost('Pulso');
    $respiracao = getSafePost('Respiracao');
    $saturacao = getSafePost('Saturação');
    $hgt = getSafePost('HGT');
    $temperatura = getSafePost('Temperatura');

    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Dados salvos com sucesso.";
    } else {
        echo "Erro ao salvar dados: " . $stmt->error;
    }

// Receber dados do formulário para ficha_objetos_recolhidos
$objetos_recolhidos = isset($_POST['objRec']) ? mysqli_real_escape_string($conn, $_POST['objRec']) : '';

// Inserir no banco de dados para ficha_objetos_recolhidos
$sql_objetos = "INSERT INTO ficha_objetos_recolhidos (objetos_recolhidos) VALUES ('$objetos_recolhidos')";

// Executar a query para ficha_objetos_recolhidos
if ($conn->query($sql_objetos) === TRUE) {
} else {
    echo "Erro ao salvar objetos recolhidos: " . $conn->error;
}

    // Fecha a conexão com o banco de dados
    $conn->close();
} else {
    // Se o formulário não foi enviado redireciona para a página inicial
    header("Location: index.php");
    exit();
}
?>
