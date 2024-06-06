-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Maio-2023 às 17:07
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xhopii`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `cpf` varchar(15) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `sobrenome` varchar(60) NOT NULL,
  `dataNascimento` date NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cpf`, `nome`, `sobrenome`, `dataNascimento`, `telefone`, `email`, `senha`) VALUES
('111.111.11-90', 'Luciana  Teste', 'EmanuÃ©ly Teste', '0000-00-00', '18997493040', 'lucianamanuely65@gmail.com', '123'),
('111111111111111', 'Ana Lucia', 'Santos', '2005-07-20', '11111111111', 'analuciia68@gmail.com', '1111111111111'),
('12300025262', 'Casimiro', 'Migel', '1993-10-20', '18996320412', 'ceze@outlook.com', 'ceze123'),
('12312312310', 'Roguer', 'Guedes', '1992-03-12', '18912312312', 'guedes10@gmail.com', 'amem123'),
('22222222222', 'casimiro', 'andrade', '0009-04-04', '404040', 'teste@gmail.com', '789'),
('223288888888', 'Rosa', 'Silva', '2000-04-07', '189974999', 'lucianamanuely65@gmail.com', '66666666666666666666'),
('4048081151', 'yan', 'andrade', '0006-06-06', '9965855', 'Andrade@gmail.com', '123'),
('55566628422', 'Ludmilla', 'Gonçalves', '1993-05-04', '18992220102', 'lud_numanice@outlook.com', 'numanice'),
('77700707007', 'Cristiano', 'Ronaldo', '1987-07-07', '18900070707', 'cr7@gmail.com', 'sete7'),
('77785295623', 'Beyoncé', 'Carter', '1981-09-04', '18996325852', 'beyonce_com_c@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `nome` varchar(80) NOT NULL,
  `sobrenome` varchar(80) NOT NULL,
  `cpf` varchar(80) NOT NULL,
  `dataNascimento` date NOT NULL,
  `telefone` varchar(80) NOT NULL,
  `cargo` varchar(80) NOT NULL,
  `salario` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(80) NOT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`nome`, `sobrenome`, `cpf`, `dataNascimento`, `telefone`, `cargo`, `salario`, `email`, `senha`) VALUES
('luciana', 'silva', '4048081151', '0606-06-06', '9965855', '', 'dada', 'yan060604@gmail.com', '123'),
('Deus', 'por favor', '22222222222', '0000-00-00', '404040', '', 'certo', 'jesus@gmail.com', '123'),
('jesus', 'cristo', '000000000', '0001-12-31', '100000000000', 'Cristo', '10000000000', 'jesus@gmail.com', '1111111');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `nome` varchar(80) NOT NULL,
  `fabricante` varchar(80) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `valor` varchar(30) NOT NULL,
  `quantidade` varchar(100) NOT NULL,
  PRIMARY KEY (`descricao`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`nome`, `fabricante`, `descricao`, `valor`, `quantidade`) VALUES
('teste produto', 'l', 'ff', '10', '6');

-- --------------------------------------------------------

--
-- Estrutura da tabela `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(100) NOT NULL,
  `data_upload` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
