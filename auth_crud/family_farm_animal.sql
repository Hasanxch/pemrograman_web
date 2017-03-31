-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: family_farm
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.19-MariaDB

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
-- Table structure for table `animal`
--

DROP TABLE IF EXISTS `animal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `animal` (
  `animal_id` int(11) NOT NULL AUTO_INCREMENT,
  `animal_type_id` int(11) unsigned NOT NULL,
  `description` mediumtext,
  `weight` int(10) unsigned DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `sex` enum('m','f') NOT NULL,
  `eartag` varchar(45) DEFAULT NULL,
  `breed` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `born` date NOT NULL,
  PRIMARY KEY (`animal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `animal`
--

LOCK TABLES `animal` WRITE;
/*!40000 ALTER TABLE `animal` DISABLE KEYS */;
INSERT INTO `animal` VALUES (31,1,'sapi sehat',320,'tersedia','m','S002','Limousin','Putih','2013-02-01'),(32,1,'sapi sehat',234,'tersedia','m','S003','Limousin','Hitam','2013-02-02'),(33,1,'sapi sehat',231,'tersedia','m','S004','Brahman','Hitam','2013-02-03'),(34,1,'sapi sehat',421,'kosong','m','S005','Brahman','Hitam','2013-02-04'),(35,1,'sapi sehat perkasa',531,'tersedia','f','S006','Brahman','Hitam','2013-02-05'),(36,1,'sapi sehat',224,'tersedia','m','S007','Brahman','Hitam','2013-02-06'),(37,1,'sapi sehat',123,'tersedia','m','S008','Brahman','Coklat','2013-02-07'),(38,1,'sapi super',214,'tersedia','f','S009','Lokal','Coklat','2013-02-08'),(39,1,'sapi sehat',435,'tersedia','m','S010','Lokal','Coklat','2013-02-09'),(40,1,'sapi hina',234,'tersedia','m','S011','Lokal','Coklat','2013-02-10'),(41,2,'kambing hoki',120,'tersedia','m','K001','Etawa','Putih','2014-05-09'),(42,2,'kambing hoki',12,'tersedia','m','K002','Bor','Putih','2014-05-10'),(43,2,'kambing gule',50,'tersedia','f','K003','Lokal','Putih','2014-05-11'),(44,2,'kambing hoki',56,'kosong','m','K004','Lokal','Putih','2014-05-12'),(45,2,'kambing jantan',44,'tersedia','m','K005','Lokal','Putih','2014-05-13'),(46,2,'kambing hoki',66,'tersedia','f','K006','Lokal','Coklat','2014-05-14'),(47,2,'kambing hoki',22,'tersedia','m','K007','Etawa','Coklat','2014-05-15'),(48,3,'lele murah',0,'tersedia','','','Sanguriang','','2017-01-01'),(49,3,'lele murah',0,'tersedia','','','Sanguriang','','2017-01-02'),(50,3,'lele spesia',0,'tersedia','','','Sanguriang','','2017-01-03'),(51,3,'lele murah',0,'tersedia','','','Dumbo','','2017-01-04'),(52,3,'lele mania',0,'tersedia','','','Dumbo','','2017-01-05'),(53,3,'lele murah',0,'tersedia','','','Dumbo','','2017-01-06'),(54,3,'lele murah',0,'tersedia','','','Sanguriang','','2017-01-07'),(55,4,'gurame lezat',0,'tersedia','','','Albino','','2017-01-08'),(56,4,'gurame murah',0,'tersedia','','','Lokal','','2017-01-09'),(57,4,'gurame lezat',0,'tersedia','','','Lokal','','2017-01-10'),(58,4,'gurame joss',0,'tersedia','','','Lokal','','2017-01-11'),(59,4,'gurame lezat',0,'tersedia','','','Lokal','','2017-01-12'),(60,4,'gurame lezat',0,'tersedia','','','Bule','','2017-01-13');
/*!40000 ALTER TABLE `animal` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-31 10:40:14
