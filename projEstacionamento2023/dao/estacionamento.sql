-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/06/2023 às 00:52
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estacionamento`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `historicos`
--

CREATE TABLE `historicos` (
  `id` int(11) DEFAULT NULL,
  `entrada` datetime DEFAULT NULL,
  `placa` varchar(220) DEFAULT NULL,
  `cor` varchar(220) DEFAULT NULL,
  `modelo` varchar(220) DEFAULT NULL,
  `marca` varchar(220) DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `saida` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `entrada` datetime DEFAULT NULL,
  `placa` varchar(220) NOT NULL,
  `cor` varchar(220) NOT NULL,
  `modelo` varchar(220) NOT NULL,
  `marca` varchar(220) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `saida` datetime DEFAULT NULL,
  `lojaConv` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `horarios`
--

INSERT INTO `horarios` (`id`, `entrada`, `placa`, `cor`, `modelo`, `marca`, `data_cadastro`, `saida`, `lojaConv`) VALUES
(120, '2023-05-02 18:13:13', '123', 'azul', 'palio', 'fiat', '2023-05-02 21:13:28', '2023-05-02 23:13:28', ''),
(121, '2023-05-02 18:16:29', '452', 'verde', 'ferrari', 'ferrari', '2023-05-02 21:17:03', '2023-05-02 23:17:03', ''),
(122, '2023-05-02 18:21:05', '3235', 'vermelho', 'bmw', 'bmw', '2023-05-02 21:21:15', '2023-05-02 23:21:15', ''),
(123, '2023-05-05 19:09:51', 'tew', 'sacasdc', 'dscas', 'asdcdas', '2023-05-05 22:43:41', '2023-05-06 00:43:41', ''),
(124, '2023-05-05 19:43:55', 'qqq', 'qqq', 'qqq', 'qqq', '2023-05-20 20:43:19', '2023-05-20 22:43:19', 'Selecione'),
(130, '2023-05-13 20:26:13', 'TESTE', 'TESTE', 'TERST', 'TESTE', '2023-05-27 16:59:09', '2023-05-27 18:59:09', ''),
(131, '0000-00-00 00:00:00', 'pp', 'ppp', 'pp', 'p', '2023-06-01 02:10:05', NULL, ''),
(132, '0000-00-00 00:00:00', 'pp', 'pp', 'ppp', 'pp', '2023-05-13 23:50:28', NULL, ''),
(133, '2013-05-23 21:05:41', 'aa', 'aa', 'aa', 'aa', '2023-05-14 00:05:41', NULL, ''),
(134, '2023-05-13 21:11:30', 'bb', 'bb', 'bb', 'bb', '2023-05-14 00:11:30', NULL, ''),
(135, '2023-05-13 21:24:23', 'cc', 'cc', 'cc', 'cc', '2023-05-14 00:24:23', NULL, ''),
(136, '0000-00-00 00:00:00', 'cc', 'cc', 'mm', 'mm', '2023-05-14 00:46:17', NULL, ''),
(137, '0000-00-00 00:00:00', 'qq', 'qq', 'qq', 'qqq', '2023-05-14 00:46:38', NULL, ''),
(138, '2023-05-13 21:50:07', 'dd', 'dd', 'dd', 'dd', '2023-05-14 00:50:07', NULL, ''),
(139, '2013-05-23 21:52:57', '31245', 'verde', 'bmw', 'ferrari', '2023-05-14 00:52:57', NULL, ''),
(140, '0000-00-00 00:00:00', '1', '1', '1', '1', '2023-05-14 00:56:03', NULL, ''),
(141, '2023-05-13 22:04:34', '22', '22', '22', '22', '2023-05-14 01:04:34', NULL, ''),
(142, '0000-00-00 00:00:00', '00', '00', '00', '00', '2023-05-15 18:27:50', NULL, ''),
(143, '0000-00-00 00:00:00', '11', '11', '11', '11', '2023-05-15 18:32:00', NULL, ''),
(144, '0000-00-00 00:00:00', '22', '22', '22', '22', '2023-05-15 18:32:53', NULL, ''),
(145, '0000-00-00 00:00:00', '33', '33', '3', '3', '2023-05-15 18:34:38', NULL, ''),
(146, '2023-05-15 15:45:26', '4', '4', '4', '4', '2023-05-15 18:45:26', NULL, ''),
(147, '2023-05-20 18:00:57', 'bb', 'bb', 'bb', 'bb', '2023-05-20 21:00:57', NULL, ''),
(148, '0000-00-00 00:00:00', 'cc', 'cc', 'cc', 'cc', '2023-05-20 21:01:33', NULL, ''),
(149, '2023-05-20 18:06:24', 'vv', 'vv', '', 'vv', '2023-05-20 21:14:42', '2023-05-20 23:14:42', ''),
(150, '2023-05-20 18:48:45', 'qw', 'qw', 'qw', 'qw', '2023-05-20 21:48:45', NULL, ''),
(151, '2023-05-22 15:29:11', 'zz', 'zz', 'zz', '88', '2023-05-28 19:22:55', NULL, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `lista`
--

CREATE TABLE `lista` (
  `id` int(11) DEFAULT NULL,
  `entrada` datetime DEFAULT NULL,
  `placa` varchar(220) DEFAULT NULL,
  `cor` varchar(220) DEFAULT NULL,
  `modelo` varchar(220) DEFAULT NULL,
  `marca` varchar(220) DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `saida` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `loja`
--

CREATE TABLE `loja` (
  `idLoja` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `cnpj` varchar(15) NOT NULL,
  `email` varchar(220) NOT NULL,
  `telefone` varchar(220) NOT NULL,
  `saldo` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `loja`
--

INSERT INTO `loja` (`idLoja`, `id`, `nome`, `cnpj`, `email`, `telefone`, `saldo`) VALUES
(9, 0, '11', '111', '1111@222', '', 0.00),
(10, 0, '22', '22', '222@22', '', 0.00),
(11, 0, 'wilson', '111', 'TESTE@WEDE2', '', 0.00),
(12, 0, 'qq', 'qq', 'qqq@qq', '', 0.00),
(13, 0, 'oi', '123456', 'oi@oi', '00', 0.00),
(14, 0, 'hh', 'hh', 'hhhh@hh', 'hh', 0.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `naofinalizado`
--

CREATE TABLE `naofinalizado` (
  `id` int(11) DEFAULT NULL,
  `entrada` datetime DEFAULT NULL,
  `placa` varchar(220) DEFAULT NULL,
  `cor` varchar(220) DEFAULT NULL,
  `modelo` varchar(220) DEFAULT NULL,
  `marca` varchar(220) DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `saida` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tarifas`
