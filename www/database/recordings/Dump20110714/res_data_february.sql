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
-- Table structure for table `february`
--

DROP TABLE IF EXISTS `february`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `february` (
  `id` int(11) NOT NULL auto_increment,
  `standard` int(11) default NULL,
  `junior_premier` int(11) default NULL,
  `premier` int(11) default NULL,
  `premier_loft` int(11) default NULL,
  `annex` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `february`
--

LOCK TABLES `february` WRITE;
/*!40000 ALTER TABLE `february` DISABLE KEYS */;
INSERT INTO `february` VALUES (1,5,5,5,5,5),(2,5,5,5,5,5),(3,5,5,5,5,5),(4,5,5,5,5,5),(5,5,5,5,5,5),(6,5,5,5,5,5),(7,5,5,5,5,5),(8,5,5,5,5,5),(9,5,5,5,5,5),(10,5,5,5,5,5),(11,5,5,5,5,5),(12,5,5,5,5,5),(13,5,5,5,5,5),(14,5,5,5,5,5),(15,5,5,5,5,5),(16,5,5,5,5,5),(17,5,5,5,5,5),(18,5,5,5,5,5),(19,5,5,5,5,5),(20,5,5,5,5,5),(21,5,5,5,5,5),(22,5,5,5,5,5),(23,5,5,5,5,5),(24,5,5,5,5,5),(25,5,5,5,5,5),(26,5,5,5,5,5),(27,5,5,5,5,5),(28,5,5,5,5,5),(29,5,5,5,5,5);
/*!40000 ALTER TABLE `february` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-07-14  4:22:09
