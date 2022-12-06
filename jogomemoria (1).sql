-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Dez-2022 às 22:46
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jogomemoria`
--

DELIMITER $$
--
-- Procedimentos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `cadastrarJogador` (IN `nome` VARCHAR(200), IN `cpf` VARCHAR(11), IN `telefone` VARCHAR(20), IN `email` VARCHAR(50), IN `usuario` VARCHAR(50), IN `senha` VARCHAR(100))   insert into jogador(nome, cpf, telefone, email, usuario, senha) values (nome,cpf,telefone,email,usuario,PASSWORD(senha))$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `cadastrarPartida` (IN `codigoJogador` INT(11), IN `modo` INT(2), IN `dimensao` VARCHAR(3), IN `datajogo` DATETIME, IN `resultado` INT(1), IN `tempoJogo` TIME)   insert into partida(partida.codigoJogador,partida.modo,partida.dimensao,partida.datajogo,partida.resultado,partida.tempoJogo) VALUES (codigoJogador,modo,dimensao,datajogo,resultado,tempoJogo)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `consultarHistoricoJogador` (IN `codigo` INT)   select * from partida where partida.codigoJogador = codigo$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `loginJogador` (IN `usuario` VARCHAR(50), IN `senha` VARCHAR(50))   select COUNT(jogador.nome) from jogador where jogador.usuario = usuario and PASSWORD(senha) = jogador.senha$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogador`
--

CREATE TABLE `jogador` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `partida`
--

CREATE TABLE `partida` (
  `codigo` int(11) NOT NULL,
  `codigoJogador` int(11) NOT NULL,
  `modo` int(2) NOT NULL,
  `dimensao` varchar(3) NOT NULL,
  `datajogo` datetime NOT NULL,
  `resultado` int(1) NOT NULL,
  `tempoJogo` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `jogador`
--
ALTER TABLE `jogador`
  ADD PRIMARY KEY (`codigo`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Índices para tabela `partida`
--
ALTER TABLE `partida`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codigoJogador` (`codigoJogador`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `jogador`
--
ALTER TABLE `jogador`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `partida`
--
ALTER TABLE `partida`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `partida`
--
ALTER TABLE `partida`
  ADD CONSTRAINT `partida_ibfk_1` FOREIGN KEY (`codigoJogador`) REFERENCES `jogador` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
