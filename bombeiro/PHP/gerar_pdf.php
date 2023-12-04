<?php

// Incluir conexão com BD
include_once 'dbconnect.php';

// Incluir a biblioteca TCPDF
require_once('../TCPDF-main/tcpdf.php');

// /////////////////////////////////////////
// // Fichas
// /////////////////////////////////////////

// $query_ficha = "SELECT 
//         id_fichas,	
//         data_ficha,
//         nome_paciente,
//         idAnamnese_Emergencia_Medica,
//     	idAnamnese_Gestacional,
//     	idAvaliacao_Cinematica,
//       	idFicha_Avaliacao_Glasgow,
//      	idFicha_Localizacao_dos_Traumas,
//         idMateriais_Utilizados_Deixados,
//         idMateriais_Utilizados_Descartavel,
//         idObjetos_Recolhidos,
//         idObservacoes_Importantes,
//         idFicha_Paciente,
//         idProblemas_Encontrados,
//         idProcedimentos_Efetuados,
//         idSinais_e_Sintomas	,
//         idFicha_Sinais_Vitais,
//         idTermoRecusa,
//         idTipo_de_Ocorrencia,	
//         idFicha_Decisao_Transporte,	
//         idDetalhes_Viagem,	
//         idFicha_Forma_de_Conducao,	
//         idFicha_Transporte_Vitima_Era,	
//         id_usuario	

//     FROM fichas 
//     ORDER BY id_fichas DESC 
//     LIMIT 1";

// // Prepara a QUERY
// $result_ficha = $conn->prepare($query_ficha);
// // Executar a QUERY
// $result_ficha->execute();

// // Adicionar conteúdo ao PDF
// $html = "<h1>Relatório</h1>";

// // Ler os registros retornados do BD (ficha_tipo_de_ocorrencia)
// $result_ficha->bind_result(
//     $id_fichas,
//     $data_ficha,
//     $nome_paciente,
//     $idAnamnese_Emergencia_Medica,
//     $idAnamnese_Gestacional,
//     $idAvaliacao_Cinematica,
//     $idFicha_Avaliacao_Glasgow,
//     $idFicha_Localizacao_dos_Traumas,
//     $idMateriais_Utilizados_Deixados,
//     $idMateriais_Utilizados_Descartavel,
//     $idObjetos_Recolhidos,
//     $idObservacoes_Importantes,
//     $idFicha_Paciente,
//     $idProblemas_Encontrados,
//     $idProcedimentos_Efetuados,
//     $idSinais_e_Sintomas,
//     $idFicha_Sinais_Vitais,
//     $idTermoRecusa,
//     $idTipo_de_Ocorrencia,
//     $idFicha_Decisao_Transporte,
//     $idDetalhes_Viagem,
//     $idFicha_Forma_de_Conducao,
//     $idFicha_Transporte_Vitima_Era,
//     $id_usuario
// );


// if ($result_ficha->fetch()) {
//     $html .= "<p>data_ficha: {$data_ficha}</p>";
//     $html .= "<p>nome_paciente: {$nome_paciente}</p>";
//     $html .= "<p>idAnamnese_Emergencia_Medica: {$idAnamnese_Emergencia_Medica}</p>";
//     $html .= "<p>idAnamnese_Gestacional: {$idAnamnese_Gestacional}</p>";
//     $html .= "<p>idAvaliacao_Cinematica: {$idAvaliacao_Cinematica}</p>";
//     $html .= "<p>idFicha_Avaliacao_Glasgow: {$idFicha_Avaliacao_Glasgow}</p>";
//     $html .= "<p>idFicha_Localizacao_dos_Traumas: {$idFicha_Localizacao_dos_Traumas}</p>";
//     $html .= "<p>idMateriais_Utilizados_Deixados: {$idMateriais_Utilizados_Deixados}</p>";
//     $html .= "<p>idMateriais_Utilizados_Descartavel: {$idMateriais_Utilizados_Descartavel}</p>";
//     $html .= "<p>idObjetos_Recolhidos: {$idObjetos_Recolhidos}</p>";
//     $html .= "<p>idObservacoes_Importantes: {$idObservacoes_Importantes}</p>";
//     $html .= "<p>idFicha_Paciente: {$idFicha_Paciente}</p>";
//     $html .= "<p>idProblemas_Encontrados: {$idProblemas_Encontrados}</p>";
//     $html .= "<p>idProcedimentos_Efetuados: {$idProcedimentos_Efetuados}</p>";
//     $html .= "<p>idSinais_e_Sintomas: {$idSinais_e_Sintomas}</p>";
//     $html .= "<p>idFicha_Sinais_Vitais: {$idFicha_Sinais_Vitais}</p>";
//     $html .= "<p>idTermoRecusa: {$idTermoRecusa}</p>";
//     $html .= "<p>idTipo_de_Ocorrencia: {$idTipo_de_Ocorrencia}</p>";
//     $html .= "<p>idFicha_Decisao_Transporte: {$idFicha_Decisao_Transporte}</p>";
//     $html .= "<p>idDetalhes_Viagem: {$idDetalhes_Viagem}</p>";
//     $html .= "<p>idFicha_Forma_de_Conducao: {$idFicha_Forma_de_Conducao}</p>";
//     $html .= "<p>idFicha_Transporte_Vitima_Era: {$idFicha_Transporte_Vitima_Era}</p>";
//     $html .= "<p>id_usuario: {$id_usuario}</p>";
//     // Adicione outros campos conforme necessário
// }
// $result_ficha->close();

/////////////////////////////////////////
// query_paciente
/////////////////////////////////////////

// QUERY para recuperar os registros do banco de dados (ficha_paciente)
$query_paciente = "SELECT 
    idFicha_Paciente,
    data_ocorrencia,
    genero_paciente,
    nome_hospital,
    nome_paciente,
    idade_paciente,
    CPF_paciente,
    telefone_paciente,	
    nome_acompanhante,	
    idade_acompanhante,	
    local_da_ocorrencia
    FROM ficha_paciente 
    ORDER BY idFicha_Paciente DESC 
    LIMIT 1";

