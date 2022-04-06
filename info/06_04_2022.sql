/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 10.4.22-MariaDB : Database - centrocard
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
  `url` varchar(500) DEFAULT NULL,
  `data_create` timestamp NULL DEFAULT current_timestamp(),
  `type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `banners` */

insert  into `banners`(`id`,`name`,`description`,`img_1`,`url`,`data_create`,`type`) values 
(1,'SAÚDE','Somos uma plataforma inteligente que vai ajudar você cuidar de sua saúde com custo reduzido e muitos benefícios','banner2.jpg',NULL,NULL,'1'),
(2,'PROTEÇÃO','Muito mais que um cartão de desconto, somos um programa de benefícios e proteção criado para facilitar a sua vida. ','banner1.jpg',NULL,NULL,NULL),
(3,'BENEFÍCIOS','Médico 24 horas online, descontos em consultas e exames, assistência farmácia, assistência nutricional, assistência personal fitness, seguro de acidentes pessoais e muito mais.','banner-3.png',NULL,NULL,NULL),
(4,'SEGURANÇA','Garantia do grupo Centrocardio, empresa com mais de 15 anos de mercado e referência em atendimento médico de alta qualidade e da Previsul Seguros, empresa do grupo Caixa, com mais de 110 anos de atividade e credibilidade. ','banner-4.jpg',NULL,NULL,NULL),
(5,'INOVAÇÃO','Juntamos as melhores empresas do mercado e construímos um projeto inovador, aliando saúde, tecnologia e atendimento humanizado.','banner-5.jpg',NULL,NULL,NULL);

/*Table structure for table `benefits` */

DROP TABLE IF EXISTS `benefits`;

CREATE TABLE `benefits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `benefit` varchar(500) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `title_s1` varchar(200) DEFAULT NULL,
  `service_1` varchar(2000) DEFAULT NULL,
  `title_s2` varchar(200) DEFAULT NULL,
  `service_2` varchar(2000) DEFAULT NULL,
  `title_s3` varchar(200) DEFAULT NULL,
  `service_3` varchar(2000) DEFAULT NULL,
  `img_1` varchar(200) DEFAULT NULL,
  `img_2` varchar(200) DEFAULT NULL,
  `img_3` varchar(200) DEFAULT NULL,
  `plan_1` varchar(100) DEFAULT NULL,
  `plan_2` varchar(100) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Data for the table `benefits` */

insert  into `benefits`(`id`,`benefit`,`description`,`title_s1`,`service_1`,`title_s2`,`service_2`,`title_s3`,`service_3`,`img_1`,`img_2`,`img_3`,`plan_1`,`plan_2`,`slug`) values 
(1,'Atendimento Online 24 horas','Consultas médicas com clínico 24 horas, através de telemedicina, com prescrição de medicamentos e requisição de exames sem nenhuma taxa adicional.',NULL,'Febre, gripe, resfriado, tosse, dor de garganta, alergias e alterações na pele, Dores nas costas, dores musculares e pancadas, Sintomas gastrointestinais, como dor de barriga, diarreia, náuseas, Dor de cabeça, enxaqueca, Irritação nos olhos, conjuntivite ',NULL,'Orientações médicas, prescrição de receitas e solicitação de exames',NULL,NULL,'medico-icon.png','medico.png','banner-24h.jpg','essencial','gold','telemedicina'),
(2,'Especialidades Médicas','Consultas através de telemedicina, com agendamento nas especialidades de Cardiologia, Endocrinologia, Nutrição, Psicologia e muito mais',NULL,'Avaliação de distúrbios do comportamento alimentar. Doenças relacionadas aos olhos. Tratamento de doenças relacionadas aos ossos e músculos. Tratamento de doenças do ouvido, nariz, boca e garganta.',NULL,NULL,NULL,NULL,'especialidades-icon.png','especialidades.png','banner-especialidades.jpg',NULL,NULL,'especialidades-medicas'),
(3,'Conta saúde ','Rede nacional de descontos nas principais cidades do país através de cartão pré-pago digital.',NULL,'Sempre que precisar dos melhores descontos nos melhores produtos através de um cartão pré-pago digital.',NULL,NULL,NULL,NULL,'conta-icon.png','conta.png','banner-conta.jpg',NULL,NULL,'conta-saude'),
(4,'Rede Centrocard','Economizar até 60% em serviços médicos do Centrocardio e diversas clínicas, laboratórios e hospitais em Teresina e região.',NULL,'Economizar até 60% em serviços médicos do Centrocardio e diversas clínicas, laboratórios e hospitais em Teresina e região.',NULL,NULL,NULL,NULL,'rede-icon.png','rede.png','banner-rede.jpg','essencial','gold','rede-centrocard'),
(5,'Central de agendamento com APP','Marcação de consultas e exames no Centrocardio através de aplicativo, call center ou central de atendimento presencial ',NULL,'Utilize seu celular para telemedicina e marcação de consultas e exames',NULL,NULL,NULL,NULL,'central-icon.png','central.png','banner-central.jpg','essencial','gold','central-agendamento'),
(6,'Assistência Farmacêutica ','Programa de Desconto Farmassist, com até 60% de descontos nas principais farmácias do Brasil.',NULL,'Promoção, proteção, recuperação da saúde e orientações a medicamentos de fácil acesso e ao seu uso racional. ',NULL,NULL,NULL,NULL,'farmacia-icon.png','farmacia.png','banner-farmacia.jpg','gold',NULL,'assistencia-farmaceutica'),
(7,'Assistência Nutricional','Acesso a profissionais de nutrição disponível via telefone para realização de um programa alimentar contínuo para você alcançar os seus objetivos.',NULL,'Identificação e avaliação de hábitos cotidianos inadequados que tenham relação com a alimentação e que possam estar interferindo na sua qualidade de vida como um todo.','PERFIL ALIMENTAR PERSONALIZADO','Avaliação dos seus hábitos alimentares de forma qualitativa por meio de uma breve descrição de seu consumo alimentar cotidiano com objetivo de fornecer orientações alimentares práticas e direcionadas aos principais pontos identificados.','MODELO DE CARDÁPIO','Sugestão de um cardápio/esquema alimentar que orienta você em relação às combinações mais adequadas dos alimentos nas principais refeições (almoço e jantar) de forma qualitativa, além de dicas de alimentos criativas e atraentes','nutricional-icon.png','nutricional.png','banner-nutricional.jpg','gold',NULL,'assistencia-nutricional'),
(8,'Assistência Personal Fitness','Serviço de orientação via telefone com profissional qualificado sobre atividades físicas, melhor condicionamento e qualidade de vida pra você.',NULL,'orientar e tirar dúvidas sobre programas de atividades físicas tanto para iniciantes como para praticantes, assim como incentivar a prática consciente de exercícios e adequá-los a rotina do beneficiário.',NULL,NULL,NULL,NULL,'fitness-icon.png','fitness.png','banner-fit.jpeg','gold',NULL,'assistencia-personal-fitness'),
(9,'Assistência Residencial ','Serviços especializados de manutenção e reparos em geral com eletricista e encanador...',NULL,'serviços emergenciais gratuitos 24h na sua casa e dispõe de mão de obra qualificada para resolver os imprevistos do dia a dia. ',NULL,NULL,NULL,NULL,'residencial-icon.png','residencial.png','banner-residencial.jpg','gold',NULL,'assistencia-residencial'),
(10,'Assistência Funeral Familiar ','Nos momentos difíceis, a central de apoio social, estará disponível...',NULL,'Precisando de apoio social diante alguma perca familiar.',NULL,NULL,NULL,NULL,'funeral-icon.png','funeral.png','banner-funeral.jpg','gold',NULL,'assistencia-funeral-familiar'),
(11,'Seguro de acidentes pessoais','Seguro por morte acidental ou invalidez por acidente com cobertura de R$ 10.000,00 para os dependentes legais.',NULL,'Além da indenização que você recebe, nossos seguros também ajudam você no dia a dia com vários serviços emergenciais disponíveis 24h, além de possibilitar descontos em lojas no Brasil todo e também em medicamentos.',NULL,NULL,NULL,NULL,'acidentes-icon.png','acidentes.png','banner-seguro.jpg','gold',NULL,'seguro-acidentes'),
(12,'Familiar até 5 pessoas ','Os descontos da Rede Centrocard são válidos para o titular e mais 4 dependentes legais (Cônjuge e filhos menores de 21 anos)','','Quando alguém que depende de você precisar fazer uma consulta, possui descontos na RedeCentrocard.','','','','','familiar-icon.png','familiar.png','banner-familia.jpg','gold','essencial','familiar-ate-5-pessoas');

