-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Fev-2021 às 22:37
-- Versão do servidor: 10.4.16-MariaDB
-- versão do PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `favelainvest`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `tipo`) VALUES
(1, 'colaborador'),
(2, 'beneficiario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(80) NOT NULL,
  `idade` int(11) DEFAULT NULL,
  `contato` varchar(15) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `fk_tipo` int(11) NOT NULL,
  `perfil` text DEFAULT NULL,
  `materiais` text DEFAULT NULL,
  `ramo` varchar(50) NOT NULL,
  `atuacao` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `senha`, `idade`, `contato`, `endereco`, `fk_tipo`, `perfil`, `materiais`, `ramo`, `atuacao`) VALUES
(5, 'Vitória', 'email@email.com.br', '123456', NULL, '111111111', 'Rua A, SP', 2, NULL, 'Seringas, luvas, máscaras', '', ''),
(6, 'Nath', 'email@email.com.br', '123456', NULL, '111111111', 'Rua B, RJ', 2, NULL, 'Computador, caneta, blocos', '', ''),
(7, 'Gui', 'email@email.com.br', '123456', NULL, '111111111', 'Rua C, MG', 2, NULL, 'Computador, modem, pendrive', '', ''),
(8, 'Gi', 'email@email.com.br', '123456', NULL, '111111111', 'Rua D, MA', 2, NULL, 'Fermento, farinha', '', ''),
(9, 'Anna', 'email@email.com.br', '123456', 40, '111111111111111', 'Rua E, PE', 2, NULL, 'Caderno', '', ''),
(10, 'Nath', 'nath@favela.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, 1, NULL, NULL, '', ''),
(11, 'João da Silva', 'joao@favela.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, 1, NULL, NULL, '', ''),
(19, 'Anna P', 'ana@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, 1, NULL, 'Arroz', '', ''),
(22, 'Vitória Katerine Ferreira', 'viihferreiraa74@gmail.com', 'aa530a3207db9f0ce10705272b41046f', NULL, NULL, NULL, 1, NULL, NULL, '', ''),
(25, 'Célia Souza', 'celia@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 52, NULL, 'Brasilândia', 2, NULL, NULL, 'Confeitaria', 'Meu nome é Célia, atuo no ramo de Confeitaria, sou fundadora da Doces Talentos, e dou aula a mulheres que querem empreender nessa mesma área.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
