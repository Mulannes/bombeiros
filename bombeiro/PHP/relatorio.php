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

// Termo de Recusa
            // Mostra apenas se for preenchido
            if (!empty($ficha['caminho_imagem'])) {
                echo '<hr>';
                echo '<h3>Termo de Recusa</h3>'; 
                echo '<img src="' . $ficha['caminho_imagem'] . '" alt="Imagem do Termo de Recusa" style="max-width: 100%; height: auto;">';
            }else{

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

            echo '<p>Objetos Recolhidos: ' . $ficha['objetos_recolhidos'] . '</p>';

// Sinais e Sintomas
            echo '<hr>';
            echo '<h3>Sinais e Sintomas</h3>'; 

            $colunasSinaisSintomas = [
                'abdomen_sensivel_rigido', 'afundamento_cranio', 'agitacao', 'amnesia', 'angna_peito',
                'apneia', 'bradicardia', 'bradipneia', 'bronco_aspiracao', 'cefaleia', 'cianose_labios',
                'cianose_extremidade', 'convulsao', 'decorticacao', 'deformidade', 'descerebracao',
                'desmaio', 'desvio_traqueia', 'despineia', 'dor_local', 'edema_generalizado', 
                'edema_localizado', 'enfisema_subcutaneo', 'extase_jugular', 'face_palida', 'hemorragia_interna',
                'hemorragia_externa', 'hipertensao', 'hipotensao', 'nauseas_vomitos', 'nasoragia', 'obito',
                'otorreia', 'otorragia', 'ovace', 'parada_cardiaca', 'parada_respiratoria', 'priaprismo',
                'prurido_pele', 'pupilas_anisocoria', 'pupilas_isocoria', 'pupilas_midriase', 'pupilas_miose',
                'pupilas_reagente', 'pupilas_nao_reagente', 'sede', 'sinal_battle', 'sinal_guaxinim',
                'sudorese', 'taquipneia', 'taquicardia', 'tontura', 'observacoes'
            ];            
            
            // Mostrar apenas as colunas com valores não nulos
            foreach ($colunasSinaisSintomas as $colunaSS) {
                if ($colunaSS === 'observacoes' && $ficha[$colunaSS] !== 0) {
                    echo '<p>' . $colunaSS . ': ' . $ficha[$colunaSS] . '</p>';
                } elseif ($ficha[$colunaSS] !== 0) {
                    echo '<p>' . $colunaSS . '</p>';
                }
            }

// Forma de Condução
            echo '<hr>';
            echo '<h3>Forma de Condução</h3>'; 

            echo '<p>Forma de Condução: ' . $ficha['forma_conducao'] . '</p>';

// Vítima Era
            echo '<hr>';
            echo '<h3>Vítima Era</h3>'; 

            echo '<p>Vítima Era: ' . $ficha['vitima_era'] . '</p>';

// Decisão Transporte
            echo '<hr>';
            echo '<h3>Decisão Transporte</h3>'; 

            echo '<p>Situação: ' . $ficha['decisao_transporte'] . '</p>';
            echo '<p>M: ' . $ficha['M'] . '</p>';
            echo '<p>S1: ' . $ficha['S1'] . '</p>';
            echo '<p>S2: ' . $ficha['S2'] . '</p>';
            echo '<p>S3: ' . $ficha['S3'] . '</p>';
            echo '<p>Demandante: ' . $ficha['Demandante'] . '</p>';
            echo '<p>Equipe: ' . $ficha['Equipe'] . '</p>';

// Procedimentos Efetuados
            echo '<hr>';
            echo '<h3>Procedimentos Efetuados</h3>'; 

            $colunasProcedimentosEfetuados = [
                'Aspiracao', 'Avaliacao_Inicial', 'Avaliacao_Dirigida', 'Avaliacao_Continuada', 'Chave_de_Rautek',
                'Canula_de_Guedel', 'Desobstrucao_de_VA', 'Emprego_do_DEA', 'Gerenciamento_de_Riscos', 'Limpeza_de_Ferimentos',
                'Curativos', 'Compressivo', 'Encravamento', 'Ocular', 'Queimadura', 'Simples', 'tres_Pontas',
                'Imobilacoes', 'Membro_INF_dir', 'Membro_INF_esq', 'Membro_SUP_dir', 'Membro_SUP_esq', 'Quadril',
                'Cervical', 'Maca_Sobre_Rodas', 'Maca_Rigida', 'Ponte', 'Retirado_Capacete', 'RCP', 'Rolamento_90',
                'Rolamento_180', 'Tomada_Decisao', 'Tratado_Choque', 'Uso_de_Canula', 'Uso_Colar', 'Uso_KED', 'Uso_TTF',
                'Ventilacao_Suporte', 'Oxigenioterapia', 'Reanimador', 'Meios_Auxiliares', 'Celesc', 'Def_Civil',
                'IGP_PC', 'Policia', 'Policia_Value', 'Samu', 'Samu_Value', 'CIT', 'OutrosMeios'
            ];

            // Mostrar apenas as colunas com valores não nulos
            foreach ($colunasProcedimentosEfetuados as $colunaProcedimento) {
                if ($colunaProcedimento !== 'tamColar' && $colunaProcedimento !== 'Oxigenioterapia_LPM' && $colunaProcedimento !== 'Reanimador_LPM') {
                    if ($colunaProcedimento === 'OutrosMeios' && $ficha[$colunaProcedimento] !== null) {
                        echo '<p>' . $colunaProcedimento . ': ' . $ficha[$colunaProcedimento] . '</p>';
                    } elseif ($ficha[$colunaProcedimento] !== null) {
                        echo '<p>' . $colunaProcedimento . '</p>';
                    }
                }
            }

// Materiais Utilizados Descartável
            echo '<hr>';
            echo '<h3>Materiais Utilizados Descartável</h3>'; 

            $colunasMateriaisDescartaveis = [
                'ataduras', 'cateter', 'compressa', 'kit', 'luvas', 'mascara', 'manta', 'pas', 'sonda', 'soro', 'talas', 'outro_nome', 'outro_valor'
            ];

            foreach ($colunasMateriaisDescartaveis as $coluna) {
                $valor = $ficha[$coluna];
                if (!empty($valor)) {
                    echo '<p>' . $coluna . ': ' . $valor . '</p>';
                }
            }
            
 // Materiais Utilizados Deixados
            echo '<hr>';
            echo '<h3>Materiais Utilizados Deixados</h3>'; 

            $colunasMateriaisDeixados = [
                'base', 'colar1', 'colar2', 'coxins', 'KED', 'maca', 'TTF', 'tirante_aranha', 'tirante_cabeca', 'canula', 'outro_campo1', 'outro_valor1', 'outro_campo2', 'outro_valor2'
            ];

            foreach ($colunasMateriaisDeixados as $coluna) {
                $valor = $ficha[$coluna];
                if (!empty($valor)) {
                    echo '<p>' . $coluna . ': ' . $valor . '</p>';
                }
            }
 
// Observações Importantes
            echo '<hr>';
            echo '<h3>Observações Importantes</h3>'; 

            echo '<p>Observações Importantes: ' . $ficha['observacoes_importantes'] . '</p>';

// Anamnese de Emergência Médica
            echo '<hr>';
            echo '<h3>Anamnese de Emergência Médica</h3>'; 

            echo '<p>O que aconteceu: ' . $ficha['que_aconteceu'] . '</p>';
            echo '<p>Aconteceu mais vezes que aconteceu: ' . $ficha['vezes_aconteceu'] . '</p>';
            echo '<p>Tempo que aconteceu: ' . $ficha['tempo_aconteceu'] . '</p>';
            echo '<p>Problema de saúde: ' . ($ficha['problema_saude']) . '</p>';
            echo '<p>Qual problema de saúde: ' . $ficha['qual_problema'] . '</p>';
            echo '<p>Uso de medicação: ' . ($ficha['uso_medicacao']) . '</p>';
            echo '<p>Horário de medicação: ' . date('H:i', strtotime($ficha['horario_medicacao'])) . '</p>';
            echo '<p>Qual medicação: ' . $ficha['qual_medicacao'] . '</p>';
            echo '<p>Alergia: ' . ($ficha['alergico']) . '</p>';
            echo '<p>Qual alergia: ' . $ficha['qual_alergia'] . '</p>';
            echo '<p>Ingeriu alimentos: ' . ($ficha['ingeriu_alimentos']) . '</p>';
            echo '<p>Ingeriu há quantas horas: ' . date('H:i', strtotime($ficha['ingeriu_horas'])) . '</p>';

// Anamnese Gestacional
            echo '<hr>';
            echo '<h3>Anamnese Gestacional</h3>'; 

            echo '<p>Tempo de gestação: ' . $ficha['tempoGestacao'] . '</p>';
            echo '<p>Fez pré-natal: ' . ($ficha['fezPreNatal']) . '</p>';
            echo '<p>Nome do médico: ' . $ficha['nomeMedico'] . '</p>';
            echo '<p>Complicações: ' . ($ficha['complicacoes']) . '</p>';
            echo '<p>Primeiro filho: ' . ($ficha['primeiroFilho']) . '</p>';
            echo '<p>Número de filhos: ' . $ficha['numFilhos'] . '</p>';
            echo '<p>Início das contrações: ' . $ficha['inicioContracoes'] . '</p>';
            echo '<p>Duração das contrações: ' . $ficha['duracaoContracoes'] . '</p>';
            echo '<p>Intervalo entre contrações: ' . $ficha['intervaloContracoes'] . '</p>';
            echo '<p>Pressão no quadril: ' . ($ficha['pressaoQuadril']) . '</p>';
            echo '<p>Ruptura da bolsa: ' . ($ficha['rupturaBolsa']) . '</p>';
            echo '<p>Inspeção visual: ' . ($ficha['inspecaoVisual']) . '</p>';
            echo '<p>Parto realizado: ' . ($ficha['partoRealizado']) . '</p>';
            echo '<p>Hora do nascimento: ' . date('H:i', strtotime($ficha['horaNascimento'])) . '</p>';
            echo '<p>Sexo do bebê: ' . $ficha['bebeSexo'] . '</p>';
            echo '<p>Nome do bebê: ' . $ficha['bebeNome'] . '</p>';

// Avaliação da Cinemática
            echo '<hr>';
            echo '<h3>Avaliação da Cinemática</h3>'; 

            echo '<p>Distúrbio de comportamento: ' . ($ficha['disturbio_comportamento']) . '</p>';
            echo '<p>Encontrou capacete: ' . ($ficha['encontra_capacete']) . '</p>';
            echo '<p>Encontrou cinto: ' . ($ficha['encontrado_cinto']) . '</p>';
            echo '<p>Para-brisa avariado: ' . ($ficha['para_brisa_avariado']) . '</p>';
            echo '<p>Caminhando na cena: ' . ($ficha['caminhando_na_cena']) . '</p>';
            echo '<p>Painel avariado: ' . ($ficha['painel_avariado']) . '</p>';
            echo '<p>Volante torcido: ' . ($ficha['volante_torcido']) . '</p>';

// Detalhes Viagem
            echo '<hr>';
            echo '<h3>Detalhes Viagem</h3>'; 

            echo '<p>Número USB: ' . $ficha['NumeroUSB'] . '</p>';
            echo '<p>Código IR: ' . $ficha['CodigoIR'] . '</p>';
            echo '<p>Número de Ocorrência: ' . $ficha['NumeroOcorrencia'] . '</p>';
            echo '<p>Código PS: ' . $ficha['CodigoPS'] . '</p>';
            echo '<p>Desp: ' . $ficha['Desp'] . '</p>';
            echo '<p>HCH: ' . $ficha['HCH'] . '</p>';
            echo '<p>KM Final: ' . $ficha['KMFinal'] . '</p>';
            echo '<p>Código SIASUS: ' . $ficha['CodigoSIASUS'] . '</p>';
        }
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