// Prepara a QUERY
$result_paciente = $conn->prepare($query_paciente);
// Executar a QUERY
$result_paciente->execute();


// Configurar o PDF
$pdf = new TCPDF();
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage();

// Adicionar conteúdo ao PDF
$html = "<h1>Relatório</h1>";

// Ler os registros retornados do BD (ficha_paciente)
$result_paciente->bind_result(
    $idFicha_Paciente,
    $data_ocorrencia,
    $genero_paciente,
    $nome_hospital,
    $nome_paciente,
    $idade_paciente,
    $CPF_paciente,
    $telefone_paciente,
    $nome_acompanhante,
    $idade_acompanhante,
    $local_da_ocorrencia
);

while ($result_paciente->fetch()) {
    $html .= "<p>ID: {$idFicha_Paciente}</p>";
    $html .= "<p>Data: {$data_ocorrencia}</p>";
    $html .= "<p>Gênero: {$genero_paciente}</p>";
    $html .= "<p>Nome Hospital: {$nome_hospital}</p>";
    $html .= "<p>Nome: {$nome_paciente}</p>";
    $html .= "<p>Idade Paciente: {$idade_paciente}</p>";
    $html .= "<p>CPF Paciente: {$CPF_paciente}</p>";
    $html .= "<p>Telefone Paciente: {$telefone_paciente}</p>";
    $html .= "<p>Acompanhante: {$nome_acompanhante}</p>";
    $html .= "<p>Idade Acompanhante: {$idade_acompanhante}</p>";
    $html .= "<p>Local da ocorrencia: {$local_da_ocorrencia}</p>";
}

/////////////////////////////////////////
// query_ocorrenciaTipo
/////////////////////////////////////////

// QUERY para recuperar os registros do banco de dados (ficha_tipo_de_ocorrencia)
$query_ocorrenciaTipo = "SELECT 
    idTipo_de_Ocorrencia,	
    Causado_Por_Animais,
    Com_Meio_De_Transporte,
    Desmoronamento_Deslizamento,
    Emergencia_Medica,
    Queda_De_Altura_2M,
    Tentativa_De_Suicidio,
    Queda_Propria_Altura,
    Afogamento,
    Agressao,
    Atropelamento,
    Choque_Eletrico,
    Desabamento,
    Domestico,
    Esportivo,
    Intoxicacao,
    Queda_Bicicleta,
    Queda_Moto,
    Queda_Nivel_2M,
    Trabalho,
    Transferencia,
    Outro_Campo
    FROM ficha_tipo_de_ocorrencia 
    ORDER BY idTipo_de_Ocorrencia DESC 
    LIMIT 1";

// Prepara a QUERY
$result_ocorrenciaTipo = $conn->prepare($query_ocorrenciaTipo);
// Executar a QUERY
$result_ocorrenciaTipo->execute();

// Ler os registros retornados do BD (ficha_tipo_de_ocorrencia)
$result_ocorrenciaTipo->bind_result(
    $idTipo_de_Ocorrencia,
    $Causado_Por_Animais,
    $Com_Meio_De_Transporte,
    $Desmoronamento_Deslizamento,
    $Emergencia_Medica,
    $Queda_De_Altura_2M,
    $Tentativa_De_Suicidio,
    $Queda_Propria_Altura,
    $Afogamento,
    $Agressao,
    $Atropelamento,
    $Choque_Eletrico,
    $Desabamento,
    $Domestico,
    $Esportivo,
    $Intoxicacao,
    $Queda_Bicicleta,
    $Queda_Moto,
    $Queda_Nivel_2M,
    $Trabalho,
    $Transferencia,
    $Outro_Campo
);

$html .= "<h2>Detalhes da Ocorrência</h2>";

while ($result_ocorrenciaTipo->fetch()) {
    $nonNullFields = [];
    if ($idTipo_de_Ocorrencia !== null) {
        $nonNullFields[] = "ID Tipo de Ocorrência: {$idTipo_de_Ocorrencia}";
    }
    if ($Causado_Por_Animais !== null) {
        $nonNullFields[] = "Tipo de Causado_Por_Animais: {$Causado_Por_Animais}";
    }
    if ($Com_Meio_De_Transporte !== null) {
        $nonNullFields[] = "Com_Meio_De_Transporte: {$Com_Meio_De_Transporte}";
    }
    if ($Desmoronamento_Deslizamento !== null) {
        $nonNullFields[] = "Desmoronamento_Deslizamento: {$Desmoronamento_Deslizamento}";
    }
    if ($Emergencia_Medica !== null) {
        $nonNullFields[] = "Emergencia_Medica: {$Emergencia_Medica}";
    }
    if ($Queda_De_Altura_2M !== null) {
        $nonNullFields[] = "Queda_De_Altura_2M: {$Queda_De_Altura_2M}";
    }
    if ($Tentativa_De_Suicidio !== null) {
        $nonNullFields[] = "Tentativa_De_Suicidio: {$Tentativa_De_Suicidio}";
    }
    if ($Queda_Propria_Altura !== null) {
        $nonNullFields[] = "Queda_Propria_Altura: {$Queda_Propria_Altura}";
    }
    if ($Afogamento !== null) {
        $nonNullFields[] = "Afogamento: {$Afogamento}";
    }
    if ($Agressao !== null) {
        $nonNullFields[] = "Agressao: {$Agressao}";
    }
    if ($Atropelamento !== null) {
        $nonNullFields[] = "Atropelamento: {$Atropelamento}";
    }
    if ($Atropelamento !== null) {
        $nonNullFields[] = "Atropelamento: {$Atropelamento}";
    }
    if ($Choque_Eletrico !== null) {
        $nonNullFields[] = "Choque_Eletrico: {$Choque_Eletrico}";
    }
    if ($Desabamento !== null) {
        $nonNullFields[] = "Desabamento: {$Desabamento}";
    }
    if ($Domestico !== null) {
        $nonNullFields[] = "Domestico: {$Domestico}";
    }
    if ($Esportivo !== null) {
        $nonNullFields[] = "Esportivo: {$Esportivo}";
    }
    if ($Intoxicacao !== null) {
        $nonNullFields[] = "Intoxicacao: {$Intoxicacao}";
    }
    if ($Queda_Bicicleta !== null) {
        $nonNullFields[] = "Queda_Bicicleta: {$Queda_Bicicleta}";
    }
    if ($Queda_Moto !== null) {
        $nonNullFields[] = "Queda_Moto: {$Queda_Moto}";
    }
    if ($Queda_Nivel_2M !== null) {
        $nonNullFields[] = "Queda_Nivel_2M: {$Queda_Nivel_2M}";
    }
    if ($Trabalho !== null) {
        $nonNullFields[] = "Trabalho: {$Trabalho}";
    }
    if ($Transferencia !== null) {
        $nonNullFields[] = "Transferencia: {$Transferencia}";
    }
    if ($Outro_Campo !== null) {
        $nonNullFields[] = "Outro_Campo: {$Outro_Campo}";
    }
    $html .= implode('<br>', $nonNullFields);
}

