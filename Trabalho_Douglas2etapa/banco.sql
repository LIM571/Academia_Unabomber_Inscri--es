-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Mar-2023 às 04:45
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_turnos`
--

CREATE TABLE `tb_turnos` (
  `id_turnos` tinyint(4) NOT NULL,
  `nome_turnos` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_turnos`
--

INSERT INTO `tb_turnos` (`id_turnos`, `nome_turnos`) VALUES
(1, 'Manhã'),
(2, 'Tarde'),
(3, 'Noite');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` tinyint(4) NOT NULL,
  `nome_usuario` varchar(100) NOT NULL,
  `Idade_usuario` tinyint(4) NOT NULL,
  `apelido_usuario` varchar(40) NOT NULL,
  `peso_usario` float NOT NULL,
  `email_contanto` varchar(100) NOT NULL,
  `id_turno_usario` tinyint(4) NOT NULL,
  `cell_usario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `nome_usuario`, `Idade_usuario`, `apelido_usuario`, `peso_usario`, `email_contanto`, `id_turno_usario`, `cell_usario`) VALUES
(9, 'Gabriel de lima dutra', 16, 'atravesado', 69, 'gabriel.dutra57118@gmail.com', 3, '84948498649'),
(10, 'felipe', 18, 'newvila', 70, 'greenvila@issomesmo.com', 3, '9999999'),
(11, 'paedro henrique', 16, 'Pandas', 80, 'panduro@issomesmo.com', 3, '888888888');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_turnos`
--
ALTER TABLE `tb_turnos`
  ADD PRIMARY KEY (`id_turnos`);

--
-- Índices para tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_usario_turnos` (`id_turno_usario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_turnos`
--
ALTER TABLE `tb_turnos`
  MODIFY `id_turnos` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD CONSTRAINT `id_usario_turnos` FOREIGN KEY (`id_turno_usario`) REFERENCES `tb_turnos` (`id_turnos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
