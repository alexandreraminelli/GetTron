-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/11/2023 às 12:27
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gettron`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `email` text NOT NULL,
  `endereco` text NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `email`, `endereco`, `senha`) VALUES
(2, 'Alexandre Raminelli Junior', 'alexandre.raminelli9491@gmail.com', 'Av. Lauro Gomes 111, torre 1 apto 1', '234323');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `ID_produto` int(11) NOT NULL,
  `nome_produto` varchar(40) NOT NULL,
  `descricao_produto` text DEFAULT NULL,
  `img_produto` varchar(35) DEFAULT NULL,
  `preco_produto` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`ID_produto`, `nome_produto`, `descricao_produto`, `img_produto`, `preco_produto`) VALUES
(2, 'Galaxy S23 Ultra', 'O Galaxy S23 Ultra é o smartphone mais avançado e sustentável da Samsung, construído com materiais reciclados. Ele tem uma tela de 6.8 polegadas Quad HD+ com taxa de atualização variável de 1 a 120 Hz, proporcionando uma experiência visual imersiva. Destaca-se pela câmera traseira de 200 megapixels, que tira fotos de alta resolução e grava vídeos em 8K. Além disso, possui a S Pen integrada para aumentar a produtividade e a criatividade do usuário. É considerado o melhor celular Android de 2023, com alto desempenho, bateria duradoura e tecnologias avançadas.', 'assets\\img\\galaxy-s23ultra.png', 9499),
(3, 'iPhone 15 Pro Max', 'O iPhone 15 Pro Max é um smartphone premium da Apple com um design em titânio e uma tela OLED Super Retina XDR de 6,7 polegadas. Equipado com o chip A17 Pro e uma bateria de 4422 mAh, ele oferece desempenho excepcional. Seu sistema de câmera Pro inclui uma grande angular de 48 MP, uma ultra-angular de 12 MP e duas teleobjetivas de 12 MP. Resistente à água e à poeira, está disponível em várias capacidades de armazenamento, de 128 GB a 1 TB.', 'assets\\img\\iphone-15-promax.jpg', 11000);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `Email` (`email`) USING HASH;

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ID_produto`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ID_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
