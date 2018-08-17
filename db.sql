/*
SQLyog Community v13.0.1 (64 bit)
MySQL - 5.7.19 : Database - training_moh
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`training_moh` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `training_moh`;

/*Table structure for table `kursus` */

DROP TABLE IF EXISTS `kursus`;

CREATE TABLE `kursus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tajuk` varchar(255) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `tarikh` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `kursus` */

insert  into `kursus`(`id`,`tajuk`,`lokasi`,`tarikh`,`created_at`,`updated_at`) values 
(1,'Laravel for Beginner','KBS..','2018-08-14','2018-08-17 11:03:22','2018-08-17 07:15:55'),
(2,'Codeigniter for Beginner','UPSI123','2018-08-06','2018-08-17 11:03:44','2018-08-17 06:51:58'),
(3,'Talend Open Studio','MOF','2018-08-13','2018-08-17 04:11:09','2018-08-17 04:11:09');

/*Table structure for table `peserta` */

DROP TABLE IF EXISTS `peserta`;

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kursus` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `kehadiran` char(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `peserta` */

insert  into `peserta`(`id`,`id_kursus`,`id_user`,`kehadiran`,`created_at`,`updated_at`) values 
(1,1,1,'Y',NULL,NULL),
(2,2,1,'N',NULL,NULL),
(3,3,1,'Y',NULL,NULL);

/*Table structure for table `respon` */

DROP TABLE IF EXISTS `respon`;

CREATE TABLE `respon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_peserta` int(11) DEFAULT NULL,
  `respon` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `respon` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descr` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `roles` */

/*Table structure for table `user_role` */

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user_role` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`created_at`,`updated_at`,`remember_token`) values 
(1,'Azman bin Zakaria','azman1204@yahoo.com','$2y$10$SvSN/aCatF7LvXCMzfBTh.na0WPEYD7ODmADM30ThEIctJnw829jG',NULL,NULL,'tKQvLeO8YTkBBU6EFSoCUjopoWJjrznjtYib2rfkYo93M8BpAKC9r94B4esF');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
