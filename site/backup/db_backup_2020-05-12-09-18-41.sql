DROP TABLE IF EXISTS niveis_acessos;

CREATE TABLE `niveis_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO niveis_acessos VALUES ("1","Administrador","2020-05-10 10:26:33",NULL);
INSERT INTO niveis_acessos VALUES ("2","Financeiro","2020-05-10 10:26:33",NULL);
INSERT INTO niveis_acessos VALUES ("3","Cliente","2020-05-10 10:27:05",NULL);
INSERT INTO niveis_acessos VALUES ("4","Funcionário","2020-05-11 10:55:09",NULL);


DROP TABLE IF EXISTS situacoes;

CREATE TABLE `situacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO situacoes VALUES ("1","Ativo","2020-05-10 10:24:54",NULL);
INSERT INTO situacoes VALUES ("2","Inativo","2020-05-10 10:24:54",NULL);
INSERT INTO situacoes VALUES ("3","Desativado","2020-05-11 10:50:15",NULL);


DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `situacao_id` int(11) NOT NULL DEFAULT 2,
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime DEFAULT NULL,
  `qnt_acessos` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `situacao_id` (`situacao_id`),
  KEY `niveis_acesso_id` (`niveis_acesso_id`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`situacao_id`) REFERENCES `situacoes` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`niveis_acesso_id`) REFERENCES `niveis_acessos` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO usuarios VALUES ("1","Cesar","cesar@celke.com.br","1","1","2020-05-10 10:34:18",NULL,"15");
INSERT INTO usuarios VALUES ("2","Kelly","kelly@celke.com.br","1","2","2020-05-10 10:34:18","2020-05-12 10:23:06","20");
INSERT INTO usuarios VALUES ("3","Jessica","jessica@celke.com.br","2","3","2020-05-10 10:35:36",NULL,"10");
INSERT INTO usuarios VALUES ("4","Ana 1","ana@celke.com.br","2","3","2020-05-10 18:45:39",NULL,"20");
INSERT INTO usuarios VALUES ("6","Carlos","email","2","3","2020-05-11 10:39:38",NULL,"45");
INSERT INTO usuarios VALUES ("7","Carlos2","carlos2@celke.com.br","2","3","2020-05-12 09:22:16","2020-05-12 10:23:22",NULL);
INSERT INTO usuarios VALUES ("8","Cesar1","cesar1@celke.com.br","2","3","2020-05-12 09:23:53",NULL,NULL);
INSERT INTO usuarios VALUES ("9","Cezar2","cezar2@celke.com.br","2","3","2020-05-12 09:25:14",NULL,NULL);


