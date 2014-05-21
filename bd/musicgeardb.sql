-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 21-Maio-2014 às 03:11
-- Versão do servidor: 5.6.14
-- versão do PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `musicgeardb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estilo`
--

CREATE TABLE IF NOT EXISTS `estilo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(600) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Extraindo dados da tabela `estilo`
--

INSERT INTO `estilo` (`id`, `nome`) VALUES
(9, 'oi'),
(10, 're'),
(11, 'teste'),
(12, 'ojioj'),
(13, 'testes'),
(14, 'https://www.youtube.com/watch?v=fpfazVLZmlg'),
(15, 'aa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `musica`
--

CREATE TABLE IF NOT EXISTS `musica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(500) NOT NULL,
  `estilo` int(11) NOT NULL,
  `sender` varchar(500) NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `estilo` (`estilo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Extraindo dados da tabela `musica`
--

INSERT INTO `musica` (`id`, `url`, `estilo`, `sender`, `data`) VALUES
(28, 'https://www.youtube.com/watch?v=fpfazVLZmlg', 9, '', '0000-00-00 00:00:00'),
(29, 'https://www.youtube.com/watch?v=fpfazVLZmlg', 10, '', '0000-00-00 00:00:00'),
(30, 'https://www.youtube.com/watch?v=fpfazVLZmlg', 11, 'nome', '0000-00-00 00:00:00'),
(31, 'https://www.youtube.com/watch?v=xwcaDvr8f1o', 9, 'emerson', '0000-00-00 00:00:00'),
(32, 'https://www.youtube.com/watch?v=fpfazVLZmlg', 12, 'moooooo', '2014-05-19 04:29:41'),
(33, 'https://www.youtube.com/watch?v=fpfazVLZmlg', 11, 'teste', '2014-05-19 04:57:29'),
(34, 'https://www.youtube.com/watch?v=fpfazVLZmlg', 13, 'teste', '2014-05-19 04:57:48'),
(35, 'https://www.youtube.com/watch?v=fpfazVLZmlg', 14, 'https://www.youtube.com/watch?v=fpfazVLZmlg', '2014-05-19 05:44:47'),
(36, 'https://www.youtube.com/watch?v=fpfazVLZmlg', 14, 'https://www.youtube.com/watch?v=fpfazVLZmlg', '2014-05-19 05:44:54'),
(37, 'https://www.youtube.com/watch?v=fpfazVLZmlg', 14, 'https://www.youtube.com/watch?v=fpfazVLZmlg', '2014-05-19 05:45:03'),
(38, 'https://www.youtube.com/watch?v=fpfazVLZmlg', 14, 'https://www.youtube.com/watch?v=fpfazVLZmlg', '2014-05-19 05:45:27'),
(39, 'https://www.youtube.com/watch?v=fpfazVLZmlg', 15, 'https://www.youtube.com/watch?v=fpfazVLZmlg', '2014-05-19 05:46:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(500) NOT NULL,
  `data` datetime NOT NULL,
  `status` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Extraindo dados da tabela `tag`
--

INSERT INTO `tag` (`id`, `nome`, `data`, `status`) VALUES
(24, 'oi', '0000-00-00 00:00:00', '1'),
(25, 'teste', '0000-00-00 00:00:00', '1'),
(26, '0sdapdji', '2014-05-19 04:29:42', '1'),
(27, 'testes', '2014-05-19 04:57:48', '1'),
(28, 'https://www.youtube.com/watch?v=fpfazVLZmlg', '2014-05-19 05:44:47', '1'),
(29, 'aaaa', '2014-05-19 05:46:01', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `musica_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `musica_id` (`musica_id`),
  KEY `tag_id` (`tag_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Extraindo dados da tabela `tags`
--

INSERT INTO `tags` (`id`, `musica_id`, `tag_id`) VALUES
(25, 28, 24),
(26, 29, 25),
(27, 30, 25),
(28, 31, 24),
(29, 32, 26),
(30, 33, 25),
(31, 34, 27),
(32, 35, 28),
(33, 36, 28),
(34, 37, 28),
(35, 38, 28),
(36, 39, 29);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `musica`
--
ALTER TABLE `musica`
  ADD CONSTRAINT `musica_ibfk_1` FOREIGN KEY (`estilo`) REFERENCES `estilo` (`id`);

--
-- Limitadores para a tabela `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `tags_ibfk_1` FOREIGN KEY (`musica_id`) REFERENCES `musica` (`id`),
  ADD CONSTRAINT `tags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
