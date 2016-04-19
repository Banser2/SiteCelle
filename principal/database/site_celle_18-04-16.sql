-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2016 at 04:13 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site_celle`
--

-- --------------------------------------------------------

--
-- Table structure for table `resultados`
--

CREATE TABLE `resultados` (
  `id` int(11) NOT NULL,
  `erros` int(10) NOT NULL,
  `acertos` int(10) NOT NULL,
  `percentual` double NOT NULL,
  `matricula` varchar(30) COLLATE utf16_unicode_ci NOT NULL,
  `contexto` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `resultados`
--

INSERT INTO `resultados` (`id`, `erros`, `acertos`, `percentual`, `matricula`, `contexto`, `data`) VALUES
(5, 1, 15, 93, '8819', 'vestuario', '2016-04-19 02:07:44'),
(7, 0, 15, 100, '8819', 'profissoes', '2016-04-19 02:12:30');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `sexo` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `datanasc` varchar(10) COLLATE utf16_unicode_ci NOT NULL,
  `telefone` varchar(15) COLLATE utf16_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf16_unicode_ci NOT NULL,
  `senha` varchar(256) COLLATE utf16_unicode_ci NOT NULL,
  `periodo` varchar(30) COLLATE utf16_unicode_ci NOT NULL,
  `curso` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `matricula` varchar(30) COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sexo`, `datanasc`, `telefone`, `email`, `usuario`, `senha`, `periodo`, `curso`, `matricula`) VALUES
(12, 'Bertonni Thiago', 'Masculino', '08/11/1986', '81987330562', 'ibragamesonly@gmail.com', 'bertonnipaz', '202cb962ac59075b964b07152d234b70', '2', 'IPI', '8819');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matricula` (`matricula`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resultados`
--
ALTER TABLE `resultados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
