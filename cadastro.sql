-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Dez-2015 às 22:10
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `cpf` bigint(11) NOT NULL DEFAULT '0',
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `idProduto` int(11) NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `preco` double NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProduto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
