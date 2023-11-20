-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Out-2023 às 17:04
-- Versão do servidor: 8.0.21
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `bombeirosdb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fichas`
--

CREATE TABLE `fichas` (
  `id_fichas` int NOT NULL,
  `data_ficha` date NOT NULL,
  `id_usuario` int DEFAULT NULL,
  `idFicha_Paciente` int DEFAULT NULL,
  `idFicha_Avaliacao_Glasgow` int DEFAULT NULL,
  `idFicha_Sinais_Vitais` int DEFAULT NULL,
  `idProblemas_Encontrados` int DEFAULT NULL,
  `idFicha_Localizacao_dos_Traumas` int DEFAULT NULL,
  `idSinais_e_Sintomas` int DEFAULT NULL,
  `idFicha_Transporte` int DEFAULT NULL,
  `idProcedimentos_Efetuados` int DEFAULT NULL,
  `idMateriais_Utilizados_Descartavel` int DEFAULT NULL,
  `idMateriais_Utilizados_Deixados` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha_anamnese_emergência_médica`
--

CREATE TABLE `ficha_anamnese_emergência_médica` (
  `idAnamnese_Emergência_Médica` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha_avaliacao_glasgow`
--

CREATE TABLE `ficha_avaliacao_glasgow` (
  `idFicha_Avaliacao_Glasgow` int NOT NULL,
  `idFicha_Avaliacao_Glasgow_AO` varchar(1) DEFAULT NULL,
  `idFicha_Avaliacao_Glasgow_RV` varchar(1) DEFAULT NULL,
  `idFicha_Avaliacao_Glasgow_RM` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha_localizacao_dos_traumas`
--

CREATE TABLE `ficha_localizacao_dos_traumas` (
  `idFicha_Localizacao_dos_Traumas` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha_materiais_utilizados_deixados`
--

CREATE TABLE `ficha_materiais_utilizados_deixados` (
  `idMateriais_Utilizados_Deixados` int NOT NULL,
  `Materiais` varchar(45) NOT NULL,
  `Quant.` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha_materiais_utilizados_descartavel`
--

CREATE TABLE `ficha_materiais_utilizados_descartavel` (
  `idMateriais_Utilizados_Descartavel` int NOT NULL,
  `Materiais` varchar(45) NOT NULL,
  `Quant.` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha_observacoes_importantes`
--

CREATE TABLE `ficha_observacoes_importantes` (
  `idObservacoes_Importantes` int NOT NULL,
  `Observações` varchar(450) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha_paciente`
--

CREATE TABLE `ficha_paciente` (
  `idFicha_Paciente` int NOT NULL,
  `nome_paciente` varchar(45) DEFAULT NULL,
  `CPF_paciente` varchar(11) DEFAULT NULL,
  `nome_acompanhante` varchar(45) DEFAULT NULL,
  `local_da_ocorrencia` varchar(150) DEFAULT NULL,
  `idade_paciente` varchar(3) DEFAULT NULL,
  `idade_acompanhante` varchar(3) DEFAULT NULL,
  `telefone_paciente` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha_problemas_encontrados`
--

CREATE TABLE `ficha_problemas_encontrados` (
  `idProblemas_Encontrados` int NOT NULL,
  `Problemas_Encontrados` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha_procedimentos_efetuados`
--

CREATE TABLE `ficha_procedimentos_efetuados` (
  `idProcedimentos_Efetuados` int NOT NULL,
  `Procedimentos_Efetuados` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha_sinais_e_sintomas`
--

CREATE TABLE `ficha_sinais_e_sintomas` (
  `idSinais_e_Sintomas` int NOT NULL,
  `Sinais_e_Sintomas` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha_sinais_vitais`
--

CREATE TABLE `ficha_sinais_vitais` (
  `idFicha_Sinais_Vitais` int NOT NULL,
  `Pressao_Arterial` varchar(45) DEFAULT NULL,
  `Pulso` varchar(45) DEFAULT NULL,
  `Saturacao` varchar(45) DEFAULT NULL,
  `Temperatura` varchar(45) DEFAULT NULL,
  `Perfusão` varchar(45) DEFAULT NULL,
  `HGT` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha_tipo_de_ocorrencia`
--

CREATE TABLE `ficha_tipo_de_ocorrencia` (
  `idTipo_de_Ocorrencia` int NOT NULL,
  `Tipo_de_Ocorrencia` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha_transporte`
--

CREATE TABLE `ficha_transporte` (
  `idFicha_Transporte` int NOT NULL,
  `idFicha_Decisao_Transporte` int DEFAULT NULL,
  `idFicha_Forma_de_Conducao` int DEFAULT NULL,
  `idFicha_Vitima_Era` int DEFAULT NULL,
  `idFicha_Equipe` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha_transporte_decisao_transporte`
--

CREATE TABLE `ficha_transporte_decisao_transporte` (
  `idFicha_Decisao_Transporte` int NOT NULL,
  `Ficha_Transporte_Decisao_Transporte` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha_transporte_equipe`
--

CREATE TABLE `ficha_transporte_equipe` (
  `idFicha_Transporte_Equipe` int NOT NULL,
  `Nome_Equipe` varchar(45) DEFAULT NULL,
  `Motorista` varchar(45) DEFAULT NULL,
  `Socorristas` varchar(45) DEFAULT NULL,
  `Demandante` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha_transporte_forma_de_conducao`
--

CREATE TABLE `ficha_transporte_forma_de_conducao` (
  `idFicha_Forma_de_Conducao` int NOT NULL,
  `Ficha_Forma_de_Conducao` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha_transporte_vitima_era`
--

CREATE TABLE `ficha_transporte_vitima_era` (
  `idFicha_Transporte_Vitima_Era` int NOT NULL,
  `Ficha_Transporte_Vitima_Era` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int NOT NULL,
  `nome_usuario` varchar(45) NOT NULL,
  `email_usuario` varchar(45) NOT NULL,
  `CPF_usuario` varchar(11) NOT NULL,
  `senha_usuario` varchar(45) NOT NULL,
  `id_fichas` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci COMMENT='User data.';

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `email_usuario`, `CPF_usuario`, `senha_usuario`, `id_fichas`) VALUES
(1, 'admin', 'admin', '', 'admin', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `fichas`
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
-- Índices para tabela `ficha_anamnese_emergência_médica`
--
ALTER TABLE `ficha_anamnese_emergência_médica`
  ADD PRIMARY KEY (`idAnamnese_Emergência_Médica`),
  ADD UNIQUE KEY `idAnamnese_Emergência_Médica_UNIQUE` (`idAnamnese_Emergência_Médica`);

--
-- Índices para tabela `ficha_avaliacao_glasgow`
--
ALTER TABLE `ficha_avaliacao_glasgow`
  ADD PRIMARY KEY (`idFicha_Avaliacao_Glasgow`),
  ADD UNIQUE KEY `idFicha_Avaliacao_Glasgow_UNIQUE` (`idFicha_Avaliacao_Glasgow`);

--
-- Índices para tabela `ficha_localizacao_dos_traumas`
--
ALTER TABLE `ficha_localizacao_dos_traumas`
  ADD PRIMARY KEY (`idFicha_Localizacao_dos_Traumas`);

--
-- Índices para tabela `ficha_materiais_utilizados_deixados`
--
ALTER TABLE `ficha_materiais_utilizados_deixados`
  ADD PRIMARY KEY (`idMateriais_Utilizados_Deixados`),
  ADD UNIQUE KEY `idMateriais_Utilizados_Deixados_UNIQUE` (`idMateriais_Utilizados_Deixados`);

--
-- Índices para tabela `ficha_materiais_utilizados_descartavel`
--
ALTER TABLE `ficha_materiais_utilizados_descartavel`
  ADD PRIMARY KEY (`idMateriais_Utilizados_Descartavel`),
  ADD UNIQUE KEY `idMateriais_Utilizados_Descartavel_UNIQUE` (`idMateriais_Utilizados_Descartavel`);

--
-- Índices para tabela `ficha_observacoes_importantes`
--
ALTER TABLE `ficha_observacoes_importantes`
  ADD PRIMARY KEY (`idObservacoes_Importantes`),
  ADD UNIQUE KEY `idObservacoes_Importantes_UNIQUE` (`idObservacoes_Importantes`);

--
-- Índices para tabela `ficha_paciente`
--
ALTER TABLE `ficha_paciente`
  ADD PRIMARY KEY (`idFicha_Paciente`),
  ADD UNIQUE KEY `idReports_Patient_UNIQUE` (`idFicha_Paciente`);

--
-- Índices para tabela `ficha_problemas_encontrados`
--
ALTER TABLE `ficha_problemas_encontrados`
  ADD PRIMARY KEY (`idProblemas_Encontrados`),
  ADD UNIQUE KEY `idProblemas_Encontrados_UNIQUE` (`idProblemas_Encontrados`);

--
-- Índices para tabela `ficha_procedimentos_efetuados`
--
ALTER TABLE `ficha_procedimentos_efetuados`
  ADD PRIMARY KEY (`idProcedimentos_Efetuados`),
  ADD UNIQUE KEY `idProcedimentos_Efetuados_UNIQUE` (`idProcedimentos_Efetuados`);

--
-- Índices para tabela `ficha_sinais_e_sintomas`
--
ALTER TABLE `ficha_sinais_e_sintomas`
  ADD PRIMARY KEY (`idSinais_e_Sintomas`),
  ADD UNIQUE KEY `idSinais_e_Sintomas_UNIQUE` (`idSinais_e_Sintomas`);

--
-- Índices para tabela `ficha_sinais_vitais`
--
ALTER TABLE `ficha_sinais_vitais`
  ADD PRIMARY KEY (`idFicha_Sinais_Vitais`),
  ADD UNIQUE KEY `idFicha_Sinais_Vitais_UNIQUE` (`idFicha_Sinais_Vitais`);

--
-- Índices para tabela `ficha_tipo_de_ocorrencia`
--
ALTER TABLE `ficha_tipo_de_ocorrencia`
  ADD PRIMARY KEY (`idTipo_de_Ocorrencia`),
  ADD UNIQUE KEY `idTipo_de_Ocorrencia_UNIQUE` (`idTipo_de_Ocorrencia`);

--
-- Índices para tabela `ficha_transporte`
--
ALTER TABLE `ficha_transporte`
  ADD PRIMARY KEY (`idFicha_Transporte`),
  ADD UNIQUE KEY `idFicha_Transporte_UNIQUE` (`idFicha_Transporte`),
  ADD KEY `idFicha_Decisao_Transporte_idx` (`idFicha_Decisao_Transporte`),
  ADD KEY `idFicha_Forma_de_Conducao_idx` (`idFicha_Forma_de_Conducao`),
  ADD KEY `idFicha_Vitima_Era_idx` (`idFicha_Vitima_Era`),
  ADD KEY `idFicha_Equipe_idx` (`idFicha_Equipe`);

--
-- Índices para tabela `ficha_transporte_decisao_transporte`
--
ALTER TABLE `ficha_transporte_decisao_transporte`
  ADD PRIMARY KEY (`idFicha_Decisao_Transporte`),
  ADD UNIQUE KEY `idFicha_Decisao_Transporte_UNIQUE` (`idFicha_Decisao_Transporte`);

--
-- Índices para tabela `ficha_transporte_equipe`
--
ALTER TABLE `ficha_transporte_equipe`
  ADD PRIMARY KEY (`idFicha_Transporte_Equipe`);

--
-- Índices para tabela `ficha_transporte_forma_de_conducao`
--
ALTER TABLE `ficha_transporte_forma_de_conducao`
  ADD PRIMARY KEY (`idFicha_Forma_de_Conducao`),
  ADD UNIQUE KEY `idFicha_Forma_de_Conducao_UNIQUE` (`idFicha_Forma_de_Conducao`);

--
-- Índices para tabela `ficha_transporte_vitima_era`
--
ALTER TABLE `ficha_transporte_vitima_era`
  ADD PRIMARY KEY (`idFicha_Transporte_Vitima_Era`),
  ADD UNIQUE KEY `idFicha_Transporte_Vitima_Era_UNIQUE` (`idFicha_Transporte_Vitima_Era`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `idUser_UNIQUE` (`id_usuario`),
  ADD UNIQUE KEY `Email_UNIQUE` (`email_usuario`),
  ADD UNIQUE KEY `CPF_UNIQUE` (`CPF_usuario`),
  ADD UNIQUE KEY `Reports_UNIQUE` (`id_fichas`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `fichas`
--
ALTER TABLE `fichas`
  MODIFY `id_fichas` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ficha_anamnese_emergência_médica`
--
ALTER TABLE `ficha_anamnese_emergência_médica`
  MODIFY `idAnamnese_Emergência_Médica` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ficha_avaliacao_glasgow`
--
ALTER TABLE `ficha_avaliacao_glasgow`
  MODIFY `idFicha_Avaliacao_Glasgow` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ficha_materiais_utilizados_descartavel`
--
ALTER TABLE `ficha_materiais_utilizados_descartavel`
  MODIFY `idMateriais_Utilizados_Descartavel` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ficha_paciente`
--
ALTER TABLE `ficha_paciente`
  MODIFY `idFicha_Paciente` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ficha_problemas_encontrados`
--
ALTER TABLE `ficha_problemas_encontrados`
  MODIFY `idProblemas_Encontrados` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ficha_procedimentos_efetuados`
--
ALTER TABLE `ficha_procedimentos_efetuados`
  MODIFY `idProcedimentos_Efetuados` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ficha_sinais_e_sintomas`
--
ALTER TABLE `ficha_sinais_e_sintomas`
  MODIFY `idSinais_e_Sintomas` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ficha_sinais_vitais`
--
ALTER TABLE `ficha_sinais_vitais`
  MODIFY `idFicha_Sinais_Vitais` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ficha_tipo_de_ocorrencia`
--
ALTER TABLE `ficha_tipo_de_ocorrencia`
  MODIFY `idTipo_de_Ocorrencia` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ficha_transporte`
--
ALTER TABLE `ficha_transporte`
  MODIFY `idFicha_Transporte` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ficha_transporte_decisao_transporte`
--
ALTER TABLE `ficha_transporte_decisao_transporte`
  MODIFY `idFicha_Decisao_Transporte` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ficha_transporte_equipe`
--
ALTER TABLE `ficha_transporte_equipe`
  MODIFY `idFicha_Transporte_Equipe` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ficha_transporte_forma_de_conducao`
--
ALTER TABLE `ficha_transporte_forma_de_conducao`
  MODIFY `idFicha_Forma_de_Conducao` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ficha_transporte_vitima_era`
--
ALTER TABLE `ficha_transporte_vitima_era`
  MODIFY `idFicha_Transporte_Vitima_Era` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `fichas`
--
ALTER TABLE `fichas`
  ADD CONSTRAINT `id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `idFicha_Avaliacao_Glasgow` FOREIGN KEY (`idFicha_Avaliacao_Glasgow`) REFERENCES `ficha_avaliacao_glasgow` (`idFicha_Avaliacao_Glasgow`),
  ADD CONSTRAINT `idFicha_Localizacao_dos_Traumas` FOREIGN KEY (`idFicha_Localizacao_dos_Traumas`) REFERENCES `ficha_localizacao_dos_traumas` (`idFicha_Localizacao_dos_Traumas`),
  ADD CONSTRAINT `idFicha_Paciente` FOREIGN KEY (`idFicha_Paciente`) REFERENCES `ficha_paciente` (`idFicha_Paciente`),
  ADD CONSTRAINT `idFicha_Sinais_Vitais` FOREIGN KEY (`idFicha_Sinais_Vitais`) REFERENCES `ficha_sinais_vitais` (`idFicha_Sinais_Vitais`),
  ADD CONSTRAINT `idFicha_Transporte` FOREIGN KEY (`idFicha_Transporte`) REFERENCES `ficha_transporte` (`idFicha_Transporte`),
  ADD CONSTRAINT `idMateriais_Utilizados_Deixados` FOREIGN KEY (`idMateriais_Utilizados_Deixados`) REFERENCES `ficha_materiais_utilizados_deixados` (`idMateriais_Utilizados_Deixados`),
  ADD CONSTRAINT `idMateriais_Utilizados_Descartavel` FOREIGN KEY (`idMateriais_Utilizados_Descartavel`) REFERENCES `ficha_materiais_utilizados_descartavel` (`idMateriais_Utilizados_Descartavel`),
  ADD CONSTRAINT `idProblemas_Encontrados` FOREIGN KEY (`idProblemas_Encontrados`) REFERENCES `ficha_problemas_encontrados` (`idProblemas_Encontrados`),
  ADD CONSTRAINT `idProcedimentos_Efetuados` FOREIGN KEY (`idProcedimentos_Efetuados`) REFERENCES `ficha_procedimentos_efetuados` (`idProcedimentos_Efetuados`),
  ADD CONSTRAINT `idSinais_e_Sintomas` FOREIGN KEY (`idSinais_e_Sintomas`) REFERENCES `ficha_sinais_e_sintomas` (`idSinais_e_Sintomas`);

--
-- Limitadores para a tabela `ficha_transporte`
--
ALTER TABLE `ficha_transporte`
  ADD CONSTRAINT `idFicha_Decisao_Transporte` FOREIGN KEY (`idFicha_Decisao_Transporte`) REFERENCES `ficha_transporte_decisao_transporte` (`idFicha_Decisao_Transporte`),
  ADD CONSTRAINT `idFicha_Equipe` FOREIGN KEY (`idFicha_Equipe`) REFERENCES `ficha_transporte_equipe` (`idFicha_Transporte_Equipe`),
  ADD CONSTRAINT `idFicha_Forma_de_Conducao` FOREIGN KEY (`idFicha_Forma_de_Conducao`) REFERENCES `ficha_transporte_forma_de_conducao` (`idFicha_Forma_de_Conducao`),
  ADD CONSTRAINT `idFicha_Vitima_Era` FOREIGN KEY (`idFicha_Vitima_Era`) REFERENCES `ficha_transporte_vitima_era` (`idFicha_Transporte_Vitima_Era`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `id_fichas` FOREIGN KEY (`id_fichas`) REFERENCES `fichas` (`id_fichas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
