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
  `imagem` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cartaos_tipo_id_foreign` (`tipo_id`),
  CONSTRAINT `cartaos_tipo_id_foreign` FOREIGN KEY (`tipo_id`) REFERENCES `forma_pagamento_tipo_cartaos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.cartaos: ~5 rows (aproximadamente)
INSERT INTO `cartaos` (`id`, `tipo_id`, `nomeTitular`, `numeroCartao`, `dataValidade`, `codigoSeguranca`, `imagem`, `created_at`, `updated_at`) VALUES
	(1, 2, 'Dr. Larissa Mayara Gomes', 99178, '2011-10-10', '454196091', 'storage/app/public/imagem/cartao\\7b90c4a927340849775c6e2b41e3e54f.png', NULL, NULL),
	(2, 2, 'Sra. Clara Saito Jr.', 9426122, '1995-10-16', '57108925', 'storage/app/public/imagem/cartao\\6ce219b077ea761aae0a0b9142ac9c44.png', NULL, NULL),
	(3, 2, 'Dr. Luna Lutero Leal Sobrinho', 8971, '1974-05-02', '772164171', 'storage/app/public/imagem/cartao\\8eb00cea710fb2beaa146e32906e334a.png', NULL, NULL),
	(4, 1, 'Antonella Galindo Neto', 8, '1977-03-09', '660', 'storage/app/public/imagem/cartao\\2e6ed123159d635461fbdc49c69daa50.png', NULL, NULL),
	(5, 1, 'Srta. Louise Duarte Ramos Neto', 2701837, '1998-07-10', '51401356', 'storage/app/public/imagem/cartao\\04264c77e6af117139b2caad666a60ba.png', NULL, NULL),
	(7, 2, 'TESTE', 3232, '2014-12-01', '11', 'C:\\Users\\Softex\\AppData\\Local\\Temp\\phpB29E.tmp', '2023-11-27 22:37:29', '2023-11-27 22:37:49');

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
	(1, 'Débito', NULL, NULL),
	(2, 'Crédito', NULL, NULL);

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
	(1, 3, 1, 6515, NULL, NULL),
	(2, 2, 2, 7137, NULL, NULL),
	(3, 5, 2, 9465, NULL, NULL),
	(5, 4, 2, 3437, NULL, NULL);

-- Copiando estrutura para tabela db_doce_luz.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.migrations: ~0 rows (aproximadamente)
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
	(1, 4, 1, 1, 1, 'Nisi mollitia omnis eos impedit quam.', NULL, NULL),
	(2, 5, 1, 1, 2, 'Voluptatibus sit alias asperiores doloremque eius.', NULL, NULL),
	(3, 1, 1, 2, 1, 'Quia accusamus officiis quisquam mollitia.', NULL, NULL),
	(4, 1, 1, 2, 2, 'Tempore commodi nulla sint velit consequuntur sapiente.', NULL, NULL),
	(5, 2, 2, 4, 4, 'Amet et adipisci qui dolores voluptas in.', NULL, NULL);

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
  `valorCusto` decimal(30,0) NOT NULL,
  `valorVenda` decimal(30,0) NOT NULL,
  `descricao` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produtos_tipo_id_foreign` (`tipo_id`),
  CONSTRAINT `produtos_tipo_id_foreign` FOREIGN KEY (`tipo_id`) REFERENCES `tipo_produtos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_doce_luz.produtos: ~5 rows (aproximadamente)
INSERT INTO `produtos` (`id`, `nome`, `tipo_id`, `codigo`, `valorCusto`, `valorVenda`, `descricao`, `imagem`, `created_at`, `updated_at`) VALUES
	(1, 'voluptatem', 5, '6599', 482, 1524, 'Facilis veniam tempore sunt mollitia aut.', 'storage/app/public/imagem/produto\\b0f4178660a998f216e60ee09dffe18e.png', NULL, NULL),
	(2, 'culpa', 5, '59200012', 341, 205, 'Modi rerum asperiores sit eligendi.', 'storage/app/public/imagem/produto\\8b826a14c6e791438327ece9ecd23bd0.png', NULL, NULL),
	(3, 'inventore', 4, '8595689', 964, 1761, 'Vitae rerum veniam voluptatibus qui nihil perspiciatis.', 'storage/app/public/imagem/produto\\e28e02d89af994536a235124fff25dfe.png', NULL, NULL),
	(4, 'nisi', 5, '0', 1027, 545, 'Voluptatum animi delectus odio minima adipisci est.', 'storage/app/public/imagem/produto\\e2ae50ef18495bec361b84794080055f.png', NULL, NULL),
	(6, 'leliii', 4, '123', 12, 15, 'sadc', 'C:\\Users\\Softex\\AppData\\Local\\Temp\\php8CE4.tmp', '2023-11-27 22:42:02', '2023-11-27 22:42:02');

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
	(1, 'odit', NULL, NULL),
	(2, 'occaecati', NULL, NULL),
	(3, 'et', NULL, NULL),
	(4, 'soluta', NULL, NULL),
	(5, 'possimus', NULL, NULL);

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
	(1, 'non', NULL, NULL),
	(2, 'ut', NULL, NULL),
	(3, 'ex', NULL, NULL),
	(4, 'dolorem', NULL, NULL),
	(5, 'sequi', NULL, NULL);

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

-- Copiando dados para a tabela db_doce_luz.users: ~5 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Srta. Daniella Patrícia Duarte Filho', 'dvalente@assuncao.com.br', NULL, 'YEDqzsm,RH', NULL, NULL, NULL),
	(2, 'Ricardo Agostinho Paes', 'demian.lovato@amaral.com', NULL, 'DQzgG]swdqt6f', NULL, NULL, NULL),
	(3, 'Dr. Amélia Juliane Abreu Jr.', 'madeira.sophia@uol.com.br', NULL, ']["V)},8(<[{q""sAI(p', NULL, NULL, NULL),
	(4, 'Késia Mendonça', 'fabiano.jimenes@rocha.com', NULL, ')W=fxieI', NULL, NULL, NULL),
	(5, 'Sra. Flávia Stella Branco Sobrinho', 'amaral.leandro@uol.com.br', NULL, '4T;|\\,zPh}?Tx3Q', NULL, NULL, NULL),
	(6, 'Danieli', 'teste@teste.com', NULL, '$2y$12$EXM3xLY3XuTp3CTghHZUwOVn6.0FYtrM3RpRk80tqUvSk3hURIyte', 'fA9K4dCl5XYVtbx4vi9kVX78qleBeb6CBcmGeXh0wVis6QlP5iSbBgCIqul5', '2023-11-27 22:24:21', '2023-11-27 22:24:21');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
