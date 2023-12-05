<?php
include("dbconnect.php");

// Verificar se o ID está presente na URL
if (isset($_GET['id'])) {
    $id_ficha = $_GET['id'];

    // Consulta para obter os detalhes da ficha
    $sql = "SELECT fichas.*, 
               ficha_anamnese_emergencia_medica.*,
               ficha_anamnese_gestacional.*,
               ficha_avaliacao_cinematica.*,
               ficha_transporte_detalhes_viagem.*,
               ficha_avaliacao_glasgow.*,
               ficha_transporte_decisao_transporte.*,
               ficha_transporte_forma_de_conducao.*,
               ficha_localizacao_dos_traumas.*,
               ficha_paciente.*,
               ficha_sinais_vitais.*,
               ficha_transporte_vitima_era.*,
               ficha_materiais_utilizados_deixados.*,
               ficha_materiais_utilizados_descartavel.*,
               ficha_objetos_recolhidos.*,
               ficha_observacoes_importantes.*,
               ficha_problemas_encontrados.*,
               ficha_procedimentos_efetuados.*,
               ficha_sinais_e_sintomas.*,
               ficha_termo_recusa.*,
               ficha_tipo_de_ocorrencia.*,
               usuario.nome_usuario AS nome_responsavel
        FROM fichas
        LEFT JOIN ficha_anamnese_emergencia_medica ON fichas.idAnamnese_Emergencia_Medica = ficha_anamnese_emergencia_medica.idAnamnese_Emergencia_Medica
        LEFT JOIN ficha_anamnese_gestacional ON fichas.idAnamnese_Gestacional = ficha_anamnese_gestacional.idAnamnese_Gestacional
        LEFT JOIN ficha_avaliacao_cinematica ON fichas.idAvaliacao_Cinematica = ficha_avaliacao_cinematica.idAvaliacao_Cinematica
        LEFT JOIN ficha_transporte_detalhes_viagem ON fichas.idDetalhes_Viagem = ficha_transporte_detalhes_viagem.idDetalhes_Viagem
        LEFT JOIN ficha_avaliacao_glasgow ON fichas.idFicha_Avaliacao_Glasgow = ficha_avaliacao_glasgow.idFicha_Avaliacao_Glasgow
        LEFT JOIN ficha_transporte_decisao_transporte ON fichas.idFicha_Decisao_Transporte = ficha_transporte_decisao_transporte.idFicha_Decisao_Transporte
        LEFT JOIN ficha_transporte_forma_de_conducao ON fichas.idFicha_Forma_de_Conducao = ficha_transporte_forma_de_conducao.idFicha_Forma_de_Conducao
        LEFT JOIN ficha_localizacao_dos_traumas ON fichas.idFicha_Localizacao_dos_Traumas = ficha_localizacao_dos_traumas.idFicha_Localizacao_dos_Traumas
        LEFT JOIN ficha_paciente ON fichas.idFicha_Paciente = ficha_paciente.idFicha_Paciente
        LEFT JOIN ficha_sinais_vitais ON fichas.idFicha_Sinais_Vitais = ficha_sinais_vitais.idFicha_Sinais_Vitais
        LEFT JOIN ficha_transporte_vitima_era ON fichas.idFicha_Transporte_Vitima_Era = ficha_transporte_vitima_era.idFicha_Transporte_Vitima_Era
        LEFT JOIN ficha_materiais_utilizados_deixados ON fichas.idMateriais_Utilizados_Deixados = ficha_materiais_utilizados_deixados.idMateriais_Utilizados_Deixados
        LEFT JOIN ficha_materiais_utilizados_descartavel ON fichas.idMateriais_Utilizados_Descartavel = ficha_materiais_utilizados_descartavel.idMateriais_Utilizados_Descartavel
        LEFT JOIN ficha_objetos_recolhidos ON fichas.idObjetos_Recolhidos = ficha_objetos_recolhidos.idObjetos_Recolhidos
        LEFT JOIN ficha_observacoes_importantes ON fichas.idObservacoes_Importantes = ficha_observacoes_importantes.idObservacoes_Importantes
        LEFT JOIN ficha_problemas_encontrados ON fichas.idProblemas_Encontrados = ficha_problemas_encontrados.idProblemas_Encontrados
        LEFT JOIN ficha_procedimentos_efetuados ON fichas.idProcedimentos_Efetuados = ficha_procedimentos_efetuados.idProcedimentos_Efetuados
        LEFT JOIN ficha_sinais_e_sintomas ON fichas.idSinais_e_Sintomas = ficha_sinais_e_sintomas.idSinais_e_Sintomas
        LEFT JOIN ficha_termo_recusa ON fichas.idTermoRecusa = ficha_termo_recusa.idTermoRecusa
        LEFT JOIN ficha_tipo_de_ocorrencia ON fichas.idTipo_de_Ocorrencia = ficha_tipo_de_ocorrencia.idTipo_de_Ocorrencia
        LEFT JOIN usuario ON fichas.id_usuario = usuario.id_usuario

        WHERE fichas.id_fichas = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id_ficha);

    if ($stmt->execute()) {
        $result = $stmt->get_result();

        // Verificar se a ficha existe
        if ($result->num_rows > 0) {
            $ficha = $result->fetch_assoc();

            // //Ver todos os dados que estão sendo buscados
            // echo '<pre>';
            // print_r($ficha);
            // echo '</pre>';

// Infos Gerais da Ficha
            echo '<a href="index.php?id=' . $ficha['id_fichas'] . '"><h1>Detalhes da Ficha #' . $ficha['id_fichas'] . '</h1></a>';
            echo '<p>Nome do Paciente: ' . $ficha['nome_paciente'] . '</p>';
            echo '<p>Data da Ficha: ' . $ficha['data_ficha'] . '</p>';
            echo '<p>Usuário Responsável: ' . $ficha['nome_responsavel'] . '</p>';

// Ficha_Paciente
            echo '<hr>';
            echo '<h3>Detalhes Paciente</h3>';
            echo '<p>Nome do Hospital: ' . $ficha['nome_hospital'] . '</p>';
            echo '<p>Nome do Paciente: ' . $ficha['nome_paciente'] . '</p>';
            echo '<p>Idade do Paciente: ' . $ficha['idade_paciente'] . '</p>';
            echo '<p>Sexo do Paciente: ' . $ficha['genero_paciente'] . '</p>';
            echo '<p>CPF do Paciente: ' . $ficha['CPF_paciente'] . '</p>';
            echo '<p>Telefone do Paciente: ' . $ficha['telefone_paciente'] . '</p>';
            echo '<p>Nome do Acompanhante: ' . $ficha['nome_acompanhante'] . '</p>';
            echo '<p>Idade do Acompanhante: ' . $ficha['idade_acompanhante'] . '</p>';
            echo '<p>Local da Ocorrência: ' . $ficha['local_da_ocorrencia'] . '</p>';

// Tipo de Ocorrência
            echo '<hr>';
            echo '<h3>Tipo de Ocorrência</h3>';

            // Definir as colunas da tabela ficha_tipo_de_ocorrencia
            $colunasTipoOcorrencia = [
                'Causado_Por_Animais', 'Com_Meio_De_Transporte', 'Desmoronamento_Deslizamento',
                'Emergencia_Medica', 'Queda_De_Altura_2M', 'Tentativa_De_Suicidio',
                'Queda_Propria_Altura', 'Afogamento', 'Agressao', 'Atropelamento',
                'Choque_Eletrico', 'Desabamento', 'Domestico', 'Esportivo', 'Intoxicacao',
                'Queda_Bicicleta', 'Queda_Moto', 'Queda_Nivel_2M', 'Trabalho',
                'Transferencia', 'Outro_Campo'
            ];

            // Mostrar apenas as colunas com valores não nulos
            foreach ($colunasTipoOcorrencia as $coluna) {
                if ($coluna === 'Outro_Campo' && $ficha[$coluna] !== null) {
                    echo '<p>' . $coluna . ': ' . $ficha[$coluna] . '</p>';
                } elseif ($ficha[$coluna] !== null) {
                    echo '<p>' . $coluna . '</p>';
                }
            }
    
// Avaliação Glasgow
            echo '<hr>';
            echo '<h3>Avaliação Glasgow</h3>';

            echo '<p>Abertura Ocular: ' . $ficha['Abertura_Ocular'] . '</p>';
            echo '<p>Resposta Verbal: ' . $ficha['Resposta_Verbal'] . '</p>';
            echo '<p>Resposta Motora: ' . $ficha['Resposta_Motora'] . '</p>';

// Sinais Vitais
            echo '<hr>';
            echo '<h3>Sinais Vitais</h3>';

            echo '<p>Pressão Arterial: ' . $ficha['pressao_arterial0'] . ' x ' . $ficha['pressao_arterial1'];
            echo '<p>Pulso: ' . $ficha['pulso'] . '</p>';
            echo '<p>Respiração: ' . $ficha['respiracao'] . '</p>';
            echo '<p>Saturação: ' . $ficha['saturacao'] . '</p>';
            echo '<p>Temperatura: ' . $ficha['temperatura'] . '</p>';
            echo '<p>Perfusão: ' . $ficha['perfusao'] . '</p>';
            echo '<p>HGT: ' . $ficha['HGT'] . '</p>';

// Problemas Encontrados
            echo '<hr>';
            echo '<h3>Problemas Encontrados</h3>'; 

            if ($ficha['psiquiatrico'] == 1) {
                echo '<p>Psiquiátrico</p>';
            }            echo '<p>Obstétrico: ' . $ficha['obstetrico'] . '</p>';
            echo '<p>Respiratório: ' . $ficha['respiratorio'] . '</p>';
            echo '<p>Diabetes: ' . $ficha['diabetes'] . '</p>';
            echo '<p>Transporte: ' . $ficha['transporte'] . '</p>';
            if ($ficha['outros'] !== null) {
                echo '<p>' . 'Outros: ' . $ficha['outros'] . '</p>';
            }
        

// Localização dos Traumas
            echo '<hr>';
            echo '<h3>Localização dos Traumas</h3>'; 

// Objetos Recolhidos
            echo '<hr>';
            echo '<h3>Objetos Recolhidos</h3>'; 

// Sinais e Sintomas
            echo '<hr>';
            echo '<h3>Sinais e Sintomas</h3>'; 

// Forma de Condução
            echo '<hr>';
            echo '<h3>Forma de Condução</h3>'; 

// Vítima Era
            echo '<hr>';
            echo '<h3>Vítima Era</h3>'; 

// Decisão Transporte
            echo '<hr>';
            echo '<h3>Decisão Transporte</h3>'; 

// Procedimentos Efetuados
            echo '<hr>';
            echo '<h3>Procedimentos Efetuados</h3>'; 
            
// Materiais Utilizados Descartável
            echo '<hr>';
            echo '<h3>Materiais Utilizados Descartável</h3>'; 
            
 // Materiais Utilizados Deixados
            echo '<hr>';
            echo '<h3>Materiais Utilizados Deixados</h3>'; 

// Termo de Recusa
             echo '<hr>';
             echo '<h3>Termo de Recusa</h3>'; 
 
// Observações Importantes
            echo '<hr>';
            echo '<h3>Observações Importantes</h3>'; 

// Anamnese de Emergência Médica
            echo '<hr>';
            echo '<h3>Anamnese de Emergência Médica</h3>'; 

// Anamnese Gestacional
            echo '<hr>';
            echo '<h3>Anamnese Gestacional</h3>'; 

// Avaliação da Cinemática
            echo '<hr>';
            echo '<h3>Avaliação da Cinemática</h3>'; 

// Detalhes Viagem
            echo '<hr>';
            echo '<h3>Detalhes Viagem</h3>'; 

        } else {
            echo 'Ficha não encontrada.';
        }
    } else {
        echo "Erro na consulta: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo 'ID de ficha não especificado na URL.';
}
?>
