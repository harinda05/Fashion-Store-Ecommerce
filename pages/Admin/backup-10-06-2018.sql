-- MySQL dump 10.16  Distrib 10.1.28-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: prince_fashion
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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(63) NOT NULL,
  `password` varchar(63) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin1','admin1','Admin 1 ','admin1@fashion.com'),(2,'admin2','admin2','Admin 2','admin2@fashion.com');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `application`
--

DROP TABLE IF EXISTS `application`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `application` (
  `u_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(127) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(1028) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `email` varchar(127) NOT NULL,
  `education` varchar(32) NOT NULL,
  `work_experience` varchar(2048) NOT NULL,
  `prof_q` varchar(2048) NOT NULL,
  `cv` varchar(10000) NOT NULL,
  `img` varchar(10000) NOT NULL,
  `status` varchar(25) NOT NULL,
  `mark` int(11) NOT NULL,
  PRIMARY KEY (`u_id`,`job_id`),
  KEY `job_id` (`job_id`),
  KEY `app_id` (`app_id`),
  CONSTRAINT `application_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`),
  CONSTRAINT `application_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `application`
--

LOCK TABLES `application` WRITE;
/*!40000 ALTER TABLE `application` DISABLE KEYS */;
INSERT INTO `application` VALUES (1,4,1,'Saaman Rathnapala','2015-08-01',' adawdad samagi road','755662122','dwd@gmail.com','Post Graduate','a:1:{i:0;a:3:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}}','a:1:{i:0;a:3:{i:0;s:0:\"\";i:1;s:0:\"\";i:2;s:0:\"\";}}','C:/wamp64/www/fashion/images/application/cv/','','Received',28),(13,4,7,'Rodrigo Prince','1998-05-12',' 123 Samgi RD, Polonnaruwa','7748156232','burndownonline@gmail.com','Ordinary Level','YToxOntpOjA7YTozOntpOjA7czo3OiJKciBFeGVjIjtpOjE7czo4OiI2IG1vbnRocyI7aToyO3M6NToiRXNvZnQiO319','YToyOntpOjA7YTozOntpOjA7czo0OiIyMDExIjtpOjE7czozOiJCQ1MiO2k6MjtzOjU6IkVTT0ZUIjt9aToxO2E6Mzp7aTowO3M6NDoiMjAxNSI7aToxO3M6NToiQ0lTQ08iO2k6MjtzOjU6IkVTT0ZUIjt9fQ==','C:/wamp64/www/fashion/images/application/cv/ecotrail.txt','YToyOntpOjA7czo1ODoiQzovd2FtcDY0L3d3dy9mYXNoaW9uL2ltYWdlcy9hcHBsaWNhdGlvbi9pbWFnZXMvc2Nob29sLnBuZyI7aToxO3M6NTQ6IkM6L3dhbXA2NC93d3cvZmFzaGlvbi9pbWFnZXMvYXBwbGljYXRpb24vaW1hZ2VzL3d3LnBuZyI7fQ==','Received',16);
/*!40000 ALTER TABLE `application` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client_department`
--

DROP TABLE IF EXISTS `client_department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client_department` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_id` varchar(4) NOT NULL,
  PRIMARY KEY (`u_id`),
  KEY `dept_id` (`dept_id`),
  CONSTRAINT `client_department_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`),
  CONSTRAINT `client_department_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_department`
--

LOCK TABLES `client_department` WRITE;
/*!40000 ALTER TABLE `client_department` DISABLE KEYS */;
INSERT INTO `client_department` VALUES (1,'1'),(4,'1'),(5,'2'),(6,'3'),(13,'3'),(7,'4');
/*!40000 ALTER TABLE `client_department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client_login`
--

DROP TABLE IF EXISTS `client_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client_login` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(63) NOT NULL,
  `password` varchar(63) NOT NULL,
  PRIMARY KEY (`c_id`),
  CONSTRAINT `client_login_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `client_department` (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_login`
--

LOCK TABLES `client_login` WRITE;
/*!40000 ALTER TABLE `client_login` DISABLE KEYS */;
INSERT INTO `client_login` VALUES (1,'client1','clpw');
/*!40000 ALTER TABLE `client_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `dept_id` varchar(3) NOT NULL,
  `department` varchar(31) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES ('1','Finance'),('2','hr'),('3','marketing'),('4','it'),('5','production');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_id` int(11) NOT NULL,
  `dept_id` varchar(3) NOT NULL,
  `title` varchar(256) NOT NULL,
  `position` varchar(100) NOT NULL,
  `description` varchar(1028) NOT NULL,
  `post_date` date NOT NULL,
  `closing_date` date NOT NULL,
  `img_job` varchar(10000) NOT NULL,
  PRIMARY KEY (`job_id`,`u_id`,`dept_id`),
  KEY `c_id` (`u_id`),
  KEY `dept_id` (`dept_id`),
  CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `client_department` (`u_id`),
  CONSTRAINT `jobs_ibfk_2` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` VALUES (2,4,'1','New Recruitment','SMM','Social media marketer','2018-06-15','2018-06-20','null'),(4,5,'2','aaa','Jr Exec','aaa','2018-06-05','2018-06-01','C:/xampp/htdocs/fashion/images/job/18557112_1860632280631523_549291065253158337_n.jpg'),(5,5,'2','New Recruitment','Fashin Designer','Immediate Recruitment','2018-06-10','2018-06-16','C:/wamp64/www/fashion/images/job/award.png');
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(63) NOT NULL,
  `password` varchar(63) NOT NULL,
  `email` varchar(127) NOT NULL,
  `role` varchar(10) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'First Applicant','pw','dwadwa@gmail.com\r\n','user'),(2,'admin1','admin1','admin1@gmail.com','admin'),(3,'admin2','admin2','admin2@gmail.com','admin'),(4,'client1','client1','client1@gmail.com','client'),(5,'client2','client2','client2@gmail.com','client'),(6,'client3','client3','client3@gmail.com','client'),(7,'client4','client4','client4@gmail.,com','client'),(13,'newuser','newuser','dwada@gm.com','user');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-10 15:15:46