$result_ocorrenciaTipo->close();

/////////////////////////////////////////
// query_glasgow
/////////////////////////////////////////

$query_glasgow = "SELECT 
idFicha_Avaliacao_Glasgow,
Abertura_Ocular,    
Resposta_Verbal,    
Resposta_Motora
FROM ficha_avaliacao_glasgow 
ORDER BY idFicha_Avaliacao_Glasgow DESC 
LIMIT 1";

// Prepara a QUERY
$result_glasgow = $conn->prepare($query_glasgow);
// Executar a QUERY
$result_glasgow->execute();

// Ler os registros retornados do BD (ficha_avaliacao_glasgow)
$result_glasgow->bind_result(
    $idFicha_Avaliacao_Glasgow,
    $Abertura_Ocular,
    $Resposta_Verbal,
    $Resposta_Motora

);

$html .= "<h2>Detalhes da Avaliação Glasgow</h2>";

// Utilizar um loop para obter os resultados (se houver)
while ($result_glasgow->fetch()) {
    $html .= "<p>ID Avaliação Glasgow: {$idFicha_Avaliacao_Glasgow}</p>";
    $html .= "<p>Abertura Ocular: {$Abertura_Ocular}</p>";
    $html .= "<p>Resposta Verbal: {$Resposta_Verbal}</p>";
    $html .= "<p>Resposta Motora: {$Resposta_Motora}</p>";
    // Adicione outros campos conforme necessário
}

$result_glasgow->close();

/////////////////////////////////////////
// sinaisVitais
/////////////////////////////////////////

$query_sinaisVitais = "SELECT 
idFicha_Sinais_Vitais,	
pressao_arterial0,	
pressao_arterial1,	
pulso,	
respiracao	,
saturacao,	
temperatura,	
perfusao,	
HGT	
FROM ficha_sinais_vitais 
ORDER BY idFicha_Sinais_Vitais DESC 
LIMIT 1";

// Prepara a QUERY
$result_sinaisVitais = $conn->prepare($query_sinaisVitais);
// Executar a QUERY
$result_sinaisVitais->execute();

// Ler os registros retornados do BD (ficha_avaliacao_glasgow)
$result_sinaisVitais->bind_result(
    $idFicha_Sinais_Vitais,
    $pressao_arterial0,
    $pressao_arterial1,
    $pulso,
    $respiracao,
    $saturacao,
    $temperatura,
    $perfusao,
    $HGT

);

$html .= "<h2>result_sinaisVitais</h2>";

// Utilizar um loop para obter os resultados (se houver)
while ($result_sinaisVitais->fetch()) {
    $html .= "<p>idFicha_Sinais_Vitais: {$idFicha_Sinais_Vitais}</p>";
    $html .= "<p>pressao_arterial0: {$pressao_arterial0}</p>";
    $html .= "<p>pressao_arterial1: {$pressao_arterial1}</p>";
    $html .= "<p>pulso: {$pulso}</p>";
    $html .= "<p>respiracao: {$respiracao}</p>";
    $html .= "<p>saturacao: {$saturacao}</p>";
    $html .= "<p>temperatura: {$temperatura}</p>";
    $html .= "<p>perfusao: {$perfusao}</p>";
    $html .= "<p>HGT: {$HGT}</p>";

    // Adicione outros campos conforme necessário
}

$result_sinaisVitais->close();

/////////////////////////////////////////
// sinaisVitais
/////////////////////////////////////////

$query_problemasSus = "SELECT 
idProblemas_Encontrados,	
psiquiatrico,	
obstetrico,	
respiratorio,	
diabetes,	
transporte,	
outros
FROM ficha_problemas_encontrados 
ORDER BY idProblemas_Encontrados DESC 
LIMIT 1";

// Prepara a QUERY
$result_problemasSus = $conn->prepare($query_problemasSus);
// Executar a QUERY
$result_problemasSus->execute();

// Ler os registros retornados do BD (ficha_avaliacao_glasgow)
$result_problemasSus->bind_result(
    $idProblemas_Encontrados,
    $psiquiatrico,
    $obstetrico,
    $respiratorio,
    $diabetes,
    $transporte,
    $outros
);

$html .= "<h2>result_problemasSus</h2>";

// Utilizar um loop para obter os resultados (se houver)
while ($result_problemasSus->fetch()) {
    $html .= "<p>idProblemas_Encontrados: {$idProblemas_Encontrados}</p>";
    $html .= "<p>psiquiatrico: {$psiquiatrico}</p>";
    $html .= "<p>obstetrico: {$obstetrico}</p>";
    $html .= "<p>respiratorio: {$respiratorio}</p>";
    $html .= "<p>diabetes: {$diabetes}</p>";
    $html .= "<p>outros: {$outros}</p>";

    // Adicione outros campos conforme necessário
}

