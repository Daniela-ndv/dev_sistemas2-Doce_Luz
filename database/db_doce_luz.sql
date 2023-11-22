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
  `nomeTitular` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numeroCartao` int NOT NULL,
  `dataValidade` date NOT NULL,
  `codigoSeguranca` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cartaos_tipo_id_foreign` (`tipo_id`),
  CONSTRAINT `cartaos_tipo_id_foreign` FOREIGN KEY (`tipo_id`) REFERENCES `forma_pagamento_tipo_cartaos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.cartaos: ~5 rows (aproximadamente)
INSERT INTO `cartaos` (`id`, `tipo_id`, `nomeTitular`, `numeroCartao`, `dataValidade`, `codigoSeguranca`, `created_at`, `updated_at`) VALUES
	(1, 3, 'Sr. Jerônimo Escobar Jr.', 154553, '1996-06-11', '31', NULL, NULL),
	(2, 1, 'Srta. Juliane Estrada', 37, '2004-08-17', '675', NULL, NULL),
	(3, 4, 'Bella Stella Pereira', 7469, '1982-09-16', '22', NULL, NULL),
	(4, 3, 'Michael Serna Flores Sobrinho', 499844, '2001-08-14', '26246', NULL, NULL),
	(5, 3, 'Edilson Valente Mendes Filho', 584467, '2015-12-22', '7773826', NULL, NULL);

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

-- Copiando dados para a tabela db_doce_luz.forma_pagamento_tipo_cartaos: ~10 rows (aproximadamente)
INSERT INTO `forma_pagamento_tipo_cartaos` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'dolores', NULL, NULL),
	(2, 'qui', NULL, NULL),
	(3, 'perspiciatis', NULL, NULL),
	(4, 'sunt', NULL, NULL),
	(5, 'sit', NULL, NULL),
	(6, 'nam', NULL, NULL),
	(7, 'optio', NULL, NULL),
	(8, 'officiis', NULL, NULL),
	(9, 'velit', NULL, NULL),
	(10, 'et', NULL, NULL);

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
	(1, 2, 1, 1549, NULL, NULL),
	(2, 1, 4, 1850, NULL, NULL),
	(3, 4, 4, 1456, NULL, NULL),
	(4, 1, 5, 3196, NULL, NULL),
	(5, 3, 5, 6039, NULL, NULL);

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
  `forma_pagamento_id` bigint unsigned NOT NULL,
  `cartao_id` bigint unsigned NOT NULL,
  `status_id` bigint unsigned NOT NULL,
  `observacao` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pedidos_usuario_id_foreign` (`usuario_id`),
  KEY `pedidos_forma_pagamento_id_foreign` (`forma_pagamento_id`),
  KEY `pedidos_cartao_id_foreign` (`cartao_id`),
  KEY `pedidos_status_id_foreign` (`status_id`),
  CONSTRAINT `pedidos_cartao_id_foreign` FOREIGN KEY (`cartao_id`) REFERENCES `cartaos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pedidos_forma_pagamento_id_foreign` FOREIGN KEY (`forma_pagamento_id`) REFERENCES `forma_pagamento_tipo_cartaos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pedidos_status_id_foreign` FOREIGN KEY (`status_id`) REFERENCES `statuses` (`id`) ON DELETE CASCADE,
  CONSTRAINT `pedidos_usuario_id_foreign` FOREIGN KEY (`usuario_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.pedidos: ~5 rows (aproximadamente)
INSERT INTO `pedidos` (`id`, `usuario_id`, `forma_pagamento_id`, `cartao_id`, `status_id`, `observacao`, `created_at`, `updated_at`) VALUES
	(1, 5, 5, 1, 5, 'Eos molestiae omnis laboriosam tempore.', NULL, NULL),
	(2, 1, 3, 1, 4, 'Excepturi sit earum tempora necessitatibus.', NULL, NULL),
	(3, 2, 3, 4, 5, 'Voluptas neque repellat velit magnam expedita nihil.', NULL, NULL),
	(4, 5, 4, 2, 5, 'Incidunt velit fugiat tenetur.', NULL, NULL),
	(5, 4, 3, 4, 1, 'Sequi ut iure non laborum adipisci quos.', NULL, NULL);

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
	(1, 'excepturi', 4, '25574180', 35.86, 384.66, 'Reiciendis provident quam dolorem quae.', 'public/storage/imagem/produto\\1835765eae5941a3b53119fa738c97d2.png', NULL, NULL),
	(2, 'a', 4, '5', 892.23, 1163.32, 'Quae id laudantium reiciendis enim vel.', 'public/storage/imagem/produto\\c4aeef4a0db0e277c5a4f7b06acd6aae.png', NULL, NULL),
	(3, 'laborum', 3, '954471538', 1187.15, 1689.60, 'Ad saepe nam expedita.', 'public/storage/imagem/produto\\55c0431fd4609fa2324c8a30a93a8d5a.png', NULL, NULL),
	(4, 'et', 3, '610371', 993.53, 219.87, 'Quas nihil consectetur necessitatibus non.', 'public/storage/imagem/produto\\be8d4d222ec2d370efccca188d86c964.png', NULL, NULL),
	(5, 'tenetur', 3, '995685400', 966.36, 1280.22, 'Consequatur rerum fuga animi mollitia.', 'public/storage/imagem/produto\\bb09b3d5ee6c59c6aa212d8d625bd4ef.png', NULL, NULL);

-- Copiando estrutura para tabela db_doce_luz.statuses
CREATE TABLE IF NOT EXISTS `statuses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.statuses: ~10 rows (aproximadamente)
INSERT INTO `statuses` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'deserunt', NULL, NULL),
	(2, 'voluptas', NULL, NULL),
	(3, 'culpa', NULL, NULL),
	(4, 'voluptatem', NULL, NULL),
	(5, 'natus', NULL, NULL),
	(6, 'rerum', NULL, NULL),
	(7, 'vitae', NULL, NULL),
	(8, 'iure', NULL, NULL),
	(9, 'consequuntur', NULL, NULL),
	(10, 'consectetur', NULL, NULL);

