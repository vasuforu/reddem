/*
SQLyog Community v11.52 (64 bit)
MySQL - 5.6.11 : Database - helpmates
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`helpmates` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `helpmates`;

/*Table structure for table `donorlist` */

DROP TABLE IF EXISTS `donorlist`;

CREATE TABLE `donorlist` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `mboile` int(20) DEFAULT NULL,
  `bgroup` varchar(20) DEFAULT NULL,
  `adress` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`sno`,`email`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `donorlist` */

insert  into `donorlist`(`sno`,`name`,`password`,`email`,`mboile`,`bgroup`,`adress`) values (1,'vaasu','123654','852741',2368523,'33333','3333333'),(2,'vasuforu','vasu@549','vasudevareddy@gmail.com',2147483647,'0+','kadapa'),(3,'vasuforu','vasu@549','vasudevareddy@gmail.com',2147483647,'0+','kadapa'),(4,'vasudevareddy549@gmail.com','vasudeva','email@gmail.com',2147483647,'AB-','kadapa'),(5,'vasudevareddy549@gmail.com','vasudeva','em@gmail.com',2147483647,'0+','kadapa'),(6,'vasudevareddy549@gmail.com','vasudeva','em@gmail.com',2147483647,'0+','kadapa'),(7,'vasudevareddy549@gmail.com','vasudeva','',0,'',''),(8,'vasudevareddy549@gmail.com','vasudeva','',0,'',''),(9,'vasudevareddy549@gmail.com','vasudeva','',0,'',''),(10,'vasudevareddy549@gmail.com','vasudeva','',0,'',''),(11,'vasudevareddy549@gmail.com','vasudeva','xzcxzc@gmail.com',2147483647,'B+','kadap'),(12,'vasudevareddy549@gmail.com','vasudeva','xzcxzc@gmail.com',2147483647,'B+','kadap'),(13,'vasudevareddy549@gmail.com','vasudeva','xzcxzc@gmail.com',2147483647,'B+','kadap'),(14,'vasudevareddy549@gmail.com','vasudeva','xzcxzc@gmail.com',2147483647,'B+','kadap'),(15,'','','',0,'',''),(16,'vasudevareddy549@gmail.com','vasudeva','',0,'',''),(17,'','','',0,'',''),(18,'','','',0,'','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
