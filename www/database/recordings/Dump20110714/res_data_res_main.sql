CREATE DATABASE  IF NOT EXISTS `res_data` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `res_data`;
-- MySQL dump 10.13  Distrib 5.5.9, for Win32 (x86)
--
-- Host: localhost    Database: res_data
-- ------------------------------------------------------
-- Server version	5.0.51b-community-nt

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
-- Not dumping tablespaces as no INFORMATION_SCHEMA.FILES table on this server
--

--
-- Table structure for table `res_main`
--

DROP TABLE IF EXISTS `res_main`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `res_main` (
  `id` int(100) NOT NULL auto_increment,
  `cust_name` varchar(100) default NULL,
  `last_name` varchar(100) default NULL,
  `location` varchar(100) default NULL,
  `contact` varchar(100) default NULL,
  `no_person` varchar(100) default NULL,
  `discount` int(100) default NULL,
  `trip` varchar(100) default NULL,
  `rdate_in` datetime default NULL,
  `rdate_out` datetime default NULL,
  `valid_date` datetime default NULL,
  `status` varchar(100) default NULL,
  `down_pay` int(100) default NULL,
  `rem_bal` int(100) default NULL,
  `mi` varchar(2) default NULL,
  `standard` varchar(45) default NULL,
  `annex` varchar(45) default NULL,
  `premier` varchar(45) default NULL,
  `junior_premier` varchar(45) default NULL,
  `premier_loft` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `res_main`
--

LOCK TABLES `res_main` WRITE;
/*!40000 ALTER TABLE `res_main` DISABLE KEYS */;
INSERT INTO `res_main` VALUES (28,'','','0','','',0,'DAY','2011-10-01 00:00:00','2011-10-01 00:00:00','2011-10-01 00:00:00','Checkout',1,5000,'','0','0','0','0','0'),(27,'','','0','','',0,'NIGHT','2011-10-01 00:00:00','2011-10-01 00:00:00','2011-10-01 00:00:00','Checkout',3,5000,'','0','0','0','0','0'),(26,'','','0','','',0,'NIGHT','2011-10-01 00:00:00','2011-10-01 00:00:00','2011-10-01 00:00:00','Checkout',1,5000,'','0','0','0','0','0');
/*!40000 ALTER TABLE `res_main` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-07-14  4:22:10
