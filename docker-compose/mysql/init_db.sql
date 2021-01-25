DROP TABLE IF EXISTS `teste`;

CREATE TABLE teste (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `teste` (nome, email, estado, cidade, bairro, cep, cpf, telefone) VALUES ('Sandro', 'sandroalm@gmail.com', 'RJ', 'Rio de Janeiro', 'Quintino Bocaiuva', '21380-160', '102.367.567-61', '(21) 99836-7978');
INSERT INTO `teste` (nome, email, estado, cidade, bairro, cep, cpf, telefone) VALUES ('Sandro Almeida', 'sandroalmeida@outlook.com', 'RJ', 'Rio de Janeiro', 'Quintino Bocaiuva', '21380-160', '102.367.567-61', '(21) 99836-7978');