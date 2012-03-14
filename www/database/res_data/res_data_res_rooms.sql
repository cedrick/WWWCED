CREATE DATABASE  IF NOT EXISTS `res_data` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `res_data`;
-- MySQL dump 10.13  Distrib 5.5.9, for Win32 (x86)
--
-- Host: 191.168.3.243    Database: res_data
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
-- Table structure for table `res_rooms`
--

DROP TABLE IF EXISTS `res_rooms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `res_rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rooms` varchar(100) DEFAULT NULL,
  `no_rooms` varchar(45) DEFAULT NULL,
  `rate` int(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `res_rooms`
--

LOCK TABLES `res_rooms` WRITE;
/*!40000 ALTER TABLE `res_rooms` DISABLE KEYS */;
INSERT INTO `res_rooms` VALUES (1,'Standard1,800 max 6 people (Fan, 2 Semi-double beds)','1',1800),(2,'Junior Premier2,550 max 4 people (Aircon, 1 Queen Size bed)  ','2',2550),(3,'Premier3,500 max 6 people (Aircon, 2 Semi and 1 Double bed) ','3',3500),(4,'Premier Loft4,300 max 10 people (Aircon, 5 Semi and 1 Double bed)','4',4300),(5,'Annex2,550 max 4 people (Aircon, 2 Semi Double Beds) 	','5',2550);
/*!40000 ALTER TABLE `res_rooms` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-07-12  2:05:47
