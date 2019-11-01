-- MariaDB dump 10.17  Distrib 10.4.6-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: intersalles_2019
-- ------------------------------------------------------
-- Server version	10.4.6-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tor_canchas`
--

DROP TABLE IF EXISTS `tor_canchas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tor_canchas` (
  `cancha_id` int(11) NOT NULL AUTO_INCREMENT,
  `cancha` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `deporte_id` int(11) DEFAULT NULL,
  `contacto` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `responsable` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `latitud` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `longitud` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`cancha_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tor_canchas`
--

LOCK TABLES `tor_canchas` WRITE;
/*!40000 ALTER TABLE `tor_canchas` DISABLE KEYS */;
INSERT INTO `tor_canchas` VALUES (1,'Francés La Salle',NULL,1,'8714128279','Prof. Sergio Ibarra Escareño','Av. Las Huertas S/N Fraccionamiento Altozano, Gómez Palacio, Durango','25.614739','-103.432805'),(2,'Deportiva de Lerdo',NULL,2,'8713372370','Profra. Samantha Frost Corral','Boulevard Miguel Alemán S/N Col. Magisterial, Lerdo, Durango','25.551380','-103.511632'),(3,'Francés La Salle ',NULL,3,'8717842359','Prof. Daniel García Rubio ','Av. Las Huertas S/N Fraccionamiento Altozano, Gómez Palacio, Durango','25.614739','-103.432805'),(4,'Francés La Salle ',NULL,3,'8712657731','Prof. Yuri Ceniceros','Av. Las Huertas S/N Fraccionamiento Altozano, Gómez Palacio, Durango','25.614739','-103.432805'),(5,'Ibero Torreón',NULL,5,'8714664964','Profra. Alejandra Martínez Benavente','Calzada Iberoamericana No. 2255, Torreón, Coahuila','25.610282','-103.4022787'),(6,'ULSA Laguna',NULL,4,'8714852138','Profra. Daniela Frausto Morúa','Canatlán #150, Parque Industrial Lagunero, Gómez Palacio , Durango','25.551181','-103.4671498'),(7,'Francés La Salle ',NULL,8,'8713804332','Profra. Citlalic Jiménez','Av. Las Huertas S/N Fraccionamiento Altozano, Gómez Palacio, Durango','25.614739','-103.432805'),(8,'Casa Club Altozano',NULL,6,'8713999608','Prof. Roberto Amador','La Nueva Laguna, Carretera La Unión - Santa Rita Km. 1.5 ','25.614806','-103.424676'),(9,'Francés La Salle ',NULL,9,'8711327186','Daniel Sánchez ','Av. Las Huertas S/N Fraccionamiento Altozano, Gómez Palacio, Durango','25.614739','-103.432805'),(10,'Preparatoria La Salle Torreón',NULL,7,'8713472361','Profra. Denisse Martínez Navarrete','Boulevard Río Nazas 27130 Torreón','25.559031','-103.451479'),(11,'Preparatoria La Salle Torreón',NULL,7,'8711326992','Prof. Jorge Soriano Escajeda','Boulevard Río Nazas 27130 Torreón','25.559031','-103.451479'),(24,'Gimnasio Rodolfo Franco Jaminé',NULL,3,'5552789500','Lic. Fabián Alcaraz','Benjamín Franklin 45 Col. Condesa, Alcaldía Cuauhtémoc, CDMX','19.407322','-99.1856175'),(25,'Polideportivo Cancha Central',NULL,NULL,'5552789500','Lic. Fabián Alcaraz','Benjamín Franklin 58 Col. Escandón, Alcaldía Miguel Hidalgo, CDMX','19.4054028','-99.1808452'),(26,'Unidad Deportiva Santa Lucia',NULL,NULL,'5552789500','Lic. Fabián Alcaraz','Av Tamaulipas 3 Col. Garcimarrero, Álvaro Obregón, CDMX','19.3659666','-99.2420001'),(27,'Sala Juan XXIII',NULL,1,'5552789500','Lic. Fabián Alcaraz','Benjamín Franklin 45 Col. Condesa, Alcaldía Cuauhtémoc, CDMX','19.407322','-99.1856175'),(32,'Estadio',NULL,4,'5552789500','Lic. Fabián Alcaraz','Av. Tamaulipas 3, Col Zona Federal, Alc Álvaro Obregón, CDMX, CP 01357','19.387427','-99.211581'),(28,'Polideportivo Cancha 2',NULL,3,'5552789500','Lic. Fabián Alcaraz','Benjamín Franklin 58 Col. Escandón, Alcaldía Miguel Hidalgo, CDMX','19.4054028','-99.1808452'),(29,'Polideportivo Cancha 1',NULL,3,'5552789500','Lic. Fabián Alcaraz','Benjamín Franklin 58 Col. Escandón, Alcaldía Miguel Hidalgo, CDMX','19.4054028','-99.1808452'),(30,'Polideportivo Cancha Central',NULL,3,'5552789500','Lic. Fabián Alcaraz','Benjamín Franklin 58 Col. Escandón, Alcaldía Miguel Hidalgo, CDMX','19.4054028','-99.1808452'),(31,'Polideportivo Cancha 3',NULL,3,'5552789500','Lic. Fabián Alcaraz','Benjamín Franklin 58 Col. Escandón, Alcaldía Miguel Hidalgo, CDMX','19.4054028','-99.1808452'),(33,'Cancha 2',NULL,4,'5552789500','Lic. Fabián Alcaraz','Av. Tamaulipas 3, Col Zona Federal, Alc Álvaro Obregón, CDMX, CP 01357','19.387427','-99.211581');
/*!40000 ALTER TABLE `tor_canchas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tor_delegaciones`
--

DROP TABLE IF EXISTS `tor_delegaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tor_delegaciones` (
  `delegacion_id` int(11) NOT NULL AUTO_INCREMENT,
  `delegacion` varchar(255) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `icono` varchar(255) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `Sitio` varchar(255) DEFAULT NULL,
  `activo` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`delegacion_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tor_delegaciones`
--

LOCK TABLES `tor_delegaciones` WRITE;
/*!40000 ALTER TABLE `tor_delegaciones` DISABLE KEYS */;
INSERT INTO `tor_delegaciones` VALUES (1,'Universidad La Salle México','México','uni_mexico','uni_mexico','http://www.lasalle.mx/',1),(2,'Universidad La Salle Puebla','Puebla','uni_puebla','uni_puebla','https://www.ulsapuebla.mx/',0),(3,'Universidad La Salle Morelia','Morelia','uni_morelia','uni_morelia','http://www.lasallemorelia.edu.mx/',1),(4,'Universidad La Salle Cancún','Cancún','uni_cancun','uni_cancun','http://www.lasallecancun.edu.mx/',1),(5,'Universidad La Salle Oaxaca','Oaxaca','uni_oaxaca','uni_oaxaca','http://www.ulsaoaxaca.edu.mx/',1),(6,'Universidad La Salle Pachuca','Pachuca','uni_pachuca','uni_pachuca','http://www.lasallep.edu.mx/',1),(7,'Universidad La Salle Cuernavaca ','Cuernavaca','uni_cuernavaca','uni_cuernavaca','https://www.lasallecuernavaca.edu.mx/wp/',1),(8,'Universidad La Salle Nezahualcóyotl ','Nezahualcóyotl','uni_neza','uni_neza','https://ulsaneza.edu.mx/',1),(9,'Universidad La Salle Saltillo','Saltillo','uni_saltillo','uni_saltillo','https://www.ulsasaltillo.edu.mx/',1),(10,'Universidad La Salle Bajío','Bajío','uni_bajio','uni_bajio','http://bajio.delasalle.edu.mx/',1),(11,'Universidad La Salle Chihuahua','Chihuahua','uni_chihuahua','uni_chihuahua','https://www.ulsachihuahua.edu.mx/site/',1),(12,'Universidad La Salle Laguna','Laguna','uni_laguna','uni_laguna','http://ulsalaguna.edu.mx/',1),(17,'Universidad La Salle Victoria','Victoria','uni_victoria','uni_victoria','https://www.lasallevictoria.edu.mx/',1),(18,'Universidad La Salle Noroeste','Noroeste','uni_noroeste','uni_noroeste','http://www.ulsa-noroeste.edu.mx/',1);
/*!40000 ALTER TABLE `tor_delegaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tor_deportes`
--

DROP TABLE IF EXISTS `tor_deportes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tor_deportes` (
  `deporte_id` int(11) NOT NULL AUTO_INCREMENT,
  `deporte` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `icono` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Activo` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`deporte_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tor_deportes`
