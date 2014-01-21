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
-- Table structure for table `galeria`
--

DROP TABLE IF EXISTS `galeria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galeria` (
  `id_gal` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_gal`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeria`
--

LOCK TABLES `galeria` WRITE;
/*!40000 ALTER TABLE `galeria` DISABLE KEYS */;
INSERT INTO `galeria` VALUES (1,'baru');
/*!40000 ALTER TABLE `galeria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `home`
--

DROP TABLE IF EXISTS `home`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `home` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `destino` varchar(50) NOT NULL,
  `url_fondo` varchar(100) NOT NULL,
  `url_img_destino` varchar(100) NOT NULL,
  `tag_id` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home`
--

LOCK TABLES `home` WRITE;
/*!40000 ALTER TABLE `home` DISABLE KEYS */;
INSERT INTO `home` VALUES (1,'amazonas','../images/home/bg/img1.jpg','../images/home/img_destino/img_amazonas.png','fbsection1','Amazonas'),(2,'boyaca','../images/home/bg/img2.jpg','../images/home/img_destino/img_boyaca.png','fbsection2','Boyaca'),(3,'eje_cafetero','../images/home/bg/img3.jpg','../images/home/img_destino/img_eje_cafetero.png','fbsection3','Eje Cafetero'),(4,'guajira','../images/home/bg/img4.jpg','../images/home/img_destino/img_guajira.png','fbsection4','Guajira'),(5,'llanos_orientales','../images/home/bg/img5.jpg','../images/home/img_destino/img_llanos_orientales.png','fbsection5','Llanos Orientales'),(6,'medellin','../images/home/bg/img6.jpg','../images/home/img_destino/img_medellin.png','fbsection6','Medellin'),(7,'san_andres','../images/home/bg/img7.jpg','../images/home/img_destino/img_san_andres.png','fbsection7','San Andres'),(8,'san_gil','../images/home/bg/img8.jpg','../images/home/img_destino/img_san_gil.jpg','fbsection8','San Gil'),(9,'cartagena','../images/home/bg/img10.jpg','../images/home/img_destino/img_cartagena.jpg','fbsection9','Cartagena');
/*!40000 ALTER TABLE `home` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagen_galeria`
--

DROP TABLE IF EXISTS `imagen_galeria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagen_galeria` (
  `id_img` int(10) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `alt` varchar(100) DEFAULT NULL,
  `id_galeria` int(10) NOT NULL,
  `src` varchar(150) NOT NULL,
  PRIMARY KEY (`id_img`),
  KEY `FK_imagen_galeria_galeria` (`id_galeria`),
  CONSTRAINT `FK_imagen_galeria_galeria` FOREIGN KEY (`id_galeria`) REFERENCES `galeria` (`id_gal`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagen_galeria`
--

LOCK TABLES `imagen_galeria` WRITE;
/*!40000 ALTER TABLE `imagen_galeria` DISABLE KEYS */;
INSERT INTO `imagen_galeria` VALUES (1,'Stones - from Apple images','Stones',1,'../images/galeria/baru/stones.jpg'),(2,'Flowing Rock Caption','Flowing Rock',1,'../images/galeria/baru/flowing-rock.jpg'),(3,'Apple nature desktop images','Grass Blades',1,'../images/galeria/baru/grass-blades.jpg'),(4,'Ut rutrum, lectus eu pulvinar elementum, lacus urna vestibulum ipsum','Ladybug',1,'../images/galeria/baru/ladybug.jpg'),(5,'Black &amp; White','Lightning',1,'../images/galeria/baru/lightning.jpg'),(6,'Fusce quam mi, sagittis nec, adipiscing at, sodales quis','Lotus',1,'../images/galeria/baru/lotus.jpg'),(7,'Suspendisse volutpat posuere dui. Suspendisse sit amet lorem et risus faucibus pellentesque.','Mojave',1,'../images/galeria/baru/mojave.jpg'),(8,'Proin erat nisi','Pier',1,'../images/galeria/baru/pier.jpg'),(9,'Caption text from title','Sea Mist',1,'../images/galeria/baru/sea-mist.jpg');
/*!40000 ALTER TABLE `imagen_galeria` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-01-20 23:08:24
