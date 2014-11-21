-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2014 at 03:16 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Table structure for table `carrinho`
--

CREATE TABLE `carrinho` (
`carrinho_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carrinho`
--

INSERT INTO `carrinho` (`carrinho_id`, `usuario_id`, `produto_id`, `quantidade`, `total`) VALUES
(18, 1, 5, 1, 59.00),
(19, 1, 5, 1, 59.00),
(20, 1, 4, 1, 39.99),
(21, 1, 5, 1, 59.00),
(22, 1, 5, 1, 59.00),
(23, 1, 6, 1, 42.00),
(24, 1, 4, 1, 39.99),
(25, 1, 5, 1, 59.00),
(26, 1, 4, 1, 39.99);

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
`produto_id` int(11) NOT NULL,
  `foto` varchar(80) NOT NULL,
  `titulo` varchar(80) NOT NULL,
  `subtitulo` varchar(80) NOT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`produto_id`, `foto`, `titulo`, `subtitulo`, `preco`) VALUES
(1, 'bolsa1.jpg', 'Titulo do produto', 'breve descricao do produto', 70.00),
(2, 'bolsa2.jpg', 'Titulo do Produto', 'Breve descricao do produto', 59.99),
(3, 'bolsa3.jpg', 'Titulo do Produto', 'Descricao do produto', 111.50),
(4, 'bolsa4.jpg', 'Titulo do Produto', 'Breve Descricao do Produto', 39.99),
(5, 'bolsa5.jpg', 'Titulo do produto', 'Descricao do Produto', 59.00),
(6, 'bolsa6.jpg', 'titulo do produto', 'descricao do produto', 42.00);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
`usuario_id` int(11) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `senha` varchar(80) NOT NULL,
  `permissao` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `nome`, `email`, `senha`, `permissao`) VALUES
(1, 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'carlos', 'cggodri@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
 ADD PRIMARY KEY (`carrinho_id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
 ADD PRIMARY KEY (`produto_id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrinho`
--
ALTER TABLE `carrinho`
MODIFY `carrinho_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
MODIFY `produto_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
