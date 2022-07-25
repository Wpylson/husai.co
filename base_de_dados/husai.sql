-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Maio-2022 às 20:19
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `husai`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `idprod` int(11) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `dominio` varchar(200) NOT NULL,
  `designacao` varchar(200) NOT NULL,
  `quantidade` int(11) NOT NULL DEFAULT '1',
  `preco` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL DEFAULT 'nao',
  `carrinho` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinhofeito`
--

CREATE TABLE `carrinhofeito` (
  `id` int(40) NOT NULL,
  `user` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  `descricao` text NOT NULL,
  `banco` varchar(200) NOT NULL,
  `iban_conta` varchar(200) NOT NULL,
  `estado` varchar(200) NOT NULL DEFAULT 'nao',
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `certificado_ssl`
--

CREATE TABLE `certificado_ssl` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `preco` varchar(200) NOT NULL,
  `descricao` text NOT NULL,
  `dominio` varchar(200) NOT NULL DEFAULT 'Nome de dominio gratuito incluido',
  `backups` varchar(200) NOT NULL DEFAULT 'Backups diarios redundantes',
  `cdn` varchar(200) NOT NULL DEFAULT 'CDN gratis e construtor de sites',
  `ssl` varchar(200) NOT NULL DEFAULT 'SSL premium ilimitado',
  `ddos` varchar(200) NOT NULL DEFAULT 'Protecao DDOS',
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `certificado_ssl`
--

INSERT INTO `certificado_ssl` (`id`, `nome`, `preco`, `descricao`, `dominio`, `backups`, `cdn`, `ssl`, `ddos`, `data`) VALUES
(1, 'Certificado SSL Comodo', '33495', 'Um certificado SSL basico que fornece criptografia completa por um preco muito baixo.', 'Nome de dominio gratuito incluido', 'Backups diarios redundantes', 'CDN gratis e construtor de sites', 'SSL premium ilimitado', 'Protecao DDOS', '2022-05-10 10:38:09'),
(2, 'Comodo Premium Wildcard', '101400', 'Um certificado SSL completo que protege varios subdominios, centralizando o gerenciamento. Validacao estendida necessaria.', 'Nome de dominio gratuito incluido', 'Backups diarios redundantes', 'CDN gratis e construtor de sites', 'SSL premium ilimitado', 'Protecao DDOS', '2022-05-10 10:38:34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dominios`
--