/*Table structure for table `categorys` */

DROP TABLE IF EXISTS `categorys`;

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `categorys` */

insert  into `categorys`(`id`,`name`,`type`) values 
(1,'EXAME',NULL),
(2,'CONSULTA',NULL),
(3,'LABORATÓRIO',NULL),
(4,'HOSPITAL',NULL),
(5,'CONSULTAS DE URGÊNCIA',NULL),
(6,'TRATAMENTO',NULL);

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
  `plan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=292 DEFAULT CHARSET=latin1;

/*Data for the table `leads` */

insert  into `leads`(`id`,`nome`,`whats`,`opc`,`email`,`msg`,`data_envio`,`dv`,`tipo`,`status`,`user_vz`,`data_vz`,`user_ok`,`data_ok`,`plan`) values 
(286,'Cairo Felipe dos Reis Machado','086999069329',NULL,'cairofelipedev@gmail.com','Teste','2022-02-02 11:25:02',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(287,'Cairo Felipe dos Reis Machado','086999069329',NULL,'cairofelipedev@gmail.com','Teste','2022-02-02 11:26:43','afiliado','1','1',NULL,NULL,NULL,NULL,'Gold'),
(288,'Cairo Felipe dos Reis Machado','086999069329',NULL,'cairofelipedev@gmail.com','esdqdqdq','2022-02-02 11:26:51','afiliado','1','1',NULL,NULL,NULL,NULL,'Platinum'),
(289,'Cairo','88888',NULL,'cairofelipe@gmail.com','esdqdqdq','2022-02-02 11:26:51',NULL,'2','3',NULL,NULL,NULL,NULL,'Platinum'),
(290,'Cairo Felipe dos Reis Machado','086999069329',NULL,'cairofelipedev@gmail.com','esdqdqdq','2022-02-02 11:26:51','afiliado','2','2',NULL,NULL,NULL,NULL,'Platinum'),
(291,'Cairo Felipe dos Reis Machado','086999069329',NULL,'cairofelipedev@gmail.com','esdqdqdq','2022-02-02 11:26:51','afiliado','2','3',NULL,NULL,NULL,NULL,'Platinum');

/*Table structure for table `logs` */

DROP TABLE IF EXISTS `logs`;

CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `data_log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

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
(10,'Cairo Felipe','2022-01-29 10:39:30','login'),
(11,'Cairo Felipe','2022-03-09 17:42:33','login'),
(12,'Cairo Felipe','2022-03-10 15:32:20','login'),
(13,'Cairo Felipe','2022-03-10 19:08:22','login'),
(14,'Cairo Felipe','2022-03-15 20:22:27','login'),
(15,'Cairo Felipe dos Reis Machado','2022-03-15 20:38:25','login'),
(16,'Cairo Felipe dos Reis Machado','2022-03-15 20:39:41','login'),
(17,'Cairo Felipe dos Reis Machado','2022-03-15 21:37:21','login'),
(18,'Cairo Felipe dos Reis Machado','2022-03-15 22:12:46','login'),
(19,'Cairo Felipe','2022-03-17 19:52:21','login'),
(20,'Cairo Felipe','2022-03-17 21:30:32','login'),
(21,'Cairo Felipe','2022-03-18 11:46:16','login'),
(22,'Cairo Felipe','2022-03-21 09:58:15','login'),
(23,'Cairo Felipe dos Reis Machado','2022-03-21 11:14:33','login'),
(24,'Cairo Felipe dos Reis Machado','2022-03-21 22:08:46','login'),
(25,'Cairo Felipe dos Reis Machado','2022-03-21 22:58:58','login'),
(26,'Cairo Felipe','2022-03-21 23:10:02','login'),
(27,'CentroCard Saúde','2022-03-22 19:46:35','login'),
(28,'CentroCard Saúde','2022-03-22 20:43:07','login'),
(29,'CentroCard Saúde','2022-03-22 21:06:02','login'),
(30,'CentroCard Saúde','2022-03-22 21:22:04','login'),
(31,'Cairo Felipe dos Reis Machado','2022-03-22 22:02:49','login'),
(32,'Centro Card Saúde','2022-03-22 22:49:20','login'),
(33,'Cairo Felipe','2022-03-22 22:56:15','login'),
(34,'Centro Card Saúde','2022-03-23 09:31:36','login'),
(35,'Cairo Felipe','2022-03-23 09:32:43','login'),
(36,'Centro Card Saúde','2022-03-23 09:39:25','login'),
(37,'Cairo Felipe dos Reis Machado','2022-03-23 10:09:59','login'),
(38,'Cairo Felipe dos Reis Machado','2022-03-23 10:24:53','login'),
(39,'Centro Card Saúde','2022-03-23 16:25:47','login'),
(40,'Centro Card Saúde','2022-03-24 10:39:20','login'),
(41,'Centro Card Saúde','2022-03-24 15:30:15','login'),
(42,'Centro Card Saúde','2022-03-24 16:42:56','login'),
(43,'Centro Card Saúde','2022-03-27 20:52:30','login'),
(44,'Centro Card Saúde','2022-03-28 19:38:20','login'),
(45,'Centro Card Saúde','2022-03-28 23:08:46','login'),
(46,'Centro Card Saúde','2022-03-29 17:08:11','login'),
(47,'Centro Card Saúde','2022-03-29 17:15:23','login'),
(48,'Centro Card Saúde','2022-03-30 19:16:38','login'),
(49,'Centro Card Saúde','2022-03-30 20:44:21','login'),
(50,'Centro Card Saúde','2022-03-30 23:04:41','login'),
(51,'Centro Card Saúde','2022-03-30 23:51:30','login'),
(52,'Cairo Felipe dos Reis Machado','2022-04-01 17:09:33','login'),
(53,'Cairo Felipe','2022-04-01 17:10:07','login'),
(54,'Centro Card Saúde','2022-04-01 17:56:13','login'),
(55,'Cairo Felipe dos Reis Machado','2022-04-01 18:06:58','login'),
(56,'Cairo Felipe','2022-04-01 18:18:54','login'),
(57,'Cairo Felipe dos Reis Machado','2022-04-01 18:20:53','login'),
(58,'Cairo Felipe','2022-04-01 18:28:42','login');

