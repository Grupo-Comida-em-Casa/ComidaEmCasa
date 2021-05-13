-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Maio-2021 às 04:03
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
(2, 'Flor de Lotus', 'Flordelotus@gmail.com', 'Rua casa grande,210', '649545', '958df7f237e24c5627644ade47fb8f16', '892', '47', 'Intituição top'),
(0, 'akndbsabd', 'ivan@gmail.com', 'asjhdsadnsadhnsadosajdlsajlk', '231.321.321/321', 'eb62f6b9306db575c2d596b1279627a4', '64.553-1', '12 31321-23', 'asdsadasd'),
(0, 'sfasfsafas', 'vini@gmail.com', 'sasdaoskndkasndpks', '465.465.456/456', 'eb62f6b9306db575c2d596b1279627a4', '68.746-4', '65 46545-64', 'dasdasdasdsadsa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
