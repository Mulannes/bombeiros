-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 11:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `bombeirosdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `fichas`
--

CREATE TABLE `fichas` (
  `id_fichas` int(11) NOT NULL,
  `data_ficha` date NOT NULL,
  `nome_paciente` varchar(255) NOT NULL,
  `idAnamnese_Emergencia_Medica` int(11) NOT NULL,
  `idAnamnese_Gestacional` int(11) NOT NULL,
  `idAvaliacao_Cinematica` int(11) NOT NULL,
  `idFicha_Avaliacao_Glasgow` int(11) NOT NULL,
  `idFicha_Localizacao_dos_Traumas` int(11) NOT NULL,
  `idMateriais_Utilizados_Deixados` int(11) NOT NULL,
  `idMateriais_Utilizados_Descartavel` int(11) NOT NULL,
  `idObjetos_Recolhidos` int(11) NOT NULL,
  `idObservacoes_Importantes` int(11) NOT NULL,
  `idFicha_Paciente` int(11) NOT NULL,
  `idProblemas_Encontrados` int(11) NOT NULL,
  `idProcedimentos_Efetuados` int(11) NOT NULL,
  `idSinais_e_Sintomas` int(11) NOT NULL,
  `idFicha_Sinais_Vitais` int(11) NOT NULL,
  `idTermoRecusa` int(11) NOT NULL,
  `idTipo_de_Ocorrencia` int(11) NOT NULL,
  `idFicha_Decisao_Transporte` int(11) NOT NULL,
  `idDetalhes_Viagem` int(11) NOT NULL,
  `idFicha_Forma_de_Conducao` int(11) NOT NULL,
  `idFicha_Transporte_Vitima_Era` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_anamnese_emergencia_medica`
--

