/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.20-MariaDB : Database - centrocard
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`centrocard` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `centrocard`;

/*Table structure for table `leads` */

DROP TABLE IF EXISTS `leads`;

CREATE TABLE `leads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `whats` varchar(50) DEFAULT NULL,
  `opc` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `msg` varchar(1000) DEFAULT NULL,
  `data_envio` timestamp NULL DEFAULT current_timestamp(),
  `dv` varchar(100) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `user_vz` varchar(100) DEFAULT NULL,
  `data_vz` varchar(100) DEFAULT NULL,
  `user_ok` varchar(100) DEFAULT NULL,
  `data_ok` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=286 DEFAULT CHARSET=latin1;

/*Data for the table `leads` */

/*Table structure for table `logs` */

DROP TABLE IF EXISTS `logs`;

CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `data_log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `logs` */

insert  into `logs`(`id`,`name`,`data_log`,`type`) values 
(1,'Cairo Felipe','2022-01-17 21:02:29','login'),
(2,'Alexandre Barros','2022-01-18 22:15:59','login'),
(3,'Cairo Felipe','2022-01-18 22:17:28','login'),
(4,'Cairo Felipe','2022-01-19 10:59:03','login'),
(5,'Cairo Felipe','2022-01-19 11:39:21','login'),
(6,'Cairo Felipe','2022-01-24 17:21:24','login'),
(7,'Cairo Felipe','2022-01-25 11:02:21','login'),
(8,'Cairo Felipe','2022-01-26 11:10:22','login'),
(9,'Cairo Felipe','2022-01-29 10:18:22','login'),
(10,'Cairo Felipe','2022-01-29 10:39:30','login');

/*Table structure for table `plans` */

DROP TABLE IF EXISTS `plans`;