-- Copiando estrutura para tabela db_doce_luz.tipo_produtos
CREATE TABLE IF NOT EXISTS `tipo_produtos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.tipo_produtos: ~10 rows (aproximadamente)
INSERT INTO `tipo_produtos` (`id`, `nome`, `created_at`, `updated_at`) VALUES
	(1, 'veritatis', NULL, NULL),
	(2, 'eligendi', NULL, NULL),
	(3, 'magnam', NULL, NULL),
	(4, 'quas', NULL, NULL),
	(5, 'voluptatem', NULL, NULL),
	(6, 'optio', NULL, NULL),
	(7, 'at', NULL, NULL),
	(8, 'reprehenderit', NULL, NULL),
	(9, 'illum', NULL, NULL),
	(10, 'eum', NULL, NULL);

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

-- Copiando dados para a tabela db_doce_luz.users: ~10 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Dr. Roberta Faria Franco Jr.', 'tais.pena@meireles.org', NULL, '1/<g?hD', NULL, NULL, NULL),
	(2, 'Rebeca Rangel Sobrinho', 'tmarinho@zaragoca.com', NULL, '9y?Ws35,5', NULL, NULL, NULL),
	(3, 'Marília Sandoval Prado', 'aquintana@sanches.com.br', NULL, 'pJ6IY/\\7', NULL, NULL, NULL),
	(4, 'Gean Inácio Vieira', 'willian92@furtado.com.br', NULL, 'H9!`;&LFe,al6!T0ix', NULL, NULL, NULL),
	(5, 'Luciano Murilo Pedrosa', 'marinho.alice@hotmail.com', NULL, 'x>O"M}oQc*@U:~', NULL, NULL, NULL),
	(6, 'Dr. Richard Godói', 'antonio.sandoval@valentin.net.br', NULL, 'K@>3^Dt_k<)(]i', NULL, NULL, NULL),
	(7, 'Dr. Iasmin Lourenço Filho', 'tatiana41@hotmail.com', NULL, 'p"p.w4s%KfQIn|Hcf=}', NULL, NULL, NULL),
	(8, 'Sr. Tomás Emerson Rodrigues Jr.', 'vtorres@uol.com.br', NULL, '0{o7xY=?q<k4_3ZV', NULL, NULL, NULL),
	(9, 'Murilo Batista Godói', 'barros.caio@bonilha.com.br', NULL, 'GsP\'wIr:rNN$u', NULL, NULL, NULL),
	(10, 'Dr. Allison Chaves D\'ávila', 'rogerio90@uol.com.br', NULL, 'xyivMP0r/R#H~)?aK@E', NULL, NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
