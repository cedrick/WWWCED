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
-- Table structure for table `res_date`
--

DROP TABLE IF EXISTS `res_date`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `res_date` (
  `id` int(11) NOT NULL auto_increment,
  `rday` varchar(45) default NULL,
  `rmonth` varchar(45) default NULL,
  `ryear` varchar(45) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `res_date`
--

LOCK TABLES `res_date` WRITE;
/*!40000 ALTER TABLE `res_date` DISABLE KEYS */;
INSERT INTO `res_date` VALUES (1,'1','january','2011'),(2,'2','february','2012'),(3,'3','march',NULL),(4,'4','april',NULL),(5,'5','may',NULL),(6,'6','june',NULL),(7,'7','july',NULL),(8,'8','august',NULL),(9,'9','september',NULL),(10,'10','october',NULL),(11,'11','november',NULL),(12,'12','december',NULL),(13,'13',NULL,NULL),(14,'14',NULL,NULL),(15,'15',NULL,NULL),(16,'16',NULL,NULL),(17,'17',NULL,NULL),(18,'18',NULL,NULL),(19,'19',NULL,NULL),(20,'20',NULL,NULL),(21,'21',NULL,NULL),(22,'22',NULL,NULL),(23,'23',NULL,NULL),(24,'24',NULL,NULL),(25,'25',NULL,NULL),(26,'26',NULL,NULL),(27,'27',NULL,NULL),(28,'28',NULL,NULL),(29,'29',NULL,NULL),(30,'30',NULL,NULL),(31,'31',NULL,NULL);
/*!40000 ALTER TABLE `res_date` ENABLE KEYS */;
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