CREATE TABLE `plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `price2` varchar(50) DEFAULT NULL,
  `description` varchar(1500) DEFAULT NULL,
  `t1` varchar(200) DEFAULT NULL,
  `b1` varchar(500) DEFAULT NULL,
  `icon1` varchar(200) DEFAULT NULL,
  `t2` varchar(200) DEFAULT NULL,
  `b2` varchar(500) DEFAULT NULL,
  `icon2` varchar(200) DEFAULT NULL,
  `t3` varchar(200) DEFAULT NULL,
  `b3` varchar(500) DEFAULT NULL,
  `icon3` varchar(200) DEFAULT NULL,
  `t4` varchar(200) DEFAULT NULL,
  `b4` varchar(500) DEFAULT NULL,
  `icon4` varchar(200) DEFAULT NULL,
  `t5` varchar(200) DEFAULT NULL,
  `b5` varchar(500) DEFAULT NULL,
  `icon5` varchar(200) DEFAULT NULL,
  `t6` varchar(200) DEFAULT NULL,
  `b6` varchar(500) DEFAULT NULL,
  `icon6` varchar(200) DEFAULT NULL,
  `t7` varchar(200) DEFAULT NULL,
  `b7` varchar(500) DEFAULT NULL,
  `icon7` varchar(200) DEFAULT NULL,
  `t8` varchar(200) DEFAULT NULL,
  `b8` varchar(500) DEFAULT NULL,
  `icon8` varchar(200) DEFAULT NULL,
  `t9` varchar(200) DEFAULT NULL,
  `b9` varchar(500) DEFAULT NULL,
  `icon9` varchar(200) DEFAULT NULL,
  `t10` varchar(200) DEFAULT NULL,
  `b10` varchar(500) DEFAULT NULL,
  `icon10` varchar(200) DEFAULT NULL,
  `t11` varchar(200) DEFAULT NULL,
  `b11` varchar(200) DEFAULT NULL,
  `icon11` varchar(200) DEFAULT NULL,
  `t12` varchar(200) DEFAULT NULL,
  `b12` varchar(500) DEFAULT NULL,
  `icon12` varchar(200) DEFAULT NULL,
  `t13` varchar(200) DEFAULT NULL,
  `b13` varchar(500) DEFAULT NULL,
  `icon13` varchar(200) DEFAULT NULL,
  `t14` varchar(200) DEFAULT NULL,
  `b14` varchar(1000) DEFAULT NULL,
  `icon14` varchar(200) DEFAULT NULL,
  `t15` varchar(200) DEFAULT NULL,
  `b15` varchar(500) DEFAULT NULL,
  `icon15` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `plans` */

insert  into `plans`(`id`,`name`,`price`,`price2`,`description`,`t1`,`b1`,`icon1`,`t2`,`b2`,`icon2`,`t3`,`b3`,`icon3`,`t4`,`b4`,`icon4`,`t5`,`b5`,`icon5`,`t6`,`b6`,`icon6`,`t7`,`b7`,`icon7`,`t8`,`b8`,`icon8`,`t9`,`b9`,`icon9`,`t10`,`b10`,`icon10`,`t11`,`b11`,`icon11`,`t12`,`b12`,`icon12`,`t13`,`b13`,`icon13`,`t14`,`b14`,`icon14`,`t15`,`b15`,`icon15`) values 
(6,'Essencial','29,90','59,80','','Médico Online 24 horas','Consultas médicas com clínico 24 horas, através de telemedicina, com prescrição de medicamentos e requisição de exames sem nenhuma taxa adicional. ','Planoessenciaicon1.png','Rede Centrocard','Consultas através de telemedicina, com agendamento nas especialidades de Cardiologia, Endocrinologia, Nutrição, Psicologia, Psiquiatria, Pediatria Geral, Homeopatia Pediátrica, Infectologia Pediátrica e Nutrologia Pediátrica.','Planoessenciaicon2.png','Central de agendamento com APP','\r\nMarcação de consultas e exames no Centrocardio através de aplicativo, call center ou central de atendimento presencial \r\n','Planoessenciaicon3.png','Familiar até 5 pessoas ','\r\nOs descontos da Rede Centrocard são válidos para o titular e mais 4 dependentes legais (Cônjuge e filhos menores de 21 anos)\r\n','icon4.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(7,'Gold','34,90','69,80',NULL,'Médico Online 24 horas ','Consultas médicas com clínico 24 horas, através de telemedicina, com prescrição de medicamentos e requisição de exames sem nenhuma taxa adicional. ','Planoessenciaicon1.png','Rede Centrocard','Consultas através de telemedicina, com agendamento nas especialidades de Cardiologia, Endocrinologia, Nutrição, Psicologia, Psiquiatria, Pediatria Geral, Homeopatia Pediátrica, Infectologia Pediátrica e Nutrologia Pediátrica.','Planoessenciaicon2.png','Central de agendamento com APP','Marcação de consultas e exames no Centrocardio através de aplicativo, call center ou central de atendimento presencial ','Planoessenciaicon3.png','Familiar até 5 pessoas ','Os descontos da Rede Centrocard são válidos para o titular e mais 4 dependentes legais (Cônjuge e filhos menores de 21 anos)','icon4.png','Assistência Nutricional','Acesso a profissionais de nutrição disponível via telefone para realização de um programa alimentar contínuo para você alcançar os seus objetivos.',NULL,'Assistência Personal Fitness','Serviço de orientação via telefone com profissional qualificado sobre atividades físicas, melhor condicionamento e qualidade de vida pra você.',NULL,'Assistência Residencial ','Serviços especializados de manutenção e reparos em geral com eletricista e encanador, sem dores de cabeça ou preocupações. Indicação de profissional e custo da mão de obra coberto conforme regras da apólice. ',NULL,'Assistência Funeral Familiar ','Nos momentos difíceis, a central de apoio social, estará disponível para acionamento e apoio na resolução dos serviços necessário, garantindo cobertura de até R$ 3.000,00 conforme regras da apólice.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(8,'Platinum','49,90','99,80',NULL,'Médico Online 24 horas (clínico e pediatra) ','Consultas médicas com clínico e pediatra 24 horas, através da telemedicina, com prescrição de medicamentos e requisição de exames sem nenhuma taxa adicional.','Planoessenciaicon1.png','Especialidades Médicas','Consultas através de telemedicina, com agendamento nas especialidades de Cardiologia, Endocrinologia, Nutrição, Psicologia, Psiquiatria, Pediatria Geral, Homeopatia Pediátrica, Infectologia Pediátrica e Nutrologia Pediátrica.',NULL,'Conta saúde ','Rede nacional de descontos nas principais cidades do país através de cartão pré-pago digital.',NULL,'Rede Centrocard','Rede de desconto, podendo economizar até 60% em serviços médico do Centrocardio e diversas clínicas, laboratórios e hospitais em Teresina e região.',NULL,'Central de agendamento com APP','Marcação de consultas e exames no Centrocardio através de aplicativo, call center ou central de atendimento presencial ',NULL,'Familiar até 5 pessoas ','Os descontos da Rede Centrocard são válidos para o titular e mais 4 dependentes legais (Cônjuge e filhos menores de 21 anos)',NULL,'Assistência Farmacêutica ','Programa de Desconto Farmassist, com até 60% de descontos nas principais farmácias do Brasil.',NULL,'Assistência Nutricional','Acesso a profissionais de nutrição disponível via telefone para realização de um programa alimentar contínuo para você alcançar os seus objetivos.',NULL,'Assistência Personal Fitness','Serviço de orientação via telefone com profissional qualificado sobre atividades físicas, melhor condicionamento e qualidade de vida pra você.',NULL,'Assistência Residencial ','Serviços especializados de manutenção e reparos em geral com eletricista e encanador, sem dores de cabeça ou preocupações. Indicação de profissional e custo da mão de obra coberto conforme regras da apólice. ',NULL,'Assistência Funeral Familiar ','Nos momentos difíceis, a central de apoio social, estará disponível para acionamento e apoio na resolução dos serviços necessário, garantindo cobertura de até R$ 3.000,00 conforme regras da apólice.',NULL,'Seguro de acidentes pessoais','Seguro por morte acidental ou invalidez por acidente com cobertura de R$ 10.000,00 para os dependentes legais.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) DEFAULT NULL,
  `subtitle` varchar(2000) DEFAULT NULL,
  `category` varchar(200) DEFAULT NULL,
  `category_2` varchar(200) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL,
  `link_2` varchar(500) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `text_1` varchar(2000) DEFAULT NULL,
  `text_2` varchar(2000) DEFAULT NULL,
  `text_3` varchar(1000) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `img2` varchar(200) DEFAULT NULL,
  `user_create` varchar(200) DEFAULT NULL,
  `data_create` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `posts` */

insert  into `posts`(`id`,`title`,`subtitle`,`category`,`category_2`,`link`,`link_2`,`status`,`text_1`,`text_2`,`text_3`,`img`,`img2`,`user_create`,`data_create`) values 
(2,'tes','Dia 04 de dezembro (sábado), às 18h30.','natal','natal','https://www.facebook.com/cocaisshopping/photos/a.2461506510741255/3739777946247432/','https://www.instagram.com/p/CW8PCq2L8mQ/','1','Venha se encantar com o clima natalino e com a animação da Jingle Bell Banda e vários personagens encantados!???\r\n\r\nTe esperamos aqui em nosso shopping!','','','store-.jpg',NULL,'Cairo Felipe>','2021-12-03 00:36:03'),
(4,'qwqwqwq','@deliciasdonordestetm','blog','','https://www.facebook.com/cocaisshopping/photos/a.2461506510741255/3740049596220267/','https://www.instagram.com/p/CW85xmrPOnU/','1','Shopp Artesanal, com aquela qualidade.\r\nVenha nos visitar, prove e se apaixone???','','','498980.jpg',NULL,'Cairo Felipe>','2021-12-03 00:50:36'),
(5,'dsadasds','Os melhores produtos naturais!','produtos','','https://www.facebook.com/cocaisshopping/photos/a.2461506510741255/3739155466309680/','https://www.instagram.com/p/CW6JBvevyzl/','1','Perca medidas com #MagreCháCaps ?\r\n\r\nMastigando de 2 a 4 gelcaps dia - com delicioso sabor coco - você estimula seu metabolismo e acelera a queima de calorias. ?\r\n\r\nA noite, ingerindo de 2 a 3 cápsulas você recebe aquele toque de calmaria para controlar os distúrbios do sono e relaxar. ?\r\n\r\nPeça o seu agora mesmo, frete grátis para todo o Brasil! ✈️\r\n','?Cocais Shopping, loja 41, Avenida Piauí-Timon.','','315808.jpg',NULL,'Cairo Felipe>','2021-12-03 00:56:03'),
(6,'dasdasdas','Final de ano aqui no Cocais é um show de prêmios! ','promoções','','https://www.facebook.com/cocaisshopping/photos/a.2461506510741255/3740694232822470/','https://www.instagram.com/p/CW-rAkErHar/','1','Venha fazer suas compras em nossas lojas e concorrer a 1 KWID 0km é mais R$ 4.000 reais em prêmios!\r\n\r\nNatal Cocais: O amor nasce aqui! ✨?','','','117244.jpg',NULL,'Cairo Felipe>','2021-12-03 02:27:19'),
(8,'qqqqqq','De 7 a 30 de Janeiro aqui no Cocais Shopping.','produtos','','https://www.facebook.com/cocaisshopping/photos/a.2461506510741255/3769194033305823/','https://www.instagram.com/p/CYWQhAkrf4v/','1','As férias chegaram no Cocais Shopping com uma programação recheada de diversão para criançada curtir e aproveitar a melhor época do ano! Um momento para aproveitar com a família e criar novas memórias aqui em nosso shopping.\r\nA programação desse ano foi pensada especialmente para trazer muuuita diversão e aprendizado. Toda sexta e sábado, temos uma variedade de oficinas ofertada gratuitamente para o público infantil: Slime, Confecção de Bijuterias, Brigadeiro e muito mais! \r\nA programação é aberta ao público, gratuita e possui um número limitado de inscrições para cada oficina, para que possamos trazer alegria e ao mesmo tempo segurança nesse período de pandemia. Para garantir a sua vaga é super fácil. Basta acessar o link https://www.cocaisshopping.com.br/oficinas.php e preencher o formulário de inscrição. É válido lembrar que é imprescindível que todas as crianças que estiverem inscritas nas oficinas estejam acompanhadas dos pais ou responsável.\r\nAlém das oficinas, temos durante todo o mês de janeiro no nosso shopping o parquinho temático Mundo Animado e o AVS Center Park com os melhores brinquedos na área externa do shopping. Traga seu filho e venha se divertir!','Confira a nossa programação completa das Férias Cocais\r\n07 de Janeiro | Sexta – Feira | 17h30 \r\nOficina de Slime\r\n\r\n08 de Janeiro | Sábado | 17h30 \r\nOficina de Brigadeiro + Pintura de Rosto\r\n\r\n14 de Janeiro | Sexta – Feira | 17h30 \r\nOficina de Bijuterias\r\n\r\n15 de Janeiro | Sábado | 17h30 \r\nOficina de Boneco de Bexiga + Pintura de Rosto\r\n\r\n21 de Janeiro | Sexta – Feira | 17h30 \r\nOficina de Slime\r\n\r\n22 de Janeiro | Sábado | 17h30 \r\nOficina de Brigadeiro + Pintura de Rosto\r\n\r\n28 de Janeiro | Sexta – Feira | 17h30 \r\nOficina de Brigadeiro + Pintura de Rosto\r\n\r\n29 de Janeiro | Sábado | 17h30 \r\nOficina de Slime + Pintura de Rosto\r\n\r\n\r\nFérias Cocais, um mundo cheio de diversão!','','883320.jpg',NULL,'Allan>','2022-01-07 12:02:06');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `whats` varchar(50) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `user_create` varchar(50) DEFAULT NULL,
  `data_create` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`login`,`email`,`pass`,`type`,`whats`,`img`,`user_create`,`data_create`) values 
(1,'Cairo Felipe','cairofelipedev','cairofelipdev@gmail.com','12345',1,'86999633288',NULL,'cairofelipedev','2022-01-17 21:04:13');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
