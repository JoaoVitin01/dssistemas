CREATE DATABASE  IF NOT EXISTS `aula` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `aula`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: aula
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `livros`
--

DROP TABLE IF EXISTS `livros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `livros` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(30) NOT NULL,
  `anopubli` date DEFAULT NULL,
  `categoria` varchar(30) NOT NULL,
  `editora` varchar(30) NOT NULL,
  `isbn` int(30) NOT NULL,
  `autor` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `livros`
--

LOCK TABLES `livros` WRITE;
/*!40000 ALTER TABLE `livros` DISABLE KEYS */;
INSERT INTO `livros` VALUES (1,'Harry Potter e a Pedra Filosof','1997-06-26',' Romance, Literatura infantil,','Bloomsbury Publishing',2147483647,'J. K. Rowling'),(2,'harry potter e a câmara secret','1998-07-02',' Romance, Literatura fantástic','Bloomsbury Publishing',2147483647,'J. K. Rowling'),(3,' A Cabana','2007-05-01','Romance, Suspense, Ficção reli','Editora Arqueiro',0,'William P. Young'),(4,'o lado feio do amor','2014-08-05',' Romance, Romance de amor, Fic','Galera; 30ª edição (23 julho 2',2147483647,' Colleen Hoover'),(5,'até o verão terminar','2021-08-23',' Romance de amor, Romance cont','Galera; ',2147483647,' colleen hoover '),(6,'todas as suas imperfeições ','2018-07-17',' Romance de amor, Romance, Rom','Galera; ',0,'Colleen Hoover'),(7,'todas as suas imperfeições ','2018-07-17',' Romance de amor, Romance, Rom','Galera; ',2147483647,'Colleen Hoover'),(8,'É assim que acaba','2016-02-29',' Romance de amor, Romance cont','Galera; ',2147483647,'Colleen Hoover'),(9,'eu e esse meu coração','2018-10-02',' Ficção, Romance contemporâneo','‎Jangada',2147483647,' C. C. Hunter');
/*!40000 ALTER TABLE `livros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `endereco` varchar(40) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `data` date DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-15 14:15:51
