-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 23/04/2018 às 15:59
-- Versão do servidor: 5.7.21-0ubuntu0.16.04.1
-- Versão do PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_auto1`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `ano`
--

CREATE TABLE `ano` (
  `id_ano` int(11) NOT NULL,
  `ano` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `ano`
--

INSERT INTO `ano` (`id_ano`, `ano`) VALUES
(1, '2017'),
(2, '2017'),
(3, '2016');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentario`
--

CREATE TABLE `comentario` (
  `idcomentario` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `texto` text,
  `idcarro` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `comparacao`
--

CREATE TABLE `comparacao` (
  `comparacao` int(11) NOT NULL,
  `idcomparacao` int(11) NOT NULL,
  `idcarro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `favoritos`
--

CREATE TABLE `favoritos` (
  `idfavoritos` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `comparacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `modelo`
--

CREATE TABLE `modelo` (
  `idmodelo` int(11) NOT NULL,
  `nomemodelo` varchar(45) DEFAULT NULL,
  `idmontadora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `modelo`
--

INSERT INTO `modelo` (`idmodelo`, `nomemodelo`, `idmontadora`) VALUES
(1, 'Camaro', 1),
(2, 'Captiva', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `montadora`
--

CREATE TABLE `montadora` (
  `idmontadora` int(11) NOT NULL,
  `nome_montadora` varchar(45) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Fazendo dump de dados para tabela `montadora`
--

INSERT INTO `montadora` (`idmontadora`, `nome_montadora`) VALUES
(1, 'Chevrolet');

-- --------------------------------------------------------

--
-- Estrutura para tabela `triade`
--

CREATE TABLE `triade` (
  `id_versao` int(11) NOT NULL,
  `id_ano` int(11) NOT NULL,
  `idmodelo` int(11) NOT NULL,
  `idcarro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `triade`
--

INSERT INTO `triade` (`id_versao`, `id_ano`, `idmodelo`, `idcarro`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `senha` varchar(10) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `tip_user` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`id_user`, `senha`, `email`, `nome`, `tip_user`) VALUES
(1, '12345', 'admin@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura para tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `idcarro` int(11) NOT NULL,
  `potencia` varchar(45) DEFAULT NULL,
  `portas` varchar(45) DEFAULT NULL,
  `preco` varchar(45) DEFAULT NULL,
  `altura` varchar(45) DEFAULT NULL,
  `comprimento` varchar(45) DEFAULT NULL,
  `largura` varchar(45) DEFAULT NULL,
  `cambio` varchar(45) DEFAULT NULL,
  `velocidade` varchar(45) DEFAULT NULL,
  `tanque_combustivel` varchar(45) DEFAULT NULL,
  `tip_combustivel` varchar(45) DEFAULT NULL,
  `porta_malas` varchar(45) DEFAULT NULL,
  `tip_direcao` varchar(45) DEFAULT NULL,
  `consumo_urb` varchar(45) DEFAULT NULL,
  `consumo_rod` varchar(45) DEFAULT NULL,
  `marcha` varchar(45) DEFAULT NULL,
  `tip_tracao` varchar(45) DEFAULT NULL,
  `porte` varchar(45) DEFAULT NULL,
  `ocupantes` varchar(45) DEFAULT NULL,
  `tip_freio` varchar(45) DEFAULT NULL,
  `tip_veiculo` varchar(45) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `veiculo`
--

INSERT INTO `veiculo` (`idcarro`, `potencia`, `portas`, `preco`, `altura`, `comprimento`, `largura`, `cambio`, `velocidade`, `tanque_combustivel`, `tip_combustivel`, `porta_malas`, `tip_direcao`, `consumo_urb`, `consumo_rod`, `marcha`, `tip_tracao`, `porte`, `ocupantes`, `tip_freio`, `tip_veiculo`, `id_user`) VALUES
(1, '461 cv a 6000 rpm', '2', 'R$259.295', '1340 mm', '4784 mm', '1894 mm', 'Automático', '290 km/h', '72 litros', 'Gasolina', '208 litros', 'Elétrica', '5,6 km/l', '8 km/l', '8', 'Traseira', 'Grande', '4', 'Disco ventilado', 'Cupê', 1),
(2, '461 cv a 6000 rpm', '2', 'R$261.218', '1340 mm', '4784 mm', '1894 mm', 'Automático', '290 km/h', '72 litros', 'Gasolina', '208 litros', 'Elétrica', '5,6 km/l', '8 km/l', '8', 'Traseira', 'Grande', '4', 'Disco ventilado', 'Cupê', 1),
(3, '461 cv a 6000 rpm', '2', 'R$291.029', '1340 mm', '4784 mm', '1894 mm', 'Automático', '290 km/h', '72 litros', 'Gasolina', '208 litros', 'Elétrica', '5,6 km/l', '8 km/l', '8', 'Traseira', 'Grande', '4', 'Disco ventilado', 'Conversível', 1),
(4, '184 cv a 6700 rpm', '4', 'R$91.102', '1704 mm', '4576 mm', '1850 mm', 'Automático', '210 km/h', '73 litros', 'Gasolina', '383 litros', 'Hidráulica', '7,2 km/l', '9,7 km/l', '6', 'Dianteira', 'Médio', '5', 'Disco ventilado', 'SUV', 1),
(5, '184 cv a 6700 rpm', '4', 'R$94.383', '1704 mm', '4576 mm', '1850 mm', 'Automático', '210 km/h', '73 litros', 'Gasolina', '383 litros', 'Hidráulica', '7,2 km/l', '9,7 km/l', '6', 'Dianteira', 'Médio', '5', 'Disco ventilado', 'SUV', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `versao`
--

CREATE TABLE `versao` (
  `id_versao` int(11) NOT NULL,
  `versao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `versao`
--

INSERT INTO `versao` (`id_versao`, `versao`) VALUES
(1, 'Fifty 6.2 V8'),
(2, 'SS 6.2 V8'),
(3, 'SS 6.2 V8 Conversivel'),
(4, 'Sport 2.4'),
(5, 'Sport 2.4');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `ano`
--
ALTER TABLE `ano`
  ADD PRIMARY KEY (`id_ano`);

--
-- Índices de tabela `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idcomentario`),
  ADD KEY `fk_comentario_carro1_idx` (`idcarro`),
  ADD KEY `fk_comentario_usuario1_idx` (`id_user`);

--
-- Índices de tabela `comparacao`
--
ALTER TABLE `comparacao`
  ADD PRIMARY KEY (`comparacao`),
  ADD KEY `fk_comparacao_veiculo1_idx` (`idcarro`);

--
-- Índices de tabela `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`idfavoritos`),
  ADD KEY `fk_favoritos_usuario1_idx` (`id_user`),
  ADD KEY `fk_favoritos_comparacao1_idx` (`comparacao`);

--
-- Índices de tabela `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`idmodelo`),
  ADD KEY `fk_modelo_montadora1_idx` (`idmontadora`);

--
-- Índices de tabela `montadora`
--
ALTER TABLE `montadora`
  ADD PRIMARY KEY (`idmontadora`);

--
-- Índices de tabela `triade`
--
ALTER TABLE `triade`
  ADD KEY `fk_versao_has_ano_ano1_idx` (`id_ano`),
  ADD KEY `fk_versao_has_ano_versao1_idx` (`id_versao`),
  ADD KEY `fk_versao_has_ano_modelo1_idx` (`idmodelo`),
  ADD KEY `fk_triade_veiculo1_idx` (`idcarro`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- Índices de tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`idcarro`),
  ADD KEY `fk_veiculo_usuario1_idx` (`id_user`);

--
-- Índices de tabela `versao`
--
ALTER TABLE `versao`
  ADD PRIMARY KEY (`id_versao`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `ano`
--
ALTER TABLE `ano`
  MODIFY `id_ano` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idcomentario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `comparacao`
--
ALTER TABLE `comparacao`
  MODIFY `comparacao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `idfavoritos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `modelo`
--
ALTER TABLE `modelo`
  MODIFY `idmodelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `versao`
--
ALTER TABLE `versao`
  MODIFY `id_versao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `fk_comentario_carro1` FOREIGN KEY (`idcarro`) REFERENCES `veiculo` (`idcarro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comentario_usuario1` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `comparacao`
--
ALTER TABLE `comparacao`
  ADD CONSTRAINT `fk_comparacao_veiculo1` FOREIGN KEY (`idcarro`) REFERENCES `veiculo` (`idcarro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `fk_favoritos_comparacao1` FOREIGN KEY (`comparacao`) REFERENCES `comparacao` (`comparacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_favoritos_usuario1` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `fk_modelo_montadora1` FOREIGN KEY (`idmontadora`) REFERENCES `montadora` (`idmontadora`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `triade`
--
ALTER TABLE `triade`
  ADD CONSTRAINT `fk_triade_veiculo1` FOREIGN KEY (`idcarro`) REFERENCES `veiculo` (`idcarro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_versao_has_ano_ano1` FOREIGN KEY (`id_ano`) REFERENCES `ano` (`id_ano`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_versao_has_ano_modelo1` FOREIGN KEY (`idmodelo`) REFERENCES `modelo` (`idmodelo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_versao_has_ano_versao1` FOREIGN KEY (`id_versao`) REFERENCES `versao` (`id_versao`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `veiculo`
--
ALTER TABLE `veiculo`
  ADD CONSTRAINT `fk_veiculo_usuario1` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
