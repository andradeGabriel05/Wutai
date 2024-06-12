-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/06/2024 às 08:21
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
(34, 'ga an', '31231', 'São Paulo', 'São Paulo', 'Brasil', 'casas', 0, 'casa', 'RODEIOOOO', '40028922', 8),
(38, 'Gabriel Lima Andrade', '08253000', 'SP', 'São Paulo', 'Brasil', 'Rua Virgínia Ferni', 400, 'escola', 'Conjunto Residencial José Bonifácio', '1140028922', 13);

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
(3, 12, '2024-06-07 11:58:13'),
(4, 13, '2024-06-09 01:39:34'),
(5, 14, '2024-06-11 23:24:02'),
(6, 15, '2024-06-11 23:25:34'),
(7, 16, '2024-06-11 23:28:04'),
(8, 17, '2024-06-11 23:31:12'),
(9, 18, '2024-06-11 23:33:00'),
(10, 19, '2024-06-11 23:35:26'),
(11, 20, '2024-06-11 23:39:53'),
(12, 21, '2024-06-11 23:41:59'),
(13, 22, '2024-06-11 23:48:18'),
(14, 22, '2024-06-11 23:48:18'),
(15, 23, '2024-06-11 23:50:21'),
(16, 23, '2024-06-11 23:50:21'),
(17, 24, '2024-06-11 23:52:12'),
(18, 24, '2024-06-11 23:52:12'),
(19, 25, '2024-06-11 23:56:17'),
(20, 25, '2024-06-11 23:56:17'),
(21, 26, '2024-06-11 23:57:38'),
(22, 26, '2024-06-11 23:57:38'),
(23, 27, '2024-06-11 23:58:50'),
(24, 28, '2024-06-12 00:03:54'),
(25, 29, '2024-06-12 00:07:07'),
(26, 30, '2024-06-12 00:12:06');

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

--
-- Despejando dados para a tabela `cart_items`
--

