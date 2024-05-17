-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/05/2024 às 22:37
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
-- Estrutura para tabela `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `name` varchar(60) NOT NULL,
  `surname` varchar(60) NOT NULL,
  `email` varchar(90) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `email`, `password`, `birthdate`) VALUES
(1, 'teste', 'teste', 'teste@test.com', '123456', '2024-05-17'),
(2, 'ASD', 'Teste2', 'teste@test2.com', '$2y$10$cce4264QD3tP5kruqsK69OaamhGCST89Z66gRt/aPTmHBrW8phypW', '2024-05-17'),
(3, '', '', '', '$2y$10$smS//oBABO9CzYrXN2pW/eJywX.7b2VsHXh/xyCAQug6FHq.blbQW', '0000-00-00'),
(4, '', '', '', '$2y$10$WtTMOvfF9tYbXs.nVDXCnugI/jJqB/kKOxcQnlgjgrFPiUOOzwdea', '0000-00-00'),
(5, '', '', '', '$2y$10$3BjFVBnzyfLsBsGAYWUogO6I36g4CtSH9.SGRIKBKZ5CyZKG4U7Au', '0000-00-00'),
(6, 'ASD', 'Teste2', 'ASD@ASDFF', '$2y$10$rFVFuvCDX5hNZ9WMjZqRtOpxARSrtzuLn7sDtDnxu2VIFUT8JgjLS', '2024-05-17');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
