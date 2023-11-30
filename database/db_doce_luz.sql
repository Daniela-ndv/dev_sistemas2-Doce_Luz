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
  `tipo_id` bigint unsigned NOT NULL,
  `usuario_id` bigint unsigned NOT NULL,
  `nomeTitular` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numeroCartao` int NOT NULL,
  `dataValidade` date NOT NULL,
  `codigoSeguranca` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagem` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cartaos_tipo_id_foreign` (`tipo_id`),
  KEY `cartaos_usuario_id_foreign` (`usuario_id`),
  CONSTRAINT `cartaos_tipo_id_foreign` FOREIGN KEY (`tipo_id`) REFERENCES `forma_pagamento_tipo_cartaos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `cartaos_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.cartaos: ~5 rows (aproximadamente)
INSERT INTO `cartaos` (`id`, `tipo_id`, `usuario_id`, `nomeTitular`, `numeroCartao`, `dataValidade`, `codigoSeguranca`, `imagem`, `created_at`, `updated_at`) VALUES
	(1, 1, 5, 'Mariah Talita Fonseca Neto', 2000, '1979-11-17', '39229034', 'imagem\\cartao\\16ae57aa6d61e9ae3dab9c1985e4b76a.png', NULL, NULL),
	(2, 1, 1, 'Mila Dayane Correia', 37046936, '1983-12-19', '7', 'imagem\\cartao\\a01d3c9893b416e9daf4bac8272dd601.png', NULL, NULL),
	(3, 1, 2, 'Sr. Caio Dias', 3031694, '1981-07-26', '506', 'imagem\\cartao\\fcdc69fbb229db6de2f0238172407f63.png', NULL, NULL),
	(4, 1, 5, 'Leo Mauro D\'ávila', 40002638, '2018-02-03', '9434', 'imagem\\cartao\\c4a7b06012f5cebc4a7f1a63efee4de0.png', NULL, NULL),
	(5, 2, 2, 'Sandra Melinda Madeira Jr.', 8, '2006-01-08', '7016566', 'imagem\\cartao\\6e1ccfb26763475475125c4999baa422.png', NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.forma_pagamento_tipo_cartaos: ~2 rows (aproximadamente)
INSERT INTO `forma_pagamento_tipo_cartaos` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'Crédito', NULL, NULL),
	(2, 'Débito', NULL, NULL);

-- Copiando estrutura para tabela db_doce_luz.item_vendas
CREATE TABLE IF NOT EXISTS `item_vendas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `pedido_id` bigint unsigned NOT NULL,
  `produto_id` bigint unsigned NOT NULL,
  `quantidade` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `item_vendas_pedido_id_foreign` (`pedido_id`),
  KEY `item_vendas_produto_id_foreign` (`produto_id`),
  CONSTRAINT `item_vendas_pedido_id_foreign` FOREIGN KEY (`pedido_id`) REFERENCES `pedidos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `item_vendas_produto_id_foreign` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.item_vendas: ~5 rows (aproximadamente)
INSERT INTO `item_vendas` (`id`, `pedido_id`, `produto_id`, `quantidade`, `created_at`, `updated_at`) VALUES
	(1, 2, 4, 5622, NULL, NULL),
	(2, 1, 4, 2984, NULL, NULL),
	(3, 4, 2, 9290, NULL, NULL),
	(4, 2, 4, 4394, NULL, NULL),
	(5, 1, 2, 4429, NULL, NULL);

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
  `usuario_id` bigint unsigned NOT NULL,
  `quantidade` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `produto_id` bigint unsigned NOT NULL,
  `forma_pagamento_id` bigint unsigned NOT NULL,
  `cartao_id` bigint unsigned NOT NULL,
  `status_id` bigint unsigned NOT NULL,
  `observacao` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pedidos_usuario_id_foreign` (`usuario_id`),
  KEY `pedidos_produto_id_foreign` (`produto_id`),
  KEY `pedidos_forma_pagamento_id_foreign` (`forma_pagamento_id`),
  KEY `pedidos_cartao_id_foreign` (`cartao_id`),
  KEY `pedidos_status_id_foreign` (`status_id`),
  CONSTRAINT `pedidos_cartao_id_foreign` FOREIGN KEY (`cartao_id`) REFERENCES `cartaos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pedidos_forma_pagamento_id_foreign` FOREIGN KEY (`forma_pagamento_id`) REFERENCES `forma_pagamento_tipo_cartaos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pedidos_produto_id_foreign` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pedidos_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pedidos_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.pedidos: ~5 rows (aproximadamente)
