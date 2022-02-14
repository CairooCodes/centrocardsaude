/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.19-MariaDB : Database - centrocard
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `banners` */

DROP TABLE IF EXISTS `banners`;

CREATE TABLE `banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `img_1` varchar(200) DEFAULT NULL,
  `img_2` varchar(200) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `data_create` varchar(50) DEFAULT NULL,
  `add_button` varchar(100) DEFAULT NULL,
  `type_button` varchar(100) DEFAULT NULL,
  `name_button` varchar(100) DEFAULT NULL,
  `url_button` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `banners` */

insert  into `banners`(`id`,`name`,`description`,`img_1`,`img_2`,`type`,`url`,`data_create`,`add_button`,`type_button`,`name_button`,`url_button`) values 
(1,'SAÚDE','Plataforma de saúde e benefícios do grupo Centrocardio, uma empresa com mais de 15 anos de mercado e que é referência em atendimento médico de alta qualidade.','banner2.jpg',NULL,'1',NULL,NULL,'1','video','ASSISTA','#'),
(2,'CUIDADO','Muito mais que um cartão de desconto, é um programa de benefícios e proteção criado para facilitar a sua vida. ','banner1.jpg',NULL,'2',NULL,NULL,'1','padrao','SAIBA MAIS','#about');

/*Table structure for table `benefits` */

DROP TABLE IF EXISTS `benefits`;

CREATE TABLE `benefits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `benefit` varchar(500) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `text_1` varchar(1000) DEFAULT NULL,
  `service_1` varchar(2000) DEFAULT NULL,
  `service_2` varchar(2000) DEFAULT NULL,
  `service_3` varchar(2000) DEFAULT NULL,
  `service_4` varchar(2000) DEFAULT NULL,
  `service_5` varchar(2000) DEFAULT NULL,
  `img_1` varchar(200) DEFAULT NULL,
  `img_2` varchar(200) DEFAULT NULL,
  `img_3` varchar(200) DEFAULT NULL,
  `img_4` varchar(200) DEFAULT NULL,
  `img_5` varchar(200) DEFAULT NULL,
  `plan_1` varchar(100) DEFAULT NULL,
  `plan_2` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

/*Data for the table `benefits` */

insert  into `benefits`(`id`,`benefit`,`description`,`text_1`,`service_1`,`service_2`,`service_3`,`service_4`,`service_5`,`img_1`,`img_2`,`img_3`,`img_4`,`img_5`,`plan_1`,`plan_2`) values 
(1,'Médico Online 24 horas ','Consultas médicas com clínico 24 horas, através de telemedicina, com prescrição de medicamentos e requisição de exames sem nenhuma taxa adicional. ',NULL,NULL,NULL,NULL,NULL,NULL,'medico.svg','medico.jpg',NULL,NULL,NULL,'essencial','gold'),
(2,'Especialidades Médicas','Consultas através de telemedicina, com agendamento nas especialidades de Cardiologia, Endocrinologia, Nutrição, Psicologia e muito mais',NULL,NULL,NULL,NULL,NULL,NULL,'especialidades.svg','especialidades.jpg',NULL,NULL,NULL,NULL,NULL),
(3,'Conta saúde ','Rede nacional de descontos nas principais cidades do país através de cartão pré-pago digital.',NULL,NULL,NULL,NULL,NULL,NULL,'conta.svg','conta.png',NULL,NULL,NULL,NULL,NULL),
(4,'Rede Centrocard','Rede de desconto, podendo economizar até 60% em serviços médico do Centrocardio e diversas clínicas, laboratórios e hospitais em Teresina e região.',NULL,NULL,NULL,NULL,NULL,NULL,'rede.svg','rede.jpg',NULL,NULL,NULL,'essencial','gold'),
(5,'Central de agendamento com APP','Marcação de consultas e exames no Centrocardio através de aplicativo, call center ou central de atendimento presencial ',NULL,NULL,NULL,NULL,NULL,NULL,'central.svg','central.jpg',NULL,NULL,NULL,'essencial','gold'),
(6,'Assistência Farmacêutica ','Programa de Desconto Farmassist, com até 60% de descontos nas principais farmácias do Brasil.',NULL,NULL,NULL,NULL,NULL,NULL,'farmacia.svg','farmacia.jpg',NULL,NULL,NULL,'gold',NULL),
(7,'Assistência Nutricional','Acesso a profissionais de nutrição disponível via telefone para realização de um programa alimentar contínuo para você alcançar os seus objetivos.',NULL,NULL,NULL,NULL,NULL,NULL,'nutricional.svg','nutricional.jpg',NULL,NULL,NULL,'gold',NULL),
(8,'Assistência Personal Fitness','Serviço de orientação via telefone com profissional qualificado sobre atividades físicas, melhor condicionamento e qualidade de vida pra você.',NULL,NULL,NULL,NULL,NULL,NULL,'fitness.svg','fitness.jpg',NULL,NULL,NULL,'gold',NULL),
(9,'Assistência Residencial ','Serviços especializados de manutenção e reparos em geral com eletricista e encanador...',NULL,NULL,NULL,NULL,NULL,NULL,'residencial.svg','residencial.jpg',NULL,NULL,NULL,'gold',NULL),
(10,'Assistência Funeral Familiar ','Nos momentos difíceis, a central de apoio social, estará disponível...',NULL,NULL,NULL,NULL,NULL,NULL,'funeral.svg','funeral.jpg',NULL,NULL,NULL,'gold',NULL),
(11,'Seguro de acidentes pessoais','Seguro por morte acidental ou invalidez por acidente com cobertura de R$ 10.000,00 para os dependentes legais.',NULL,NULL,NULL,NULL,NULL,NULL,'acidentes.svg','acidentes.jpg',NULL,NULL,NULL,'gold',NULL),
(12,'Familiar até 5 pessoas ','Os descontos da Rede Centrocard são válidos para o titular e mais 4 dependentes legais (Cônjuge e filhos menores de 21 anos)',NULL,NULL,NULL,NULL,NULL,NULL,'familiar.svg','familiar.jpg',NULL,NULL,NULL,'essencial','gold');

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
) ENGINE=InnoDB AUTO_INCREMENT=289 DEFAULT CHARSET=latin1;

