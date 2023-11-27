-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 03:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `id_usuario` int(11) DEFAULT NULL,
  `idFicha_Paciente` int(11) DEFAULT NULL,
  `idFicha_Avaliacao_Glasgow` int(11) DEFAULT NULL,
  `idFicha_Sinais_Vitais` int(11) DEFAULT NULL,
  `idProblemas_Encontrados` int(11) DEFAULT NULL,
  `idFicha_Localizacao_dos_Traumas` int(11) DEFAULT NULL,
  `idSinais_e_Sintomas` int(11) DEFAULT NULL,
  `idFicha_Transporte` int(11) DEFAULT NULL,
  `idProcedimentos_Efetuados` int(11) DEFAULT NULL,
  `idMateriais_Utilizados_Descartavel` int(11) DEFAULT NULL,
  `idMateriais_Utilizados_Deixados` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_anamnese_emergência_médica`
--

CREATE TABLE `ficha_anamnese_emergência_médica` (
  `idAnamnese_Emergência_Médica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_avaliacao_glasgow`
--

CREATE TABLE `ficha_avaliacao_glasgow` (
  `idFicha_Avaliacao_Glasgow` int(11) NOT NULL,
  `idFicha_Avaliacao_Glasgow_AO` varchar(50) DEFAULT NULL,
  `idFicha_Avaliacao_Glasgow_RV` varchar(50) DEFAULT NULL,
  `idFicha_Avaliacao_Glasgow_RM` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_localizacao_dos_traumas`
--

