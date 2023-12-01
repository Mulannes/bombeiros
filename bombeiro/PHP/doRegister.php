<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['loggedIn'])) {
    // Se não estiver, redirecione para a página de login
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .principal {
            position: relative;
        }

        .p1 {
            position: absolute;
            top: 220px;
            left: 266px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            border-style: solid;
            border-color: aquamarine;
        }

        * {
            font-size: 16px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <form action="salvar_ocorrencia.php" method="post">
            <div class="row text">
                <div class="col-lg">
                    <a href="ocorrencia.php" class="display-1" style="color: black; text-decoration: none; font-weight: 600;">Ocorrência</a>
                </div>
            </div>
        <!--                     -->
        <!-- ✓ Detalhes Paciente -->
        <!--                     -->
            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                            aria-controls="panelsStayOpen-collapseOne">
                            Detalhes Paciente
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                        aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-1">
                                    <input id="date" type="date" name="date" min="yyyy-mm-dd" />
                                </div>
                                <div class="col-4"></div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" name="genero_DP"
                                        id="flexRadioDefaultM_DP" value="Masculino">
                                    <label class="form-check-label" for="flexRadioDefaultM_DP">Masculino
                                    </label>
                                    <input class="form-check-input" type="radio" name="genero_DP"
                                        id="flexRadioDefaultF_DP" value="Feminino">
                                    <label class="form-check-label" for="flexRadioDefaultF_DP">Feminino
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="nome_hospital_DP" class="form-control"
                                        placeholder="Nome do hospital:" aria-label="nomeH_DP">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <input type="text" name="nome_paciente_DP" class="form-control" placeholder="Nome:"
                                        aria-label="nome_DP" aria-describedby="basic-addon1">
                                </div>
                                <div class="col-4">
                                    <input type="number" name="idade_paciente_DP" class="form-control"
                                        placeholder="Idade:" aria-label="idade_DP" aria-describedby="basic-addon1"
                                        id="idadePaciente_DP">
                                </div>
                                <div class="col-8">
                                    <input type="number" name="cpf_paciente_DP" pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}"
                                        placeholder="CPF paciente:" class="form-control">
                                </div>
                                <div class="col-4">
                                    <input type="number" name="telefone_paciente_DP" placeholder="Fone:"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <input type="text" name="acompanhante_DP" class="form-control"
                                        placeholder="Acompanhante:">
                                </div>
                                <div class="col-4">
                                    <input type="number" name="idade_acompanhante_DP" class="form-control"
                                        placeholder="Idade:" aria-label="idade_DP" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <input type="text" name="local_ocorrencia_DP" class="form-control"
                                        placeholder="Local de ocorrência:">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--                      -->
        <!-- ✓ Tipo de Ocorrência -->
        <!--                      -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwo">
                        Tipo de ocorrencia(pré-hospitalar)
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                        <div class="container">
                            <div class="row" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                    name="Causado_Por_Animais">
                                <label class="form-check-label" for="flexCheckDefault"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Causado por animais
                                </label>
                            </div>
                            <div class="row" style="position: relative;"><input class="form-check-input" type="checkbox"
                                    value="" id="flexCheckDefault1" name="Com_Meio_De_Transporte">
                                <label class="form-check-label" for="flexCheckDefault1"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Com meio de transporte
                                </label>
                            </div>
                            <div class="row" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2"
                                    name="Desmoronamento_Deslizamento">
                                <label class="form-check-label" for="flexCheckDefault2"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Desmoronamento / Deslizamento
                                </label>
                            </div>
                            <div class="row" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3"
                                    name="Emergencia_Medica">
                                <label class="form-check-label" for="flexCheckDefault3"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Emergência médica
                                </label>
                            </div>
                            <div class="row" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4"
                                    name="Queda_De_Altura_2M">
                                <label class="form-check-label" for="flexCheckDefault4"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Queda de altura 2M
                                </label>
                            </div>
                            <div class="row" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5"
                                    name="Tentativa_De_Suicidio">
                                <label class="form-check-label" for="flexCheckDefault5"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Tentativa de suicídio
                                </label>
                            </div>
                            <div class="row" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6"
                                    name="Queda_Propria_Altura">
                                <label class="form-check-label" for="flexCheckDefault6"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Queda própria altura
                                </label>
                            </div>
                            <div class="row" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7"
                                    name="Afogamento">
                                <label class="form-check-label" for="flexCheckDefault7"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Afogamento
                                </label>
                            </div>
                            <div class="row" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8"
                                    name="Agressao">
                                <label class="form-check-label" for="flexCheckDefault8"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Agressão
                                </label>
                            </div>
                            <div class="row" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault9"
                                    name="Atropelamento">
                                <label class="form-check-label" for="flexCheckDefault9"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Atropelamento
                                </label>
                            </div>
                            <div class="row" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault0"
                                    name="Choque_Eletrico">
                                <label class="form-check-label" for="flexCheckDefault0"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Choque elétrico
                                </label>
                            </div>
                            <div class="row" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault10"
                                    name="Desabamento">
                                <label class="form-check-label" for="flexCheckDefault10"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Desabamento
                                </label>
                            </div>
                            <div class="row" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11"
                                    name="Domestico">
                                <label class="form-check-label" for="flexCheckDefault11"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Doméstico
                                </label>
                            </div>
                            <div class="row" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12"
                                    name="Esportivo">
                                <label class="form-check-label" for="flexCheckDefault12"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Esportivo
                                </label>
                            </div>
                            <div class="row" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault13"
                                    name="	Intoxicacao">
                                <label class="form-check-label" for="flexCheckDefault13"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Intoxicação
                                </label>
                            </div>
                            <div class="row" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault14"
                                    name="Queda_Bicicleta">
                                <label class="form-check-label" for="flexCheckDefault14"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Queda bicicleta
                                </label>
                            </div>
                            <div class="row" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault15"
                                    name="Queda_Moto">
                                <label class="form-check-label" for="flexCheckDefault15"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Queda moto
                                </label>
                            </div>
                            <div class="row" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault16"
                                    name="Queda_Nivel_2M">
                                <label class="form-check-label" for="flexCheckDefault16"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Queda nivel > 2M
                                </label>
                            </div>
                            <div class="row" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault17"
                                    name="Trabalho">
                                <label class="form-check-label" for="flexCheckDefault17"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Trabalho
                                </label>
                            </div>
                            <div class="row" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault18"
                                    name="Transferencia">
                                <label class="form-check-label" for="flexCheckDefault18"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Transferência
                                </label>
                            </div>
                            <div class="row" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault19"
                                    name="Outro_Campo">
                                <label class="form-check-label" for="flexCheckDefault19"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Outro Campo
                                </label>
                                <textarea class="form-control" name="Outro_Campo_Text" aria-label="Área de texto"
                                    placeholder="Descreva aqui..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--                     -->
        <!-- ✓ Avaliação GLASGOW -->
        <!--                     -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                        Avaliação do paciente(GLASGOW)
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingThree">
                    <div3 class="accordion-body" style="padding: 0;">
                        <div class="row justify-content-center fs-4">Nivel de consciência</div>
                        <div2 class="row h-auto" style="font-size: 12px;">
                            <div class="col-2 w-10"
                                style="rotate: 90deg; font-size: 16px; font-family: 'Courier New', Courier, monospace; padding-bottom: 20px; height: 50px;">
                                Abertura ocular</div>
                            <div1 class="col-5" id="maior5">Maiores de 5 anos <br>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Espontânea"
                                        id="flexCheckDefault20" name="Abertura">
                                    <label class="form-check-label" for="flexCheckDefault20">
                                        Espontânea
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Comando Verbal"
                                        id="flexCheckDefault21" name="Abertura">
                                    <label class="form-check-label" for="flexCheckDefault21">
                                        Comando Verbal
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Estímulo Doloroso"
                                        id="flexCheckDefault22" name="Abertura">
                                    <label class="form-check-label" for="flexCheckDefault22">
                                        Estímulo Doloroso
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Nenhuma" id="flexCheckDefault23"
                                        name="Abertura">
                                    <label class="form-check-label" for="flexCheckDefault23">
                                        Nenhuma
                                    </label>
                                </div>
                            </div1>
                            <div1 class="col-5 none" id="menor5">Menores de 5 anos <br>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Espontânea"
                                        id="flexCheckDefault24" name="Abertura">
                                    <label class="form-check-label" for="flexCheckDefault24">
                                        Espontânea
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Comando Verbal"
                                        id="flexCheckDefault25" name="Abertura">
                                    <label class="form-check-label" for="flexCheckDefault25">
                                        Comando Verbal
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Estímulo Doloroso"
                                        id="flexCheckDefault26" name="Abertura">
                                    <label class="form-check-label" for="flexCheckDefault26">
                                        Estímulo Doloroso
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Nenhuma" id="flexCheckDefault27"
                                        name="Abertura">
                                    <label class="form-check-label" for="flexCheckDefault27">
                                        Nenhuma
                                    </label>
                                </div>
                            </div1>
                        </div2>
                        <hr>
                        <div class="row h-auto" style="font-size: 12px;">
                            <div class="col-2 w-10"
                                style="rotate: 90deg; font-size: 16px; font-family: 'Courier New', Courier, monospace; padding-bottom: 20px; height: 50px;">
                                Resposta verbal</div>
                            <div1 class="col-5" id="maior7">
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Orientado"
                                        id="flexCheckDefault28" name="RespostaVerbal">
                                    <label class="form-check-label" for="flexCheckDefault28">
                                        Orientado
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Confuso" id="flexCheckDefault29"
                                        name="RespostaVerbal">
                                    <label class="form-check-label" for="flexCheckDefault29">
                                        Confuso
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Palavras inapropriadas"
                                        id="flexCheckDefault30" name="RespostaVerbal">
                                    <label class="form-check-label" for="flexCheckDefault30">
                                        Palavras <br>inapropriadas
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Palavras incompreensível"
                                        id="flexCheckDefault31" name="RespostaVerbal">
                                    <label class="form-check-label" for="flexCheckDefault31">
                                        Palavras <br>incompreensível
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Nenhuma" id="flexCheckDefault32"
                                        name="RespostaVerbal">
                                    <label class="form-check-label" for="flexCheckDefault32">
                                        Nenhuma
                                    </label>
                                </div>
                            </div1>
                            <div1 class="col-5 none" id="menor6">
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Palavras e Frases Apropriadas"
                                        id="flexCheckDefault33" name="RespostaVerbal">
                                    <label class="form-check-label" for="flexCheckDefault33">
                                        Palavras e frases <br>apropriadas
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Palavras inapropriadas"
                                        id="flexCheckDefault34" name="RespostaVerbal">
                                    <label class="form-check-label" for="flexCheckDefault34">
                                        Palavras <br>inapropriadas
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Choro Persistente ou Gritos"
                                        id="flexCheckDefault35" name="RespostaVerbal" placeholder="1">
                                    <label class="form-check-label" for="flexCheckDefault35">
                                        Choro persistente <br>ou gritos
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Sons incompreensível"
                                        id="flexCheckDefault36" name="RespostaVerbal">
                                    <label class="form-check-label" for="flexCheckDefault36">
                                        Sons <br>incompreensível
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Nenhuma Resposta Verbal"
                                        id="flexCheckDefault37" name="RespostaVerbal">
                                    <label class="form-check-label" for="flexCheckDefault37">
                                        Nenhuma resposta <br>verbal
                                    </label>
                                </div>
                            </div1>
                        </div>
                        <hr>
                        <div class="row h-auto" style="font-size: 12px;">
                            <div class="col-2 w-10"
                                style="rotate: 90deg; font-size: 16px; font-family: 'Courier New', Courier, monospace; padding-bottom: 20px; height: 50px;">
                                Resposta motora</div>
                            <div1 class="col-4 p-0" id="maior6">
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Obedece Comandos"
                                        id="flexCheckDefault38" name="RespostaMotora">
                                    <label class="form-check-label" for="flexCheckDefault38">
                                        Obedece <br>comandos
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Localiza Dor"
                                        id="flexCheckDefault39" name="RespostaMotora">
                                    <label class="form-check-label" for="flexCheckDefault39">
                                        Localiza dor
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Movimento de Retirada"
                                        id="flexCheckDefault40" name="RespostaMotora">
                                    <label class="form-check-label" for="flexCheckDefault40">
                                        Movimento de <br>retirada
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Flexão Anormal"
                                        id="flexCheckDefault41" name="RespostaMotora">
                                    <label class="form-check-label" for="flexCheckDefault41">
                                        Flexão anormal
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Extensão Anormal"
                                        id="flexCheckDefault42" name="RespostaMotora">
                                    <label class="form-check-label" for="flexCheckDefault42">
                                        Extensão <br>anormal
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Nenhuma" id="flexCheckDefault43"
                                        name="RespostaMotora">
                                    <label class="form-check-label" for="flexCheckDefault43">
                                        Nenhuma
                                    </label>
                                </div>
                            </div1>
                            <div1 class="col-6 p-0 none" id="menor7">
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Obedece Prontamente"
                                        id="flexCheckDefault44" name="RespostaMotora">
                                    <label class="form-check-label" for="flexCheckDefault44">
                                        Obedece prontamente
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Localiza Dor ou Estímulo Tátil"
                                        id="flexCheckDefault45" name="RespostaMotora">
                                    <label class="form-check-label" for="flexCheckDefault45">
                                        Localiza dor ou <br>estímulo tatil
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Retirada do Segmento Estímulado"
                                        id="flexCheckDefault46" name="RespostaMotora">
                                    <label class="form-check-label" for="flexCheckDefault46">
                                        Retirada do segmento <br>estímulado
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Flexão Anormal(decorticação)"
                                        id="flexCheckDefault47" name="RespostaMotora">
                                    <label class="form-check-label" for="flexCheckDefault47">
                                        Flexão anormal <br>(decorticação)
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Extensão Anormal(decerfração)"
                                        id="flexCheckDefault48" name="RespostaMotora">
                                    <label class="form-check-label" for="flexCheckDefault48">
                                        Extensão anormal <br>(decerfração)
                                    </label>
                                </div>
                                <div class="col-auto">
                                    <input class="form-check-input" type="radio" value="Ausência Pararela Flácida"
                                        id="flexCheckDefault49" name="RespostaMotora">
                                    <label class="form-check-label" for="flexCheckDefault49">
                                        Ausência pararela <br>flácida
                                    </label>
                                </div>
                            </div1>
                        </div>
                    </div3>
                </div>
            </div>
        <!--                     -->
        <!--   ✓ Sinais Vitais   -->
        <!--                     -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseFour">
                        Sinais vitais
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingFour">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-3">
                                <p>Pressão arterial:</p>
                            </div>
                            <div class="col-4"><input type="text" name="Pressão_arterial0" class="form-control"
                                    placeholder="mmHg">
                            </div>X
                            <div class="col-4"><input type="text" name="Pressão_arterial1" class="form-control"
                                    placeholder="mmHg">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">Pulso:</div>
                            <div class="col-8"><input type="text" name="Pulso" class="form-control"
                                    placeholder="B.C.P.M"></div>
                        </div>
                        <div class="row">
                            <div class="col-4">Respiração:</div>
                            <div class="col-8"><input type="text" name="Respiracao" class="form-control"
                                    placeholder="M.R.M"></div>
                        </div>
                        <div class="row">
                            <div class="col-4"> Saturação:</div>
                            <div class="col-8"><input type="text" name="Saturação" class="form-control"
                                    placeholder="em porcetagem(%)"></div>
                        </div>
                        <div class="row">
                            <div class="col-4">HGT:</div>
                            <div class="col-8"><input type="text" name="HGT" class="form-control"></div>
                        </div>
                        <div class="row">
                            <div class="col-4">Temperatura:</div>
                            <div class="col-4"><input type="text" name="Temperatura" class="form-control"></div>
                            <div class="col-4" style="padding: 0; display: flex; align-items: center;"><input
                                    type="radio" name="FichaANN" class="form-check-input" id="FichaAN">
                                <label for="FichaANN" class="form-check-label">Anormal</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4" style="display: flex; align-self: center;">Perfusão:</div>
                            <div class="col-4">
                                <input class="form-check-input" type="radio" name="perfusão" value="perfusão"
                                    id="perfusão2maior">
                                <label class="form-check-label" for="perfusão2maior">
                                    > 2seg
                                </label>
                                <input class="form-check-input" type="radio" name="perfusão" value="perfusão"
                                    id="perfusão2menor">
                                <label class="form-check-label" for="perfusão2menor">
                                    < 2 seg </label>
                            </div>
                            <div class="col-4" style="padding: 0; display: flex; align-items: center;"><input
                                    type="radio" name="FichaANN" class="form-check-input" id="FichaN">
                                <label for="FichaANN" class="form-check-label">Normal</label>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        <!--                         -->
        <!-- ✓ Problemas Encontrados -->
        <!--                         -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseFive">
                        Problemas encontrados suspeitos
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingFive">
                    <div class="accordion-body">
                        <div class="row"
                            style="height: 150px; font-size: 12px; align-items: center; border-bottom: 2px solid rgba(0,0,0,0.3);">
                            <div class="col" style="position:relative;"><input class="form-check-input" type="checkbox"
                                    name="Psiquiátrico" id="Psiquiátrico">
                                <label class="form-check-label" for="Psiquiátrico" style="position: absolute; top: 0;">
                                    Psiquiátrico
                                </label>
                            </div>
                        </div>
                        <div class="row"
                            style="height: 150px; font-size: 12px; align-items: center; border-bottom: 2px solid rgba(0,0,0,0.3);">
                            <div class="col-4" style="position:relative;">
                                <label class="form-check-label" for="Obstetrico" style="position: absolute; top: 0;">
                                    Obstétrico
                                </label>
                            </div>
                            <div class="col-8" style="position:relative;"><input class="form-check-input" value="Parto Emergencial"
                                    type="radio" name="Obstetrico" id="PartoEmergencial"
                                    style="display: block;">
                                <label class="form-check-label" for="PartoEmergencial"
                                    style="position: absolute; top: 0; left: 30px;width: 200px">
                                    Parto Emergencial
                                </label><input class="form-check-input" type="radio" name="Obstetrico" id="Gestante" value="Gestante"
                                    style="display: block;">
                                <label class="form-check-label" for="Gestante"
                                    style="position: absolute; top: 20px; left: 30px;width: 200px">
                                    Gestante
                                </label><input class=" form-check-input" type="radio" name="Obstetrico" id="Hemor" value="Hemor. excessiva"
                                    style="display: block;">
                                <label class="form-check-label" for="Hemor"
                                    style="position: absolute; top: 40px;  left: 30px;width: 200px">
                                    Hemor. excessiva
                                </label>
                            </div>
                        </div>
                        <div class="row"
                            style="height: 125px; font-size: 12px; align-items: center; border-bottom: 2px solid rgba(0,0,0,0.3);">
                            <div class="col-6" style="position:relative;">
                                <label class="form-check-label" for="Respiratorio" style="position: absolute; top: 0;">
                                    Respiratório
                                </label>
                            </div>
                            <div class="col-6" style="position:relative;"><input class=" form-check-input" value="DPOC"
                                    type="radio" name="Respiratorio" id="DPOC" style="display: block;">
                                <label class="form-check-label" for="DPOC"
                                    style="position: absolute; top: 0; left: 30px;width: 200px">
                                    DPOC
                                </label><input class="form-check-input" type="radio" name="Respiratorio" id="Inalação" value="Inalação fumaça"
                                    style="display: block;">
                                <label class="form-check-label" for="Inalação"
                                    style="position: absolute; top: 20px; left: 30px;width: 200px">
                                    Inalação fumaça
                                </label>
                            </div>
                        </div>
                        <div class="row"
                            style="height: 125px; font-size: 12px; align-items: center; border-bottom: 2px solid rgba(0,0,0,0.3);">
                            <div class="col-6" style="position:relative;">
                                <label class="form-check-label" for="Diabetes" style="position: absolute; top: 0;">
                                    Diabetes
                                </label>
                            </div>
                            <div class="col-6" style="position:relative;"><input class="form-check-input" value="Hiperglicemia"
                                    type="radio" name="Diabetes" id="Hiperglicemia" style="display: block;">
                                <label class="form-check-label" for="Hiperglicemia"
                                    style="position: absolute; top: 0; left: 30px;width: 200px">
                                    Hiperglicemia
                                </label><input class="form-check-input" type="radio" name="Diabetes" value="Hipoglicemia"
                                    id="Hipoglicemia" style="display: block;">
                                <label class="form-check-label" for="Hipoglicemia"
                                    style="position: absolute; top: 20px; left: 30px;width: 200px">
                                    Hipoglicemia
                                </label>
                            </div>
                        </div>
                        <div class="row"
                            style="height: 225px; font-size: 12px; align-items: center; border-bottom: 2px solid rgba(0,0,0,0.3);" ">
                        <div class=" col-4">
                            <label class="form-check-label" for="Transporte">
                                Transporte
                            </label>
                        </div>
                        <div class="col-8" style="position: relative;"><input class="form-check-input" type="radio" value="Aéreo"
                                name="Aereo" id="Aereo" style="display: block;">
                            <label class="form-check-label" for="Aereo" style="position: absolute; top: 0;left: 32px;">
                                Aéreo
                            </label><input class="form-check-input" type="radio" name="Transporte" id="Clinico" value="Clínico"
                                style="display: block;">
                            <label class="form-check-label" for="Clinico"
                                style="position: absolute; top: 20px;left: 32px;">
                                Clínico
                            </label><input class="form-check-input" type="radio" name="Transporte" id="Emergencial" value="Emergencial"
                                style="display: block;">
                            <label class="form-check-label" for="Emergencial"
                                style="position: absolute; top: 40px;left: 32px;">
                                Emergencial
                            </label><input class="form-check-input" type="radio" name="Transporte" id="potrauma" value="Pós-trauma"
                                style="display: block;">
                            <label class="form-check-label" for="potrauma"
                                style="position: absolute; top: 60px;left: 32px;">
                                Pós-trauma
                            </label><input class="form-check-input" type="radio" name="Transporte" id="Samu" value="Samu"
                                style="display: block;">
                            <label class="form-check-label" for="Samu"
                                style="position: absolute; top: 80px;left: 32px;">
                                Samu
                            </label><input class="form-check-input" type="radio" name="Transporte" id="noRemocao" value="Sem remoção"
                                style="display: block;">
                            <label class="form-check-label" for="noRemocao"
                                style="position: absolute; top: 100px;left: 32px;">
                                Sem remoção
                            </label>
                        </div>
                    </div>
                    <div class="row"
                        style="height: 150px; font-size: 12px; align-items: center; border-bottom: 2px solid rgba(0,0,0,0.3);">
                        <div class="col" style="position:relative;">
                            <label class="form-check-label" for="Outros2"
                                style="position: absolute; top: 0;left: 32px;">
                            </label><input type="text" class="form-control" name="Outros" id="Outros" placeholder="Outros">
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!--                           -->
    <!-- ✓ Localização dos Traumas -->
    <!--                           -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseSix">
                Localização dos traumas
            </button>
        </h2>
        <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingSix">
            <div class="accordion-body">
                <div class="container">
                    <div class="d-flex justify-content-center ">
                        <img src="../images/corpohumano.png" class="mt-3 rounded col-xs-6 col-md-3">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col">1</div>
                            <div class="accordion-body">
                                <input type="text" name="1local" id="1local" class="form-control" placeholder="Local">
                            </div>
                            <div class="accordion-body">
                                <input type="text" name="1lado" id="1lado" class="form-control" placeholder="Lado">
                            </div>
                            <div class="accordion-body">
                                <input type="text" name="1face" id="1face" class="form-control" placeholder="Face">
                            </div>
                            <div class="accordion-body">
                                <input type="text" name="1tipo" id="1tipo" class="form-control" placeholder="Tipo (Ferimentos/Fraturas/Entorses/Luxação/Contusão)">
                            </div>
                            <div class="col">2</div>
                            <div class="accordion-body">
                                <input type="text" name="2local" id="2local" class="form-control" placeholder="Local">
                            </div>
                            <div class="accordion-body">
                                <input type="text" name="2lado" id="2lado" class="form-control" placeholder="Lado">
                            </div>
                            <div class="accordion-body">
                                <input type="text" name="2face" id="2face" class="form-control" placeholder="Face">
                            </div>
                            <div class="accordion-body">
                                <input type="text" name="2tipo" id="2tipo" class="form-control" placeholder="Tipo (Ferimentos/Fraturas/Entorses/Luxação/Contusão)">
                            </div>
                            <div class="col">3</div>
                            <div class="accordion-body">
                                <input type="text" name="3local" id="3local" class="form-control" placeholder="Local">
                            </div>
                            <div class="accordion-body">
                                <input type="text" name="3lado" id="3lado" class="form-control" placeholder="Lado">
                            </div>
                            <div class="accordion-body">
                                <input type="text" name="3face" id="3face" class="form-control" placeholder="Face">
                            </div>
                            <div class="accordion-body">
                                <input type="text" name="3tipo" id="3tipo" class="form-control" placeholder="Tipo (Ferimentos/Fraturas/Entorses/Luxação/Contusão)">
                            </div>
                            <div class="col">4</div>
                            <div class="accordion-body">
                                <input type="text" name="4local" id="4local" class="form-control" placeholder="Local">
                            </div>
                            <div class="accordion-body">
                                <input type="text" name="4lado" id="4lado" class="form-control" placeholder="Lado">
                            </div>
                            <div class="accordion-body">
                                <input type="text" name="4face" id="4face" class="form-control" placeholder="Face">
                            </div>
                            <div class="accordion-body">
                                <input type="text" name="4tipo" id="4tipo" class="form-control" placeholder="Tipo (Ferimentos/Fraturas/Entorses/Luxação/Contusão)">
                            </div>
                        </div>
                        <div class="row">
                        <div class="row" style="position: relative;">
                            <label for="Cabeca" style="margin-right: 5px;">Cabeça:
                            <div class="btn-group dropend" style="display: flex; align-items: center; width: 100px; padding-top: 4px; padding-bottom: 4px;">
                                <select class="btn btn-secondary" name="Cabeca_Value" id="Cabeca_Value">
                                    <option value=""></option>
                                    <option value="Cabeca1grau">Queimadura 1° Grau</option>
                                    <option value="Cabeca2grau">Queimadura 2° Grau</option>
                                    <option value="Cabeca3grau">Queimadura 3° Grau</option>
                                </select>
                                </label>
                            </div>
                        </div>
                        <div class="row" style="position: relative;">
                            <label for="Pescoco" style="margin-right: 5px;">Pescoço:
                            <div class="btn-group dropend" style="display: flex; align-items: center; width: 100px; padding-top: 4px; padding-bottom: 4px;">
                                <select class="btn btn-secondary" name="Pescoco_Value" id="Pescoco_Value">
                                    <option value=""></option>
                                    <option value="Pescoco1grau">Queimadura 1° Grau</option>
                                    <option value="Pescoco2grau">Queimadura 2° Grau</option>
                                    <option value="Pescoco3grau">Queimadura 3° Grau</option>
                                </select>
                                </label>
                            </div>
                        </div>
                        <div class="row" style="position: relative;">
                            <label for="Tant" style="margin-right: 5px;">T. Ant.:
                            <div class="btn-group dropend" style="display: flex; align-items: center; width: 100px; padding-top: 4px; padding-bottom: 4px;">
                                <select class="btn btn-secondary" name="Tant_Value" id="Tant_Value">
                                    <option value=""></option>
                                    <option value="Tant1grau">Queimadura 1° Grau</option>
                                    <option value="Tant2grau">Queimadura 2° Grau</option>
                                    <option value="Tant3grau">Queimadura 3° Grau</option>
                                </select>
                                </label>
                            </div>
                        </div>
                        <div class="row" style="position: relative;">
                            <label for="Tpos" style="margin-right: 5px;">T. Pos.:
                            <div class="btn-group dropend" style="display: flex; align-items: center; width: 100px; padding-top: 4px; padding-bottom: 4px;">
                                <select class="btn btn-secondary" name="Tpos_Value" id="Tpos_Value">
                                    <option value=""></option>
                                    <option value="Tpos1grau">Queimadura 1° Grau</option>
                                    <option value="Tpos2grau">Queimadura 2° Grau</option>
                                    <option value="Tpos3grau">Queimadura 3° Grau</option>
                                </select>
                                </label>
                            </div>
                        </div>
                        <div class="row" style="position: relative;">
                            <label for="Genit" style="margin-right: 5px;">Genit.:
                            <div class="btn-group dropend" style="display: flex; align-items: center; width: 100px; padding-top: 4px; padding-bottom: 4px;">
                                <select class="btn btn-secondary" name="Genit_Value" id="Genit_Value">
                                    <option value=""></option>
                                    <option value="Genit1grau">Queimadura 1° Grau</option>
                                    <option value="Genit2grau">Queimadura 2° Grau</option>
                                    <option value="Genit3grau">Queimadura 3° Grau</option>
                                </select>
                                </label>
                            </div>
                        </div>
                        <div class="row" style="position: relative;">
                            <label for="MID" style="margin-right: 5px;">M.I.D.:
                            <div class="btn-group dropend" style="display: flex; align-items: center; width: 100px; padding-top: 4px; padding-bottom: 4px;">
                                <select class="btn btn-secondary" name="MID_Value" id="MID_Value">
                                    <option value=""></option>
                                    <option value="MID1grau">Queimadura 1° Grau</option>
                                    <option value="MID2grau">Queimadura 2° Grau</option>
                                    <option value="MID3grau">Queimadura 3° Grau</option>
                                </select>
                                </label>
                            </div>
                        </div>
                        <div class="row" style="position: relative;">
                            <label for="MIE" style="margin-right: 5px;">M.I.E.:
                            <div class="btn-group dropend" style="display: flex; align-items: center; width: 100px; padding-top: 4px; padding-bottom: 4px;">
                                <select class="btn btn-secondary" name="MIE_Value" id="MIE_Value">
                                    <option value=""></option>
                                    <option value="MIE1grau">Queimadura 1° Grau</option>
                                    <option value="MIE2grau">Queimadura 2° Grau</option>
                                    <option value="MIE3grau">Queimadura 3° Grau</option>
                                </select>
                                </label>
                            </div>
                        </div>
                        <div class="row" style="position: relative;">
                            <label for="MSD" style="margin-right: 5px;">M.S.D:
                            <div class="btn-group dropend" style="display: flex; align-items: center; width: 100px; padding-top: 4px; padding-bottom: 4px;">
                                <select class="btn btn-secondary" name="MSD_Value" id="MSD_Value">
                                    <option value=""></option>
                                    <option value="MSD1grau">Queimadura 1° Grau</option>
                                    <option value="MSD2grau">Queimadura 2° Grau</option>
                                    <option value="MSD3grau">Queimadura 3° Grau</option>
                                </select>
                                </label>
                            </div>
                        </div>
                        <div class="row" style="position: relative;">
                            <label for="MSE" style="margin-right: 5px;">M.S.E:
                            <div class="btn-group dropend" style="display: flex; align-items: center; width: 100px; padding-top: 4px; padding-bottom: 4px;">
                                <select class="btn btn-secondary" name="MSE_Value" id="MSE_Value">
                                    <option value=""></option>
                                    <option value="MSE1grau">Queimadura 1° Grau</option>
                                    <option value="MSE2grau">Queimadura 2° Grau</option>
                                    <option value="MSE3grau">Queimadura 3° Grau</option>
                                </select>
                                </label>
                            </div>
                        </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--                      -->
    <!-- ✓ Objetos Recolhidos -->
    <!--                      -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseSeven">
                Objetos recolhidos
            </button>
        </h2>
        <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingSeven">
            <div class="accordion-body">
                <input type="text" name="objRec" class="form-control">
            </div>
        </div>
    </div>
    <!--                     -->
    <!-- ✓ Sinais e Sintomas -->
    <!--                     -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseEight">
                        Sinais e sintomas
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-headingEight">
                    <div class="accordion-body">
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault50" name="Abdomen_Sensivel_Rigido">
                            <label class="form-check-label" for="flexCheckDefault50"
                                style="position: absolute; top: 0;left: 32px;">
                                Abdômen sensível ou rígido
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault51" name="Afundamento_Cranio">
                            <label class="form-check-label" for="flexCheckDefault51"
                                style="position: absolute; top: 0;left: 32px;">
                                Afundamento de crânio
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault52" name="Agitacao">
                            <label class="form-check-label" for="flexCheckDefault52"
                                style="position: absolute; top: 0;left: 32px;">
                                Agitação
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault53" name="Amnesia">
                            <label class="form-check-label" for="flexCheckDefault53"
                                style="position: absolute; top: 0;left: 32px;">
                                Amnésia
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault54" name="Angna_Peito">
                            <label class="form-check-label" for="flexCheckDefault54"
                                style="position: absolute; top: 0;left: 32px;">
                                Angna de peito
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault55" name="Apneia">
                            <label class="form-check-label" for="flexCheckDefault55"
                                style="position: absolute; top: 0;left: 32px;">
                                Apinéia
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault56" name="bradicardia">
                            <label class="form-check-label" for="flexCheckDefault56"
                                style="position: absolute; top: 0;left: 32px;">
                                Bradicardia
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault57" name="Bradipneia">
                            <label class="form-check-label" for="flexCheckDefault57"
                                style="position: absolute; top: 0;left: 32px;">
                                Bradipneia
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault58" name="Bronco_Aspiracao">
                            <label class="form-check-label" for="flexCheckDefault58"
                                style="position: absolute; top: 0;left: 32px;">
                                Bronco aspirando
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault59" name="Cefaleia">
                            <label class="form-check-label" for="flexCheckDefault59"
                                style="position: absolute; top: 0;left: 32px;">
                                Cefaleia
                            </label>
                        </div>
                        <div class="row" style="display: flex; align-items: center;">
                            <div class="col-6">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault60" name="">
                                <label class="form-check-label" for="flexCheckDefault60"> 
                                    Cianose
                                </label>
                            </div>
                            <div class="col-6" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="Lábios" id="flexCheckDefault61" name="Cianose_Labios"
                                    style="display: block; ">
                                <label class="form-check-label" for="flexCheckDefault61"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Lábios
                                </label>
                                <input class="form-check-input" type="checkbox" value="Extremidade" id="flexCheckDefault62" name="Cianose_Extremidade"
                                    style="display: block;position: relative;">
                                <label class="form-check-label" for="flexCheckDefault62"
                                    style="position: absolute; top: 20px;left: 32px;">
                                    Extremidade
                                </label>
                            </div>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault63" name="Convulsao">
                            <label class="form-check-label" for="flexCheckDefault63"
                                style="position: absolute; top: 0;left: 32px;">
                                Convulsão
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault64" name="Decorticacao">
                            <label class="form-check-label" for="flexCheckDefault64"
                                style="position: absolute; top: 0;left: 32px;">
                                Decorticação
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault65" name="Deformidade">
                            <label class="form-check-label" for="flexCheckDefault65"
                                style="position: absolute; top: 0;left: 32px;">
                                Deformidade
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault66" name="Descerebracao">
                            <label class="form-check-label" for="flexCheckDefault66"
                                style="position: absolute; top: 0;left: 32px;">
                                Descerebração
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault67" name="Desmaio">
                            <label class="form-check-label" for="flexCheckDefault67"
                                style="position: absolute; top: 0;left: 32px;">
                                Desmaio
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault68" name="Desvio_Traqueia">
                            <label class="form-check-label" for="flexCheckDefault68"
                                style="position: absolute; top: 0;left: 32px;">
                                Desvio de traquéia
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault69" name="Despineia">
                            <label class="form-check-label" for="flexCheckDefault69"
                                style="position: absolute; top: 0;left: 32px;">
                                Despinéia
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault70" name="Dor_Local">
                            <label class="form-check-label" for="flexCheckDefault70"
                                style="position: absolute; top: 0;left: 32px;">
                                Dor local
                            </label>
                        </div>
                        <div class="row" style="display: flex; align-items: center;">
                            <div class="col-6">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault71" name="Edema">
                                <label class="form-check-label" for="flexCheckDefault71">
                                    Edema
                                </label>
                            </div>
                            <div class="col-6" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault72" name="Edema_Generalizado"
                                    style="display: block; ">
                                <label class="form-check-label" for="flexCheckDefault72"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Generalizado
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault73" name="Edema_Localizado"
                                    style="display: block;position: relative;">
                                <label class="form-check-label" for="flexCheckDefault73"
                                    style="position: absolute; top: 20px;left: 32px;">
                                    Localizado
                                </label>
                            </div>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault74" name="Enfisema_Subcutaneo">
                            <label class="form-check-label" for="flexCheckDefault74"
                                style="position: absolute; top: 0;left: 32px;">
                                Enfisema subcutâneo
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault75" name="Extase_Jugular">
                            <label class="form-check-label" for="flexCheckDefault75"
                                style="position: absolute; top: 0;left: 32px;">
                                Êxtase de jugular
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault76" name="Face_Palida">
                            <label class="form-check-label" for="flexCheckDefault76"
                                style="position: absolute; top: 0;left: 32px;">
                                Face pálida
                            </label>
                        </div>
                        <div class="row" style="display: flex; align-items: center;">
                            <div class="col-6">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault77" name="Hemorragia">
                                <label class="form-check-label" for="flexCheckDefault77">
                                    Hemorrágia
                                </label>
                            </div>
                            <div class="col-6" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault78" name="Hemorragia_Interna"
                                    style="display: block; ">
                                <label class="form-check-label" for="flexCheckDefault78"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Interna
                                </label>
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault79" name="Hemorragia_Externa"
                                    style="display: block;position: relative;">
                                <label class="form-check-label" for="flexCheckDefault79"
                                    style="position: absolute; top: 20px;left: 32px;">
                                    Externa
                                </label>
                            </div>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault80" name="Hipertensao">
                            <label class="form-check-label" for="flexCheckDefault80"
                                style="position: absolute; top: 0;left: 32px;">
                                Hipertensão
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault81" name="Hipotensao">
                            <label class="form-check-label" for="flexCheckDefault81" 
                                style="position: absolute; top: 0;left: 32px;">
                                Hipotensão
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault82" name="Nauseas_Vomitos">
                            <label class="form-check-label" for="flexCheckDefault82" 
                                style="position: absolute; top: 0;left: 32px;">
                                Náuseas e vômitos
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault83" name="Nasoragia">
                            <label class="form-check-label" for="flexCheckDefault83" 
                                style="position: absolute; top: 0;left: 32px;">
                                Nasoragia
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault84" name="Obito">
                            <label class="form-check-label" for="flexCheckDefault84" 
                                style="position: absolute; top: 0;left: 32px;">
                                Óbito
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault85" name="Otorreia">
                            <label class="form-check-label" for="flexCheckDefault85" 
                                style="position: absolute; top: 0;left: 32px;">
                                Otorréia
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault86" name="Otorragia">
                            <label class="form-check-label" for="flexCheckDefault86" 
                                style="position: absolute; top: 0;left: 32px;">
                                Otorragia
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault87" name="OVACE">
                            <label class="form-check-label" for="flexCheckDefault87" 
                                style="position: absolute; top: 0;left: 32px;">
                                O.V.A.C.E
                            </label>
                        </div>
                        <div class="row" style="display: flex; align-items: center;">
                            <div class="col-6">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault88" name="Parada">
                                <label class="form-check-label" for="flexCheckDefault88" >
                                    Parada
                                </label>
                            </div>
                            <div class="col-6" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="Cardíaca" id="flexCheckDefault89" name="Parada_Cardiaca"
                                    style="display: block; " >
                                <label class="form-check-label" for="flexCheckDefault89"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Cardíaca
                                </label>
                                <input class="form-check-input" type="checkbox" value="Respiratória" id="flexCheckDefault90" name="Parada_Respiratoria" 
                                    style="display: block;position: relative;" >
                                <label class="form-check-label" for="flexCheckDefault90"
                                    style="position: absolute; top: 20px;left: 32px;">
                                    Respiratória
                                </label>
                            </div>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault91" name="Priaprismo">
                            <label class="form-check-label" for="flexCheckDefault91" 
                                style="position: absolute; top: 0;left: 32px;">
                                Priaprismo
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault92" name="Prurido_Pele">
                            <label class="form-check-label" for="flexCheckDefault92" 
                                style="position: absolute; top: 0;left: 32px;">
                                Prurido na pele
                            </label>
                        </div>
                        <div class="row" style="display: flex; align-items: center;">
                            <div class="col-4">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault93" name="Pupilas">
                                <label class="form-check-label" for="flexCheckDefault93" >
                                    Pupilas
                                </label>
                            </div>
                            <div class="col-4" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="Anisocoria" id="flexCheckDefault94"
                                    style="display: block; ">
                                <label class="form-check-label" for="flexCheckDefault94"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Anisocoria
                                </label>
                                <input class="form-check-input" type="checkbox" value="Isocoria" id="flexCheckDefault95"
                                    style="display: block;position: relative;">
                                <label class="form-check-label" for="flexCheckDefault95"
                                    style="position: absolute; top: 20px;left: 32px;">
                                    Isocoria
                                </label>
                                <input class="form-check-input" type="checkbox" value="Midriase" id="flexCheckDefault96"
                                    style="display: block; ">
                                <label class="form-check-label" for="flexCheckDefault96"
                                    style="position: absolute; top: 40px;left: 32px;">
                                    Midriase
                                </label>
                                <input class="form-check-input" type="checkbox" value="Miose" id="flexCheckDefault97"
                                    style="display: block; ">
                                <label class="form-check-label" for="flexCheckDefault97"
                                    style="position: absolute; top: 60px;left: 32px;">
                                    Miose
                                </label>
                            </div>
                            <div class="col-4" style="position: relative;">
                                <input class="form-check-input" type="checkbox" value="Reagente" id="flexCheckDefault98"
                                    style="display: block; ">
                                <label class="form-check-label" for="flexCheckDefault98"
                                    style="position: absolute; top: 0;left: 32px;">
                                    Reagente
                                </label>
                                <input class="form-check-input" type="checkbox" value="Não Reagente" id="flexCheckDefault99"
                                    style="display: block; ">
                                <label class="form-check-label" for="flexCheckDefault99"
                                    style="position: absolute; top: 20px;left: 32px;">
                                    Ñ reagente
                                </label>
                            </div>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault100" name="Sede">
                            <label class="form-check-label" for="flexCheckDefault100" 
                                style="position: absolute; top: 0;left: 32px;">
                                Sede
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault101" name="Sinal_Battle">
                            <label class="form-check-label" for="flexCheckDefault101" 
                                style="position: absolute; top: 0;left: 32px;">
                                Sinal de battle
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault102" name="Sinal_Guaxinim">
                            <label class="form-check-label" for="flexCheckDefault102" 
                                style="position: absolute; top: 0;left: 32px;">
                                Sinal de guaxinim
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault103" name="Sudorese">
                            <label class="form-check-label" for="flexCheckDefault103" 
                                style="position: absolute; top: 0;left: 32px;">
                                Sudorese
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault104" name="Taquipneia">
                            <label class="form-check-label" for="flexCheckDefault104" 
                                style="position: absolute; top: 0;left: 32px;">
                                Taquipnéia
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault105" name="Taquicardia">
                            <label class="form-check-label" for="flexCheckDefault105" 
                                style="position: absolute; top: 0;left: 32px;">
                                Taquicardia
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault106" name="Tontura">
                            <label class="form-check-label" for="flexCheckDefault106" 
                                style="position: absolute; top: 0;left: 32px;">
                                Tontura
                            </label>
                        </div>
                        <div class="row" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault107">
                <input type="text" name="Observacoes" class="form-control" style="position: absolute; top: 0;left: 32px; height: 35px; width: 200px;">
                        </div>

                    </div>
                </div>
            </div>
    <!--                     -->
    <!-- ✓ Forma de Condução -->
    <!--                     -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingNine">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseNine">
                Forma de condução
            </button>
        </h2>
        <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingNine">
            <div class="accordion-body">
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" value="Deitada" id="flexCheckDefaultDeitada"
                        name="forma_conducao">
                    <label class="form-check-label" for="flexCheckDefaultDeitada"
                        style="position: absolute; top: 0;left: 32px;">
                        Deitada
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" value="Semi-Deitada"
                        id="flexCheckDefaultSemiDeitada" name="forma_conducao">
                    <label class="form-check-label" for="flexCheckDefaultSemiDeitada"
                        style="position: absolute; top: 0;left: 32px;">
                        Semi-Deitada
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" value="Sentada" id="flexCheckDefaultSentada"
                        name="forma_conducao">
                    <label class="form-check-label" for="flexCheckDefaultSentada"
                        style="position: absolute; top: 0;left: 32px;">
                        Sentada
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!--              -->
    <!-- ✓ Vítima Era -->
    <!--              -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseTen">
                Vítima era
            </button>
        </h2>
        <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingTen">
            <div class="accordion-body">
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="radio" value="Ciclista" name="Vitima_Era"
                        id="flexCheckDefaultCiclista">
                    <label class="form-check-label" for="flexCheckDefaultCiclista"
                        style="position: absolute; top: 0;left: 32px;">
                        Ciclista
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="radio" value="Condutor Moto" name="Vitima_Era"
                        id="flexCheckDefaultCondutorMoto">
                    <label class="form-check-label" for="flexCheckDefaultCondutorMoto"
                        style="position: absolute; top: 0;left: 32px;">
                        Condutor moto
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="radio" value="Gestante" name="Vitima_Era"
                        id="flexCheckDefaultGestante">
                    <label class="form-check-label" for="flexCheckDefaultGestante"
                        style="position: absolute; top: 0;left: 32px;">
                        Gestante
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="radio" value="Pass. Banco da Frente" name="Vitima_Era"
                        id="flexCheckDefaultPasFrente">
                    <label class="form-check-label" for="flexCheckDefaultPasFrente"
                        style="position: absolute; top: 0;left: 32px;">
                        Pass. Ban frente
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="radio" value="Pass. Moto" name="Vitima_Era"
                        id="flexCheckDefaultPasMoto">
                    <label class="form-check-label" for="flexCheckDefaultPasMoto"
                        style="position: absolute; top: 0;left: 32px;">
                        Pas. moto
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="radio" value="Condutor Carro" name="Vitima_Era"
                        id="flexCheckDefaultCondutorcarro">
                    <label class="form-check-label" for="flexCheckDefaultCondutorcarro"
                        style="position: absolute; top: 0;left: 32px;">
                        Condutor carro
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="radio" value="Clínico" name="Vitima_Era"
                        id="flexCheckDefaultClinico">
                    <label class="form-check-label" for="flexCheckDefaultClinico"
                        style="position: absolute; top: 0;left: 32px;">
                        Clínico
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="radio" value="Trauma" name="Vitima_Era"
                        id="flexCheckDefaultTrauma">
                    <label class="form-check-label" for="flexCheckDefaultTrauma"
                        style="position: absolute; top: 0;left: 32px;">
                        Trauma
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="radio" value="Pass. Banco de Trás" name="Vitima_Era"
                        id="flexCheckDefaultPassTras">
                    <label class="form-check-label" for="flexCheckDefaultPassTras"
                        style="position: absolute; top: 0;left: 32px;">
                        Pass. Bco. trás
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="radio" value="Pedestre" name="Vitima_Era"
                        id="flexCheckDefaultPedestre">
                    <label class="form-check-label" for="flexCheckDefaultPedestre"
                        style="position: absolute; top: 0;left: 32px;">
                        Pedestre
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!--                      -->
    <!-- ✓ Decisão Transporte -->
    <!--                      -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingEleven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseEleven" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseEleven">
                Decisão transporte
            </button>
        </h2>
        <div id="panelsStayOpen-collapseEleven" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingEleven">
            <div class="accordion-body">
                <div class="row">
                    <div class="col-6" style="position: relative;">
                        <input class="form-check-input" type="radio" value="Crítico" name="Decisao_Transporte"
                            id="flexCheckDefaultcritico">
                        <label class="form-check-label" for="flexCheckDefaultcritico">
                            Crítico
                        </label>
                    </div>
                    <div class="col-6" style="position: relative;">
                        <input class="form-check-input" type="radio" value="Instável" name="Decisao_Transporte"
                            id="flexCheckDefaultinstavel">
                        <label class="form-check-label" for="flexCheckDefaultinstavel">
                            Instável
                        </label>
                    </div>
                </div>
                <div class="row" style="height: 40px;">
                    <div class="col-6" style="position: relative;">
                        <input class="form-check-input" type="radio" value="Potencialmente Instável"
                            name="Decisao_Transporte" id="flexCheckDefaultPotencialmente">
                        <label class="form-check-label" for="flexCheckDefaultPotencialmente">
                            Potencialmente Instável
                        </label>
                    </div>
                    <div class="col-6" style="position: relative;">
                        <input class="form-check-input" type="radio" value="Estável" name="Decisao_Transporte"
                            id="flexCheckDefaultestavel">
                        <label class="form-check-label" for="flexCheckDefaultestavel">
                            Estável
                        </label>
                    </div>
                </div>
                <hr>
                <div class="row" style="text-align: center;">
                    <p>Equipe de atendimento</p>
                </div>
                <div class="row" style="display: flex; position: relative;">
                    <p style="font-size: 1em;padding: 0;" class="textA">M:</p><input type="text" class="form-control"
                        name="M" id="M" style="width: 200px; position: absolute; right: 5px;">
                </div>
                <div class="row" style="display: flex; position: relative;">
                    <p style="font-size: 1em;padding: 0;" class="textA">S1:</p><input type="text" class="form-control"
                        name="S1" id="S1" style="width: 200px; position: absolute; right: 5px;">
                </div>
                <div class="row" style="display: flex; position: relative;">
                    <p style="font-size: 1em;padding: 0;" class="textA">S2:</p><input type="text" class="form-control"
                        name="S2" id="S2" style="width: 200px; position: absolute; right: 5px;">
                </div>
                <div class="row" style="display: flex; position: relative;">
                    <p style="font-size: 1em;padding: 0;" class="textA">S3:</p><input type="text" class="form-control"
                        name="S3" id="S3" style="width: 200px; position: absolute; right: 5px;">
                </div>
                <div class="row" style="display: flex; position: relative;">
                    <p style="font-size: 1em;padding: 0;" class="textA">Demandante:</p><input type="text"
                        class="form-control" name="Demandante" id="Demandante"
                        style="width: 200px; position: absolute; right: 5px;">
                </div>
                <div class="row" style="display: flex; position: relative;">
                    <p style="font-size: 1em;padding: 0;" class="textA">Equipe:</p><input type="text"
                        class="form-control" name="Equipe" id="Equipe"
                        style="width: 200px; position: absolute; right: 5px;">
                </div>
            </div>
        </div>
    </div>
    <!--                           -->
    <!-- ✓ Procedimentos Efetuados -->
    <!--                           -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwelve">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseTwelve" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseTwelve">
                Procedimentos efetuados
            </button>
        </h2>
        <div id="panelsStayOpen-collapseTwelve" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingTwelve">
            <div class="accordion-body">
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Aspiracao" id="Aspiracao">
                    <label class="form-check-label" for="Aspiracao"
                        style="position: absolute; top: 0;left: 32px;">
                        Aspiração
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Avalicao_Inicial" id="Avalicao_Inicial">
                    <label class="form-check-label" for="Avalicao_Inicial"
                        style="position: absolute; top: 0;left: 32px;">
                        Avaliçao inicial
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Avaliacao_Dirigida" id="Avaliacao_Dirigida">
                    <label class="form-check-label" for="Avaliacao_Dirigida"
                        style="position: absolute; top: 0;left: 32px;">
                        Avaliação dirigida
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Avaliacao_Continuada" id="Avaliacao_Continuada">
                    <label class="form-check-label" for="Avaliacao_Continuada"
                        style="position: absolute; top: 0;left: 32px;">
                        Avaliação continuada
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Chave_de_Rautek" id="Chave_de_Rautek">
                    <label class="form-check-label" for="Chave_de_Rautek"
                        style="position: absolute; top: 0;left: 32px;">
                        Chave de Rautek
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Canula_de_Guedel" id="Canula_de_Guedel">
                    <label class="form-check-label" for="Canula_de_Guedel"
                        style="position: absolute; top: 0;left: 32px;">
                        Cânula de Guedel
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Desobstrucao_de_VA" id="Desobstrucao_de_VA">
                    <label class="form-check-label" for="Desobstrucao_de_VA"
                        style="position: absolute; top: 0;left: 32px;">
                        Desobstrução de V.A.
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Emprego_do_DEA" id="Emprego_do_DEA">
                    <label class="form-check-label" for="Emprego_do_DEA"
                        style="position: absolute; top: 0;left: 32px;">
                        Emprego do D.E.A.
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Gerenciamento_de_Riscos" id="Gerenciamento_de_Riscos">
                    <label class="form-check-label" for="Gerenciamento_de_Riscos"
                        style="position: absolute; top: 0;left: 32px;">
                        Gerenciamento de riscos
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Limpeza_de_Ferimentos" id="Limpeza_de_Ferimentos">
                    <label class="form-check-label" for="Limpeza_de_Ferimentos"
                        style="position: absolute; top: 0;left: 32px;">
                        Limpeza de ferimentos
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Curativos" id="Curativos">
                    <label class="form-check-label" for="Curativos"
                        style="position: absolute; top: 0;left: 32px;">
                        Curativos
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Compressivo" id="Compressivo">
                    <label class="form-check-label" for="Compressivo"
                        style="position: absolute; top: 0;left: 32px;">
                        Compressivo
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Encravamento" id="Encravamento">
                    <label class="form-check-label" for="Encravamento"
                        style="position: absolute; top: 0;left: 32px;">
                        Encravamento
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Ocular" id="Ocular">
                    <label class="form-check-label" for="Ocular"
                        style="position: absolute; top: 0;left: 32px;">
                        Ocular
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Queimadura" id="Queimadura">
                    <label class="form-check-label" for="Queimadura"
                        style="position: absolute; top: 0;left: 32px;">
                        Queimadura
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Simples" id="Simples">
                    <label class="form-check-label" for="Simples"
                        style="position: absolute; top: 0;left: 32px;">
                        Simples
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="tres_Pontas" id="tres_Pontas">
                    <label class="form-check-label" for="tres_Pontas"
                        style="position: absolute; top: 0;left: 32px;">
                        3 pontas
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Imobilacoes" id="Imobilacoes">
                    <label class="form-check-label" for="Imobilacoes"
                        style="position: absolute; top: 0;left: 32px;">
                        Imobilações
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Membro_INF_dir" id="Membro_INF_dir">
                    <label class="form-check-label" for="Membro_INF_dir"
                        style="position: absolute; top: 0;left: 32px;">
                        Membro INF. dir
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Membro_INF_esq" id="Membro_INF_esq">
                    <label class="form-check-label" for="Membro_INF_esq"
                        style="position: absolute; top: 0;left: 32px;">
                        Membro INF. esq
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Membro_SUP_dir" id="Membro_SUP_dir">
                    <label class="form-check-label" for="Membro_SUP_dir"
                        style="position: absolute; top: 0;left: 32px;">
                        Membro SUP. dir
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Membro_SUP_esq" id="Membro_SUP_esq">
                    <label class="form-check-label" for="Membro_SUP_esq"
                        style="position: absolute; top: 0;left: 32px;">
                        Membro SUP. esq
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Quadril" id="Quadril">
                    <label class="form-check-label" for="Quadril"
                        style="position: absolute; top: 0;left: 32px;">
                        Quadril
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Cervical" id="Cervical">
                    <label class="form-check-label" for="Cervical"
                        style="position: absolute; top: 0;left: 32px;">
                        Cervical
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Maca_Sobre_Rodas" id="Maca_Sobre_Rodas">
                    <label class="form-check-label" for="Maca_Sobre_Rodas"
                        style="position: absolute; top: 0;left: 32px;">
                        Maca sobre rodas
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Maca_Rigida" id="Maca_Rigida">
                    <label class="form-check-label" for="Maca_Rigida"
                        style="position: absolute; top: 0;left: 32px;">
                        Maca rígida
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Ponte" id="Ponte">
                    <label class="form-check-label" for="Ponte"
                        style="position: absolute; top: 0;left: 32px;">
                        Ponte
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Retirado_Capacete" id="Retirado_Capacete">
                    <label class="form-check-label" for="Retirado_Capacete"
                        style="position: absolute; top: 0;left: 32px;">
                        Retirado capacete
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="RCP" id="RCP">
                    <label class="form-check-label" for="RCP"
                        style="position: absolute; top: 0;left: 32px;">
                        R.C.P
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Rolamento_90" id="Rolamento_90">
                    <label class="form-check-label" for="flexCheckDefault137"
                        style="position: absolute; top: 0;left: 32px;">
                        Rolamento 90°
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Rolamento_180" id="Rolamento_180">
                    <label class="form-check-label" for="Rolamento_180"
                        style="position: absolute; top: 0;left: 32px;">
                        Rolamento 180°
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Tomada_Decisao" id="Tomada_Decisao">
                    <label class="form-check-label" for="Tomada_Decisao"
                        style="position: absolute; top: 0;left: 32px;">
                        Tomada decisão
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Tratado_Choque" id="Tratado_Choque">
                    <label class="form-check-label" for="Tratado_Choque"
                        style="position: absolute; top: 0;left: 32px;">
                        Tratado choque
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Uso_de_Canula" id="Uso_de_Canula">
                    <label class="form-check-label" for="Uso_de_Canula"
                        style="position: absolute; top: 0;left: 32px;">
                        Uso de cânula
                    </label>
                </div>
                <div class="row" style="position: relative; height: 30px;display: flex;align-items: center;">
                    <input class="form-check-input" type="checkbox" name="Uso_Colar" id="Uso_Colar">
                    <label class="form-check-label" for="Uso_Colar"
                        style="position: absolute; top: 0;left: 32px; display: flex;align-items: center;">
                        Uso colar <input type="text" name="tamColar" id="tamColar" placeholder="Tamanho:" style="display: flex;
                width: 150px;
                padding: 0.200rem 0.50rem;
                margin-left: 50px;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #212529;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                border-radius: 0.25rem;
                transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;">
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Uso_KED" id="Uso_KED">
                    <label class="form-check-label" for="Uso_KED"
                        style="position: absolute; top: 0;left: 32px;">
                        Uso KED
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Uso_TTF" id="Uso_TTF">
                    <label class="form-check-label" for="Uso_TTF"
                        style="position: absolute; top: 0;left: 32px;">
                        Uso TTF
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Ventilacao_Suporte" id="Ventilacao_Suporte">
                    <label class="form-check-label" for="Ventilacao_Suporte"
                        style="position: absolute; top: 0;left: 32px;">
                        Ventilação suporte
                    </label>
                </div>
                <div class="row" style="position: relative; height: 30px;display: flex;align-items: center;">
                    <input class="form-check-input" type="checkbox" name="Oxigenioterapia" id="Oxigenioterapia">
                    <label class="form-check-label" for="Oxigenioterapia"
                        style="position: absolute; top: 0;left: 32px; display: flex;align-items: center;">
                        Oxigenioterapia <input type="text" name="Oxigenioterapia_LPM" id="Oxigenioterapia_LPM" placeholder="LPM:" style="display: flex;
                width: 150px;
                padding: 0.200rem 0.50rem;
                margin-left: 50px;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #212529;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                border-radius: 0.25rem;
                transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;">
                    </label>
                </div>
                <div class="row" style="position: relative; height: 30px;display: flex;align-items: center;">
                    <input class="form-check-input" type="checkbox" name="Reanimador" id="Reanimador">
                    <label class="form-check-label" for="Reanimador"
                        style="position: absolute; top: 0;left: 32px; display: flex;align-items: center;">
                        Reanimador <input type="text" name="Reanimador_LPM" id="Reanimador_LPM" placeholder="LPM:" style="display: flex;
                width: 150px;
                padding: 0.200rem 0.50rem;
                margin-left: 50px;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #212529;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                border-radius: 0.25rem;
                transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;">
                    </label>
                </div>
                <hr>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Meios_Auxiliares" id="Meios_Auxiliares">
                    <label class="form-check-label" for="Meios_Auxiliares"
                        style="position: absolute; top: 0;left: 32px;">
                        Meios auxiliares
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Celesc" id="Celesc">
                    <label class="form-check-label" for="Celesc"
                        style="position: absolute; top: 0;left: 32px;">
                        Celesc
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="Def_Civil" id="Def_Civil">
                    <label class="form-check-label" for="Def_Civil"
                        style="position: absolute; top: 0;left: 32px;">
                        Def. Civil
                    </label>
                </div>
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="IGP_PC" id="IGP_PC">
                    <label class="form-check-label" for="IGP_PC"
                        style="position: absolute; top: 0;left: 32px;">
                        IGP / PC
                    </label>
                </div>
                <div class="row" style="position: relative; height: 46px;display: flex; align-items: center;">
                    <input class="form-check-input" type="checkbox" name="Policia" id="Policia">
                    <label class="form-check-label" for="Policia" style="position: absolute; top: 0;left: 32px;">
                        <div class="btn-group dropend" style="display: flex; align-items: center; width: 100px;padding-top: 4px; padding-bottom: 4px">
                            <select class="btn btn-secondary" name="Policia_Value" id="Policia_Value">
                                <option value=""></option>
                                <option value="Civil">Cívil</option>
                                <option value="Militar">Militar</option>
                                <option value="PRE">PRE</option>
                                <option value="PRF">PRF</option>
                            </select>
                        </div>
                    </label>
                </div>
                <div class="row" style="position: relative; height: 46px;display: flex; align-items: center;">
                    <input class="form-check-input" type="checkbox" name="Samu" id="Samu">
                    <label class="form-check-label" for="Samu" style="position: absolute; top: 0;left: 32px;">
                        <div class="btn-group dropend" style="display: flex; align-items: center; width: 100px;padding-top: 4px; padding-bottom: 4px">
                            <select class="btn btn-secondary" name="Samu_Value" id="Samu_Value">
                                <option value=""></option>
                                <option value="USA">USA</option>
                                <option value="USB">USB</option>
                            </select>
                        </div>
                    </label>
                </div>
                <!-- CASO NÃO FUNCIONE COM A TAG BUTTON MUDE PARA SELECT(NSEI COMO A TAG BUTTON VAI RESPONDER COM O BANCO), VOU DEIXAR UM CODIGO COMMITADO AQUI EMBAIXO PARA USAR O SELECT AO INVES DO BUTTON -->
                <!-- CASO NÃO FUNCIONE COM A TAG BUTTON MUDE PARA SELECT(NSEI COMO A TAG BUTTON VAI RESPONDER COM O BANCO), VOU DEIXAR UM CODIGO COMMITADO AQUI EMBAIXO PARA USAR O SELECT AO INVES DO BUTTON -->
                <!-- CASO NÃO FUNCIONE COM A TAG BUTTON MUDE PARA SELECT(NSEI COMO A TAG BUTTON VAI RESPONDER COM O BANCO), VOU DEIXAR UM CODIGO COMMITADO AQUI EMBAIXO PARA USAR O SELECT AO INVES DO BUTTON -->

                <!-- <div class="btn-group dropend" style="display: flex; align-items: center; width: 100px;padding-top: 4px; padding-bottom: 4px">
                  <select class="btn btn-secondary dropdown-toggle" style="display: flex; align-items: center; width: 100px;" data-bs-toggle="dropdown" aria-expanded="false">
                    Samu
                  <option>USA</a></li>
                  <option>USB</a></li>
                  </select>
                </div> 
              -->
                <div class="row" style="position: relative;">
                    <input class="form-check-input" type="checkbox" name="CIT" id="CIT">
                    <label class="form-check-label" for="CIT"
                        style="position: absolute; top: 0;left: 32px;">
                        CIT
                    </label>
                </div>
                <div class="row" style="position: relative; display: flex; align-items: center;height: 46px;">
                    <input class="form-check-input" type="checkbox" name="outrosMeios" id="outrosMeios">
                    <input type="text" name="OutrosMeios" class="form-control" style="width: 200px; margin-left: 25px;">
                </div>
            </div>
        </div>
    </div>
    <!--                              -->
    <!-- ✓ Materiais Utilizados Desc. -->
    <!--                              -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingThirteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseThirteen" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseThirteen">
                Materiais utilizados descartável
            </button>
        </h2>
        <div id="panelsStayOpen-collapseThirteen" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingThirteen">
            <div class="accordion-body">
                <div class="row">
                    <div class="col-4">Material</div>
                    <div class="col-2">Quant</div>
                    <div class="col-4">Material</div>
                    <div class="col-2">Quant</div>
                </div>
                <div class="row" style="padding-top: 4px; padding-bottom: 4px; display: flex; align-items: center;">
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault156"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault156"
                            style="position: absolute; top: 0;left: 32px;">
                            Ataduras
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantAtaduras" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault157"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault157"
                            style="position: absolute; top: -8px;left: 32px;">
                            Manta aluminizada
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantManta" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                </div>
                <div class="row" style="padding-top: 4px; padding-bottom: 4px; display: flex; align-items: center;">
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault158"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault158"
                            style="position: absolute; top: -8px;left: 32px;">
                            Cateter TP. ocúlos
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantCateter" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault159"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault159"
                            style="position: absolute; top: -0;left: 32px;">
                            Pás do DEA
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantPas" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                </div>
                <div class="row" style="padding-top: 4px; padding-bottom: 4px; display: flex; align-items: center;">
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault160"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault160"
                            style="position: absolute; top: -8px;left: 32px;">
                            Compressa comum
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantCompressa" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault161"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault161"
                            style="position: absolute; top: -8px;left: 32px;">
                            Sonda de aspiração
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantSonda" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                </div>
                <div class="row" style="padding-top: 4px; padding-bottom: 4px; display: flex; align-items: center;">
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault162"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault162"
                            style="position: absolute; top: 0;left: 32px;">
                            Kit's
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantKits" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault163"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault163"
                            style="position: absolute; top: -8px;left: 32px;">
                            Soro fisiológico
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantSoro" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                </div>
                <div class="row" style="padding-top: 4px; padding-bottom: 4px; display: flex; align-items: center;">
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault164"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault164"
                            style="position: absolute; top: -8px;left: 32px;">
                            Luvas Desc. (Pares)
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantLuvas" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault165"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault165"
                            style="position: absolute; top: 0;left: 32px;">
                            Talas PAP.
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantTalas" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                </div>
                <div class="row" style="padding-top: 4px; padding-bottom: 4px; display: flex; align-items: center;">
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault166"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault166"
                            style="position: absolute; top: 0;left: 32px;">
                            Máscara Desc
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantMascara" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault167"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault167"
                            style="position: absolute; top: -8px;left: 32px;">
                            <input type="text" class="form-control" name="Outro_Mat" id="">
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantOutro" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--                                 -->
    <!-- ✓ Materiais Utilizados N. Desc. -->
    <!--                                 -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingFourteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseFourteen" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseFourteen">
                Materiais utilizados deixado no hospital
            </button>
        </h2>
        <div id="panelsStayOpen-collapseFourteen" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingFourteen">
            <div class="accordion-body">
                <div class="row">
                    <div class="col-4">Material</div>
                    <div class="col-2">Quant</div>
                    <div class="col-4">Material</div>
                    <div class="col-2">Quant</div>
                </div>
                <div class="row" style="padding-top: 4px; padding-bottom: 4px; display: flex; align-items: center;">
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault89"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault89"
                            style="position: absolute; top: -8px;left: 32px;">
                            Base do estabiliza.
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantBase" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault89"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault89"
                            style="position: absolute; top: 0;left: 32px;">
                            T.T.F.
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantTTF" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                </div>
                <div class="row" style="padding-top: 4px; padding-bottom: 4px; display: flex; align-items: center;">
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault89"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault89"
                            style="position: absolute; top: 0;left: 32px;">
                            Colar
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="QuantColar1" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault89"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault89"
                            style="position: absolute; top: -8px;left: 32px;">
                            Tirante Aranha
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantTiranteA" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                </div>
                <div class="row" style="padding-top: 4px; padding-bottom: 4px; display: flex; align-items: center;">
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault89"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault89"
                            style="position: absolute; top: 0;left: 32px;">
                            Colar
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantColar2" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault89"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault89"
                            style="position: absolute; top: -8px;left: 32px;">
                            Tirante de cabeça
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantTiranteC" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                </div>
                <div class="row" style="padding-top: 4px; padding-bottom: 4px; display: flex; align-items: center;">
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault89"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault89"
                            style="position: absolute; top: -8px;left: 32px;">
                            Coxins Estabiliza
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantCoxins" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault89"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault89"
                            style="position: absolute; top: 0;left: 32px;">
                            Cânula
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantCanula" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                </div>
                <div class="row" style="padding-top: 4px; padding-bottom: 4px; display: flex; align-items: center;">
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault89"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault89"
                            style="position: absolute; top: 0;left: 32px;">
                            KED
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantKED" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault89"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault89"
                            style="position: absolute; top: -8px;left: 32px;">
                            <input type="text" class="form-control" name="Outro_Mat1" id="Outro_Mat1">
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantOutro1" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                </div>
                <div class="row" style="padding-top: 4px; padding-bottom: 4px; display: flex; align-items: center;">
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault89"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault89"
                            style="position: absolute; top: 0;left: 32px;">
                            Maca rígida
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantMaca" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                    <div class="col-4" style="position: relative;">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault89"
                            style="display: block; ">
                        <label class="form-check-label" for="flexCheckDefault89"
                            style="position: absolute; top: -8px;left: 32px;">
                            <input type="text" class="form-control" name="Outro_Mat2" id="Outro_Mat2">
                        </label>
                    </div>
                    <div class="col-2"
                        style="border-left: 1px solid black; border-right:1px solid black; padding: 0;display: flex;flex-direction: column;align-items: center;">
                        <input type="text" name="quantOutro2" class="form-control" style="width: 80%;padding: 5px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--                   -->
    <!-- ✓ Termo de recusa -->
    <!--                   -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingFifteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseFifteen" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseFifteen">
                Termo de recusa de atendimento e/ou transporte
            </button>
        </h2>
        <div id="panelsStayOpen-collapseFifteen" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingFifteen">
            <div class="accordion-body">
                <div class="row" style="position: relative;height: 40px">Nome: <input type="text" name="Nome_PacienteT"
                        class="form-control" id="Nome_PacienteT" style="width: 250px; position: absolute; right: 5px;">
                </div>
                <div class="row" style="position: relative;height: 40px">RG Nº: <input type="text" name="RG_PacienteT" class="form-control" id="RG_PacienteT"
                        style="width: 250px; position: absolute; right: 5px;">
                </div>
            </div>
        </div>
    </div>
    <!--                           -->
    <!-- ✓ Observações Importantes -->
    <!--                           -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingSixteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseSixteen" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseSixteen">
                Observações importantes
            </button>
        </h2>
        <div id="panelsStayOpen-collapseSixteen" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingSixteen">
            <div class="accordion-body">
                <input type="text" name="obsImpor" class="form-control">
            </div>
        </div>
    </div>
    <!--                              -->
    <!-- ✓ Anamnese Emergência Médica -->
    <!--                              -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingSeventeen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseSeventeen" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseSeventeen">
                Anamnese da emergência médica
            </button>
        </h2>
        <div id="panelsStayOpen-collapseSeventeen" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingSeventeen">
            <div class="accordion-body">
                <div class="row">
                    <p class="text-center">O que aconteceu (Sinais e Sintomas)</p>
                </div>
                <div class="row"><input type="text" name="OqueAconteceu" class="form-control"></div>
                <div class="row" style="padding-top: 5px; padding-bottom: 5px;">
                    <div class="col-6">Aconteceu Outras vezes?</div>
                    <div class="col-auto">
                        <input class="form-check-input" type="radio" name="AconteceuOutrasVezes" id="AconteceuOutrasVezesSim" value="Sim">
                        <label class="form-check-label" for="flexRadioDefaultSim0">
                            Sim
                        </label>
                        <input class="form-check-input" type="radio" name="AconteceuOutrasVezes" id="AconteceuOutrasVezesNao" value="Não">
                        <label class="form-check-label" for="flexRadioDefaultNao0">
                            Não
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>A quanto tempo isto aconteceu:</p>
                    </div>
                    <div class="col-8">
                        <input type="text" name="QuandoAconteceu" class="form-control">
                    </div>
                </div>
                <div class="row" style="padding-top: 5px; padding-bottom: 5px;">
                    <div class="col-6">Tem algum problema de saúde?</div>
                    <div class="col-auto">
                        <input class="form-check-input" type="radio" name="ProblemaSaude" id="ProblemaSaudeSim" value="Sim">
                        <label class="form-check-label" for="flexRadioDefaultSim1">
                            Sim
                        </label>
                        <input class="form-check-input" type="radio" name="ProblemaSaude" id="ProblemaSaudeNao" value="Não">
                        <label class="form-check-label" for="flexRadioDefaultNao1">
                            Não
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Quais:</p>
                    </div>
                    <div class="col-8">
                        <input type="text" name="QuaisProblemas" class="form-control">
                    </div>
                </div>
                <div class="row" style="padding-top: 5px; padding-bottom: 5px;">
                    <div class="col-6">Faz uso de medicação:</div>
                    <div class="col-auto">
                        <input class="form-check-input" type="radio" name="UsoMedicacao" id="UsoMedicacaoSim" value="Sim">
                        <label class="form-check-label" for="flexRadioDefaultSim2">
                            Sim
                        </label>
                        <input class="form-check-input" type="radio" name="UsoMedicacao" id="UsoMedicacaoNao" value="Não"> 
                        <label class="form-check-label" for="flexRadioDefaultNao2">
                            Não
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <p>Horario da ultima medicação:</p>
                    </div>
                    <div class="col-4"><input type="time" name="HorarioMedicacao" class="form-control"></div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Quais:</p>
                    </div>
                    <div class="col-8">
                        <input type="text" name="MedicacaoQuais" class="form-control">
                    </div>
                </div>
                <div class="row" style="padding-top: 5px; padding-bottom: 5px;">
                    <div class="col-6">Alérgico a alguma coisa?</div>
                    <div class="col-auto">
                        <input class="form-check-input" type="radio" name="TemAlergia" id="TemAlergiaSim" value="Sim">
                        <label class="form-check-label" for="flexRadioDefaultSim3">
                            Sim
                        </label>
                        <input class="form-check-input" type="radio" name="TemAlergia" id="TemAlergiaNao" value="Não">
                        <label class="form-check-label" for="flexRadioDefaultNao3">
                            Não
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Oque:</p>
                    </div>
                    <div class="col-8">
                        <input type="text" name="TemAlergiaQue" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">Ingeriu alimentos ou liquídos > 6 horas:</div>
                    <div class="col-auto">
                        <input class="form-check-input" type="radio" name="IngeriuAlimento" id="IngeriuAlimentoSim" value="Sim">
                        <label class="form-check-label" for="flexRadioDefaultSim4">
                            Sim
                        </label>
                        <input class="form-check-input" type="radio" name="IngeriuAlimento" id="IngeriuAlimentoNao" value="Não">
                        <label class="form-check-label" for="flexRadioDefaultNao4">
                            Não
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <p>Que horas:</p>
                    </div>
                    <div class="col-4"><input type="time" name="IngeriuAlimentoHoras" class="form-control"></div>
                </div>
            </div>
        </div>
    </div>
    <!--                        -->
    <!-- ✓ Anamnese Gestacional -->
    <!--                        -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingEighteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseEighteen" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseEighteen">
                Anamnese gestacional
            </button>
        </h2>
        <div id="panelsStayOpen-collapseEighteen" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingEighteen">
            <div class="accordion-body">
                <div class="row">
                    <div class="col-4">
                        <p>Período da gestação:</p>
                    </div>
                    <div class="col-8">
                        <input type="text" name="tempoGestacao" class="form-control">
                    </div>
                </div>
                <div class="row" style="padding-top: 5px; padding-bottom: 5px;">
                    <div class="col-6">Fez pré-natal?</div>
                    <div class="col-auto">
                        <input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefaultSim6" value="Sim">
                        <label class="form-check-label" for="flexRadioDefaultSim6">
                            Sim
                        </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault6" id="flexRadioDefaultNao6" value="Não">
                        <label class="form-check-label" for="flexRadioDefaultNao6">
                            Não
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Nome do médico:</p>
                    </div>
                    <div class="col-8">
                        <input type="text" name="nomeMedico" class="form-control">
                    </div>
                </div>
                <div class="row" style="padding-top: 5px; padding-bottom: 5px;">
                    <div class="col-6">Existe a possibilidade de complicações?</div>
                    <div class="col-auto">
                        <input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefaultSim7" value="Sim">
                        <label class="form-check-label" for="flexRadioDefaultSim7">
                            Sim
                        </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault7" id="flexRadioDefaultNao7" value="Não">
                        <label class="form-check-label" for="flexRadioDefaultNao7">
                            Não
                        </label>
                    </div>
                </div>
                <div class="row" style="padding-top: 5px; padding-bottom: 5px;">
                    <div class="col-6">É o primeiro filho?</div>
                    <div class="col-auto">
                        <input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefaultSim8" value="Sim">
                        <label class="form-check-label" for="flexRadioDefaultSim8">
                            Sim
                        </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault8" id="flexRadioDefaultNao8" value="Não">
                        <label class="form-check-label" for="flexRadioDefaultNao8">
                            Não
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Quantos:</p>
                    </div>
                    <div class="col-8">
                        <input type="text" name="numFilhos" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Que horas iniciaram as contrações?</p>
                    </div>
                    <div class="col-8">
                        <input type="text" name="inicoContracoes" class="form-control">
                    </div>
                </div>
                <p>Tempo das contrações</p>
                <div class="row"></div>
                <div class="row">
                    <div class="col-4">
                        <p>Duração:</p>
                    </div>
                    <div class="col-8">
                        <input type="text" name="duracaoContrações" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Intervalo:</p>
                    </div>
                    <div class="col-8">
                        <input type="text" name="intervaloContrações" class="form-control">
                    </div>
                </div>
                <div class="row" style="padding-top: 5px; padding-bottom: 5px;">
                    <div class="col-8">Sente pressão na região do quadril ou vontade de evacuar?</div>
                    <div class="col-auto">
                        <input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefaultSim9" value="Sim">
                        <label class="form-check-label" for="flexRadioDefaultSim9">
                            Sim
                        </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault9" id="flexRadioDefaultNao9" value="Não">
                        <label class="form-check-label" for="flexRadioDefaultNao9">
                            Não
                        </label>
                    </div>
                </div>
                <div class="row" style="padding-top: 5px; padding-bottom: 5px;">
                    <div class="col-6">Já houve ruptura da bolsa?</div>
                    <div class="col-auto">
                        <input class="form-check-input" type="radio" name="flexRadioDefault10" value="Sim"
                            id="flexRadioDefaultSim10">
                        <label class="form-check-label" for="flexRadioDefaultSim10">
                            Sim
                        </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault10" value="Não"
                            id="flexRadioDefaultNao10">
                        <label class="form-check-label" for="flexRadioDefaultNao10">
                            Não
                        </label>
                    </div>
                </div>
                <div class="row" style="padding-top: 5px; padding-bottom: 5px;">
                    <div class="col-6">Foi feito inspeção visual?</div>
                    <div class="col-auto">
                        <input class="form-check-input" type="radio" name="flexRadioDefault11" value="Sim"
                            id="flexRadioDefaultSim11">
                        <label class="form-check-label" for="flexRadioDefaultSim11">
                            Sim
                        </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault11" value="Não"
                            id="flexRadioDefaultNao11">
                        <label class="form-check-label" for="flexRadioDefaultNao11">
                            Não
                        </label>
                    </div>
                </div>
                <div class="row" style="padding-top: 5px; padding-bottom: 5px;">
                    <div class="col-6">Parto realizado?</div>
                    <div class="col-auto">
                        <input class="form-check-input" type="radio" name="flexRadioDefault12" value="Sim"
                            id="flexRadioDefaultSim12">
                        <label class="form-check-label" for="flexRadioDefaultSim12">
                            Sim
                        </label>
                        <input class="form-check-input" type="radio" name="flexRadioDefault12" value="Não"
                            id="flexRadioDefaultNao12">
                        <label class="form-check-label" for="flexRadioDefaultNao12">
                            Não
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Hora do nacimento:</p>
                    </div>
                    <div class="col-8">
                        <input type="time" name="horaNascimento" class="form-control">
                    </div>
                </div>
                <div class="row" style="padding-top: 5px; padding-bottom: 5px;">
                    <div class="col-4">Sexo do Bebe:</div>
                    <div class="col-auto">
                        <input class="form-check-input" type="radio" name="bebeSexo" value="Masculino" id="bebeMasc">
                        <label class="form-check-label" for="bebeMasc">
                            Masculino
                        </label>
                        <input class="form-check-input" type="radio" name="bebeSexo" value="Feminino" id="bebeFem">
                        <label class="form-check-label" for="bebeFem">
                            Feminino
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Nome do Bebe:</p>
                    </div>
                    <div class="col-8">
                        <input type="text" name="bebeNome" class="form-control">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--                           -->
    <!-- ✓ Avaliação da Cinemática -->
    <!--                           -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingNineteen">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseNineteen" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseNineteen">
                Avaliação da cinemática
            </button>
        </h2>
        <div id="panelsStayOpen-collapseNineteen" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingNineteen">
            <div class="accordion-body">
                <div class="row" style="height: 30px;">
                    <div class="col-8">
                        Distúrbio de comportamento</div>
                    <div class="col-4">
                        <input class="form-check-input" type="radio" name="disturbio_comportamento" value="Sim"
                            id="flexRadioDefaultSim5">
                        <label class="form-check-label" for="flexRadioDefaultSim5">
                            Sim
                        </label>
                        <input class="form-check-input" type="radio" name="disturbio_comportamento" value="Não"
                            id="flexRadioDefaultNao5">
                        <label class="form-check-label" for="flexRadioDefaultNao5">
                            Não
                        </label>
                    </div>
                </div>
                <div class="row" style="height: 30px;">
                    <div class="col-8">
                        Encontra de capacete</div>
                    <div class="col-4">
                        <input class="form-check-input" type="radio" name="encontra_capacete" value="Sim"
                            id="flexRadioDefaultSim6">
                        <label class="form-check-label" for="flexRadioDefaultSim6">
                            Sim
                        </label>
                        <input class="form-check-input" type="radio" name="encontra_capacete" value="Não"
                            id="flexRadioDefaultNao6">
                        <label class="form-check-label" for="flexRadioDefaultNao6">
                            Não
                        </label>
                    </div>
                </div>
                <div class="row" style="height: 30px;">
                    <div class="col-8">
                        Encontrado de cinto</div>
                    <div class="col-4">
                        <input class="form-check-input" type="radio" name="encontrado_cinto" value="Sim"
                            id="flexRadioDefaultSim7">
                        <label class="form-check-label" for="flexRadioDefaultSim7">
                            Sim
                        </label>
                        <input class="form-check-input" type="radio" name="encontrado_cinto" value="Não"
                            id="flexRadioDefaultNao7">
                        <label class="form-check-label" for="flexRadioDefaultNao7">
                            Não
                        </label>
                    </div>
                </div>
                <div class="row" style="height: 30px;">
                    <div class="col-8">
                        Para-brisa avariado</div>
                    <div class="col-4">
                        <input class="form-check-input" type="radio" name="para_brisa_avariado" value="Sim"
                            id="flexRadioDefaultSim8">
                        <label class="form-check-label" for="flexRadioDefaultSim8">
                            Sim
                        </label>
                        <input class="form-check-input" type="radio" name="para_brisa_avariado" value="Não"
                            id="flexRadioDefaultNao8">
                        <label class="form-check-label" for="flexRadioDefaultNao8">
                            Não
                        </label>
                    </div>
                </div>
                <div class="row" style="height: 30px;">
                    <div class="col-8">
                        Caminhando na cena</div>
                    <div class="col-4">
                        <input class="form-check-input" type="radio" name="caminhando_na_cena" value="Sim"
                            id="flexRadioDefaultSim9">
                        <label class="form-check-label" for="flexRadioDefaultSim9">
                            Sim
                        </label>
                        <input class="form-check-input" type="radio" name="caminhando_na_cena" value="Não"
                            id="flexRadioDefaultNao9">
                        <label class="form-check-label" for="flexRadioDefaultNao9">
                            Não
                        </label>
                    </div>
                </div>
                <div class="row" style="height: 30px;">
                    <div class="col-8">
                        Painel avariado</div>
                    <div class="col-4">
                        <input class="form-check-input" type="radio" name="painel_avariado" value="Sim"
                            id="flexRadioDefaultSim10">
                        <label class="form-check-label" for="flexRadioDefaultSim10">
                            Sim
                        </label>
                        <input class="form-check-input" type="radio" name="painel_avariado" value="Não"
                            id="flexRadioDefaultNao10">
                        <label class="form-check-label" for="flexRadioDefaultNao10">
                            Não
                        </label>
                    </div>
                </div>
                <div class="row" style="height: 30px;">
                    <div class="col-8">
                        Volante torcido</div>
                    <div class="col-4">
                        <input class="form-check-input" type="radio" name="volante_torcido" value="Sim"
                            id="flexRadioDefaultSim11">
                        <label class="form-check-label" for="flexRadioDefaultSim11">
                            Sim
                        </label>
                        <input class="form-check-input" type="radio" name="volante_torcido" value="Não"
                            id="flexRadioDefaultNao11">
                        <label class="form-check-label" for="flexRadioDefaultNao11">
                            Não
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--                   -->
    <!-- ✓ Detalhes Viagem -->
    <!--                   -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwenty">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-collapseTwenty" aria-expanded="false"
                aria-controls="panelsStayOpen-collapseTwenty">
                Detalhes Viagem
            </button>
        </h2>
        <div id="panelsStayOpen-collapseTwenty" class="accordion-collapse collapse"
            aria-labelledby="panelsStayOpen-headingTwenty">
            <div class="accordion-body">
                <div class="row">
                    <div class="col-4">
                        <p>Número USB:</p>
                    </div>
                    <div class="col-8">
                        <input type="text" name="NumeroUSB" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <p>Código. IR:</p>
                    </div>
                    <div class="col-2">
                        <input type="text" name="CodigoIR" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Número Ocorrência:</p>
                    </div>
                    <div class="col-8">
                        <input type="text" name="NumeroOcorrencia" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-10">
                        <p>Código. PS:</p>
                    </div>
                    <div class="col-2">
                        <input type="text" name="CodigoPS" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>Desp:</p>
                    </div>
                    <div class="col-8">
                        <input type="text" name="Desp" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>H. CH:</p>
                    </div>
                    <div class="col-8">
                        <input type="text" name="HCH" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <p>KM Final:</p>
                    </div>
                    <div class="col-8">
                        <input type="text" name="KMFinal" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <p>Código. SIA/SUS:</p>
                    </div>
                    <div class="col-4">
                        <input type="text" name="CodigoSIASUS" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <input class="btn btn-primary" type="submit" value="Enviar" style="width: 100%;">
        </form>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

</body>
<script>
    //desmarcar checkbox forma condução
    document.querySelectorAll('input[name="forma_conducao"]').forEach(function (checkbox) {
        checkbox.addEventListener('change', function () {
            document.querySelectorAll('input[name="forma_conducao"]').forEach(function (otherCheckbox) {
                if (otherCheckbox !== checkbox) {
                    otherCheckbox.checked = false;
                }
            });
        });
    });

    // Obtém o elemento de input pelo ID
    var inputIdade = document.getElementById("idadePaciente_DP");

    // Adiciona um ouvinte de evento de input para detectar alterações no valor
    inputIdade.addEventListener("input", function () {
        // Obtém o valor atual do campo de entrada
        var valorIdade = inputIdade.value;

        // Exibe o valor no console (ou faça o que quiser com o valor)
        console.log("Valor da idade:", valorIdade);
    });

    // Obtém o elemento de input pelo ID
    var inputIdade = document.getElementById("idadePaciente_DP");

    // Obtém as divs que você deseja afetar
    var menor5 = document.getElementById("menor5");
    var maior5 = document.getElementById("maior5");
    var menor6 = document.getElementById("menor6");
    var maior6 = document.getElementById("maior6");
    var menor7 = document.getElementById("menor7");
    var maior7 = document.getElementById("maior7");

    inputIdade.addEventListener("input", function () {

        var valorIdade = parseInt(inputIdade.value);

        if (valorIdade > 4) {
            menor5.style.display = "none";
            maior5.style.display = "block";
            menor6.style.display = "none";
            maior6.style.display = "block";
            menor7.style.display = "none";
            maior7.style.display = "block";
        } else {
            menor5.style.display = "block";
            maior5.style.display = "none";
            menor6.style.display = "block";
            maior6.style.display = "none";
            menor7.style.display = "block";
            maior7.style.display = "none";
        }
    });

    // var inputIdade = document.getElementById("idadePaciente_DP");
    // var menor5 = document.getElementById("menor5");
    // var maior5 = document.getElementById("maior5");

    // inputIdade.addEventListener("input", function() {
    //   var valorIdade = parseInt(inputIdade.value);

    //   if (valorIdade > 4) {
    //     menor5.style.display = "none";
    //     maior5.style.display = "block";
    //   } else {
    //     menor5.style.display = "block";
    //     maior5.style.display = "none";
    //   }
    // });
</script>

</html>