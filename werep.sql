-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-Jul-2016 às 22:45
-- Versão do servidor: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `werep`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas`
--

DROP TABLE IF EXISTS `contas`;
CREATE TABLE IF NOT EXISTS `contas` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `saldo` float NOT NULL,
  `valor_rateio` float NOT NULL,
  `moradia_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `moradia_id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contas`
--

INSERT INTO `contas` (`id`, `nome`, `tipo`, `saldo`, `valor_rateio`, `moradia_id`) VALUES
(1, 'Conta Poupança', 'Poupança', 0, 0, 0),
(2, 'Conta Emergencia', 'Poupança', 400, 0, 0),
(3, 'Conta Corrente', 'Corrente', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `inquilinos`
--

DROP TABLE IF EXISTS `inquilinos`;
CREATE TABLE IF NOT EXISTS `inquilinos` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `apelido` varchar(80) NOT NULL,
  `celular` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `data_nascimento` date NOT NULL,
  `naturalidade` varchar(50) NOT NULL,
  `sexo` varchar(30) NOT NULL,
  `moradia_id` int(11) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `moradia_id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `inquilinos`
--

INSERT INTO `inquilinos` (`id`, `nome`, `apelido`, `celular`, `email`, `data_nascimento`, `naturalidade`, `sexo`, `moradia_id`, `login`, `senha`) VALUES
(1, 'Guilherme Jannotti Arantes', 'Jannottin', 999826018, 'guilherme.jannotti@gmail.com', '1992-12-17', 'Belo Horizonte', 'Masculino', 1, 'jannotti@gmail.com', 'jannotti');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lancamentos`
--

DROP TABLE IF EXISTS `lancamentos`;
CREATE TABLE IF NOT EXISTS `lancamentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `data_entrada` date NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `valor` float NOT NULL,
  `imagem` longblob NOT NULL,
  `contas_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contas_id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `lancamentos`
--

INSERT INTO `lancamentos` (`id`, `nome`, `data_entrada`, `categoria`, `valor`, `imagem`, `contas_id`) VALUES
(1, 'Ração Pedigree', '2016-06-06', 'Bichos Estimação', 90, 0x2f696d61676573, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `moradias`
--

DROP TABLE IF EXISTS `moradias`;
CREATE TABLE IF NOT EXISTS `moradias` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(80) NOT NULL,
  `data_fundacao` date NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `moradias`
--

INSERT INTO `moradias` (`id`, `nome`, `endereco`, `telefone`, `data_fundacao`, `email`) VALUES
(1, 'República Catapulta', 'Rua Bernardo Sayao, 196, Novo Horizonte', '(31)3852-6843', '2003-01-01', 'repcatapulta@gmail.com'),
(2, 'República Vira Lata', 'Rua Fulano de Tal, 416, Novo Horizonte', '(31)3852-0043', '2006-01-01', 'repviralata@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `patrimonios`
--

DROP TABLE IF EXISTS `patrimonios`;
CREATE TABLE IF NOT EXISTS `patrimonios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_entrada` date NOT NULL,
  `depreciacao` float NOT NULL,
  `manutencao` float NOT NULL,
  `moradia_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `moradia_id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `patrimonios`
--

INSERT INTO `patrimonios` (`id`, `nome`, `data_entrada`, `depreciacao`, `manutencao`, `moradia_id`) VALUES
(1, 'TV 42 Full HD', '2012-01-01', 0, 0, 0),
(2, 'Sofá 6 Lugares - Verde', '2012-01-01', 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
