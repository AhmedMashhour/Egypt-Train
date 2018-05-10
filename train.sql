-- MySQL dump 10.16  Distrib 10.1.28-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: train
-- ------------------------------------------------------
-- Server version	10.1.28-MariaDB

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
-- Table structure for table `train_list`
--

DROP TABLE IF EXISTS `train_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `train_list` (
  `t_id` int(11) NOT NULL,
  `go` varchar(255) DEFAULT NULL,
  `arrive` varchar(255) DEFAULT NULL,
  `interval_time` varchar(255) DEFAULT NULL,
  `speed` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `from_station` varchar(255) DEFAULT NULL,
  `to_station` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `train_list`
--

LOCK TABLES `train_list` WRITE;
/*!40000 ALTER TABLE `train_list` DISABLE KEYS */;
INSERT INTO `train_list` VALUES (124,'2:30 AM','5:30 AM','6 hour','170km/h','sleap','Alex','Suez'),(159,'2:30 AM','10:30 AM','8 hour','120km/h','first','Cairo','Suez'),(164,'2:30 AM','5:30 AM','9 hour','110km/h','expries','Suez','Sohag'),(173,'2:30 AM','1:30 AM','2 hour','180km/h','vip','Sohag','Assuit'),(194,'2:30 AM','8:30 AM','9 hour','110km/h','expries','Qena','Ramses'),(204,'2:30 AM','8:30 AM','4 hour','100km/h','sleap','Minya','Suez'),(1373,'2:30 AM','1:30 AM','12 hour','180km/h','vip','Cairo','Assuit'),(1531,'2:30 AM','18:30 AM','7 hour','160km/h','vip','Assuit','Cairo'),(1562,'2:30 AM','11:30 AM','4 hour','120km/h','expries','Cairo','Suez'),(1593,'2:30 AM','9:30 AM','10 hour','160km/h','expries','Banha','Qalub');
/*!40000 ALTER TABLE `train_list` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-08 11:42:58
