-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Dez-2019 às 02:09
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
-- Banco de dados: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`, `descricao`) VALUES
(2, 'Anel', 'Acessório para os dedos das mãos.'),
(3, 'Brincos', 'Acessório para as orelhas.'),
(4, 'Colar', 'Acessório para o pescoço.'),
(5, 'Pulseira', 'Acessório para os pulsos.'),
(6, 'Relógio', 'Acessório de marcar horas.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  `comentario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `email`, `nome`, `assunto`, `comentario`) VALUES
(1, 'darlan@hotmail.com', 'Darlan', 'Joia', 'Gostei muito!'),
(11, 'darlan@hotmail.com', 'Dan', 'tiro porrada e bomba', 'so tiro!');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` float NOT NULL,
  `descricao` longtext NOT NULL,
  `url_imagem` mediumtext NOT NULL,
  `data_venda` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `preco`, `descricao`, `url_imagem`, `data_venda`, `categoria_id`) VALUES
(17, 'Anel Rinco Gold', 800, 'Toda mulher tem uma história para contar, e tem sempre uma que é a mais especial! A Coleção Rinco da Paula Brincos eterniza todos esses momentos. Todo anel é único, tornando sua joia tão valiosa quanto as recordações que nela você guarda. #lifebypaulabrincos', 'anel.jpg', '0000-00-00 00:00:00', 2),
(18, 'Pulseira Rinco Bloom', 650, 'Toda mulher tem uma história para contar, e tem sempre uma que é a mais especial! A Coleção Rinco da Paula Brincos eterniza todos esses momentos. Toda pulseira é única, tornando sua joia tão valiosa quanto as recordações que nela você guarda. #lifebypaulabrincos', 'pulseira.jpg', '0000-00-00 00:00:00', 5),
(19, 'Brinco Rinco Diamond', 1200, 'Toda mulher tem uma história para contar, e tem sempre uma que é a mais especial! A Coleção Rinco da Paula Brincos eterniza todos esses momentos. Todo brinco é único, tornando sua joia tão valiosa quanto as recordações que nela você guarda. Esse brincos de diamantes tornarão você ainda mais especial! #lifebypaulabrincos', 'brinco.jpg', '0000-00-00 00:00:00', 3),
(20, 'Colar Rinco Opal', 450, 'Toda mulher tem uma história para contar, e tem sempre uma que é a mais especial! A Coleção Rinco da Paula Brincos eterniza todos esses momentos. Todo colar é único, tornando sua joia tão valiosa quanto as recordações que nela você guarda. #lifebypaulabrincos', 'colar.jpg', '0000-00-00 00:00:00', 4),
(21, 'Relógio Ceffas Black', 250, 'Com o mesmo compromisso que possui com a criação de suas joias, a Paula Brincos desenvolveu em 2019 a Ceffas, marca de relógios, com modelos e coleções exclusivas! Transformando sonhos em realidade também no mundo da alta relojoaria, a Ceffas lança coleções modernas sempre alinhadas as últimas tendências da moda. #lifebypaulabrincos', 'relogio.jpg', '0000-00-00 00:00:00', 6),
(22, 'Relógio Ceffas Silver', 1400, 'Com o mesmo compromisso que possui com a criação de suas joias, a Paula Brincos desenvolveu em 2019 a Ceffas, marca de relógios, com modelos e coleções exclusivas! Transformando sonhos em realidade também no mundo da alta relojoaria, a Ceffas lança coleções modernas sempre alinhadas as últimas tendências da moda. #lifebypaulabrincos', 'relogios.jpg', '0000-00-00 00:00:00', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `url_imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `url_imagem`) VALUES
(1, 'Victor Charles', 'chaves@gmail.com', '12345', 'chaves.jfif'),
(2, 'Dennin Brabow', 'denninbrabow@bol.com', '12345', 'brabow.jfif'),
(3, 'Igor o Homem do Oeste', 'Oestehomem@gmail.com', '123456', 'oeste.jfif'),
(4, 'Leopoldo', 'leopoldo@hotmail.com', '12345', 'leopoldo.jfif'),
(5, 'GustaCerveja', 'GustaCerveja@yahoo.com.br', '12345', 'gusta.jfif'),
(6, 'Ovelha da Silva', 'darlan.silva@ice.ufjf.br', '12345', 'darlan.jfif'),
(7, 'Rafaela Pomar', 'rafaela.horta@engenharia.ufjf.br', '12345', 'rafa.jfif'),
(9, 'Minguado', 'andrelbdutra@hotmail.com', '12345', 'andre.jfif');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
