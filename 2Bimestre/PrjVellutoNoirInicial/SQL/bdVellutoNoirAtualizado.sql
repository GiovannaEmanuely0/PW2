-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/06/2025 às 04:56
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
-- Banco de dados: `bdlojaroupas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbadministrador`
--

CREATE TABLE `tbadministrador` (
  `idAdministrador` int(11) NOT NULL,
  `nomeAdministrador` varchar(200) DEFAULT NULL,
  `cpfAdministrador` char(15) DEFAULT NULL,
  `telefoneAdministrador` char(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(100) NOT NULL,
  `emailCliente` varchar(30) DEFAULT NULL,
  `foneCliente` varchar(15) DEFAULT NULL,
  `dataNascCliente` date DEFAULT NULL,
  `cpfCliente` varchar(15) DEFAULT NULL,
  `logradouroCliente` varchar(50) DEFAULT NULL,
  `numLogradouroCliente` int(8) DEFAULT NULL,
  `ufCliente` char(2) DEFAULT NULL,
  `cepCliente` char(8) DEFAULT NULL,
  `cidadeCliente` varchar(50) DEFAULT NULL,
  `complementoCliente` varchar(15) DEFAULT NULL,
  `bairroCliente` varchar(20) DEFAULT NULL,
  `senhaCliente` varchar(50) DEFAULT NULL,
  `nomeUsuarioCliente` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcliente2`
--

CREATE TABLE `tbcliente2` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(100) DEFAULT NULL,
  `emailCliente` varchar(20) DEFAULT NULL,
  `foneCliente` varchar(20) DEFAULT NULL,
  `cpfCliente` varchar(15) DEFAULT NULL,
  `senhaCliente` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcliente2`
--

INSERT INTO `tbcliente2` (`idCliente`, `nomeCliente`, `emailCliente`, `foneCliente`, `cpfCliente`, `senhaCliente`) VALUES
(1, 'Geovanna Campanella', 'geovannaSakura@gmail', NULL, NULL, '123'),
(2, 'Geovanna Campanella', 'geovannaSakura@gmail', NULL, NULL, '123'),
(3, 'Geovanna Campanella', 'geovannaSakura@gmail', NULL, NULL, '123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbloginadministrador`
--

CREATE TABLE `tbloginadministrador` (
  `idLoginAdministrador` int(11) NOT NULL,
  `emailLoginAdministrador` varchar(100) NOT NULL,
  `senhaLoginAdministrador` varchar(100) NOT NULL,
  `nomeUsuarioAdministrador` varchar(100) DEFAULT NULL,
  `idAdministrador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbloginadministrador`
--

INSERT INTO `tbloginadministrador` (`idLoginAdministrador`, `emailLoginAdministrador`, `senhaLoginAdministrador`, `nomeUsuarioAdministrador`, `idAdministrador`) VALUES
(1, 'giovanna@gmail.com', 'Gigi@2025', 'GicaAdmin', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `idProduto` int(11) NOT NULL,
  `nomeProduto` varchar(100) DEFAULT NULL,
  `precoProduto` varchar(50) DEFAULT NULL,
  `descProduto` varchar(100) DEFAULT NULL,
  `publicoAlvoProduto` varchar(30) DEFAULT NULL,
  `generoProduto` varchar(30) DEFAULT NULL,
  `classificacaoProduto` varchar(30) DEFAULT NULL,
  `tamanhoProduto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbproduto`
--

INSERT INTO `tbproduto` (`idProduto`, `nomeProduto`, `precoProduto`, `descProduto`, `publicoAlvoProduto`, `generoProduto`, `classificacaoProduto`, `tamanhoProduto`) VALUES
(1, 'Adidas TÊNIS GRAND COURT 2.0', '179.99', 'Tênis ADIDAS - grand court 2.0 - nova edição', NULL, NULL, NULL, NULL),
(2, 'Vestido Floral', '98.90', 'Vestido Floral - Verão - colorido', NULL, NULL, NULL, NULL),
(3, 'Camisa Social Masculina Slim Fit Algodão Premium', '189.90', 'Camisa social slim fit em algodão premium, ideal para qualquer ocasião.', NULL, NULL, NULL, NULL),
(4, 'Vestido Infantil Rodado com Estampa Lúdica', '120.00', 'Vestido rodado com tecido macio e estampa lúdica, garantindo conforto e diversão.', NULL, NULL, NULL, NULL),
(5, 'Blazer Feminino Acinturado em Linho', '299.50', 'Blazer acinturado em linho, perfeito para o trabalho ou eventos sociais.', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbvendedor`
--

CREATE TABLE `tbvendedor` (
  `idVendedor` int(11) NOT NULL,
  `nomeVendedor` varchar(100) NOT NULL,
  `emailVendedor` varchar(30) DEFAULT NULL,
  `foneVendedor` varchar(20) DEFAULT NULL,
  `cpfVendedor` varchar(15) DEFAULT NULL,
  `senhaVendedor` varchar(30) DEFAULT NULL,
  `nomeUsuarioVendedor` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbvendedor`
--

INSERT INTO `tbvendedor` (`idVendedor`, `nomeVendedor`, `emailVendedor`, `foneVendedor`, `cpfVendedor`, `senhaVendedor`, `nomeUsuarioVendedor`) VALUES
(1, 'Geovany Aldere', 'geovanyCelbit@gmail.com', '11 9999 9999', '12345678900', 'GAldere123', 'Geovany_Aldere');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbadministrador`
--
ALTER TABLE `tbadministrador`
  ADD PRIMARY KEY (`idAdministrador`);

--
-- Índices de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices de tabela `tbcliente2`
--
ALTER TABLE `tbcliente2`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices de tabela `tbloginadministrador`
--
ALTER TABLE `tbloginadministrador`
  ADD PRIMARY KEY (`idLoginAdministrador`);

--
-- Índices de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`idProduto`);

--
-- Índices de tabela `tbvendedor`
--
ALTER TABLE `tbvendedor`
  ADD PRIMARY KEY (`idVendedor`),
  ADD UNIQUE KEY `cpfVendedor` (`cpfVendedor`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbadministrador`
--
ALTER TABLE `tbadministrador`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbcliente2`
--
ALTER TABLE `tbcliente2`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbvendedor`
--
ALTER TABLE `tbvendedor`
  MODIFY `idVendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
