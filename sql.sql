-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/06/2024 às 18:02
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
-- Banco de dados: `wutai`
--
CREATE DATABASE IF NOT EXISTS `wutai` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `wutai`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `address`
--

CREATE TABLE `address` (
  `idAddress` int(11) NOT NULL,
  `completeName` varchar(200) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `houseNumber` smallint(6) NOT NULL,
  `complement` varchar(100) DEFAULT NULL,
  `neighborhood` varchar(60) NOT NULL,
  `phoneNumber` varchar(30) NOT NULL,
  `idUser` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `address`
--

INSERT INTO `address` (`idAddress`, `completeName`, `zipcode`, `state`, `city`, `country`, `address`, `houseNumber`, `complement`, `neighborhood`, `phoneNumber`, `idUser`) VALUES
(24, 'ga an', '08257', 'SP', 'São Paulo', 'brasil', 'casas', 40, 'casa', 'regiao nordeste', '40028922', 10),
(26, 'ga an', '08257', 'SP', 'São Paulo', 'brasil', 'casas', 40, 'casa', 'regiao nordeste', '40028922', 10),
(27, 'ga an', '08257', 'SP', 'São Paulo', 'brasil', 'casas', 40, 'casa', 'regiao nordeste', '40028922', 10),
(28, 'ga an', '08257', 'SP', 'São Paulo', 'brasil', 'casas', 40, 'casa', 'regiao nordeste', '40028922', 11),
(33, 'teste usuario', '08257-080', 'Rondonia', 'Rio Grande do Norte', 'Argentina', 'casas', 123, 'casa', 'regiao nordeste', '11945376714', 8),
(34, 'ga an', '31231', 'São Paulo', 'São Paulo', 'Brasil', 'casas', 0, 'casa', 'RODEIOOOO', '40028922', 8);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cart`
--

CREATE TABLE `cart` (
  `idCart` bigint(20) NOT NULL,
  `idUser` bigint(20) NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `cart`
--

INSERT INTO `cart` (`idCart`, `idUser`, `createdDate`) VALUES
(1, 11, '2024-06-02 18:51:48'),
(2, 8, '2024-06-03 12:01:18'),
(3, 12, '2024-06-07 11:58:13');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cart_items`
--

CREATE TABLE `cart_items` (
  `idCartItem` bigint(20) NOT NULL,
  `idCart` bigint(20) NOT NULL,
  `idProduct` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `addedDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `product`
--

CREATE TABLE `product` (
  `idProduct` bigint(20) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `category` varchar(60) NOT NULL,
  `quantity` int(11) NOT NULL,
  `productDescription` varchar(1000) NOT NULL,
  `productImage` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `deliver` varchar(60) NOT NULL,
  `idSeller` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `product`
--

INSERT INTO `product` (`idProduct`, `productName`, `category`, `quantity`, `productDescription`, `productImage`, `price`, `deliver`, `idSeller`) VALUES
(17, 'Caderno de caligrafia chinesa', 'book', 70, 'Caderno de papel especial para praticar caligrafia chinesa, com linhas guia e espaço para aperfeiçoar sua escrita em caracteres chineses.\r\n', 'productImages/34954677ff441979f97800d1c5ec5257.jpg', 24.90, 'Gabriel Empresa', 6),
(18, 'Fone de ouvido Bluetooth', 'electronic', 50, 'Fone de ouvido sem fio com conexão Bluetooth, design confortável e bateria de longa duração. Ideal para música e chamadas.', 'productImages/7692b4fb142541988271da6abd19a030.jpg', 149.90, 'Gabriel Empresa', 6),
(19, 'Fone de ouvido Bluetooth', 'electronic', 50, 'Fone de ouvido sem fio com conexão Bluetooth, design confortável e bateria de longa duração. Ideal para música e chamadas.', 'productImages/7692b4fb142541988271da6abd19a030.jpg', 149.90, 'Gabriel Empresa', 6),
(20, 'Camiseta básica de algodão', 'apparel', 100, 'Camiseta básica de algodão de alta qualidade, perfeita para o dia a dia. Disponível em diversas cores e tamanhos.', 'productImages/dd306dd85885ccb8a07d33fbf61a221d.jpg', 24.90, 'Gabriel Empresa', 6),
(21, 'Ventilador de Mesa Mondial Super Power', 'house', 30, 'O Ventilador de Mesa Mondial Super Power é um aparelho de ventilação eficiente e compacto projetado para uso em mesas e bancadas.', 'productImages/7adda9ac7f0471a48f07db5cc223a08c.jpg', 153.00, 'Wutai', 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `seller`
--

CREATE TABLE `seller` (
  `idSeller` bigint(20) NOT NULL,
  `enterpriseName` varchar(60) NOT NULL,
  `creationDate` datetime NOT NULL DEFAULT current_timestamp(),
  `idUser` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `seller`
--

INSERT INTO `seller` (`idSeller`, `enterpriseName`, `creationDate`, `idUser`) VALUES
(6, 'Gabriel Empresa', '2024-06-07 10:27:51', 12),
(7, 'Wutai Company', '2024-06-07 12:58:50', 11);

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `idUser` bigint(20) NOT NULL,
  `name` varchar(60) NOT NULL,
  `surname` varchar(60) NOT NULL,
  `email` varchar(90) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`idUser`, `name`, `surname`, `email`, `password`, `birthdate`, `createdDate`) VALUES
(1, 'teste', 'teste', 'teste@test.com', '123456', '2024-05-17', '2024-05-23 00:00:00'),
(2, 'ASD', 'Teste2', 'teste@test2.com', '$2y$10$cce4264QD3tP5kruqsK69OaamhGCST89Z66gRt/aPTmHBrW8phypW', '2024-05-17', '2024-05-23 00:00:00'),
(6, 'ASD', 'Teste2', 'ASD@ASDFF', '$2y$10$rFVFuvCDX5hNZ9WMjZqRtOpxARSrtzuLn7sDtDnxu2VIFUT8JgjLS', '2024-05-17', '2024-05-23 00:00:00'),
(7, 'teste', 'teste', 'teste@teste.com', '$2y$10$NXS0G95TqwyXIpgOsgxeheDLBZhez8NFvRVX9dBuH9TupgFrArd12', '0000-00-00', '2024-05-23 00:00:00'),
(8, 'Gabriel', 'teste', 'gabriel@teste.com', '$2y$10$54kf3634FWByRpl3ZVIdPOOOOTFM3tRF7gQD./kt1XtN4MCDVzRcO', '0000-00-00', '2024-05-23 00:00:00'),
(9, 'teste', 'usuario', 'teste@usuario.com', '$2y$10$NJvWVc..ZZ0NAHuH06IMG.ckgU7p5rJPeSgomWaCesOOOlRwm1Aca', '0000-00-00', '2024-05-28 00:00:00'),
(10, 'Gabriel2', 'Lima2', 'gabriel@lima.com', '$2y$10$zFuOMEVaqjCGjXyzurTDcudYv02egwzJHFus5eTxdF8yr0wSyN0Ui', '0000-00-00', '2024-05-31 21:13:08'),
(11, 'Wutai', 'Company', 'wutai@company.com', '$2y$10$GBY4uj6NmA9/QGN/VSH1AOS1zbBKQ1oJbplAWeHgDRlj4oPY.GG5y', '2024-06-01', '2024-06-01 22:57:44'),
(12, 'Gabriel', 'Empresa', 'gabriel@empresa.com', '$2y$10$l7wg7rp1/LiHv0s8.RSiX.sXmALAmkK5YcLPRV3h3/WOVNuKpDmXm', '2024-06-01', '2024-06-07 08:48:24');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`idAddress`),
  ADD KEY `fkUserAddress` (`idUser`);

--
-- Índices de tabela `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idCart`),
  ADD KEY `fkUserCart` (`idUser`);

--
-- Índices de tabela `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`idCartItem`),
  ADD KEY `fkCartItemsCart` (`idCart`),
  ADD KEY `fkCartItemsProduct` (`idProduct`);

--
-- Índices de tabela `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idProduct`),
  ADD KEY `fkIdSeller` (`idSeller`);

--
-- Índices de tabela `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`idSeller`),
  ADD UNIQUE KEY `enterpriseName` (`enterpriseName`),
  ADD KEY `fkUserSeller` (`idUser`);

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `address`
--
ALTER TABLE `address`
  MODIFY `idAddress` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `cart`
--
ALTER TABLE `cart`
  MODIFY `idCart` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `idCartItem` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de tabela `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `seller`
--
ALTER TABLE `seller`
  MODIFY `idSeller` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `idUser` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `fkUserAddress` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Restrições para tabelas `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fkUserCart` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

--
-- Restrições para tabelas `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `fkCartItemsCart` FOREIGN KEY (`idCart`) REFERENCES `cart` (`idCart`),
  ADD CONSTRAINT `fkCartItemsProduct` FOREIGN KEY (`idProduct`) REFERENCES `product` (`idProduct`);

--
-- Restrições para tabelas `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fkIdSeller` FOREIGN KEY (`idSeller`) REFERENCES `seller` (`idSeller`);

--
-- Restrições para tabelas `seller`
--
ALTER TABLE `seller`
  ADD CONSTRAINT `fkUserSeller` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `seller_ibfk_1` FOREIGN KEY (`idSeller`) REFERENCES `user` (`idUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
