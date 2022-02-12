/*
SQLyog Community
MySQL - 10.4.17-MariaDB : Database - centrocard
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `logs` */

DROP TABLE IF EXISTS `logs`;

CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `data_log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `logs` */

insert  into `logs`(`id`,`name`,`data_log`,`type`) values 
(1,'Cairo Felipe','2022-01-17 21:02:29','login'),
(2,'Alexandre Barros','2022-01-18 22:15:59','login'),
(3,'Cairo Felipe','2022-01-18 22:17:28','login');

/*Table structure for table `produtos` */

DROP TABLE IF EXISTS `produtos`;

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `data_add` timestamp NOT NULL DEFAULT current_timestamp(),
  `descricao` varchar(2000) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `img2` varchar(200) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `img3` varchar(200) DEFAULT NULL,
  `img4` varchar(200) DEFAULT NULL,
  `img5` varchar(200) DEFAULT NULL,
  `img6` varchar(200) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `cod` varchar(50) DEFAULT NULL,
  `altura` varchar(50) DEFAULT NULL,
  `profu` varchar(50) DEFAULT NULL,
  `largura` varchar(50) DEFAULT NULL,
  `cor1` varchar(50) DEFAULT NULL,
  `cor2` varchar(50) DEFAULT NULL,
  `cor3` varchar(50) DEFAULT NULL,
  `cor4` varchar(50) DEFAULT NULL,
  `cor5` varchar(50) DEFAULT NULL,
  `desconto` varchar(50) DEFAULT NULL,
  `valor_desconto` varchar(50) DEFAULT NULL,
  `peso` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `produtos` */

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
