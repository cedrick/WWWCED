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
-- Table structure for table `call_login`
--

DROP TABLE IF EXISTS `call_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `call_login` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(100) default NULL,
  `password` varchar(100) default NULL,
  `agent_id` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `call_login`
--

LOCK TABLES `call_login` WRITE;
/*!40000 ALTER TABLE `call_login` DISABLE KEYS */;
INSERT INTO `call_login` VALUES (1,'cedrick','f57921c22b2e093d7eff9ac1cc7e22e8','cedrick12'),(86,'erson.c','a3368f911f487c84ef79ef9a1884c9dd','20081187'),(85,'lorenzo.abarientos','a413241f032cd626095b66cd309e4733','10042'),(84,'francia.villar','a413241f032cd626095b66cd309e4733','10045'),(83,'samantha.d','a413241f032cd626095b66cd309e4733','20101328'),(82,'francia.v','a413241f032cd626095b66cd309e4733','10045'),(81,'rolando.l','a413241f032cd626095b66cd309e4733','10042'),(80,'samantha.c','a413241f032cd626095b66cd309e4733','20101328'),(79,'donna.b','7ca22e35dd50cbde4c3fafeef156ee21','10023'),(77,'mbvilla','6d3c0dd52024a125d94eb9a01fe8a36a','209018'),(76,'isay.v','a413241f032cd626095b66cd309e4733','20111608'),(75,'bdeguzman','f5049af3ac08bc95195c445ed45ee5ea','AECOO4'),(74,'lizzy','2ad3a975f642315a505d0a005ca94185','ada464'),(73,'jaypee.f','07d7f09e15d29cb868e38f90a9d0236a','10026'),(72,'amanda','2ad3a975f642315a505d0a005ca94185','ada464'),(71,'aa.zusette.b','6a5d07a6449328a622f79dc63f6584df','pmr271'),(70,'nicko.q','4fdcc75283ee4cef93ec83578b9dd0ad','20101278'),(69,'ecanja','52caf9b4dd4fe26e6956792b5d172ab8','20081187'),(68,'csantos','9e3bd28bcbf019d42fe29689df094248','20081053'),(67,'dmaypa','1e2f4b2e0159cc7599f884feb610bf8c','aes909'),(66,'Amber Thomas','f2b3a23e27467af8feebde154de3e462','10027'),(65,'aa.zenab.d','4be1fd74bc0edf549921de823d8ce5c7','ada428'),(78,'mvilla','6d3c0dd52024a125d94eb9a01fe8a36a','209018'),(63,'ma.christina.h','a413241f032cd626095b66cd309e4733','ada730'),(62,'anna','a413241f032cd626095b66cd309e4733','aes038'),(61,'joy.a','a413241f032cd626095b66cd309e4733','aes332'),(60,'rico','f57921c22b2e093d7eff9ac1cc7e22e8','rico12'),(59,'raffy','e7ad7066dc9897b161b1cdca2bf5534c','cm'),(58,'james','f57921c22b2e093d7eff9ac1cc7e22e8','james12'),(87,'tiffany.r','a413241f032cd626095b66cd309e4733','10041'),(88,'lovely.p','a413241f032cd626095b66cd309e4733','AEC008'),(89,'Jodi Fernandez/ Amber','dc2890b7f9e99aae646226c47dd83df2','20101267'),(90,'Jodi Fernande','a413241f032cd626095b66cd309e4733','20101267'),(91,'Amber','a413241f032cd626095b66cd309e4733','20101267'),(92,'joemar.l','a413241f032cd626095b66cd309e4733','joemar.l'),(93,'jasmine.c','a413241f032cd626095b66cd309e4733','10201327'),(94,'sdecastro','fba4c3f6ffbba72e5efa510d3c7c5565','20101328'),(95,'april.m','a413241f032cd626095b66cd309e4733','10048'),(96,'rolando.a','a413241f032cd626095b66cd309e4733','20101464'),(97,'aprildream.m','a413241f032cd626095b66cd309e4733','10201530'),(99,'mavis.b','a413241f032cd626095b66cd309e4733','20101318'),(100,'lorenzo.a','a413241f032cd626095b66cd309e4733','10042'),(101,'admin','a413241f032cd626095b66cd309e4733','admin'),(102,'lyka.d','a413241f032cd626095b66cd309e4733','lyka.d'),(103,'merwin.m','a413241f032cd626095b66cd309e4733','merwin.m'),(104,'angelica.r','a413241f032cd626095b66cd309e4733','angelica.r'),(105,'angelo.v','a413241f032cd626095b66cd309e4733','angelo.v'),(106,'rosalyn.d','a413241f032cd626095b66cd309e4733','rosalyn.d'),(107,'manuel.m','a413241f032cd626095b66cd309e4733','manuel.m'),(108,'Kris.d','a413241f032cd626095b66cd309e4733','kris.d'),(109,'ritzanne.g','a413241f032cd626095b66cd309e4733','10036'),(110,'jennifer.t','a413241f032cd626095b66cd309e4733','FCF053'),(111,'jennifer','a413241f032cd626095b66cd309e4733','FCF053'),(112,'piedad.a','a413241f032cd626095b66cd309e4733','10022');
/*!40000 ALTER TABLE `call_login` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-02-07 21:51:01
