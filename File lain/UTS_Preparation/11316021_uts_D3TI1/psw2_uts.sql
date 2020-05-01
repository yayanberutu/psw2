/*
SQLyog Enterprise - MySQL GUI v6.5
MySQL - 5.0.51b-community-nt : Database - psw2_uts
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

create database if not exists `shop`;

USE `shop`;

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `name` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `customers` */

insert  into `customers`(`id`,`username`,`password`,`name`) values (1,'test','test','tester');

/*Table structure for table `item_categories` */

DROP TABLE IF EXISTS `item_categories`;

CREATE TABLE `item_categories` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(45) NOT NULL,
  `desc` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `item_categories` */

insert  into `item_categories`(`id`,`name`,`desc`) values (1,'PDA smartphone','PDA atau smarthphone edisi terbaru'),(2,'jadul phone','handphone jadoel yang perlu dilestarikan'),(3,'netbook','netbook atau laptop generasi terbaru'),(4,'music player','portable digital music player terbaru');

/*Table structure for table `items` */

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `id` int(11) NOT NULL auto_increment,
  `item_category_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `desc` varchar(255) default NULL,
  `img` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_items_items_category` (`item_category_id`),
  CONSTRAINT `fk_items_items_category` FOREIGN KEY (`item_category_id`) REFERENCES `item_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COMMENT='		';

/*Data for the table `items` */

insert  into `items`(`id`,`item_category_id`,`name`,`desc`,`img`,`price`,`stock`) values (1,1,'iphone','Iphone generasi terbaru dari apple','iphone.jpg',7000000,6),(2,1,'nexus one','smarthphone generasi terbaru dari google dan htc','nexus.jpg',7000000,2),(3,4,'ipod','digital music player dari apple yang sudah dilengkapi dengan kamera digital','ipod.jpg',2000000,3),(4,3,'ipad',NULL,'ipad.jpg',10000000,15),(5,3,'eepc','netbook terbaru dari asus','eepc.jpg',5000000,5),(6,2,'sony erricson xxx','cellphone generasi awal keluaran sony erricson','erricson.jpg',575000,2),(7,2,'Nokia xxx','nokia generasi awal','nokia.jpg',574500,5);

/*Table structure for table `transaction_items` */

DROP TABLE IF EXISTS `transaction_items`;

CREATE TABLE `transaction_items` (
  `id` int(11) NOT NULL auto_increment,
  `transaction_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_transaction_items_items` (`item_id`),
  KEY `fk_transaction_items_transactions` (`transaction_id`),
  CONSTRAINT `fk_transaction_items_items` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_transaction_items_transactions` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transaction_items` */

/*Table structure for table `transactions` */

DROP TABLE IF EXISTS `transactions`;

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL auto_increment,
  `customer_id` int(11) default NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `fk_transactions_customers` (`customer_id`),
  CONSTRAINT `fk_transactions_customers` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `transactions` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
