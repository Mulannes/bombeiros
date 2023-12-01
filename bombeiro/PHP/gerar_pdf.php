<?php

// Incluir conexão com BD
include_once 'dbconnect.php';

// Incluir a biblioteca TCPDF
require_once('../TCPDF-main/tcpdf.php');

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

if ($result_ocorrenciaTipo->fetch()) {
    $html .= "<p>ID Tipo de Ocorrência: {$idTipo_de_Ocorrencia}</p>";
    $html .= "<p>Causado Por Animais: {$Causado_Por_Animais}</p>";
    $html .= "<p>Com Meio De Transporte: {$Com_Meio_De_Transporte}</p>";
    $html .= "<p>Desmoronamento/Deslizamento: {$Desmoronamento_Deslizamento}</p>";
    $html .= "<p>Emergencia_Medica: {$Emergencia_Medica}</p>";
    $html .= "<p>Queda_De_Altura_2M: {$Queda_De_Altura_2M}</p>";
    $html .= "<p>Tentativa_De_Suicidio: {$Tentativa_De_Suicidio}</p>";
    $html .= "<p>Queda_Propria_Altura: {$Queda_Propria_Altura}</p>";
    $html .= "<p>Afogamento: {$Afogamento}</p>";
    $html .= "<p>Agressao: {$Agressao}</p>";
    $html .= "<p>Atropelamento: {$Atropelamento}</p>";
    $html .= "<p>Choque_Eletrico: {$Choque_Eletrico}</p>";
    $html .= "<p>Desabamento: {$Desabamento}</p>";
    $html .= "<p>Domestico: {$Domestico}</p>";
    $html .= "<p>Esportivo: {$Esportivo}</p>";
    $html .= "<p>Intoxicacao: {$Intoxicacao}</p>";
    $html .= "<p>Queda_Bicicleta: {$Queda_Bicicleta}</p>";
    $html .= "<p>Queda_Moto: {$Queda_Moto}</p>";
    $html .= "<p>Queda_Nivel_2M: {$Queda_Nivel_2M}</p>";
    $html .= "<p>Trabalho: {$Trabalho}</p>";
    $html .= "<p>Transferencia: {$Transferencia}</p>";
    $html .= "<p>Outro_Campo: {$Outro_Campo}</p>";
    // Adicione outros campos conforme necessário
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
3_Pontas	,
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
FROM ficha_transporte_decisao_transporte 
ORDER BY idFicha_Decisao_Transporte DESC 
LIMIT 1";

// Prepara a QUERY
$result_ProcedEfe = $conn->prepare($query_ProcedEfe);
// Executar a QUERY
$result_ProcedEfe->execute();

// Ler os registros retornados do BD (ficha_avaliacao_glasgow)
$result_ProcedEfe->bind_result(
    $idProcedimentos_Efetuados	,
    $Aspiracao,	
    $Avalicao_Inicial,	
    $Avaliacao_Dirigida,	
    $Avaliacao_Continuada,	
    $Chave_de_Rautek	,
    $Canula_de_Guedel	,
    $Desobstrucao_de_VA	,
    $Emprego_do_DEA	,
    $Gerenciamento_de_Riscos	,
    $Limpeza_de_Ferimentos	,
    $Curativos	,
    $Compressivo	,
    $Encravamento,	
    $Ocular	,
    $Queimadura	,
    $Simples	,
    $tres_Pontas	,
    $Imobilacoes	,
    $Membro_INF_dir	,
    $Membro_INF_esq	,
    $Membro_SUP_dir	,
    $Membro_SUP_esq	,
    $Quadril	,
    $Cervical	,
    $Maca_Sobre_Rodas	,
    $Maca_Rigida	,
    $Ponte	,
    $Retirado_Capacete	,
    $RCP	,
    $Rolamento_90	,
    $Rolamento_180	,
    $Tomada_Decisao	,
    $Tratado_Choque	,
    $Uso_de_Canula	,
    $Uso_Colar	,
    $tamColar	,
    $Uso_KED	,
    $Uso_TTF	,
    $Ventilacao_Suporte	,
    $Oxigenioterapia	,
    $Oxigenioterapia_LPM	,
    $Reanimador	,
    $Reanimador_LPM	,
    $Meios_Auxiliares	,
    $Celesc	,
    $Def_Civil	,
    $IGP_PC	,
    $Policia	,
    $Policia_Value	,
    $Samu	,
    $Samu_Value	,
    $CIT	,
    $OutrosMeios

$html .= "<h2>Vitima era</h2>";

// Utilizar um loop para obter os resultados (se houver)
while ($result_ProcedEfe->fetch()) {
    $nonNullFields = [];
    $html .= "<p>idProcedimentos_Efetuados: {$idProcedimentos_Efetuados}</p>";
    if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Avalicao_Inicial !== null) {
        $nonNullFields[] = "Avalicao_Inicial: {$Avalicao_Inicial}";
    }if ($Avaliacao_Dirigida !== null) {
        $nonNullFields[] = "Avaliacao_Dirigida: {$Avaliacao_Dirigida}";
    }if ($Avaliacao_Continuada !== null) {
        $nonNullFields[] = "Avaliacao_Continuada: {$Avaliacao_Continuada}";
    }if ($Chave_de_Rautek !== null) {
        $nonNullFields[] = "Chave_de_Rautek: {$Chave_de_Rautek}";
    }if ($Canula_de_Guedel !== null) {
        $nonNullFields[] = "Canula_de_Guedel: {$Canula_de_Guedel}";
    }if ($Desobstrucao_de_VA !== null) {
        $nonNullFields[] = "Desobstrucao_de_VA: {$Desobstrucao_de_VA}";
    }if ($Emprego_do_DEA !== null) {
        $nonNullFields[] = "Emprego_do_DEA: {$Emprego_do_DEA}";
    }if ($Gerenciamento_de_Riscos !== null) {
        $nonNullFields[] = "Gerenciamento_de_Riscos: {$Gerenciamento_de_Riscos}";
    }if ($Limpeza_de_Ferimentos !== null) {
        $nonNullFields[] = "Limpeza_de_Ferimentos: {$Limpeza_de_Ferimentos}";
    }if ($Curativos !== null) {
        $nonNullFields[] = "Curativos: {$Curativos}";
    }if ($Compressivo !== null) {
        $nonNullFields[] = "Compressivo: {$Compressivo}";
    }if ($Encravamento !== null) {
        $nonNullFields[] = "Encravamento: {$Encravamento}";
    }if ($Ocular !== null) {
        $nonNullFields[] = "Ocular: {$Ocular}";
    }if ($Queimadura !== null) {
        $nonNullFields[] = "Queimadura: {$Queimadura}";
    }if ($Simples !== null) {
        $nonNullFields[] = "Simples: {$Simples}";
    }if ($tres_Pontas !== null) {
        $nonNullFields[] = "tres_Pontas: {$tres_Pontas}";
    }if ($Imobilacoes !== null) {
        $nonNullFields[] = "Imobilacoes: {$Imobilacoes}";
    }if ($Membro_INF_dir !== null) {
        $nonNullFields[] = "Membro_INF_dir: {$Membro_INF_dir}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }if ($Aspiracao !== null) {
        $nonNullFields[] = "Aspiracao: {$Aspiracao}";
    }
    $html .= implode('<br>', $nonNullFields);
}

$result_ProcedEfe->close();


// Adicionar HTML ao PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Saída do PDF para o navegador
$pdf->Output('relatorio.pdf', 'D');