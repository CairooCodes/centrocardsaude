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
/*Table structure for table `specialties` */

DROP TABLE IF EXISTS `specialties`;

CREATE TABLE `specialties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `esp_1` varchar(100) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `estado` varchar(200) DEFAULT NULL,
  `tel` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4;

/*Data for the table `specialties` */

insert  into `specialties`(`id`,`name`,`esp_1`,`city`,`estado`,`tel`,`email`,`img`) values 
(1,'Centrocardio','CARDIOLOGIA',NULL,NULL,'(86) 3198-0110','','centrocardio.jpg'),
(2,'Lablife',NULL,NULL,NULL,'(86) 3223-9700',NULL,'lablife.png'),
(3,'Técio Rezende','CATARATA',NULL,NULL,'(86) 99924-5200',' contato@clinicaterciorezende.com.br','tercio.jpeg'),
(4,'Otoclínica','Fonoaudiologia',NULL,NULL,'(86)  2107-2121','recepcao@otoclinicathe.com.br','otoclinica.jpg'),
(5,'Bionuclear','Ginecologia',NULL,NULL,'(86) 3222-5524','recepcao@otoclinicathe.com.br','bionuclear.jpg'),
(6,'Hospital Hti','Cardiologia','Urologia',NULL,'(86) 3215-6700',NULL,'hti.jpg'),
(7,'Lívio Parente',NULL,NULL,NULL,'(86) 99385609',NULL,'centromedico.jpg'),
(9,'Psico\'sCentro & Fono\'sCentro','Neuropsicopedagogia',NULL,NULL,'(86) 3233-9553','contato@clinicapsicocentro.com.br','psicoscentro.png'),
(10,'Lucídio Portela','Pediatria',NULL,NULL,'(86) 3221-3062',NULL,'lucidio.jpg'),
(11,'Técio Rezende','ESTRABISMO',NULL,NULL,'(86) 99924-5200',' contato@clinicaterciorezende.com.br','tercio.jpeg'),
(12,'Técio Rezende','CÓRNEA',NULL,NULL,'(86) 99924-5200',' contato@clinicaterciorezende.com.br','tercio.jpeg'),
(13,'Técio Rezende','GLAUCOMA',NULL,NULL,'(86) 99924-5200',' contato@clinicaterciorezende.com.br','tercio.jpeg'),
(14,'Otoclínica','Otorrinolaringologia',NULL,NULL,'(86)  2107-2121','recepcao@otoclinicathe.com.br','otoclinica.jpg'),
(15,'Técio Rezende','LENTES DE CONTATO',NULL,NULL,'(86) 99924-5200',' contato@clinicaterciorezende.com.br','tercio.jpeg'),
(16,'Técio Rezende','PLÁSTICA OCULAR',NULL,NULL,'(86) 99924-5200',' contato@clinicaterciorezende.com.br','tercio.jpeg'),
(17,'Técio Rezende','CURURGIA REFRATIVA',NULL,NULL,'(86) 99924-5200',' contato@clinicaterciorezende.com.br','tercio.jpeg'),
(18,'Técio Rezende','RETINA',NULL,NULL,'(86) 99924-5200',' contato@clinicaterciorezende.com.br','tercio.jpeg'),
(19,'Bionuclear','Otorrinolaringologia',NULL,NULL,'(86) 3222-5524','recepcao@otoclinicathe.com.br','bionuclear.jpg'),
(20,'Bionuclear','Fisioterapia',NULL,NULL,'(86) 3222-5524','recepcao@otoclinicathe.com.br','bionuclear.jpg'),
(21,'Bionuclear','Dermatologia',NULL,NULL,'(86) 3222-5524','recepcao@otoclinicathe.com.br','bionuclear.jpg'),
(22,'Bionuclear','Cardiologia',NULL,NULL,'(86) 3222-5524','recepcao@otoclinicathe.com.br','bionuclear.jpg'),
(23,'Bionuclear','Geriatra',NULL,NULL,'(86) 3222-5524','recepcao@otoclinicathe.com.br','bionuclear.jpg'),
(24,'Bionuclear','Endrocrinologia',NULL,NULL,'(86) 3222-5524','recepcao@otoclinicathe.com.br','bionuclear.jpg'),
(25,'Bionuclear','Nutrição',NULL,NULL,'(86) 3222-5524','recepcao@otoclinicathe.com.br','bionuclear.jpg'),
(26,'Bionuclear','Psicologia',NULL,NULL,'(86) 3222-5524','recepcao@otoclinicathe.com.br','bionuclear.jpg'),
(27,'Bionuclear','Ortopedia',NULL,NULL,'(86) 3222-5524','recepcao@otoclinicathe.com.br','bionuclear.jpg'),
(28,'Hospital Hti','Cirurgia Geral','Urologia',NULL,'(86) 3215-6700',NULL,'hti.jpg'),
(29,'Hospital Hti','Clínico Geral','Urologia',NULL,'(86) 3215-6700',NULL,'hti.jpg'),
(30,'Hospital Hti','Demartologia','Urologia',NULL,'(86) 3215-6700',NULL,'hti.jpg'),
(31,'Hospital Hti','Endocrinologia','Urologia',NULL,'(86) 3215-6700',NULL,'hti.jpg'),
(32,'Hospital Hti','Fonoaudiologia','Urologia',NULL,'(86) 3215-6700',NULL,'hti.jpg'),
(33,'Hospital Hti','Gastroenterologia','Urologia',NULL,'(86) 3215-6700',NULL,'hti.jpg'),
(34,'Hospital Hti','Ginecologia','Urologia',NULL,'(86) 3215-6700',NULL,'hti.jpg'),
(35,'Hospital Hti','Nefrologia','Urologia',NULL,'(86) 3215-6700',NULL,'hti.jpg'),
(36,'Hospital Hti','Neurologia','Urologia',NULL,'(86) 3215-6700',NULL,'hti.jpg'),
(37,'Hospital Hti','Nutrição','Urologia',NULL,'(86) 3215-6700',NULL,'hti.jpg'),
(38,'Hospital Hti','Oncologia','Urologia',NULL,'(86) 3215-6700',NULL,'hti.jpg'),
(39,'Hospital Hti','Ortopedia','Urologia',NULL,'(86) 3215-6700',NULL,'hti.jpg'),
(40,'Hospital Hti','Pediatria','Urologia',NULL,'(86) 3215-6700',NULL,'hti.jpg'),
(41,'Hospital Hti','Proctologia','Urologia',NULL,'(86) 3215-6700',NULL,'hti.jpg'),
(42,'Hospital Hti','Psiquiatria','Urologia',NULL,'(86) 3215-6700',NULL,'hti.jpg'),
(43,'Hospital Hti','Radiologia','Urologia',NULL,'(86) 3215-6700',NULL,'hti.jpg'),
(44,'Hospital Hti','Urologia','',NULL,'(86) 3215-6700',NULL,'hti.jpg'),
(46,'Psico\'sCentro & Fono\'sCentro','Psicologia',NULL,NULL,'(86) 3233-9553','contato@clinicapsicocentro.com.br','psicoscentro.png'),
(47,'Psico\'sCentro & Fono\'sCentro','Fonoaudiologia',NULL,NULL,'(86) 3233-9553','contato@clinicapsicocentro.com.br','psicoscentro.png'),
(48,'Psico\'sCentro & Fono\'sCentro','Arteterapia',NULL,NULL,'(86) 3233-9553','contato@clinicapsicocentro.com.br','psicoscentro.png'),
(49,'Psico\'sCentro & Fono\'sCentro','Nutrição Terapêutica',NULL,NULL,'(86) 3233-9553','contato@clinicapsicocentro.com.br','psicoscentro.png'),
(50,'Lucídio Portela','Neurologia',NULL,NULL,'(86) 3221-3062',NULL,'lucidio.jpg'),
(51,'Lucídio Portela','Neuropediatria',NULL,NULL,'(86) 3221-3062',NULL,'lucidio.jpg'),
(52,'Lucídio Portela','Neurofisiologia clínica',NULL,NULL,'(86) 3221-3062',NULL,'lucidio.jpg'),
(53,'Lucídio Portela','Ginecologia e obstetrícia',NULL,NULL,'(86) 3221-3062',NULL,'lucidio.jpg'),
(54,'Lucídio Portela','Ginecologia e obstetrícia',NULL,NULL,'(86) 3221-3062',NULL,'lucidio.jpg'),
(55,'Lucídio Portela','Gastroenterologia',NULL,NULL,'(86) 3221-3062',NULL,'lucidio.jpg'),
(56,'Lucídio Portela','Mastologia',NULL,NULL,'(86) 3221-3062',NULL,'lucidio.jpg'),
(57,'Lucídio Portela','Endocrinologia',NULL,NULL,'(86) 3221-3062',NULL,'lucidio.jpg'),
(58,'Lucídio Portela','Dermatologia',NULL,NULL,'(86) 3221-3062',NULL,'lucidio.jpg'),
(59,'Lucídio Portela','Endoscopia',NULL,NULL,'(86) 3221-3062',NULL,'lucidio.jpg'),
(60,'Lucídio Portela','Clínico geral',NULL,NULL,'(86) 3221-3062',NULL,'lucidio.jpg'),
(61,'Lucídio Portela','Reumatologia',NULL,NULL,'(86) 3221-3062',NULL,'lucidio.jpg'),
(62,'Lucídio Portela','Medicina intensiva',NULL,NULL,'(86) 3221-3062',NULL,'lucidio.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
