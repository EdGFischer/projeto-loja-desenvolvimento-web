-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jun-2022 às 20:36
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `junintec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria`
--

CREATE TABLE `tb_categoria` (
  `id` int(11) NOT NULL,
  `nome_categoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_categoria`
--

INSERT INTO `tb_categoria` (`id`, `nome_categoria`) VALUES
(1, 'Smartphone'),
(2, 'Notebook'),
(3, 'Tablet');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produto`
--

CREATE TABLE `tb_produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `categoria` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `marca` varchar(50) NOT NULL,
  `cor` varchar(30) DEFAULT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` float DEFAULT NULL,
  `descricao` longtext DEFAULT NULL,
  `url_foto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_produto`
--

INSERT INTO `tb_produto` (`id`, `nome`, `categoria`, `marca`, `cor`, `quantidade`, `preco`, `descricao`, `url_foto`) VALUES
(1, 'Nokia 5.4', 'Smartphone', 'Nokia', 'Cinza', 10, 1149, 'Quatro câmeras com inteligência artificial\r\nTela de 6,39\" hd+\r\nMemória de 128gb\r\nBateria de 4000 mah 2 dias de uso\r\nAndroid 10', 'https://m.media-amazon.com/images/I/51LT788gX0L._AC_SX569_.jpg'),
(2, 'Apple iPhone 13 Pro Max', 'Smartphone', 'Apple', 'Preto', 50, 11330, 'Tela Super Retina XDR de 6,7 polegadas com ProMotion para uma sensação mais rápida e responsiva\r\nO modo cinematic adiciona profundidade de campo rasa e muda o foco automaticamente em seus vídeos\r\nSistema de câmera Pro com novas câmeras 12MP Telefoto, Wide e Ultra Wide; LiDAR Scanner; Alcance do zoom ótico 6x; macro fotografia; Estilos fotográficos, vídeo ProRes, Smart HDR 4, modo noturno, Apple ProRAW, gravação 4K Dolby Vision HDR\r\nCâmera frontal TrueDepth de 12 MP com modo noturno, gravação 4K Dolby Vision HDR\r\nChip biônico A15 para desempenho ultrarrápido', 'https://m.media-amazon.com/images/I/41G6Hlu3TBL._AC_SX679_.jpg'),
(3, 'iPad ', 'Tablet', 'Apple', 'Preto', 15, 20309, 'Referência: MHNN3BZ/A\r\nCód: 218384\r\nCor: Prata\r\nMemória: 1TB\r\nProcessador: Chip M1 da Apple / CPU de 8 Núcleos (4 de desempenho e 4 de eficiência) / GPU de 8 núcleos / Neural Engine de 16 núcleos / 16 GB de RAM\r\n\r\nTela\r\nTela Liquid Retina XDR\r\nTela Multi-Touch de 12,9 polegadas (na diagonal) retroiluminada por miniLED, com tecnologia IPS\r\nSistema de retroiluminação 2D com 2596 zonas de controle local da intensidade do brilho\r\nResolução de 2732 x 2048 pixels a 264 ppp\r\nTecnologia ProMotion\r\nAmpla tonalidade de cores (P3)\r\nTrue Tone\r\nRevestimento resistente a impressões digitais e oleosidade\r\nTela totalmente laminada\r\nRevestimento antirreflexo\r\n\r\nGravação de vídeo\r\nGravação de vídeo 4K a 24 qps, 25qps, 30 qps ou 60 qps (grande-angular)\r\nGravação de vídeo HD de 1080p a 25 qps, 30 qps ou 60 qps\r\nGravação de vídeo HD de 720p a 30 qps\r\nZoom out óptico de 2x\r\nZoom de áudio\r\nFlash True Tone com mais brilho\r\nVídeo em câmera lenta de 1080p a 120 qps ou 240 qps\r\nVídeo em time-lapse com estabilização\r\nAlcance dinâmico estendido para vídeo até 30 qps\r\nEstabilização cinemática de vídeo (4K, 1080p e 720p)\r\n\r\nCâmera\r\nSistema de câmera Pro: grande-angular e ultra-angular\r\nGrande-angular: 12 MP, abertura ƒ/18\r\nUltra-angular: 10 MP, abertura ƒ/24 e campo de visão de 125°\r\nZoom out óptico de 2x; zoom digital até 5x\r\nLente de cinco elementos (grande-angular e ultra-angular)\r\nFlash True Tone com mais brilho\r\nPanorama (até 63MP)\r\nLente coberta com cristal safira\r\nSensor de retroiluminação\r\nFiltro IV híbrido\r\nFoco automático com Focus Pixels (grande-angular)\r\n\r\nFace ID\r\nReconhecimento facial pela câmera TrueDepth\r\nDesbloqueie o iPad\r\nMantenha dados pessoais seguros dentro dos apps\r\nFaça compras na iTunes Store, na App Store e na Loja de Livros do Apple Books\r\n\r\nSiri\r\nUse sua voz para enviar mensagens, definir lembretes e muito mais\r\nReceba sugestões proativas\r\nUse o viva-voz\r\nOuça e identifique músicas\r\n\r\nPortas\r\nLigar/Desligar\r\nAumentar/diminuir volume\r\nQuatro alto-falantes\r\nCinco microfones com qualidade de estúdio\r\nConector USB-C\r\nSmart Connector\r\nBandeja para nano SIM\r\nConector magnético\r\n\r\nCartão SIM\r\nNano SIM (compatível com Apple SIM)\r\neSIM\r\n\r\n\r\nAlimentação\r\nBateria interna recarregável de polímero de lítio com capacidade de 40,88 watts/hora\r\nAté 10 horas para navegar na internet via Wi-Fi ou assistir a vídeos\r\nRecarga via USB-C do computador ou carregador\r\n\r\nItens Inclusos\r\niPad Pro\r\nCabo carregador USB-C (1 metro)\r\nCarregador USB-C de 20W\r\n\r\nDimensões\r\nTamanho (A x L x P): 28,76 x 21,85 x 0,64 cm\r\nPeso: 471 gramas\r\n\r\nGarantia: 12 meses', 'https://vvtatix.vteximg.com.br/arquivos/ids/778610-1000-1000/image-35d2cf5c769f4d61a5f232b884a56b9e.jpg?v=637721463012200000'),
(4, 'Apple MacBook Pro', 'Notebook', 'Apple', 'Branca', 5, 26999, 'Os processadores M1 Pro e M1 Max da Apple representam um salto enorme no desempenho da CPU, GPU e aprendizagem automática\r\nA CPU até 10‐core oferece um desempenho até 3,7 vezes mais rápido para executar as tarefas num instante\r\nGPU até 32‐core com um desempenho até 13 vezes mais rápido para apps e jogos com gráficos complexos\r\nNeural Engine 16‐core para um desempenho de aprendizagem automática até 11 vezes mais rápido\r\nMaior autonomia da bateria, até 17 horas', 'https://m.media-amazon.com/images/I/41FGX7qvroL._AC_SX679_.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_categoria`
--
ALTER TABLE `tb_categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
