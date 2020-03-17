-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: yankuserver.com    Database: yankuser_minunu
-- ------------------------------------------------------
-- Server version	5.5.52-cll

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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `idclientes` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `pw` varchar(45) NOT NULL,
  `idmp` varchar(45) NOT NULL,
  PRIMARY KEY (`idclientes`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'test','testl','test@test.com','55555555','pasdaspd','a9s8d7a9sd8'),(2,'Test','Test','Test','Test','$2y$10$F126RdHdZz3J1ZBfJwu9YuItNqr4DFLp8TYtxz','23k4jh2kljhf89'),(3,'Test2','Test','Test','Test2','$2y$10$ZPqOQI3W958AIZ8HPNGL5.OLDI0Wc41bh4IyVu','23k4jh2kljhf89'),(4,'Test2','Test','Test','Test2','$2y$10$u6eAHpvgcI9cFb2.cdBUG.IKJWRBryMmOr/TCZ','23k4jh2kljhf89'),(5,'Test2','Test','Test','Test2','$2y$10$7OpfeBsWRa/GRmigKwIqS.toNuqxl2VvBtlLuS','23k4jh2kljhf89'),(6,'Test2','Test','Test','Test2','$2y$10$lTboJSV3jEtwncNn9Dyeru/Ic544odJPjvOCUX','23k4jh2kljhf89'),(7,'Test2','Test','Test','Test2','$2y$10$/WhzR9XGtWMJIWzn14oDgePAHmx1CgmRiPpFlK','23k4jh2kljhf89'),(8,'Test2','Test','Test','Test2','$2y$10$hpd/JuhxfS.vTOhp78.LD.oikwixveXaDCWwK/','23k4jh2kljhf89'),(9,'Walter','Torres BDII','test6@test.com','9612799414','$2y$10$E8tXEjA1GTkkABWblnhCQ.2P4vcZOw.2bUUmao','218612728-6CZSkuM2cJTZbn');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `direcciones`
--

DROP TABLE IF EXISTS `direcciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `direcciones` (
  `iddirecciones` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` varchar(45) NOT NULL,
  `address` mediumtext NOT NULL,
  `number` varchar(45) NOT NULL,
  `inside_number` varchar(45) NOT NULL,
  `locality` varchar(45) NOT NULL,
  `sublocality` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `deleg` varchar(45) NOT NULL,
  `extra` mediumtext NOT NULL,
  `zip` varchar(45) NOT NULL,
  `lat` varchar(45) NOT NULL,
  `lng` varchar(45) NOT NULL,
  PRIMARY KEY (`iddirecciones`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `direcciones`
--

LOCK TABLES `direcciones` WRITE;
/*!40000 ALTER TABLE `direcciones` DISABLE KEYS */;
INSERT INTO `direcciones` VALUES (1,'6','calle del arco','188','188','df','test','test','test','test','test','test','test'),(2,'7','calle del arco','188','188','df','test','test','test','test','test','test','test'),(3,'8','calle del arco','188','188','df','test','test','test','test','test','test','test'),(4,'9','Cerrada Miguel NoreÃ±a 18, San JosÃ© Insurgen','18','No aplica','Ciudad de MÃ©xico','San JosÃ© Insurgentes','D.F.','Benito JuÃ¡rez','','03900','19.432438598971746','-99.13470268249512');
/*!40000 ALTER TABLE `direcciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registros`
--

DROP TABLE IF EXISTS `registros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registros` (
  `idregistros` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `hora` varchar(45) NOT NULL,
  `fecha` varchar(45) NOT NULL,
  PRIMARY KEY (`idregistros`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registros`
--

LOCK TABLES `registros` WRITE;
/*!40000 ALTER TABLE `registros` DISABLE KEYS */;
INSERT INTO `registros` VALUES (1,'Dana','danatrejo828@gmail.com','5:17:26 PM','18/08/2016'),(2,'Mariana','guzman.saintmartin@gmail.com','12:52:50 PM','19/08/2016'),(3,'Pedro JuÃ¡rez','pedro@gmail.com','5:50:35 PM','23/08/2016'),(4,'Prueba de formulario','test@test.com','9:56:21 AM','24/08/2016'),(5,'Walter Test','test@test.com','11:19:02 AM','24/08/2016'),(6,'No es spam','test@tes.com','11:57:12 AM','24/08/2016'),(7,'Walter Test','test@test.com','11:59:13 AM','24/08/2016'),(8,'annia','laura.ihmexico@gmail.com','12:03:47 PM','24/08/2016'),(9,'Cinthia raquel becerra almaraz','cinthia.1127@hormail.com','12:29:24 PM','09/09/2016'),(10,'ty','tyutyututy','5:03:48 PM','12/09/2016'),(11,'Alfonsina ','a.riestra18@gmail.com','6:03:31 PM','12/09/2016'),(12,'pruebita neu','pruebaneu@neu.com','3:06:44 PM','22/09/2016');
/*!40000 ALTER TABLE `registros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicios`
--

DROP TABLE IF EXISTS `servicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicios` (
  `idservicios` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` varchar(45) NOT NULL,
  `name_user` varchar(45) NOT NULL,
  `frec` varchar(45) NOT NULL,
  `hours` varchar(45) NOT NULL,
  `amount` varchar(45) NOT NULL,
  `date_service` varchar(45) NOT NULL,
  `time_service` varchar(45) NOT NULL,
  `address` varchar(100) NOT NULL,
  `nunu` varchar(45) NOT NULL DEFAULT 'pendiente',
  `idnunu` varchar(45) NOT NULL DEFAULT 'pendiente',
  `status` varchar(45) NOT NULL,
  `check_in` varchar(45) NOT NULL DEFAULT '0',
  `check_out` varchar(45) NOT NULL DEFAULT '0',
  `type` varchar(45) NOT NULL DEFAULT 'Normal',
  PRIMARY KEY (`idservicios`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicios`
--

LOCK TABLES `servicios` WRITE;
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
INSERT INTO `servicios` VALUES (1,'8','45','188','188','test3','test','test','test','pendiente','pendiente','test','0','0','test'),(2,'9','Walter Torres BDII','Solo una vez','3','240','2016-06-26','11:00 AM','Cerrada Miguel NoreÃ±a 18, San JosÃ© Insurgentes, Ciudad de MÃ©xico, MÃ©xico','pendiente','pendiente','Cobrado','0','0','ReservaciÃ³n');
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'yankuser_minunu'
--

--
-- Dumping routines for database 'yankuser_minunu'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-28 11:14:36
