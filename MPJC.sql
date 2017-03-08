-- MySQL dump 10.13  Distrib 5.7.16, for Linux (x86_64)
--
-- Host: localhost    Database: MPJC
-- ------------------------------------------------------
-- Server version	5.7.16-0ubuntu0.16.10.1

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
-- Table structure for table `Categories`
--

DROP TABLE IF EXISTS `Categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Categories` (
  `CategoryID` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CategoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Categories`
--

LOCK TABLES `Categories` WRITE;
/*!40000 ALTER TABLE `Categories` DISABLE KEYS */;
INSERT INTO `Categories` VALUES (1,'Access to healthcare'),(2,'Adult Literacy/ESL'),(3,'Arts for Social Justice'),(4,'At Risk Youth'),(5,'Criminal Justice Reform'),(6,'Disabilities'),(7,'Domestic violence/sexual assault'),(8,'Education'),(9,'Environment'),(10,'Gender Justice'),(11,'Gun Violence'),(12,'HIV/Aids'),(13,'Housing & Homelessness'),(14,'Hunger & Food Justice'),(15,'Immigration'),(16,'Islamophobia'),(17,'Job Readiness'),(18,'Legal Assistance'),(19,'LGBTQI'),(20,'Media & Democracy'),(21,'Politics & Government'),(22,'Racial Justice'),(23,'Reproductive Rights'),(24,'Seniors'),(25,'Veterans'),(26,'Voting Rights'),(27,'Worker’s Rights');
/*!40000 ALTER TABLE `Categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Organizations`
--

DROP TABLE IF EXISTS `Organizations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Organizations` (
  `ORG_ID` int(11) NOT NULL AUTO_INCREMENT,
  `ORG_NAME` varchar(100) DEFAULT NULL,
  `ORG_NAME_SHORT` varchar(20) DEFAULT NULL,
  `CategoryID` int(11) DEFAULT NULL,
  `ORG_DESC` varchar(500) DEFAULT NULL,
  `WEB_URL` varchar(255) DEFAULT NULL,
  `FACEBOOK_URL` varchar(255) DEFAULT NULL,
  `CONTACT_LAST_NAME` varchar(50) DEFAULT NULL,
  `CONTACT_FIRST_NAME` varchar(50) DEFAULT NULL,
  `CONTACT_PREFIX` varchar(6) DEFAULT NULL,
  `CONTACT_PHONE` varchar(9) DEFAULT NULL,
  `CONTACT_EMAIL` varchar(65) DEFAULT NULL,
  `STREET_ADDRESS_LINE_1` varchar(100) DEFAULT NULL,
  `STREET_ADDRESS_LINE_2` varchar(100) DEFAULT NULL,
  `CITY` varchar(40) DEFAULT NULL,
  `STATE` varchar(2) DEFAULT NULL,
  `ZIP` int(11) DEFAULT NULL,
  `VOLUNTEER_OPPORTUNITIES` varchar(3) DEFAULT NULL,
  `VOLUNTEER_CONTACT_EMAIL` varchar(65) DEFAULT NULL,
  `VOLUNTEER_WEBSITE` varchar(255) DEFAULT NULL,
  `EVENT_CALENDAR_WEBSITE` varchar(255) DEFAULT NULL,
  `DONATION_WEBSITE` varchar(255) DEFAULT NULL,
  `INTERNAL_COMMENTS` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ORG_ID`),
  KEY `CategoryID` (`CategoryID`),
  CONSTRAINT `Organizations_ibfk_1` FOREIGN KEY (`CategoryID`) REFERENCES `Categories` (`CategoryID`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Organizations`
--

LOCK TABLES `Organizations` WRITE;
/*!40000 ALTER TABLE `Organizations` DISABLE KEYS */;
INSERT INTO `Organizations` VALUES (1,'American Civil Liberties Union (ACLU)','ACLU',5,'empty','ACLU.org','empty','empty','empty','empty','empty','empty','empty','empty','Seaside','CA',55085,'N/A','empty','empty','empty','empty','empty'),(2,'Amnesty International MIIS Student Chapter','AIMSC',9,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Monterey','CA',48920,'No','empty','empty','empty','empty','empty'),(3,'Black Lives Matter-Seaside','BLM',23,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Marina','CA',65155,'Yes','empty','empty','empty','empty','empty'),(4,'California Nurses Association (NNU)--Salinas','CNA(',13,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Marina','CA',29624,'Yes','empty','empty','empty','empty','empty'),(5,'Californians for Pesticide Reform ','CFPR',16,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Marina','CA',93123,'Yes','empty','empty','empty','empty','empty'),(6,'Central Coast Center for Independent Living','CCCFIL',18,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Monterey','CA',18201,'No','empty','empty','empty','empty','empty'),(7,'Civil Rights Coalition for Jail Reform Monterey County','CRCFJRMC',17,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Salinas','CA',54309,'Yes','empty','empty','empty','empty','empty'),(8,'Collection of Women\'s March-CSUMB Group','COWMG',17,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Monterey','CA',37980,'Yes','empty','empty','empty','empty','empty'),(9,'Communities for Sustainable Monterey County','CFSMC',12,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Marina','CA',54639,'No','empty','empty','empty','empty','empty'),(10,'Communities Organized for Relational Power (COPA)','COFRP(',9,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Marina','CA',73230,'Yes','empty','empty','empty','empty','empty'),(11,'Democratic Women of Monterey County','DWOMC',23,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Salinas','CA',43786,'No','empty','empty','empty','empty','empty'),(12,'Diversity Center Santa Cruz County','DCSCC',1,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Salinas','CA',94094,'N/A','empty','empty','empty','empty','empty'),(13,'Global Majority','GM',12,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Salinas','CA',52985,'Yes','empty','empty','empty','empty','empty'),(14,'Green Party of Monterey County','GPOMC',10,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Monterey','CA',83634,'No','empty','empty','empty','empty','empty'),(15,'Hebard Olsen, videographer - AMP Media','HOV-AM',1,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Monterey','CA',98417,'No','empty','empty','empty','empty','empty'),(16,'Humanist Association of Monterey Bay','HAOMB',2,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Salinas','CA',88598,'No','empty','empty','empty','empty','empty'),(17,'Indivisible Monterey Bay','IMB',11,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Seaside','CA',30101,'Yes','empty','empty','empty','empty','empty'),(18,'League of Women Voters - Monterey County Chapter','LOWV-MCC',15,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Monterey','CA',83046,'Yes','empty','empty','empty','empty','empty'),(19,'LULAC (League of United Latin American Citizens) Salinas Chapter','L(OULACSC',7,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Salinas','CA',11974,'Yes','empty','empty','empty','empty','empty'),(20,'MILPA - Motivating Individual Leadership for Public Advancement','M-MILFPA',7,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Monterey','CA',93925,'No','empty','empty','empty','empty','empty'),(21,'Moms Rising','MR',6,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Salinas','CA',63487,'Yes','empty','empty','empty','empty','empty'),(22,'Monterey Bay Central Labor Council (and their 28 affiliates)','MBCLC(T2A',1,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Marina','CA',16783,'N/A','empty','empty','empty','empty','empty'),(23,'Monterey County Democrats','MCD',22,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Salinas','CA',40170,'No','empty','empty','empty','empty','empty'),(24,'Monterey County Nonviolent Action Committee','MCNAC',16,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Seaside','CA',76551,'N/A','empty','empty','empty','empty','empty'),(25,'Monterey Peace & Justice Center','MP&JC',17,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Seaside','CA',68544,'No','empty','empty','empty','empty','empty'),(26,'Monterey Peninsula Friends Meeting (Quakers) ','MPFM(',10,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Seaside','CA',95761,'Yes','empty','empty','empty','empty','empty'),(27,'NAACP Monterey County','NMC',6,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Monterey','CA',52930,'Yes','empty','empty','empty','empty','empty'),(28,'National Coalition Building Institute (NCBI) ','NCBI(',1,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Seaside','CA',41505,'N/A','empty','empty','empty','empty','empty'),(29,'National Lawyers Guild - Monterey Bay Area Chapter','NLG-MBAC',21,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Monterey','CA',64304,'N/A','empty','empty','empty','empty','empty'),(30,'National Pan-Hellenic Council ','NPC',27,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Marina','CA',68834,'No','empty','empty','empty','empty','empty'),(31,'National Women’s Political Caucus','NWPC',24,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Salinas','CA',41117,'Yes','empty','empty','empty','empty','empty'),(32,'Occupy Monterey','OM',5,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Monterey','CA',53576,'No','empty','empty','empty','empty','empty'),(33,'Ohlone Costanoan Esselen Nation','OCEN',20,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Marina','CA',52114,'No','empty','empty','empty','empty','empty'),(34,'Pantsuit Nation—Monterey County ','PNC',24,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Seaside','CA',12905,'No','empty','empty','empty','empty','empty'),(35,'Peace Coalition of Monterey County','PCOMC',3,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Monterey','CA',33338,'N/A','empty','empty','empty','empty','empty'),(36,'Peace Corps Volunteers (Returned)','PCV(',15,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Salinas','CA',20785,'N/A','empty','empty','empty','empty','empty'),(37,'Planned Parenthood Mar Monte','PPMM',26,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Monterey','CA',16908,'Yes','empty','empty','empty','empty','empty'),(38,'Pride of Monterey County','POMC',3,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Salinas','CA',44070,'N/A','empty','empty','empty','empty','empty'),(39,'Progressive Democrats of America','PDOA',26,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Salinas','CA',21544,'Yes','empty','empty','empty','empty','empty'),(40,'Protect Monterey County/Yes on Z','PMCOZ',15,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Salinas','CA',78086,'Yes','empty','empty','empty','empty','empty'),(41,'Radio Bilingue 90.9 KHDC','RB9K',24,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Seaside','CA',56487,'N/A','empty','empty','empty','empty','empty'),(42,'Radio Campesina 107.9 KSEA/Cesar Chavez Foundation','RC1KCF',2,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Marina','CA',65244,'Yes','empty','empty','empty','empty','empty'),(43,'Restorative Justice Partners','RJP',24,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Monterey','CA',46913,'N/A','empty','empty','empty','empty','empty'),(44,'Safe Ag Safe Schools','SASS',4,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Marina','CA',75639,'N/A','empty','empty','empty','empty','empty'),(45,'Save Our Shores','SOS',19,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Seaside','CA',88417,'N/A','empty','empty','empty','empty','empty'),(46,'SEIU Local 521 ','SL5',3,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Marina','CA',75807,'Yes','empty','empty','empty','empty','empty'),(47,'Sierra Club - Ventana Chapter','SC-VC',17,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Salinas','CA',10527,'N/A','empty','empty','empty','empty','empty'),(48,'Surfrider Foundation - Monterey Chapter','SF-MC',14,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Salinas','CA',74806,'Yes','empty','empty','empty','empty','empty'),(49,'Unitarian Universalist Church - Social Justice Action','UUC-SJA',12,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Marina','CA',15361,'Yes','empty','empty','empty','empty','empty'),(50,'United Farm Workers (UFW)','UFW(',12,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Monterey','CA',37402,'Yes','empty','empty','empty','empty','empty'),(51,'United Nations Association - Monterey Bay ','UNA-MB',25,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Marina','CA',12764,'Yes','empty','empty','empty','empty','empty'),(52,'UNITEHERE Local 483 ','UL4',9,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Salinas','CA',98111,'No','empty','empty','empty','empty','empty'),(53,'Veterans for Peace - Monterey Chapter','VFP-MC',23,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Seaside','CA',53521,'N/A','empty','empty','empty','empty','empty'),(54,'Whites for Racial Equity - a SURJ (Showing up for Racial Justice) affiliate','WFRE-AS(UFRJA',25,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Salinas','CA',49051,'N/A','empty','empty','empty','empty','empty'),(55,'WILPF -Womens Int’l League for Peace & Freedom','W-ILFP&F',3,'empty','empty','empty','empty','empty','empty','empty','empty','empty','empty','Marina','CA',32393,'Yes','empty','empty','empty','empty','empty');
/*!40000 ALTER TABLE `Organizations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oe_admin`
--

DROP TABLE IF EXISTS `oe_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oe_admin` (
  `adminId` tinyint(4) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(40) DEFAULT NULL,
  `firstName` varchar(25) DEFAULT NULL,
  `lastName` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oe_admin`
--

LOCK TABLES `oe_admin` WRITE;
/*!40000 ALTER TABLE `oe_admin` DISABLE KEYS */;
INSERT INTO `oe_admin` VALUES (100,'admin','6b3b182f2b38f1bed2d5e4217443e2d08f534778','Catherine','Crocket');
/*!40000 ALTER TABLE `oe_admin` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-07 23:59:28