INSERT INTO `pedidos` (`id`, `usuario_id`, `quantidade`, `produto_id`, `forma_pagamento_id`, `cartao_id`, `status_id`, `observacao`, `created_at`, `updated_at`) VALUES
	(1, 4, '7', 5, 1, 4, 3, 'Voluptatum harum consequatur et voluptatum itaque.', NULL, NULL),
	(2, 3, '12', 5, 1, 2, 5, 'Voluptatem neque accusantium distinctio praesentium modi.', NULL, NULL),
	(3, 4, '9', 5, 1, 4, 3, 'Sint dolor eius quas sed est enim.', NULL, NULL),
	(4, 1, '7', 3, 1, 4, 5, 'Voluptatem iure laudantium ipsam.', NULL, NULL),
	(5, 5, '4', 2, 2, 4, 4, 'Molestias quam doloremque eos.', NULL, NULL);

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
  `tipo_id` bigint unsigned NOT NULL,
  `codigo` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valorCusto` decimal(6,2) NOT NULL,
  `valorVenda` decimal(6,2) NOT NULL,
  `descricao` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produtos_tipo_id_foreign` (`tipo_id`),
  CONSTRAINT `produtos_tipo_id_foreign` FOREIGN KEY (`tipo_id`) REFERENCES `tipo_produtos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.produtos: ~5 rows (aproximadamente)
INSERT INTO `produtos` (`id`, `nome`, `tipo_id`, `codigo`, `valorCusto`, `valorVenda`, `descricao`, `imagem`, `created_at`, `updated_at`) VALUES
	(1, 'blanditiis', 1, '13', 1711.44, 1298.37, 'Sint vero reiciendis pariatur deserunt.', 'imagem\\produto\\4125ba831949331edb35bed4a9c19121.png', NULL, NULL),
	(2, 'expedita', 3, '9', 1699.71, 182.32, 'Id exercitationem et consequuntur officia recusandae deleniti.', 'imagem\\produto\\a9d46e02349e5a150b0b02b3242053d7.png', NULL, NULL),
	(3, 'aut', 3, '949719204', 1368.84, 1192.45, 'Labore maiores necessitatibus aspernatur ratione.', 'imagem\\produto\\9155d42c851f4197a9b019f66efe3fb7.png', NULL, NULL),
	(4, 'omnis', 5, '9', 855.11, 1098.04, 'Sit sunt illo vero numquam corporis accusantium hic.', 'imagem\\produto\\d76dc94cead28b003f058fb1b6b4965e.png', NULL, NULL),
	(5, 'aliquam', 1, '343907119', 1778.10, 838.84, 'Facere odit dolores et ut est.', 'imagem\\produto\\9aadd49fca6f1c8fe988a24c6fcfaf46.png', NULL, NULL);

-- Copiando estrutura para tabela db_doce_luz.statuses
CREATE TABLE IF NOT EXISTS `statuses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.statuses: ~5 rows (aproximadamente)
INSERT INTO `statuses` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'Em processamento', NULL, NULL),
	(2, 'Entregue', NULL, NULL),
	(3, 'Em processamento', NULL, NULL),
	(4, 'Entregue', NULL, NULL),
	(5, 'Entregue', NULL, NULL);

-- Copiando estrutura para tabela db_doce_luz.tipo_produtos
CREATE TABLE IF NOT EXISTS `tipo_produtos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.tipo_produtos: ~5 rows (aproximadamente)
INSERT INTO `tipo_produtos` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'eius', NULL, NULL),
	(2, 'autem', NULL, NULL),
	(3, 'quam', NULL, NULL),
	(4, 'ut', NULL, NULL),
	(5, 'necessitatibus', NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.users: ~6 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Dr. Augusto Furtado Filho', 'maia.paloma@terra.com.br', NULL, 'qk53(l"XS\'&A', NULL, NULL, NULL),
	(2, 'Sr. Yuri Verdugo Lozano', 'samuel.rico@yahoo.com', NULL, 'd.YhP]_6dA', NULL, NULL, NULL),
	(3, 'Sr. Kevin Queirós Faro', 'sanches.jonas@hotmail.com', NULL, 'giLH+~~)W', NULL, NULL, NULL),
	(4, 'Samara Galhardo Sobrinho', 'elias.santiago@ramires.br', NULL, 'j@EN5ew{]Sz$Pb^yg', NULL, NULL, NULL),
	(5, 'Janaina Medina Sandoval', 'carmona.danielle@quintana.com.br', NULL, '*kP(XY)G(H8', NULL, NULL, NULL),
	(6, 'Daniela', 'lela@gmail.com', NULL, '$2y$12$ycUC/8TkMjsKJEgGbmqYIejowz5A7/r13w9BDVRGAylmmzvhfIE1a', NULL, '2023-11-30 06:41:30', '2023-11-30 06:41:30');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
