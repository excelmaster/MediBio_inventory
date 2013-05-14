-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.0.51b-community-nt-log - MySQL Community Edition (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2013-05-13 11:54:28
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for invt_mb
CREATE DATABASE IF NOT EXISTS `invt_mb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `invt_mb`;


-- Dumping structure for table invt_mb.group_init
CREATE TABLE IF NOT EXISTS `group_init` (
  `id` int(10) NOT NULL auto_increment,
  `grupo` int(10) NOT NULL,
  `pageRedirect` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `grupo` (`grupo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='begin page to init the app for the groupid of session';

-- Dumping data for table invt_mb.group_init: ~2 rows (approximately)
DELETE FROM `group_init`;
/*!40000 ALTER TABLE `group_init` DISABLE KEYS */;
INSERT INTO `group_init` (`id`, `grupo`, `pageRedirect`) VALUES
	(1, 1, 'grupo1.php'),
	(2, 2, 'grupo2.php');
/*!40000 ALTER TABLE `group_init` ENABLE KEYS */;


-- Dumping structure for table invt_mb.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL auto_increment,
  `prinombre` varchar(100) NOT NULL,
  `demasnombres` varchar(100) default NULL,
  `priapellido` varchar(100) NOT NULL,
  `segapellido` varchar(100) default NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rol` int(2) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `grupo` (`rol`),
  CONSTRAINT `grupo` FOREIGN KEY (`rol`) REFERENCES `group_init` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='tabla de usuarios del sistema';

-- Dumping data for table invt_mb.users: ~2 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `prinombre`, `demasnombres`, `priapellido`, `segapellido`, `username`, `password`, `rol`) VALUES
	(1, 'Humberto', '-', 'Fierro', 'Prieto', 'hfierro', '79879282', 1),
	(2, 'secretaria', '-', 'colegio', '-', 'secre', '123', 2);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
