-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/03/2018 às 02:00
-- Versão do servidor: 10.1.13-MariaDB
-- Versão do PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celi`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `candidato`
--

CREATE TABLE `candidato` (
  `idcandidato` int(11) NOT NULL,
  `nome` varchar(75) NOT NULL,
  `rg` varchar(9) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `nascimento` date NOT NULL,
  `logradouro` varchar(75) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `uf` enum('AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RR','RO','RJ','RN','RS','SC','SP','SE','TO') NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone1` varchar(11) NOT NULL,
  `telefone2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `candidatocurso`
--

CREATE TABLE `candidatocurso` (
  `idcandiatocurso` int(11) NOT NULL,
  `idcandidato` int(11) NOT NULL,
  `ideditalcurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `curso`
--

CREATE TABLE `curso` (
  `idcurso` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `deficiencia`
--

CREATE TABLE `deficiencia` (
  `iddeficiencia` int(11) NOT NULL,
  `idcandidato` int(11) NOT NULL,
  `obs` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `edital`
--

CREATE TABLE `edital` (
  `idedital` int(11) NOT NULL,
  `data_ini` date NOT NULL,
  `data_fim` date NOT NULL,
  `hora_ini` time NOT NULL,
  `hora_fim` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `editalcurso`
--

CREATE TABLE `editalcurso` (
  `ideditalcurso` int(11) NOT NULL,
  `idedital` int(11) NOT NULL,
  `idcurso` int(11) NOT NULL,
  `vagainterna` int(11) NOT NULL,
  `vagaexterna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`idcandidato`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices de tabela `candidatocurso`
--
ALTER TABLE `candidatocurso`
  ADD PRIMARY KEY (`idcandiatocurso`);

--
-- Índices de tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idcurso`);

--
-- Índices de tabela `deficiencia`
--
ALTER TABLE `deficiencia`
  ADD PRIMARY KEY (`iddeficiencia`);

--
-- Índices de tabela `edital`
--
ALTER TABLE `edital`
  ADD PRIMARY KEY (`idedital`);

--
-- Índices de tabela `editalcurso`
--
ALTER TABLE `editalcurso`
  ADD PRIMARY KEY (`ideditalcurso`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `candidato`
--
ALTER TABLE `candidato`
  MODIFY `idcandidato` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `candidatocurso`
--
ALTER TABLE `candidatocurso`
  MODIFY `idcandiatocurso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `deficiencia`
--
ALTER TABLE `deficiencia`
  MODIFY `iddeficiencia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `edital`
--
ALTER TABLE `edital`
  MODIFY `idedital` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `editalcurso`
--
ALTER TABLE `editalcurso`
  MODIFY `ideditalcurso` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
