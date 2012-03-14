CREATE DATABASE  IF NOT EXISTS `dispute_tracker` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dispute_tracker`;
-- MySQL dump 10.13  Distrib 5.5.9, for Win32 (x86)
--
-- Host: spas12    Database: dispute_tracker
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
-- Table structure for table `dspt_users`
--

DROP TABLE IF EXISTS `dspt_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dspt_users` (
  `user_id` int(11) NOT NULL auto_increment,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `udate` datetime NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dspt_users`
--

LOCK TABLES `dspt_users` WRITE;
/*!40000 ALTER TABLE `dspt_users` DISABLE KEYS */;
INSERT INTO `dspt_users` VALUES (3,'cedrick macatangay','cedrick','f57921c22b2e093d7eff9ac1cc7e22e8','2011-09-12 16:59:33'),(6,'Arthur Nicole','nicole','00bbebc70c43a9a081a711604fda02d9','2011-09-27 13:30:16'),(11,'rommel.c','rommel.c','5e97b68b127a1a2dc35dbf8352a53037','2011-09-27 16:42:14'),(12,'joy','joy','a413241f032cd626095b66cd309e4733','2011-09-27 19:39:36'),(13,'janette','janette','a413241f032cd626095b66cd309e4733','2011-09-27 19:39:49'),(14,'flaire','flaire','a413241f032cd626095b66cd309e4733','2011-09-27 19:40:51'),(15,'grace','grace','a413241f032cd626095b66cd309e4733','2011-09-27 19:41:05'),(16,'Rommel Carillio','Sam','62c7ddb8b29cf13e463c8632becc6bf0','2011-09-28 21:11:56'),(17,'Flerida','Flerida','a413241f032cd626095b66cd309e4733','2011-10-10 19:57:55'),(18,'Janette buce','Janette.B','a413241f032cd626095b66cd309e4733','2011-10-10 19:59:22');
/*!40000 ALTER TABLE `dspt_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-02-07 21:51:03