$result_problemasSus->close();

/////////////////////////////////////////
// sinaisVitais
/////////////////////////////////////////

$query_problemasSus = "SELECT 
idFicha_Localizacao_dos_Traumas	,
local1	,
lado1	,
face1	,
tipo1	,
local2	,
lado2	,
face2	,
tipo2	,
local3	,
lado3	,
face3	,
tipo3	,
local4	,
lado4	,
face4	,
tipo4	,
cabeca	,
pescoco	,
t_ant	,
t_pos	,
genit	,
MID	,
MIE	,
MSD	,
MSE
FROM ficha_localizacao_dos_traumas 
ORDER BY idFicha_Localizacao_dos_Traumas DESC 
LIMIT 1";

// Prepara a QUERY
$result_problemasSus = $conn->prepare($query_problemasSus);
// Executar a QUERY
$result_problemasSus->execute();

// Ler os registros retornados do BD (ficha_avaliacao_glasgow)
$result_problemasSus->bind_result(
    $idFicha_Localizacao_dos_Traumas,
    $local1,
    $lado1,
    $face1,
    $tipo1,
    $local2,
    $lado2,
    $face2,
    $tipo2,
    $local3,
    $lado3,
    $face3,
    $tipo3,
    $local4,
    $lado4,
    $face4,
    $tipo4,
    $cabeca,
    $pescoco,
    $t_ant,
    $t_pos,
    $genit,
    $MID,
    $MIE,
    $MSD,
    $MSE
);

$html .= "<h2>Problemas Suspeitos</h2>";

// Utilizar um loop para obter os resultados (se houver)
while ($result_problemasSus->fetch()) {
    $html .= "<p>idFicha_Localizacao_dos_Traumas: {$idFicha_Localizacao_dos_Traumas}</p>";
    $html .= "<p>local1: {$local1}</p>";
    $html .= "<p>lado1: {$lado1}</p>";
    $html .= "<p>face1: {$face1}</p>";
    $html .= "<p>tipo1: {$tipo1}</p>";
    $html .= "<p>local2: {$local2}</p>";
    $html .= "<p>lado2: {$lado2}</p>";
    $html .= "<p>face2: {$face2}</p>";
    $html .= "<p>tipo2: {$tipo2}</p>";
    $html .= "<p>local3: {$local3}</p>";
    $html .= "<p>lado3: {$lado3}</p>";
    $html .= "<p>face3: {$face3}</p>";
    $html .= "<p>tipo3: {$tipo3}</p>";
    $html .= "<p>local4: {$local4}</p>";
    $html .= "<p>lado4: {$lado4}</p>";
    $html .= "<p>face4: {$face4}</p>";
    $html .= "<p>tipo4: {$tipo4}</p>";
    $html .= "<p>cabeca: {$cabeca}</p>";
    $html .= "<p>pescoco: {$pescoco}</p>";
    $html .= "<p>t_ant: {$t_ant}</p>";
    $html .= "<p>t_pos: {$t_pos}</p>";
    $html .= "<p>genit: {$genit}</p>";
    $html .= "<p>MID: {$MID}</p>";
    $html .= "<p>MIE: {$MIE}</p>";
    $html .= "<p>MSD: {$MSD}</p>";
    $html .= "<p>MSE: {$MSE}</p>";

    // Adicione outros campos conforme necessário
}

$result_problemasSus->close();

/////////////////////////////////////////
// objRec
/////////////////////////////////////////

$query_objRec = "SELECT 
idObjetos_Recolhidos,	
objetos_recolhidos	
FROM ficha_objetos_recolhidos 
ORDER BY idObjetos_Recolhidos DESC 
LIMIT 1";

// Prepara a QUERY
$result_objRec = $conn->prepare($query_objRec);
// Executar a QUERY
$result_objRec->execute();

// Ler os registros retornados do BD (ficha_avaliacao_glasgow)
$result_objRec->bind_result(
    $idObjetos_Recolhidos,
    $objetos_recolhidos
);

$html .= "<h2>objetos Recolhidos</h2>";

// Utilizar um loop para obter os resultados (se houver)
while ($result_objRec->fetch()) {
    $html .= "<p>idObjetos_Recolhidos: {$idObjetos_Recolhidos}</p>";
    $html .= "<p>objetos_recolhidos: {$objetos_recolhidos}</p>";

    // Adicione outros campos conforme necessário
}

$result_objRec->close();

/////////////////////////////////////////
// objRec
/////////////////////////////////////////

$query_sinaiSintomas = "SELECT 
idSinais_e_Sintomas	,
abdomen_sensivel_rigido	,
afundamento_cranio,	
agitacao,	
amnesia	,
angna_peito	,
apneia	,
bradicardia	,
bradipneia	,
bronco_aspiracao,	
cefaleia,	
cianose_labios	,
cianose_extremidade	,
convulsao,	
decorticacao,	
deformidade	,
descerebracao	,
desmaio	,
desvio_traqueia	,
despineia,	
dor_local	,
edema_generalizado	,
edema_localizado	,
enfisema_subcutaneo	,
extase_jugular	,
face_palida	,
hemorragia_interna	,
hemorragia_externa,	
hipertensao	,
hipotensao	,
nauseas_vomitos	,
nasoragia	,
obito	,
otorreia,	
otorragia	,
ovace	,
parada_cardiaca	,
parada_respiratoria	,
priaprismo	,
prurido_pele	,
pupilas_anisocoria	,
pupilas_isocoria	,
pupilas_midriase	,
pupilas_miose	,
pupilas_reagente	,
pupilas_nao_reagente,	
sede	,
sinal_battle	,
sinal_guaxinim	,
sudorese	,
taquipneia	,
taquicardia	,
tontura	,
observacoes	
FROM ficha_sinais_e_sintomas 
ORDER BY idSinais_e_Sintomas DESC 
LIMIT 1 ";