CREATE TABLE `ficha_localizacao_dos_traumas` (
  `idFicha_Localizacao_dos_Traumas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_materiais_utilizados_deixados`
--

CREATE TABLE `ficha_materiais_utilizados_deixados` (
  `idMateriais_Utilizados_Deixados` int(11) NOT NULL,
  `Materiais` varchar(45) NOT NULL,
  `Quant.` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_materiais_utilizados_descartavel`
--

CREATE TABLE `ficha_materiais_utilizados_descartavel` (
  `idMateriais_Utilizados_Descartavel` int(11) NOT NULL,
  `Materiais` varchar(45) NOT NULL,
  `Quant.` varchar(5) DEFAULT NULL
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
  `Problemas_Encontrados` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_procedimentos_efetuados`
--

CREATE TABLE `ficha_procedimentos_efetuados` (
  `idProcedimentos_Efetuados` int(11) NOT NULL,
  `Procedimentos_Efetuados` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_sinais_e_sintomas`
--

CREATE TABLE `ficha_sinais_e_sintomas` (
  `idSinais_e_Sintomas` int(11) NOT NULL,
  `Sinais_e_Sintomas` varchar(45) DEFAULT NULL
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
-- Table structure for table `ficha_transporte`
--

CREATE TABLE `ficha_transporte` (
  `idFicha_Transporte` int(11) NOT NULL,
  `idFicha_Decisao_Transporte` int(11) DEFAULT NULL,
  `idFicha_Forma_de_Conducao` int(11) DEFAULT NULL,
  `idFicha_Vitima_Era` int(11) DEFAULT NULL,
  `idFicha_Equipe` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_transporte_decisao_transporte`
--

CREATE TABLE `ficha_transporte_decisao_transporte` (
  `idFicha_Decisao_Transporte` int(11) NOT NULL,
  `Ficha_Transporte_Decisao_Transporte` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ficha_transporte_equipe`
--

CREATE TABLE `ficha_transporte_equipe` (
  `idFicha_Transporte_Equipe` int(11) NOT NULL,
  `Nome_Equipe` varchar(45) DEFAULT NULL,
  `Motorista` varchar(45) DEFAULT NULL,
  `Socorristas` varchar(45) DEFAULT NULL,
  `Demandante` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
  `Ficha_Transporte_Vitima_Era` varchar(45) DEFAULT NULL
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
(1, 'admin', 'admin', '', 'admin', 'admin', NULL),
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
  ADD KEY `idFicha_Paciente_idx` (`idFicha_Paciente`),
  ADD KEY `idFicha_Sinais_Vitais_idx` (`idFicha_Sinais_Vitais`),
  ADD KEY `idProblemas_Encontrados_idx` (`idProblemas_Encontrados`),
  ADD KEY `idFicha_Localizacao_dos_Traumas_idx` (`idFicha_Localizacao_dos_Traumas`),
  ADD KEY `idSinais_e_Sintomas_idx` (`idSinais_e_Sintomas`),
  ADD KEY `idFicha_Transporte_idx` (`idFicha_Transporte`),
  ADD KEY `idFicha_Avaliacao_Glasgow_idx` (`idFicha_Avaliacao_Glasgow`),
  ADD KEY `idProcedimentos_Efetuados_idx` (`idProcedimentos_Efetuados`),
  ADD KEY `idMateriais_Utilizados_Descartavel_idx` (`idMateriais_Utilizados_Descartavel`),
  ADD KEY `idMateriais_Utilizados_Deixados_idx` (`idMateriais_Utilizados_Deixados`),
  ADD KEY `id_usuario_idx` (`id_usuario`);

--
-- Indexes for table `ficha_anamnese_emergência_médica`
--
ALTER TABLE `ficha_anamnese_emergência_médica`
  ADD PRIMARY KEY (`idAnamnese_Emergência_Médica`),
  ADD UNIQUE KEY `idAnamnese_Emergência_Médica_UNIQUE` (`idAnamnese_Emergência_Médica`);

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
  ADD PRIMARY KEY (`idFicha_Localizacao_dos_Traumas`);

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
  ADD PRIMARY KEY (`idObjetos_Recolhidos`);

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
-- Indexes for table `ficha_tipo_de_ocorrencia`
--
ALTER TABLE `ficha_tipo_de_ocorrencia`
  ADD PRIMARY KEY (`idTipo_de_Ocorrencia`),
  ADD UNIQUE KEY `idTipo_de_Ocorrencia_UNIQUE` (`idTipo_de_Ocorrencia`);

--
-- Indexes for table `ficha_transporte`
--
ALTER TABLE `ficha_transporte`
  ADD PRIMARY KEY (`idFicha_Transporte`),
  ADD UNIQUE KEY `idFicha_Transporte_UNIQUE` (`idFicha_Transporte`),
  ADD KEY `idFicha_Decisao_Transporte_idx` (`idFicha_Decisao_Transporte`),
  ADD KEY `idFicha_Forma_de_Conducao_idx` (`idFicha_Forma_de_Conducao`),
  ADD KEY `idFicha_Vitima_Era_idx` (`idFicha_Vitima_Era`),
  ADD KEY `idFicha_Equipe_idx` (`idFicha_Equipe`);

--
-- Indexes for table `ficha_transporte_decisao_transporte`
--
ALTER TABLE `ficha_transporte_decisao_transporte`
  ADD PRIMARY KEY (`idFicha_Decisao_Transporte`),
  ADD UNIQUE KEY `idFicha_Decisao_Transporte_UNIQUE` (`idFicha_Decisao_Transporte`);

--
-- Indexes for table `ficha_transporte_equipe`
--
ALTER TABLE `ficha_transporte_equipe`
  ADD PRIMARY KEY (`idFicha_Transporte_Equipe`);

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
-- AUTO_INCREMENT for table `ficha_anamnese_emergência_médica`
--
ALTER TABLE `ficha_anamnese_emergência_médica`
  MODIFY `idAnamnese_Emergência_Médica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_avaliacao_glasgow`
--
ALTER TABLE `ficha_avaliacao_glasgow`
  MODIFY `idFicha_Avaliacao_Glasgow` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_materiais_utilizados_descartavel`
--
ALTER TABLE `ficha_materiais_utilizados_descartavel`
  MODIFY `idMateriais_Utilizados_Descartavel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_objetos_recolhidos`
--
ALTER TABLE `ficha_objetos_recolhidos`
  MODIFY `idObjetos_Recolhidos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ficha_observacoes_importantes`
--
ALTER TABLE `ficha_observacoes_importantes`
  MODIFY `idObservacoes_Importantes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `ficha_paciente`
--
ALTER TABLE `ficha_paciente`
  MODIFY `idFicha_Paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

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
  MODIFY `idFicha_Sinais_Vitais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `ficha_tipo_de_ocorrencia`
--
ALTER TABLE `ficha_tipo_de_ocorrencia`
  MODIFY `idTipo_de_Ocorrencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `ficha_transporte`
--
ALTER TABLE `ficha_transporte`
  MODIFY `idFicha_Transporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_transporte_decisao_transporte`
--
ALTER TABLE `ficha_transporte_decisao_transporte`
  MODIFY `idFicha_Decisao_Transporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_transporte_equipe`
--
ALTER TABLE `ficha_transporte_equipe`
  MODIFY `idFicha_Transporte_Equipe` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ficha_transporte_forma_de_conducao`
--
ALTER TABLE `ficha_transporte_forma_de_conducao`
  MODIFY `idFicha_Forma_de_Conducao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `ficha_transporte_vitima_era`
--
ALTER TABLE `ficha_transporte_vitima_era`
  MODIFY `idFicha_Transporte_Vitima_Era` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fichas`
--
ALTER TABLE `fichas`
  ADD CONSTRAINT `idFicha_Avaliacao_Glasgow` FOREIGN KEY (`idFicha_Avaliacao_Glasgow`) REFERENCES `ficha_avaliacao_glasgow` (`idFicha_Avaliacao_Glasgow`),
  ADD CONSTRAINT `idFicha_Localizacao_dos_Traumas` FOREIGN KEY (`idFicha_Localizacao_dos_Traumas`) REFERENCES `ficha_localizacao_dos_traumas` (`idFicha_Localizacao_dos_Traumas`),
  ADD CONSTRAINT `idFicha_Paciente` FOREIGN KEY (`idFicha_Paciente`) REFERENCES `ficha_paciente` (`idFicha_Paciente`),
  ADD CONSTRAINT `idFicha_Sinais_Vitais` FOREIGN KEY (`idFicha_Sinais_Vitais`) REFERENCES `ficha_sinais_vitais` (`idFicha_Sinais_Vitais`),
  ADD CONSTRAINT `idFicha_Transporte` FOREIGN KEY (`idFicha_Transporte`) REFERENCES `ficha_transporte` (`idFicha_Transporte`),
  ADD CONSTRAINT `idMateriais_Utilizados_Deixados` FOREIGN KEY (`idMateriais_Utilizados_Deixados`) REFERENCES `ficha_materiais_utilizados_deixados` (`idMateriais_Utilizados_Deixados`),
  ADD CONSTRAINT `idMateriais_Utilizados_Descartavel` FOREIGN KEY (`idMateriais_Utilizados_Descartavel`) REFERENCES `ficha_materiais_utilizados_descartavel` (`idMateriais_Utilizados_Descartavel`),
  ADD CONSTRAINT `idProblemas_Encontrados` FOREIGN KEY (`idProblemas_Encontrados`) REFERENCES `ficha_problemas_encontrados` (`idProblemas_Encontrados`),
  ADD CONSTRAINT `idProcedimentos_Efetuados` FOREIGN KEY (`idProcedimentos_Efetuados`) REFERENCES `ficha_procedimentos_efetuados` (`idProcedimentos_Efetuados`),
  ADD CONSTRAINT `idSinais_e_Sintomas` FOREIGN KEY (`idSinais_e_Sintomas`) REFERENCES `ficha_sinais_e_sintomas` (`idSinais_e_Sintomas`),
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Constraints for table `ficha_transporte`
--
ALTER TABLE `ficha_transporte`
  ADD CONSTRAINT `idFicha_Decisao_Transporte` FOREIGN KEY (`idFicha_Decisao_Transporte`) REFERENCES `ficha_transporte_decisao_transporte` (`idFicha_Decisao_Transporte`),
  ADD CONSTRAINT `idFicha_Equipe` FOREIGN KEY (`idFicha_Equipe`) REFERENCES `ficha_transporte_equipe` (`idFicha_Transporte_Equipe`),
  ADD CONSTRAINT `idFicha_Forma_de_Conducao` FOREIGN KEY (`idFicha_Forma_de_Conducao`) REFERENCES `ficha_transporte_forma_de_conducao` (`idFicha_Forma_de_Conducao`),
  ADD CONSTRAINT `idFicha_Vitima_Era` FOREIGN KEY (`idFicha_Vitima_Era`) REFERENCES `ficha_transporte_vitima_era` (`idFicha_Transporte_Vitima_Era`);

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `id_fichas` FOREIGN KEY (`id_fichas`) REFERENCES `fichas` (`id_fichas`);
COMMIT;