--

CREATE TABLE `tarifas` (
  `id` int(11) NOT NULL,
  `tarifa` decimal(13,2) NOT NULL,
  `datas` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `usuario` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tarifas`
--

INSERT INTO `tarifas` (`id`, `tarifa`, `datas`, `usuario`) VALUES
(27, 10.00, '2023-05-28 00:00:00', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL,
  `data_nasc` date NOT NULL,
  `adm` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `data_nasc`, `adm`) VALUES
(3, 'wilson', 'wilsonjanuario@ymail.com', '123456', '2023-03-01', 1),
(6, 'usuario comum', 'ryan@ymail.com', '123456', '0000-00-00', 0),
(17, 'ryann', 'oi@oi', 'e10adc3949ba59abbe56e057f20f883e', '2023-05-02', 1),
(18, 'teste', 'teste@teste', '123456', '2023-05-02', 0),
(19, 'oi', 'oi@oi', 'e10adc3949ba59abbe56e057f20f883e', '2023-05-02', 0),
(20, 'wilson', 'wilsonjanuario@ymail.com', 'e10adc3949ba59abbe56e057f20f883e', '2023-05-02', 1),
(21, 'Ryan', 'ryan@ymail.com', 'e10adc3949ba59abbe56e057f20f883e', '2023-05-02', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `loja`
--
ALTER TABLE `loja`
  ADD PRIMARY KEY (`idLoja`);

--
-- Índices de tabela `tarifas`
--
ALTER TABLE `tarifas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT de tabela `loja`
--
ALTER TABLE `loja`
  MODIFY `idLoja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tarifas`
--
ALTER TABLE `tarifas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
