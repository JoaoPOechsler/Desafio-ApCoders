-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Jan-2022 às 21:27
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdapcoders`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesa`
--

CREATE TABLE `despesa` (
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unidade_unidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_despesa` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `vencimento_da_fatura` enum('Em-dia','Vencida') COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_pagamento` enum('Aguardando','Pago') COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `despesa`
--

INSERT INTO `despesa` (`descricao`, `unidade_unidade`, `tipo_despesa`, `valor`, `vencimento_da_fatura`, `status_pagamento`) VALUES
('Taxa Condominial - Apto 102', 'Apto 102', 'Taxa Condominial', 499.92, 'Vencida', 'Aguardando'),
('Taxa de Mudança - Apto 101', 'Apto 101', 'Taxa de Mudança', 123.12, 'Em-dia', 'Aguardando');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inquilino`
--

CREATE TABLE `inquilino` (
  `nome_inquilino` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idade` int(10) UNSIGNED DEFAULT NULL,
  `sexo` enum('Masculino','Feminino') COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `inquilino`
--

INSERT INTO `inquilino` (`nome_inquilino`, `idade`, `sexo`, `telefone`, `email`) VALUES
('João Pedro Oechsler', 18, 'Masculino', '33304699', 'joaopedro030303@gmail.com'),
('Marcelo', 18, 'Masculino', '4799162212', 'marcelo@gmail.com'),
('Marcely', 17, 'Feminino', '4799345688', 'marcely@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidade`
--

CREATE TABLE `unidade` (
  `unidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `propietario` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `condominio` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `endereco` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `unidade`
--

INSERT INTO `unidade` (`unidade`, `propietario`, `condominio`, `endereco`) VALUES
('Apto 101', 'Ronaldo', 'Das neves', 'Rua das neves, 111'),
('Apto 102', 'Jailson', 'Das neves', 'Rua das neves, 111'),
('Apto 103', 'Willian', 'Das neves', 'Rua Das neves, 111');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `despesa`
--
ALTER TABLE `despesa`
  ADD PRIMARY KEY (`descricao`),
  ADD KEY `despesas_FKIndex1` (`unidade_unidade`);

--
-- Índices para tabela `inquilino`
--
ALTER TABLE `inquilino`
  ADD PRIMARY KEY (`nome_inquilino`);

--
-- Índices para tabela `unidade`
--
ALTER TABLE `unidade`
  ADD PRIMARY KEY (`unidade`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `despesa`
--
ALTER TABLE `despesa`
  ADD CONSTRAINT `despesa_ibfk_1` FOREIGN KEY (`unidade_unidade`) REFERENCES `unidade` (`unidade`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
