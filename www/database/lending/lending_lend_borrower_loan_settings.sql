CREATE DATABASE  IF NOT EXISTS `lending` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `lending`;
-- MySQL dump 10.13  Distrib 5.5.9, for Win32 (x86)
--
-- Host: localhost    Database: lending
-- ------------------------------------------------------
-- Server version	5.1.36-community-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `lend_borrower_loan_settings`
--

DROP TABLE IF EXISTS `lend_borrower_loan_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lend_borrower_loan_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loan_id` int(11) DEFAULT NULL,
  `borrower_loan_id` int(11) DEFAULT NULL,
  `lname` varchar(90) DEFAULT NULL,
  `interest` float DEFAULT NULL,
  `terms` varchar(45) DEFAULT NULL,
  `frequency` varchar(45) DEFAULT NULL,
  `late_fee` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lend_borrower_loan_settings`
--

LOCK TABLES `lend_borrower_loan_settings` WRITE;
/*!40000 ALTER TABLE `lend_borrower_loan_settings` DISABLE KEYS */;
INSERT INTO `lend_borrower_loan_settings` VALUES (5,8,24,'2.5% Interest',2.5,'12','2 Weeks',NULL),(4,8,23,'2.5% Interest',2.5,'12','2 Weeks',NULL),(3,8,22,'2.5% Interest',2.5,'12','2 Weeks',NULL),(6,8,25,'2.5% Interest',2.5,'12','2 Weeks',NULL),(7,8,26,'2.5% Interest',2.5,'12','2 Weeks',NULL),(8,8,27,'2.5% Interest',2.5,'12','2 Weeks',NULL),(9,8,28,'2.5% Interest',2.5,'12','2 Weeks',NULL),(10,8,29,'2.5% Interest',2.5,'12','2 Weeks',NULL),(11,8,30,'2.5% Interest',2.5,'12','2 Weeks',NULL),(12,8,31,'2.5% Interest',2.5,'12','2 Weeks',NULL),(13,8,34,'2.5% Interest',2.5,'12','2 Weeks',NULL),(14,9,35,'3 % interest',3,'12','2 Weeks',NULL);
/*!40000 ALTER TABLE `lend_borrower_loan_settings` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-02-07 21:50:13
