CREATE DATABASE  IF NOT EXISTS `call_manager` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `call_manager`;
-- MySQL dump 10.13  Distrib 5.5.9, for Win32 (x86)
--
-- Host: spas12    Database: call_manager
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
-- Table structure for table `promo_offered`
--

DROP TABLE IF EXISTS `promo_offered`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `promo_offered` (
  `id` int(11) NOT NULL auto_increment,
  `promo` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promo_offered`
--

LOCK TABLES `promo_offered` WRITE;
/*!40000 ALTER TABLE `promo_offered` DISABLE KEYS */;
INSERT INTO `promo_offered` VALUES (1,'Coned Saves'),(2,'Fixed 6'),(3,'Fixed 12'),(4,'Fixed 16'),(5,'Fixed 24'),(6,'Fixed 36'),(7,'Fixed to Fixed'),(8,'Nimo Take 5'),(9,'Reset Fixed Rate'),(10,'Change plan from fixed to fixed'),(11,'Change plan from variable to fixed'),(12,'5% Coned Saves Promo'),(13,'Nimo Take 5 Saves Promo'),(14,'Variable'),(15,'Not Applicable');
/*!40000 ALTER TABLE `promo_offered` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-02-07 21:51:02
