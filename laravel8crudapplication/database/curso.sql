-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Jan-2022 às 18:12
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
(69, 'Débora Freire', '1995-08-02', '066.861.020-40', '38.650.759-4', '5645', 1),
(70, 'Toshio Takamura', '02/08/1995', '681.667.960-15', '34.766.056-3', '000', 1),
(71, 'Hiroshi Kawasaki', '02/08/1995', '150.439.410-06', '15.265.044-1', '000', 1),
(72, 'Kojimura', '1999-06-06', '272.686.920-30', '47.266.647-2', '000', 1),
(73, 'Park Jimin', '1998-02-03', '475.712.420-10', '20.052.427-6', '000', 1),
(74, 'Yabe Toshiro', '1995-08-02', '972.175.660-10', '49.830.807-8', '888', 1),
(75, 'Ametsuchi Junji', '1999-07-08', '326.278.500-83', '29.939.040-8', '99', 1),
(76, 'Orito Michio', '2000-09-08', '389.711.610-35', '10.537.092-7', '000', 1),
(77, 'Yabe Toshiro', '20/01/1995', '731.562.240-30', '21.521.651-9', NULL, 1),
(78, 'Shiba Goro', '21/01/1995', '345.910.000-10', '43.811.091-2', NULL, 1),
(83, 'Ichihara Ekiken', '01/01/1995', '199.720.480-04', '30.482.778-2', 'teste', 2),
(84, 'Asai Kenji', '2022-01-18', '316.286.290-61', '32.751.058-4', '123', 1),
(85, 'Yamashita Masatake', '2022-01-18', '363.320.180-70', '17.473.618-6', '123', 1),
(86, 'Kanbayashi Hisato', '2022-01-18', '790.301.570-20', '28.520.854-8', '123', 1),
(87, 'Shoda Kozue', '2022-01-18', '337.923.650-06', '28.417.663-1', '123', 1),
(88, 'Miyamoto Kokei', '2022-01-18', '269.739.040-50', '12.383.369-3', '123', 1),
(89, 'Yoshikuni Tadao', '2022-01-18', '547.522.000-07', '21.263.433-1', '123', 1),
(90, 'Ando Fukusaburu', '2022-01-13', '352.299.870-73', '12.855.413-7', 'sdf', 2),
(91, 'Ouchi Rei', '2021-12-29', '082.648.210-49', '48.424.791-8', '123', 11),
(92, 'Ara Kenkichi', '2000-01-11', '336.853.400-93', '33.685.340.3', '123', 2);

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
(11, 'Ciências Biológicas', 8),
(19, 'Engenharia de Software', 12);

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
  `semestre` int(11) DEFAULT NULL,
  `cod_prof` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `materia`
--

INSERT INTO `materia` (`id`, `cod_curso`, `nome_materia`, `semestre`, `cod_prof`) VALUES
(1, 1, 'Sistemas Computacionais', 1, 1),
(2, 1, 'Fundamentos Matemáticos', 1, 4),
(3, 1, 'Algoritmo 1', 1, 3),
(10, 1, 'Calculo III', 3, 3),
(11, 1, 'teste', 1, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(50) DEFAULT NULL,
  `data_nascimento` varchar(50) DEFAULT NULL,
  `matricula` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`id`, `nome_completo`, `data_nascimento`, `matricula`, `telefone`) VALUES
(1, 'Aoyama Katai', NULL, NULL, NULL),
(2, 'Murata Sadahige', NULL, NULL, NULL),
(3, 'Hosoo Yozo', NULL, NULL, NULL),
(4, 'Nishida Kunisada', NULL, NULL, ''),
(5, 'Kishi Hidetora', '2022-02-01', '123', '123'),
(6, 'Uchimura Hoshiko', '1999-01-25', '121', '1212');

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
  ADD KEY `cod_curso` (`cod_curso`),
  ADD KEY `cod_prof` (`cod_prof`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `evento`
--
ALTER TABLE `evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `materia`
--
ALTER TABLE `materia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `cod_curso` FOREIGN KEY (`cod_curso`) REFERENCES `curso` (`id`),
  ADD CONSTRAINT `materia_ibfk_1` FOREIGN KEY (`cod_prof`) REFERENCES `professor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
