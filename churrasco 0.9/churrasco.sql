-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Abr-2019 às 02:24
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `churrasco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` tinytext NOT NULL,
  `imagem` varchar(128) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `imagem`, `data`) VALUES
(2, 'Mesa de Churrasco', 'Mesa De Churrasco Com 2 Bancos 2,5 Metros 100% Eucalipto Ms MÃ³veis / MÃ³veis Hanna', 'd609d87d557648b752312addf178033d.jpg', '2019-04-12 23:05:19'),
(3, 'Gamela', 'Gamela para churrasco pequena bbq madeira natural 28x5,6x45cm', '7731405283b72b6a0eeedbaf849ed53d.jpg', '2019-04-12 23:06:48'),
(4, 'Churrasqueira', 'Churrasqueira a CarvÃ£o de Parede MetÃ¡vila 650C - para 6 Espetos', 'b1b21f00e9d512f56ec6e5296cc8d08e.jpg', '2019-04-12 23:06:58'),
(5, 'Grelha', 'Grelha Chapa ProgÃ¡s PGC-005 Esmaltada SE', 'b6831a18e8f269c5d9ba2d31afd0e58b.jpg', '2019-04-12 23:08:02'),
(6, 'Kit Churrasco', 'Kit Churrasco TÃ¡bua Inteligente Para Churrasqueiro Avental', 'b6c40e729def50e968c2035eae0dba29.jpg', '2019-04-12 23:08:10'),
(7, 'Faqueiro', 'Jogo de utensÃ­lios para churrasco com maleta grill 5 peÃ§as - home style', 'c5c452a77e3a155039003d1c749dffd8.jpg', '2019-04-12 23:08:28'),
(8, 'Kit Espetos', 'Kit 10 Espetos Duplos Churrasco Aperitivos 79 cm - AÃ§o Cromado', 'cd3ac1ade94d7300e86a3eb10009c038.jpg', '2019-04-12 23:08:38'),
(10, 'Faca de Churrasco', 'Faca de Churrasco com cabo de madeira e bainha de couro', '044ce9b4f37e014361ddb9690abd2ace.jpg', '2019-04-12 23:02:35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `avatar` varchar(160) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `avatar`, `usuario`, `senha`, `tipo`, `email`, `data_cadastro`) VALUES
(1, 'b05028176ff1718aa526c572dc464830.jpg', 'admin', 'eaa34e49ad0cad134f1cf04a6510c958a290506c628002d79195df4bd4aade585dd7a9fabf29ca157c32bef991e6c050377794b7c411f6a7a1520e015f3cdac6', 'root', 'root@server.com', '2019-04-13 00:16:12'),
(2, '32ae6d3f91fac84d384a78259f6cc7e0.ico', 'jurandir', '8b8dc850e59d067e9d5a24046ac88d0f12b03c14c89307f4283dd3f19ab243e32615e926b2125bacb3a505cd7acffbc9000aebbc480f897d6e4acf0b11112291', 'comum', 'jurandir@gmail.com', '2019-04-13 00:21:24'),
(4, 'a6ac64fabd0975a771693f399e0e4b03.png', 'pafuncio', '1d9cf61990cfaf2265feaa258373bd68de5dbc9f3b01e96760e4163a04eb03f7b732c49a7c5d969e6c8816237cc9117753fbc0691bdc074de8895b56e128693e', 'comum', 'pafuncio@hotmail.com', '2019-04-13 00:21:41'),
(5, '5e05007100ba91ea453cc3c57b00f9f1.jpg', 'jeangrey', '3b43b35d950a3c8e750617a435cf9d599b89ed33cb61408e1fe5f954be8e48b80fe815d26b83921ea92537ca9f59379f2d6784a6b6a1785486b51399485dccb2', 'comum', 'jean@xmen.com', '2019-04-13 00:21:56'),
(6, 'b1fa6fab7195cee5b2e87ce797059141.png', 'luke', '30ba5ca27e837ad1f72fca2c8e44edad2a77ad2b609a9e04f37ee27e40b91be82581d3b74bd528a3c0e86f84187f71f5fb4199c37d7bd764cb7a5a5110067b40', 'root', 'luke@starwars.com', '2019-04-13 00:21:10'),
(8, '7cf62d9223e499e43ff4e747475921a6.png', 'marilyn', '84af64fd1f4a8f1124652f07708ae54ecd2b2f3e6b3a61d9a4a19bbebbd9d73b28ed62ee73c65f96aa99f8a79f90ccc2e53064c69c7a027b16e4a7b4b8b9269e', 'comum', 'marilyn@monroe.com', '2019-04-12 23:19:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
