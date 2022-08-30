-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04/07/2022 às 01:50
-- Versão do servidor: 5.7.36
-- Versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `caronaai`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `caronas`
--

DROP TABLE IF EXISTS `caronas`;
CREATE TABLE IF NOT EXISTS `caronas` (
  `idCarona` int(11) NOT NULL AUTO_INCREMENT,
  `itinerário` varchar(200) DEFAULT NULL,
  `horaInicio` time DEFAULT NULL,
  `id_Usuario` int(11) DEFAULT NULL,
  `id_Veiculo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCarona`),
  KEY `id_Usuario` (`id_Usuario`),
  KEY `id_Veiculo` (`id_Veiculo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `idade` int(2) DEFAULT NULL,
  `endereco` varchar(60) DEFAULT NULL,
  `celular` varchar(23) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `idade`, `endereco`, `celular`, `email`, `senha`) VALUES
(1, 'Carlos', '000.000.000-11', 20, 'Rua do Teste 32', '(34) 9911-1199', 'carlostestes@gmail.com', '9cb911a71aa5364adcc68e6b6b0daadb');

-- --------------------------------------------------------

--
-- Estrutura para tabela `veiculos`
--

DROP TABLE IF EXISTS `veiculos`;
CREATE TABLE IF NOT EXISTS `veiculos` (
  `idVeiculo` int(11) NOT NULL AUTO_INCREMENT,
  `modelo` varchar(26) DEFAULT NULL,
  `marcar` varchar(26) DEFAULT NULL,
  `placa` varchar(10) DEFAULT NULL,
  `chassi` varchar(20) DEFAULT NULL,
  `ano` int(4) DEFAULT NULL,
  `tipo` varchar(5) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`idVeiculo`),
  UNIQUE KEY `placa` (`placa`),
  UNIQUE KEY `chassi` (`chassi`),
  KEY `idUsuario` (`idUsuario`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
