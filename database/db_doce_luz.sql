-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_doce_luz
CREATE DATABASE IF NOT EXISTS `db_doce_luz` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_doce_luz`;

-- Copiando estrutura para tabela db_doce_luz.cartaos
CREATE TABLE IF NOT EXISTS `cartaos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tipo_id` int NOT NULL,
  `nomeTitular` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numeroCartao` int NOT NULL,
  `dataValidade` date NOT NULL,
  `codigoSeguranca` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.cartaos: ~10 rows (aproximadamente)
INSERT INTO `cartaos` (`id`, `tipo_id`, `nomeTitular`, `numeroCartao`, `dataValidade`, `codigoSeguranca`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Sra. Ruth de Souza Correia', 4038843, '2016-12-12', '34736', NULL, NULL),
	(2, 3, 'Arthur Allan Serra', 657570104, '1988-01-15', '8', NULL, NULL),
	(3, 3, 'Dr. Christian Matias Alves Filho', 384, '1995-11-08', '8105428', NULL, NULL),
	(4, 1, 'Arthur Valentin Garcia', 64, '1984-07-08', '4012', NULL, NULL),
	(5, 4, 'Daiana Carrara Neto', 599, '1989-12-29', '55', NULL, NULL),
	(6, 5, 'Giovane Valdez Jr.', 927884, '1996-10-07', '23', NULL, NULL),
	(7, 5, 'Juliana Rangel Sobrinho', 824887, '1995-09-04', '359', NULL, NULL),
	(8, 2, 'Silvana Renata Mascarenhas Jr.', 8, '2019-05-29', '61437', NULL, NULL),
	(9, 5, 'Antônio Ávila Padrão', 113, '2022-07-15', '2', NULL, NULL),
	(10, 4, 'Valentina Souza Maldonado Sobrinho', 9781, '2018-07-27', '95069860', NULL, NULL);

-- Copiando estrutura para tabela db_doce_luz.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.failed_jobs: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_doce_luz.forma_pagamento_tipo_cartaos
CREATE TABLE IF NOT EXISTS `forma_pagamento_tipo_cartaos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.forma_pagamento_tipo_cartaos: ~5 rows (aproximadamente)
INSERT INTO `forma_pagamento_tipo_cartaos` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'voluptatem', NULL, NULL),
	(2, 'voluptas', NULL, NULL),
	(3, 'porro', NULL, NULL),
	(4, 'voluptatibus', NULL, NULL),
	(5, 'qui', NULL, NULL),
	(6, 'molestiae', NULL, NULL),
	(7, 'laboriosam', NULL, NULL),
	(8, 'quas', NULL, NULL),
	(9, 'maiores', NULL, NULL),
	(10, 'consequatur', NULL, NULL);

-- Copiando estrutura para tabela db_doce_luz.item_vendas
CREATE TABLE IF NOT EXISTS `item_vendas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `pedido_id` int NOT NULL,
  `produto_id` int NOT NULL,
  `quantidade` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.item_vendas: ~5 rows (aproximadamente)
INSERT INTO `item_vendas` (`id`, `pedido_id`, `produto_id`, `quantidade`, `created_at`, `updated_at`) VALUES
	(1, 4, 5, 1462, NULL, NULL),
	(2, 1, 4, 9973, NULL, NULL),
	(3, 3, 3, 8498, NULL, NULL),
	(4, 1, 2, 7863, NULL, NULL),
	(5, 3, 3, 1956, NULL, NULL),
	(6, 1, 5, 8984, NULL, NULL),
	(7, 2, 3, 4355, NULL, NULL),
	(8, 3, 3, 3588, NULL, NULL),
	(9, 3, 5, 322, NULL, NULL),
	(10, 5, 1, 5930, NULL, NULL);

-- Copiando estrutura para tabela db_doce_luz.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.migrations: ~11 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_11_16_140406_create_tipo_produtos_table', 1),
	(6, '2023_11_16_140407_create_statuses_table', 1),
	(7, '2023_11_16_140408_create_forma_pagamento_tipo_cartaos_table', 1),
	(8, '2023_11_16_140409_create_cartaos_table', 1),
	(9, '2023_11_16_140410_create_produtos_table', 1),
	(10, '2023_11_16_140411_create_pedidos_table', 1),
	(11, '2023_11_16_140412_create_item_vendas_table', 1);

-- Copiando estrutura para tabela db_doce_luz.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.password_reset_tokens: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_doce_luz.pedidos
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `usuario_id` int NOT NULL,
  `forma_pagamento_id` int NOT NULL,
  `cartao_id` int NOT NULL,
  `status_id` int NOT NULL,
  `observacao` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.pedidos: ~5 rows (aproximadamente)
INSERT INTO `pedidos` (`id`, `usuario_id`, `forma_pagamento_id`, `cartao_id`, `status_id`, `observacao`, `created_at`, `updated_at`) VALUES
	(1, 5, 4, 1, 3, 'Quod et ducimus cum cupiditate inventore.', NULL, NULL),
	(2, 1, 3, 3, 3, 'In aut eum nulla.', NULL, NULL),
	(3, 3, 4, 1, 2, 'Aut autem velit labore sit doloribus.', NULL, NULL),
	(4, 4, 1, 4, 4, 'Repellendus deserunt nobis est fugiat tempora.', NULL, NULL),
	(5, 4, 1, 4, 5, 'Corrupti est maxime illo ipsum.', NULL, NULL),
	(6, 2, 3, 1, 5, 'Ut alias voluptate atque repudiandae iste alias.', NULL, NULL),
	(7, 2, 1, 4, 4, 'Sit consequatur atque iusto inventore.', NULL, NULL),
	(8, 2, 3, 1, 1, 'Nam impedit hic a ab debitis.', NULL, NULL),
	(9, 5, 3, 1, 4, 'Sit aut illum deleniti exercitationem.', NULL, NULL),
	(10, 4, 2, 2, 4, 'Ut culpa quod pariatur autem eveniet.', NULL, NULL);

-- Copiando estrutura para tabela db_doce_luz.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.personal_access_tokens: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela db_doce_luz.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_id` int NOT NULL,
  `codigo` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valorCusto` decimal(6,2) NOT NULL,
  `valorVenda` decimal(6,2) NOT NULL,
  `descricao` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.produtos: ~10 rows (aproximadamente)
INSERT INTO `produtos` (`id`, `nome`, `tipo_id`, `codigo`, `valorCusto`, `valorVenda`, `descricao`, `imagem`, `created_at`, `updated_at`) VALUES
	(1, 'eveniet', 5, '4', 96.19, 1262.67, 'Voluptatibus esse molestiae nobis.', 'public/storage/imagem/produto\\09eb24867082d4e558744873bffd276a.png', NULL, NULL),
	(2, 'architecto', 5, '70', 179.04, 851.74, 'Ut doloribus quasi repellendus omnis aut.', 'public/storage/imagem/produto\\09eb24867082d4e558744873bffd276a.png', NULL, NULL),
	(3, 'aliquam', 5, '741723337', 1612.52, 735.47, 'Quod aut et occaecati ipsa.', 'public/storage/imagem/produto\\09eb24867082d4e558744873bffd276a.png', NULL, NULL),
	(4, 'ut', 2, '4568', 326.00, 152.83, 'Pariatur suscipit at quia vitae sed.', 'public/storage/imagem/produto\\09eb24867082d4e558744873bffd276a.png', NULL, NULL),
	(5, 'excepturi', 2, '59', 721.89, 1793.80, 'Quos quo temporibus nemo ratione.', 'public/storage/imagem/produto\\09eb24867082d4e558744873bffd276a.png', NULL, NULL),
	(6, 'quia', 5, '5', 917.26, 368.72, 'Et animi voluptate animi.', 'public/storage/imagem/produto\\09eb24867082d4e558744873bffd276a.png', NULL, NULL),
	(7, 'et', 1, '56105', 1262.61, 1191.42, 'Ut atque repellendus doloribus dignissimos.', 'public/storage/imagem/produto\\a24439716bd43e51b05a560c18b2c03e.png', NULL, NULL),
	(8, 'rerum', 4, '87', 479.80, 1172.83, 'Necessitatibus laboriosam impedit magnam ea ipsa sunt.', 'public/storage/imagem/produto\\09eb24867082d4e558744873bffd276a.png', NULL, NULL),
	(9, 'unde', 2, '25227', 890.72, 277.71, 'Soluta perspiciatis qui temporibus possimus est.', 'public/storage/imagem/produto\\09eb24867082d4e558744873bffd276a.png', NULL, NULL),
	(10, 'dignissimos', 1, '392080411', 37.43, 1061.72, 'Fuga minus est quam et soluta.', 'public/storage/imagem/produto\\09eb24867082d4e558744873bffd276a.png', NULL, NULL);

-- Copiando estrutura para tabela db_doce_luz.statuses
CREATE TABLE IF NOT EXISTS `statuses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.statuses: ~5 rows (aproximadamente)
INSERT INTO `statuses` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'adipisci', NULL, NULL),
	(2, 'a', NULL, NULL),
	(3, 'impedit', NULL, NULL),
	(4, 'necessitatibus', NULL, NULL),
	(5, 'ipsam', NULL, NULL),
	(6, 'officiis', NULL, NULL),
	(7, 'velit', NULL, NULL),
	(8, 'enim', NULL, NULL),
	(9, 'occaecati', NULL, NULL),
	(10, 'dolor', NULL, NULL);

-- Copiando estrutura para tabela db_doce_luz.tipo_produtos
CREATE TABLE IF NOT EXISTS `tipo_produtos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.tipo_produtos: ~5 rows (aproximadamente)
INSERT INTO `tipo_produtos` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'omnis', NULL, NULL),
	(2, 'voluptas', NULL, NULL),
	(3, 'totam', NULL, NULL),
	(4, 'et', NULL, NULL),
	(5, 'eos', NULL, NULL),
	(6, 'aspernatur', NULL, NULL),
	(7, 'est', NULL, NULL),
	(8, 'sint', NULL, NULL),
	(9, 'odit', NULL, NULL),
	(10, 'veritatis', NULL, NULL);

