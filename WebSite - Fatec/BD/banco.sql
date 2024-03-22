-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Set-2023 às 22:49
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

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
-- Estrutura da tabela `administradores`
--

CREATE TABLE `administradores` (
  `id_administrador` int(11) NOT NULL,
  `formularios_id_formulario` int(11) NOT NULL,
  `formularios_atribuicoes_id_atribuicao` int(11) NOT NULL,
  `formularios_ambientes_id_ambientes` int(11) NOT NULL,
  `formularios_ambientes_tipos_ambientes_id_tipos_ambientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ambientes`
--

CREATE TABLE `ambientes` (
  `id_ambientes` int(11) NOT NULL,
  `tipos_ambientes_id_tipos_ambientes` int(11) NOT NULL,
  `tipos_ambientes_id_tipos_ambientes1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atribuicoes`
--

CREATE TABLE `atribuicoes` (
  `id_atribuicao` int(11) NOT NULL,
  `disciplinas_id_disciplinas` int(11) NOT NULL,
  `disciplinas_turmas_id_turmas` int(11) NOT NULL,
  `disciplinas_turmas_cursos_id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `id_disciplinas` int(11) NOT NULL,
  `turmas_id_turmas` int(11) NOT NULL,
  `turmas_cursos_id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `formularios`
--

CREATE TABLE `formularios` (
  `id_formulario` int(11) NOT NULL,
  `atribuicoes_id_atribuicao` int(11) NOT NULL,
  `ambientes_id_ambientes` int(11) NOT NULL,
  `ambientes_tipos_ambientes_id_tipos_ambientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios`
--

CREATE TABLE `horarios` (
  `id_horario` int(11) NOT NULL,
  `reservas_ambientes_id_ambientes` int(11) NOT NULL,
  `reservas_semanais_id_reservas_semanais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `cod` int(10) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas_eventuais`
--

CREATE TABLE `reservas_eventuais` (
  `id_ambientes` int(11) NOT NULL,
  `socilitacoes_id_socilitacao` int(11) NOT NULL,
  `socilitacoes_atribuicoes_id_atribuicao` int(11) NOT NULL,
  `socilitacoes_atribuicoes_disciplinas_id_disciplinas` int(11) NOT NULL,
  `socilitacoes_atribuicoes_disciplinas_turmas_id_turmas` int(11) NOT NULL,
  `socilitacoes_atribuicoes_disciplinas_turmas_cursos_id_curso` int(11) NOT NULL,
  `socilitacoes_ambientes_id_ambientes` int(11) NOT NULL,
  `socilitacoes_ambientes_tipos_ambientes_id_tipos_ambientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas_semanais`
--

CREATE TABLE `reservas_semanais` (
  `id_reservas_semanais` int(11) NOT NULL,
  `socilitacoes_id_socilitacao` int(11) NOT NULL,
  `socilitacoes_atribuicoes_id_atribuicao` int(11) NOT NULL,
  `socilitacoes_atribuicoes_disciplinas_id_disciplinas` int(11) NOT NULL,
  `socilitacoes_atribuicoes_disciplinas_turmas_id_turmas` int(11) NOT NULL,
  `socilitacoes_atribuicoes_disciplinas_turmas_cursos_id_curso` int(11) NOT NULL,
  `socilitacoes_ambientes_id_ambientes` int(11) NOT NULL,
  `socilitacoes_ambientes_tipos_ambientes_id_tipos_ambientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `socilitacoes`
--

CREATE TABLE `socilitacoes` (
  `id_socilitacao` int(11) NOT NULL,
  `professores_id_professor` int(11) NOT NULL,
  `reservas_equipamentos_id_reserva` int(11) NOT NULL,
  `atribuicoes_id_atribuicao` int(11) NOT NULL,
  `atribuicoes_disciplinas_id_disciplinas` int(11) NOT NULL,
  `atribuicoes_disciplinas_turmas_id_turmas` int(11) NOT NULL,
  `atribuicoes_disciplinas_turmas_cursos_id_curso` int(11) NOT NULL,
  `ambientes_id_ambientes` int(11) NOT NULL,
  `ambientes_tipos_ambientes_id_tipos_ambientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_ambientes`
--

CREATE TABLE `tipos_ambientes` (
  `id_tipos_ambientes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turmas`
--

CREATE TABLE `turmas` (
  `id_turmas` int(11) NOT NULL,
  `cursos_id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_administrador`,`formularios_id_formulario`,`formularios_atribuicoes_id_atribuicao`,`formularios_ambientes_id_ambientes`,`formularios_ambientes_tipos_ambientes_id_tipos_ambientes`),
  ADD KEY `fk_administradores_formularios1_idx` (`formularios_id_formulario`,`formularios_atribuicoes_id_atribuicao`,`formularios_ambientes_id_ambientes`,`formularios_ambientes_tipos_ambientes_id_tipos_ambientes`);

--
-- Índices para tabela `ambientes`
--
ALTER TABLE `ambientes`
  ADD PRIMARY KEY (`id_ambientes`,`tipos_ambientes_id_tipos_ambientes`),
  ADD KEY `fk_ambientes_tipos_ambientes1_idx` (`tipos_ambientes_id_tipos_ambientes1`);

--
-- Índices para tabela `atribuicoes`
--
ALTER TABLE `atribuicoes`
  ADD PRIMARY KEY (`id_atribuicao`,`disciplinas_id_disciplinas`,`disciplinas_turmas_id_turmas`,`disciplinas_turmas_cursos_id_curso`),
  ADD KEY `fk_atribuicoes_disciplinas1_idx` (`disciplinas_id_disciplinas`,`disciplinas_turmas_id_turmas`,`disciplinas_turmas_cursos_id_curso`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Índices para tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`id_disciplinas`,`turmas_id_turmas`,`turmas_cursos_id_curso`),
  ADD KEY `fk_disciplinas_turmas1_idx` (`turmas_id_turmas`,`turmas_cursos_id_curso`);

--
-- Índices para tabela `formularios`
--
ALTER TABLE `formularios`
  ADD PRIMARY KEY (`id_formulario`,`atribuicoes_id_atribuicao`,`ambientes_id_ambientes`,`ambientes_tipos_ambientes_id_tipos_ambientes`),
  ADD KEY `fk_formularios_atribuicoes1_idx` (`atribuicoes_id_atribuicao`),
  ADD KEY `fk_formularios_ambientes1_idx` (`ambientes_id_ambientes`,`ambientes_tipos_ambientes_id_tipos_ambientes`);

--
-- Índices para tabela `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_horario`),
  ADD KEY `fk_horarios_reservas_ambientes1_idx` (`reservas_ambientes_id_ambientes`),
  ADD KEY `fk_horarios_reservas_semanais1_idx` (`reservas_semanais_id_reservas_semanais`);

--
-- Índices para tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`cod`);

--
-- Índices para tabela `reservas_eventuais`
--
ALTER TABLE `reservas_eventuais`
  ADD PRIMARY KEY (`id_ambientes`),
  ADD KEY `fk_reservas_eventuais_socilitacoes1_idx` (`socilitacoes_id_socilitacao`,`socilitacoes_atribuicoes_id_atribuicao`,`socilitacoes_atribuicoes_disciplinas_id_disciplinas`,`socilitacoes_atribuicoes_disciplinas_turmas_id_turmas`,`socilitacoes_atribuicoes_disciplinas_turmas_cursos_id_curso`,`socilitacoes_ambientes_id_ambientes`,`socilitacoes_ambientes_tipos_ambientes_id_tipos_ambientes`);

--
-- Índices para tabela `reservas_semanais`
--
ALTER TABLE `reservas_semanais`
  ADD PRIMARY KEY (`id_reservas_semanais`),
  ADD KEY `fk_reservas_semanais_socilitacoes1_idx` (`socilitacoes_id_socilitacao`,`socilitacoes_atribuicoes_id_atribuicao`,`socilitacoes_atribuicoes_disciplinas_id_disciplinas`,`socilitacoes_atribuicoes_disciplinas_turmas_id_turmas`,`socilitacoes_atribuicoes_disciplinas_turmas_cursos_id_curso`,`socilitacoes_ambientes_id_ambientes`,`socilitacoes_ambientes_tipos_ambientes_id_tipos_ambientes`);

--
-- Índices para tabela `socilitacoes`
--
ALTER TABLE `socilitacoes`
  ADD PRIMARY KEY (`id_socilitacao`,`atribuicoes_id_atribuicao`,`atribuicoes_disciplinas_id_disciplinas`,`atribuicoes_disciplinas_turmas_id_turmas`,`atribuicoes_disciplinas_turmas_cursos_id_curso`,`ambientes_id_ambientes`,`ambientes_tipos_ambientes_id_tipos_ambientes`),
  ADD KEY `fk_socilitacoes_atribuicoes1_idx` (`atribuicoes_id_atribuicao`,`atribuicoes_disciplinas_id_disciplinas`,`atribuicoes_disciplinas_turmas_id_turmas`,`atribuicoes_disciplinas_turmas_cursos_id_curso`),
  ADD KEY `fk_socilitacoes_ambientes1_idx` (`ambientes_id_ambientes`,`ambientes_tipos_ambientes_id_tipos_ambientes`);

--
-- Índices para tabela `tipos_ambientes`
--
ALTER TABLE `tipos_ambientes`
  ADD PRIMARY KEY (`id_tipos_ambientes`);

--
-- Índices para tabela `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`id_turmas`,`cursos_id_curso`),
  ADD KEY `fk_turmas_cursos1_idx` (`cursos_id_curso`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `cod` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `administradores`
--
ALTER TABLE `administradores`
  ADD CONSTRAINT `fk_administradores_formularios1` FOREIGN KEY (`formularios_id_formulario`,`formularios_atribuicoes_id_atribuicao`,`formularios_ambientes_id_ambientes`,`formularios_ambientes_tipos_ambientes_id_tipos_ambientes`) REFERENCES `formularios` (`id_formulario`, `atribuicoes_id_atribuicao`, `ambientes_id_ambientes`, `ambientes_tipos_ambientes_id_tipos_ambientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `ambientes`
--
ALTER TABLE `ambientes`
  ADD CONSTRAINT `fk_ambientes_tipos_ambientes1` FOREIGN KEY (`tipos_ambientes_id_tipos_ambientes1`) REFERENCES `tipos_ambientes` (`id_tipos_ambientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `atribuicoes`
--
ALTER TABLE `atribuicoes`
  ADD CONSTRAINT `fk_atribuicoes_disciplinas1` FOREIGN KEY (`disciplinas_id_disciplinas`,`disciplinas_turmas_id_turmas`,`disciplinas_turmas_cursos_id_curso`) REFERENCES `disciplinas` (`id_disciplinas`, `turmas_id_turmas`, `turmas_cursos_id_curso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD CONSTRAINT `fk_disciplinas_turmas1` FOREIGN KEY (`turmas_id_turmas`,`turmas_cursos_id_curso`) REFERENCES `turmas` (`id_turmas`, `cursos_id_curso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `formularios`
--
ALTER TABLE `formularios`
  ADD CONSTRAINT `fk_formularios_ambientes1` FOREIGN KEY (`ambientes_id_ambientes`,`ambientes_tipos_ambientes_id_tipos_ambientes`) REFERENCES `ambientes` (`id_ambientes`, `tipos_ambientes_id_tipos_ambientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_formularios_atribuicoes1` FOREIGN KEY (`atribuicoes_id_atribuicao`) REFERENCES `atribuicoes` (`id_atribuicao`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `fk_horarios_reservas_ambientes1` FOREIGN KEY (`reservas_ambientes_id_ambientes`) REFERENCES `reservas_eventuais` (`id_ambientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_horarios_reservas_semanais1` FOREIGN KEY (`reservas_semanais_id_reservas_semanais`) REFERENCES `reservas_semanais` (`id_reservas_semanais`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `reservas_eventuais`
--
ALTER TABLE `reservas_eventuais`
  ADD CONSTRAINT `fk_reservas_eventuais_socilitacoes1` FOREIGN KEY (`socilitacoes_id_socilitacao`,`socilitacoes_atribuicoes_id_atribuicao`,`socilitacoes_atribuicoes_disciplinas_id_disciplinas`,`socilitacoes_atribuicoes_disciplinas_turmas_id_turmas`,`socilitacoes_atribuicoes_disciplinas_turmas_cursos_id_curso`,`socilitacoes_ambientes_id_ambientes`,`socilitacoes_ambientes_tipos_ambientes_id_tipos_ambientes`) REFERENCES `socilitacoes` (`id_socilitacao`, `atribuicoes_id_atribuicao`, `atribuicoes_disciplinas_id_disciplinas`, `atribuicoes_disciplinas_turmas_id_turmas`, `atribuicoes_disciplinas_turmas_cursos_id_curso`, `ambientes_id_ambientes`, `ambientes_tipos_ambientes_id_tipos_ambientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `reservas_semanais`
--
ALTER TABLE `reservas_semanais`
  ADD CONSTRAINT `fk_reservas_semanais_socilitacoes1` FOREIGN KEY (`socilitacoes_id_socilitacao`,`socilitacoes_atribuicoes_id_atribuicao`,`socilitacoes_atribuicoes_disciplinas_id_disciplinas`,`socilitacoes_atribuicoes_disciplinas_turmas_id_turmas`,`socilitacoes_atribuicoes_disciplinas_turmas_cursos_id_curso`,`socilitacoes_ambientes_id_ambientes`,`socilitacoes_ambientes_tipos_ambientes_id_tipos_ambientes`) REFERENCES `socilitacoes` (`id_socilitacao`, `atribuicoes_id_atribuicao`, `atribuicoes_disciplinas_id_disciplinas`, `atribuicoes_disciplinas_turmas_id_turmas`, `atribuicoes_disciplinas_turmas_cursos_id_curso`, `ambientes_id_ambientes`, `ambientes_tipos_ambientes_id_tipos_ambientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `socilitacoes`
--
ALTER TABLE `socilitacoes`
  ADD CONSTRAINT `fk_socilitacoes_ambientes1` FOREIGN KEY (`ambientes_id_ambientes`,`ambientes_tipos_ambientes_id_tipos_ambientes`) REFERENCES `ambientes` (`id_ambientes`, `tipos_ambientes_id_tipos_ambientes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_socilitacoes_atribuicoes1` FOREIGN KEY (`atribuicoes_id_atribuicao`,`atribuicoes_disciplinas_id_disciplinas`,`atribuicoes_disciplinas_turmas_id_turmas`,`atribuicoes_disciplinas_turmas_cursos_id_curso`) REFERENCES `atribuicoes` (`id_atribuicao`, `disciplinas_id_disciplinas`, `disciplinas_turmas_id_turmas`, `disciplinas_turmas_cursos_id_curso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `turmas`
--
ALTER TABLE `turmas`
  ADD CONSTRAINT `fk_turmas_cursos1` FOREIGN KEY (`cursos_id_curso`) REFERENCES `cursos` (`id_curso`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
