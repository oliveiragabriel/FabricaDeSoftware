-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/03/2018 às 21:24
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

--
-- Fazendo dump de dados para tabela `candidato`
--

INSERT INTO `candidato` (`idcandidato`, `nome`, `rg`, `cpf`, `nascimento`, `logradouro`, `bairro`, `cep`, `cidade`, `uf`, `email`, `telefone1`, `telefone2`) VALUES
(1, 'Leonardo Pinto Guilherme', '300899996', '19821905781', '1917-03-01', 'Rua Leopoldo Bulhões, 66/101', 'Centro', '21032000', 'Nova Friburgo', 'RJ', 'leozinho.guilherme@hotmail.com', '21999990919', '2234546709'),
(2, 'Eliezer Dutra Gonçalvez', '021093010', '17293020701', '1948-03-05', 'Avenida Presidente Costa e Silva, 302, Bloco 2, Apartamento 204', 'Leblon', '21035001', 'São Paulo', 'SP', 'eliezerdutragoncalvez@gmail.com', '22938284920', '2128492034'),
(3, 'Alessandra Mitie', '302301929', '30284929790', '1988-11-06', 'Praça Getúlio Vargas, 46/3092', 'Vila Nova', '28328399', 'Nova Friburgo', 'RJ', 'alessandramitie@hotmail.com', '22938493843', '2239742709'),
(4, 'Michel Miguel Elias Temer Lulia', '323242535', '17132169881', '1798-07-13', 'Palácio do Jaburu', 'Liberdade', '22437868', 'Brasília', 'DF', 'michel.temer@terra.com.br', '6198876754', '6123549228'),
(5, 'Neymar Júnior', '189999209', '32040320121', '1987-01-14', 'Rua Marechal Rondon, 45', 'Vargem Grande', '28193019', 'Nova Friburgo', 'RJ', 'neymarjr@gmail.com', '1128839029', '11999437845'),
(6, 'Luiz Fernando Pezão', '940293200', '18293012983', '1972-08-22', 'Avenida Governador Roberto Silveira, 1900/2', 'Prado', '29103910', 'Nova Friburgo', 'RJ', 'lfpezao@hotmail.com', '2129930293', '21998979525');

-- --------------------------------------------------------

--
-- Estrutura para tabela `candidatocurso`
--

CREATE TABLE `candidatocurso` (
  `idcandidatocurso` int(11) NOT NULL,
  `idcandidato` int(11) NOT NULL,
  `ideditalcurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `candidatocurso`
--

INSERT INTO `candidatocurso` (`idcandidatocurso`, `idcandidato`, `ideditalcurso`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 1, 2),
(5, 6, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `curso`
--

CREATE TABLE `curso` (
  `idcurso` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `curso`
--

INSERT INTO `curso` (`idcurso`, `nome`) VALUES
(1, 'Alemão'),
(2, 'Espanhol'),
(3, 'Inglês'),
(4, 'Libras'),
(5, 'Português para Surdos');

-- --------------------------------------------------------

--
-- Estrutura stand-in para view `cursos_edital`
--
CREATE TABLE `cursos_edital` (
`idedital` int(11)
,`nome` varchar(45)
,`vagainterna` int(11)
,`vagaexterna` int(11)
,`data_ini` date
,`hora_ini` time
,`data_fim` date
,`hora_fim` time
);

-- --------------------------------------------------------

--
-- Estrutura para tabela `deficiencia`
--

CREATE TABLE `deficiencia` (
  `iddeficiencia` int(11) NOT NULL,
  `idcandidato` int(11) NOT NULL,
  `obs` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `deficiencia`
--

INSERT INTO `deficiencia` (`iddeficiencia`, `idcandidato`, `obs`) VALUES
(1, 5, 'Atividades locomotoras limitadas'),
(2, 6, 'Cadeira de rodas');

-- --------------------------------------------------------

--
-- Estrutura para tabela `edital`
--

CREATE TABLE `edital` (
  `idedital` int(11) NOT NULL,
  `data_ini` date NOT NULL,
  `hora_ini` time NOT NULL,
  `data_fim` date NOT NULL,
  `hora_fim` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `edital`
--

INSERT INTO `edital` (`idedital`, `data_ini`, `hora_ini`, `data_fim`, `hora_fim`) VALUES
(1, '2018-03-23', '10:00:00', '2018-03-29', '23:59:59'),
(2, '2018-03-31', '08:00:00', '2018-05-17', '17:00:00'),
(3, '2018-01-04', '07:00:00', '2018-03-08', '23:59:59');

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
-- Fazendo dump de dados para tabela `editalcurso`
--

INSERT INTO `editalcurso` (`ideditalcurso`, `idedital`, `idcurso`, `vagainterna`, `vagaexterna`) VALUES
(1, 1, 1, 15, 20),
(2, 1, 2, 30, 30),
(3, 1, 3, 10, 15),
(4, 2, 4, 40, 50),
(5, 2, 5, 10, 8);

-- --------------------------------------------------------

--
-- Estrutura para view `cursos_edital`
--
DROP TABLE IF EXISTS `cursos_edital`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cursos_edital`  AS  select `edital`.`idedital` AS `idedital`,`curso`.`nome` AS `nome`,`editalcurso`.`vagainterna` AS `vagainterna`,`editalcurso`.`vagaexterna` AS `vagaexterna`,`edital`.`data_ini` AS `data_ini`,`edital`.`hora_ini` AS `hora_ini`,`edital`.`data_fim` AS `data_fim`,`edital`.`hora_fim` AS `hora_fim` from ((`editalcurso` join `curso` on((`editalcurso`.`idcurso` = `curso`.`idcurso`))) join `edital` on((`editalcurso`.`idedital` = `edital`.`idedital`))) ;

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
  ADD PRIMARY KEY (`idcandidatocurso`);

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
  MODIFY `idcandidato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de tabela `candidatocurso`
--
ALTER TABLE `candidatocurso`
  MODIFY `idcandidatocurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de tabela `deficiencia`
--
ALTER TABLE `deficiencia`
  MODIFY `iddeficiencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `edital`
--
ALTER TABLE `edital`
  MODIFY `idedital` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `editalcurso`
--
ALTER TABLE `editalcurso`
  MODIFY `ideditalcurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
