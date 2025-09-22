-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/09/2025 às 16:39
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdtabuleiro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbadmin`
--

CREATE TABLE `tbadmin` (
  `codAdmin` int(11) NOT NULL,
  `nomeAdmin` varchar(50) NOT NULL,
  `senhaAdmin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcasa`
--

CREATE TABLE `tbcasa` (
  `codCasa` int(11) NOT NULL,
  `codEvento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbevento`
--

CREATE TABLE `tbevento` (
  `codEvento` int(11) NOT NULL,
  `nomeEvento` varchar(50) NOT NULL,
  `tipoEvento` varchar(20) NOT NULL,
  `descEvento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbpersonagem`
--

CREATE TABLE `tbpersonagem` (
  `codPersonagem` int(11) NOT NULL,
  `nomePersonagem` varchar(100) DEFAULT NULL,
  `caracteristicaPersonagem` varchar(200) DEFAULT NULL,
  `imagemPersonagem` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbpersonagem`
--

INSERT INTO `tbpersonagem` (`codPersonagem`, `nomePersonagem`, `caracteristicaPersonagem`, `imagemPersonagem`) VALUES
(1, 'Mulher Negra', 'Pele retinta, cabelos crespos volumosos que gosta de usar em tranças, sorriso largo', NULL),
(2, 'Idoso', 'Baixinho, cabelos totalmente brancos, olhos azuis já cansados, anda com bengala', NULL),
(3, 'Mãe Solteira', 'Morena clara, cabelos castanhos longos, geralmente presos por praticidade', NULL),
(4, 'Retirante', 'Corpo magro, rosto marcado pelo sol', NULL),
(5, 'Homem Trans', 'Cabelos curtos e claros, tatuagens discretas nos braços, corpo em fase de transição', NULL),
(6, 'Deficiente Física', 'Usa cadeira de rodas, tem cabelos castanhos longos, veste roupas coloridas e alegres', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbpersonagemselecionado`
--

CREATE TABLE `tbpersonagemselecionado` (
  `codPersonagemSelecionado` int(11) NOT NULL,
  `nomePersonagemSelcionado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `codUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`codAdmin`);

--
-- Índices de tabela `tbcasa`
--
ALTER TABLE `tbcasa`
  ADD PRIMARY KEY (`codCasa`),
  ADD KEY `codEvento` (`codEvento`);

--
-- Índices de tabela `tbevento`
--
ALTER TABLE `tbevento`
  ADD PRIMARY KEY (`codEvento`);

--
-- Índices de tabela `tbpersonagem`
--
ALTER TABLE `tbpersonagem`
  ADD PRIMARY KEY (`codPersonagem`);

--
-- Índices de tabela `tbpersonagemselecionado`
--
ALTER TABLE `tbpersonagemselecionado`
  ADD PRIMARY KEY (`codPersonagemSelecionado`);

--
-- Índices de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`codUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `codAdmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbcasa`
--
ALTER TABLE `tbcasa`
  MODIFY `codCasa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbevento`
--
ALTER TABLE `tbevento`
  MODIFY `codEvento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbpersonagem`
--
ALTER TABLE `tbpersonagem`
  MODIFY `codPersonagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `tbpersonagemselecionado`
--
ALTER TABLE `tbpersonagemselecionado`
  MODIFY `codPersonagemSelecionado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `codUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbcasa`
--
ALTER TABLE `tbcasa`
  ADD CONSTRAINT `tbcasa_ibfk_1` FOREIGN KEY (`codEvento`) REFERENCES `tbevento` (`codEvento`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