-- Copiando estrutura para tabela db_doce_luz.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.users: ~5 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'James Barreto', 'qcruz@leon.com', NULL, '("Am-w?O\\LGp#K,@-w', NULL, NULL, NULL),
	(2, 'Simon Nelson Ferreira', 'isabelly49@faro.org', NULL, 'Yald&>zJ`lD4(OQph;A', NULL, NULL, NULL),
	(3, 'Anderson Serra Jr.', 'paulo.chaves@casanova.net.br', NULL, 'o\\ET`l]4v', NULL, NULL, NULL),
	(4, 'Sr. Saulo Medina Escobar Neto', 'salazar.agostinho@bittencourt.com', NULL, '\\[}JrlS{N', NULL, NULL, NULL),
	(5, 'Enzo Ferreira Neto', 'breno.camacho@ig.com.br', NULL, '7t),Vk', NULL, NULL, NULL),
	(6, 'Sr. Nero das Neves Dominato', 'pcarmona@grego.com.br', NULL, 'W;\'GuN"z(I^,6xhuLlQ', NULL, NULL, NULL),
	(7, 'Fernando Roque Jr.', 'jimenes.isis@ig.com.br', NULL, '5Q*gq4YVyR<"S"2^}v', NULL, NULL, NULL),
	(8, 'Dr. Estela Escobar Neto', 'gbarreto@yahoo.com', NULL, '1]SbV0FAU_0\'', NULL, NULL, NULL),
	(9, 'Dr. Sergio Matos Ferreira Filho', 'ntamoio@leal.net.br', NULL, '\\a~l\'m<y$BT4.(m_}m,', NULL, NULL, NULL),
	(10, 'Dr. Natália Dominato Filho', 'lovato.henrique@padilha.net', NULL, '\\_qM1?gLf@ajSG5Q}/', NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
