-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 25/06/2024 às 03:30
-- Versão do servidor: 8.3.0
-- Versão do PHP: 8.2.18

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
CREATE DATABASE IF NOT EXISTS `wutai` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `wutai`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `idAddress` int NOT NULL AUTO_INCREMENT,
  `completeName` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `zipcode` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `state` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `country` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `address` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `houseNumber` smallint NOT NULL,
  `complement` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `neighborhood` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `phoneNumber` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `idUser` bigint NOT NULL,
  PRIMARY KEY (`idAddress`),
  KEY `fkUserAddress` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Despejando dados para a tabela `address`
--

INSERT INTO `address` (`idAddress`, `completeName`, `zipcode`, `state`, `city`, `country`, `address`, `houseNumber`, `complement`, `neighborhood`, `phoneNumber`, `idUser`) VALUES
(28, 'ga an', '08257', 'SP', 'São Paulo', 'brasil', 'casas', 40, 'casa', 'regiao nordeste', '40028922', 11),
(33, 'teste usuario', '08257-080', 'Rondonia', 'Rio Grande do Norte', 'Argentina', 'casas', 123, 'casa', 'regiao nordeste', '11945376714', 8),
(34, 'ga an', '31231', 'São Paulo', 'São Paulo', 'Brasil', 'casas', 0, 'casa', 'RODEIOOOO', '40028922', 8),
(38, 'Gabriel Lima Andrade', '08253000', 'SP', 'São Paulo', 'Brasil', 'Rua Virgínia Ferni', 400, 'escola', 'Conjunto Residencial José Bonifácio', '1140028922', 13),
(39, 'Antonio Evanildo de Ol', '01001000', 'SP', 'São Paulo', 'Brasil', 'Praça da Sé', 400, 'escola', 'Sé', '21332112', 27),
(41, 'Gabriel Lima Andrade', '08257-080', 'SP', 'São Paulo', 'Brasil', 'Rua Fascinação', 400, 'escola', 'Conjunto Residencial José Bonifácio', '11988414152', 27),
(42, 'Gabriel Lima Andrade', '08257010', 'SP', 'São Paulo', 'Brasil', 'Rua Águas de Março', 0, '', 'Conjunto Residencial José Bonifácio', '11932269949', 27);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `idCart` bigint NOT NULL AUTO_INCREMENT,
  `idUser` bigint NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idCart`),
  KEY `fkUserCart` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

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
(23, 27, '2024-06-11 23:58:50'),
(24, 28, '2024-06-12 00:03:54'),
(25, 29, '2024-06-12 00:07:07'),
(26, 30, '2024-06-12 00:12:06'),
(27, 10, '2024-06-19 20:03:52');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cart_items`
--

DROP TABLE IF EXISTS `cart_items`;
CREATE TABLE IF NOT EXISTS `cart_items` (
  `idCartItem` bigint NOT NULL AUTO_INCREMENT,
  `idCart` bigint NOT NULL,
  `idProduct` bigint NOT NULL,
  `quantity` int NOT NULL,
  `addedDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idCartItem`),
  KEY `fkCartItemsCart` (`idCart`),
  KEY `fkCartItemsProduct` (`idProduct`)
) ENGINE=InnoDB AUTO_INCREMENT=237 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Despejando dados para a tabela `cart_items`
--

INSERT INTO `cart_items` (`idCartItem`, `idCart`, `idProduct`, `quantity`, `addedDate`) VALUES
(210, 7, 21, 1, '2024-06-11 23:30:30'),
(211, 9, 20, 1, '2024-06-11 23:34:43'),
(215, 12, 21, 1, '2024-06-11 23:41:59'),
(224, 26, 18, 1, '2024-06-12 00:12:06'),
(231, 4, 28, 1, '2024-06-18 19:57:51'),
(236, 27, 29, 1, '2024-06-25 00:21:30');

-- --------------------------------------------------------

