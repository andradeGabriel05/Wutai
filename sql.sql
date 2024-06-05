-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/06/2024 às 05:40
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
(2, 8, '2024-06-03 12:01:18');

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
(61, 1, 3, 5, '2024-06-03 10:22:54'),
(64, 2, 12, 1, '2024-06-03 21:03:14'),
(66, 2, 13, 1, '2024-06-03 23:35:26'),
(68, 2, 1, 1, '2024-06-03 23:45:38');

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
  `price` decimal(10,0) NOT NULL,
  `deliver` varchar(60) NOT NULL,
  `idSeller` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `product`
--

INSERT INTO `product` (`idProduct`, `productName`, `category`, `quantity`, `productDescription`, `productImage`, `price`, `deliver`, `idSeller`) VALUES
(1, 'teste', '1', 7, 'asdaasd', 'HD-wallpaper-plain-black-black.jpg', 123, '', 3),
(2, 'teste2', 'drink', 4, 'asdasd', 'kisspng-silhouette-project-wolfpack-dog-wolf-5ad0a56d8d2f30.7181102015236232775783.png', 1231231, '', 3),
(3, 'Copo Mágico', 'drink', 12, 'O Copo Mágico é feito de material resistente e possui um design inovador. Ele muda de cor quando você coloca líquido quente dentro, revelando uma imagem surpresa. Perfeito para presentear alguém especial ou para uso pessoal!', 'plano.png', 29, '', 4),
(4, 'Delícia Tropical de Manga', 'food', 10, 'A Delícia Tropical de Manga é uma seleção premium de mangas frescas e suculentas, colhidas no ponto ideal de maturação. Cada fruta é cuidadosamente selecionada para garantir a máxima doçura e sabor intenso. Perfeitas para sucos, saladas de frutas ou como um lanche saudável e refrescante.', 'plano.png', 15, 'Wutai', 4),
(5, 'Pão Artesanal de Azeitonas Pretas', 'food', 13, 'Nosso Pão Artesanal de Azeitonas Pretas é feito com uma receita tradicional e ingredientes selecionados. Cada pão é recheado com azeitonas pretas de alta qualidade, cultivadas sob o sol mediterrâneo, que conferem um sabor único e uma textura irresistível. Ideal para acompanhar refeições ou como um delicioso lanche.', 'wolfSilhueta2.png', 8, 'empresaBucha', 3),
(6, 'Elegância Aromática - Difusor de Ambiente Lavanda', 'perfumery', 3, 'O Elegância Aromática é um difusor de ambiente com essência de lavanda que promete transformar sua casa em um santuário de tranquilidade. Com notas calmantes e um design elegante, ele é perfeito para criar um ambiente relaxante após um longo dia de trabalho.', '144@2x.png', 35, 'Wutai', 4),
(7, 'Kit Jardinagem Urbana - Sementes de Temperos', 'food', 30, 'O Kit Jardinagem Urbana é ideal para quem deseja cultivar seus próprios temperos em casa. Com uma seleção de sementes de manjericão, salsinha, cebolinha e alecrim, este kit oferece tudo que você precisa para começar seu pequeno jardim de ervas. Além das sementes, o kit inclui vasos biodegradáveis, terra orgânica e marcadores de plantio.', 'productImages/65f8ada0133b4513c1446e42b78c9be2jpg', 27, 'Wutai', 3),
(8, 'Café Especial da Montanha', 'drink', 25, 'O Café Especial da Montanha é uma seleção exclusiva de grãos de café arábica, cultivados nas altitudes elevadas das montanhas brasileiras. Com notas de chocolate e caramelo, este café oferece uma experiência de sabor rica e encorpada. Perfeito para os apreciadores de um bom café, seja para começar o dia ou para uma pausa revigorante.', 'productImages/dd3504bcddf17ec49aab4f391fd441a9jpg', 42, 'Wutai', 3),
(9, 'Chá de Ervas Relaxante Serenitea', 'drink', 20, 'O Chá de Ervas Relaxante Serenitea é uma combinação harmoniosa de camomila, erva-cidreira, lavanda e menta. Cada ingrediente foi escolhido por suas propriedades calmantes e relaxantes, criando uma infusão perfeita para desfrutar antes de dormir ou em momentos de pausa durante o dia.', 'productImages/6df949d9ecbe83c80c9c5126c10aed6cjpg', 19, 'Wutai', 3),
(10, 'Óleo Essencial de Eucalipto Puro', 'health', 10, 'Nosso Óleo Essencial de Eucalipto Puro é extraído diretamente das folhas de eucalipto mais frescas, garantindo um produto de alta qualidade com propriedades revigorantes e purificantes. Ideal para uso em difusores, como parte de sua rotina de bem-estar ou para massagens relaxantes.', 'productImages/42966d33f4549641846900578c425571.jpg', 24, 'Wutai', 4),
(11, 'Mochila Outdoor Explorer', 'apparel', 20, 'A Mochila Outdoor Explorer é o companheiro perfeito para suas aventuras ao ar livre. Com capacidade para 40 litros, possui compartimentos versáteis para armazenar seus pertences de forma organizada. Feita de material resistente à água, esta mochila é ideal para trilhas, acampamentos e viagens. Possui alças acolchoadas e ajustáveis para garantir conforto durante o uso prolongado. Além disso, conta com um sistema de ventilação nas costas para mantê-lo fresco mesmo nos dias mais quentes. Leve, durável e prática, a Mochila Outdoor Explorer é essencial para qualquer amante da natureza.', 'productImages/ba4160b2e52158745e5c967e1b1ffd40.jpg', 199, 'Wutai', 4),
(12, 'Fone de Ouvido Bluetooth FlexTune', 'electronic', 30, 'Experimente a liberdade sem fios com o Fone de Ouvido Bluetooth FlexTune. Este fone de ouvido sem fio oferece uma experiência auditiva excepcional, com áudio nítido e graves profundos. Compatível com dispositivos Bluetooth, como smartphones, tablets e laptops, este fone de ouvido é perfeito para ouvir música, assistir a filmes ou fazer chamadas com as mãos livres. Seu design ergonômico e leve proporciona conforto durante horas de uso, enquanto os controles integrados permitem ajustar o volume, pular faixas e atender chamadas com facilidade. Com a tecnologia de cancelamento de ruído, você pode desfrutar de sua música favorita sem distrações externas. O Fone de Ouvido Bluetooth FlexTune é o parceiro ideal para o seu estilo de vida ativo e conectado.', 'productImages/0a59e867f403c4507fc8869f5564a247.jpg', 149, 'empresaBucha', 3),
(13, 'Mochila Eco-Explorer', 'apparel', 50, 'A Mochila Eco-Explorer é perfeita para os amantes da natureza e dos ambientes ao ar livre. Feita com materiais reciclados e sustentáveis, esta mochila é projetada para ser leve, durável e funcional. Com compartimentos ajustáveis, bolsos externos para garrafas de água e um design ergonômico, ela é ideal para trilhas, camping, e todas as aventuras que você possa imaginar. Seu interior espaçoso permite levar todos os seus itens essenciais com facilidade, enquanto suas alças acolchoadas garantem conforto durante todo o trajeto. Além disso, por cada mochila vendida, uma árvore será plantada em áreas de reflorestamento, contribuindo para um planeta mais verde e saudável.', 'productImages/eef3ee06a1e1df5d84c05ca23789ca5a.jpg', 129, 'Wutai', 3);

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
(3, 'empresaBucha', '2024-06-01 02:28:13', 8),
(4, 'Wutai Company', '2024-06-01 23:02:04', 11);

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
(10, 'Gabriel2', 'Lima2', 'gabriel@lima.com', '$2y$10$zFuOMEVaqjCGjXyzurTDcudYv02egwzJHFus5eTxdF8yr0wSyN0Ui', '0000-00-00', '2024-05-31 21:13:08'),
(11, 'Wutai', 'Company', 'wutai@company.com', '$2y$10$GBY4uj6NmA9/QGN/VSH1AOS1zbBKQ1oJbplAWeHgDRlj4oPY.GG5y', '2024-06-01', '2024-06-01 22:57:44');

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
  ADD PRIMARY KEY (`idUser`);

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
  MODIFY `idCart` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `idCartItem` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de tabela `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `seller`
--
ALTER TABLE `seller`
  MODIFY `idSeller` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `idUser` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
