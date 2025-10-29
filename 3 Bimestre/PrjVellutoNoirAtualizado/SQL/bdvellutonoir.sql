-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/10/2025 às 06:00
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
-- Banco de dados: `bdvellutonoir`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbadministrador`
--

CREATE TABLE `tbadministrador` (
  `idAdministrador` int(11) NOT NULL,
  `nomeAdministrador` varchar(200) DEFAULT NULL,
  `cpfAdministrador` char(11) DEFAULT NULL,
  `emailAdministrador` varchar(200) DEFAULT NULL,
  `senhaAdministrador` varchar(100) DEFAULT NULL,
  `nomeUsuarioAdministrador` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbadministrador`
--

INSERT INTO `tbadministrador` (`idAdministrador`, `nomeAdministrador`, `cpfAdministrador`, `emailAdministrador`, `senhaAdministrador`, `nomeUsuarioAdministrador`) VALUES
(1, 'Giovanna Nascimento', '12345678900', 'giovannaNasc@gmail.com', 'Gica123', 'Gica_N');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(200) DEFAULT NULL,
  `emailCliente` varchar(250) DEFAULT NULL,
  `senhaCliente` varchar(100) DEFAULT NULL,
  `cpfCliente` char(15) DEFAULT NULL,
  `foneCliente` char(15) DEFAULT NULL,
  `dataNascCliente` date DEFAULT NULL,
  `logradouroCliente` varchar(50) DEFAULT NULL,
  `numLogradouroCliente` int(8) DEFAULT NULL,
  `ufCliente` char(2) DEFAULT NULL,
  `cepCliente` char(8) DEFAULT NULL,
  `cidadeCliente` varchar(50) DEFAULT NULL,
  `complementoCliente` varchar(15) DEFAULT NULL,
  `bairroCliente` varchar(20) DEFAULT NULL,
  `nomeUsuarioCliente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbcliente`
--

INSERT INTO `tbcliente` (`idCliente`, `nomeCliente`, `emailCliente`, `senhaCliente`, `cpfCliente`, `foneCliente`, `dataNascCliente`, `logradouroCliente`, `numLogradouroCliente`, `ufCliente`, `cepCliente`, `cidadeCliente`, `complementoCliente`, `bairroCliente`, `nomeUsuarioCliente`) VALUES
(1, 'Giovanna Emanuely', 'giovannaEma@gmail.com', '123', 'null', 'null', '0000-00-00', 'null', 0, 'nu', 'null', 'null', 'null', 'null', 'null'),
(2, 'Beatriz Pereira', 'beaB@gmail.com', '143', 'null', 'null', '0000-00-00', 'null', 0, 'nu', 'null', 'null', 'null', 'null', 'null'),
(3, 'Geovanna Campanella', 'geovannaSakura@gmail.com', '12345', 'null', 'null', '0000-00-00', 'null', 0, 'nu', 'null', 'null', 'null', 'null', 'null'),
(4, 'Geovany Aldere', 'geovanyAl@gmail.com', '321', 'null', 'null', '0000-00-00', 'null', 0, 'nu', 'null', 'null', 'null', 'null', 'null'),
(5, 'Nic Nicoly', 'nicy@gmail.com', '654', 'null', 'null', '0000-00-00', 'null', 0, 'nu', 'null', 'null', 'null', 'null', 'null'),
(6, 'Giovanna Lima', 'limaGi@gmail.com', '123', 'null', 'null', '0000-00-00', 'null', 0, 'nu', 'null', 'null', 'null', 'null', 'null'),
(7, 'Geovanna Camp', 'geovannaCamp@gmail.com', '135', 'null', 'null', '0000-00-00', 'null', 0, 'nu', 'null', 'null', 'null', 'null', 'null'),
(8, 'Debora Lima', 'deboraLima@outlook.com', '190', 'null', 'null', '0000-00-00', 'null', 0, 'nu', 'null', 'null', 'null', 'null', 'null');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbitem`
--

CREATE TABLE `tbitem` (
  `idItem` int(11) NOT NULL,
  `quantidadeItem` int(11) DEFAULT NULL,
  `precoUnitarioItem` decimal(10,2) DEFAULT NULL,
  `idPedido` int(11) DEFAULT NULL,
  `idProduto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbpagamento`
--

CREATE TABLE `tbpagamento` (
  `idPagamento` int(11) NOT NULL,
  `formaPagamento` varchar(30) NOT NULL,
  `statusPagamento` varchar(30) NOT NULL,
  `dataPagamento` date NOT NULL,
  `valorPagamento` decimal(10,2) NOT NULL,
  `idPedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbpedido`
--

CREATE TABLE `tbpedido` (
  `idPedido` int(11) NOT NULL,
  `dataPedido` date DEFAULT NULL,
  `valorTotalPedido` decimal(10,2) DEFAULT NULL,
  `statusPedido` varchar(30) DEFAULT NULL,
  `idCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbproduto`
--

CREATE TABLE `tbproduto` (
  `idProduto` int(11) NOT NULL,
  `nomeProduto` varchar(200) DEFAULT NULL,
  `precoProduto` decimal(10,2) NOT NULL,
  `descProduto` varchar(400) DEFAULT NULL,
  `caminhoDaImagem` text DEFAULT NULL,
  `publicoProduto` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbproduto`