/*Data for the table `leads` */

insert  into `leads`(`id`,`nome`,`whats`,`opc`,`email`,`msg`,`data_envio`,`dv`,`tipo`,`status`,`user_vz`,`data_vz`,`user_ok`,`data_ok`) values 
(286,'Cairo Felipe dos Reis Machado','086999069329',NULL,'cairofelipedev@gmail.com','Teste','2022-02-02 11:25:02',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(287,'Cairo Felipe dos Reis Machado','086999069329',NULL,'cairofelipedev@gmail.com','Teste','2022-02-02 11:26:43',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(288,'Cairo Felipe dos Reis Machado','086999069329',NULL,'cairofelipedev@gmail.com','esdqdqdq','2022-02-02 11:26:51',NULL,'1',NULL,NULL,NULL,NULL,NULL);

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

/*Table structure for table `partners` */

DROP TABLE IF EXISTS `partners`;

CREATE TABLE `partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `title_service_1` varchar(100) DEFAULT NULL,
  `title_service_2` varchar(100) DEFAULT NULL,
  `title_service_3` varchar(100) DEFAULT NULL,
  `title_service_4` varchar(100) DEFAULT NULL,
  `title_service_5` varchar(100) DEFAULT NULL,
  `description_service_1` varchar(500) DEFAULT NULL,
  `description_service_2` varchar(500) DEFAULT NULL,
  `description_service_3` varchar(500) DEFAULT NULL,
  `description_service_4` varchar(500) DEFAULT NULL,
  `description_service_5` varchar(500) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `partners` */

insert  into `partners`(`id`,`name`,`title_service_1`,`title_service_2`,`title_service_3`,`title_service_4`,`title_service_5`,`description_service_1`,`description_service_2`,`description_service_3`,`description_service_4`,`description_service_5`,`img`) values 
(1,'Centrocardio',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'centrocardio.jpg'),
(2,'Lablife',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'lablife.png'),
(3,'Técio Rezende',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'tercio.jpeg'),
(4,'Otoclínica',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'otoclinica.jpg'),
(5,'Bionuclear',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'bionuclear.jpg'),
(6,'Hospital Hti',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'hti.jpg'),
(7,'Lívio Parente',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'centromedico.jpg');

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
(6,'Essencial','29,90','59,80','','Médico Online 24 horas ','Consultas médicas com clínico 24 horas, através de telemedicina, com prescrição de medicamentos e requisição de exames sem nenhuma taxa adicional. ','medico.png','Rede Centrocard','Rede de desconto, podendo economizar até 60% em serviços médico do Centrocardio e diversas clínicas, laboratórios e hospitais em Teresina e região.','rede.png','Central de agendamento com APP','\r\nMarcação de consultas e exames no Centrocardio através de aplicativo, call center ou central de atendimento presencial \r\n','central.png','Familiar até 5 pessoas ','\r\nOs descontos da Rede Centrocard são válidos para o titular e mais 4 dependentes legais (Cônjuge e filhos menores de 21 anos)\r\n','familiar.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(7,'Gold','34,90','69,80',NULL,'Médico Online 24 horas','Consultas médicas com clínico 24 horas, através de telemedicina, com prescrição de medicamentos e requisição de exames sem nenhuma taxa adicional. ','medico.png','Rede Centrocard','Rede de desconto, podendo economizar até 60% em serviços médico do Centrocardio e diversas clínicas, laboratórios e hospitais em Teresina e região.','rede.png','Central de agendamento com APP','Marcação de consultas e exames no Centrocardio através de aplicativo, call center ou central de atendimento presencial ','central.png','Familiar até 5 pessoas ','Os descontos da Rede Centrocard são válidos para o titular e mais 4 dependentes legais (Cônjuge e filhos menores de 21 anos)','familiar.png','Assistência Farmacêutica','Programa de Desconto Farmassist, com até 60% de descontos nas principais farmácias do Brasil.','farmacia.png','Assistência Nutricional','Acesso a profissionais de nutrição disponível via telefone para realização de um programa alimentar contínuo para você alcançar os seus objetivos.','nutricional.png','Assistência Personal Fitness','Serviços especializados de manutenção e reparos em geral com eletricista e encanador...','fitness.png','Assistência Residencial ','Serviços especializados de manutenção e reparos em geral com eletricista e encanador...','residencial.png','Assistência Funeral Familiar ','Nos momentos difíceis, a central de apoio social, estará disponível...','funeral.png','Seguro de acidentes pessoais','Seguro por morte acidental ou invalidez por acidente com cobertura de R$ 10.000,00 para os dependentes legais.','acidentes.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(8,'Platinum','49,90','99,80',NULL,'Médico Online 24 horas','Consultas médicas com clínico e pediatra 24 horas, através da telemedicina, com prescrição de medicamentos e requisição de exames sem nenhuma taxa adicional.','medico.png','Rede Centrocard','Rede de desconto, podendo economizar até 60% em serviços médico do Centrocardio e diversas clínicas, laboratórios e hospitais em Teresina e região.','rede.png','Central de agendamento com APP','Rede nacional de descontos nas principais cidades do país através de cartão pré-pago digital.','central.png','Familiar até 5 pessoas ','Os descontos da Rede Centrocard são válidos para o titular e mais 4 dependentes legais (Cônjuge e filhos menores de 21 anos)','familiar.png','Assistência Farmacêutica','Programa de Desconto Farmassist, com até 60% de descontos nas principais farmácias do Brasil.','farmacia.png','Assistência Nutricional','Acesso a profissionais de nutrição disponível via telefone para realização de um programa alimentar contínuo para você alcançar os seus objetivos.','nutricional.png','Assistência Personal Fitness','Serviço de orientação via telefone com profissional qualificado sobre atividades físicas, melhor condicionamento e qualidade de vida pra você.','fitness.png','Assistência Residencial ','Serviços especializados de manutenção e reparos em geral com eletricista e encanador...','residencial.png','Assistência Funeral Familiar ','Nos momentos difíceis, a central de apoio social, estará disponível...','funeral.png','Seguro de acidentes pessoais','Seguro por morte acidental ou invalidez por acidente com cobertura de R$ 10.000,00 para os dependentes legais.','acidentes.png','Especialidades Médicas','Consultas através de telemedicina, com agendamento nas especialidades de Cardiologia, Endocrinologia, Nutrição, Psicologia, Psiquiatria, Pediatria Geral, Homeopatia Pediátrica, Infectologia Pediátrica','especialidades.png','Conta Saúde','Rede nacional de descontos nas principais cidades do país através de cartão pré-pago digital.','conta.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

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