INSERT INTO `cart_items` (`idCartItem`, `idCart`, `idProduct`, `quantity`, `addedDate`) VALUES
(138, 4, 18, 2, '2024-06-09 20:06:44'),
(185, 3, 20, 2, '2024-06-11 20:56:51'),
(207, 4, 20, 1, '2024-06-11 23:19:07'),
(208, 1, 17, 1, '2024-06-11 23:20:51'),
(209, 6, 20, 1, '2024-06-11 23:26:48'),
(210, 7, 21, 1, '2024-06-11 23:30:30'),
(211, 9, 20, 1, '2024-06-11 23:34:43'),
(215, 12, 21, 1, '2024-06-11 23:41:59'),
(224, 26, 18, 1, '2024-06-12 00:12:06'),
(225, 1, 18, 1, '2024-06-12 01:56:49'),
(226, 1, 24, 1, '2024-06-12 02:27:50'),
(227, 1, 21, 1, '2024-06-12 03:18:08');

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
(20, 'Camiseta básica de algodão', 'apparel', 100, 'Camiseta básica de algodão de alta qualidade, perfeita para o dia a dia. Disponível em diversas cores e tamanhos.', 'productImages/dd306dd85885ccb8a07d33fbf61a221d.jpg', 24.90, 'Gabriel Empresa', 6),
(21, 'Ventilador de Mesa Mondial Super Power', 'house', 30, 'O Ventilador de Mesa Mondial Super Power é um aparelho de ventilação eficiente e compacto projetado para uso em mesas e bancadas.', 'productImages/c770d14228b0b360fde0e230a810a551.jpg', 153.00, 'Wutai', 7),
(22, 'Lâmpada de Mesa de Porcelana Chinesa', 'house', 30, 'Esta deslumbrante lâmpada de mesa de porcelana chinesa adicionará um toque de elegância oriental à sua casa. Feita à mão por artesãos habilidosos, apresenta um delicado padrão de flores de ameixa pintadas à mão em uma base de cerâmica branca translúcida. A cúpula de seda dourada complementa perfeitamente o design, criando uma atmosfera de serenidade e beleza em qualquer ambiente.', 'productImages/5d5d3ecb710cc20336acaf0785c83f68.jpg', 180.00, 'Wutai', 7),
(23, 'Mochila Adventure', 'apparel', 50, 'A Mochila Adventure é perfeita para os amantes de viagens e aventuras ao ar livre. Fabricada com materiais duráveis e resistentes à água, esta mochila possui vários compartimentos para organizar seus pertences, um bolso especial para notebook de até 15 polegadas e um design ergonômico que garante conforto durante o uso prolongado. Ideal para trilhas, viagens e uso diário na cidade.', 'productImages/8192207e0e8457a3741da05b6db7383c.jpg', 199.90, 'Wutai', 7),
(24, 'Smartwatch Fitness Pro', 'electronic', 100, 'O Smartwatch Fitness Pro é o companheiro ideal para quem busca um estilo de vida mais saudável e conectado. Com monitoramento de batimentos cardíacos, contador de passos, rastreamento de sono e várias opções de treino, este smartwatch ajuda você a alcançar suas metas de fitness. Além disso, possui notificações de chamadas e mensagens, resistência à água IP68 e uma bateria de longa duração que permite uso contínuo por até 7 dias. Compatível com Android e iOS.', 'productImages/a79618fec4c4268913bc823e31cf7f61.jpg', 349.90, 'Wutai', 7),
(25, 'Fone de Ouvido Bluetooth Noise Cancelling', 'electronic', 75, 'Desfrute de uma experiência de áudio incomparável com o Fone de Ouvido Bluetooth Noise Cancelling. Equipado com tecnologia de cancelamento de ruído ativo, este fone permite que você se concentre apenas na sua música, sem distrações externas. Com drivers de alta fidelidade, proporciona som cristalino e graves profundos. Possui design confortável, bateria com até 30 horas de reprodução e conectividade Bluetooth 5.0 para uma conexão estável e rápida. Ideal para uso diário, viagens e trabalho.', 'productImages/562e7daa6b0b3c2e86f44b0f36203d1f.jpg', 499.90, 'Wutai', 7);

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
(12, 'Gabriel', 'Empresa', 'gabriel@empresa.com', '$2y$10$l7wg7rp1/LiHv0s8.RSiX.sXmALAmkK5YcLPRV3h3/WOVNuKpDmXm', '2024-06-01', '2024-06-07 08:48:24'),
(13, 'Gabriel', 'Wutai', 'gabriel@wutai.com', '$2y$10$FfyM1xe5oqXDELnTCb4j5eAfFcrhvGjFcLYiG6/NWoPt4r.rPJeZW', '2024-06-09', '2024-06-09 01:39:14'),
(14, 'Usuario', 'Novo', 'usuario@novo.com', '$2y$10$hHq3BK7mrf1kWRuKT68ITu4dRoYPbMPGLttwFONj3XclWFKc9R/Tq', '0000-00-00', '2024-06-11 23:21:21'),
(15, 'Rogerio', 'Antonio', 'rogerio@antonio', '$2y$10$MN3qFq62nbmEa0i1r8JZpONC4zagXduuiJ8JMr5ktemo6BTBh5SlC', '0000-00-00', '2024-06-11 23:25:08'),
(16, 'Usuario2', 'Novo2', 'usuario2@novo2.com', '$2y$10$n2GTOBvL.AP4JlB2FegqTusAEnPyMpCLMSvDkKIGlzrkzDhryfUpW', '0000-00-00', '2024-06-11 23:27:38'),
(17, 'Usuario3', 'Novo3', 'usuario3@novo3.com', '$2y$10$MdA3G4lWkWf3e.NQuyDzrO0qTZrUPbhY82xJS7AUSjGOkPn5dNYGu', '0000-00-00', '2024-06-11 23:30:52'),
(18, 'Usuario4', 'Novo4', 'usuario4@novo4.com', '$2y$10$aJvrut4GiJUUR4CL/dl5I.Ze2/4zC8WZkV5CnExD7mmpa.PP5WWVq', '0000-00-00', '2024-06-11 23:32:50'),
(19, 'Usuario5', 'Novo5', 'usuario5@novo5.com', '$2y$10$2LR77L1fX1Ap1bZblA7M8.duICQvBQvr27wObVuph0U6waO2gpt8e', '0000-00-00', '2024-06-11 23:35:04'),
(20, 'Usuario6', 'Novo6', 'usuario6@novo6.com', '$2y$10$PGIpFc7SIbvqg5X6WV4bkeYE9YqfDOE9tflgjPw3Z5wBFxI1v/Fve', '0000-00-00', '2024-06-11 23:39:12'),
(21, 'Usuario7', 'Novo7', 'usuario7@novo7.com', '$2y$10$lbHC.9UBJpmjmnwJP2HJp.L/CQkyCFk2jHd4/josiaX9HiiyaCZ5K', '0000-00-00', '2024-06-11 23:41:50'),
(22, 'Usuario8', 'Novo8', 'usuario8@novo8.com', '$2y$10$GQ3U7HZCWcdGGVwtSj1J0eLKMyRBRDeIYSwHGE50APeazVvtajKKG', '0000-00-00', '2024-06-11 23:48:08'),
(23, 'Usuario9', 'Novo9', 'usuario9@novo9.com', '$2y$10$Ows8OcnM03GyL/RPHgRkCeXx2vPGkS60AQedzkQclvbO9kyvvvSou', '0000-00-00', '2024-06-11 23:50:03'),
(24, 'Usuario0', 'Novo0', 'usuario0@novo0.com', '$2y$10$KlfOEnY8AH7E6lrQ63NapuTSxmO8fNZ3VvfU7Qm9jhCu2dn57/ZEu', '0000-00-00', '2024-06-11 23:51:20'),
(25, 'Rogerio2', 'Antonio2', 'rogerio2@antonio2', '$2y$10$7vfO.PJM8quTcd1EVflH9.kY987J1Bt3ZBQ1FxK1Ux2RlMAq8o1A6', '0000-00-00', '2024-06-11 23:56:04'),
(26, 'Rogerio3', 'Antonio3', 'rogerio3@antonio3', '$2y$10$UpeNm4DEXheD7K0D2cCgA.NN6g1FqPGHTCon6E.0FROVmufnrzszC', '0000-00-00', '2024-06-11 23:57:28'),
(27, 'Rogerio4', 'Antonio4', 'rogerio4@antonio4', '$2y$10$T4EPaIOC7AXN0AySjiAGr.OyOUdXiuMygwrRawoBGyErmHHyTE.ti', '0000-00-00', '2024-06-11 23:58:43'),
(28, 'Rogerio5', 'Antonio5', 'rogerio5@antonio5', '$2y$10$Fe5z71xsYoiUTr9y4NeiM.YWNI3vQBJ535IZ/sWvI9rsb659kgzrm', '0000-00-00', '2024-06-12 00:01:57'),
(29, 'Rogerio7', 'Antonio7', 'rogerio7@antonio7', '$2y$10$EK3R09XFIYQ80/lJn0K7fOfuz4199GbQC.nXvWmQNcDubjMCofpoq', '0000-00-00', '2024-06-12 00:06:46'),
(30, 'Rogerio8', 'Antonio8', 'rogerio8@antonio8', '$2y$10$vW4CcwAGrmHUls/eEaH.9.RJdAJFF1pJZaSj5G3UGto0ZBXiFwS3O', '0000-00-00', '2024-06-12 00:11:56');

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
  MODIFY `idAddress` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `cart`
--
ALTER TABLE `cart`
  MODIFY `idCart` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `idCartItem` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT de tabela `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `seller`
--
ALTER TABLE `seller`
  MODIFY `idSeller` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `idUser` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

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
