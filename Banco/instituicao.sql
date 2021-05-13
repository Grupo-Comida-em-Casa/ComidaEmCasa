-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Abr-2021 às 06:04
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

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
-- Estrutura da tabela `instituicao`
--

CREATE TABLE `instituicao` (
  `id_ong` int(11) NOT NULL,
  `instituicao_ong` varchar(100) NOT NULL,
  `email_ong` varchar(100) NOT NULL,
  `endereco_ong` varchar(150) NOT NULL,
  `cnpj_ong` varchar(15) NOT NULL,
  `senha_ong` varchar(32) NOT NULL,
  `cep_ong` varchar(8) NOT NULL,
  `telefone_ong` varchar(11) NOT NULL,
  `descricao_ong` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `instituicao`
--

INSERT INTO `instituicao` (`id_ong`, `instituicao_ong`, `email_ong`, `endereco_ong`, `cnpj_ong`, `senha_ong`, `cep_ong`, `telefone_ong`, `descricao_ong`) VALUES
(1, 'Flordelotus@gmail.com', 'Flor de Lotus', '649.545.656/5655-55', '123', 'f69e748f79dd0a3848f8b78a15f46892', '892', '47', 'Flor de Lotus é uma instituição que ajuda varias famílias carentes com cestas básicas em Joinville.'),
(2, 'Flor de Lotus', 'Flordelotus@gmail.com', 'Rua casa grande,210', '649545', '958df7f237e24c5627644ade47fb8f16', '892', '47', 'Intituição top');

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
(8, 'everton', 'uni', 109222, 'everton@gmail.com', 'eb62f6b9306db575c2d596b1279627a4'),
(9, 'Tiago', 'Schneider', 654165, 'tiagoschneider1@gmail.com', 'eb62f6b9306db575c2d596b1279627a4');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `instituicao`
--
ALTER TABLE `instituicao`
  ADD PRIMARY KEY (`id_ong`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `instituicao`
--
ALTER TABLE `instituicao`
  MODIFY `id_ong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
