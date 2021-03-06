-- MySQL dump 10.13  Distrib 5.6.10, for Win64 (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	5.6.10-log

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
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cars` (
  `Key` int(11) NOT NULL AUTO_INCREMENT,
  `Stock#` int(11) DEFAULT NULL,
  `Make` text,
  `Model` text,
  `Year` year(4) DEFAULT NULL,
  `Body Style` text,
  `Color` text,
  `VIN` text,
  `Fuel` text,
  `Engine` text,
  `Transmission` text,
  `Doors` int(11) DEFAULT NULL,
  `Description` text,
  `PremiumAudio` char(255) DEFAULT NULL,
  `Navigation` char(255) DEFAULT NULL,
  `AlloyWheels` char(255) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Image` text,
  PRIMARY KEY (`Key`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cars`
--

LOCK TABLES `cars` WRITE;
/*!40000 ALTER TABLE `cars` DISABLE KEYS */;
INSERT INTO `cars` VALUES (0,3223,'Acura','CL',2003,'Sedan','Black','1G1ZU54834F474304','Gasoline','3.2L V6 24V MPFI SOHC','5-Speed Automatic',4,NULL,'No','No','No',14000,'images/car.jpg'),(1,3389,'Acura','ILX',2014,'Sedan','Red','19VDE1F58EE003389','Gasoline','2.0L I4 16V MPFI SOHC','5-Speed Automatic',4,NULL,'Yes','Yes','No',33095,'images/Acura/ILX.jpg'),(2,1001,'Lexus','LFA',2013,'Coupe','Black','1GCGK29U9XF173419','Gaoline','4.8L V10 40V PDI DOHC','6-Speed Automatic with Auto-Shift',2,NULL,'Yes','Yes','Yes',475000,'images/Lexus/LFA_1.jpg'),(3,3387,'Acura','ILX',2013,'Sedan','Red','19VDE1F58EE003389','Gasoline','2.0L I4 16V MPFI SOHC','5-Speed Automatic',4,NULL,'Yes','Yes','No',31095,'images/Acura/ILX.jpg'),(4,1012,'Lexus','LFA',2012,'Coupe','Red','1GCGK29U9XF173419','Gasoline','4.8L V10 40V PDI DOHC','6-Speed Automatic with Auto-Shift',2,NULL,'Yes','Yes','Yes',455000,'images/Lexus/LFA_2.jpg'),(5,2255,'Fiat','500',2014,'Coupe','White','1J8HS68207C181527','Gasoline','Turbocharged Gas I4 1.4L/83','5-Speed Manual',2,NULL,'No','No','No',31600,'images/Fiat/500.jpg'),(6,212444,'Mercedes-Benz','C63',2014,'Coupe','Steal Gray Metallic','WDDGJ7HB0EG212444','Gasoline','6.2L V8 32V MPFI DOHC','7-Speed Automatic',2,NULL,'Yes','Yes','Yes',93505,'images/Mercedes-Benz/C63.jpg'),(7,177404,'Mercedes-Benz','C63',2014,'Coupe','Black','WDDGJ7HB9EG177404','Gasoline','6.2L V8 32V MPFI DOHC','7-Speed Automatic',2,NULL,'Yes','Yes','Yes',75275,'images/Mercedes-Benz/C63_2.jpg'),(8,8009,'Jaguar','F-Type',2014,'Convertible','Stratus Gray Metallic','SAJWA6GLXEMK08009','Gasoline','5.0L V8 32V GDI DOHC Supercharged','8-Speed Automatic',2,NULL,'Yes','Yes','Yes',101720,'images/Jaguar/F-Type.jpg'),(9,21439,'Honda','Civic Si',2012,'Sedan','Black','2HGFB6E54DH710310','Gasoline','2.4L I4 16V MPFI DOHC','6-Speed Manual',4,NULL,'Yes','No','No',22498,'images/Honda/CivicSi.jpg'),(10,21436,'Honda','Civic Si',2013,'Sedan','Black','2HGFB6E54DH710313','Gasoline','2.4L I4 16V MPFI DOHC','6-Speed Manual',4,NULL,'Yes','No','No',27178,'images/Honda/CivicSi.jpg'),(11,21437,'Honda','Civic Si',2014,'Sedan','Black','2HGFB6E54DH710312','Gasoline','2.4L I4 16V MPFI DOHC','6-Speed Manual',4,NULL,'Yes','No','Yes',29498,'images/Honda/CivicSi.jpg'),(12,21438,'Honda','Civic Si',2013,'Sedan','Black','2HGFB6E54DH710311','Gasoline','2.4L I4 16V MPFI DOHC','6-Speed Manual',4,NULL,'Yes','No','No',27498,'images/Honda/CivicSi.jpg'),(13,21440,'Honda','Civic Si',2014,'Sedan','Black','2HGFB6E54DH710322','Gasoline','2.4L I4 16V MPFI DOHC','6-Speed Manual',4,NULL,'Yes','No','Yes',29498,'images/Honda/CivicSi.jpg');
/*!40000 ALTER TABLE `cars` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-11-23 15:48:22
