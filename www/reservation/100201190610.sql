/*
MySQL Backup
Source Server Version: 3.21.0
Source Database: dbacc
Date: 2/1/2010 19:06:10
*/


-- ----------------------------
--  Table structure for `tblad`
-- ----------------------------
DROP TABLE IF EXISTS `tblad`;
CREATE TABLE `tblad` (
  `useradmin` varchar(50) NOT NULL,
  `passadmin` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
--  Table structure for `tbllog`
-- ----------------------------
DROP TABLE IF EXISTS `tbllog`;
CREATE TABLE `tbllog` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records 
-- ----------------------------
INSERT INTO `tbllog` VALUES ('aldie','222'),  ('aldie','222'),  ('cedie','111');