/*Table structure for table `material` */

DROP TABLE IF EXISTS `material`;

CREATE TABLE `material` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `data_create` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `material` */

/*Table structure for table `partners` */

DROP TABLE IF EXISTS `partners`;

CREATE TABLE `partners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(400) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `state` varchar(200) DEFAULT NULL,
  `tel` varchar(100) DEFAULT NULL,
  `whats` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `id_national` varchar(100) DEFAULT NULL,
  `site` varchar(200) DEFAULT NULL,
  `type_service` varchar(10) DEFAULT NULL,
  `type_attendance` varchar(10) DEFAULT NULL,
  `zip` varchar(100) DEFAULT NULL,
  `how` varchar(500) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4;

/*Data for the table `partners` */

insert  into `partners`(`id`,`name`,`address`,`city`,`district`,`state`,`tel`,`whats`,`email`,`id_national`,`site`,`type_service`,`type_attendance`,`zip`,`how`,`status`,`img`) values 
(1,'Centrocardio','Rua Lucídio Freitas, 1881','Teresina','Mafuá','PI','(86) 3198-0110','(86) 3198-0110','atendimento@centrocardio.com.br','07.344.790/0001-71','https://www.centrocardio.com.br','1',NULL,NULL,NULL,NULL,'centrocardio.jpg'),
(2,'Lablife','R. Des. Pires de Castro, 265','Teresina ','Centro (Sul)','PI','(86) 3223-9700','(86) 988322512','','10.999.381/0001-18',NULL,'3','7','(86) 3223-9700',NULL,'1','lablife.png'),
(3,'Técio Rezende','R. Gabriel Ferreira, 262 ','Teresina','Centro (Sul)','PI','(86) 99924-5200',NULL,'contato@clinicaterciorezende.com.br',NULL,NULL,'1',NULL,NULL,NULL,NULL,'tercio.jpeg'),
(4,'Otoclínica','Av. José dos Santos e Silva, 1520','Teresina','Centro (Sul)','PI','(86) 2107-2121',NULL,'recepcao@otoclinicathe.com.br',NULL,NULL,'1',NULL,NULL,NULL,NULL,'otoclinica.jpg'),
(5,'Bionuclear','Rua Lucídio Freitas, 1881','Teresina','Mafuá','PI','(86) 3222-5524','(86) 9 9992-9563','sac@clinicabionuclear.com.br',NULL,'https://www.clinicabionuclear.com.br/','3',NULL,NULL,NULL,NULL,'bionuclear.jpg'),
(6,'Hospital Hti','Av. Leônidas Melo, 370','Teresina','Piçarra','PI','(86) 3215-6700',NULL,NULL,NULL,NULL,'4',NULL,NULL,NULL,NULL,'hti.jpg'),
(7,'Lívio Parente','R. São Pedro, 2265','Teresina','Centro (Sul)','PI','(86) 99385609',NULL,NULL,NULL,NULL,'3',NULL,NULL,NULL,NULL,'centromedico.jpg'),
(9,'Psico\'sCentro & Fono\'sCentro','Av. Homero Castelo Branco, 1418','Teresina','São Cristóvão','PI','(86) 3233-9553',NULL,'contato@clinicapsicocentro.com.br',NULL,NULL,'1',NULL,NULL,NULL,NULL,'psicoscentro.png'),
(10,'Lucídio Portela','R. São Pedro, 2133','Teresina','Centro (Sul)','PI','(86) 3221-3062',NULL,NULL,NULL,NULL,'1',NULL,NULL,NULL,NULL,'lucidio.jpg');

/*Table structure for table `plans` */

DROP TABLE IF EXISTS `plans`;

CREATE TABLE `plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `price2` varchar(50) DEFAULT NULL,
  `description` varchar(1500) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `t1` varchar(200) DEFAULT NULL,
  `t2` varchar(200) DEFAULT NULL,
  `t3` varchar(200) DEFAULT NULL,
  `t4` varchar(200) DEFAULT NULL,
  `t5` varchar(200) DEFAULT NULL,
  `t6` varchar(200) DEFAULT NULL,
  `t7` varchar(200) DEFAULT NULL,
  `t8` varchar(200) DEFAULT NULL,
  `t9` varchar(200) DEFAULT NULL,
  `t10` varchar(200) DEFAULT NULL,
  `t11` varchar(200) DEFAULT NULL,
  `t12` varchar(200) DEFAULT NULL,
  `t13` varchar(200) DEFAULT NULL,
  `t14` varchar(200) DEFAULT NULL,
  `t15` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `plans` */

