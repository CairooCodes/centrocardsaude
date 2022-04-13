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
