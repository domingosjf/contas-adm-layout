-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Maio-2021 às 01:32
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `contas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa`
--

DROP TABLE IF EXISTS `caixa`;
CREATE TABLE IF NOT EXISTS `caixa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entrada` float(10,2) DEFAULT NULL,
  `saida` float(10,2) DEFAULT NULL,
  `saldo` float(10,2) DEFAULT NULL,
  `tip_entrada_id` int(11) DEFAULT NULL,
  `tip_saida_id` int(11) DEFAULT NULL,
  `catg_entrada_id` int(11) DEFAULT NULL,
  `catg_saida_id` int(11) DEFAULT NULL,
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `caixa`
--

INSERT INTO `caixa` (`id`, `entrada`, `saida`, `saldo`, `tip_entrada_id`, `tip_saida_id`, `catg_entrada_id`, `catg_saida_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(1, 50.00, NULL, NULL, 1, 1, 1, 1, 1, '2018-03-23 00:00:00', NULL),
(2, NULL, 10.00, NULL, 1, 1, 1, 1, 1, '2018-03-23 00:00:00', NULL),
(3, 10.00, NULL, NULL, 1, 1, 1, 2, 1, '2020-12-05 21:30:17', NULL),
(4, 200.00, NULL, NULL, 1, 1, 1, 1, 1, '2020-12-09 23:51:49', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `entradas`
--

DROP TABLE IF EXISTS `entradas`;
CREATE TABLE IF NOT EXISTS `entradas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total` float(10,2) DEFAULT NULL,
  `tip_entrada_id` int(11) NOT NULL,
  `catg_entrada_id` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `entradas`
--

INSERT INTO `entradas` (`id`, `total`, `tip_entrada_id`, `catg_entrada_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(1, 50.00, 1, '1', 1, '2018-03-23 00:00:00', NULL),
(2, 10.00, 1, '1', 1, '2018-03-23 00:00:00', NULL),
(3, 10.00, 1, '8', 2, '2020-12-05 21:30:17', NULL),
(4, 200.00, 1, '1', 1, '2020-12-09 23:51:49', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `niveis_acessos`
--

DROP TABLE IF EXISTS `niveis_acessos`;
CREATE TABLE IF NOT EXISTS `niveis_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `niveis_acessos`
--

INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Administrador', '2017-09-23 00:00:00', NULL),
(2, 'Financeiro', '2017-09-23 00:00:00', NULL),
(3, 'Cliente', '2017-09-23 00:00:00', NULL),
(4, 'Suporte', '2017-09-23 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `saidas`
--

DROP TABLE IF EXISTS `saidas`;
CREATE TABLE IF NOT EXISTS `saidas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total` float(10,2) DEFAULT NULL,
  `tip_saida_id` int(11) NOT NULL,
  `catg_saida_id` varchar(220) COLLATE utf8_unicode_ci NOT NULL,
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `saidas`
--

INSERT INTO `saidas` (`id`, `total`, `tip_saida_id`, `catg_saida_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(1, 50.00, 1, '1', 1, '2018-03-23 00:00:00', NULL),
(2, 10.00, 1, '1', 1, '2018-03-23 00:00:00', NULL),
(3, 10.00, 1, '8', 2, '2020-12-05 21:30:17', NULL),
(4, 200.00, 1, '1', 1, '2020-12-09 23:51:49', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacaos`
--

DROP TABLE IF EXISTS `situacaos`;
CREATE TABLE IF NOT EXISTS `situacaos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `situacaos`
--

INSERT INTO `situacaos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Ativo', '2017-09-23 00:00:00', NULL),
(2, 'Inativo', '2017-09-23 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) DEFAULT NULL,
  `email` varchar(220) NOT NULL,
  `situacao_id` int(11) NOT NULL DEFAULT 2,
  `niveis_acesso_id` int(11) NOT NULL,
  `qnt_acessos` int(11) NOT NULL DEFAULT 0,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `situacao_id` (`situacao_id`),
  KEY `niveis_acesso_id` (`niveis_acesso_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `situacao_id`, `niveis_acesso_id`, `qnt_acessos`, `created`, `modified`) VALUES
(1, 'Domingos', 'domingosjff@localhost.lo', 1, 1, 15, '2017-09-23 00:00:00', NULL),
(2, 'Filho', 'Filho@localhost', 1, 2, 20, '2017-09-23 00:00:00', '2017-09-23 20:13:26'),
(3, 'Filho2233', 'Filho2233@localhost', 1, 3, 10, '2017-09-23 00:00:00', '2017-09-23 20:13:52'),
(4, 'Filho22', 'Filho22@localhost', 2, 3, 15, '2017-09-23 00:00:00', NULL),
(5, 'Filho111', 'Filho111@localhost', 2, 3, 0, '2017-09-23 15:48:31', NULL),
(6, 'domingos2312', '22domingosjff@localhost.lo', 2, 3, 0, '2017-09-23 15:50:43', NULL),
(7, 'domingos2232', '22domingos@localhost.lo', 2, 3, 0, '2017-09-23 15:57:35', NULL),
(8, 'domingos23211', '22322domingosjff@localhost.lo', 2, 3, 0, '2017-09-23 16:22:16', NULL);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`situacao_id`) REFERENCES `situacaos` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`niveis_acesso_id`) REFERENCES `niveis_acessos` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