// Prepara a QUERY
$result_sinaiSintomas = $conn->prepare($query_sinaiSintomas);
// Executar a QUERY
$result_sinaiSintomas->execute();

// Ler os registros retornados do BD (ficha_avaliacao_glasgow)
$result_sinaiSintomas->bind_result(
    $idSinais_e_Sintomas,
    $abdomen_sensivel_rigido,
    $afundamento_cranio,
    $agitacao,
    $amnesia,
    $angna_peito,
    $apneia,
    $bradicardia,
    $bradipneia,
    $bronco_aspiracao,
    $cefaleia,
    $cianose_labios,
    $cianose_extremidade,
    $convulsao,
    $decorticacao,
    $deformidade,
    $descerebracao,
    $desmaio,
    $desvio_traqueia,
    $despineia,
    $dor_local,
    $edema_generalizado,
    $edema_localizado,
    $enfisema_subcutaneo,
    $extase_jugular,
    $face_palida,
    $hemorragia_interna,
    $hemorragia_externa,
    $hipertensao,
    $hipotensao,
    $nauseas_vomitos,
    $nasoragia,
    $obito,
    $otorreia,
    $otorragia,
    $ovace,
    $parada_cardiaca,
    $parada_respiratoria,
    $priaprismo,
    $prurido_pele,
    $pupilas_anisocoria,
    $pupilas_isocoria,
    $pupilas_midriase,
    $pupilas_miose,
    $pupilas_reagente,
    $pupilas_nao_reagente,
    $sede,
    $sinal_battle,
    $sinal_guaxinim,
    $sudorese,
    $taquipneia,
    $taquicardia,
    $tontura,
    $observacoes
);

$html .= "<h2>Sinais e Sintomas</h2>";

// Utilizar um loop para obter os resultados (se houver)
while ($result_sinaiSintomas->fetch()) {
    $nonZeroFields = [];
    $html .= "<p>idSinais_e_Sintomas: {$idSinais_e_Sintomas}</p>";
    if ($abdomen_sensivel_rigido !== 0) {
        $nonZeroFields[] = "abdomen_sensivel_rigido: {$abdomen_sensivel_rigido}";
    }
    if ($afundamento_cranio !== 0) {
        $nonZeroFields[] = "afundamento_cranio: {$afundamento_cranio}";
    }
    if ($agitacao !== 0) {
        $nonZeroFields[] = "agitacao: {$agitacao}";
    }
    if ($amnesia !== 0) {
        $nonZeroFields[] = "amnesia: {$amnesia}";
    }
    if ($angna_peito !== 0) {
        $nonZeroFields[] = "angna_peito: {$angna_peito}";
    }
    if ($abdomen_sensivel_rigido !== 0) {
        $nonZeroFields[] = "apneia: {$apneia}";
    }
    if ($bradicardia !== 0) {
        $nonZeroFields[] = "bradicardia: {$bradicardia}";
    }
    if ($bradipneia !== 0) {
        $nonZeroFields[] = "bradipneia: {$bradipneia}";
    }
    if ($bronco_aspiracao !== 0) {
        $nonZeroFields[] = "bronco_aspiracao: {$bronco_aspiracao}";
    }
    if ($cefaleia !== 0) {
        $nonZeroFields[] = "cefaleia: {$cefaleia}";
    }
    if ($cianose_labios !== 0) {
        $nonZeroFields[] = "cianose_labios: {$cianose_labios}";
    }
    if ($convulsao !== 0) {
        $nonZeroFields[] = "convulsao: {$convulsao}";
    }
    if ($decorticacao !== 0) {
        $nonZeroFields[] = "decorticacao: {$decorticacao}";
    }
    if ($decorticacao !== 0) {
        $nonZeroFields[] = "decorticacao: {$decorticacao}";
    }
    if ($deformidade !== 0) {
        $nonZeroFields[] = "deformidade: {$deformidade}";
    }
    if ($descerebracao !== 0) {
        $nonZeroFields[] = "descerebracao: {$descerebracao}";
    }
    if ($desmaio !== 0) {
        $nonZeroFields[] = "desmaio: {$desmaio}";
    }
    if ($desvio_traqueia !== 0) {
        $nonZeroFields[] = "desvio_traqueia: {$desvio_traqueia}";
    }
    if ($despineia !== 0) {
        $nonZeroFields[] = "despineia: {$despineia}";
    }
    if ($dor_local !== 0) {
        $nonZeroFields[] = "dor_local: {$dor_local}";
    }
    if ($edema_generalizado !== 0) {
        $nonZeroFields[] = "edema_generalizado: {$edema_generalizado}";
    }
    if ($edema_localizado !== 0) {
        $nonZeroFields[] = "edema_localizado: {$edema_localizado}";
    }
    if ($enfisema_subcutaneo !== 0) {
        $nonZeroFields[] = "enfisema_subcutaneo: {$enfisema_subcutaneo}";
    }
    if ($extase_jugular !== 0) {
        $nonZeroFields[] = "extase_jugular: {$extase_jugular}";
    }
    if ($hemorragia_interna !== 0) {
        $nonZeroFields[] = "hemorragia_interna: {$hemorragia_interna}";
    }
    if ($hemorragia_externa !== 0) {
        $nonZeroFields[] = "hemorragia_externa: {$hemorragia_externa}";
    }
    if ($hipertensao !== 0) {
        $nonZeroFields[] = "hipertensao: {$hipertensao}";
    }
    if ($hipotensao !== 0) {
        $nonZeroFields[] = "hipotensao: {$hipotensao}";
    }
    if ($nauseas_vomitos !== 0) {
        $nonZeroFields[] = "nauseas_vomitos: {$nauseas_vomitos}";
    }
    if ($nasoragia !== 0) {
        $nonZeroFields[] = "nasoragia: {$nasoragia}";
    }
    if ($obito !== 0) {
        $nonZeroFields[] = "obito: {$obito}";
    }
    if ($otorreia !== 0) {
        $nonZeroFields[] = "otorreia: {$otorreia}";
    }
    if ($ovace !== 0) {
        $nonZeroFields[] = "ovace: {$ovace}";
    }
    if ($parada_cardiaca !== 0) {
        $nonZeroFields[] = "parada_cardiaca: {$parada_cardiaca}";
    }
    if ($parada_respiratoria !== 0) {
        $nonZeroFields[] = "parada_respiratoria: {$parada_respiratoria}";
    }
    if ($priaprismo !== 0) {
        $nonZeroFields[] = "priaprismo: {$priaprismo}";
    }
    if ($prurido_pele !== 0) {
        $nonZeroFields[] = "prurido_pele: {$prurido_pele}";
    }
    if ($pupilas_anisocoria !== 0) {
        $nonZeroFields[] = "pupilas_anisocoria: {$pupilas_anisocoria}";
    }
    if ($pupilas_isocoria !== 0) {
        $nonZeroFields[] = "pupilas_isocoria: {$pupilas_isocoria}";
    }
    if ($pupilas_midriase !== 0) {
        $nonZeroFields[] = "pupilas_midriase: {$pupilas_midriase}";
    }
    if ($pupilas_miose !== 0) {
        $nonZeroFields[] = "pupilas_miose: {$pupilas_miose}";
    }
    if ($pupilas_reagente !== 0) {
        $nonZeroFields[] = "pupilas_reagente: {$pupilas_reagente}";
    }
    if ($pupilas_nao_reagente !== 0) {
        $nonZeroFields[] = "pupilas_nao_reagente: {$pupilas_nao_reagente}";
    }
    if ($sede !== 0) {
        $nonZeroFields[] = "sede: {$sede}";
    }
    if ($sinal_battle !== 0) {
        $nonZeroFields[] = "sinal_battle: {$sinal_battle}";
    }
    if ($sinal_guaxinim !== 0) {
        $nonZeroFields[] = "sinal_guaxinim: {$sinal_guaxinim}";
    }
    if ($sudorese !== 0) {
        $nonZeroFields[] = "sudorese: {$sudorese}";
    }
    if ($taquipneia !== 0) {
        $nonZeroFields[] = "taquipneia: {$taquipneia}";
    }
    if ($taquicardia !== 0) {
        $nonZeroFields[] = "taquicardia: {$taquicardia}";
    }
    if ($tontura !== 0) {
        $nonZeroFields[] = "tontura: {$tontura}";
    }
    if ($observacoes !== 0) {
        $nonZeroFields[] = "observacoes: {$observacoes}";
    }
    $html .= implode('<br>', $nonZeroFields);
    // Adicione outros campos conforme necessário
}