insert  into `plans`(`id`,`name`,`price`,`price2`,`description`,`link`,`t1`,`t2`,`t3`,`t4`,`t5`,`t6`,`t7`,`t8`,`t9`,`t10`,`t11`,`t12`,`t13`,`t14`,`t15`) values 
(6,'Essencial','29,90','59,80','',NULL,'Médico Online 24 horas ','Rede Centrocard','Central de agendamento com APP','Familiar até 5 pessoas ',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(7,'Gold','34,90','69,80',NULL,NULL,'Médico Online 24 horas','Rede Centrocard','Central de agendamento com APP','Familiar até 5 pessoas ','Assistência Farmacêutica','Assistência Nutricional','Assistência Personal Fitness','Assistência Residencial ','Assistência Funeral Familiar ','Seguro de acidentes pessoais',NULL,NULL,NULL,NULL,NULL),
(8,'Platinum','49,90','99,80',NULL,NULL,'','Rede Centrocard','Central de agendamento com APP','Familiar até 5 pessoas ','Assistência Farmacêutica','Assistência Nutricional',NULL,'Assistência Residencial ',NULL,'Seguro de acidentes pessoais','Especialidades Médicas','Conta Saúde',NULL,NULL,NULL);

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

/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `partner` varchar(400) DEFAULT NULL,
  `private` varchar(20) DEFAULT NULL,
  `centrocard` varchar(20) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `private_status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=261 DEFAULT CHARSET=utf8mb4;

/*Data for the table `services` */

insert  into `services`(`id`,`name`,`partner`,`private`,`centrocard`,`type`,`private_status`) values 
(2,'CINTILOGRAFIA ÓSSEA','Bionuclear','690,00','600,00','EXAME',NULL),
(6,'CINTILOGRAFIA DO MIOCÁRDIO PERFUSÃO – ESTRESSE E REPOUSO','Bionuclear','2.000,00','1.800,00','EXAME',NULL),
(7,'CINTILOGRAFIA DO MIOCÁRDIO PERFUSÃO COM TÁLIO 201','Bionuclear','3.630,00','3085,00','EXAME',NULL),
(8,'PESQUISA DE CORPO INTEIRO (PCI)','Bionuclear','730,00','610,00','EXAME',NULL),
(9,'CINTILOGRAFIA DA TIREÓIDE','Bionuclear','330,00','280,00','EXAME',NULL),
(10,'CINTILOGRAFIA DAS PARATIREÓIDES ','Bionuclear','640,00','540,00','EXAME',NULL),
(11,'CINTILOGRAFIA DAS MAMAS ','Bionuclear','640,00','540,00','EXAME',NULL),
(12,'CINTILOGRAFIAS DAS GLÂNDULAS SALIVARES ','Bionuclear','550,00','470,00','EXAME',NULL),
(13,'DACRIOCINTILOGRAFIA ','Bionuclear','530,00','450,00','EXAME',NULL),
(14,'PESQUISA DE REFLUXO GASTRO-ESOFÁGICO','Bionuclear','530,00','450,00','EXAME',NULL),
(15,'ASPIRAÇÃO PULMONAR','Bionuclear','530,00','450,00','EXAME',NULL),
(16,'CINTILOGRAFIA PULMONAR (VENTILAÇÃO) ','Bionuclear','530,00','450,00','EXAME',NULL),
(17,'CINTILOGRAFIA PULMONAR (PERFUSÃO) ','Bionuclear','530,00','450,00','EXAME',NULL),
(18,'CINTILOGRAFIA HEPÁTICA (VIAS BILIARES) ','Bionuclear','530,00','450,00','EXAME',NULL),
(19,'CINTILOGRAFIA HEPÁTICA (FÍGADO E BAÇO)','Bionuclear','530,00','450,00','EXAME',NULL),
(20,'CINTILOGRAFIA DE FLUXO SANGUINEO HEPÁTICO','Bionuclear','530,00','450,00','EXAME',NULL),
(21,'CINTILOGRAFIA RENAL ESTÁTICA (QUANT./QUALIT.) DMSA ','Bionuclear','460,00','390,00','EXAME',NULL),
(22,'ESTUDO RENAL DINÂMICO DTPA','Bionuclear','460,00','390,00','EXAME',NULL),
(23,'ESTUDO RENAL DINÂMICO COM DIURÉTICO','Bionuclear','530,00','450,00','EXAME',NULL),
(24,'CISTOCINTILOGRAFIA INDIRETA ','Bionuclear','760,00','640,00','EXAME',NULL),
(25,'CINTILOGRAFIA DE PERFUSÃO CEREBRAL','Bionuclear','910,00','760,00','EXAME',NULL),
(26,'CINTILOGRAFIA DE PERFUSÃO CEREBRAL COM TRODAT','Bionuclear','2.030,00','1.733,00','EXAME',NULL),
(27,'CINTILOGRAFIA GÁSTRICA PARA ESVAZIAMENTO (LÍQUIDO)','Bionuclear','530,00','450,00','EXAME',NULL),
(28,'CINTILOGRAFIA GÁSTRICA PARA ESVAZIAMENTO (SÓLIDO) ','Bionuclear','530,00','450,00','EXAME',NULL),
(29,'CINTILOGRAFIA TESTICULAR ','Bionuclear','530,00','450,00','EXAME',NULL),
(30,'LINFOCINTILOGRAFIA','Bionuclear','640,00','545,00','EXAME',NULL),
(31,'DETECÇÃO RADIOGUIADA DE LINFONODO SENTINELA ','Bionuclear','640,00','545,00','EXAME',NULL),
(32,'CINTILOGRAFIA COM ANÁLOGO DE SOMATOSTATINA','Bionuclear','7.260,00','5.610,00','EXAME',NULL),
(33,'CINTILOGRAFIA COM MIBG (METAIOBENZIGUANIDINA) ','Bionuclear','1.300,00','1.105,00','EXAME',NULL),
(34,'PESQUISA DE SANGRAMENTO DIGESTIVO','Bionuclear','870,00','825,00','EXAME',NULL),
(35,'TRATAMENTO DO HIPERTIREOIDISMO (GRAVES)','Bionuclear','3.630,00','2.805,00','TRATAMENTO',NULL),
(36,'TRATAMENTO DO HIPERTIREOIDISMO (PLUMMER)* ','Bionuclear','3.990,00','3.085,00','TRATAMENTO',NULL),
(37,'TRATAMENTO DO CÂNCER DA TIREÓIDE 100MCI* ','Bionuclear','4.500,00','3.878,00','TRATAMENTO',NULL),
(38,'TRATAMENTO DO CÂNCER DA TIREÓIDE 150MCI* ','Bionuclear','5.500,00','4.908,00','TRATAMENTO',NULL),
(39,'TRATAMENTO DO CÂNCER DA TIREÓIDE 200MCI*','Bionuclear','5.800,00','5.143,00','TRATAMENTO',NULL),
(40,'TRATAMENTO DO CÂNCER DA TIREÓIDE 250MCI*','Bionuclear','6.500,00','5.797,00','TRATAMENTO',NULL),
(41,'17 ALFA HIDROXIPROGESTERONA','Lablife','30,00','23,00','EXAME',NULL),
(42,'ACIDO FOLICO','Lablife','41,00','23,00','EXAME',NULL),
(43,'ACIDO OXALICO (URINA 24 HORAS)','Lablife','25,00','20,00','EXAME',NULL),
(44,'ACIDO URICO','Lablife','21,00','12,00','EXAME',NULL),
(45,'ACIDO URICO (URINA 24 HORAS)','Lablife','22,00','12,00','EXAME',NULL),
(46,'ALBUMINA','Lablife','21,00','12,00','EXAME',NULL),
(47,'ALDOLASE','Lablife','20,00','12,00','EXAME',NULL),
(48,'ALDOSTERONA','Lablife','32,00','25,00','EXAME',NULL),
(49,'ALDOSTERONA (URINA 24 HORAS)','Lablife','32,00','32,00','EXAME',NULL),
(50,'ALFAFETOPROTEINA','Lablife','30,00','23,00','EXAME',NULL),
(51,'AMILASE','Lablife','22,00','12,00','EXAME',NULL),
(52,'ANDROSTENEDIONA','Lablife','26,00','20,00','EXAME',NULL),
(53,'ANTI CCP (Cyclic Citrullinated Peptide)','Lablife','130,00','75,00','EXAME',NULL),
(54,'ANTI - CITOPLASMA DE NEUTROFILOS (ANCA C)','Lablife','42,00','30,00','EXAME',NULL),
(55,'ANTI - CITOPLASMA DE NEUTROFILOS (ANCA P)','Lablife','42,00','30,00','EXAME',NULL),
(56,'ANTI - ENDOMISIO - Anticorpos (IgA) ','Lablife','45,00','25,00','EXAME',NULL),
(57,'ANTI - ENDOMISIO - Anticorpos (IgG)','Lablife','45,00','25,00','EXAME',NULL),
(58,'ANTI - ENDOMISIO - Anticorpos (IgM)','Lablife','50,00','35,00','EXAME',NULL),
(59,'ANTI - GLIADINA - ANTICORPOS IGA','Lablife','32,00','23,00','EXAME',NULL),
(60,'ANTI - GLIADINA - ANTICORPOS IGG','Lablife','32,00','23,00','EXAME',NULL),
(61,'ANTI - GLIADINA - ANTICORPOS IGM','Lablife','40,00','28,00','EXAME',NULL),
(62,'ANTI - TROMBINA III ','Lablife','35,00','24,00','EXAME',NULL),
(63,'ANTI CARDIOLIPINA - IGA','Lablife','38,00','24,00','EXAME',NULL),
(64,'ANTI CARDIOLIPINA - IGG','Lablife','38,00','24,00','EXAME',NULL),
(65,'ANTI CARDIOLIPINA - IGM','Lablife','38,00','24,00','EXAME',NULL),
(66,'ANTI ESTREPTOLISINA O (ASLO) ','Lablife','20,00','13,00','EXAME',NULL),
(67,'ANTI HBC (IGG)','Lablife','42,00','23,00','EXAME',NULL),
(68,'ANTI HBC (IGM)','Lablife','42,00','23,00','EXAME',NULL),
(69,'ANTI HBC (TOTAL)','Lablife','42,00','23,00','EXAME',NULL),
(70,'ANTI HBE','Lablife','42,00','23,00','EXAME',NULL),
(71,'ANTI HBS ','Lablife','40,00','23,00','EXAME',NULL),
(72,'ANTI HCV','Lablife','52,00','28,00','EXAME',NULL),
(73,'ANTI HIV I E II ','Lablife','79,00','35,00','EXAME',NULL),
(74,'ANTI HVA (IGG)','Lablife','45,00','25,00','EXAME',NULL),
(75,'ANTI HVA (IGM)','Lablife','45,00','25,00','EXAME',NULL),
(76,'ANTI MUSCULO LISO ','Lablife','25,00','19,00','EXAME',NULL),
(77,'ANTI TPO ','Lablife','38,00','24,00','EXAME',NULL),
(78,'ANTICOAGULANTE LUPICO','Lablife','62,00','30,00','EXAME',NULL),
(79,'ANTICORPOS ANTI CHIKUNGUNYA IGG E IGM','Lablife','250,00','188,00','EXAME',NULL),
(80,'ANTICORPOS ANTI TRANSGLUTAMINASE TECIDUAL IGG ','Lablife','65,00','45,00','EXAME',NULL),
(81,'ANTI-LKM 1','Lablife','20,00','20,00','EXAME',NULL),
(82,'ANTI-TIREOGLOBULINA','Lablife','28,00','20,00','EXAME',NULL),
(83,'ATIVIDADE PLASMATICA DA RENINA','Lablife','90,00','72,00','EXAME',NULL),
(84,'BACTERIOSCOPIA','Lablife','30,00','14,00','EXAME',NULL),
(85,'BETA HCG (GONADOTROFICO CORIONICO) ','Lablife','39,00','20,00','EXAME',NULL),
(86,'BETA2-GLICOPROTEINA I, ANTICORPOS IgG E IgM','Lablife','180,00','107,00','EXAME',NULL),
(87,'BICARBONATO','Lablife','27,00','18,00','EXAME',NULL),
(88,'BILIRRUBINAS TOTAL E FRACOES','Lablife','24,00','15,00','EXAME',NULL),
(89,'BNP - PEPTIDEO NATRIURETICO ','Lablife','192,00','147,00','EXAME',NULL),
(90,'CA 125','Lablife','36,00','24,00','EXAME',NULL),
(91,'CA 15-3','Lablife','36,00','24,00','EXAME',NULL),
(92,'CA 19-9','Lablife','36,00','24,00','EXAME',NULL),
(93,'CALCIO','Lablife','21,00','12,00','EXAME',NULL),
(94,'CALCIO IONICO','Lablife','23,00','14,00','EXAME',NULL),
(95,'CAPACIDADE DE LIGAÇÃO DO FERRO ','Lablife','22,00','14,00','EXAME',NULL),
(96,'CD4 - SUBPOPULACAO LINFOCITARIA','Lablife','66,00','38,00','EXAME',NULL),
(97,'CD8 - IMUNOFENOTIPAGEM ','Lablife','66,00','38,00','EXAME',NULL),
(98,'CEA - ANTIGENO CARCINOEMBRIOGENICO','Lablife','48,00','24,00','EXAME',NULL),
(99,'CENTROMERO, ANTICORPOS ANTI ','Lablife','30,00','20,00','EXAME',NULL),
(100,'CERULOPLASMINA','Lablife','20,00','13,00','EXAME',NULL),
(101,'CHAGAS (TRYPANOSOMA CRUZI) IGG','Lablife','20,00','15,00','EXAME',NULL),
(102,'CHAGAS (TRYPANOSOMA CRUZI) IGM','Lablife','25,00','19,00','EXAME',NULL),
(103,'CITOMEGALOVIRUS - ANTICORPOS IGG ','Lablife','45,00','25,00','EXAME',NULL),
(104,'CITOMEGALOVIRUS - ANTICORPOS IGM','Lablife','45,00','27,00','EXAME',NULL),
(105,'CITRATO URINARIO','Lablife','20,00','10,00','EXAME',NULL),
(106,'CK-MB','Lablife','45,00','32,00','EXAME',NULL),
(107,'CLEARENCE DE CREATININA','Lablife','28,00','15,00','EXAME',NULL),
(108,'CLORETOS','Lablife','21,00','12,00','EXAME',NULL),
(109,'COAGULOGRAMA I','Lablife','26,00','18,00','EXAME',NULL),
(110,'COBRE SERICO ','Lablife','22,00','13,00','EXAME',NULL),
(111,'COLESTEROL HDL','Lablife','24,00','14,00','EXAME',NULL),
(112,'COLESTEROL LDL','Lablife','19,00','10,00','EXAME',NULL),
(113,'COLESTEROL TOTAL','Lablife','21,00','12,00','EXAME',NULL),
(114,'COLESTEROL VLDL','Lablife','16,00','10,00','EXAME',NULL),
(115,'COMPLEMENTO SERICO C3 ','Lablife','19,00','15,00','EXAME',NULL),
(116,'COMPLEMENTO SERICO C4','Lablife','19,00','15,00','EXAME',NULL),
(117,'COMPLEMENTO SERICO C5','Lablife','150,00','113,00','EXAME',NULL),
(118,'COOMBS DIRETO','Lablife','20,00','13,00','EXAME',NULL),
(119,'CORTISOL ','Lablife','40,00','23,00','EXAME',NULL),
(120,'CPK','Lablife','28,00','13,00','EXAME',NULL),
(121,'CREATINA (SANGUE)','Lablife','20,00','13,00','EXAME',NULL),
(122,'CREATININA','Lablife','21,00','12,00','EXAME',NULL),
(123,'CULTURA DE URINA ( UROCULTURA )','Lablife','95,00','50,00','EXAME',NULL),
(124,'CURVA GLICEMICA - 2 DOSAGENS','Lablife','42,00','23,00','EXAME',NULL),
(125,'D-DIMERO','Lablife','134,00','115,00','EXAME',NULL),
(126,'DENGUE - ANTICORPOS IGG (TESTE RAPIDO)','Lablife','50,00','28,00','EXAME',NULL),
(127,'DENGUE - ANTICORPOS IGM (TESTE RAPIDO) ','Lablife','50,00','28,00','EXAME',NULL),
(128,'DESIDROGENASE LACTEA (LDH) ','Lablife','25,00','13,00','EXAME',NULL),
(129,'DHEA (DEHIDROEPIANDROSTERONA)','Lablife','35,00','24,00','EXAME',NULL),
(130,'DHT (DIHIDROTESTOSTERONA) ','Lablife','45,00','35,00','EXAME',NULL),
(131,'DNA NATIVO, AUTO-ANTICORPOS ANTI ','Lablife','30,00','20,00','EXAME',NULL),
(132,'ELETROFORESE DE HEMOGLOBINA','Lablife','36,00','23,00','EXAME',NULL),
(133,'ELETROFORESE DE PROTEINAS SERICA','Lablife','28,00','18,00','EXAME',NULL),
(134,'EPSTEIN BARR IgG - ANTICORPOS ','Lablife','30,00','24,00','EXAME',NULL),
(135,'EPSTEIN BARR IgM - ANTICORPOS ','Lablife','30,00 ','24,00','EXAME',NULL),
(136,'ESTRADIOL E2 (ESTROGENIO) ','Lablife','36,00','23,00','EXAME',NULL),
(137,'ESTRIOL LIVRE','Lablife','30,00','23,00','EXAME',NULL),
(138,'ESTRONA','Lablife','30,00','20,00','EXAME',NULL),
(139,'FATOR ANTI-NUCLEAR - FAN','Lablife','30,00','15,00','EXAME',NULL),
(140,'FERRITINA','Lablife','51,00','23,00','EXAME',NULL),
(141,'FERRO SERICO','Lablife','21,00','12,00','EXAME',NULL),
(142,'FIBRINOGENIO','Lablife','22,00','15,00','EXAME',NULL),
(143,'FOSFATASE ALCALINA','Lablife','22,00','12,00','EXAME',NULL),
(144,'FOSFORO','Lablife','21,00','12,00','EXAME',NULL),
(145,'FSH - HORMONIO FOLICULO ESTIMULANTE ','Lablife','34,00','20,00','EXAME',NULL),
(146,'FTA-ABS - TREPONEMA PALLIDUM - IGG','Lablife','25,00','19,00','EXAME',NULL),
(147,'FTA-ABS - TREPONEMA PALLIDUM - IGM','Lablife','25,00','19,00','EXAME',NULL),
(148,'GAMA-GT (Y-GT) ','Lablife','21,00','12,00','EXAME',NULL),
(149,'GASOMETRIA VENOSA','Lablife','58,00','28,00','EXAME',NULL),
(150,'GLICOSE ','Lablife','21,00','12,00','EXAME',NULL),
(151,'GLICOSE - TESTE DE TOLERANCIA GESTACIONAL','Lablife','42,00','23,00','EXAME',NULL),
(152,'GLICOSE 6 FOSFATO DESIDROGENASE (G6PD) - SANGUE TOTAL','Lablife','40,00','18,00','EXAME',NULL),
(153,'GLICOSE POS PRANDIAL ','Lablife','21,00','12,00','EXAME',NULL),
(154,'GORDURA FECAL - PESQUISA','Lablife','22,00','10,00','EXAME',NULL),
(155,'GRUPO SANGUINEO E FATOR RH','Lablife','29,00','14,00','EXAME',NULL),
(156,'HBE-AG ','Lablife','40,00','20,00','EXAME',NULL),
(157,'HBSAG - ANTIGENO AUSTRALIA','Lablife','40,00','20,00','EXAME',NULL),
(158,'HEMOCULTURA','Lablife','102,00','63,00','EXAME',NULL),
(159,'HEMOGLOBINA GLICADA ','Lablife','34,00','18,00','EXAME',NULL),
(160,'HEMOGRAMA COMPLETO','Lablife','36,00','17,00','EXAME',NULL),
(161,'HERPES SIMPLES I E II IGG','Lablife','38,00','28,00','EXAME',NULL),
(162,'HERPES SIMPLES I E II IGM','Lablife','42,00','28,00','EXAME',NULL),
(163,'HIV PCR QUANTITATIVO EM TEMPO REAL ','Lablife','290,00','225,00','EXAME',NULL),
(164,'HOMA-IR','Lablife','54,00','42,00','EXAME',NULL),
(165,'HOMOCISTEINA','Lablife','60,00','38,00','EXAME',NULL),
(166,'HORMÔNIO ADRENOCORTICOTRÓFICO - ACTH','Lablife','30,00','23,00','EXAME',NULL),
(167,'HORMONIO ANTI MULLERIAN ','Lablife','300,00','232,00 ','EXAME',NULL),
(168,'HORMÔNIO DO CRESCIMENTO HUMANO - HGH BASAL ','Lablife','40,00','25,00','EXAME',NULL),
(169,'HTLV I E II-ANTICORPOS','Lablife','52,00','25,00','EXAME',NULL),
(170,'IGE TOTAL','Lablife','40,00','22,00','EXAME',NULL),
(171,'IGF1 (SOMATOMEDINA)','Lablife','60,00','39,00','EXAME',NULL),
(172,'IGFBP-3 - PROTEÍNA LIGADORA IGF I - TIPO 3 ','Lablife','66,00','39,00','EXAME',NULL),
(173,'IGG - 4 - SUBCLASSE DE IGG','Lablife','60,00','40,00','EXAME',NULL),
(174,'IMUNOGLOBULINAS IGA','Lablife','35,00','18,00','EXAME',NULL),
(175,'IMUNOGLOBULINAS IGG ','Lablife','35,00','18,00','EXAME',NULL),
(176,'INDICE DE SATURAÇÃO DA TRANSFERRINA','Lablife','20,00','14,00','EXAME',NULL),
(177,'INSULINA','Lablife','48,00','22,00','EXAME',NULL),
(178,'LACTOSE - TESTE DE TOLERANCIA','Lablife','42,00','33,00','EXAME',NULL),
(179,'LATEX (FATOR REUMATOIDE)','Lablife','26,00','13,00','EXAME',NULL),
(180,'LH - HORMONIO LUTEINIZANTE','Lablife','34,00','20,00','EXAME',NULL),
(181,'LIPASE','Lablife','27,00','12,00','EXAME',NULL),
(182,'LIPIDIOS TOTAIS','Lablife','20,00','10,00','EXAME',NULL),
(183,'LIPIDOGRAMA','Lablife','58,00','43,00','EXAME',NULL),
(184,'LIPOPROTEINA - LPA','Lablife','35,00','23,00','EXAME',NULL),
(185,'LITIO SERICO','Lablife','19,00','13,00','EXAME',NULL),
(186,'MAGNESIO','Lablife','21,00','12,00','EXAME',NULL),
(187,'METANEFRINA TOTAL URINARIA','Lablife','120,00','75,00','EXAME',NULL),
(188,'METANEFRINAS FRAÇÕES E TOTAIS','Lablife','100,00','69,00','EXAME',NULL),
(189,'MICROALBUMINURIA (URINA 24 HORAS) ','Lablife','25,00','15,00','EXAME',NULL),
(190,'MICROALBUMINURIA (URINA RECENTE)','Lablife','22,00','15,00','EXAME',NULL),
(191,'MIOGLOBINA','Lablife','58,00','30,00','EXAME',NULL),
(192,'MITOCONDRIA, ANTICORPOS ANTI AMA','Lablife','35,00','20,00','EXAME',NULL),
(193,'MUTACAO NO GENE DA PROTROMBINA','Lablife','190,00','160,00','EXAME',NULL),
(194,'MYCOBACTERIUM TUBERCULOSIS DETECCAO E RESISTENCIA','Lablife','390,00','238,00','EXAME',NULL),
(195,'PAPANICOLAOU - CITOPATOLOGICO','Lablife','46,00','24,00','EXAME',NULL),
(196,'PARASITOLOGICO DE FEZES ','Lablife','22,00','10,00','EXAME',NULL),
(197,'PEPTIDEO C','Lablife','36,00','29,00','EXAME',NULL),
(198,'PESQUISA DE LEUCOCITOS NAS FEZES','Lablife','20,00','10,00','EXAME',NULL),
(199,'PESQUISA SUBSTANCIAS REDUTORA NAS FEZES','Lablife','18,00 ','10,00','EXAME',NULL),
(200,'POTASSIO ','Lablife','21,00','12,00','EXAME',NULL),
(201,'PRO-CALCITONINA','Lablife','300,00','170,00','EXAME',NULL),
(202,'PROGESTERONA','Lablife','37,00','24,00','EXAME',NULL),
(203,'PROLACTINA','Lablife','34,00','20,00','EXAME',NULL),
(204,'PROTEINA C FUNCIONAL','Lablife','90,00','37,00','EXAME',NULL),
(205,'PROTEINA C REATIVA - PCR','Lablife','33,00','14,00','EXAME',NULL),
(206,'PROTEINA C REATIVA ULTRASENSIVEL','Lablife','38,00','20,00','EXAME',NULL),
(207,'PROTEINA S FUNCIONAL','Lablife','80,00','48,00','EXAME',NULL),
(208,'PROTEINAS TOTAIS E FRAÇÕES','Lablife','24,00','15,00','EXAME',NULL),
(209,'PROTEINURIA (URINA 24 HORAS)','Lablife','24,00','12,00','EXAME',NULL),
(210,'PROTEINURIA (URINA RECENTE)','Lablife','24,00','12,00','EXAME',NULL),
(211,'PROVA DO LACO','Lablife','14,00','8,00','EXAME',NULL),
(212,'PSA LIVRE ','Lablife','48,00','24,00','EXAME',NULL),
(213,'PSA TOTAL ','Lablife','48,00','24,00','EXAME',NULL),
(214,'PTH - PARATORMONIO (MOLECULA INTEIRA) ','Lablife','45,00','25,00','EXAME',NULL),
(215,'PTT - TEMPO DE TROMBOPLASTINA PARCIAL ','Lablife','32,00','13,00','EXAME',NULL),
(216,'RENINA','Lablife','70,00','49,00','EXAME',NULL),
(217,'RETICULOCITOS ','Lablife','20,00','8,00','EXAME',NULL),
(218,'RETRACAO DO COAGULO ','Lablife','14,00','8,00','EXAME',NULL),
(219,'RNP, AUTO ANTICORPOS ANTI','Lablife','30,00','20,00','EXAME',NULL),
(220,'RUBEOLA IgG, ANTICORPOS ANTI','Lablife','35,00','20,00','EXAME',NULL),
(221,'RUBEOLA IgM, ANTICORPOS ANTI ','Lablife','37,00','22,00','EXAME',NULL),
(222,'SANGUE OCULTO (FEZES) ','Lablife','33,00','13,00','EXAME',NULL),
(223,'SDHEA (SULFATO DE DEHIDROEPIANDROSTERONA)','Lablife','30,00','20,00','EXAME',NULL),
(224,'SELENIO SERICO ','Lablife','45,00','24,00','EXAME',NULL),
(225,'SEROTONINA TOTAL','Lablife','45,00','39,0','EXAME',NULL),
(226,'SHBG - GLOBULINA DE LIGAÇÃO DE HORMONIOS SEXUAIS','Lablife','44,00','28,00','EXAME',NULL),
(227,'SM, AUTO ANTICORPOS ANTI ','Lablife','22,00','18,00','EXAME',NULL),
(228,'SODIO','Lablife','21,00','12,00 ','EXAME',NULL),
(229,'SSA/RO, AUTO ANTICORPOS ANTI','Lablife','28,00','22,00','EXAME',NULL),
(230,'SSB/LA, AUTO ANTICORPOS ANTI','Lablife','28,00','22,00','EXAME',NULL),
(231,'SUMARIO DE URINA (EAS)','Lablife','24,00','13,00','EXAME',NULL),
(232,'T3 LIVRE','Lablife','35,00','18,00','EXAME',NULL),
(233,'T3 REVERSO','Lablife','100,00','50,00','EXAME',NULL),
(234,'T4 LIVRE','Lablife','35,00','18,00','EXAME',NULL),
(235,'TAP - TEMPO E ATIVIDADE DE PROTROMBINA','Lablife','32,00','13,00','EXAME',NULL),
(236,'TEMPO DE COAGULACAO','Lablife','14,00','8,00','EXAME',NULL),
(237,'TEMPO DE SANGRIA','Lablife','14,00','8,00','EXAME',NULL),
(238,'TESTOSTERONA LIVRE','Lablife','40,00','23,00','EXAME',NULL),
(239,'TESTOSTERONA TOTAL','Lablife','36,00','23,00 ','EXAME',NULL),
(240,'TGO (TRANSAMINASE GLUTÂMICO OXALACÉTICO)','Lablife','21,00','12,00','EXAME',NULL),
(241,'TGP (TRANSAMINASE GLUTÂMICO PIRUVICA)','Lablife','21,00','12,00','EXAME',NULL),
(242,'TIREOGLOBULINA','Lablife','56,00','25,00','EXAME',NULL),
(243,'TOXOPLASMOSE (IGG) ','Lablife','36,00','23,00','EXAME',NULL),
(244,'TOXOPLASMOSE (IGM)','Lablife','36,00','24,00','EXAME',NULL),
(245,'TRANSFERRINA','Lablife','20,00','12,00','EXAME',NULL),
(246,'TRIGLICERIDEOS','Lablife','21,00','12,00','EXAME',NULL),
(247,'TROPONINA I','Lablife','60,00','40,00','EXAME',NULL),
(248,'TRYPANOSOMA CRUZI (HEMOAGLUTINACAO)','Lablife','25,00','19,00','EXAME',NULL),
(249,'TSH ULTRA SENSIVEL ','Lablife','35,00','18,00','EXAME',NULL),
(250,'TTG, ANTICORPOS ANTI-TRANSGLUTAMINASE TECIDUAL-IgA','Lablife','70,00','50,00','EXAME',NULL),
(251,'UREIA','Lablife','21,00','12,00','EXAME',NULL),
(252,'VDRL - SOROLUETICO (LUES) SORO','Lablife','22,00','12,00','EXAME',NULL),
(253,'VHS - VELOCIDADE DE HEMOSSEDIMENTACAO','Lablife','19,00','10,00','EXAME',NULL),
(254,'VITAMINA A','Lablife','60,00','48,00','EXAME',NULL),
(255,'VITAMINA B12','Lablife','42,00','23,00','EXAME',NULL),
(256,'VITAMINA C','Lablife','60,00','44,00','EXAME',NULL),
(257,'VITAMINA D (25 HIDROXIVITAMINA D)','Lablife','75,00','48,00','EXAME',NULL),
(258,'VITAMINA E','Lablife','106,00','78,00','EXAME',NULL),
(260,'ZINCO SERICO','Lablife','42,00','19,00','EXAME',NULL);

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
  `data_create` timestamp NULL DEFAULT current_timestamp(),
  `address` varchar(200) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `plan` varchar(20) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`login`,`email`,`pass`,`type`,`whats`,`img`,`data_create`,`address`,`district`,`city`,`state`,`status`,`plan`,`link`) values 
(12,'Centro Card Saúde','centrocard','contato@centrocardsaude.com.br','12345',1,'(86)99559-0009','CentroCardSaúdperfil.jpg','2022-03-22 21:16:25','',NULL,'','','1',NULL,NULL),
(13,'Cairo Felipe dos Reis Machado','afiliado','cairofelipedev@gmail.com','12345',2,'86999633288','CairoFelipedosReisMachadperfil.jpg','2022-03-22 22:02:17','Setor B - Quadra 14 - Casa 5','Mocambinho','Teresina','PI','1',NULL,NULL),
(15,'Cairo Felipe','cliente','cairofelipedev@gmail.com','12345',4,'86999633288','CairoFelipperfil.jpg','2022-03-22 22:52:35','Setor B - Quadra 14 - Casa 5','cairofelipedev@gmail.com','Teresina','PI','1',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