CREATE TABLE `ficha_anamnese_emergencia_medica` (
  `idAnamnese_Emergencia_Medica` int(11) NOT NULL,
  `que_aconteceu` text NOT NULL,
  `vezes_aconteceu` varchar(3) NOT NULL,
  `tempo_aconteceu` text NOT NULL,
  `problema_saude` varchar(3) NOT NULL,
  `qual_problema` text NOT NULL,
  `uso_medicacao` varchar(3) NOT NULL,
  `horario_medicacao` time NOT NULL,
  `qual_medicacao` text NOT NULL,
  `alergico` varchar(3) NOT NULL,
  `qual_alergia` text NOT NULL,
  `ingeriu_alimentos` varchar(3) NOT NULL,
  `ingeriu_horas` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_anamnese_gestacional`
--

CREATE TABLE `ficha_anamnese_gestacional` (
  `idAnamnese_Gestacional` int(11) NOT NULL,
  `tempoGestacao` varchar(255) DEFAULT NULL,
  `fezPreNatal` varchar(3) DEFAULT NULL,
  `nomeMedico` varchar(255) DEFAULT NULL,
  `complicacoes` varchar(3) DEFAULT NULL,
  `primeiroFilho` varchar(3) DEFAULT NULL,
  `numFilhos` varchar(11) DEFAULT NULL,
  `inicioContracoes` varchar(255) DEFAULT NULL,
  `duracaoContracoes` varchar(255) DEFAULT NULL,
  `intervaloContracoes` varchar(255) DEFAULT NULL,
  `pressaoQuadril` varchar(3) DEFAULT NULL,
  `rupturaBolsa` varchar(3) DEFAULT NULL,
  `inspecaoVisual` varchar(3) DEFAULT NULL,
  `partoRealizado` varchar(3) DEFAULT NULL,
  `horaNascimento` time DEFAULT NULL,
  `bebeSexo` varchar(10) DEFAULT NULL,
  `bebeNome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_avaliacao_cinematica`
--

CREATE TABLE `ficha_avaliacao_cinematica` (
  `idAvaliacao_Cinematica` int(11) NOT NULL,
  `disturbio_comportamento` varchar(3) DEFAULT NULL,
  `encontra_capacete` varchar(3) DEFAULT NULL,
  `encontrado_cinto` varchar(3) DEFAULT NULL,
  `para_brisa_avariado` varchar(3) DEFAULT NULL,
  `caminhando_na_cena` varchar(3) DEFAULT NULL,
  `painel_avariado` varchar(3) DEFAULT NULL,
  `volante_torcido` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_avaliacao_glasgow`
--

CREATE TABLE `ficha_avaliacao_glasgow` (
  `idFicha_Avaliacao_Glasgow` int(11) NOT NULL,
  `Abertura_Ocular` varchar(99) DEFAULT NULL,
  `Resposta_Verbal` varchar(99) DEFAULT NULL,
  `Resposta_Motora` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_localizacao_dos_traumas`
--

CREATE TABLE `ficha_localizacao_dos_traumas` (
  `idFicha_Localizacao_dos_Traumas` int(11) NOT NULL,
  `local1` varchar(45) DEFAULT NULL,
  `lado1` varchar(45) DEFAULT NULL,
  `face1` varchar(45) DEFAULT NULL,
  `tipo1` varchar(45) DEFAULT NULL,
  `local2` varchar(45) DEFAULT NULL,
  `lado2` varchar(45) DEFAULT NULL,
  `face2` varchar(45) DEFAULT NULL,
  `tipo2` varchar(45) DEFAULT NULL,
  `local3` varchar(45) DEFAULT NULL,
  `lado3` varchar(45) DEFAULT NULL,
  `face3` varchar(45) DEFAULT NULL,
  `tipo3` varchar(45) DEFAULT NULL,
  `local4` varchar(45) DEFAULT NULL,
  `lado4` varchar(45) DEFAULT NULL,
  `face4` varchar(45) DEFAULT NULL,
  `tipo4` varchar(45) DEFAULT NULL,
  `cabeca` varchar(45) NOT NULL,
  `pescoco` varchar(45) NOT NULL,
  `t_ant` varchar(45) NOT NULL,
  `t_pos` varchar(45) NOT NULL,
  `genit` varchar(45) NOT NULL,
  `MID` varchar(45) NOT NULL,
  `MIE` varchar(45) NOT NULL,
  `MSD` varchar(45) NOT NULL,
  `MSE` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_materiais_utilizados_deixados`
--

CREATE TABLE `ficha_materiais_utilizados_deixados` (
  `idMateriais_Utilizados_Deixados` int(11) NOT NULL,
  `base` varchar(10) NOT NULL,
  `colar1` varchar(10) NOT NULL,
  `colar2` varchar(10) NOT NULL,
  `coxins` varchar(10) NOT NULL,
  `KED` varchar(10) NOT NULL,
  `maca` varchar(10) NOT NULL,
  `TTF` varchar(10) NOT NULL,
  `tirante_aranha` varchar(10) NOT NULL,
  `tirante_cabeca` varchar(10) NOT NULL,
  `canula` varchar(10) NOT NULL,
  `outro_campo1` varchar(99) NOT NULL,
  `outro_valor1` varchar(10) NOT NULL,
  `outro_campo2` varchar(99) NOT NULL,
  `outro_valor2` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_materiais_utilizados_descartavel`
--

CREATE TABLE `ficha_materiais_utilizados_descartavel` (
  `idMateriais_Utilizados_Descartavel` int(11) NOT NULL,
  `ataduras` varchar(10) NOT NULL,
  `cateter` varchar(10) NOT NULL,
  `compressa` varchar(10) NOT NULL,
  `kit` varchar(10) NOT NULL,
  `luvas` varchar(10) NOT NULL,
  `mascara` varchar(10) NOT NULL,
  `manta` varchar(10) NOT NULL,
  `pas` varchar(10) NOT NULL,
  `sonda` varchar(10) NOT NULL,
  `soro` varchar(10) NOT NULL,
  `talas` varchar(10) NOT NULL,
  `outro_nome` varchar(99) NOT NULL,
  `outro_valor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_objetos_recolhidos`
--

CREATE TABLE `ficha_objetos_recolhidos` (
  `idObjetos_Recolhidos` int(11) NOT NULL,
  `objetos_recolhidos` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_observacoes_importantes`
--

CREATE TABLE `ficha_observacoes_importantes` (
  `idObservacoes_Importantes` int(11) NOT NULL,
  `observacoes_importantes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_paciente`
--

CREATE TABLE `ficha_paciente` (
  `idFicha_Paciente` int(11) NOT NULL,
  `data_ocorrencia` date NOT NULL,
  `genero_paciente` varchar(9) NOT NULL,
  `nome_hospital` varchar(255) NOT NULL,
  `nome_paciente` varchar(45) DEFAULT NULL,
  `idade_paciente` varchar(3) DEFAULT NULL,
  `CPF_paciente` varchar(11) DEFAULT NULL,
  `telefone_paciente` varchar(12) DEFAULT NULL,
  `nome_acompanhante` varchar(45) DEFAULT NULL,
  `idade_acompanhante` varchar(3) DEFAULT NULL,
  `local_da_ocorrencia` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_problemas_encontrados`
--

CREATE TABLE `ficha_problemas_encontrados` (
  `idProblemas_Encontrados` int(11) NOT NULL,
  `psiquiatrico` int(11) NOT NULL,
  `obstetrico` varchar(99) NOT NULL,
  `respiratorio` varchar(99) NOT NULL,
  `diabetes` varchar(99) NOT NULL,
  `transporte` varchar(99) NOT NULL,
  `outros` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_procedimentos_efetuados`
--

CREATE TABLE `ficha_procedimentos_efetuados` (
  `idProcedimentos_Efetuados` int(11) NOT NULL,
  `Aspiracao` int(11) DEFAULT NULL,
  `Avalicao_Inicial` int(11) DEFAULT NULL,
  `Avaliacao_Dirigida` int(11) DEFAULT NULL,
  `Avaliacao_Continuada` int(11) DEFAULT NULL,
  `Chave_de_Rautek` int(11) DEFAULT NULL,
  `Canula_de_Guedel` int(11) DEFAULT NULL,
  `Desobstrucao_de_VA` int(11) DEFAULT NULL,
  `Emprego_do_DEA` int(11) DEFAULT NULL,
  `Gerenciamento_de_Riscos` int(11) DEFAULT NULL,
  `Limpeza_de_Ferimentos` int(11) DEFAULT NULL,
  `Curativos` int(11) DEFAULT NULL,
  `Compressivo` int(11) DEFAULT NULL,
  `Encravamento` int(11) DEFAULT NULL,
  `Ocular` int(11) DEFAULT NULL,
  `Queimadura` int(11) DEFAULT NULL,
  `Simples` int(11) DEFAULT NULL,
  `tres_Pontas` int(11) DEFAULT NULL,
  `Imobilacoes` int(11) DEFAULT NULL,
  `Membro_INF_dir` int(11) DEFAULT NULL,
  `Membro_INF_esq` int(11) DEFAULT NULL,
  `Membro_SUP_dir` int(11) DEFAULT NULL,
  `Membro_SUP_esq` int(11) DEFAULT NULL,
  `Quadril` int(11) DEFAULT NULL,
  `Cervical` int(11) DEFAULT NULL,
  `Maca_Sobre_Rodas` int(11) DEFAULT NULL,
  `Maca_Rigida` int(11) DEFAULT NULL,
  `Ponte` int(11) DEFAULT NULL,
  `Retirado_Capacete` int(11) DEFAULT NULL,
  `RCP` int(11) DEFAULT NULL,
  `Rolamento_90` int(11) DEFAULT NULL,
  `Rolamento_180` int(11) DEFAULT NULL,
  `Tomada_Decisao` int(11) DEFAULT NULL,
  `Tratado_Choque` int(11) DEFAULT NULL,
  `Uso_de_Canula` int(11) DEFAULT NULL,
  `Uso_Colar` int(11) DEFAULT NULL,
  `tamColar` varchar(10) DEFAULT NULL,
  `Uso_KED` int(11) DEFAULT NULL,
  `Uso_TTF` int(11) DEFAULT NULL,
  `Ventilacao_Suporte` int(11) DEFAULT NULL,
  `Oxigenioterapia` int(11) DEFAULT NULL,
  `Oxigenioterapia_LPM` varchar(10) DEFAULT NULL,
  `Reanimador` int(11) DEFAULT NULL,
  `Reanimador_LPM` varchar(10) DEFAULT NULL,
  `Meios_Auxiliares` int(11) DEFAULT NULL,
  `Celesc` int(11) DEFAULT NULL,
  `Def_Civil` int(11) DEFAULT NULL,
  `IGP_PC` int(11) DEFAULT NULL,
  `Policia` int(11) DEFAULT NULL,
  `Policia_Value` varchar(7) DEFAULT NULL,
  `Samu` int(11) DEFAULT NULL,
  `Samu_Value` varchar(3) DEFAULT NULL,
  `CIT` int(11) DEFAULT NULL,
  `OutrosMeios` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_sinais_e_sintomas`
--

CREATE TABLE `ficha_sinais_e_sintomas` (
  `idSinais_e_Sintomas` int(11) NOT NULL,
  `abdomen_sensivel_rigido` int(11) DEFAULT NULL,
  `afundamento_cranio` int(11) DEFAULT NULL,
  `agitacao` int(11) DEFAULT NULL,
  `amnesia` int(11) DEFAULT NULL,
  `angna_peito` int(11) DEFAULT NULL,
  `apneia` int(11) DEFAULT NULL,
  `bradicardia` int(11) DEFAULT NULL,
  `bradipneia` int(11) DEFAULT NULL,
  `bronco_aspiracao` int(11) DEFAULT NULL,
  `cefaleia` int(11) DEFAULT NULL,
  `cianose_labios` int(11) NOT NULL,
  `cianose_extremidade` int(11) NOT NULL,
  `convulsao` int(11) DEFAULT NULL,
  `decorticacao` int(11) DEFAULT NULL,
  `deformidade` int(11) DEFAULT NULL,
  `descerebracao` int(11) DEFAULT NULL,
  `desmaio` int(11) DEFAULT NULL,
  `desvio_traqueia` int(11) DEFAULT NULL,
  `despineia` int(11) DEFAULT NULL,
  `dor_local` int(11) DEFAULT NULL,
  `edema_generalizado` int(11) NOT NULL,
  `edema_localizado` int(11) NOT NULL,
  `enfisema_subcutaneo` int(11) DEFAULT NULL,
  `extase_jugular` int(11) DEFAULT NULL,
  `face_palida` int(11) DEFAULT NULL,
  `hemorragia_interna` int(11) NOT NULL,
  `hemorragia_externa` int(11) NOT NULL,
  `hipertensao` int(11) DEFAULT NULL,
  `hipotensao` int(11) DEFAULT NULL,
  `nauseas_vomitos` int(11) DEFAULT NULL,
  `nasoragia` int(11) DEFAULT NULL,
  `obito` int(11) DEFAULT NULL,
  `otorreia` int(11) DEFAULT NULL,
  `otorragia` int(11) DEFAULT NULL,
  `ovace` int(11) DEFAULT NULL,
  `parada_cardiaca` int(11) NOT NULL,
  `parada_respiratoria` int(11) NOT NULL,
  `priaprismo` int(11) DEFAULT NULL,
  `prurido_pele` int(11) DEFAULT NULL,
  `pupilas_anisocoria` int(11) DEFAULT NULL,
  `pupilas_isocoria` int(11) DEFAULT NULL,
  `pupilas_midriase` int(11) DEFAULT NULL,
  `pupilas_miose` int(11) DEFAULT NULL,
  `pupilas_reagente` int(11) DEFAULT NULL,
  `pupilas_nao_reagente` int(11) DEFAULT NULL,
  `sede` int(11) DEFAULT NULL,
  `sinal_battle` int(11) DEFAULT NULL,
  `sinal_guaxinim` int(11) DEFAULT NULL,
  `sudorese` int(11) DEFAULT NULL,
  `taquipneia` int(11) DEFAULT NULL,
  `taquicardia` int(11) DEFAULT NULL,
  `tontura` int(11) DEFAULT NULL,
  `observacoes` varchar(450) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_sinais_vitais`
--

CREATE TABLE `ficha_sinais_vitais` (
  `idFicha_Sinais_Vitais` int(11) NOT NULL,
  `pressao_arterial0` varchar(45) DEFAULT NULL,
  `pressao_arterial1` varchar(45) NOT NULL,
  `pulso` varchar(45) NOT NULL,
  `respiracao` varchar(45) DEFAULT NULL,
  `saturacao` varchar(45) DEFAULT NULL,
  `temperatura` varchar(45) DEFAULT NULL,
  `perfusao` varchar(45) DEFAULT NULL,
  `HGT` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_termo_recusa`
--

CREATE TABLE `ficha_termo_recusa` (
  `idTermoRecusa` int(11) NOT NULL,
  `nome_imagem` varchar(255) DEFAULT NULL,
  `caminho_imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_tipo_de_ocorrencia`
--

CREATE TABLE `ficha_tipo_de_ocorrencia` (
  `idTipo_de_Ocorrencia` int(11) NOT NULL,
  `Causado_Por_Animais` int(11) DEFAULT NULL,
  `Com_Meio_De_Transporte` int(11) DEFAULT NULL,
  `Desmoronamento_Deslizamento` int(11) DEFAULT NULL,
  `Emergencia_Medica` int(11) DEFAULT NULL,
  `Queda_De_Altura_2M` int(11) DEFAULT NULL,
  `Tentativa_De_Suicidio` int(11) DEFAULT NULL,
  `Queda_Propria_Altura` int(11) DEFAULT NULL,
  `Afogamento` int(11) DEFAULT NULL,
  `Agressao` int(11) DEFAULT NULL,
  `Atropelamento` int(11) DEFAULT NULL,
  `Choque_Eletrico` int(11) DEFAULT NULL,
  `Desabamento` int(11) DEFAULT NULL,
  `Domestico` int(11) DEFAULT NULL,
  `Esportivo` int(11) DEFAULT NULL,
  `Intoxicacao` int(11) DEFAULT NULL,
  `Queda_Bicicleta` int(11) DEFAULT NULL,
  `Queda_Moto` int(11) DEFAULT NULL,
  `Queda_Nivel_2M` int(11) DEFAULT NULL,
  `Trabalho` int(11) DEFAULT NULL,
  `Transferencia` int(11) DEFAULT NULL,
  `Outro_Campo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_transporte_decisao_transporte`
--

CREATE TABLE `ficha_transporte_decisao_transporte` (
  `idFicha_Decisao_Transporte` int(11) NOT NULL,
  `decisao_transporte` varchar(33) NOT NULL,
  `M` varchar(99) NOT NULL,
  `S1` varchar(99) NOT NULL,
  `S2` varchar(99) NOT NULL,
  `S3` varchar(99) NOT NULL,
  `Demandante` varchar(99) NOT NULL,
  `Equipe` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_transporte_detalhes_viagem`
--

CREATE TABLE `ficha_transporte_detalhes_viagem` (
  `idDetalhes_Viagem` int(11) NOT NULL,
  `NumeroUSB` varchar(255) DEFAULT NULL,
  `CodigoIR` varchar(255) DEFAULT NULL,
  `NumeroOcorrencia` varchar(255) DEFAULT NULL,
  `CodigoPS` varchar(255) DEFAULT NULL,
  `Desp` varchar(255) DEFAULT NULL,
  `HCH` varchar(255) DEFAULT NULL,
  `KMFinal` varchar(255) DEFAULT NULL,
  `CodigoSIASUS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_transporte_forma_de_conducao`
--

CREATE TABLE `ficha_transporte_forma_de_conducao` (
  `idFicha_Forma_de_Conducao` int(11) NOT NULL,
  `forma_conducao` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_transporte_vitima_era`
--

CREATE TABLE `ficha_transporte_vitima_era` (
  `idFicha_Transporte_Vitima_Era` int(11) NOT NULL,
  `vitima_era` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(45) NOT NULL,
  `email_usuario` varchar(45) NOT NULL,
  `CPF_usuario` varchar(11) NOT NULL,
  `senha_usuario` varchar(45) NOT NULL,
  `tipo_usuario` varchar(5) NOT NULL DEFAULT 'user',
  `id_fichas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='User data.';

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `email_usuario`, `CPF_usuario`, `senha_usuario`, `tipo_usuario`, `id_fichas`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin', NULL),
(2, 'Jonas', 'jonas@gmail.com', '13324523523', '123', 'user', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fichas`
--
ALTER TABLE `fichas`
  ADD PRIMARY KEY (`id_fichas`),
  ADD UNIQUE KEY `idReports_UNIQUE` (`id_fichas`),
  ADD KEY `idAnamnese_Emergencia_Medica` (`idAnamnese_Emergencia_Medica`),
  ADD KEY `idAnamnese_Gestacional` (`idAnamnese_Gestacional`),
  ADD KEY `idAvaliacao_Cinematica` (`idAvaliacao_Cinematica`),
  ADD KEY `idFicha_Avaliacao_Glasgow` (`idFicha_Avaliacao_Glasgow`),
  ADD KEY `idFicha_Localizacao_dos_Traumas` (`idFicha_Localizacao_dos_Traumas`),
  ADD KEY `idMateriais_Utilizados_Deixados` (`idMateriais_Utilizados_Deixados`),
  ADD KEY `idMateriais_Utilizados_Descartavel` (`idMateriais_Utilizados_Descartavel`),
  ADD KEY `idObjetos_Recolhidos` (`idObjetos_Recolhidos`),
  ADD KEY `idObservacoes_Importantes` (`idObservacoes_Importantes`),
  ADD KEY `idFicha_Paciente` (`idFicha_Paciente`),
  ADD KEY `idProblemas_Encontrados` (`idProblemas_Encontrados`),
  ADD KEY `idProcedimentos_Efetuados` (`idProcedimentos_Efetuados`),
  ADD KEY `idSinais_e_Sintomas` (`idSinais_e_Sintomas`),
  ADD KEY `idFicha_Sinais_Vitais` (`idFicha_Sinais_Vitais`),
  ADD KEY `idTermoRecusa` (`idTermoRecusa`),
  ADD KEY `idTipo_de_Ocorrencia` (`idTipo_de_Ocorrencia`),
  ADD KEY `idFicha_Decisao_Transporte` (`idFicha_Decisao_Transporte`),
  ADD KEY `idDetalhes_Viagem` (`idDetalhes_Viagem`),
  ADD KEY `idFicha_Forma_de_Conducao` (`idFicha_Forma_de_Conducao`),
  ADD KEY `idFicha_Transporte_Vitima_Era` (`idFicha_Transporte_Vitima_Era`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `ficha_anamnese_emergencia_medica`
--
ALTER TABLE `ficha_anamnese_emergencia_medica`
  ADD PRIMARY KEY (`idAnamnese_Emergencia_Medica`),
  ADD UNIQUE KEY `idAnamnese_Emergência_Médica_UNIQUE` (`idAnamnese_Emergencia_Medica`);

--
-- Indexes for table `ficha_anamnese_gestacional`
--
ALTER TABLE `ficha_anamnese_gestacional`
  ADD PRIMARY KEY (`idAnamnese_Gestacional`),
  ADD UNIQUE KEY `idAnamnese_Gestacional` (`idAnamnese_Gestacional`);

--
-- Indexes for table `ficha_avaliacao_cinematica`
--
ALTER TABLE `ficha_avaliacao_cinematica`
  ADD PRIMARY KEY (`idAvaliacao_Cinematica`),
  ADD UNIQUE KEY `idAvaliacao_Cinematica` (`idAvaliacao_Cinematica`);

--
-- Indexes for table `ficha_avaliacao_glasgow`
--
ALTER TABLE `ficha_avaliacao_glasgow`
  ADD PRIMARY KEY (`idFicha_Avaliacao_Glasgow`),
  ADD UNIQUE KEY `idFicha_Avaliacao_Glasgow_UNIQUE` (`idFicha_Avaliacao_Glasgow`);

--
-- Indexes for table `ficha_localizacao_dos_traumas`
--
ALTER TABLE `ficha_localizacao_dos_traumas`
  ADD PRIMARY KEY (`idFicha_Localizacao_dos_Traumas`),
  ADD UNIQUE KEY `idFicha_Localizacao_dos_Traumas` (`idFicha_Localizacao_dos_Traumas`);

--
-- Indexes for table `ficha_materiais_utilizados_deixados`
--
ALTER TABLE `ficha_materiais_utilizados_deixados`
  ADD PRIMARY KEY (`idMateriais_Utilizados_Deixados`),
  ADD UNIQUE KEY `idMateriais_Utilizados_Deixados_UNIQUE` (`idMateriais_Utilizados_Deixados`);

--
-- Indexes for table `ficha_materiais_utilizados_descartavel`
--
ALTER TABLE `ficha_materiais_utilizados_descartavel`
  ADD PRIMARY KEY (`idMateriais_Utilizados_Descartavel`),
  ADD UNIQUE KEY `idMateriais_Utilizados_Descartavel_UNIQUE` (`idMateriais_Utilizados_Descartavel`);

--
-- Indexes for table `ficha_objetos_recolhidos`
--
ALTER TABLE `ficha_objetos_recolhidos`
  ADD PRIMARY KEY (`idObjetos_Recolhidos`),
  ADD UNIQUE KEY `idObjetos_Recolhidos` (`idObjetos_Recolhidos`);

--
-- Indexes for table `ficha_observacoes_importantes`
--
ALTER TABLE `ficha_observacoes_importantes`
  ADD PRIMARY KEY (`idObservacoes_Importantes`),
  ADD UNIQUE KEY `idObservacoes_Importantes_UNIQUE` (`idObservacoes_Importantes`);

--
-- Indexes for table `ficha_paciente`
--
ALTER TABLE `ficha_paciente`
  ADD PRIMARY KEY (`idFicha_Paciente`),
  ADD UNIQUE KEY `idReports_Patient_UNIQUE` (`idFicha_Paciente`);

--
-- Indexes for table `ficha_problemas_encontrados`
--
ALTER TABLE `ficha_problemas_encontrados`
  ADD PRIMARY KEY (`idProblemas_Encontrados`),
  ADD UNIQUE KEY `idProblemas_Encontrados_UNIQUE` (`idProblemas_Encontrados`);

--
-- Indexes for table `ficha_procedimentos_efetuados`
--
ALTER TABLE `ficha_procedimentos_efetuados`
  ADD PRIMARY KEY (`idProcedimentos_Efetuados`),
  ADD UNIQUE KEY `idProcedimentos_Efetuados_UNIQUE` (`idProcedimentos_Efetuados`);

--
-- Indexes for table `ficha_sinais_e_sintomas`
--
ALTER TABLE `ficha_sinais_e_sintomas`
  ADD PRIMARY KEY (`idSinais_e_Sintomas`),
  ADD UNIQUE KEY `idSinais_e_Sintomas_UNIQUE` (`idSinais_e_Sintomas`);

--
-- Indexes for table `ficha_sinais_vitais`
--
ALTER TABLE `ficha_sinais_vitais`
  ADD PRIMARY KEY (`idFicha_Sinais_Vitais`),
  ADD UNIQUE KEY `idFicha_Sinais_Vitais_UNIQUE` (`idFicha_Sinais_Vitais`);

--
-- Indexes for table `ficha_termo_recusa`
--
ALTER TABLE `ficha_termo_recusa`
  ADD PRIMARY KEY (`idTermoRecusa`),
  ADD UNIQUE KEY `idTermoRecusa` (`idTermoRecusa`);

--
-- Indexes for table `ficha_tipo_de_ocorrencia`
--
ALTER TABLE `ficha_tipo_de_ocorrencia`
  ADD PRIMARY KEY (`idTipo_de_Ocorrencia`),
  ADD UNIQUE KEY `idTipo_de_Ocorrencia_UNIQUE` (`idTipo_de_Ocorrencia`);

--
-- Indexes for table `ficha_transporte_decisao_transporte`
--
ALTER TABLE `ficha_transporte_decisao_transporte`
  ADD PRIMARY KEY (`idFicha_Decisao_Transporte`),
  ADD UNIQUE KEY `idFicha_Decisao_Transporte_UNIQUE` (`idFicha_Decisao_Transporte`);

--
-- Indexes for table `ficha_transporte_detalhes_viagem`
--
ALTER TABLE `ficha_transporte_detalhes_viagem`
  ADD PRIMARY KEY (`idDetalhes_Viagem`),
  ADD UNIQUE KEY `idDetalhes_Viagem` (`idDetalhes_Viagem`);

--
-- Indexes for table `ficha_transporte_forma_de_conducao`
--
ALTER TABLE `ficha_transporte_forma_de_conducao`
  ADD PRIMARY KEY (`idFicha_Forma_de_Conducao`),
  ADD UNIQUE KEY `idFicha_Forma_de_Conducao_UNIQUE` (`idFicha_Forma_de_Conducao`);

--
-- Indexes for table `ficha_transporte_vitima_era`
--
ALTER TABLE `ficha_transporte_vitima_era`
  ADD PRIMARY KEY (`idFicha_Transporte_Vitima_Era`),
  ADD UNIQUE KEY `idFicha_Transporte_Vitima_Era_UNIQUE` (`idFicha_Transporte_Vitima_Era`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `idUser_UNIQUE` (`id_usuario`),
  ADD UNIQUE KEY `Email_UNIQUE` (`email_usuario`),
  ADD UNIQUE KEY `CPF_UNIQUE` (`CPF_usuario`),
  ADD UNIQUE KEY `Reports_UNIQUE` (`id_fichas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fichas`
--
ALTER TABLE `fichas`
  MODIFY `id_fichas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_anamnese_emergencia_medica`
--
ALTER TABLE `ficha_anamnese_emergencia_medica`
  MODIFY `idAnamnese_Emergencia_Medica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_anamnese_gestacional`
--
ALTER TABLE `ficha_anamnese_gestacional`
  MODIFY `idAnamnese_Gestacional` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_avaliacao_cinematica`
--
ALTER TABLE `ficha_avaliacao_cinematica`
  MODIFY `idAvaliacao_Cinematica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_avaliacao_glasgow`
--
ALTER TABLE `ficha_avaliacao_glasgow`
  MODIFY `idFicha_Avaliacao_Glasgow` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_localizacao_dos_traumas`
--
ALTER TABLE `ficha_localizacao_dos_traumas`
  MODIFY `idFicha_Localizacao_dos_Traumas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_materiais_utilizados_deixados`
--
ALTER TABLE `ficha_materiais_utilizados_deixados`
  MODIFY `idMateriais_Utilizados_Deixados` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_materiais_utilizados_descartavel`
--
ALTER TABLE `ficha_materiais_utilizados_descartavel`
  MODIFY `idMateriais_Utilizados_Descartavel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_objetos_recolhidos`
--
ALTER TABLE `ficha_objetos_recolhidos`
  MODIFY `idObjetos_Recolhidos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_observacoes_importantes`
--
ALTER TABLE `ficha_observacoes_importantes`
  MODIFY `idObservacoes_Importantes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_paciente`
--
ALTER TABLE `ficha_paciente`
  MODIFY `idFicha_Paciente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_problemas_encontrados`
--
ALTER TABLE `ficha_problemas_encontrados`
  MODIFY `idProblemas_Encontrados` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_procedimentos_efetuados`
--
ALTER TABLE `ficha_procedimentos_efetuados`
  MODIFY `idProcedimentos_Efetuados` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_sinais_e_sintomas`
--
ALTER TABLE `ficha_sinais_e_sintomas`
  MODIFY `idSinais_e_Sintomas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_sinais_vitais`
--
ALTER TABLE `ficha_sinais_vitais`
  MODIFY `idFicha_Sinais_Vitais` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_termo_recusa`
--
ALTER TABLE `ficha_termo_recusa`
  MODIFY `idTermoRecusa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_tipo_de_ocorrencia`
--
ALTER TABLE `ficha_tipo_de_ocorrencia`
  MODIFY `idTipo_de_Ocorrencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_transporte_decisao_transporte`
--
ALTER TABLE `ficha_transporte_decisao_transporte`
  MODIFY `idFicha_Decisao_Transporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_transporte_detalhes_viagem`
--
ALTER TABLE `ficha_transporte_detalhes_viagem`
  MODIFY `idDetalhes_Viagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_transporte_forma_de_conducao`
--
ALTER TABLE `ficha_transporte_forma_de_conducao`
  MODIFY `idFicha_Forma_de_Conducao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_transporte_vitima_era`
--
ALTER TABLE `ficha_transporte_vitima_era`
  MODIFY `idFicha_Transporte_Vitima_Era` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fichas`
--
ALTER TABLE `fichas`
  ADD CONSTRAINT `idAnamnese_Emergencia_Medica` FOREIGN KEY (`idAnamnese_Emergencia_Medica`) REFERENCES `ficha_anamnese_emergencia_medica` (`idAnamnese_Emergencia_Medica`),
  ADD CONSTRAINT `idAnamnese_Gestacional` FOREIGN KEY (`idAnamnese_Gestacional`) REFERENCES `ficha_anamnese_gestacional` (`idAnamnese_Gestacional`),
  ADD CONSTRAINT `idAvaliacao_Cinematica` FOREIGN KEY (`idAvaliacao_Cinematica`) REFERENCES `ficha_avaliacao_cinematica` (`idAvaliacao_Cinematica`),
  ADD CONSTRAINT `idDetalhes_Viagem` FOREIGN KEY (`idDetalhes_Viagem`) REFERENCES `ficha_transporte_detalhes_viagem` (`idDetalhes_Viagem`),
  ADD CONSTRAINT `idFicha_Avaliacao_Glasgow` FOREIGN KEY (`idFicha_Avaliacao_Glasgow`) REFERENCES `ficha_avaliacao_glasgow` (`idFicha_Avaliacao_Glasgow`),
  ADD CONSTRAINT `idFicha_Decisao_Transporte` FOREIGN KEY (`idFicha_Decisao_Transporte`) REFERENCES `ficha_transporte_decisao_transporte` (`idFicha_Decisao_Transporte`),
  ADD CONSTRAINT `idFicha_Forma_de_Conducao` FOREIGN KEY (`idFicha_Forma_de_Conducao`) REFERENCES `ficha_transporte_forma_de_conducao` (`idFicha_Forma_de_Conducao`),
  ADD CONSTRAINT `idFicha_Localizacao_dos_Traumas` FOREIGN KEY (`idFicha_Localizacao_dos_Traumas`) REFERENCES `ficha_localizacao_dos_traumas` (`idFicha_Localizacao_dos_Traumas`),
  ADD CONSTRAINT `idFicha_Paciente` FOREIGN KEY (`idFicha_Paciente`) REFERENCES `ficha_paciente` (`idFicha_Paciente`),
  ADD CONSTRAINT `idFicha_Sinais_Vitais` FOREIGN KEY (`idFicha_Sinais_Vitais`) REFERENCES `ficha_sinais_vitais` (`idFicha_Sinais_Vitais`),
  ADD CONSTRAINT `idFicha_Transporte_Vitima_Era` FOREIGN KEY (`idFicha_Transporte_Vitima_Era`) REFERENCES `ficha_transporte_vitima_era` (`idFicha_Transporte_Vitima_Era`),
  ADD CONSTRAINT `idMateriais_Utilizados_Deixados` FOREIGN KEY (`idMateriais_Utilizados_Deixados`) REFERENCES `ficha_materiais_utilizados_deixados` (`idMateriais_Utilizados_Deixados`),
  ADD CONSTRAINT `idMateriais_Utilizados_Descartavel` FOREIGN KEY (`idMateriais_Utilizados_Descartavel`) REFERENCES `ficha_materiais_utilizados_descartavel` (`idMateriais_Utilizados_Descartavel`),
  ADD CONSTRAINT `idObjetos_Recolhidos` FOREIGN KEY (`idObjetos_Recolhidos`) REFERENCES `ficha_objetos_recolhidos` (`idObjetos_Recolhidos`),
  ADD CONSTRAINT `idObservacoes_Importantes` FOREIGN KEY (`idObservacoes_Importantes`) REFERENCES `ficha_observacoes_importantes` (`idObservacoes_Importantes`),
  ADD CONSTRAINT `idProblemas_Encontrados` FOREIGN KEY (`idProblemas_Encontrados`) REFERENCES `ficha_problemas_encontrados` (`idProblemas_Encontrados`),
  ADD CONSTRAINT `idProcedimentos_Efetuados` FOREIGN KEY (`idProcedimentos_Efetuados`) REFERENCES `ficha_procedimentos_efetuados` (`idProcedimentos_Efetuados`),
  ADD CONSTRAINT `idSinais_e_Sintomas` FOREIGN KEY (`idSinais_e_Sintomas`) REFERENCES `ficha_sinais_e_sintomas` (`idSinais_e_Sintomas`),
  ADD CONSTRAINT `idTermoRecusa` FOREIGN KEY (`idTermoRecusa`) REFERENCES `ficha_termo_recusa` (`idTermoRecusa`),
  ADD CONSTRAINT `idTipo_de_Ocorrencia` FOREIGN KEY (`idTipo_de_Ocorrencia`) REFERENCES `ficha_tipo_de_ocorrencia` (`idTipo_de_Ocorrencia`),
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `id_fichas` FOREIGN KEY (`id_fichas`) REFERENCES `fichas` (`id_fichas`);
COMMIT;
