DROP TABLE IF EXISTS `teste`;

CREATE TABLE teste (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `teste` (nome, email, telefone) VALUES ('Sandro', 'sandroalm@gmail.com', '(21) 99836-7978');
INSERT INTO `teste` (nome, email, telefone) VALUES ('Sandro Almeida', 'sandroalmeida@outlook.com', '(21) 99836-7978');