CREATE TABLE `dominios` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `preco` varchar(200) NOT NULL,
  `renovacao` varchar(200) NOT NULL,
  `transferir` varchar(200) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dominios`
--

INSERT INTO `dominios` (`id`, `nome`, `preco`, `renovacao`, `transferir`, `estado`, `data`) VALUES
(1, '.com', '1791', '2.500', '3.400', 'ativo', '2022-05-12 12:38:13'),
(2, '.info', '1791', '2.000', '4.300', 'ativo', '2022-05-12 12:38:17'),
(4, '.blog', '1791', '2.000', '4.300', 'ativo', '2022-05-12 12:38:21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `host_cpainel`
--

CREATE TABLE `host_cpainel` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `preco` varchar(200) NOT NULL,
  `espaco` varchar(200) NOT NULL,
  `largura` varchar(200) NOT NULL,
  `dominio` varchar(200) NOT NULL,
  `subdominios` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `msyql` varchar(200) NOT NULL,
  `ipdedicado` varchar(200) NOT NULL,
  `cpainel` varchar(200) NOT NULL,
  `suporte` varchar(200) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `host_cpainel`
--

INSERT INTO `host_cpainel` (`id`, `nome`, `preco`, `espaco`, `largura`, `dominio`, `subdominios`, `email`, `msyql`, `ipdedicado`, `cpainel`, `suporte`, `data`) VALUES
(1, 'Basico', '102648', 'Disco SSD de 20GB', 'Largura de Banda Ilimitada', '1 Dominio gratis (.com. gov .co .net .info .biz .cn .online .xyx .club)', '50 Subdominios', '5 E-mails', 'MySQL (mas recente)', 'IP dedicado opcional', 'cPainel', 'Suporte Tecnico', '2022-05-10 10:33:08'),
(2, 'Profissional', '129677', 'Disco SSD de 50GB', 'Largura de Banda Ilimitada', '1 Dominio gratis (.com. gov .co .net .info .biz .cn .online .xyx .club)', 'Subdominios ilimitados', '100 E-mails', 'MySQL (mas recente)', 'IP dedicado opcional', 'cPainel', 'Suporte Tecnico', '2022-05-10 10:33:44'),
(3, 'Ultimato', '308100', 'Disco SSD de 250GB', 'Largura de Banda Ilimitada', '2 Dominio gratis (.com. gov .co .net .info .biz .cn .online .xyx .club)', 'Subdominios ilimitados', 'E-mails ilimitados', 'MySQL (mas recente)', 'IP dedicado opcional', 'cPainel', 'Suporte Tecnico', '2022-05-10 10:34:12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `host_vps`
--

CREATE TABLE `host_vps` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `preco` varchar(200) NOT NULL,
  `ram` varchar(200) NOT NULL,
  `cpu` varchar(200) NOT NULL,
  `memoria` varchar(200) NOT NULL,
  `transferencia` varchar(200) NOT NULL,
  `ip` varchar(200) NOT NULL,
  `protecao` varchar(200) NOT NULL,
  `cpainel` varchar(200) NOT NULL,
  `gps` varchar(200) NOT NULL,
  `sistema` varchar(200) NOT NULL,
  `reinicia` varchar(200) NOT NULL,
  `remota` varchar(200) NOT NULL,
  `suporte` varchar(200) NOT NULL DEFAULT 'Suporte',
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `host_vps`
--

INSERT INTO `host_vps` (`id`, `nome`, `preco`, `ram`, `cpu`, `memoria`, `transferencia`, `ip`, `protecao`, `cpainel`, `gps`, `sistema`, `reinicia`, `remota`, `suporte`, `data`) VALUES
(1, 'SSD VPS 2048 MB 40 GB', '143400', 'RAM 2048 MB', 'Nucleo da CPU 1', 'Armazenamento (SSD RAID 10) 40 GB', 'Transferencia 2000GB', 'IP Sim', 'Proteccao DDoS ate 40Gbps', 'cPANel NA', 'Localizacao LA/AMS/Denver/Chicago', 'OS Linux/Windows/FreeBSd ', 'Reinicializacao remota Sim', 'Reinstalacaoo remota Sim', 'Suporte', '2022-05-10 10:35:13'),
(2, 'SSD VPS 4096 MB 60 GB', '223800', 'RAM 4096 MB', 'Nucleo da CPU 2', 'Armazenamento (SSD RAID 10) 60 GB', 'Transferencia 3000GB', 'IP Sim', 'Proteccao DDoS ate 40Gbps', 'cPANel NA', 'Localizacao LA/AMS/Denver/Chicago', 'OS Linux/Windows/FreeBSd ', 'Reinicializacao remota Sim', 'Reinstalacaoo remota Sim', 'Suporte', '2022-05-10 10:35:38'),
(3, 'SSD VPS 8192 MB 100 GB', '389400', 'RAM 8192 MB', 'Nucleo da CPU 4', 'Armazenamento (SSD RAID 10) 100 GB', 'Transferencia 4000GB', 'IP Sim', 'Proteccao DDoS ate 40Gbps', 'cPANel NA', 'Localizacao LA/AMS/Denver/Chicago', 'OS Linux/Windows/FreeBSd ', 'Reinicializacao remota Sim', 'Reinstalacaoo remota Sim', 'Suporte', '2022-05-10 10:36:06'),
(4, 'SSD VPS 16384 MB 200 GB', '793800', 'RAM 16384 MB', 'Nucleo da CPU 6', 'Armazenamento (SSD RAID 10) 200 GB', 'Transferencia 5000GB', 'IP Sim', 'Proteccao DDoS ate 40Gbps', 'cPANel NA', 'Localizacao LA/AMS/Denver/Chicago', 'OS Linux/Windows/FreeBSd ', 'Reinicializacao remota Sim', 'Reinstalacaoo remota Sim', 'Suporte', '2022-05-10 10:36:46'),
(5, 'SSD VPS 32768 MB 300 GB', '1151495', 'RAM 32768 MB', 'Nucleo da CPU 8', 'Armazenamento (SSD RAID 10) 300 GB', 'Transferencia 6000GB', 'IP Sim', 'Proteccao DDoS ate 40Gbps', 'cPANel NA', 'Localizacao LA/AMS/Denver/Chicago', 'OS Linux/Windows/FreeBSd ', 'Reinicializacao remota Sim', 'Reinstalacaoo remota Sim', 'Suporte', '2022-05-10 10:37:20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagens`
--

CREATE TABLE `mensagens` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `para` varchar(200) NOT NULL,
  `mensagem` text NOT NULL,
  `resposta` text NOT NULL,
  `estado` varchar(200) NOT NULL DEFAULT 'nao',
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `usuario` varchar(200) NOT NULL,
  `tipo` int(11) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `total` varchar(200) NOT NULL,
  `pago` varchar(200) NOT NULL DEFAULT 'nao',
  `estado` varchar(200) NOT NULL DEFAULT 'nao validado',
  `fechar` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacoes`
--

CREATE TABLE `solicitacoes` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `nome_startup` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descricao` text NOT NULL,
  `estado` varchar(200) NOT NULL DEFAULT 'nao',
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `foto` text NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user_admin`
--

INSERT INTO `user_admin` (`id`, `nome`, `email`, `senha`, `foto`, `data`) VALUES
(1, 'Raul Afonso', 'afonsoraul57@gmail.com', 'Alimento', '', '2022-04-20 04:24:54');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_geral`
--

CREATE TABLE `user_geral` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `telefone` varchar(200) NOT NULL,
  `foto` text NOT NULL,
  `morada` varchar(200) NOT NULL,
  `idBankya` varchar(200) NOT NULL,
  `saldoBankya` varchar(200) NOT NULL,
  `validadeBankya` varchar(200) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carrinhofeito`
--
ALTER TABLE `carrinhofeito`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificado_ssl`
--
ALTER TABLE `certificado_ssl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dominios`
--
ALTER TABLE `dominios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `host_cpainel`
--
ALTER TABLE `host_cpainel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `host_vps`
--
ALTER TABLE `host_vps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensagens`
--
ALTER TABLE `mensagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solicitacoes`
--
ALTER TABLE `solicitacoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_geral`
--
ALTER TABLE `user_geral`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idBankya` (`idBankya`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `certificado_ssl`
--
ALTER TABLE `certificado_ssl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dominios`
--
ALTER TABLE `dominios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `host_cpainel`
--
ALTER TABLE `host_cpainel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `host_vps`
--
ALTER TABLE `host_vps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mensagens`
--
ALTER TABLE `mensagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `solicitacoes`
--
ALTER TABLE `solicitacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_admin`
--
ALTER TABLE `user_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_geral`
--
ALTER TABLE `user_geral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
