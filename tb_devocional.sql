-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jul-2023 às 15:43
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
-- Banco de dados: `test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_devocional`
--

CREATE TABLE `tb_devocional` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `palavra` longtext NOT NULL,
  `versiculo` longtext NOT NULL,
  `versiculoBiblia` text NOT NULL,
  `audio` text NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `tb_devocional`
--

INSERT INTO `tb_devocional` (`id`, `titulo`, `palavra`, `versiculo`, `versiculoBiblia`, `audio`, `data`) VALUES
(1, '', 'Imagine que maravilha o povo de Deus experimentou durante a sua trajetória no deserto: a comida era enviada do céu diariamente (Maná), os seus sapatos e roupas não se desgastavam. Viam a nuvem da presença de Deus de dia e a coluna de fogo à noite. A vida se renovava milagrosamente...\r\nDeus também quer renovar as suas forças, esperança e alegria neste dia!\r\nNão somente hoje, mas quer restaurar sua fé e lhe sustentar diariamente. Coloque-se na presença do Senhor, Ele vai lhe guiar rumo a um futuro certo.', 'Por isso não desanimamos. Embora exteriormente estejamos a desgastar-nos, interiormente estamos sendo renovados dia após dia', '2 Coríntios 4:16', 'http://localhost/Lucas/wordpress/wp-content/uploads/2023/07/13-de-julho.ogg', '2023-07-13 09:18:24');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_devocional`
--
ALTER TABLE `tb_devocional`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_devocional`
--
ALTER TABLE `tb_devocional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
