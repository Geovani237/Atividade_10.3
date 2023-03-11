-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Mar-2023 às 02:15
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_tarefa`
--
CREATE DATABASE IF NOT EXISTS `db_tarefa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_tarefa`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id` int(11) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `rua` varchar(200) NOT NULL,
  `numero` int(6) NOT NULL,
  `bairro` varchar(200) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`id`, `cpf`, `nome`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `email`, `telefone`, `senha`) VALUES
(1, '1', 'teste', 'teste', 0, 'teste', 'teste', 'tes', 'teste@gmail.com', 'teste', '123'),
(2, '2', 'teste', 'teste', 0, '', 'teste', 'tes', 'teste@gmail.com', 'teste', '123'),
(3, '2', 'teste', 'teste', 0, '', 'teste', 'tes', 'teste@gmail.com', 'teste', '123'),
(4, '2', 'teste', 'teste', 0, '', 'teste', 'tes', 'teste@gmail.com', 'teste', '123'),
(5, '-2', 'teste', 'teste', 0, '55', 'teste', 'tes', 'teste@gmail.com', 'teste', '123'),
(6, '19216716809', 'Marquinhos', 'Afanso.marilha', 698, 'joao pessoa', 'Londrina', 'SP', 'Marcosdogg@gmail.com', '19996753879', '123456'),
(7, '1921680168', 'rosana', 'zanaga', 789, '55', 'teste', 'tes', 'teste@gmail.com', 'teste', '123'),
(8, '12', 'teste', 'Afanso.marilha', 698, 'joao pessoa', 'Londrina', 'tes', 'geovani.tg@hotmail.com', '19996753879', '321');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produto`
--

CREATE TABLE `tb_produto` (
  `id` int(11) NOT NULL,
  `nome_produto` varchar(30) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `quantidade` int(6) NOT NULL,
  `preco_compra` varchar(10) NOT NULL,
  `preco_venda` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tb_produto`
--

INSERT INTO `tb_produto` (`id`, `nome_produto`, `categoria`, `quantidade`, `preco_compra`, `preco_venda`) VALUES
(1, 'teste', 'teste', 2, '12', '6');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
