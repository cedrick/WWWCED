CREATE DATABASE  IF NOT EXISTS `sales_tracker` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sales_tracker`;
-- MySQL dump 10.13  Distrib 5.5.9, for Win32 (x86)
--
-- Host: spas12    Database: sales_tracker
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
-- Table structure for table `trck_users`
--

DROP TABLE IF EXISTS `trck_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trck_users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) default NULL,
  `user_type` tinyint(4) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trck_users`
--

LOCK TABLES `trck_users` WRITE;
/*!40000 ALTER TABLE `trck_users` DISABLE KEYS */;
INSERT INTO `trck_users` VALUES (1,'ambet','ambet',1),(11,'joy','soki',1),(10,'beverly.c','rico',2),(9,'pamela.c','ataric',2),(5,'ambet.qa','ambet',3),(8,'rommel.c','nino',2),(7,'janette','nsi123',3),(12,'golda','russell',1),(13,'nicole',NULL,1),(14,'lassius.y',NULL,2),(15,'mark.ro','tugatog',2),(16,'saudi.t','saudi',2),(17,'jaenne.r','euna',2),(18,'ivy.h','hsi',2),(19,'anly.m','zeusmylove',2),(20,'myleen.c','myles',2),(21,'allan.v','1427',2),(22,'angelica.g','hsi',2),(23,'leah.c','dennis',2),(24,'jonathan.h','sinner',2),(25,'josie.mel','vita',2),(26,'richard.g','chacha',2),(27,'jona.a','jong',2),(28,'gertrude.b','gertrude',2),(29,'rose.o','071907',2),(30,'jesus.r','yahj seyer',2),(35,'poging.bagsik','dannielle',3),(38,'emily.c','ereleu',2),(33,'flaire','marley',3),(34,'grace','francois',3),(39,'florjane.m','gwen',2),(40,'rona.b','nsi',2),(41,'james.s','nsi',2),(42,'dinah.b','dsi',2),(43,'guan.c','nsi',2),(45,'cedrick','nsi',2),(46,'glenn.v','nsi',2),(47,'carolina.p','nsi',2),(48,'adonis.b','nsi',2),(49,'angelica.v','nsi',2),(50,'lilibeth.d','nsi',2),(51,'lei.c','nsi',2),(52,'jonas.a','nsi',2),(53,'daryl.e','nsi',2),(54,'remedios.t','nsi',2),(55,'roldan.b','nsi',2),(56,'john.c','nsi',2),(57,'angelica.v','nsi',2),(58,'daniel.g','nsi',2),(59,'edward.b','nsi',2),(60,'robin.t','nsi',2),(61,'josecedric.c','nsi',2),(62,'rommel.g','nsi',2),(63,'mark.f','nsi',2),(64,'maureen.d','nsi',2),(65,'ninarosana.e','nsi',2),(66,'mariatiffany.p','nsi',2),(67,'mechelle.g','nsi',2),(68,'veronica.c','nsi',2),(69,'maybel.m','nsi',2),(70,'rolando.b','nsi',2),(71,'sunshine.d','nsi',2);
/*!40000 ALTER TABLE `trck_users` ENABLE KEYS */;
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