--

LOCK TABLES `tor_deportes` WRITE;
/*!40000 ALTER TABLE `tor_deportes` DISABLE KEYS */;
INSERT INTO `tor_deportes` VALUES (1,'Ajedrez','Juegos2019_Ajedrez0','Ajedrez','dep_ajedrez',1),(2,'Atletismo','ico_atletismo','ATLETISMO','dep_atletismo',0),(3,'Basquetbol','Juegos2019_Basquetbol0','Básquetbol','dep_basquetbol',1),(4,'Futbol Rápido','Juegos2019_FutbolRapido0','Futbol Rápido','dep_rapido',1),(5,'Futbol Soccer','Juegos2019_FutbolSoccer0','Futbol Soccer','dep_futbol',1),(6,'Tenis','Juegos2019_Tenis0','Tenis','dep_tenis',1),(7,'Voleibol ','Juegos2019_Voleibol0','Voleibol','dep_voleibol',1),(8,'Taekwondo','Juegos2019_Taekondo0','Taekwondo','dep_taekwondo',1),(9,'Tocho Bandera','Juegos2019_TochoBandera0','Tocho Bandera','dep_americano',1),(10,'Voleibol de Playa','ico_voleibol	','Voleibol','dep_voleibol',0),(12,'Handball','Juegos2019_HandBall0','Handball','dep_handball',1),(13,'Natación','Juegos2019_Natacion0','Natación','dep_natacion',1),(14,'CrossFit','Juegos2019_Crossfit0','CrossFit','dep_crossfit',1);
/*!40000 ALTER TABLE `tor_deportes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tor_equipos`
--

DROP TABLE IF EXISTS `tor_equipos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tor_equipos` (
  `equipo_id` int(11) NOT NULL AUTO_INCREMENT,
  `equipo` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `deporte_id` int(11) DEFAULT NULL,
  `rama_id` int(11) DEFAULT NULL,
  `delegacion_id` int(11) DEFAULT NULL,
  `vigente` int(1) DEFAULT 1,
  PRIMARY KEY (`equipo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=195 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tor_equipos`
--

LOCK TABLES `tor_equipos` WRITE;
/*!40000 ALTER TABLE `tor_equipos` DISABLE KEYS */;
INSERT INTO `tor_equipos` VALUES (1,'Bajío',1,3,10,0),(2,'México',1,3,1,0),(3,'Puebla',1,3,2,0),(4,'Oaxaca',1,3,5,0),(5,'Neza',1,3,8,0),(6,'Cancún',1,3,4,0),(7,'Laguna',1,3,12,0),(8,'Pachuca',1,3,6,0),(9,'Neza',3,2,8,0),(10,'Morelia',3,2,3,0),(11,'Cancún',3,2,4,0),(12,'Puebla',3,2,2,0),(13,'Cuernavaca',3,2,7,0),(14,'Saltillo',3,2,9,0),(15,'Oaxaca',3,2,5,0),(16,'México',3,2,1,0),(17,'Bajío',3,2,10,0),(18,'Saltillo',3,1,9,0),(19,'Cancún',3,1,4,0),(20,'Neza',3,1,8,0),(21,'Laguna',3,1,12,0),(22,'Morelia',3,1,3,0),(23,'Pachuca',3,1,6,0),(24,'México',3,1,1,0),(25,'Chihuahua',3,1,11,0),(26,'Bajío',3,1,10,0),(27,'Cuernavaca',3,1,7,0),(28,'Puebla',3,1,2,0),(29,'Oaxaca',3,1,5,0),(30,'Neza',5,1,8,0),(31,'México',5,1,1,0),(32,'Puebla',5,1,2,0),(33,'Pachuca',5,1,6,0),(34,'Oaxaca',5,1,5,0),(35,'Laguna',5,1,12,0),(36,'Morelia',5,1,3,0),(37,'Cancún',5,1,4,0),(39,'Saltillo',5,1,9,0),(40,'Bajío',5,1,10,0),(41,'Neza',4,2,8,0),(42,'México',4,2,1,0),(43,'Puebla',4,2,2,0),(44,'Pachuca',4,2,6,0),(45,'Oaxaca',4,2,5,0),(46,'Laguna',4,2,12,0),(47,'Cuernavaca',4,2,7,0),(48,'Bajío',4,2,10,0),(49,'Morelia',4,2,3,0),(50,'Cancún',4,2,4,0),(51,'Morelia',3,1,7,0),(52,'Laguna',10,1,6,0),(53,'Noroeste',10,1,9,0),(54,'Oaxaca',10,1,10,0),(55,'Bajío',10,1,15,0),(56,'Saltillo',10,1,12,0),(57,'México',4,2,3,0),(58,'Neza',4,2,8,0),(59,'Bajío',4,2,15,0),(60,'Chihuahua',4,2,4,0),(61,'Cuernavaca',4,2,5,0),(62,'Noroeste',4,2,9,0),(63,'Cancún',4,2,2,0),(64,'Pachuca',4,2,11,0),(65,'Laguna',4,2,6,0),(66,'Saltillo',4,2,12,0),(67,'Morelia',4,2,7,0),(68,'Victoria',4,2,13,0),(69,'Oaxaca',4,2,10,0),(70,'Bajío',6,2,15,0),(71,'Laguna',6,2,6,0),(72,'Noroeste',6,2,9,0),(73,'Chihuahua',6,2,4,0),(74,'México',6,2,3,0),(75,'Neza',6,2,8,0),(76,'Morelia',6,2,7,0),(77,'Victoria',6,2,13,0),(78,'Cancún',6,2,2,0),(79,'Cuernavaca',6,2,5,0),(80,'Bajío',6,1,15,0),(81,'Cuernavaca',6,1,5,0),(82,'Morelia',6,1,7,0),(83,'Saltillo',6,1,12,0),(84,'Laguna',6,1,6,0),(85,'Cancún',6,1,2,0),(86,'Victoria',6,1,13,0),(87,'Saltillo',9,2,12,0),(88,'Bajío',9,2,15,0),(89,'Laguna',9,2,6,0),(90,'Cuernavaca',9,2,5,0),(91,'Cancún',9,2,2,0),(92,'Chihuahua',9,2,4,0),(93,'Neza',7,2,8,0),(94,'Bajío',7,2,15,0),(95,'México',7,2,3,0),(96,'Noroeste',7,2,9,0),(97,'Oaxaca',7,2,10,0),(98,'Cuernavaca',7,2,5,0),(99,'Morelia',7,2,7,0),(100,'Cancún',7,2,2,0),(101,'Laguna',7,2,6,0),(102,'Chihuahua',7,2,4,0),(103,'Victoria',7,2,13,0),(104,'Pachuca',7,2,11,0),(105,'Neza',7,1,8,0),(106,'Victoria',7,1,13,0),(107,'Bajío',7,1,15,0),(108,'México',7,1,3,0),(109,'Oaxaca',7,1,10,0),(110,'Noroeste',7,1,9,0),(111,'Cuernavaca',9,1,5,0),(112,'Cancún',7,1,2,0),(113,'Laguna',7,1,6,0),(114,'Cuernavaca',7,1,5,0),(115,'Bajío ',4,1,15,0),(116,'México ',4,1,3,0),(117,'Neza',4,1,8,0),(118,'Noroeste',4,1,9,0),(119,'Victoria ',4,1,13,0),(120,'Chihuahua ',4,1,4,0),(121,'Pachuca',4,1,11,0),(122,'Cancún ',4,1,2,0),(123,'Saltillo ',4,1,12,0),(124,'Cuernavaca ',4,2,5,0),(125,'Oaxaca ',4,1,10,0),(126,'Morelia ',4,1,7,0),(127,'Cuernavaca ',4,1,5,0),(128,'Bajío Jr.',11,3,15,0),(129,'ExAlumnos',11,3,15,0),(130,'Bajío',11,3,15,0),(131,'Cancún',11,3,2,0),(132,'México',1,3,1,1),(133,'Oaxaca',1,3,5,1),(134,'Laguna',1,3,7,1),(135,'Neza',1,3,8,1),(136,'Noroeste',1,3,18,1),(137,'Pachuca',1,3,6,1),(138,'Chihuahua',1,3,11,1),(139,'Saltillo',1,3,9,1),(140,'Cancún',1,3,4,1),(141,'Bajío',1,3,10,1),(142,'Victoría',1,3,17,1),(143,'Noroeste',3,2,18,1),(144,'Bajío',3,2,10,1),(145,'Neza',3,2,8,1),(146,'Laguna',3,2,12,1),(147,'México',3,2,1,1),(148,'Morelia',3,2,3,1),(149,'Cancun',3,2,4,1),(150,'Oaxaca',3,2,5,1),(151,'Cuernavaca',3,2,7,1),(152,'Pachuca',3,2,6,1),(153,'Victoria',3,2,17,1),(154,'Saltillo',3,2,9,1),(155,'Chihuahua',3,2,11,1),(156,'Victoria',3,1,17,1),(157,'Bajío',3,1,10,1),(158,'Noroeste',3,1,18,1),(159,'Neza',3,1,8,1),(160,'México',3,1,1,1),(161,'Oaxaca',3,1,5,1),(162,'Saltillo',3,1,9,1),(163,'Pachuca',3,1,6,1),(164,'Cancún',3,1,4,1),(165,'Chihuahua',3,1,11,1),(166,'Morelia',3,1,3,1),(167,'Laguna',3,1,12,1),(168,'Cuernavaca',3,1,7,1),(169,'México',4,2,1,1),(170,'Oaxaca',4,2,5,1),(171,'Laguna',4,2,7,1),(172,'Neza',4,2,8,1),(173,'Noroeste',4,2,18,1),(174,'Pachuca',4,2,6,1),(175,'Chihuahua',4,2,11,1),(176,'Saltillo',4,2,9,1),(177,'Cancún',4,2,4,1),(178,'Bajío',4,2,10,1),(179,'Victoría',4,2,17,1),(180,'México',4,1,1,1),(181,'Oaxaca',4,1,5,1),(182,'Laguna',4,1,7,1),(183,'Neza',4,1,8,1),(184,'Noroeste',4,1,18,1),(185,'Pachuca',4,1,6,1),(186,'Chihuahua',4,1,11,1),(187,'Saltillo',4,1,9,1),(188,'Cancún',4,1,4,1),(189,'Bajío',4,1,10,1),(190,'Victoría',4,1,17,1),(191,'Cuernavaca',4,2,7,1),(192,'Cuernavaca',4,1,7,1),(193,'Morelia',4,2,3,1),(194,'Morelia',4,1,3,1);
/*!40000 ALTER TABLE `tor_equipos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tor_estadisticas`
--

DROP TABLE IF EXISTS `tor_estadisticas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tor_estadisticas` (
  `torneo_id` int(11) NOT NULL,
  `grupo_id` int(11) DEFAULT NULL,
  `equipo_id` int(11) DEFAULT NULL,
  `jugados` int(11) DEFAULT NULL,
  `ganados` int(11) DEFAULT NULL,
  `empatados` int(11) DEFAULT NULL,
  `perdidos` int(11) DEFAULT NULL,
  `extra` int(11) DEFAULT NULL,
  `favor` float(11,0) DEFAULT NULL,
  `contra` float(11,0) DEFAULT NULL,
  `porcentaje` float DEFAULT NULL,
  `diferencia` float(11,0) DEFAULT NULL,
  `puntos` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tor_estadisticas`
--

LOCK TABLES `tor_estadisticas` WRITE;
/*!40000 ALTER TABLE `tor_estadisticas` DISABLE KEYS */;
INSERT INTO `tor_estadisticas` VALUES (14,4,79,4,4,0,0,0,9,3,3,6,8),(14,4,76,4,3,0,1,0,8,4,2,4,7),(14,4,77,4,0,0,4,0,1,11,0.09,-10,4),(14,4,78,4,1,0,3,0,6,6,1,0,5),(15,4,85,5,0,0,5,0,3,12,0.25,-9,5),(15,4,84,5,5,0,0,0,12,3,4,9,10),(15,4,82,5,3,0,2,0,8,7,1.14,1,8),(15,4,83,5,1,0,4,0,6,9,0.67,-3,6),(15,4,35,5,2,0,3,0,6,9,0.67,-3,7),(15,4,86,5,4,0,1,0,10,5,2,5,9),(15,3,36,4,2,0,2,0,4,8,0.5,-4,6),(15,3,34,4,1,0,3,0,4,7,0.57,-3,5),(3,7,47,3,3,0,0,0,129,95,1.36,34,6),(3,7,44,3,1,0,2,0,93,102,0.91,-9,4),(5,3,117,3,2,1,0,0,22,9,2.44,13,7),(5,3,118,3,1,0,2,0,14,16,0.88,-2,3),(8,3,105,3,3,0,0,0,150,103,1.46,47,6),(8,3,106,3,0,0,3,0,82,150,0.55,-68,0),(7,7,97,3,1,0,2,0,134,152,0.88,-18,2),(7,7,98,3,2,0,1,0,155,130,1.19,25,4),(9,1,87,5,3,0,2,0,110,58,1.9,52,6),(9,1,88,5,2,1,2,0,110,71,1.55,39,5),(2,3,22,3,2,0,1,0,141,103,1.37,38,5),(2,3,23,3,1,0,2,0,125,122,1.02,3,4),(4,7,62,3,1,1,1,0,7,9,0.78,-2,4),(4,7,63,3,0,0,3,0,2,12,0.17,-10,0),(3,7,45,3,2,0,1,0,137,101,1.36,36,5),(3,7,46,3,0,0,3,0,71,132,0.54,-61,3),(1,1,4,3,2,1,0,0,0,0,0,0,10),(1,4,8,4,0,0,4,0,1,15,0.07,-14,0),(8,3,107,3,2,0,1,0,142,105,1.35,37,4),(8,3,108,3,1,0,2,0,116,132,0.88,-16,2),(5,3,115,3,1,0,2,0,12,21,0.57,-9,3),(5,3,116,3,1,1,1,1,10,12,0.83,-2,5),(7,7,99,3,3,0,0,0,150,98,1.53,52,6),(7,7,100,3,0,0,3,0,91,150,0.61,-59,0),(1,1,3,3,0,0,3,0,0,0,0,0,0),(1,4,6,4,1,0,3,0,4,12,0.33,-8,1),(3,3,42,4,3,0,1,0,215,178,1.21,37,7),(3,3,43,4,4,0,0,0,248,194,1.28,54,8),(1,3,7,3,0,0,3,0,0,12,0,-12,0),(7,8,101,3,3,0,0,0,163,94,1.73,69,6),(7,8,102,3,1,0,2,0,103,153,0.67,-50,2),(6,3,10,3,1,1,1,1,11,6,1.83,5,5),(6,3,9,3,1,2,0,0,5,3,1.67,2,5),(6,7,13,3,1,0,2,0,7,10,0.7,-3,3),(6,7,11,3,2,1,0,0,10,4,2.5,6,7),(2,7,30,3,2,0,1,0,74,80,0.93,-6,5),(2,7,28,3,1,0,2,0,71,72,0.99,-1,4),(6,8,14,3,2,1,0,0,10,3,3.33,7,7),(6,8,16,3,2,1,0,1,11,4,2.75,7,8),(3,3,40,4,0,0,4,0,146,210,0.7,-64,4),(3,3,41,4,1,0,3,0,146,181,0.81,-35,5),(9,1,91,5,4,0,1,0,95,69,1.38,26,8),(9,1,90,5,4,1,0,0,170,44,3.86,126,9),(9,1,89,5,1,0,4,0,56,168,0.33,-112,2),(9,1,92,5,0,0,5,0,36,167,0.22,-131,0),(8,4,114,4,3,0,1,0,209,184,1.14,25,6),(8,4,112,4,0,0,4,0,105,200,0.53,-95,0),(6,3,12,3,0,1,2,1,1,14,0.07,-13,2),(6,3,20,3,2,0,1,0,9,3,3,6,6),(2,7,26,3,3,0,0,0,138,34,4.06,104,6),(2,7,29,3,0,0,3,0,39,136,0.29,-97,3),(6,8,17,3,1,0,2,0,8,6,1.33,2,3),(6,8,15,3,0,0,3,0,2,18,0.11,-16,0),(6,7,18,3,0,0,3,0,4,9,0.44,-5,0),(6,7,19,3,2,1,0,1,10,8,1.25,2,8),(7,3,93,3,2,0,1,0,167,134,1.25,33,4),(7,3,94,3,1,0,2,0,122,138,0.88,-16,2),(2,3,21,3,3,0,0,0,144,85,1.69,59,6),(2,3,25,3,0,0,3,0,69,169,0.41,-100,3),(2,8,24,3,2,0,1,0,104,101,1.03,3,5),(2,8,31,3,1,0,2,0,78,103,0.76,-25,4),(8,4,113,4,2,0,2,0,214,183,1.17,31,4),(8,4,110,4,4,0,0,0,211,143,1.48,68,8),(1,4,1,4,2,0,2,0,10,7,1.43,3,2),(7,8,103,3,2,0,1,0,160,109,1.47,51,4),(7,8,104,3,0,0,3,0,92,162,0.57,-70,0),(3,8,48,3,0,0,3,0,47,176,0.27,-129,3),(3,8,49,3,3,0,0,0,168,67,2.51,101,6),(15,3,80,4,3,0,1,0,9,2,4.5,7,7),(15,3,37,4,4,0,0,0,11,1,11,10,8),(15,3,81,4,0,0,4,0,1,11,0.09,-10,4),(7,3,95,3,3,0,0,0,171,147,1.16,24,6),(7,3,96,3,0,0,3,0,109,150,0.73,-41,0),(5,7,119,3,1,1,1,0,7,5,1.4,2,4),(5,7,120,3,0,1,2,1,6,8,0.75,-2,2),(5,8,125,3,2,1,0,0,26,6,4.33,20,7),(5,8,126,3,0,1,2,0,11,26,0.42,-15,1),(5,7,121,3,2,0,1,0,8,9,0.89,-1,6),(5,7,122,3,2,0,1,0,10,9,1.11,1,6),(5,8,123,3,0,1,2,1,7,23,0.3,-16,2),(5,8,127,3,2,1,0,1,17,6,2.83,11,8),(3,8,50,3,1,0,2,0,116,107,1.08,9,4),(3,8,51,3,2,0,1,0,121,102,1.19,19,5),(4,7,64,3,1,1,1,1,8,5,1.6,3,5),(4,7,65,3,3,0,0,0,15,6,2.5,9,9),(4,8,66,3,1,1,1,0,7,11,0.64,-4,4),(4,8,67,3,0,0,3,0,8,12,0.67,-4,0),(4,8,68,3,1,1,1,1,4,5,0.8,-1,5),(4,8,69,3,3,0,0,0,14,5,2.8,9,9),(10,1,56,4,1,0,3,0,9,30,0.3,-21,5),(10,1,53,4,4,0,0,0,54,3,18,51,8),(10,1,54,4,1,0,3,0,12,24,0.5,-12,5),(10,1,55,4,1,0,3,0,11,31,0.35,-20,5),(14,3,74,4,3,0,1,0,9,3,3,6,7),(14,3,71,4,2,0,2,0,7,5,1.4,2,6),(14,3,72,4,4,0,0,0,9,3,3,6,8),(14,3,73,4,1,0,3,0,3,9,0.33,-6,5),(4,3,61,4,1,1,2,0,9,30,0.3,-21,4),(4,3,58,4,4,0,0,0,41,8,5.13,33,12),(2,8,33,3,2,0,1,0,103,76,1.36,27,5),(2,8,27,3,1,0,2,0,92,97,0.95,-5,4),(4,3,59,4,3,0,1,0,25,9,2.78,16,9),(4,3,60,4,0,2,2,2,15,20,0.75,-5,4),(11,1,131,3,1,0,2,0,2,6,0.33,-4,4),(11,1,130,3,3,0,0,0,10,1,10,9,6),(11,1,129,3,1,0,2,0,3,5,0.6,-2,4),(11,1,128,3,1,0,2,0,2,5,0.4,-3,4),(8,4,109,4,1,0,3,0,159,188,0.85,-29,2),(4,3,57,4,0,1,3,0,8,31,0.26,-23,1),(10,1,52,4,3,0,1,0,20,18,1.11,2,7),(1,3,2,3,1,2,0,0,8,4,2,4,2),(14,3,70,4,0,0,4,0,2,10,0.2,-8,4),(14,4,75,4,2,0,2,0,6,6,1,0,6),(3,3,39,4,2,0,2,0,168,160,1.05,8,6),(4,3,124,0,0,0,0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `tor_estadisticas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tor_grupos`
--

DROP TABLE IF EXISTS `tor_grupos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tor_grupos` (
  `grupo_id` int(11) NOT NULL AUTO_INCREMENT,
  `grupo` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`grupo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tor_grupos`
--

LOCK TABLES `tor_grupos` WRITE;
/*!40000 ALTER TABLE `tor_grupos` DISABLE KEYS */;
INSERT INTO `tor_grupos` VALUES (1,'Grupo A'),(2,'Grupo B'),(3,'Grupo C'),(4,'Grupo B-1'),(5,'Grupo B-2');
/*!40000 ALTER TABLE `tor_grupos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tor_marcadores`
--

DROP TABLE IF EXISTS `tor_marcadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tor_marcadores` (
  `marcador_id` int(11) NOT NULL AUTO_INCREMENT,
  `partido_id` int(11) DEFAULT NULL,
  `ganador_id` int(11) DEFAULT NULL,
  `extra_id` int(11) DEFAULT NULL,
  `marcador_local` float DEFAULT NULL,
  `marcador_visitante` float DEFAULT NULL,
  `favor_local` int(11) DEFAULT NULL,
  `favor_visitante` int(11) DEFAULT NULL,
  `contra_local` int(11) DEFAULT NULL,
  `contra_visitante` int(11) DEFAULT NULL,
  PRIMARY KEY (`marcador_id`)
) ENGINE=MyISAM AUTO_INCREMENT=261 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tor_marcadores`
--

LOCK TABLES `tor_marcadores` WRITE;
/*!40000 ALTER TABLE `tor_marcadores` DISABLE KEYS */;
/*!40000 ALTER TABLE `tor_marcadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tor_partidos`
--

DROP TABLE IF EXISTS `tor_partidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tor_partidos` (
  `partido_id` int(11) NOT NULL AUTO_INCREMENT,
  `torneo_id` int(11) DEFAULT NULL,
  `jornada` int(11) DEFAULT NULL,
  `local` int(11) DEFAULT NULL,
  `visitante` int(11) DEFAULT NULL,
  `descansa` int(11) DEFAULT NULL,
  `grupo_id` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `cancha_id` int(11) DEFAULT NULL,
  `tipo_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`partido_id`)
) ENGINE=MyISAM AUTO_INCREMENT=471 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tor_partidos`
--

LOCK TABLES `tor_partidos` WRITE;
/*!40000 ALTER TABLE `tor_partidos` DISABLE KEYS */;
INSERT INTO `tor_partidos` VALUES (455,21,2,183,192,NULL,1,'2019-11-15','11:00:00',32,1),(454,21,1,192,180,NULL,1,'2019-11-14','12:30:00',32,1),(453,21,1,183,184,NULL,1,'2019-11-14','12:30:00',33,1),(452,20,3,193,179,NULL,5,'2019-11-16','11:00:00',33,1),(451,20,3,169,177,NULL,5,'2019-11-16','11:00:00',32,1),(450,20,2,177,193,NULL,5,'2019-11-15','18:30:00',32,1),(449,20,2,179,169,NULL,5,'2019-11-15','17:00:00',32,1),(448,20,1,179,177,NULL,5,'2019-11-14','17:00:00',33,1),(447,20,1,169,193,NULL,5,'2019-11-14','17:00:00',32,1),(446,20,3,176,171,NULL,4,'2019-11-16','09:30:00',33,1),(445,20,3,173,174,NULL,4,'2019-11-16','09:30:00',32,1),(444,20,2,171,173,NULL,4,'2019-11-15','15:30:00',33,1),(443,20,2,174,176,NULL,4,'2019-11-15','14:00:00',33,1),(442,20,1,171,174,NULL,4,'2019-11-14','15:30:00',33,1),(441,20,1,173,176,NULL,4,'2019-11-14','14:00:00',33,1),(440,20,5,170,175,NULL,1,'2019-11-16','15:30:00',33,1),(439,20,5,191,172,NULL,1,'2019-11-16','15:30:00',32,1),(438,20,4,172,170,NULL,1,'2019-11-16','08:00:00',32,1),(437,20,4,175,178,NULL,1,'2019-11-16','08:00:00',33,1),(436,20,3,178,172,NULL,1,'2019-11-15','15:30:00',32,1),(435,20,3,170,191,NULL,1,'2019-11-15','14:00:00',32,1),(434,20,2,191,178,NULL,1,'2019-11-15','09:30:00',32,1),(433,20,2,172,175,NULL,1,'2019-11-15','08:00:00',32,1),(432,20,1,175,191,NULL,1,'2019-11-14','15:30:00',32,1),(431,20,1,178,170,NULL,1,'2019-11-14','14:00:00',32,1),(470,21,3,190,181,NULL,5,'2019-11-16','12:30:00',32,1),(469,21,3,188,190,NULL,5,'2019-11-16','12:30:00',32,1),(468,21,2,194,190,NULL,5,'2019-11-15','12:30:00',33,1),(467,21,2,188,190,NULL,5,'2019-11-15','11:00:00',33,1),(466,21,1,181,194,NULL,5,'2019-11-14','20:00:00',33,1),(465,21,1,188,190,NULL,5,'2019-11-14','20:00:00',32,1),(464,21,3,189,185,NULL,4,'2019-11-16','14:00:00',32,1),(463,21,3,187,186,NULL,4,'2019-11-16','14:00:00',33,1),(462,21,2,186,189,NULL,4,'2019-11-15','09:30:00',33,1),(461,21,2,185,187,NULL,4,'2019-11-15','08:00:00',33,1),(460,21,1,185,186,NULL,4,'2019-11-14','18:30:00',33,1),(459,21,1,187,189,NULL,4,'2019-11-14','18:30:00',32,1),(458,21,3,180,183,NULL,1,'2019-11-16','17:00:00',32,1),(457,21,3,192,184,NULL,1,'2019-11-16','17:00:00',33,1),(456,21,2,184,180,NULL,1,'2019-11-15','12:30:00',32,1),(362,17,1,134,132,NULL,1,'2014-11-19','13:30:00',27,1),(363,17,1,133,136,135,1,'2014-11-19','13:30:00',27,1),(364,17,2,132,133,NULL,1,'2015-11-19','10:00:00',27,1),(365,17,2,135,134,NULL,1,'2015-11-19','10:00:00',27,1),(366,17,3,133,135,NULL,1,'2015-11-19','12:30:00',27,1),(367,17,3,136,132,NULL,1,'2015-11-19','12:30:00',27,1),(368,17,4,135,136,NULL,1,'2016-11-19','10:00:00',27,1),(369,17,4,134,133,NULL,1,'2016-11-19','10:00:00',27,1),(370,17,5,136,134,NULL,1,'2017-11-19','10:00:00',27,1),(371,17,5,132,135,NULL,1,'2017-11-19','10:00:00',27,1),(372,17,1,137,142,NULL,2,'2014-11-19','13:30:00',27,1),(373,17,1,138,141,NULL,2,'2014-11-19','13:30:00',27,1),(374,17,2,142,140,NULL,2,'2015-11-19','10:00:00',27,1),(375,17,2,141,139,NULL,2,'2015-11-19','10:00:00',27,1),(376,17,3,138,142,NULL,2,'2015-11-19','12:30:00',27,1),(377,17,3,139,137,NULL,2,'2015-11-19','12:30:00',27,1),(378,17,3,140,141,NULL,2,'2015-11-19','12:30:00',27,1),(379,17,2,137,138,NULL,2,'2015-11-19','10:00:00',27,1),(380,17,1,139,140,NULL,2,'2014-11-19','13:30:00',27,1),(381,17,4,142,141,NULL,2,'2016-11-19','10:00:00',27,1),(382,17,4,137,140,NULL,2,'2016-11-19','10:00:00',27,1),(383,17,4,138,139,NULL,2,'2016-11-19','10:00:00',27,1),(384,17,5,139,142,NULL,2,'2017-11-19','10:00:00',27,1),(385,17,5,140,138,NULL,2,'2017-11-19','10:00:00',27,1),(386,17,5,141,137,NULL,2,'2017-11-19','10:00:00',27,1),(387,18,1,147,144,NULL,1,'2014-10-19','14:00:00',24,1),(388,18,1,145,146,NULL,1,'2014-10-19','14:00:00',28,1),(389,18,2,143,145,NULL,1,'2015-10-19','09:30:00',24,1),(390,18,2,146,147,NULL,1,'2015-10-19','12:30:00',24,1),(391,18,3,144,146,NULL,1,'2015-10-19','18:30:00',24,1),(392,18,3,147,143,NULL,1,'2015-10-19','18:30:00',25,1),(393,18,4,144,145,NULL,1,'2019-10-14','09:30:00',24,1),(394,18,4,146,143,NULL,1,'2019-10-14','12:30:00',24,1),(395,18,5,145,147,NULL,1,'2019-10-14','15:30:00',24,1),(396,18,5,143,144,NULL,1,'2019-10-14','17:00:00',24,1),(397,18,1,148,149,NULL,4,'2019-11-14','15:30:00',28,1),(398,18,1,150,151,NULL,4,'2019-11-14','17:00:00',28,1),(399,18,2,151,149,NULL,4,'2019-11-15','08:00:00',29,1),(400,18,2,150,148,NULL,4,'2019-11-15','09:30:00',29,1),(401,18,3,148,151,NULL,4,'2019-11-16','08:00:00',29,1),(402,18,3,149,150,NULL,4,'2019-11-16','09:30:00',29,1),(403,18,1,152,153,NULL,5,'2019-11-14','18:30:00',28,1),(404,18,1,154,155,NULL,5,'2019-11-14','20:00:00',28,1),(405,18,2,154,152,NULL,5,'2019-11-15','11:00:00',29,1),(406,18,2,155,153,NULL,5,'2019-11-15','12:30:00',29,1),(407,18,3,152,155,NULL,5,'2019-11-16','11:00:00',29,1),(408,18,3,153,154,NULL,5,'2019-11-16','12:30:00',29,1),(409,19,1,160,157,NULL,1,'2019-11-14','15:30:00',24,1),(410,19,1,158,159,NULL,1,'2019-11-14','17:00:00',24,1),(411,19,2,153,158,NULL,1,'2019-11-15','08:00:00',24,1),(412,19,2,159,160,NULL,1,'2019-11-15','11:00:00',24,1),(413,19,3,157,159,NULL,1,'2019-11-15','17:00:00',24,1),(414,19,3,160,156,NULL,1,'2019-11-15','17:00:00',30,1),(415,19,4,158,160,NULL,1,'2019-11-16','08:00:00',24,1),(416,19,4,156,157,NULL,1,'2019-11-16','11:00:00',24,1),(417,19,5,159,156,NULL,1,'2019-11-16','15:30:00',29,1),(418,19,5,157,158,NULL,1,'2019-11-16','15:30:00',28,1),(419,19,1,161,162,NULL,4,'2019-11-14','14:00:00',29,1),(420,19,1,163,164,NULL,4,'2019-11-14','14:00:00',31,1),(421,19,2,163,161,NULL,4,'2019-11-15','08:00:00',31,1),(422,19,2,163,162,NULL,4,'2019-11-15','09:30:00',31,1),(423,19,3,161,164,NULL,4,'2019-11-16','08:00:00',31,1),(424,19,3,162,163,NULL,4,'2019-11-16','09:30:00',31,1),(425,19,1,165,166,NULL,5,'2019-11-14','18:30:00',24,1),(426,19,1,167,168,NULL,5,'2019-11-14','20:00:00',24,1),(427,19,2,167,165,NULL,5,'2019-11-15','11:00:00',31,1),(428,19,2,168,166,NULL,5,'2019-11-15','12:30:00',31,1),(429,19,3,165,168,NULL,5,'2019-11-16','11:00:00',31,1),(430,19,3,166,167,NULL,5,'2019-11-16','12:30:00',31,1);
/*!40000 ALTER TABLE `tor_partidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tor_ramas`
--

DROP TABLE IF EXISTS `tor_ramas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tor_ramas` (
  `rama_id` int(11) NOT NULL AUTO_INCREMENT,
  `rama` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`rama_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tor_ramas`
--

LOCK TABLES `tor_ramas` WRITE;
/*!40000 ALTER TABLE `tor_ramas` DISABLE KEYS */;
INSERT INTO `tor_ramas` VALUES (1,'Varonil'),(2,'Femenil'),(3,'Mixto');
/*!40000 ALTER TABLE `tor_ramas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tor_tipo_partidos`
--

DROP TABLE IF EXISTS `tor_tipo_partidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tor_tipo_partidos` (
  `tor_tipo_partido_id` int(11) NOT NULL AUTO_INCREMENT,
  `tor_tipo_partido` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`tor_tipo_partido_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tor_tipo_partidos`
--

LOCK TABLES `tor_tipo_partidos` WRITE;
/*!40000 ALTER TABLE `tor_tipo_partidos` DISABLE KEYS */;
INSERT INTO `tor_tipo_partidos` VALUES (1,'Jornada'),(2,'Octavos de final'),(3,'Cuartos de final'),(4,'Semifinal'),(5,'Final'),(6,'Por el 3er lugar');
/*!40000 ALTER TABLE `tor_tipo_partidos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tor_torneos`
--

DROP TABLE IF EXISTS `tor_torneos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tor_torneos` (
  `torneo_id` int(11) NOT NULL AUTO_INCREMENT,
  `torneo` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `deporte_id` int(11) DEFAULT NULL,
  `rama_id` int(11) DEFAULT NULL,
  `tipo_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`torneo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tor_torneos`
--

LOCK TABLES `tor_torneos` WRITE;
/*!40000 ALTER TABLE `tor_torneos` DISABLE KEYS */;
INSERT INTO `tor_torneos` VALUES (1,'XVIII Juegos Deportivos Interprepas 2019 Ajedrez',1,3,1),(2,'XVIII Juegos Deportivos Interprepas 2019 Basquetbol Femenil',3,2,1),(3,'XVIII Juegos Deportivos Interprepas 2019 Basquetbol Varonil',3,1,1),(4,'XVIII Juegos Deportivos Interprepas 2019 Soccer',5,1,1),(5,'XVIII Juegos Deportivos Interprepas 2019 Rápido Femenil',4,2,1),(6,'XXV Juegos Deportivos Universitarios Lasallistas 2018',5,1,1),(7,'XXV Juegos Deportivos Universitarios Lasallistas 2018',6,2,1),(8,'XXV Juegos Deportivos Universitarios Lasallistas 2018',6,1,1),(9,'XXV Juegos Deportivos Universitarios Lasallistas 2018',7,2,1),(10,'XXV Juegos Deportivos Universitarios Lasallistas 2018',7,1,1),(11,'XXV Juegos Deportivos Universitarios Lasallistas 2018',11,2,1),(14,'XXV Juegos Deportivos Universitarios Lasallistas 2018',11,1,1),(15,'XXV Juegos Deportivos Universitarios Lasallistas 2018',9,2,1),(16,'XVIII Juegos Deportivos Interprepas 2019',9,1,1),(17,'XXVI Juegos Deportivos Universitarios Lasallistas 2019 Ajedrez',1,3,1),(18,'XXVI Juegos Deportivos Universitarios Lasallistas 2019 Basquetbol Femenil',3,2,1),(19,'XXVI Juegos Deportivos Universitarios Lasallistas 2019 Basquetbol Varonil',3,1,1),(20,'XXVI Juegos Deportivos Universitarios Lasallistas 2019 Fútbol Rápido Femenil',4,2,1),(21,'XXVI Juegos Deportivos Universitarios Lasallistas 2019 Fútbol Rápido Varonil',4,1,1);
/*!40000 ALTER TABLE `tor_torneos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tor_transmisiones`
--

DROP TABLE IF EXISTS `tor_transmisiones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tor_transmisiones` (
  `transmision_id` int(11) NOT NULL AUTO_INCREMENT,
  `partido_id` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`transmision_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tor_transmisiones`
--

LOCK TABLES `tor_transmisiones` WRITE;
/*!40000 ALTER TABLE `tor_transmisiones` DISABLE KEYS */;
INSERT INTO `tor_transmisiones` VALUES (1,172,'https://www.facebook.com/1730470533717486/videos/282644425695883/UzpfSTE2MDcyOTU1OTk1OTQ3NDM6MjE5NjU2OTQwMDY2NzM1Nw/'),(2,178,'#'),(3,192,'https://www.facebook.com/pg/Club-de-Televisi%C3%B3n-UDLSB-1730470533717486/videos/?ref=page_internal'),(4,131,'https://www.facebook.com/pg/Club-de-Televisi%C3%B3n-UDLSB-1730470533717486/videos/?ref=page_internal'),(5,132,'https://www.facebook.com/1730470533717486/videos/176312413304779/UzpfSTM3ODU1NjY3NTYwMzk1MjoxNzc0MDE5NDE2MDU3NjY0/'),(6,153,'https://www.facebook.com/1730470533717486/videos/570854190041260/'),(7,300,'https://www.facebook.com/1730470533717486/videos/183259365942436/'),(8,299,'https://www.facebook.com/pg/Club-de-Televisi%C3%B3n-UDLSB-1730470533717486/videos/?ref=page_internal'),(9,129,'https://www.facebook.com/FelinosDeLaSalle/videos/467230683799646/'),(10,130,'https://www.facebook.com/FelinosDeLaSalle/videos/588452874920912/'),(11,145,'#'),(12,146,'https://www.facebook.com/pg/FelinosDeLaSalle/videos/?ref=page_internal'),(13,302,'https://www.facebook.com/pg/FelinosDeLaSalle/videos/?ref=page_internal'),(14,301,'https://www.facebook.com/FelinosDeLaSalle/videos/765635983778484/'),(15,199,'#'),(16,336,'https://www.facebook.com/FelinosDeLaSalle/videos/1103955023100663/'),(17,329,'https://www.facebook.com/FelinosDeLaSalle/videos/345135172702053/?notif_id=1541264820523328&amp;notif_t=live_video_explicit'),(18,343,'https://www.facebook.com/FelinosDeLaSalle/videos/331274840991514/'),(19,333,'https://www.facebook.com/FelinosDeLaSalle/videos/1981861241861774/'),(20,83,'https://www.facebook.com/1730470533717486/videos/252139882137713/');
/*!40000 ALTER TABLE `tor_transmisiones` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-31 18:56:36
