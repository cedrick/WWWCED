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
-- Table structure for table `call_dispositions`
--

DROP TABLE IF EXISTS `call_dispositions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `call_dispositions` (
  `id` int(11) NOT NULL auto_increment,
  `workgroup` varchar(45) NOT NULL,
  `dispo` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `call_dispositions`
--

LOCK TABLES `call_dispositions` WRITE;
/*!40000 ALTER TABLE `call_dispositions` DISABLE KEYS */;
INSERT INTO `call_dispositions` VALUES (1,'New Sales','Sale-New Sale'),(2,'New Sales','Sale-Product Switch'),(3,'New Sales','Sale-Rate Reset'),(4,'New Sales','Credit-Declined Credit Check'),(5,'New Sales','Deposit-Unable to Pay Today/Will Call Back'),(6,'New Sales','Deposit-Too High Opt Out'),(7,'New Sales','Inquiry-New Construction/Need ESID'),(8,'New Sales','Inquiry-Rebate'),(9,'New Sales','Rates-Too High'),(10,'New Sales','Rates-No Rate Plans To Meet Needs'),(11,'New Sales','Rates-Shopping'),(12,'New Sales','TPV-Refused'),(13,'New Sales','TPV-Did Not Complete/Verify Failed'),(14,'New Sales','No Credit Card'),(15,'New Sales','Refused Credit Card Info'),(16,'New Sales','Refused to Check Credit'),(17,'New Sales','Refused to Pay Monthly Fee'),(18,'New Sales','Refused to Pay Deposit'),(19,'New Sales','Disconnected'),(20,'New Sales','Hung Up'),(21,'New Sales','Currently with Another REP(Under Contract)'),(22,'New Sales','Inquiry-Initial Service Date'),(23,'New Sales','Inquiry-Do Not Want to Pay Expidte Fee'),(24,'New Sales','Inquiry-MVIN vs Switch'),(25,'New Sales','Inquiry-Must Have Budget Bill'),(26,'New Sales','Customer Care Calls Transfered'),(27,'Spanish','Disconnected'),(28,'Spanish','Hung Up'),(29,'Spanish','Customer Care Calls Transfered'),(30,'Spanish','Other-Need CML Rates/Xfer to Havenlink'),(31,'Spanish','Inquiry-Enrollment Status'),(32,'Spanish','Inquiry-No Service/Turn-On Delayed'),(33,'Spanish','Inquiry-Current Customer shopping for Better Rates/Product Switch'),(34,'Spanish','Inquiry-Out of Service Area'),(35,'Spanish','Inquiry-Rate Escape'),(36,'Spanish','Inquiry Billing'),(37,'Spanish','Inquiry Products'),(38,'Spanish','Payments Made'),(39,'Spanish','Existing Customer-Change Info'),(40,'Payment','Sale-New Sale'),(41,'Payment','Sale-Product Switch'),(42,'Payment','Sale-Fixed Renewal'),(43,'Payment','Sale-Rate Reset'),(44,'Payment','Credit-Declined Credit Check'),(45,'Payment','Deposit-Unable to Pay Today/Will Call Back'),(46,'Payment','Deposit-Too High/Opt Out'),(47,'Payment','Inquiry-Initial Service Date'),(48,'Payment','Inquiry-Do Not Want to Pay Expedite Fee'),(49,'Payment','Inquiry-MVIN vs Switch'),(50,'Payment','Inquiry-Must Have Budget Bill'),(51,'Payment','Inquiry-New Construction/Need ESID'),(52,'Payment','Inquiry-Rebate'),(53,'Payment','Rates-Too High'),(54,'Payment','Rates-No Rate Plan to Meet Needs'),(55,'Payment','Rate-Shopping'),(56,'Payment','TPV-Refused'),(57,'Payment','TPV-Did Not Complete/Verify Failed'),(58,'Payment','Disconnected'),(59,'Payment','Hung Up'),(60,'Payment','Other/Comments'),(61,'Payment','Other-Need CML Rates/Xfer to Havenlink'),(62,'Payment','Inquiry-Enrollment Status'),(63,'Payment','Inquiry-No Service Turn-On Delayed'),(64,'Payment','Inquiry Current Customer Shopping for Bett'),(65,'Payment','Inquiry-Out of Service Area'),(66,'Payment','Inquiry-Rate Escape'),(67,'Payment','Wrong Number/Transfer'),(68,'Payment','Account Cancelled'),(69,'Payment','Saved'),(70,'Payment','Inquiry Billing'),(71,'Payment','Inquiry Products'),(72,'Payment','Payments Made'),(73,'Payment','Existing Customer Change Info'),(74,'Payment','Transfer to Dynowatt IVR'),(75,'Renewal','Sale-New Sale'),(76,'Renewal','Sale-Product Switch'),(77,'Renewal','Sale-Rate Reset'),(78,'Renewal','Credit-Declined Credit Check'),(79,'Renewal','Deposit-Unable to Pay Today/Will Call Back'),(80,'Renewal','Deposit-Too High Opt Out'),(81,'Renewal','Inquiry-New Construction/Need ESID'),(82,'Renewal','Inquiry-Rebate'),(83,'Renewal','Rates-Too High'),(84,'Renewal','Rates-No Rate Plans To Meet Needs'),(85,'Renewal','Rates-Shopping'),(86,'Renewal','TPV-Refused'),(87,'Renewal','TPV-Did Not Complete/Verify Failed'),(88,'Renewal','No Credit Card'),(89,'Renewal','Refused Credit Card Info'),(90,'Renewal','Refused to Check Credit'),(91,'Renewal','Refused to Pay Monthly Fee'),(92,'Renewal','Refused to Pay Deposit'),(93,'Renewal','Disconnected'),(94,'Renewal','Hung Up'),(95,'Renewal','Currently with Another REP(Under Contract)'),(96,'Renewal','Inquiry-Initial Service Date'),(97,'Renewal','Inquiry-Do Not Want to Pay Expidte Fee'),(98,'Renewal','Inquiry-MVIN vs Switch'),(99,'Renewal','Inquiry-Must Have Budget Bill'),(100,'Renewal','Customer Care Calls Transfered'),(101,'Renewal','Sale-Fixed Renewal'),(102,'New Sales','Sale-Fixed Renewal'),(103,'New Sales','SALE-CCM');
/*!40000 ALTER TABLE `call_dispositions` ENABLE KEYS */;
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
