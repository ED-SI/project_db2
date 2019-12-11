-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Dez-2019 às 22:50
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `autor` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `editora` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `forma_recebimento` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `data_recebimento` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id`, `titulo`, `autor`, `editora`, `forma_recebimento`, `data_recebimento`) VALUES
(9, 'Arquitetura de Computadores2', 'Hennessy', 'McGrawHill', 'Doação', '2019-12-09'),
(10, 'Introducao aos Algoritmos2', 'Cormen', 'MIT Press', 'Compra', '2019-12-09'),
(13, 'Dominando Linux2', 'Wang', 'Elsevier', 'Doação', '2019-12-09'),
(17, 'Introducao a Java2', 'Liang', 'Prentice Hall', 'Doação', '2019-12-09'),
(16, 'Arquitetura de Sistemas', 'Burd', 'Course Technology', 'Compra', '2019-12-06');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
