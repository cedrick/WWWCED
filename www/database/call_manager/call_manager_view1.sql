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
-- Table structure for table `view1`
--

DROP TABLE IF EXISTS `view1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `view1` (
  `Tableid` int(11) NOT NULL,
  `AgentID` varchar(50) default NULL,
  `AgentName` varchar(50) default NULL,
  `PhoneNumber` varchar(50) default NULL,
  `FirstName` varchar(50) default NULL,
  `LastName` varchar(50) default NULL,
  `AccountNumber` varchar(50) default NULL,
  `StartDate` datetime default NULL,
  `EndDate` datetime default NULL,
  `CallDuration` int(11) default NULL,
  `CallReason` varchar(20) default NULL,
  `CancelReason` varchar(50) default NULL,
  `OfferedPromotion` varchar(3) default NULL,
  `PromoOffered` varchar(100) default NULL,
  `RefusedPromo` varchar(3) default NULL,
  `RefusedReason` varchar(100) default NULL,
  `Remarks` mediumtext,
  `CustomerSavedThru` varchar(100) default NULL,
  `UpdateStamp` datetime default NULL,
  `Account2` varchar(50) default NULL,
  `Account3` varchar(50) default NULL,
  `Account4` varchar(50) default NULL,
  `Account5` varchar(50) default NULL,
  `SalesCenter` varchar(50) default NULL,
  `Utility` varchar(50) default NULL,
  `CallRecordID` mediumtext,
  `Email` varchar(50) default NULL,
  `Marketeer` varchar(50) default NULL,
  `MarketeerOfficer` varchar(50) default NULL,
  `Campaign` varchar(50) default NULL,
  `ISTA` varchar(50) default NULL,
  `SoldType` varchar(100) default NULL,
  `cancel_stated` varchar(20) default NULL,
  `Workgroup` varchar(50) default NULL,
  `Texas_Call_Dispo` varchar(50) default NULL,
  `tpvID` varchar(50) default NULL,
  `Source` varchar(200) default NULL,
  `webEnrollment` varchar(50) default NULL,
  `webDispo` varchar(100) default NULL,
  `Call_Origin` varchar(50) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `view1`
--

LOCK TABLES `view1` WRITE;
/*!40000 ALTER TABLE `view1` DISABLE KEYS */;
/*!40000 ALTER TABLE `view1` ENABLE KEYS */;
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
