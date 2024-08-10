/*
SQLyog Ultimate v13.2.1 (64 bit)
MySQL - 10.4.32-MariaDB : Database - student_mgt_php
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`student_mgt_php` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `student_mgt_php`;

/*Table structure for table `students` */

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `address` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `registered_date` date NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `students` */

insert  into `students`(`id`,`lname`,`fname`,`mname`,`address`,`email`,`registered_date`,`status`) values 
(1,'Kris','Lauriane','Kris','14/99 Cassin Spring Apt. 916, Buhi 4574 Camarines Sur','jarrett20@stamm.com','2024-05-25',1),
(2,'Gislason','Ford','Gislason','78/73 Jerde Hills Apt. 413, Marihatag 6364 Sorsogon','becker.tia@terry.com','2024-05-22',1),
(3,'Dickens','Eloy','Dickens','21 Abshire Lake Suite 529, Poblacion, Digos 7297 Negros Oriental','jaime05@wiza.com','2024-06-11',1),
(4,'Willms','Maddison','Willms','43/40 McCullough Skyway, Poblacion, Balanga 3911 La Union','dock.batz@schaden.com','2024-04-21',2),
(5,'Balistreri','Cleo','Balistreri','53 Feest Way Apt. 949, Poblacion, San Jose 7714 Bulacan','russel.tatyana@johnston.com','2024-05-10',1),
(6,'Balistreri','Andre','Balistreri','98 Nienow Drive Apt. 318, Poblacion, Davao City 3729 Negros Oriental','lacy87@bauch.com','2024-03-17',0),
(7,'Hyatt','Roxane','Hyatt','53A Dietrich Square, Poblacion, Cavite City 0017 Antique','myra72@pouros.biz','2024-03-09',0),
(8,'Stroman','Phoebe','Stroman','31/72 Sauer Crest Apt. 862, San Ildefonso 8228 Maguindanao','helen.macejkovic@ortiz.org','2024-03-22',2),
(9,'VonRueden','Jonathan','VonRueden','23/96 Wisoky Orchard, Sariaya 2183 Antique','blanda.saige@denesik.com','2024-07-31',1),
(10,'Tillman','Sandy','Tillman','42A/96 Beer Ferry, Poblacion, Cagayan de Oro 0806 Nueva Vizcaya','boyer.garnett@buckridge.com','2024-07-18',1),
(11,'Orn','Bill','Orn','67A/21 Batz Glens, Santander 1816 Lanao del Norte','schroeder.edgar@rowe.com','2024-03-08',1),
(12,'Buckridge','Yoshiko','Buckridge','69A/86 Rippin Spring Apt. 771, Bokod 4819 Bulacan','dubuque.novella@weissnat.net','2024-03-17',1),
(13,'Stracke','Julie','Stracke','90A Hane Lodge, Libon 7752 Guimaras','stan75@ohara.net','2024-01-23',0),
(14,'Greenfelder','Gwendolyn','Greenfelder','93 Wuckert Forest Suite 511, Poblacion, Lucena 3465 Rizal','london53@labadie.info','2024-02-08',1),
(15,'Langworth','Jedediah','Langworth','19A Durgan Isle Suite 984, Poblacion, Makati 1899 Sorsogon','geraldine.abernathy@jakubowski.com','2024-06-08',0),
(16,'Bruen','Cole','Bruen','91A/74 Nolan Isle, Poblacion, Dapitan 8225 Negros Occidental','julius.hills@boyer.com','2024-07-27',2),
(17,'Hand','Rodrigo','Hand','74A/89 Kris Greens Suite 952, Poblacion, Muntinlupa 6460 Lanao del Sur','bertrand92@howe.com','2024-05-05',0),
(18,'Kirlin','Terrell','Kirlin','30A Volkman Mews Apt. 291, Barili 9264 Capiz','luella10@pfeffer.com','2024-06-05',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
