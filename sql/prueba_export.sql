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
  `id_page` int(10) DEFAULT NULL,
  `has_gallery` int(1) NOT NULL,
  `url_plan` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_home_page` (`id_page`),
  CONSTRAINT `FK_home_page` FOREIGN KEY (`id_page`) REFERENCES `page` (`id_page`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `home`
--

LOCK TABLES `home` WRITE;
/*!40000 ALTER TABLE `home` DISABLE KEYS */;
INSERT INTO `home` VALUES (1,'amazonas','../images/home/bg/img1.jpg','../images/home/img_destino/img_amazonas.png','fbsection1','Amazonas',1,1,''),(2,'boyaca','../images/home/bg/img2.jpg','../images/home/img_destino/img_boyaca.png','fbsection2','Boyaca',1,1,''),(3,'eje_cafetero','../images/home/bg/img3.jpg','../images/home/img_destino/img_eje_cafetero.png','fbsection3','Eje Cafetero',1,1,''),(4,'guajira','../images/home/bg/img4.jpg','../images/home/img_destino/img_guajira.png','fbsection4','Guajira',1,0,''),(5,'llanos_orientales','../images/home/bg/img5.jpg','../images/home/img_destino/img_llanos_orientales.png','fbsection5','Llanos Orientales',1,0,''),(6,'medellin','../images/home/bg/img6.jpg','../images/home/img_destino/img_medellin.png','fbsection6','Medellin',1,0,''),(7,'san_andres','../images/home/bg/img7.jpg','../images/home/img_destino/img_san_andres.png','fbsection7','San Andres',1,0,''),(8,'san_gil','../images/home/bg/img8.jpg','../images/home/img_destino/img_san_gil.jpg','fbsection8','San Gil',1,0,''),(9,'cartagena','../images/home/bg/img10.jpg','../images/home/img_destino/img_cartagena.png','fbsection9','Cartagena',1,0,'');
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
  `src` varchar(150) NOT NULL,
  `id_seccion` int(10) NOT NULL,
  PRIMARY KEY (`id_img`),
  KEY `FK_imagen_galeria_home` (`id_seccion`),
  CONSTRAINT `FK_imagen_galeria_home` FOREIGN KEY (`id_seccion`) REFERENCES `home` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagen_galeria`
--

LOCK TABLES `imagen_galeria` WRITE;
/*!40000 ALTER TABLE `imagen_galeria` DISABLE KEYS */;
INSERT INTO `imagen_galeria` VALUES (1,'Stones - from Apple images','Stones','../images/galeria/baru/stones.jpg',1),(2,'Flowing Rock Caption','Flowing Rock','../images/galeria/baru/flowing-rock.jpg',1),(3,'Apple nature desktop images','Grass Blades','../images/galeria/baru/grass-blades.jpg',1),(4,'Ut rutrum, lectus eu pulvinar elementum, lacus urna vestibulum ipsum','Ladybug','../images/galeria/baru/ladybug.jpg',1),(5,'Black &amp; White','Lightning','../images/galeria/baru/lightning.jpg',1),(6,'Fusce quam mi, sagittis nec, adipiscing at, sodales quis','Lotus','../images/galeria/baru/lotus.jpg',1),(7,'Suspendisse volutpat posuere dui. Suspendisse sit amet lorem et risus faucibus pellentesque.','Mojave','../images/galeria/baru/mojave.jpg',1),(8,'Proin erat nisi','Pier','../images/galeria/baru/pier.jpg',1),(9,'Caption text from title','Sea Mist','../images/galeria/baru/sea-mist.jpg',1),(10,'Aventura Sin Archivar','Aventura sin Archivar','../images/galeria/baru/aventura1.jpg',1),(11,'Aventura Sin Archivar','Aventura sin Archivar','../images/galeria/baru/aventura2.jpg',1),(12,'Aventura sin Archivar','Aventura sin Archivar','../images/galeria/baru/aventura3.jpg',1),(13,'Aventura sin Archivar','Aventura sin Archivar','../images/galeria/baru/aventura4.jpg',1);
/*!40000 ALTER TABLE `imagen_galeria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `page` (
  `id_page` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_page`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `page`
--

LOCK TABLES `page` WRITE;
/*!40000 ALTER TABLE `page` DISABLE KEYS */;
INSERT INTO `page` VALUES (1,'home'),(2,'decamerun'),(3,'galeria');
/*!40000 ALTER TABLE `page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salidas_pedagogicas`
--

DROP TABLE IF EXISTS `salidas_pedagogicas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salidas_pedagogicas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) DEFAULT NULL,
  `alt` varchar(50) DEFAULT NULL,
  `src` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salidas_pedagogicas`
--

LOCK TABLES `salidas_pedagogicas` WRITE;
/*!40000 ALTER TABLE `salidas_pedagogicas` DISABLE KEYS */;
INSERT INTO `salidas_pedagogicas` VALUES (3,'','img1','../images/galeria/salidas_pedagogicas/img1.jpg'),(4,'','img2','../images/galeria/salidas_pedagogicas/img2.jpg'),(5,'','img3','../images/galeria/salidas_pedagogicas/img3.jpg'),(6,'','img4','../images/galeria/salidas_pedagogicas/img4.jpg'),(7,'','img5','../images/galeria/salidas_pedagogicas/img5.jpg'),(8,'','img6','../images/galeria/salidas_pedagogicas/img6.jpg'),(9,'','img7','../images/galeria/salidas_pedagogicas/img7.jpg'),(10,'','img8','../images/galeria/salidas_pedagogicas/img8.jpg'),(11,'','img9','../images/galeria/salidas_pedagogicas/img9.jpg'),(12,'','img10','../images/galeria/salidas_pedagogicas/img10.jpg'),(13,'','img11','../images/galeria/salidas_pedagogicas/img11.jpg'),(14,'','img12','../images/galeria/salidas_pedagogicas/img12.jpg'),(15,'','img13','../images/galeria/salidas_pedagogicas/img13.jpg'),(16,'','img14','../images/galeria/salidas_pedagogicas/img14.jpg'),(17,'','img15','../images/galeria/salidas_pedagogicas/img15.jpg'),(18,'','img16','../images/galeria/salidas_pedagogicas/img16.jpg'),(19,'','img17','../images/galeria/salidas_pedagogicas/img17.jpg'),(20,'','img18','../images/galeria/salidas_pedagogicas/img18.jpg'),(21,'','img19','../images/galeria/salidas_pedagogicas/img19.jpg'),(22,'','img20','../images/galeria/salidas_pedagogicas/img20.jpg'),(23,'','img21','../images/galeria/salidas_pedagogicas/img21.jpg');
/*!40000 ALTER TABLE `salidas_pedagogicas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-04-15 21:18:09