$result_sinaiSintomas->close();

/////////////////////////////////////////
// Forma condução
/////////////////////////////////////////

$query_conducao = "SELECT 
idFicha_Forma_de_Conducao,	
forma_conducao		
FROM ficha_transporte_forma_de_conducao 
ORDER BY idFicha_Forma_de_Conducao DESC 
LIMIT 1";

// Prepara a QUERY
$result_conducao = $conn->prepare($query_conducao);
// Executar a QUERY
$result_conducao->execute();

// Ler os registros retornados do BD (ficha_avaliacao_glasgow)
$result_conducao->bind_result(
    $idFicha_Forma_de_Conducao,
    $forma_conducao
);

$html .= "<h2>Forma de condução</h2>";

// Utilizar um loop para obter os resultados (se houver)
while ($result_conducao->fetch()) {
    $html .= "<p>idFicha_Forma_de_Conducao: {$idFicha_Forma_de_Conducao}</p>";
    $html .= "<p>forma_conducao: {$forma_conducao}</p>";

    // Adicione outros campos conforme necessário
}

$result_conducao->close();

/////////////////////////////////////////
// vitima era
/////////////////////////////////////////

$query_vitima = "SELECT 
idFicha_Transporte_Vitima_Era,	
vitima_era			
FROM ficha_transporte_vitima_era 
ORDER BY idFicha_Transporte_Vitima_Era DESC 
LIMIT 1";

// Prepara a QUERY
$result_vitima = $conn->prepare($query_vitima);
// Executar a QUERY
$result_vitima->execute();

// Ler os registros retornados do BD (ficha_avaliacao_glasgow)
$result_vitima->bind_result(
    $idFicha_Transporte_Vitima_Era,
    $vitima_era
);

$html .= "<h2>Vitima era</h2>";

// Utilizar um loop para obter os resultados (se houver)
while ($result_vitima->fetch()) {
    $html .= "<p>idFicha_Transporte_Vitima_Era: {$idFicha_Transporte_Vitima_Era}</p>";
    $html .= "<p>vitima_era: {$vitima_era}</p>";

    // Adicione outros campos conforme necessário
}

$result_vitima->close();


/////////////////////////////////////////
// decisão transp
/////////////////////////////////////////

$query_decTrasp = "SELECT   
idFicha_Decisao_Transporte	,
decisao_transporte,	
M	,
S1	,
S2	,
S3	,
Demandante	,
Equipe		
FROM ficha_transporte_decisao_transporte 
ORDER BY idFicha_Decisao_Transporte DESC 
LIMIT 1";

// Prepara a QUERY
$result_decTrasp = $conn->prepare($query_decTrasp);
// Executar a QUERY
$result_decTrasp->execute();

// Ler os registros retornados do BD (ficha_avaliacao_glasgow)
$result_decTrasp->bind_result(
    $idFicha_Decisao_Transporte,
    $decisao_transporte,
    $M,
    $S1,
    $S2,
    $S3,
    $Demandante,
    $Equipe
);

