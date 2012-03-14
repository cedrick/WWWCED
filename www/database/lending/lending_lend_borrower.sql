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
-- Table structure for table `lend_borrower`
--

DROP TABLE IF EXISTS `lend_borrower`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lend_borrower` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone_cell` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `income` varchar(45) DEFAULT NULL,
  `civil_status` varchar(45) DEFAULT NULL,
  `sex` varchar(45) DEFAULT NULL,
  `age` varchar(45) DEFAULT NULL,
  `employment_status` varchar(45) DEFAULT NULL,
  `job_title` varchar(45) DEFAULT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `mi` varchar(45) DEFAULT NULL,
  `rdate` datetime DEFAULT NULL,
  `birth_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lend_borrower`
--

LOCK TABLES `lend_borrower` WRITE;
/*!40000 ALTER TABLE `lend_borrower` DISABLE KEYS */;
INSERT INTO `lend_borrower` VALUES (1,'Northstar Solutions Inc.','San Pablo, Hagonoy bulacan','0015','seoblogger07@gmail.com','10000','Married',NULL,'25','Employed','Programmer','Awww','Ewww','Ramos','2011-09-22 19:43:46','March 23, 1986'),(2,'Northstar Solutions Inc.','San Pablo, Hagonoy Bulacan dfgdfgdf dff fgdgd dg  dfgdfgdfgddf-df','09153234710','','','',NULL,'2','Unemployed','','Ewww','Awww','Estrada','2011-09-22 20:13:10','Oct. 28, 2010'),(3,'','#20 San Pablo, Hagonoy, Bulacan','09153234710','lambert@outsource2northstar.com','','Married',NULL,'25','Employed','','Ambet','Guevarra','Ramos','2011-11-24 15:48:59','March 23, 1986'),(4,'','Address','09153234710','lambert@outsource2northstar.com','','',NULL,'25','Unemployed','','Lambert','Guevarra','Ramos','2011-11-24 15:53:22','March 23, 1986');
/*!40000 ALTER TABLE `lend_borrower` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-02-07 21:50:14
