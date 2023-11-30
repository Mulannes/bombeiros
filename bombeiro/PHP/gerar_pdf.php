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


// Adicionar HTML ao PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Saída do PDF para o navegador
$pdf->Output('relatorio.pdf', 'D');