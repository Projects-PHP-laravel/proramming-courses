-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.31-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for eelu
DROP DATABASE IF EXISTS `eelu`;
CREATE DATABASE IF NOT EXISTS `eelu` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `eelu`;

-- Dumping structure for table eelu.exams
DROP TABLE IF EXISTS `exams`;
CREATE TABLE IF NOT EXISTS `exams` (
  `exam_id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_section` varchar(150) NOT NULL DEFAULT '0',
  `exam_level` varchar(150) NOT NULL DEFAULT '0',
  `exam_term` varchar(150) NOT NULL DEFAULT '0',
  `exam_course_name` varchar(300) NOT NULL DEFAULT '0',
  `exam_file_path` varchar(500) DEFAULT NULL,
  `exam_file_name` varchar(300) DEFAULT NULL,
  `exam_type` varchar(150) DEFAULT NULL,
  `exam_from` varchar(50) DEFAULT NULL,
  `exam_to` varchar(50) DEFAULT NULL,
  `exam_doctor_name` varchar(500) DEFAULT NULL,
  `exam_notes` text,
  PRIMARY KEY (`exam_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table eelu.exams: ~0 rows (approximately)
DELETE FROM `exams`;
/*!40000 ALTER TABLE `exams` DISABLE KEYS */;
/*!40000 ALTER TABLE `exams` ENABLE KEYS */;

-- Dumping structure for table eelu.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) DEFAULT NULL,
  `users_password` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table eelu.users: ~0 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`users_id`, `username`, `users_password`) VALUES
	(1, 'admin', '123456');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
