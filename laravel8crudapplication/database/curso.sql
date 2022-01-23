-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Jan-2022 às 20:15
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `curso`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `ID` int(11) NOT NULL,
  `nome_aluno` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `data_nascimento` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `cpf` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `rg` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `telefone` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `fk_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`ID`, `nome_aluno`, `data_nascimento`, `cpf`, `rg`, `telefone`, `fk_curso`) VALUES
(69, 'Débora Freire', '1995-08-02', '23424867', '8798465', '5645', NULL),
(70, 'Toshio Takamura', '02/08/1995', '000', '000', '000', NULL),
(71, 'Hiroshi Kawasaki', '02/08/1995', '000', '000', '000', NULL),
(72, 'Kojimura', '1999-06-06', '000', '000', '000', NULL),
(73, 'Park Jimin', '1998-02-03', '000', '000', '000', NULL),
(74, 'Yuno', '1995-08-02', '888', '888', '888', NULL),
(75, 'Irari', '1999-07-08', '99', '99', '99', NULL),
(76, 'Kinoshiro', '2000-09-08', '000', '000', '000', NULL),
(77, 'werwerw', NULL, NULL, NULL, NULL, NULL),
(78, NULL, NULL, NULL, NULL, NULL, NULL),
(83, NULL, 'teste', '000.000.000-00', '00.000.000/00', 'teste', NULL),
(84, 'dsfsdf', '2022-01-18', '123', '123', '123', 1),
(85, 'dsfsdf', '2022-01-18', '123', '123', '123', 1),
(86, 'dsfsdf', '2022-01-18', '123', '123', '123', 1),
(87, 'dsfsdf', '2022-01-18', '123', '123', '123', 1),
(88, 'dsfsdf', '2022-01-18', '123', '123', '123', 1),
(89, 'dsfsdf', '2022-01-18', '123', '123', '123', 1),
(90, '123', '2022-01-13', '123', '123', 'sdf', 2),
(91, '123', '2021-12-29', '123', '123', '123', 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `nome_curso` varchar(50) DEFAULT NULL,
  `duracao_sem` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id`, `nome_curso`, `duracao_sem`) VALUES
(1, 'Análise e Desenvolvimento de Sistemas', 2),
(2, 'Médicina', 12),
(11, 'Ciências Biológicas', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE `evento` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `data` varchar(50) DEFAULT NULL,
  `hora` varchar(50) DEFAULT NULL,
  `obs` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `evento`
--

INSERT INTO `evento` (`id`, `titulo`, `data`, `hora`, `obs`) VALUES
(1, 'teste', '2022-01-08', '22:00', 'teste'),
(2, 'teste', '2022-01-08', '22:00', 'teste'),
(3, NULL, NULL, NULL, 'sdfsdf'),
(4, 'reyre', '1321-02-23', '21:12', 'yrddyr'),
(5, NULL, NULL, NULL, 'sfsd'),
(6, NULL, NULL, NULL, 'sdasda'),
(7, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL),
(9, 'teste T', '2022-01-12', '17:25', 'werwerwe');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materia`
--

CREATE TABLE `materia` (
  `id` int(11) NOT NULL,
  `cod_curso` int(11) DEFAULT NULL,
  `nome_materia` varchar(50) DEFAULT NULL,
  `semetre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `materia`
--

INSERT INTO `materia` (`id`, `cod_curso`, `nome_materia`, `semetre`) VALUES
(1, 1, 'Sistemas Computacionais', 1),
(2, 1, 'Fundamentos Matemáticos', 1),
(3, 1, 'Algoritmo 1', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(50) DEFAULT NULL,
  `data_nascimento` varchar(50) DEFAULT NULL,
  `matricula` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `curso` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `nome_completo`, `data_nascimento`, `matricula`, `telefone`, `curso`) VALUES
(1, 'teste', NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_curso` (`fk_curso`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cod_curso` (`cod_curso`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_prof` (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `evento`
--
ALTER TABLE `evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `materia`
--
ALTER TABLE `materia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `fk_curso` FOREIGN KEY (`fk_curso`) REFERENCES `curso` (`id`);

--
-- Limitadores para a tabela `materia`
--
ALTER TABLE `materia`
  ADD CONSTRAINT `cod_curso` FOREIGN KEY (`cod_curso`) REFERENCES `curso` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