--
-- Estrutura para tabela `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `idProduct` bigint NOT NULL AUTO_INCREMENT,
  `productName` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `category` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `quantity` int NOT NULL,
  `productDescription` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `productImage` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `deliver` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `idSeller` bigint NOT NULL,
  PRIMARY KEY (`idProduct`),
  KEY `fkIdSeller` (`idSeller`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Despejando dados para a tabela `product`
--

INSERT INTO `product` (`idProduct`, `productName`, `category`, `quantity`, `productDescription`, `productImage`, `price`, `deliver`, `idSeller`) VALUES
(28, 'Caderno de caligrafia chinesa', 'book', 70, 'Caderno de papel especial para praticar caligrafia chinesa, com linhas guia e espaço para aperfeiçoar sua escrita em caracteres chineses.\r\n', 'productImages/34954677ff441979f97800d1c5ec5257.jpg', 24.90, 'Gabriel Empresa', 6),
(29, 'Fone de ouvido Bluetooth', 'electronic', 50, 'Fone de ouvido sem fio com conexão Bluetooth, design confortável e bateria de longa duração. Ideal para música e chamadas.', 'productImages/7692b4fb142541988271da6abd19a030.jpg', 149.90, 'Gabriel Empresa', 6),
(30, 'Conjunto de Panelas Antiaderentes Gourmet', 'food', 40, 'O Conjunto de Panelas Antiaderentes Gourmet é indispensável para quem deseja preparar refeições deliciosas com praticidade e qualidade. Composto por 5 peças (uma caçarola, uma frigideira, uma panela média, uma panela pequena e uma leiteira), todas feitas com revestimento antiaderente de alta durabilidade, que evita que os alimentos grudem e facilita a limpeza. As panelas possuem cabos ergonômicos e tampas de vidro temperado com saídas de vapor. Compatíveis com todos os tipos de fogão, incluindo indução.', 'productImages/72e82c77e227a30a42308f6834e34c75.jpg', 299.90, 'Wutai', 8),
(31, 'Camiseta básica de algodão', 'apparel', 100, 'Camiseta básica de algodão de alta qualidade, perfeita para o dia a dia. Disponível em diversas cores e tamanhos.', 'productImages/dd306dd85885ccb8a07d33fbf61a221d.jpg', 24.90, 'Gabriel Empresa', 6),
(32, 'Ventilador de Mesa Mondial Super Power', 'house', 30, 'O Ventilador de Mesa Mondial Super Power é um aparelho de ventilação eficiente e compacto projetado para uso em mesas e bancadas.', 'productImages/c770d14228b0b360fde0e230a810a551.jpg', 153.00, 'Wutai', 7),
(33, 'Lâmpada de Mesa de Porcelana Chinesa', 'house', 30, 'Esta deslumbrante lâmpada de mesa de porcelana chinesa adicionará um toque de elegância oriental à sua casa. Feita à mão por artesãos habilidosos, apresenta um delicado padrão de flores de ameixa pintadas à mão em uma base de cerâmica branca translúcida. A cúpula de seda dourada complementa perfeitamente o design, criando uma atmosfera de serenidade e beleza em qualquer ambiente.', 'productImages/5d5d3ecb710cc20336acaf0785c83f68.jpg', 180.00, 'Wutai', 7),
(34, 'Mochila Adventure', 'apparel', 50, 'A Mochila Adventure é perfeita para os amantes de viagens e aventuras ao ar livre. Fabricada com materiais duráveis e resistentes à água, esta mochila possui vários compartimentos para organizar seus pertences, um bolso especial para notebook de até 15 polegadas e um design ergonômico que garante conforto durante o uso prolongado. Ideal para trilhas, viagens e uso diário na cidade.', 'productImages/8192207e0e8457a3741da05b6db7383c.jpg', 199.90, 'Wutai', 7),
(35, 'Smartwatch Fitness Pro', 'electronic', 100, 'O Smartwatch Fitness Pro é o companheiro ideal para quem busca um estilo de vida mais saudável e conectado. Com monitoramento de batimentos cardíacos, contador de passos, rastreamento de sono e várias opções de treino, este smartwatch ajuda você a alcançar suas metas de fitness. Além disso, possui notificações de chamadas e mensagens, resistência à água IP68 e uma bateria de longa duração que permite uso contínuo por até 7 dias. Compatível com Android e iOS.', 'productImages/a79618fec4c4268913bc823e31cf7f61.jpg', 349.90, 'Wutai', 7),
(36, 'Fone de Ouvido Bluetooth Noise Cancelling', 'electronic', 75, 'Desfrute de uma experiência de áudio incomparável com o Fone de Ouvido Bluetooth Noise Cancelling. Equipado com tecnologia de cancelamento de ruído ativo, este fone permite que você se concentre apenas na sua música, sem distrações externas. Com drivers de alta fidelidade, proporciona som cristalino e graves profundos. Possui design confortável, bateria com até 30 horas de reprodução e conectividade Bluetooth 5.0 para uma conexão estável e rápida. Ideal para uso diário, viagens e trabalho.', 'productImages/562e7daa6b0b3c2e86f44b0f36203d1f.jpg', 499.90, 'Wutai', 7),
(37, 'Livro de Receitas Veganas', 'book', 120, 'Descubra o mundo da culinária vegana com o Livro de Receitas Veganas. Este livro contém mais de 100 receitas deliciosas e nutritivas, que vão desde pratos principais até sobremesas e lanches. Cada receita é acompanhada por fotos de alta qualidade e instruções detalhadas, tornando o preparo fácil e prazeroso. Ideal para veganos, vegetarianos ou qualquer pessoa interessada em uma alimentação saudável e sustentável. Além disso, inclui dicas nutricionais e sugestões de substituições para ingredientes comuns.', 'productImages/6856e494eca49bb595533a7ed0feae89.jpg', 79.90, 'Wutai', 8),
(38, 'Lâmpada Inteligente Wi-Fi RGB', 'electronic', 200, 'Transforme a atmosfera de qualquer ambiente com a Lâmpada Inteligente Wi-Fi RGB. Controlada via aplicativo no smartphone, esta lâmpada permite que você ajuste a cor e a intensidade da luz conforme sua preferência, criando uma iluminação personalizada para cada ocasião. Compatível com assistentes de voz como Alexa e Google Assistant, ela facilita o controle por comandos de voz. Economize energia com sua tecnologia LED e programe horários para acender e apagar automaticamente. Ideal para salas de estar, quartos e escritórios.', 'productImages/b99bdb056b055ecce6388a2c828d0ece.jpg', 79.90, 'Wutai', 8),
(39, 'Drone de Fotografia Profissional SkyVision', 'electronic', 50, 'Explore novos horizontes com o Drone de Fotografia Profissional SkyVision. Equipado com uma câmera de alta resolução 4K e estabilização de imagem de última geração, este drone captura imagens e vídeos aéreos incríveis com qualidade cinematográfica. Com uma autonomia de voo de até 30 minutos e um alcance de transmissão de até 5 km, permite explorar e registrar paisagens de maneira única. Possui modos inteligentes de voo, como seguimento de objeto e trajetória programada, além de ser dobrável e fácil de transportar. Ideal para fotógrafos, videomakers e entusiastas de tecnologia.', 'productImages/e8276a43a61c5aacf9e0026393696962.jpg', 3499.00, 'Wutai', 8),
(40, 'Smartphone XTech Pro 5G', 'electronic', 100, 'O Smartphone XTech Pro 5G oferece uma experiência móvel de última geração com sua conectividade 5G ultra-rápida, tela AMOLED de 6,7 polegadas com resolução Full HD+ e taxa de atualização de 120Hz. Equipado com um poderoso processador octa-core, 8GB de RAM e 256GB de armazenamento interno, este smartphone garante desempenho excepcional em todas as suas tarefas. A câmera traseira tripla de 64MP captura fotos e vídeos de alta qualidade, enquanto a câmera frontal de 32MP é perfeita para selfies detalhadas. Possui bateria de 5000mAh com carregamento rápido e sistema operacional Android mais recente.', 'productImages/1dbcf731cac4a011cef0938e19c2d819.jpg', 2499.00, 'Wutai', 9),
(41, 'Xiaomi Mi Band 7', 'electronic', 200, 'A Xiaomi Mi Band 7 é a mais recente pulseira inteligente da Xiaomi, projetada para monitorar sua saúde e atividades físicas com precisão. Equipado com uma tela AMOLED de 1,56 polegadas, oferece visibilidade clara e fácil navegação. Inclui recursos como monitoramento de frequência cardíaca, SpO2, sono, passos, calorias queimadas e suporte para mais de 30 modos de exercício. A resistência à água de 5 ATM permite uso durante natação, e a bateria de longa duração oferece até 14 dias de uso com uma única carga. Compatível com Android e iOS, a Mi Band 7 é a escolha perfeita para um estilo de vida ativo e saudável.', 'productImages/d79b4ba56679ed4afa2d001403d02393.jpg', 349.00, 'Wutai', 9),
(42, 'Huawei MateBook D 14', 'electronic', 50, ' O Huawei MateBook D 14 é um laptop elegante e poderoso, ideal para estudantes e profissionais que precisam de desempenho e portabilidade. Equipado com um processador Intel Core i5 de 11ª geração, 8GB de RAM e um SSD de 512GB, este laptop oferece desempenho rápido e eficiente para todas as suas tarefas. A tela Full HD de 14 polegadas com bordas finas proporciona uma experiência visual imersiva. Possui teclado retroiluminado, leitor de impressões digitais integrado para segurança adicional e uma bateria de longa duração que garante produtividade durante todo o dia. Leve e fino, o MateBook D 14 é fácil de transportar e perfeito para o uso diário.', 'productImages/b8994b206721ec950b375908d6ab602e.jpg', 4999.00, 'Wutai', 9);

-- --------------------------------------------------------

--
-- Estrutura para tabela `product_rating`
--

DROP TABLE IF EXISTS `product_rating`;
CREATE TABLE IF NOT EXISTS `product_rating` (
  `idRating` int NOT NULL AUTO_INCREMENT,
  `userRating` tinyint NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ratingImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userMessage` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ratingDate` date NOT NULL,
  `ratingLikes` int DEFAULT NULL,
  `idUser` int NOT NULL,
  `idProduct` int NOT NULL,
  PRIMARY KEY (`idRating`),
  KEY `fkIdUser` (`idUser`),
  KEY `fkIdProduct` (`idProduct`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `product_rating`
--

INSERT INTO `product_rating` (`idRating`, `userRating`, `title`, `ratingImage`, `userName`, `userMessage`, `ratingDate`, `ratingLikes`, `idUser`, `idProduct`) VALUES
(1, 1, '', NULL, '', '', '0000-00-00', 1, 1, 1),
(2, 0, 'asd', NULL, 'Gabriel2', 'asdasd', '2024-06-20', 6, 10, 30),
(3, 0, 'asd', NULL, 'Gabriel2', 'asdasd', '2024-06-20', 2, 10, 30),
(4, 0, 'asd', NULL, 'Gabriel2', 'asd', '2024-06-20', 4, 10, 30),
(5, 0, 'asd', NULL, 'Gabriel2', 'asd', '2024-06-20', NULL, 10, 30),
(6, 0, 'asd', NULL, 'Gabriel2', 'asdasd', '2024-06-20', NULL, 10, 30),
(7, 0, 'asdasd', NULL, 'Gabriel2', 'asdasda', '2024-06-20', 1, 10, 30),
(8, 0, 'asdasd', NULL, 'Gabriel2', 'asdasda', '2024-06-20', 1, 10, 30),
(9, 0, 'asdasd', NULL, 'Gabriel2', 'asdasda', '2024-06-20', NULL, 10, 30),
(10, 0, 'asdasd', NULL, 'Gabriel2', 'asdasda', '2024-06-20', NULL, 10, 30),
(11, 0, 'asdasd', NULL, 'Gabriel2', 'asdasda', '2024-06-20', NULL, 10, 30),
(12, 0, 'asdasd', NULL, 'Gabriel2', 'asdasda', '2024-06-20', NULL, 10, 30),
(13, 0, 'asdasd', NULL, 'Gabriel2', 'asdasdasd', '2024-06-20', 2, 10, 30),
(14, 0, 'asdasd', NULL, 'Gabriel2', 'asdasdasd', '2024-06-20', 4, 10, 30),
(15, 3, 'asdasd', NULL, 'Gabriel2', 'asdasdas', '2024-06-20', 1, 10, 30),
(16, 3, 'asdasd', NULL, 'Gabriel2', 'asdasd', '2024-06-20', 4, 10, 28),
(17, 4, 'asdasd', NULL, 'Gabriel2', 'asdasdasd', '2024-06-20', 1, 10, 28),
(18, 5, 'asdasdasd', NULL, 'Gabriel2', 'asdasdasd', '2024-06-20', 2, 10, 28),
(19, 2, 'äsdas', NULL, 'Gabriel2', 'asdasd', '2024-06-24', NULL, 10, 28);

-- --------------------------------------------------------

--
-- Estrutura para tabela `rating_like`
--

DROP TABLE IF EXISTS `rating_like`;
CREATE TABLE IF NOT EXISTS `rating_like` (
  `IdLike` int NOT NULL AUTO_INCREMENT,
  `idRating` int NOT NULL,
  `idUser` int NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`IdLike`),
  KEY `fkIdRating` (`idRating`),
  KEY `fkIdUser` (`idUser`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `rating_like`
--

INSERT INTO `rating_like` (`IdLike`, `idRating`, `idUser`, `date`) VALUES
(2, 2, 10, '2024-06-24'),
(3, 2, 10, '2024-06-24'),
(4, 14, 10, '2024-06-25'),
(5, 13, 10, '2024-06-25');

-- --------------------------------------------------------

--
-- Estrutura para tabela `seller`
--

DROP TABLE IF EXISTS `seller`;
CREATE TABLE IF NOT EXISTS `seller` (
  `idSeller` bigint NOT NULL AUTO_INCREMENT,
  `enterpriseName` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `creationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idUser` bigint DEFAULT NULL,
  PRIMARY KEY (`idSeller`),
  UNIQUE KEY `enterpriseName` (`enterpriseName`),
  KEY `fkUserSeller` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Despejando dados para a tabela `seller`
--

INSERT INTO `seller` (`idSeller`, `enterpriseName`, `creationDate`, `idUser`) VALUES
(6, 'Gabriel Empresa', '2024-06-07 10:27:51', 12),
(7, 'Wutai Company', '2024-06-07 12:58:50', 11),
(8, 'Gabriel Wutai', '2024-06-18 11:19:02', 13),
(9, 'Gabriel Lima', '2024-06-19 14:44:25', 10);

-- --------------------------------------------------------

--
-- Estrutura para tabela `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `surname` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(90) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `createdDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idUser`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

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
(11, 'Wutai', 'Company', 'wutai@company.com', '$2y$10$xPLiZWOlXL85HTSvpm9LK.ohMcH2NYYEM0T7mSrYwMkM7kx6u0kEG', '2024-06-01', '2024-06-01 22:57:44'),
(12, 'Gabriel', 'Empresa', 'gabriel@empresa.com', '$2y$10$l7wg7rp1/LiHv0s8.RSiX.sXmALAmkK5YcLPRV3h3/WOVNuKpDmXm', '2024-06-01', '2024-06-07 08:48:24'),
(13, 'Gabriel', 'Wutai', 'gabriel@wutai.com', '123456', '2024-06-09', '2024-06-09 01:39:14'),
(14, 'Usuario', 'Novo', 'usuario@novo.com', '$2y$10$hHq3BK7mrf1kWRuKT68ITu4dRoYPbMPGLttwFONj3XclWFKc9R/Tq', '0000-00-00', '2024-06-11 23:21:21'),
(15, 'Rogerio', 'Antonio', 'rogerio@antonio', '$2y$10$X7EmhtVC7ms9QIwFm.jStOKsgtJXaJF01VSMVPAiiI4koMCafqz5S', '0000-00-00', '2024-06-11 23:25:08'),
(16, 'Usuario2', 'Novo2', 'usuario2@novo2.com', '$2y$10$n2GTOBvL.AP4JlB2FegqTusAEnPyMpCLMSvDkKIGlzrkzDhryfUpW', '0000-00-00', '2024-06-11 23:27:38'),
(17, 'Usuario3', 'Novo3', 'usuario3@novo3.com', '$2y$10$MdA3G4lWkWf3e.NQuyDzrO0qTZrUPbhY82xJS7AUSjGOkPn5dNYGu', '0000-00-00', '2024-06-11 23:30:52'),
(18, 'Usuario4', 'Novo4', 'usuario4@novo4.com', '$2y$10$aJvrut4GiJUUR4CL/dl5I.Ze2/4zC8WZkV5CnExD7mmpa.PP5WWVq', '0000-00-00', '2024-06-11 23:32:50'),
(19, 'Usuario5', 'Novo5', 'usuario5@novo5.com', '$2y$10$2LR77L1fX1Ap1bZblA7M8.duICQvBQvr27wObVuph0U6waO2gpt8e', '0000-00-00', '2024-06-11 23:35:04'),
(20, 'Usuario6', 'Novo6', 'usuario6@novo6.com', '$2y$10$PGIpFc7SIbvqg5X6WV4bkeYE9YqfDOE9tflgjPw3Z5wBFxI1v/Fve', '0000-00-00', '2024-06-11 23:39:12'),
(21, 'Usuario7', 'Novo7', 'usuario7@novo7.com', '$2y$10$lbHC.9UBJpmjmnwJP2HJp.L/CQkyCFk2jHd4/josiaX9HiiyaCZ5K', '0000-00-00', '2024-06-11 23:41:50'),
(22, 'Usuario8', 'Novo8', 'usuario8@novo8.com', '$2y$10$GQ3U7HZCWcdGGVwtSj1J0eLKMyRBRDeIYSwHGE50APeazVvtajKKG', '0000-00-00', '2024-06-11 23:48:08'),
(23, 'Usuario9', 'Novo9', 'usuario9@novo9.com', '$2y$10$Ows8OcnM03GyL/RPHgRkCeXx2vPGkS60AQedzkQclvbO9kyvvvSou', '0000-00-00', '2024-06-11 23:50:03'),
(24, 'Usuario0', 'Novo0', 'usuario0@novo0.com', '$2y$10$KlfOEnY8AH7E6lrQ63NapuTSxmO8fNZ3VvfU7Qm9jhCu2dn57/ZEu', '0000-00-00', '2024-06-11 23:51:20'),
(27, 'Rogerio4', 'Antonio4', 'rogerio4@antonio4', '$2y$10$T4EPaIOC7AXN0AySjiAGr.OyOUdXiuMygwrRawoBGyErmHHyTE.ti', '0000-00-00', '2024-06-11 23:58:43'),
(28, 'Rogerio5', 'Antonio5', 'rogerio5@antonio5', '$2y$10$Fe5z71xsYoiUTr9y4NeiM.YWNI3vQBJ535IZ/sWvI9rsb659kgzrm', '0000-00-00', '2024-06-12 00:01:57'),
(29, 'Rogerio7', 'Antonio7', 'rogerio7@antonio7', '$2y$10$EK3R09XFIYQ80/lJn0K7fOfuz4199GbQC.nXvWmQNcDubjMCofpoq', '0000-00-00', '2024-06-12 00:06:46'),
(30, 'Rogerio8', 'Antonio8', 'rogerio8@antonio8', '$2y$10$vW4CcwAGrmHUls/eEaH.9.RJdAJFF1pJZaSj5G3UGto0ZBXiFwS3O', '0000-00-00', '2024-06-12 00:11:56');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
