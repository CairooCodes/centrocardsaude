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
/*Table structure for table `logs` */

DROP TABLE IF EXISTS `logs`;

CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `data_log` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `logs` */

insert  into `logs`(`id`,`name`,`data_log`,`type`) values 
(1,'Cairo Felipe','2022-01-17 21:02:29','login'),
(2,'Alexandre Barros','2022-01-18 22:15:59','login'),
(3,'Cairo Felipe','2022-01-18 22:17:28','login'),
(4,'Cairo Felipe','2022-01-19 10:59:03','login'),
(5,'Cairo Felipe','2022-01-19 11:39:21','login'),
(6,'Cairo Felipe','2022-01-24 17:21:24','login');

/*Table structure for table `plans` */

DROP TABLE IF EXISTS `plans`;

CREATE TABLE `plans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `description` varchar(1500) DEFAULT NULL,
  `b1` varchar(500) DEFAULT NULL,
  `icon1` varchar(200) DEFAULT NULL,
  `b2` varchar(500) DEFAULT NULL,
  `icon2` varchar(200) DEFAULT NULL,
  `b3` varchar(500) DEFAULT NULL,
  `icon3` varchar(200) DEFAULT NULL,
  `b4` varchar(500) DEFAULT NULL,
  `icon4` varchar(200) DEFAULT NULL,
  `b5` varchar(500) DEFAULT NULL,
  `icon5` varchar(200) DEFAULT NULL,
  `b6` varchar(500) DEFAULT NULL,
  `icon6` varchar(200) DEFAULT NULL,
  `b7` varchar(500) DEFAULT NULL,
  `icon7` varchar(200) DEFAULT NULL,
  `b8` varchar(500) DEFAULT NULL,
  `icon8` varchar(200) DEFAULT NULL,
  `b9` varchar(500) DEFAULT NULL,
  `icon9` varchar(200) DEFAULT NULL,
  `b10` varchar(500) DEFAULT NULL,
  `icon10` varchar(200) DEFAULT NULL,
  `b11` varchar(500) DEFAULT NULL,
  `icon11` varchar(200) DEFAULT NULL,
  `b12` varchar(500) DEFAULT NULL,
  `icon12` varchar(200) DEFAULT NULL,
  `b13` varchar(500) DEFAULT NULL,
  `icon13` varchar(200) DEFAULT NULL,
  `b14` varchar(1000) DEFAULT NULL,
  `icon14` varchar(200) DEFAULT NULL,
  `b15` varchar(500) DEFAULT NULL,
  `icon15` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `plans` */

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