--

INSERT INTO `tbproduto` (`idProduto`, `nomeProduto`, `precoProduto`, `descProduto`, `caminhoDaImagem`, `publicoProduto`) VALUES
(1, 'Adidas TÊNIS GRAND COURT 2.0', 179.99, 'Tênis ADIDAS - grand court 2.0 - nova edição', 'https://static.dafiti.com.br/p/adidas-adidas-t%C3%8Anis-grand-court-2.0-8518-58297931-1-zoom.jpg?ims=filters:quality(70)\r\n ', 'Masculino'),
(2, 'Vestido Floral', 98.90, 'Vestido Floral - Verão - colorido', 'https://bobags.com.br/assets-v2/products/vestido-florido-com-faixa-p-2d48c12cc6eb95c0813bb4f9eab213115bad13e7.jpg?p=productlist&cache=d4b44564722748239b0dcf03249071f80c913&fm=webp&s=1ad0c45c2abfb64c47a7c3c7197c9bb9', 'feminino'),
(3, 'Camisa Social Masculina Slim Fit Algodão Premium', 189.90, 'Camisa social slim fit em algodão premium, ideal para qualquer ocasião.', 'https://down-br.img.susercontent.com/file/br-11134201-23020-1y8fdpnsxrnvb2', 'Masculino'),
(4, 'Vestido Infantil Rodado com Estampa Lúdica', 120.00, 'Vestido rodado com tecido macio e estampa lúdica, garantindo conforto e diversão.', 'https://m.media-amazon.com/images/I/51TcXFnIXEL._AC_SY1000_.jpg', 'Infantil'),
(5, 'Blazer Feminino Acinturado em Linho', 299.50, 'Blazer acinturado em linho, perfeito para o trabalho ou eventos sociais.', 'https://oqvestir.fbitsstatic.net/img/p/blazer-feminino-alongado-blended-bege-217281/622593.jpg?w=1600&h=2133&v=202504091215', 'Feminino'),
(7, 'Camiseta Básica Branca', 49.90, 'Camiseta unissex 100% algodão, confortável e ideal para o dia a dia.', 'https://http2.mlstatic.com/D_NQ_NP_2X_687205-MLB91336794893_082025-F-camiseta-lisa-unissex-100-algodo-gola-redonda-confortavel.webp', 'Geral'),
(8, 'Calça Jeans Skinny', 159.90, 'Calça jeans de corte ajustado, com elastano para maior conforto.', 'https://adaptive-images.uooucdn.com.br/ik-seo/tr:w-1100,h-1594,c-at_max,pr-true,q-90/a22539-ogxytxpxdz0/pv/6f/43/04/7844061c904eae303a5fc72149/calca-skinny-basica-em-jeans-com-bordado-large-2.jpg', 'Adulto'),
(9, 'Vestido Floral Curto', 189.00, 'Vestido leve e estampado, perfeito para dias quentes e eventos casuais.', 'https://img.ltwebstatic.com/v4/j/pi/2025/06/17/37/1750148275fe9800d50ecd5e0daeb32471ee15a272_thumbnail_560x.webp', 'Feminino'),
(10, 'Jaqueta Jeans Oversized', 229.90, 'Jaqueta jeans com modelagem ampla e bolsos frontais.', 'https://img.lojasrenner.com.br/item/897686384/original/12.jpg', 'Juvenil'),
(11, 'Moletom Capuz Preto', 139.90, 'Moletom unissex com capuz e bolso canguru, tecido macio e quente.', 'https://www.fico.com.br/dw/image/v2/BFCG_PRD/on/demandware.static/-/Sites-masterCatalog_Lunelli/default/dwd87a54fa/large/fico-1.00831-000156-D1.jpg?sw=900&sfrm=jpg&sm=fit&q=80', 'Geral'),
(12, 'Saia Midi Plissada', 119.90, 'Saia de tecido leve com plissado elegante e cintura elástica.', 'https://img.ltwebstatic.com/images3_pi/2025/02/22/00/1740223920358705e296ed565e576713352649b726_thumbnail_560x.webp', 'Feminino'),
(13, 'Camisa Social Azul', 129.90, 'Camisa de algodão com corte clássico, ideal para o trabalho ou eventos.', 'https://http2.mlstatic.com/D_NQ_NP_2X_829493-MLB82870043314_032025-F-camisa-social-masculina-slim-premium-manga-longa.webp', 'Masculino'),
(14, 'Shorts Jeans Desfiado', 89.90, 'Shorts jeans com barra desfiada e lavagem clara.', 'https://fernandaramosstore.com.br/wp-content/uploads/2022/01/fernandaramosstore_com_br-short-jeans-feminino-com-cinto-copia-3.jpg', 'Feminino'),
(15, 'Blusa Cropped Listrada', 69.90, 'Blusa curta com estampa listrada e tecido leve.', 'https://jchermann.com/cdn/shop/files/Cropped-manga-longa-listra-off-jchermann-0000229600014_4_6d66c701-73a0-43ac-ad24-aba4123f55c1.jpg?v=1747680828&width=960', 'Juvenil'),
(16, 'Casaco Tricot Cinza', 179.90, 'Casaco longo de tricot, ideal para dias frios e visuais elegantes.', 'https://img.ltwebstatic.com/images3_pi/2024/07/09/ad/17205042824770150941e3cbd5932aec5ed0c1587d_thumbnail_405x.webp', 'Adulto');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbvendedor`
--

CREATE TABLE `tbvendedor` (
  `idVendedor` int(11) NOT NULL,
  `nomeRepreVendedor` varchar(200) DEFAULT NULL,
  `cpfRepreVendedor` char(11) DEFAULT NULL,
  `foneRepreVendedor` char(15) DEFAULT NULL,
  `emailRepreVendedor` varchar(200) DEFAULT NULL,
  `senhaRepreVendedor` varchar(100) DEFAULT NULL,
  `nomeLojaVendedor` varchar(100) DEFAULT NULL,
  `cnpjLojaVendedor` char(14) DEFAULT NULL,
  `cepLojaVendedor` char(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Índices de tabela `tbitem`
--
ALTER TABLE `tbitem`
  ADD PRIMARY KEY (`idItem`),
  ADD KEY `idPedido` (`idPedido`),
  ADD KEY `idProduto` (`idProduto`);

--
-- Índices de tabela `tbpagamento`
--
ALTER TABLE `tbpagamento`
  ADD PRIMARY KEY (`idPagamento`),
  ADD KEY `idPedido` (`idPedido`);

--
-- Índices de tabela `tbpedido`
--
ALTER TABLE `tbpedido`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Índices de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  ADD PRIMARY KEY (`idProduto`);

--
-- Índices de tabela `tbvendedor`
--
ALTER TABLE `tbvendedor`
  ADD PRIMARY KEY (`idVendedor`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbadministrador`
--
ALTER TABLE `tbadministrador`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tbitem`
--
ALTER TABLE `tbitem`
  MODIFY `idItem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbpedido`
--
ALTER TABLE `tbpedido`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbproduto`
--
ALTER TABLE `tbproduto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tbvendedor`
--
ALTER TABLE `tbvendedor`
  MODIFY `idVendedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbitem`
--
ALTER TABLE `tbitem`
  ADD CONSTRAINT `tbitem_ibfk_1` FOREIGN KEY (`idPedido`) REFERENCES `tbpedido` (`idPedido`),
  ADD CONSTRAINT `tbitem_ibfk_2` FOREIGN KEY (`idProduto`) REFERENCES `tbproduto` (`idProduto`);

--
-- Restrições para tabelas `tbpagamento`
--
ALTER TABLE `tbpagamento`
  ADD CONSTRAINT `tbpagamento_ibfk_1` FOREIGN KEY (`idPedido`) REFERENCES `tbpedido` (`idPedido`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
