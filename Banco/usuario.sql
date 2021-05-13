-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Abr-2021 às 03:34
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `comida_casa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(20) NOT NULL,
  `sobrenome_usuario` varchar(20) NOT NULL,
  `cpf_usuario` int(11) NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `senha_usuario` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `sobrenome_usuario`, `cpf_usuario`, `email_usuario`, `senha_usuario`) VALUES
(1, '$nome', '$sobrenome', 0, '$email', '$senha'),
(2, 'nome', 'Quadros', 2147483647, 'vini@uni.com', '0123456'),
(3, '', '', 2147483647, 'vini@uniesu.com.br', '124bd1296bec0d9d'),
(4, '', '', 2147483647, 'viniquadros1997@gmai', '124bd1296bec0d9d'),
(5, '', '', 2147483647, 'viniquadros1997@gmai', 'eb62f6b9306db575'),
(6, 'Vini', 'Quadros', 109276, 'viniquadros1997@gmai', '781e5e245d69b566'),
(7, 'André Quadros', 'Quadros', 646545, 'viniquadros@gmail.com', '4100c4d44da9177247e44a5fc1546778'),
(8, 'everton', 'uni', 109222, 'everton@gmail.com', 'eb62f6b9306db575c2d596b1279627a4');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
