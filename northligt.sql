-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.19-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for northligt
CREATE DATABASE IF NOT EXISTS `northligt` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `northligt`;

-- Dumping structure for table northligt.emailtotarget_tbl
CREATE TABLE IF NOT EXISTS `emailtotarget_tbl` (
  `target_email` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `creation_timestamp` datetime NOT NULL,
  `sent_timestamp` datetime NOT NULL,
  `responded` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Somehow know if target has responded - listen if user enters link? If ''Y'' - stop sending',
  `reminder_sent_count` tinyint(2) NOT NULL DEFAULT '0',
  KEY `FK_emailtotarget_tbl_users_tbl` (`userid`),
  CONSTRAINT `FK_emailtotarget_tbl_users_tbl` FOREIGN KEY (`userid`) REFERENCES `users_tbl` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table northligt.emailtotarget_tbl: ~0 rows (approximately)
/*!40000 ALTER TABLE `emailtotarget_tbl` DISABLE KEYS */;
/*!40000 ALTER TABLE `emailtotarget_tbl` ENABLE KEYS */;

-- Dumping structure for table northligt.target_tbl
CREATE TABLE IF NOT EXISTS `target_tbl` (
  `email` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL,
  KEY `FK_target_tbl_users_tbl` (`userid`),
  CONSTRAINT `FK_target_tbl_users_tbl` FOREIGN KEY (`userid`) REFERENCES `users_tbl` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table northligt.target_tbl: ~7 rows (approximately)
/*!40000 ALTER TABLE `target_tbl` DISABLE KEYS */;
INSERT INTO `target_tbl` (`email`, `userid`) VALUES
	('test123@gmail.com', 1),
	('user1@hotmail.com', 1),
	('user2@outlook.com', 1),
	('helo@gmail.com', 1),
	('sio@sino.com', 1),
	('sino@sin.com', 1),
	('esdf@gmail.com', 1);
/*!40000 ALTER TABLE `target_tbl` ENABLE KEYS */;

-- Dumping structure for table northligt.users_tbl
CREATE TABLE IF NOT EXISTS `users_tbl` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `userpass` varchar(200) NOT NULL,
  `company_name` varchar(100) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `address` varchar(200) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `creation_timestamp` datetime DEFAULT NULL,
  `edited_timestamp` datetime DEFAULT NULL,
  `placeid` varchar(100) NOT NULL,
  `subscription_start` varchar(100) DEFAULT '0',
  `subscription_end` varchar(100) DEFAULT '0',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table northligt.users_tbl: ~7 rows (approximately)
/*!40000 ALTER TABLE `users_tbl` DISABLE KEYS */;
INSERT INTO `users_tbl` (`userid`, `username`, `userpass`, `company_name`, `email`, `address`, `phone`, `creation_timestamp`, `edited_timestamp`, `placeid`, `subscription_start`, `subscription_end`) VALUES
	(1, 'test', 'e10adc3949ba59abbe56e057f20f883e', 'Venus', 'test@gmail.com', 'sdf', 'wer', '2018-04-17 08:30:07', '2018-04-17 11:18:47', '18922324', '0', '0'),
	(2, 'test1', 'e10adc3949ba59abbe56e057f20f883e', 'testcompany', 'test1@gmail.com', '', '', '2018-04-17 09:16:03', NULL, 'asdfasdf', '0', '0'),
	(4, 'test4', 'e10adc3949ba59abbe56e057f20f883e', 'hello', 'test4@gmail.com', NULL, NULL, '2018-04-18 08:47:23', NULL, '123456789', '0', '0'),
	(5, 'test5', 'e10adc3949ba59abbe56e057f20f883e', 'asdf', 'test5@gmail.com', NULL, NULL, '2018-04-18 08:53:43', NULL, 'asdf', '0', '0'),
	(6, 'test6', 'e10adc3949ba59abbe56e057f20f883e', 'asdf', 'test6@gmail.com', NULL, NULL, '2018-04-18 08:56:25', NULL, 'asdf', '0', '0'),
	(7, 'sd', 'e10adc3949ba59abbe56e057f20f883e', 'sdf', 'we@gs.com', NULL, NULL, '2018-04-18 08:57:22', NULL, 'sdfsd', '0', '0'),
	(8, 'a231', 'e10adc3949ba59abbe56e057f20f883e', 'dasf21', 'sdf@sdf.ciis2', 'sdfasd', 'a2334', '2018-04-18 08:58:38', '2018-04-18 09:23:40', '155dsf', '0', '0');
/*!40000 ALTER TABLE `users_tbl` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
