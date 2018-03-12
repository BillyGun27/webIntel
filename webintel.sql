-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: webintel
-- ------------------------------------------------------
-- Server version	5.7.16-log

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
-- Table structure for table `frs`
--

DROP TABLE IF EXISTS `frs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `frs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idmahasiswa` varchar(45) DEFAULT NULL,
  `idmatakuliah` varchar(45) DEFAULT NULL,
  `semester` varchar(45) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idfrsmatkul_UNIQUE` (`idmatakuliah`,`semester`,`tahun`,`idmahasiswa`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `frs`
--

LOCK TABLES `frs` WRITE;
/*!40000 ALTER TABLE `frs` DISABLE KEYS */;
INSERT INTO `frs` VALUES (4,'2915100005','TJ141316','GASAL',2018),(1,'2915100007','TJ141316','GASAL',2018),(22,'2915100011','TJ141316','GASAL',2018),(12,'2915100011','TJ141316','GENAP',2018),(2,'2915100005','TJ141317','GASAL',2018),(3,'2915100007','TJ141317','GASAL',2018),(13,'2915100011','TJ141317','GASAL',2018),(37,'2915100011','TJ141317','GENAP',2018),(6,'2915100005','TJ141318','GASAL',2018),(15,'2915100011','TJ141318','GASAL',2018),(10,'2915100007','TJ141318','GENAP',2018),(38,'2915100011','TJ141318','GENAP',2018),(7,'2915100007','TJ141417','GENAP',2018),(35,'2915100011','TJ141450','GASAL',2018),(34,'2915100011','TJ141465 	','GASAL',2018),(8,'2915100007','TJ141465 	','GENAP',2018),(39,'2915100011','TJ141465 	','GENAP',2018),(11,'2915100007','TJ141466','GENAP',2018);
/*!40000 ALTER TABLE `frs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mahasiswa`
--

DROP TABLE IF EXISTS `mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idmahasiswa` bigint(11) NOT NULL,
  `nama_mahasiswa` varchar(45) NOT NULL,
  `alamat_mahasiswa` varchar(45) NOT NULL,
  `wali_mahasiswa` int(11) NOT NULL,
  `tanggal_lahir_mahasiswa` date NOT NULL,
  `multi` int(11) DEFAULT NULL,
  `del` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`idmahasiswa`),
  KEY `idwali_fk_idx` (`wali_mahasiswa`),
  CONSTRAINT `idwali_fk` FOREIGN KEY (`wali_mahasiswa`) REFERENCES `wali` (`idwali`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mahasiswa`
--

LOCK TABLES `mahasiswa` WRITE;
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` VALUES (1,2915100007,'luthfi','Surabaya',1,'2018-02-06',NULL,NULL),(2,2915100005,'Alfian','Balikpapan',2,'2018-02-06',NULL,NULL),(3,2915100010,'Dandi','surabaya',2,'2018-02-06',NULL,NULL),(4,2915100011,'Andy','malang',1,'2018-03-06',NULL,NULL),(5,2915100012,'Ricky2','nganjuk',2,'2018-02-05',NULL,NULL),(6,2915100015,'Billy','Surabaya',1,'1997-06-27',NULL,NULL),(7,2915100023,'Chany','Surabaya',1,'2018-02-12',NULL,NULL),(8,2915100034,'randy','surabaya',1,'2018-02-06',NULL,NULL),(9,2915100039,'Rizky Najwa','Bhaskara',2,'2017-09-05',NULL,NULL),(10,2915100048,'Marwan','Yogyakarta',1,'1996-01-01',NULL,NULL),(11,2915100049,'Anonym','B401',1,'2018-02-19',NULL,NULL),(12,29151000021,'Santos','Surabaya',1,'2018-01-30',NULL,NULL),(13,2915100017,'William','Surabaya',1,'2018-03-14',NULL,NULL);
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mata_kuliah`
--

DROP TABLE IF EXISTS `mata_kuliah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mata_kuliah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode` varchar(45) DEFAULT NULL,
  `matakuliah` varchar(45) DEFAULT NULL,
  `sks` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mata_kuliah`
--

LOCK TABLES `mata_kuliah` WRITE;
/*!40000 ALTER TABLE `mata_kuliah` DISABLE KEYS */;
INSERT INTO `mata_kuliah` VALUES (1,'TJ141316','Pembelajaran Mesin',3),(2,'TJ141317','Proyek Telematika',3),(3,'TJ141318','Komputasi Lunak',3),(4,'TJ141417','Embedded Systems and Lab ',3),(5,'TJ141450','Web Intelligent & Big Data dan Lab ',4),(6,'TJ141465 	','Visi Komputer ',3),(7,'TJ141466','Komputasi Geometri ',3);
/*!40000 ALTER TABLE `mata_kuliah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wali`
--

DROP TABLE IF EXISTS `wali`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wali` (
  `idwali` int(11) NOT NULL,
  `nama_wali` varchar(45) NOT NULL,
  PRIMARY KEY (`idwali`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wali`
--

LOCK TABLES `wali` WRITE;
/*!40000 ALTER TABLE `wali` DISABLE KEYS */;
INSERT INTO `wali` VALUES (1,'Dr. Ir. Yoyon Kusnendar Suprapto M.Sc.'),(2,'Dr. Supeno Mardi Susiki Nugroho, ST., MT.');
/*!40000 ALTER TABLE `wali` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-12 16:11:40
