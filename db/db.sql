-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Mar-2020 às 14:24
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `assiste`
--

CREATE TABLE `assiste` (
  `id` int(11) NOT NULL,
  `data_inscricao` date DEFAULT NULL,
  `idgafanhoto` int(11) DEFAULT NULL,
  `idcurso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `assiste`
--

INSERT INTO `assiste` (`id`, `data_inscricao`, `idgafanhoto`, `idcurso`) VALUES
(1, '2014-03-01', 1, 2),
(3, '2015-06-11', 3, 4),
(4, '2016-12-03', 4, 1),
(5, '2016-10-04', 10, 10),
(6, '2017-04-11', 7, 14),
(8, '2019-12-09', 17, 17),
(10, '2017-06-23', 13, 15),
(12, '2015-10-25', 52, 14),
(13, '2016-11-05', 20, 18),
(14, '2018-01-17', 49, 13),
(15, '2018-08-16', 55, 6),
(16, '2019-05-13', 34, 15),
(17, '2016-05-16', 53, 15),
(18, '2016-03-09', 31, 22),
(19, '2017-06-17', 37, 9),
(20, '2017-09-08', 47, 3),
(21, '2019-10-18', 40, 29),
(22, '2020-01-03', 25, 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `idcurso` int(11) NOT NULL,
  `nome` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `descricao` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `carga` int(10) UNSIGNED DEFAULT NULL,
  `totaulas` int(10) UNSIGNED DEFAULT NULL,
  `ano` year(4) DEFAULT 2016
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`idcurso`, `nome`, `descricao`, `carga`, `totaulas`, `ano`) VALUES
(1, 'HTML5', 'Curso de HTML5', 0, 37, 2014),
(2, 'Algoritmos', 'Lógica de Programação', 0, 15, 2014),
(3, 'Photoshop5', 'Dicas de Photoshop CC', 10, 8, 2014),
(4, 'PHP', 'Curso de PHP para iniciantes', 40, 20, 2015),
(5, 'Java', 'Introdução à Linguagem Java', 40, 29, 2015),
(6, 'MySQL', 'Bancos de Dados MySQL', 30, 15, 2016),
(7, 'Word', 'Curso completo de Word', 40, 30, 2016),
(8, 'Python', 'Curso de Python', 40, 18, 2017),
(9, 'POO', 'Curso de Programação Orientada a Objetos', 60, 35, 2016),
(10, 'Excel', 'Curso completo de Excel', 40, 30, 2017),
(11, 'Responsividade', 'Curso de Responsividade', 30, 15, 2018),
(12, 'C++', 'Curso de C++ com Orientação a Objetos', 40, 25, 2017),
(13, 'C#', 'Curso de C#', 30, 12, 2017),
(14, 'Android', 'Curso de Desenvolvimento de Aplicativos para Android', 60, 30, 2018),
(15, 'JavaScript', 'Curso de JavaScript', 35, 18, 2017),
(16, 'PowerPoint', 'Curso completo de PowerPoint', 30, 12, 2018),
(17, 'Swift', 'Curso de Desenvolvimento de Aplicativos para iOS', 60, 30, 2019),
(18, 'Hardware', 'Curso de Montagem e Manutenção de PCs', 30, 12, 2017),
(19, 'Redes', 'Curso de Redes para Iniciantes', 40, 15, 2016),
(20, 'Segurança', 'Curso de Segurança', 15, 8, 2018),
(21, 'SEO', 'Curso de Otimização de Sites', 30, 12, 2017),
(22, 'Premiere', 'Curso de Edição de Vídeos com Premiere', 20, 10, 2017),
(23, 'After Effects', 'Curso de Efeitos em Vídeos com After Effects', 20, 10, 2018),
(24, 'WordPress', 'Curso de Criação de Sites com WordPress', 60, 30, 2019),
(25, 'Joomla', 'Curso de Criação de Sites com Joomla', 60, 30, 2019),
(26, 'Magento', 'Curso de Criação de Lojas Virtuais com Magento', 50, 25, 2019),
(27, 'Modelagem de Dados', 'Curso de Modelagem de Dados', 30, 12, 2020),
(28, 'HTML4', 'Curso Básico de HTML, versão 4.0', 20, 9, 2014),
(29, 'PHP7', 'Curso de PHP, versão 7.0', 40, 20, 2020),
(30, 'PHP4', 'Curso de PHP, versão 4.0', 30, 10, 2014);

-- --------------------------------------------------------

--
-- Estrutura da tabela `gafanhotos`
--

CREATE TABLE `gafanhotos` (
  `id` int(11) NOT NULL,
  `nomes` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `profissao` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `sexo` enum('M','F') CHARACTER SET utf8mb4 DEFAULT NULL,
  `nacionalidade` varchar(20) CHARACTER SET utf8mb4 DEFAULT 'Brasil'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `gafanhotos`
--

INSERT INTO `gafanhotos` (`id`, `nomes`, `profissao`, `nascimento`, `sexo`, `nacionalidade`) VALUES
(1, 'Daniel Morais', 'Auxiliar Administrativo', '1984-01-02', 'M', 'Brasil'),
(2, 'Talita Nascimento', 'Farmacêutico', '1999-12-30', 'F', 'Portugal'),
(3, 'Emerson Gabriel', 'Programador', '1920-12-30', 'M', 'Irlanda'),
(4, 'Lucas Damasceno', 'Auxiliar Administrativo', '1930-11-02', 'M', 'Irlanda'),
(5, 'Leila Martins', 'Farmacêutico', '1975-04-22', 'F', 'Brasil'),
(6, 'Letícia Neves', 'Programador', '1999-12-03', 'F', 'Brasil'),
(7, 'Janaína Couto', 'Auxiliar Administrativo', '1987-11-12', 'F', 'EUA'),
(8, 'Carlisson Rosa', 'Professor', '2010-08-01', 'M', 'Brasil'),
(9, 'Jackson Telles', 'Programador', '1999-01-23', 'M', 'Portugal'),
(10, 'Danilo Araujo', 'Dentista', '1975-12-10', 'M', 'EUA'),
(11, 'Andreia Delfino', 'Auxiliar Administrativo', '1975-07-01', 'F', 'Irlanda'),
(12, 'Valter Vilmerson', 'Ator', '1985-10-12', 'M', 'Brasil'),
(13, 'Allan Silva', 'Programador', '1993-11-11', 'M', 'Brasil'),
(14, 'Rosana Kunz', 'Professor', '1935-01-16', 'F', 'Brasil'),
(15, 'Josiane Dutra', 'Empreendedor', '1950-01-20', 'F', 'Portugal'),
(16, 'Elvis Schwarz', 'Dentista', '2011-05-07', 'M', 'EUA'),
(17, 'Paulo Narley', 'Auxiliar Administrativo', '1997-03-17', 'M', 'Brasil'),
(18, 'Joade Assis', 'Médico', '1930-12-01', 'M', 'EUA'),
(19, 'Nara Matos', 'Programador', '1978-03-17', 'F', 'Brasil'),
(20, 'Marcos Dissotti', 'Empreendedor', '2010-01-01', 'M', 'Portugal'),
(21, 'Ana Carolina Mendes', 'Ator', '2000-12-15', 'F', 'Brasil'),
(22, 'Guilherme de Sousa', 'Dentista', '2001-05-18', 'M', 'Irlanda'),
(23, 'Bruno Torres', 'Auxiliar Administrativo', '2000-01-30', 'M', 'Brasil'),
(24, 'Yuji Homa', 'Empreendedor', '1996-12-25', 'M', 'EUA'),
(25, 'Raian Porto', 'Programador', '1989-05-05', 'M', 'Brasil'),
(26, 'Paulo Batista', 'Ator', '1999-03-15', 'M', 'Portugal'),
(27, 'Monique Precivalli', 'Auxiliar Administrativo', '2013-12-30', 'F', 'Brasil'),
(28, 'Herisson Silva', 'Auxiliar Administrativo', '1965-10-10', 'M', 'EUA'),
(29, 'Tiago Ulisses', 'Dentista', '1993-04-22', 'M', 'Brasil'),
(30, 'Anderson Rafael', 'Programador', '1989-12-01', 'M', 'Irlanda'),
(31, 'Karine Ribeiro', 'Empreendedor', '1988-10-01', 'F', 'Brasil'),
(32, 'Roberto Luiz Debarba', 'Ator', '2007-01-09', 'M', 'Brasil'),
(33, 'Jarismar Andrade', 'Dentista', '2000-06-23', 'F', 'Brasil'),
(34, 'Janaina Oliveira', 'Professor', '1955-03-12', 'F', 'Canadá'),
(35, 'Márcio Mello', 'Programador', '2011-11-20', 'M', 'EUA'),
(36, 'Robson Rodolpho', 'Auxiliar Administrativo', '2000-08-08', 'M', 'Brasil'),
(37, 'Daniele Moledo', 'Empreendedor', '2006-08-11', 'F', 'Brasil'),
(38, 'Neto Sophiate', 'Ator', '1996-05-17', 'M', 'Portugal'),
(39, 'Neriton Dias', 'Auxiliar Administrativo', '2009-10-30', 'M', 'Brasil'),
(40, 'André Schmidt', 'Programador', '1993-07-26', 'M', 'Angola'),
(41, 'Isaias Buscarino', 'Dentista', '2001-01-07', 'M', 'EUA'),
(42, 'Rafael Guimma', 'Empreendedor', '1968-04-11', 'M', 'Brasil'),
(43, 'Ana Carolina Hernandes', 'Ator', '1970-10-11', 'F', 'EUA'),
(44, 'Luiz Paulo', 'Professor', '1984-11-01', 'M', 'Portugal'),
(45, 'Bruna Teles', 'Programador', '1980-11-07', 'F', 'Brasil'),
(46, 'Diogo Padilha', 'Auxiliar Administrativo', '2000-03-03', 'M', 'Canadá'),
(47, 'Bruno Miltersteiner', 'Dentista', '1986-02-19', 'M', 'EUA'),
(48, 'Elaine Nunes', 'Programador', '1998-08-15', 'F', 'Canadá'),
(49, 'Silvio Ricardo', 'Programador', '2012-03-12', 'M', 'EUA'),
(50, 'Denilson Barbosa da Silva', 'Empreendedor', '2000-01-08', 'M', 'Brasil'),
(51, 'Jucinei Teixeira', 'Professor', '1977-11-22', 'F', 'Portugal'),
(52, 'Bruna Santos', 'Auxiliar Administrativo', '1991-12-01', 'F', 'Canadá'),
(53, 'André Vitebo', 'Médico', '1970-07-01', 'M', 'Brasil'),
(54, 'Andre Santini', 'Programador', '1991-08-15', 'M', 'Canadá'),
(55, 'Ruan Valente', 'Programador', '1998-03-19', 'M', 'Canadá'),
(56, 'Nailton Mauricio', 'Médico', '1992-04-25', 'M', 'EUA'),
(57, 'Rita Pontes', 'Professor', '1999-09-02', 'F', 'Angola'),
(58, 'Carlos Camargo', 'Programador', '2005-02-22', 'M', 'Brasil'),
(59, 'Philppe Oliveira', 'Auxiliar Administrativo', '2000-05-23', 'M', 'Brasil'),
(60, 'Dayana Dias', 'Professor', '1993-05-30', 'F', 'Angola'),
(61, 'Silvana Albuquerque', 'Programador', '1999-05-22', 'F', 'Brasil');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `assiste`
--
ALTER TABLE `assiste`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idgafanhoto` (`idgafanhoto`),
  ADD KEY `idcurso` (`idcurso`);

--
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`idcurso`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- Índices para tabela `gafanhotos`
--
ALTER TABLE `gafanhotos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `assiste`
--
ALTER TABLE `assiste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `idcurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `gafanhotos`
--
ALTER TABLE `gafanhotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `assiste`
--
ALTER TABLE `assiste`
  ADD CONSTRAINT `assiste_ibfk_1` FOREIGN KEY (`idgafanhoto`) REFERENCES `gafanhotos` (`id`),
  ADD CONSTRAINT `assiste_ibfk_2` FOREIGN KEY (`idcurso`) REFERENCES `cursos` (`idcurso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
