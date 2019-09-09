-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: college
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

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
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Users` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `motDePasse` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `sexe` char(1) DEFAULT NULL,
  `emailParent` varchar(255) DEFAULT NULL,
  `classe` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `anciennete` int(11) DEFAULT NULL,
  `salaire` double DEFAULT NULL,
  `expulsion` tinyint(1) DEFAULT NULL,
  `directeur` tinyint(1) DEFAULT NULL,
  `instituteur` tinyint(1) DEFAULT NULL,
  `eleve` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` VALUES (1,'Goldman','Jean-Jacques','goldPass',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL),(2,'Delenoix','Jean','delePass','jean.delenoix@mail.com',NULL,NULL,'CP',NULL,1,24000,NULL,NULL,1,NULL),(3,'Bekritch','Justine','bekrPass','justine.bekritch@mail.com',NULL,NULL,'CE1',NULL,12,28000,NULL,NULL,1,NULL),(4,'Garbo','Greta','garbPass','greta.garbo@mail.com',NULL,NULL,'CE2',NULL,7,26800,NULL,NULL,1,NULL),(5,'Ghelain','Georges','ghelPass','georges.ghelain@mail.com',NULL,NULL,'CM1',NULL,8,27000,NULL,NULL,1,NULL),(6,'Charbonnier','Gisèle','charPass','gisele.charbonnier@mail.com',NULL,NULL,'CM2',NULL,5,23000,NULL,NULL,1,NULL),(7,'Allon','Levy','allonPass',NULL,'h','famille.allon@mail.com','CP',6,NULL,NULL,0,NULL,NULL,1),(8,'Bacard','Hugo','bacardPass',NULL,NULL,'famille.bacard@mail.com','CP',5,NULL,NULL,1,NULL,NULL,1),(9,'Becker','Matthew','beckerPass',NULL,NULL,'famille.becker@mail.com','CP',6,NULL,NULL,0,NULL,NULL,1);
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Users_has_matiere`
--

DROP TABLE IF EXISTS `Users_has_matiere`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Users_has_matiere` (
  `Users_idUser` int(11) NOT NULL,
  `matiere_idMatiere` int(11) NOT NULL,
  `note` float DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`Users_idUser`,`matiere_idMatiere`),
  KEY `fk_Users_has_matiere_matiere1_idx` (`matiere_idMatiere`),
  KEY `fk_Users_has_matiere_Users_idx` (`Users_idUser`),
  CONSTRAINT `fk_Users_has_matiere_Users` FOREIGN KEY (`Users_idUser`) REFERENCES `Users` (`idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Users_has_matiere_matiere1` FOREIGN KEY (`matiere_idMatiere`) REFERENCES `matiere` (`idMatiere`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users_has_matiere`
--

LOCK TABLES `Users_has_matiere` WRITE;
/*!40000 ALTER TABLE `Users_has_matiere` DISABLE KEYS */;
INSERT INTO `Users_has_matiere` VALUES (7,1,5,'2019-09-09'),(7,3,15,'2019-09-09');
/*!40000 ALTER TABLE `Users_has_matiere` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matiere` (
  `idMatiere` int(11) NOT NULL,
  `matiere` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idMatiere`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matiere`
--

LOCK TABLES `matiere` WRITE;
/*!40000 ALTER TABLE `matiere` DISABLE KEYS */;
INSERT INTO `matiere` VALUES (1,'Français'),(2,'Histoire-Géographie'),(3,'Mathématiques'),(4,'Sciences'),(5,'Sport');
/*!40000 ALTER TABLE `matiere` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'college'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-09 21:50:07
