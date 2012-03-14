/*
MySQL Data Transfer
Source Host: localhost
Source Database: dbacc
Target Host: localhost
Target Database: dbacc
Date: 1/1/2010 6:54:16 AM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for 27cedrick
-- ----------------------------
CREATE TABLE `27cedrick` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(30) default NULL,
  `lname` varchar(30) default NULL,
  `mi` varchar(30) default NULL,
  `clerck` varchar(30) default NULL,
  `extra` varchar(30) default NULL,
  `price` int(11) default NULL,
  `qty` int(11) default NULL,
  `amt` int(11) default NULL,
  `totalamt` int(11) default NULL,
  `grandt` int(11) default NULL,
  `down` int(11) default NULL,
  `accom` int(11) default NULL,
  `pay` int(11) default NULL,
  `sukli` int(11) default NULL,
  `petsa` varchar(30) default NULL,
  `monthin` varchar(30) default NULL,
  `checkin` varchar(30) default NULL,
  `monthout` varchar(30) default NULL,
  `checkout` varchar(30) default NULL,
  `tablename` varchar(30) default NULL,
  `tag` varchar(30) default NULL,
  `standardqty` int(11) default NULL,
  `juniorpreqty` int(11) default NULL,
  `premierqty` int(11) default NULL,
  `premierloftqty` int(11) default NULL,
  `annexqty` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for activities
-- ----------------------------
CREATE TABLE `activities` (
  `Item` varchar(255) NOT NULL,
  `Stocks` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `officer` varchar(255) NOT NULL,
  `stockcode` int(255) NOT NULL auto_increment,
  PRIMARY KEY  (`stockcode`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for apr
-- ----------------------------
CREATE TABLE `apr` (
  `month` int(11) default NULL,
  `standard` int(11) default NULL,
  `junpre` int(11) default NULL,
  `premier` int(11) default NULL,
  `premierloft` int(11) default NULL,
  `annex` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for aug
-- ----------------------------
CREATE TABLE `aug` (
  `month` int(11) default NULL,
  `standard` int(11) default NULL,
  `junpre` int(11) default NULL,
  `premier` int(11) default NULL,
  `premierloft` int(11) default NULL,
  `annex` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for beverages
-- ----------------------------
CREATE TABLE `beverages` (
  `Item` varchar(255) NOT NULL,
  `Stocks` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `officer` varchar(255) NOT NULL,
  `stockcode` int(255) NOT NULL auto_increment,
  PRIMARY KEY  (`stockcode`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for decem
-- ----------------------------
CREATE TABLE `decem` (
  `month` int(11) default NULL,
  `standard` int(11) default NULL,
  `junpre` int(11) default NULL,
  `premier` int(11) default NULL,
  `premierloft` int(11) default NULL,
  `annex` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for feb
-- ----------------------------
CREATE TABLE `feb` (
  `month` int(11) default NULL,
  `standard` int(11) default NULL,
  `junpre` int(11) default NULL,
  `premier` int(11) default NULL,
  `premierloft` int(11) default NULL,
  `annex` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for food
-- ----------------------------
CREATE TABLE `food` (
  `Item` varchar(255) NOT NULL,
  `Stocks` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `officer` varchar(255) NOT NULL,
  `stockcode` int(255) NOT NULL auto_increment,
  PRIMARY KEY  (`stockcode`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for house_keeping
-- ----------------------------
CREATE TABLE `house_keeping` (
  `Item` varchar(255) NOT NULL,
  `Stocks` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `officer` varchar(255) NOT NULL,
  `stockcode` int(255) NOT NULL auto_increment,
  PRIMARY KEY  (`stockcode`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for jan
-- ----------------------------
CREATE TABLE `jan` (
  `month` int(11) default NULL,
  `standard` int(11) default NULL,
  `junpre` int(11) default NULL,
  `premier` int(11) default NULL,
  `premierloft` int(11) default NULL,
  `annex` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for jul
-- ----------------------------
CREATE TABLE `jul` (
  `month` int(11) default NULL,
  `standard` int(11) default NULL,
  `junpre` int(11) default NULL,
  `premier` int(11) default NULL,
  `premierloft` int(11) default NULL,
  `annex` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for june
-- ----------------------------
CREATE TABLE `june` (
  `month` int(11) default NULL,
  `standard` int(11) default NULL,
  `junpre` int(11) default NULL,
  `premier` int(11) default NULL,
  `premierloft` int(11) default NULL,
  `annex` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for mar
-- ----------------------------
CREATE TABLE `mar` (
  `month` int(11) default NULL,
  `standard` int(11) default NULL,
  `junpre` int(11) default NULL,
  `premier` int(11) default NULL,
  `premierloft` int(11) default NULL,
  `annex` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for may
-- ----------------------------
CREATE TABLE `may` (
  `month` int(11) default NULL,
  `standard` int(11) default NULL,
  `junpre` int(11) default NULL,
  `premier` int(11) default NULL,
  `premierloft` int(11) default NULL,
  `annex` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for meal
-- ----------------------------
CREATE TABLE `meal` (
  `Item` varchar(255) NOT NULL,
  `Stocks` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `officer` varchar(255) NOT NULL,
  `stockcode` int(255) NOT NULL auto_increment,
  PRIMARY KEY  (`stockcode`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for nov
-- ----------------------------
CREATE TABLE `nov` (
  `month` int(11) default NULL,
  `standard` int(11) default NULL,
  `junpre` int(11) default NULL,
  `premier` int(11) default NULL,
  `premierloft` int(11) default NULL,
  `annex` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for oct
-- ----------------------------
CREATE TABLE `oct` (
  `month` int(11) default NULL,
  `standard` int(11) default NULL,
  `junpre` int(11) default NULL,
  `premier` int(11) default NULL,
  `premierloft` int(11) default NULL,
  `annex` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for pos
-- ----------------------------
CREATE TABLE `pos` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `mi` varchar(2) NOT NULL,
  `contact` int(11) NOT NULL,
  `extra` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `amnt` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `accom` int(11) NOT NULL,
  `down` int(11) NOT NULL,
  `change` int(11) NOT NULL,
  `clerck` varchar(30) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for sept
-- ----------------------------
CREATE TABLE `sept` (
  `month` int(11) default NULL,
  `standard` int(11) default NULL,
  `junpre` int(11) default NULL,
  `premier` int(11) default NULL,
  `premierloft` int(11) default NULL,
  `annex` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for special_order
-- ----------------------------
CREATE TABLE `special_order` (
  `Item` varchar(255) NOT NULL,
  `Stocks` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `officer` varchar(255) NOT NULL,
  `stockcode` int(255) NOT NULL auto_increment,
  PRIMARY KEY  (`stockcode`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tblad
-- ----------------------------
CREATE TABLE `tblad` (
  `username1` varchar(50) NOT NULL,
  `password1` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tblbev
-- ----------------------------
CREATE TABLE `tblbev` (
  `Item` varchar(255) NOT NULL,
  `Stocks` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `month` varchar(255) NOT NULL,
  `officer` varchar(255) NOT NULL,
  `stockcode` int(255) NOT NULL auto_increment,
  `day` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  PRIMARY KEY  (`stockcode`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tblchart
-- ----------------------------
CREATE TABLE `tblchart` (
  `Items` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Customer` varchar(255) NOT NULL,
  `Payment` varchar(255) NOT NULL,
  `Checked by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbldate
-- ----------------------------
CREATE TABLE `tbldate` (
  `month` varchar(255) NOT NULL,
  `in` varchar(255) NOT NULL,
  `out` varchar(255) NOT NULL,
  `yir` varchar(255) NOT NULL,
  `confirm` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tblfood
-- ----------------------------
CREATE TABLE `tblfood` (
  `Item` varchar(255) NOT NULL,
  `Stocks` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `month` varchar(255) NOT NULL,
  `officer` varchar(255) NOT NULL,
  `stockcode` int(255) NOT NULL auto_increment,
  `day` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  PRIMARY KEY  (`stockcode`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tblinfo
-- ----------------------------
CREATE TABLE `tblinfo` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mi` varchar(2) NOT NULL,
  `cont#` varchar(11) NOT NULL,
  `place` varchar(255) NOT NULL,
  `standardqty` int(11) NOT NULL,
  `junpreqty` int(11) NOT NULL,
  `premierqty` int(11) NOT NULL,
  `preloftqty` int(11) NOT NULL,
  `annexqty` int(11) NOT NULL,
  `month` varchar(255) NOT NULL,
  `in` varchar(255) NOT NULL,
  `out` varchar(255) NOT NULL,
  `yir` varchar(255) NOT NULL,
  `confirm` varchar(255) NOT NULL,
  `trip` varchar(255) NOT NULL,
  `citizen` int(11) NOT NULL,
  `numper` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `down` int(11) NOT NULL,
  `clerk` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbllog
-- ----------------------------
CREATE TABLE `tbllog` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tblmain
-- ----------------------------
CREATE TABLE `tblmain` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mi` varchar(2) NOT NULL,
  `cont#` varchar(11) NOT NULL,
  `place` varchar(255) NOT NULL,
  `standardqty` int(11) NOT NULL,
  `junpreqty` int(11) NOT NULL,
  `premierqty` int(11) NOT NULL,
  `preloftqty` int(11) NOT NULL,
  `annexqty` int(11) NOT NULL,
  `month` varchar(255) NOT NULL,
  `in` varchar(255) NOT NULL,
  `out` varchar(255) NOT NULL,
  `yir` varchar(255) NOT NULL,
  `confirm` varchar(255) NOT NULL,
  `trip` varchar(255) NOT NULL,
  `citizen` int(11) NOT NULL,
  `numper` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `down` int(11) NOT NULL,
  `clerk` varchar(255) NOT NULL,
  `outmonth` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tblrates
-- ----------------------------
CREATE TABLE `tblrates` (
  `id` varchar(255) default NULL,
  `trip` varchar(255) default NULL,
  `numper` int(11) default NULL,
  `citizen` int(11) default NULL,
  `rate` int(11) default NULL,
  `down` int(11) default NULL,
  `pay` int(11) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tblstocks
-- ----------------------------
CREATE TABLE `tblstocks` (
  `Item` varchar(255) NOT NULL,
  `Stocks` varchar(255) NOT NULL,
  `Price` int(11) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Sales Clerk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `27cedrick` VALUES ('27', 'cedrick', 'macatangay', 'C', null, null, null, null, null, '315', '8575', '8260', '16520', '12000', '3425', null, 'Decem', '1', 'Decem', '3', '27cedrick', 'CHECKOUT', '1', '0', '0', '0', '0');
INSERT INTO `27cedrick` VALUES ('28', null, null, null, 'admin', 'kayak', '200', '1', '200', null, null, null, null, null, null, 'Fri/Jan/2010', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `27cedrick` VALUES ('29', null, null, null, 'admin', 'coke', '15', '7', '105', null, null, null, null, null, null, 'Fri/Jan/2010', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `27cedrick` VALUES ('30', null, null, null, 'admin', 'sprite', '10', '1', '10', null, null, null, null, null, null, 'Fri/Jan/2010', null, null, null, null, null, null, null, null, null, null, null);
INSERT INTO `activities` VALUES ('kayak', '0', '200', 'Fri/05/Feb/2010', 'admin', '1');
INSERT INTO `activities` VALUES ('boardgames', '0', '50', 'Fri/05/Feb/2010', 'admin', '2');
INSERT INTO `activities` VALUES ('diving', '', '100', 'Fri/05/Feb/2010', 'admin', '3');
INSERT INTO `activities` VALUES ('boating', '', '300', '', 'admin', '4');
INSERT INTO `apr` VALUES ('1', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('2', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('3', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('4', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('5', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('6', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('7', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('8', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('9', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('10', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('11', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('12', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('13', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('14', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('15', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('16', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('17', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('18', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('19', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('20', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('21', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('22', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('23', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('24', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('25', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('26', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('27', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('28', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('29', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES ('30', '5', '5', '5', '5', '5');
INSERT INTO `apr` VALUES (null, null, null, null, null, null);
INSERT INTO `aug` VALUES ('1', '4', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('2', '4', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('3', '4', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('4', '4', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('5', '5', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('6', '5', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('7', '5', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('8', '5', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('9', '5', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('10', '5', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('11', '5', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('12', '5', '4', '5', '5', '5');
INSERT INTO `aug` VALUES ('13', '5', '4', '5', '5', '5');
INSERT INTO `aug` VALUES ('14', '5', '4', '5', '5', '5');
INSERT INTO `aug` VALUES ('15', '5', '4', '5', '5', '5');
INSERT INTO `aug` VALUES ('16', '5', '4', '5', '5', '5');
INSERT INTO `aug` VALUES ('17', '5', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('18', '5', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('19', '5', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('20', '5', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('21', '5', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('22', '5', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('23', '5', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('24', '5', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('25', '5', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('26', '5', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('27', '5', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('28', '5', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('29', '5', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('30', '5', '5', '5', '5', '5');
INSERT INTO `aug` VALUES ('31', '5', '5', '5', '5', '5');
INSERT INTO `beverages` VALUES ('coke', '20', '15', 'jan/12/2001/', 'admin', '3');
INSERT INTO `beverages` VALUES ('sprite', '100', '10', 'ja/1/2001/', 'admin', '4');
INSERT INTO `decem` VALUES ('1', '6', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('2', '6', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('3', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('4', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('5', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('6', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('7', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('8', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('9', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('10', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('11', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('12', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('13', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('14', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('15', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('16', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('17', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('18', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('19', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('20', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('21', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('22', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('23', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('24', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('25', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('26', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('27', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('28', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('29', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('30', '5', '5', '5', '5', '5');
INSERT INTO `decem` VALUES ('31', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('1', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('2', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('3', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('4', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('5', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('6', '5', '5', '2', '5', '5');
INSERT INTO `feb` VALUES ('7', '5', '5', '2', '5', '5');
INSERT INTO `feb` VALUES ('8', '5', '5', '2', '5', '5');
INSERT INTO `feb` VALUES ('9', '5', '5', '2', '5', '5');
INSERT INTO `feb` VALUES ('10', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('11', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('12', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('13', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('14', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('15', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('16', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('17', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('18', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('19', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('20', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('21', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('22', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('23', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('24', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('25', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('26', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('27', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES ('28', '5', '5', '5', '5', '5');
INSERT INTO `feb` VALUES (null, null, null, null, null, null);
INSERT INTO `food` VALUES ('piatos', '95', '50', 'Fri/05/Feb/2010', 'admin', '1');
INSERT INTO `food` VALUES ('nova', '50', '20', 'Fri/05/Feb/2010', 'admin', '2');
INSERT INTO `house_keeping` VALUES ('towel', '100', '50', 'Fri/05/Feb/2010', 'admin', '1');
INSERT INTO `house_keeping` VALUES ('pillow', '50', '20', 'Fri/05/Feb/2010', 'admin', '2');
INSERT INTO `jan` VALUES ('1', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('2', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('3', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('4', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('5', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('6', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('7', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('8', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('9', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('10', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('11', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('12', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('13', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('14', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('15', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('16', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('17', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('18', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('19', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('20', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('21', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('22', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('23', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('24', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('25', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('26', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('27', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('28', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('29', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('30', '5', '5', '5', '5', '5');
INSERT INTO `jan` VALUES ('31', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('1', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('2', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('3', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('4', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('5', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('6', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('7', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('8', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('9', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('10', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('11', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('12', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('13', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('14', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('15', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('16', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('17', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('18', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('19', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('20', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('21', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('22', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('23', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('24', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('25', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('26', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('27', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('28', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('29', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('30', '5', '5', '5', '5', '5');
INSERT INTO `jul` VALUES ('31', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('1', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('2', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('3', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('4', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('5', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('6', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('7', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('8', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('9', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('10', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('11', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('12', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('13', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('14', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('15', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('16', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('17', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('18', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('19', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('20', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('21', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('22', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('23', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('24', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('25', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('26', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('27', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('28', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('29', '5', '5', '5', '5', '5');
INSERT INTO `june` VALUES ('30', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('1', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('2', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('3', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('4', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('5', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('6', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('7', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('8', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('9', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('10', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('11', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('12', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('13', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('14', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('15', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('16', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('17', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('18', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('19', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('20', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('21', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('22', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('23', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('24', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('25', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('26', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('27', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('28', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('29', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('30', '5', '5', '5', '5', '5');
INSERT INTO `mar` VALUES ('31', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('1', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('2', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('3', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('4', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('5', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('6', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('7', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('8', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('9', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('10', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('11', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('12', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('13', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('14', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('15', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('16', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('17', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('18', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('19', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('20', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('21', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('22', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('23', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('24', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('25', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('26', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('27', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('28', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('29', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('30', '5', '5', '5', '5', '5');
INSERT INTO `may` VALUES ('31', '5', '5', '5', '5', '5');
INSERT INTO `meal` VALUES ('breakfast', '0', '150', 'Fri/05/Feb/2010', 'admin', '1');
INSERT INTO `meal` VALUES ('lunch', '0', '300', 'Fri/05/Feb/2010', 'admin', '2');
INSERT INTO `meal` VALUES ('dinner', '', '350', 'Fri/05/Feb/2010', 'admin', '3');
INSERT INTO `nov` VALUES ('1', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('2', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('3', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('4', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('5', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('6', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('7', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('8', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('9', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('10', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('11', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('12', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('13', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('14', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('15', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('16', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('17', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('18', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('19', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('20', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('21', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('22', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('23', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('24', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('25', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('26', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('27', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('28', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('29', '5', '5', '5', '5', '5');
INSERT INTO `nov` VALUES ('30', '5', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('1', '4', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('2', '4', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('3', '4', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('4', '4', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('5', '5', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('6', '5', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('7', '5', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('8', '5', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('9', '5', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('10', '5', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('11', '5', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('12', '5', '4', '5', '5', '5');
INSERT INTO `oct` VALUES ('13', '5', '4', '5', '5', '5');
INSERT INTO `oct` VALUES ('14', '5', '4', '5', '5', '5');
INSERT INTO `oct` VALUES ('15', '5', '4', '5', '5', '5');
INSERT INTO `oct` VALUES ('16', '5', '4', '5', '5', '5');
INSERT INTO `oct` VALUES ('17', '5', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('18', '5', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('19', '5', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('20', '5', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('21', '5', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('22', '5', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('23', '5', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('24', '5', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('25', '5', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('26', '5', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('27', '5', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('28', '5', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('29', '5', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('30', '5', '5', '5', '5', '5');
INSERT INTO `oct` VALUES ('31', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('1', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('2', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('3', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('4', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('5', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('6', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('7', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('8', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('9', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('10', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('11', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('12', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('13', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('14', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('15', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('16', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('17', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('18', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('19', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('20', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('21', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('22', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('23', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('24', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('25', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('26', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('27', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('28', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('29', '5', '5', '5', '5', '5');
INSERT INTO `sept` VALUES ('30', '5', '5', '5', '5', '5');
INSERT INTO `special_order` VALUES ('order', '', '50', 'Fri/05/Feb/2010', 'admin', '1');
INSERT INTO `tblad` VALUES ('admin', 'admin');
INSERT INTO `tblbev` VALUES ('coke ', '100', '50', 'jan', 'admin', '1', '1', '2010');
INSERT INTO `tblbev` VALUES ('biogesic', '50', '20', 'jan', 'admin', '2', '1', '2010');
INSERT INTO `tblfood` VALUES ('piatos', '100', '50', 'jan', 'admin', '1', '1', '2010');
INSERT INTO `tblfood` VALUES ('nova', '50', '20', 'ja', 'admin', '2', '1', '2010');
INSERT INTO `tbllog` VALUES ('aldie ', '555');
INSERT INTO `tbllog` VALUES ('jojo', '222');
INSERT INTO `tbllog` VALUES ('cedie    ', 'admin');
INSERT INTO `tblmain` VALUES ('27', 'cedrick', 'macatangay', 'C', '09166502853', 'batangas', '1', '0', '0', '0', '0', 'Decem', '1', '3', '2010', 'RESERVED', 'NIGHT', '1', '6', '16520', '8260', 'admin', 'Decem');
INSERT INTO `tblstocks` VALUES ('coke (1.5)', '50', '50', 'Fri/05/Feb/2010', 'admin');
INSERT INTO `tblstocks` VALUES ('biogesic', '50', '20', 'Fri/05/Feb/2010', 'admin');