$html .= "<h2>Decisão Transporte</h2>";

// Utilizar um loop para obter os resultados (se houver)
while ($result_decTrasp->fetch()) {
    $html .= "<p>idFicha_Decisao_Transporte: {$idFicha_Decisao_Transporte}</p>";
    $html .= "<p>decisao_transporte: {$decisao_transporte}</p>";
    $html .= "<p>M: {$M}</p>";
    $html .= "<p>S1: {$S1}</p>";
    $html .= "<p>S2: {$S2}</p>";
    $html .= "<p>S3: {$S3}</p>";
    $html .= "<p>Demandante: {$Demandante}</p>";
    $html .= "<p>Equipe: {$Equipe}</p>";

    // Adicione outros campos conforme necessário
}

$result_decTrasp->close();

/////////////////////////////////////////
// Procedimentos Efetuados
/////////////////////////////////////////

$query_ProcedEfe = "SELECT   
idProcedimentos_Efetuados	,
Aspiracao,	
Avalicao_Inicial,	
Avaliacao_Dirigida,	
Avaliacao_Continuada,	
Chave_de_Rautek	,
Canula_de_Guedel	,
Desobstrucao_de_VA	,
Emprego_do_DEA	,
Gerenciamento_de_Riscos	,
Limpeza_de_Ferimentos	,
Curativos	,
Compressivo	,
Encravamento,	
Ocular	,
Queimadura	,
Simples	,
tres_Pontas	,
Imobilacoes	,
Membro_INF_dir	,
Membro_INF_esq	,
Membro_SUP_dir	,
Membro_SUP_esq	,
Quadril	,
Cervical	,
Maca_Sobre_Rodas	,
Maca_Rigida	,
Ponte	,
Retirado_Capacete	,
RCP	,
Rolamento_90	,
Rolamento_180	,
Tomada_Decisao	,
Tratado_Choque	,
Uso_de_Canula	,
Uso_Colar	,
tamColar	,
Uso_KED	,
Uso_TTF	,
Ventilacao_Suporte	,
Oxigenioterapia	,
Oxigenioterapia_LPM	,
Reanimador	,
Reanimador_LPM	,
Meios_Auxiliares	,
Celesc	,
Def_Civil	,
IGP_PC	,
Policia	,
Policia_Value	,
Samu	,
Samu_Value	,
CIT	,
OutrosMeios
FROM ficha_procedimentos_efetuados 
ORDER BY idProcedimentos_Efetuados DESC 
LIMIT 1";

// Prepara a QUERY
$result_ProcedEfe = $conn->prepare($query_ProcedEfe);
// Executar a QUERY
$result_ProcedEfe->execute();

// Ler os registros retornados do BD (ficha_avaliacao_glasgow)
$result_ProcedEfe->bind_result(
    $idProcedimentos_Efetuados,
    $Aspiracao,
    $Avalicao_Inicial,
    $Avaliacao_Dirigida,
    $Avaliacao_Continuada,
    $Chave_de_Rautek,
    $Canula_de_Guedel,
    $Desobstrucao_de_VA,
    $Emprego_do_DEA,
    $Gerenciamento_de_Riscos,
    $Limpeza_de_Ferimentos,
    $Curativos,
    $Compressivo,
    $Encravamento,
    $Ocular,
    $Queimadura,
    $Simples,
    $tres_Pontas,
    $Imobilacoes,
    $Membro_INF_dir,
    $Membro_INF_esq,
    $Membro_SUP_dir,
    $Membro_SUP_esq,
    $Quadril,
    $Cervical,
    $Maca_Sobre_Rodas,
    $Maca_Rigida,
    $Ponte,
    $Retirado_Capacete,
    $RCP,
    $Rolamento_90,
    $Rolamento_180,
    $Tomada_Decisao,
    $Tratado_Choque,
    $Uso_de_Canula,
    $Uso_Colar,
    $tamColar,
    $Uso_KED,
    $Uso_TTF,
    $Ventilacao_Suporte,
    $Oxigenioterapia,
    $Oxigenioterapia_LPM,
    $Reanimador,
    $Reanimador_LPM,
    $Meios_Auxiliares,
    $Celesc,
    $Def_Civil,
    $IGP_PC,
    $Policia,
    $Policia_Value,
    $Samu,
    $Samu_Value,
    $CIT,
    $OutrosMeios
);

$html .= "<h2>Procedimentos Efetuados</h2>";

