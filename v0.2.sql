-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/06/2024 às 23:26
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
(19, 'Gabriel3 Lima3', '321838', 'guarulhos', 'sao paulo', 'brasil', 'rua numero dois', 20, 'casa', 'dezessete', '', 8);

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
  `price` varchar(60) NOT NULL,
  `idSeller` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `product`
--

INSERT INTO `product` (`idProduct`, `productName`, `category`, `quantity`, `productDescription`, `productImage`, `price`, `idSeller`) VALUES
(1, 'teste', '1', 7, 'asdaasd', 'HD-wallpaper-plain-black-black.jpg', '123', 3),
(2, 'teste2', 'drink', 4, 'asdasd', 'kisspng-silhouette-project-wolfpack-dog-wolf-5ad0a56d8d2f30.7181102015236232775783.png', '1231231', 3);

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
(3, 'empresaBucha', '2024-06-01 02:28:13', 8);

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
(3, '', '', '', '$2y$10$smS//oBABO9CzYrXN2pW/eJywX.7b2VsHXh/xyCAQug6FHq.blbQW', '0000-00-00', '2024-05-23 00:00:00'),
(4, '', '', '', '$2y$10$WtTMOvfF9tYbXs.nVDXCnugI/jJqB/kKOxcQnlgjgrFPiUOOzwdea', '0000-00-00', '2024-05-23 00:00:00'),
(5, '', '', '', '$2y$10$3BjFVBnzyfLsBsGAYWUogO6I36g4CtSH9.SGRIKBKZ5CyZKG4U7Au', '0000-00-00', '2024-05-23 00:00:00'),
(6, 'ASD', 'Teste2', 'ASD@ASDFF', '$2y$10$rFVFuvCDX5hNZ9WMjZqRtOpxARSrtzuLn7sDtDnxu2VIFUT8JgjLS', '2024-05-17', '2024-05-23 00:00:00'),
(7, 'teste', 'teste', 'teste@teste.com', '$2y$10$NXS0G95TqwyXIpgOsgxeheDLBZhez8NFvRVX9dBuH9TupgFrArd12', '0000-00-00', '2024-05-23 00:00:00'),
(8, 'Gabriel', 'teste', 'gabriel@teste.com', '$2y$10$54kf3634FWByRpl3ZVIdPOOOOTFM3tRF7gQD./kt1XtN4MCDVzRcO', '0000-00-00', '2024-05-23 00:00:00'),
(9, 'teste', 'usuario', 'teste@usuario.com', '$2y$10$NJvWVc..ZZ0NAHuH06IMG.ckgU7p5rJPeSgomWaCesOOOlRwm1Aca', '0000-00-00', '2024-05-28 00:00:00'),
(10, 'Gabriel2', 'Lima2', 'gabriel@lima.com', '$2y$10$zFuOMEVaqjCGjXyzurTDcudYv02egwzJHFus5eTxdF8yr0wSyN0Ui', '0000-00-00', '2024-05-31 21:13:08');

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
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `address`
--
ALTER TABLE `address`
  MODIFY `idAddress` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `seller`
--
ALTER TABLE `seller`
  MODIFY `idSeller` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `idUser` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `fkUserAddress` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`);

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
