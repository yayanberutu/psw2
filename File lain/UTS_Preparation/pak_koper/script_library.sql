/*
SQLyog Ultimate v8.55 
MySQL - 5.5.5-10.1.36-MariaDB : Database - library
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`library` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `library`;

/*Table structure for table `account` */

DROP TABLE IF EXISTS `account`;

CREATE TABLE `account` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `username` varchar(64) NOT NULL COMMENT 'Username',
  `password` varchar(64) NOT NULL COMMENT 'Password',
  `last_login` datetime DEFAULT NULL COMMENT 'Last Login',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `account` */

insert  into `account`(`id`,`username`,`password`,`last_login`) values (1,'admin','admin',NULL),(2,'batara','batara',NULL);

/*Table structure for table `author` */

DROP TABLE IF EXISTS `author`;

CREATE TABLE `author` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `first_name` varchar(64) NOT NULL COMMENT 'First Name',
  `last_name` varchar(64) DEFAULT NULL COMMENT 'Last Name',
  `e_mail` varchar(128) DEFAULT NULL COMMENT 'E-mail',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `author` */

insert  into `author`(`id`,`first_name`,`last_name`,`e_mail`) values (1,'Wiro','Sableng','wiro.s@authors.org'),(2,'Jaka','Sembung','jaka.s@authors.org'),(3,'Saras','008','saras.0@authors.org'),(4,'Arman','Maulagi','arman.m@authors.org'),(5,'Pandapotan','Bangsa','pandapotan@b@authors.org');

/*Table structure for table `book` */

DROP TABLE IF EXISTS `book`;

CREATE TABLE `book` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `author_id` int(10) unsigned DEFAULT NULL COMMENT 'Author ID',
  `publisher_id` int(10) unsigned DEFAULT NULL COMMENT 'Publisher ID',
  `isbn` varchar(16) DEFAULT NULL COMMENT 'ISBN',
  `title` varchar(64) DEFAULT NULL COMMENT 'Title',
  `price` double DEFAULT NULL COMMENT 'Price',
  `year` char(4) DEFAULT NULL COMMENT 'Year',
  `description` text COMMENT 'Description',
  PRIMARY KEY (`id`),
  KEY `publisher_id` (`publisher_id`),
  KEY `author_id` (`author_id`) USING BTREE,
  CONSTRAINT `fk_author` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_publisher` FOREIGN KEY (`publisher_id`) REFERENCES `publisher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `book` */

insert  into `book`(`id`,`author_id`,`publisher_id`,`isbn`,`title`,`price`,`year`,`description`) values (1,1,1,'0123123001','Ada gula gak ada semut',11.02,'2013','\"Ada gula ada semut? Tidak!\", \"Sapi dapat berlari di atas air\" dan banyak keunikan di dunia ini yang dapat ditemukan di buku ini dan Anda akan semakin mengagumi kehidupan.'),(2,2,1,'0123123002','Bukan pesan biasa',14.28,'2013','Telodong Cu Lun, seorang bintang kenamaan yang digandrungi remaja alay saat ini, menemukan sebuah gambar berbentuk bulat di dinding kamarnya. Keanehan lain yang ia temukan adalah kosongnya tudung saji di ruang makan dan kosongnya dompet. Suasana makin mencekam ketika sebuah pesan singkat diterimanya melalui telepon gengamnya, isi pesan itu tidak biasa... temukan kisahnya!'),(3,3,2,'0123123003','Celana di jemuran ASPA, merah berbunga',7.85,'2013','Pada saat liburan semester yang lalu, seorang penanggungjawab bidang akademik berjalan di daerah jemuran Asrama Putra yang tengah ditinggal para penghuninya berlibur, namun karena beberapa hal ada beberapa mahasiswa yang masih tinggal di gedung megah itu. Terlihat sebuah celana merah dengan corak bunga bangkai, terjatuh dari jemuran pakaian, alamak! Investigasi dilakukan, dan hal tidak disangka pun terkuak.'),(4,4,1,'0123123004','Di mana ada PHP, aman!',18.99,'2014','Pengembang web sering kesulitan dalam memanajemen situs statis yang mereka kembangkan. Mereka harus mengubah kode yang sudah mereka tulis setiap kali ada perubahan konten. PHP sebagai salah satu server-side programming language dapat mengeliminir persoalan tersebut. Buku ini menjelaskan bagaimana caranya.'),(5,5,2,'0123123005','Tiki-taka pemrograman',10.5,'2014','Tidak mudah memahami konsep pemrograman. Buku ini memberikan tutorial dengan cara pandang berbeda untuk memahami konsep-konsep tersebut. Dilangkapi dengan contoh kasus yang mudah dipahami dan penyelesaian yang sistematis dan tepat sasaran.');

/*Table structure for table `publisher` */

DROP TABLE IF EXISTS `publisher`;

CREATE TABLE `publisher` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(64) NOT NULL COMMENT 'Name',
  `address` varchar(64) DEFAULT NULL COMMENT 'Address',
  `email` varchar(128) DEFAULT NULL COMMENT 'E-mail',
  `phone` varchar(16) DEFAULT NULL COMMENT 'Phone',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `publisher` */

insert  into `publisher`(`id`,`name`,`address`,`email`,`phone`) values (1,'Blahblah Publisher','Jl. Koding no.172/22a','blah@publishers.org',NULL),(2,'Kiri-Kanan Publisher','Jl. Source Code Indah no. 2/22','kirkan@publishers.org',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
