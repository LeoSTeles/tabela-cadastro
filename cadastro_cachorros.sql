-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Nov-2021 às 16:49
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_cachorros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cachorro`
--

CREATE TABLE `cachorro` (
  `id` int(11) NOT NULL,
  `nome` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `raca` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idade` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cachorro`
--

INSERT INTO `cachorro` (`id`, `nome`, `raca`, `idade`, `created_at`, `updated_at`) VALUES
(1, 'Mel', 'Poodle', 12, '2021-11-04 00:00:01', '00:00:00'),
(8, 'Jake', 'Pinscher', 10, '2021-11-04 15:38:16', '12:38:16'),
(9, 'Pepeu', 'Labrador', 5, '2021-11-04 15:31:48', '15:31:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `raca`
--

CREATE TABLE `raca` (
  `id_raca` int(11) NOT NULL,
  `nome_raca` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `raca`
--

INSERT INTO `raca` (`id_raca`, `nome_raca`, `created_at`, `updated_at`) VALUES
(1, 'Rotweiller', '2021-11-03 23:53:23', '0000-00-00'),
(2, 'Poodle', '2021-11-03 23:53:23', '0000-00-00'),
(3, 'Labrador', '2021-11-03 23:53:23', '0000-00-00'),
(6, 'Akita', '2021-11-04 12:26:01', '2021-11-04'),
(7, 'Basset', '2021-11-04 12:26:16', '2021-11-04'),
(8, 'Beagle', '2021-11-04 12:26:37', '2021-11-04'),
(9, 'Bichon', '2021-11-04 12:26:37', '2021-11-04'),
(10, 'Terrier', '2021-11-04 12:28:59', '2021-11-04'),
(11, 'Boxer', '2021-11-04 12:28:59', '2021-11-04'),
(12, 'Buldogue Francês', '2021-11-04 12:28:59', '2021-11-04'),
(13, 'Buldogue Inglês', '2021-11-04 12:28:59', '2021-11-04'),
(14, 'Bull Terrier', '2021-11-04 12:28:59', '2021-11-04'),
(15, 'Chihuahua', '2021-11-04 12:28:59', '2021-11-04'),
(16, 'Chow Chow', '2021-11-04 12:28:59', '2021-11-04'),
(17, 'Dachshund', '2021-11-04 12:28:59', '2021-11-04'),
(18, 'Dálmata', '2021-11-04 12:28:59', '2021-11-04'),
(19, 'Doberman', '2021-11-04 12:28:59', '2021-11-04'),
(20, 'Dogue Alemão', '2021-11-04 12:28:59', '2021-11-04'),
(21, 'Fila', '2021-11-04 12:28:59', '2021-11-04'),
(22, 'Golden Retriever', '2021-11-04 12:28:59', '2021-11-04'),
(23, 'Husky Siberiano', '2021-11-04 12:28:59', '2021-11-04'),
(24, 'Maltês', '2021-11-04 12:28:59', '2021-11-04'),
(25, 'Pastor Alemão', '2021-11-04 12:30:03', '2021-11-04'),
(26, 'Pequinês', '2021-11-04 12:30:03', '2021-11-04'),
(27, 'Pinscher', '2021-11-04 12:30:03', '2021-11-04'),
(28, 'Pitbull', '2021-11-04 12:30:03', '2021-11-04'),
(29, 'Pug', '2021-11-04 12:30:03', '2021-11-04'),
(30, 'Shi Tzu', '2021-11-04 12:30:03', '2021-11-04'),
(31, 'Yorkshire', '2021-11-04 12:30:03', '2021-11-04');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cachorro`
--
ALTER TABLE `cachorro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `raca`
--
ALTER TABLE `raca`
  ADD PRIMARY KEY (`id_raca`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cachorro`
--
ALTER TABLE `cachorro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `raca`
--
ALTER TABLE `raca`
  MODIFY `id_raca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