// Utilizar um loop para obter os resultados (se houver)
while ($result_ProcedEfe->fetch()) {
    $nonNullFields = [];
    $html .= "<p>idProcedimentos_Efetuados: {$idProcedimentos_Efetuados}</p>";
    if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }
    if ($Avalicao_Inicial !== null) {
        $nonNullFields[] = "Avalicao_Inicial: {$Avalicao_Inicial}";
    }
    if ($Avaliacao_Dirigida !== null) {
        $nonNullFields[] = "Avaliacao_Dirigida: {$Avaliacao_Dirigida}";
    }
    if ($Avaliacao_Continuada !== null) {
        $nonNullFields[] = "Avaliacao_Continuada: {$Avaliacao_Continuada}";
    }
    if ($Chave_de_Rautek !== null) {
        $nonNullFields[] = "Chave_de_Rautek: {$Chave_de_Rautek}";
    }
    if ($Canula_de_Guedel !== null) {
        $nonNullFields[] = "Canula_de_Guedel: {$Canula_de_Guedel}";
    }
    if ($Desobstrucao_de_VA !== null) {
        $nonNullFields[] = "Desobstrucao_de_VA: {$Desobstrucao_de_VA}";
    }
    if ($Emprego_do_DEA !== null) {
        $nonNullFields[] = "Emprego_do_DEA: {$Emprego_do_DEA}";
    }
    if ($Gerenciamento_de_Riscos !== null) {
        $nonNullFields[] = "Gerenciamento_de_Riscos: {$Gerenciamento_de_Riscos}";
    }
    if ($Limpeza_de_Ferimentos !== null) {
        $nonNullFields[] = "Limpeza_de_Ferimentos: {$Limpeza_de_Ferimentos}";
    }
    if ($Curativos !== null) {
        $nonNullFields[] = "Curativos: {$Curativos}";
    }
    if ($Compressivo !== null) {
        $nonNullFields[] = "Compressivo: {$Compressivo}";
    }
    if ($Encravamento !== null) {
        $nonNullFields[] = "Encravamento: {$Encravamento}";
    }
    if ($Ocular !== null) {
        $nonNullFields[] = "Ocular: {$Ocular}";
    }
    if ($Queimadura !== null) {
        $nonNullFields[] = "Queimadura: {$Queimadura}";
    }
    if ($Simples !== null) {
        $nonNullFields[] = "Simples: {$Simples}";
    }
    if ($tres_Pontas !== null) {
        $nonNullFields[] = "tres_Pontas: {$tres_Pontas}";
    }
    if ($Imobilacoes !== null) {
        $nonNullFields[] = "Imobilacoes: {$Imobilacoes}";
    }
    if ($Membro_INF_dir !== null) {
        $nonNullFields[] = "Membro_INF_dir: {$Membro_INF_dir}";
    }
    if ($Membro_INF_esq !== null) {
        $nonNullFields[] = "Membro_INF_esq: {$Membro_INF_esq}";
    }
    if ($Membro_SUP_dir !== null) {
        $nonNullFields[] = "Membro_SUP_dir: {$Membro_SUP_dir}";
    }
    if ($Aspiracao !== null) {
        $nonNullFields[] = "Membro_SUP_esq: {$Membro_SUP_esq}";
    }
    if ($Quadril !== null) {
        $nonNullFields[] = "Quadril: {$Quadril}";
    }
    if ($Cervical !== null) {
        $nonNullFields[] = "Cervical: {$Cervical}";
    }
    if ($Maca_Sobre_Rodas !== null) {
        $nonNullFields[] = "Maca_Sobre_Rodas: {$Maca_Sobre_Rodas}";
    }
    if ($Maca_Rigida !== null) {
        $nonNullFields[] = "Maca_Rigida: {$Maca_Rigida}";
    }
    if ($Ponte !== null) {
        $nonNullFields[] = "Ponte: {$Ponte}";
    }
    if ($Retirado_Capacete !== null) {
        $nonNullFields[] = "Retirado_Capacete: {$Retirado_Capacete}";
    }
    if ($RCP !== null) {
        $nonNullFields[] = "RCP: {$RCP}";
    }
    if ($Rolamento_90 !== null) {
        $nonNullFields[] = "Rolamento_90: {$Rolamento_90}";
    }
    if ($Rolamento_180 !== null) {
        $nonNullFields[] = "Rolamento_180: {$Rolamento_180}";
    }
    if ($Tomada_Decisao !== null) {
        $nonNullFields[] = "Tomada_Decisao: {$Tomada_Decisao}";
    }
    if ($Tratado_Choque !== null) {
        $nonNullFields[] = "Tratado_Choque: {$Tratado_Choque}";
    }
    if ($Uso_de_Canula !== null) {
        $nonNullFields[] = "Uso_de_Canula: {$Uso_de_Canula}";
    }
    if ($Uso_Colar !== null) {
        $nonNullFields[] = "Uso_Colar: {$Uso_Colar}";
    }
    if ($tamColar !== null) {
        $nonNullFields[] = "tamColar: {$tamColar}";
    }
    if ($Uso_KED !== null) {
        $nonNullFields[] = "Uso_KED: {$Uso_KED}";
    }
    if ($Uso_TTF !== null) {
        $nonNullFields[] = "Uso_TTF: {$Uso_TTF}";
    }
    if ($Ventilacao_Suporte !== null) {
        $nonNullFields[] = "Ventilacao_Suporte: {$Ventilacao_Suporte}";
    }
    if ($Oxigenioterapia !== null) {
        $nonNullFields[] = "Oxigenioterapia: {$Oxigenioterapia}";
    }
    if ($Oxigenioterapia_LPM !== null) {
        $nonNullFields[] = "Oxigenioterapia_LPM: {$Oxigenioterapia_LPM}";
    }
    if ($Reanimador !== null) {
        $nonNullFields[] = "Reanimador: {$Reanimador}";
    }
    if ($Reanimador_LPM !== null) {
        $nonNullFields[] = "Reanimador_LPM: {$Reanimador_LPM}";
    }
    if ($Meios_Auxiliares !== null) {
        $nonNullFields[] = "Meios_Auxiliares: {$Meios_Auxiliares}";
    }
    if ($Celesc !== null) {
        $nonNullFields[] = "Celesc: {$Celesc}";
    }
    if ($Def_Civil !== null) {
        $nonNullFields[] = "Def_Civil: {$Def_Civil}";
    }
    if ($IGP_PC !== null) {
        $nonNullFields[] = "IGP_PC: {$IGP_PC}";
    }
    if ($Policia !== null) {
        $nonNullFields[] = "Policia: {$Policia}";
    }
    if ($Policia_Value !== null) {
        $nonNullFields[] = "Policia_Value: {$Policia_Value}";
    }
    if ($Samu !== null) {
        $nonNullFields[] = "Samu: {$Samu}";
    }
    if ($Samu_Value !== null) {
        $nonNullFields[] = "Samu_Value: {$Samu_Value}";
    }
    if ($CIT !== null) {
        $nonNullFields[] = "CIT: {$CIT}";
    }
    if ($OutrosMeios !== null) {
        $nonNullFields[] = "OutrosMeios: {$OutrosMeios}";
    }
    $html .= implode('<br>', $nonNullFields);
}

$result_ProcedEfe->close();


// Adicionar HTML ao PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Saída do PDF para o navegador
$pdf->Output('relatorio.pdf', 'D');