-- MySQL dump 10.13  Distrib 5.1.72, for Win32 (ia32)
--
-- Host: localhost    Database: viajes
-- ------------------------------------------------------
-- Server version	5.1.72-community

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
-- Table structure for table `home`
--

DROP TABLE IF EXISTS `home`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `home` (
  `id` int(10) NOT NULL,
  `destino` varchar(50) NOT NULL,
  `url_fondo` varchar(100) NOT NULL,
  `url_img_destino` varchar(100) NOT NULL,
  `tag_id` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home`
--

LOCK TABLES `home` WRITE;
/*!40000 ALTER TABLE `home` DISABLE KEYS */;
INSERT INTO `home` VALUES (1,'amazonas','../images/home/bg/img1.jpg','../images/home/img_destino/img_amazonas.png','fbsection1','Amazonas'),(2,'boyaca','../images/home/bg/img2.jpg','../images/home/img_destino/img_boyaca.png','fbsection2','Boyaca'),(3,'eje_cafetero','../images/home/bg/img3.jpg','../images/home/img_destino/img_eje_cafetero.png','fbsection3','Eje Cafetero'),(4,'guajira','../images/home/bg/img4.jpg','../images/home/img_destino/img_guajira.png','fbsection4','Guajira'),(5,'llanos_orientales','../images/home/bg/img5.jpg','../images/home/img_destino/img_llanos_orientales.png','fbsection5','Llanos Orientales'),(6,'medellin','../images/home/bg/img6.jpg','../images/home/img_destino/img_medellin.png','fbsection6','Medellin'),(7,'san_andres','../images/home/bg/img7.jpg','../images/home/img_destino/img_san_andres.png','fbsection7','San Andres'),(8,'san_gil','../images/home/bg/img8.jpg','../images/home/img_destino/img_san_gil.jpg','fbsection8','San Gil');
/*!40000 ALTER TABLE `home` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-01-12 22:09:17
