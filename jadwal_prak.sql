/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - jadwal_prak
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`jadwal_prak` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `jadwal_prak`;

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `npm` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `login` */

insert  into `login`(`id`,`npm`,`nama`,`username`,`password`,`gambar`) values 
(1,'065117136','Alif Ayatulloh A','alif','099a147c0c6bcd34009896b2cc88633c',NULL);

/*Table structure for table `tb_asdos` */

DROP TABLE IF EXISTS `tb_asdos`;

CREATE TABLE `tb_asdos` (
  `id_asdos` int(11) NOT NULL AUTO_INCREMENT,
  `nama_asdos` varchar(50) DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  PRIMARY KEY (`id_asdos`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_asdos` */

insert  into `tb_asdos`(`id_asdos`,`nama_asdos`,`gambar`) values 
(1,'Novia','06022020163058novia.jpg'),
(2,'Atik','06022020163142atik.jpg'),
(3,'Naya','06022020163154nay.jpg'),
(4,'Irham','06022020163202irham.jpg'),
(5,'Alif','06022020163217aing.jpg'),
(6,'Arif','06022020163303arif.jpg'),
(7,'Dewi','06022020163314dew.jpg'),
(8,'M. Rizki','06022020163327bolson.jpg'),
(9,'Gozali','06022020163341gozali.jpg'),
(10,'Komang','06022020163351km.jpg');

/*Table structure for table `tb_jdwl_ganjil` */

DROP TABLE IF EXISTS `tb_jdwl_ganjil`;

CREATE TABLE `tb_jdwl_ganjil` (
  `id_jdwl_ganjil` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(15) DEFAULT NULL,
  `matkul` varchar(50) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `asdos_1` varchar(50) DEFAULT NULL,
  `asdos_2` varchar(50) DEFAULT NULL,
  `lab` varchar(50) DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` text DEFAULT NULL,
  PRIMARY KEY (`id_jdwl_ganjil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_jdwl_ganjil` */

/*Table structure for table `tb_jdwl_genap` */

DROP TABLE IF EXISTS `tb_jdwl_genap`;

CREATE TABLE `tb_jdwl_genap` (
  `id_jdwl_genap` int(11) NOT NULL AUTO_INCREMENT,
  `hari` varchar(15) DEFAULT NULL,
  `matkul` varchar(50) DEFAULT NULL,
  `kelas` varchar(10) DEFAULT NULL,
  `asdos_1` varchar(50) DEFAULT NULL,
  `asdos_2` varchar(50) DEFAULT NULL,
  `lab` varchar(50) DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  PRIMARY KEY (`id_jdwl_genap`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_jdwl_genap` */

insert  into `tb_jdwl_genap`(`id_jdwl_genap`,`hari`,`matkul`,`kelas`,`asdos_1`,`asdos_2`,`lab`,`jam_mulai`,`jam_selesai`) values 
(1,'Monday','Jaringan Komputer','3/L','Novia','Atik','Lab. Organisasi Komputer','07:30:00','09:00:00'),
(2,'Monday','Sistem Pemrograman Mikroprosessor','3/G','Naya','Alif','Lab. Mikrokontroller','07:30:00','09:00:00'),
(3,'Monday','Keamanan Jaringan','5/E','Irham','Arif','Lab. Organisasi Komputer','09:00:00','10:30:00'),
(4,'Monday','Sistem Digital 2','3/J','Komang','Gozali','Lab. Mikrokontroller','09:00:00','10:30:00');

/*Table structure for table `tb_matkul_ganjil` */

DROP TABLE IF EXISTS `tb_matkul_ganjil`;

CREATE TABLE `tb_matkul_ganjil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_matkul` varchar(20) DEFAULT NULL,
  `nama_matkul` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_matkul_ganjil` */

insert  into `tb_matkul_ganjil`(`id`,`kode_matkul`,`nama_matkul`) values 
(1,'adminjar','Administrasi Jaringan'),
(2,'elektro','Elektronika'),
(3,'sigit','Sistem Digital 1'),
(4,'iot','Sistem Otomasi/IOT'),
(5,'rbtk','Robotik'),
(6,'sim','Sistem Interface Mikrokontroller'),
(7,'sismik','Sistem Mikroprosessor');

/*Table structure for table `tb_matkul_genap` */

DROP TABLE IF EXISTS `tb_matkul_genap`;

CREATE TABLE `tb_matkul_genap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_matkul` varchar(20) DEFAULT NULL,
  `nama_matkul` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_matkul_genap` */

insert  into `tb_matkul_genap`(`id`,`kode_matkul`,`nama_matkul`) values 
(1,'jarkom','Jaringan Komputer'),
(2,'kejar','Keamanan Jaringan'),
(3,'orkom','Organisasi Komputer'),
(4,'pda','Pemrograman Data Analis'),
(5,'si','Sistem Instrumentasi'),
(6,'sigit2','Sistem Digital 2'),
(7,'sispemik','Sistem Pemrograman Mikroprosessor');

/*Table structure for table `tb_slider` */

DROP TABLE IF EXISTS `tb_slider`;

CREATE TABLE `tb_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caption` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_slider` */

insert  into `tb_slider`(`id`,`caption`,`gambar`) values 
(1,'Tim Robotik 2019','IMG_1084.JPG'),
(5,'Tim Robotik & Pak Andi Chairunnas','IMG_1086.JPG'),
(6,'KRI 2019','IMG_1089.JPG');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
