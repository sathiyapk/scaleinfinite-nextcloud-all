-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: testscale
-- ------------------------------------------------------
-- Server version	8.0.36-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `activity`
--

DROP TABLE IF EXISTS `activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `activity` (
  `id` int NOT NULL AUTO_INCREMENT,
  `userId` varchar(128) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `activity` varchar(128) DEFAULT NULL,
  `time` datetime DEFAULT CURRENT_TIMESTAMP,
  `totaluptime` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`)
); 
-- ENGINE=InnoDB AUTO_INCREMENT=223 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity`
--

LOCK TABLES `activity` WRITE;
/*!40000 ALTER TABLE `activity` DISABLE KEYS */;
INSERT INTO `activity` VALUES (82,'09c3d38306129055e321bfb01e336ef3','mightylion','created','2024-02-07 14:38:23','0'),(83,'09c3d38306129055e321bfb01e336ef3','life','created','2024-02-07 14:40:54','0'),(84,'09c3d38306129055e321bfb01e336ef3','mightylion','deleted','2024-02-07 20:31:07','0'),(85,'09c3d38306129055e321bfb01e336ef3','myweb','created','2024-02-07 20:42:22','0'),(86,'09c3d38306129055e321bfb01e336ef3','life','deleted','2024-02-07 22:59:18','0'),(87,'09c3d38306129055e321bfb01e336ef3','myweb','deleted','2024-02-07 22:59:24','0'),(88,'09c3d38306129055e321bfb01e336ef3','mightyeagle','created','2024-02-07 23:00:26','0'),(89,'09c3d38306129055e321bfb01e336ef3','gorgeousqeen','created','2024-02-08 14:51:17','0'),(90,'09c3d38306129055e321bfb01e336ef3','gorgeousqeen','on','2024-02-08 14:52:14','0'),(91,'09c3d38306129055e321bfb01e336ef3','gorgeousqeen','Network rules Updated','2024-02-08 14:52:14','0'),(92,'09c3d38306129055e321bfb01e336ef3','gorgeousqeen','deleted','2024-02-08 15:07:39','0'),(93,'09c3d38306129055e321bfb01e336ef3','myweb','created','2024-02-08 15:09:14','0'),(94,'09c3d38306129055e321bfb01e336ef3','mightyeagle','deleted','2024-02-08 15:17:55','0'),(95,'09c3d38306129055e321bfb01e336ef3','mydb','created','2024-02-08 15:21:55','0'),(96,'09c3d38306129055e321bfb01e336ef3','mydb','deleted','2024-02-08 16:22:41','0'),(97,'09c3d38306129055e321bfb01e336ef3','datad','created','2024-02-08 16:24:58','0'),(101,'09c3d38306129055e321bfb01e336ef3','myweb','deleted','2024-02-08 17:24:16','0'),(102,'09c3d38306129055e321bfb01e336ef3','datad','deleted','2024-02-08 17:24:21','0'),(104,'09c3d38306129055e321bfb01e336ef3','mkkweb','created','2024-02-08 19:16:23','0'),(106,'09c3d38306129055e321bfb01e336ef3','mkkweb','deleted','2024-02-08 19:44:48','0'),(107,'09c3d38306129055e321bfb01e336ef3','mightylion','created','2024-02-08 19:49:33','0'),(108,'09c3d38306129055e321bfb01e336ef3','guruji','created','2024-02-08 20:14:49','0'),(109,'09c3d38306129055e321bfb01e336ef3','guruji','deleted','2024-02-08 20:23:09','0'),(110,'09c3d38306129055e321bfb01e336ef3','joo','created','2024-02-08 20:25:08','0'),(111,'09c3d38306129055e321bfb01e336ef3','joo','on','2024-02-08 20:34:19','0'),(112,'09c3d38306129055e321bfb01e336ef3','joo','Network rules Updated','2024-02-08 20:34:19','0'),(113,'09c3d38306129055e321bfb01e336ef3','joo','deleted','2024-02-08 20:35:50','0'),(114,'09c3d38306129055e321bfb01e336ef3','joo','created','2024-02-08 20:52:41','0'),(115,'09c3d38306129055e321bfb01e336ef3','joo','deleted','2024-02-08 20:55:24','0'),(116,'09c3d38306129055e321bfb01e336ef3','joo','created','2024-02-08 22:18:21','0'),(117,'09c3d38306129055e321bfb01e336ef3','joo','deleted','2024-02-09 09:33:46','0'),(118,'09c3d38306129055e321bfb01e336ef3','mightylion','deleted','2024-02-09 09:34:28','0'),(119,'09c3d38306129055e321bfb01e336ef3','mightylion','created','2024-02-09 10:01:30','0'),(120,'09c3d38306129055e321bfb01e336ef3','mightylion','deleted','2024-02-09 10:05:41','0'),(121,'09c3d38306129055e321bfb01e336ef3','joo','created','2024-02-09 17:36:02','0'),(122,'09c3d38306129055e321bfb01e336ef3','joo','deleted','2024-02-09 18:05:56','0'),(123,'09c3d38306129055e321bfb01e336ef3','joo','created','2024-02-09 18:22:50','0'),(124,'09c3d38306129055e321bfb01e336ef3','joo','deleted','2024-02-10 11:42:56','0'),(125,'09c3d38306129055e321bfb01e336ef3','joo','created','2024-02-10 11:44:20','0'),(126,'09c3d38306129055e321bfb01e336ef3','joo','deleted','2024-02-10 12:03:22','0'),(127,'09c3d38306129055e321bfb01e336ef3','joo','created','2024-02-10 12:03:49','0'),(129,'09c3d38306129055e321bfb01e336ef3','brandfactory','created','2024-02-10 15:33:07','0'),(132,'09c3d38306129055e321bfb01e336ef3','brandfactory','deleted','2024-02-10 17:30:52','0'),(133,'09c3d38306129055e321bfb01e336ef3','brandfactory','created','2024-02-10 17:32:05','0'),(134,'09c3d38306129055e321bfb01e336ef3','joo','deleted','2024-02-10 20:26:29','0'),(135,'09c3d38306129055e321bfb01e336ef3','brandfactory','deleted','2024-02-10 20:26:43','0'),(136,'09c3d38306129055e321bfb01e336ef3','mightylion','created','2024-02-10 20:27:36','0'),(137,'09c3d38306129055e321bfb01e336ef3','mightylion','deleted','2024-02-10 20:28:02','0'),(138,'09c3d38306129055e321bfb01e336ef3','mightylion','created','2024-02-10 20:28:33','0'),(139,'09c3d38306129055e321bfb01e336ef3','mightylion','deleted','2024-02-10 22:07:39','0'),(140,'09c3d38306129055e321bfb01e336ef3','mightylion','created','2024-02-10 22:08:28','0'),(141,'09c3d38306129055e321bfb01e336ef3','mightylion','deleted','2024-02-10 22:16:50','0'),(142,'09c3d38306129055e321bfb01e336ef3','mightyeagle','created','2024-02-10 22:17:50','0'),(143,'09c3d38306129055e321bfb01e336ef3','mightyeagle','deleted','2024-02-10 22:29:46','0'),(144,'09c3d38306129055e321bfb01e336ef3','mightyeagle','created','2024-02-10 22:33:14','0'),(145,'09c3d38306129055e321bfb01e336ef3','joo','created','2024-02-12 10:34:19','0'),(146,'09c3d38306129055e321bfb01e336ef3','joo','deleted','2024-02-12 10:40:12','0'),(147,'09c3d38306129055e321bfb01e336ef3','mightyeagle','deleted','2024-02-12 10:40:18','0'),(148,'09c3d38306129055e321bfb01e336ef3','joo','created','2024-02-12 10:42:43','0'),(150,'09c3d38306129055e321bfb01e336ef3','mkkwork','created','2024-02-12 14:13:34','0'),(151,'09c3d38306129055e321bfb01e336ef3','mkkwork','deleted','2024-02-12 14:51:35','0'),(152,'09c3d38306129055e321bfb01e336ef3','mkkwork','created','2024-02-12 14:55:08','0'),(163,'09c3d38306129055e321bfb01e336ef3','mkkwork','deleted','2024-02-12 18:34:17','0'),(164,'09c3d38306129055e321bfb01e336ef3','mightyeagle','created','2024-02-12 19:56:55','0'),(165,'09c3d38306129055e321bfb01e336ef3','mightyeagle','deleted','2024-02-12 20:09:28','0'),(166,'09c3d38306129055e321bfb01e336ef3','mightylion','created','2024-02-12 20:11:36','0'),(173,'09c3d38306129055e321bfb01e336ef3','mkkwork','created','2024-02-12 22:48:25','0'),(174,'09c3d38306129055e321bfb01e336ef3','mightylion','deleted','2024-02-12 23:04:21','0'),(175,'09c3d38306129055e321bfb01e336ef3','mkkwork','deleted','2024-02-12 23:08:10','0'),(176,'09c3d38306129055e321bfb01e336ef3','jelly','created','2024-02-12 23:09:10','0'),(177,'09c3d38306129055e321bfb01e336ef3','jelly','deleted','2024-02-12 23:12:18','0'),(178,'09c3d38306129055e321bfb01e336ef3','mkkwork','created','2024-02-12 23:42:12','0'),(181,'09c3d38306129055e321bfb01e336ef3','mkkwork','deleted','2024-02-13 00:29:17','0'),(188,'09c3d38306129055e321bfb01e336ef3','mkkwork','created','2024-02-13 23:13:39','0'),(189,'09c3d38306129055e321bfb01e336ef3','mkkwork','deleted','2024-02-13 23:16:13','0'),(190,'09c3d38306129055e321bfb01e336ef3','mightyeagle','created','2024-02-13 23:17:19','0'),(193,'09c3d38306129055e321bfb01e336ef3','mightyeagle','deleted','2024-02-14 23:37:55','0'),(194,'09c3d38306129055e321bfb01e336ef3','gorgeousqeen','created','2024-02-14 23:38:34','0'),(195,'09c3d38306129055e321bfb01e336ef3','gorgeousqeen','deleted','2024-02-14 23:39:05','0'),(196,'09c3d38306129055e321bfb01e336ef3','gorgeousqeen','created','2024-02-14 23:39:35','0'),(198,'8776cf96febd1c7421cb124a0f430990','ultrahigh','created','2024-02-17 17:33:52','0'),(205,'8776cf96febd1c7421cb124a0f430990','mkkwork','created','2024-02-20 19:56:36','0'),(222,'70386eb981b5f686281e86691319f19f','ankurapp','created','2024-02-21 18:14:13','0');
/*!40000 ALTER TABLE `activity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app`
--

DROP TABLE IF EXISTS `app`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `app` (
  `id` varchar(256) NOT NULL,
  `userId` varchar(128) DEFAULT NULL,
  `name` varchar(128) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `ontime` datetime DEFAULT NULL,
  `offtime` datetime DEFAULT NULL,
  `totaluptime` varchar(1024) DEFAULT NULL,
  `image` varchar(256) DEFAULT NULL,
  `httpPort` varchar(128) DEFAULT NULL,
  `tcpPort` varchar(128) DEFAULT NULL,
  `env` varchar(1024) DEFAULT NULL,
  `workdir` varchar(512) DEFAULT NULL,
  `resourcePercentage` varchar(10) DEFAULT NULL,
  `secret` varchar(512) DEFAULT NULL,
  `desc` varchar(1024) DEFAULT NULL,
  `logo` varchar(512) DEFAULT NULL,
  `auth` varchar(128) DEFAULT NULL,
  `networkinbound` varchar(1024) DEFAULT NULL,
  `networkoutbound` varchar(1024) DEFAULT NULL,
  `clusterIp` varchar(128) DEFAULT NULL,
  `persisted` varchar(128) DEFAULT NULL,
  `replicas` int DEFAULT NULL,
  `publicIp` varchar(128) DEFAULT NULL,
  `host` varchar(1024) DEFAULT NULL,
  `path` varchar(1024) DEFAULT NULL,
  `whitelistIP` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
--  ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app`
--

LOCK TABLES `app` WRITE;
/*!40000 ALTER TABLE `app` DISABLE KEYS */;
INSERT INTO `app` VALUES ('126453ac-02ba-46da-bede-1b437a796892','70386eb981b5f686281e86691319f19f','ankurapp','on','2024-02-21 19:48:41','2024-02-21 19:48:41',NULL,'0','nginx','8080',NULL,'\"\"','','20',NULL,'Official build of Nginx.','https://d1q6f0aelx0por.cloudfront.net/product-logos/library-nginx-logo.png','',NULL,NULL,'0.0.0.0.','False',1,'0.0.0.0','ankurapp.70386eb981.fltt.fr','simple string for now','0.0.0.0/0'),('796c5b43-6077-4692-885d-2b1490038ac5','09c3d38306129055e321bfb01e336ef3','joo','on','2024-02-12 12:17:17','2024-02-12 12:17:17',NULL,'0','joomla','80',NULL,'{\"JOOMLA_DB_HOST\": \"192.168.1.80\", \"MYSQL_PORT_3306_TCP\": \"3306\", \"JOOMLA_DB_NAME\": \"joomla\", \"JOOMLA_DB_USER\": \"scaleinfinite\", \"JOOMLA_DB_PASSWORD\": \"scale#1223\"}','/var/www/html/images','40',NULL,'Joomla! is an open source content management system.','https://d1q6f0aelx0por.cloudfront.net/product-logos/library-joomla-logo.png','',NULL,NULL,'0.0.0.0.','False',1,'0.0.0.0','joo.09c3d38306.fltt.fr','simple string for now','0.0.0.0/0'),('80dc7b12-152e-46a0-b48d-de005df53275','8776cf96febd1c7421cb124a0f430990','ultrahigh','on','2024-02-17 19:08:23','2024-02-17 19:08:23',NULL,'0','nginx','80',NULL,'\"\"','','30',NULL,'Official build of Nginx.','https://d1q6f0aelx0por.cloudfront.net/product-logos/library-nginx-logo.png','',NULL,NULL,'0.0.0.0.','False',1,'0.0.0.0','ultrahigh.8776cf96fe.fltt.fr','simple string for now','0.0.0.0/0'),('b1c7a721-3d91-400c-9052-4a5507d1cae8','f1111571c3201a75c24fb107764ab9bf','testapp5','on','2024-02-20 21:37:26','2024-02-20 21:37:26',NULL,'0','nginx','8080',NULL,'{}','','100',NULL,'','','',NULL,NULL,'0.0.0.0.','False',1,'0.0.0.0','testapp5.f1111571c3.fltt.fr','simple string for now','0.0.0.0/0'),('ca92937f-8ee7-436f-9127-f2653a57bbcb','09c3d38306129055e321bfb01e336ef3','gorgeousqeen','on','2024-02-15 01:14:08','2024-02-15 01:14:08',NULL,'0','nginx','81',NULL,'\"\"','','40',NULL,'Official build of Nginx.','https://d1q6f0aelx0por.cloudfront.net/product-logos/library-nginx-logo.png','',NULL,NULL,'0.0.0.0.','False',1,'0.0.0.0','gorgeousqeen.09c3d38306.fltt.fr','simple string for now','0.0.0.0/0'),('d203f538-0aa3-4d31-9166-9730ccd2f545','8776cf96febd1c7421cb124a0f430990','mkkwork','on','2024-02-20 21:31:05','2024-02-20 21:31:05',NULL,'0','httpd','81',NULL,'\"\"','','40',NULL,'The Apache HTTP Server Project','https://d1q6f0aelx0por.cloudfront.net/product-logos/library-httpd-logo.png','',NULL,NULL,'0.0.0.0.','False',1,'0.0.0.0','mkkwork.8776cf96fe.fltt.fr','simple string for now','0.0.0.0/0');
/*!40000 ALTER TABLE `app` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`scaleinfinite`@`%`*/ /*!50003 TRIGGER `CREATE_STATUS_ACTIVITY_TRIGGER` AFTER INSERT ON `app` FOR EACH ROW BEGIN
            INSERT INTO activity(
                userId,
                name,
                activity,
                totaluptime
            ) VALUES(
                NEW.userId,
                NEW.name,
                'created',
                NEW.totaluptime
            );
        END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`scaleinfinite`@`%`*/ /*!50003 TRIGGER `ADD_STATUS_ACTIVITY_TRIGGER` AFTER UPDATE ON `app` FOR EACH ROW BEGIN
        INSERT INTO activity(
            userId,
            name,
            activity,
            totaluptime
        ) VALUES(
            NEW.userId,
            NEW.name,
            NEW.status,
            NEW.totaluptime
        );
    END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`scaleinfinite`@`%`*/ /*!50003 TRIGGER `NETPOL_STATUS_ACTIVITY_TRIGGER` AFTER UPDATE ON `app` FOR EACH ROW BEGIN
            INSERT INTO activity(
                userId,
                name,
                activity,
                totaluptime
            ) VALUES(
                NEW.userId,
                NEW.name,
                'Network rules Updated',
                NEW.totaluptime
            );
        END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`scaleinfinite`@`%`*/ /*!50003 TRIGGER `DELETE_STATUS_ACTIVITY_TRIGGER` AFTER DELETE ON `app` FOR EACH ROW BEGIN
            INSERT INTO activity(
                userId,
                name,
                activity,
                totaluptime
            ) VALUES(
                OLD.userId,
                OLD.name,
                'deleted',
                OLD.totaluptime
            );
        END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `ip`
--

DROP TABLE IF EXISTS `ip`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ip` (
  `ip` varchar(128) NOT NULL,
  `userId` varchar(128) DEFAULT NULL,
  `TYPE` varchar(128) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`ip`)
);
--  ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ip`
--

LOCK TABLES `ip` WRITE;
/*!40000 ALTER TABLE `ip` DISABLE KEYS */;
INSERT INTO `ip` VALUES ('103.37.96.100',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.101',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.102',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.103',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.104',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.105',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.106',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.107',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.108',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.109',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.11',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.110',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.111',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.112',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.113',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.114',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.115',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.116',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.117',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.118',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.119',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.12',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.120',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.121',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.122',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.123',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.124',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.125',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.126',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.127',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.128',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.129',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.13',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.130',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.131',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.132',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.133',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.134',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.135',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.136',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.137',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.138',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.139',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.14',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.140',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.141',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.142',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.143',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.144',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.145',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.146',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.147',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.148',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.149',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.15',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.150',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.151',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.152',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.153',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.154',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.155',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.156',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.157',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.158',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.159',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.16',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.160',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.161',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.162',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.163',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.164',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.165',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.166',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.167',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.168',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.169',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.17',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.170',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.171',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.172',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.173',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.174',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.175',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.176',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.177',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.178',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.179',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.18',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.180',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.181',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.182',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.183',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.184',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.185',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.186',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.187',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.188',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.189',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.19',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.190',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.191',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.192',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.193',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.194',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.195',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.196',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.197',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.198',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.199',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.20',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.200',NULL,'free','2024-02-01 12:47:47'),('103.37.96.201',NULL,'free','2024-02-01 12:47:47'),('103.37.96.202',NULL,'free','2024-02-01 12:47:47'),('103.37.96.203',NULL,'free','2024-02-01 12:47:47'),('103.37.96.204',NULL,'free','2024-02-01 12:47:47'),('103.37.96.205',NULL,'free','2024-02-01 12:47:47'),('103.37.96.206',NULL,'free','2024-02-01 12:47:47'),('103.37.96.207',NULL,'free','2024-02-01 12:47:47'),('103.37.96.208',NULL,'free','2024-02-01 12:47:47'),('103.37.96.209',NULL,'free','2024-02-01 12:47:47'),('103.37.96.21',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.210',NULL,'free','2024-02-01 12:47:47'),('103.37.96.211',NULL,'free','2024-02-01 12:47:47'),('103.37.96.212',NULL,'free','2024-02-01 12:47:47'),('103.37.96.213',NULL,'free','2024-02-01 12:47:47'),('103.37.96.214',NULL,'free','2024-02-01 12:47:47'),('103.37.96.215',NULL,'free','2024-02-01 12:47:47'),('103.37.96.216',NULL,'free','2024-02-01 12:47:47'),('103.37.96.217',NULL,'free','2024-02-01 12:47:47'),('103.37.96.218',NULL,'free','2024-02-01 12:47:47'),('103.37.96.219',NULL,'free','2024-02-01 12:47:47'),('103.37.96.22',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.220',NULL,'free','2024-02-01 12:47:47'),('103.37.96.221',NULL,'free','2024-02-01 12:47:47'),('103.37.96.222',NULL,'free','2024-02-01 12:47:47'),('103.37.96.223',NULL,'free','2024-02-01 12:47:47'),('103.37.96.224',NULL,'free','2024-02-01 12:47:47'),('103.37.96.225',NULL,'free','2024-02-01 12:47:47'),('103.37.96.226',NULL,'free','2024-02-01 12:47:47'),('103.37.96.227',NULL,'free','2024-02-01 12:47:47'),('103.37.96.228',NULL,'free','2024-02-01 12:47:47'),('103.37.96.229',NULL,'free','2024-02-01 12:47:47'),('103.37.96.23',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.230',NULL,'free','2024-02-01 12:47:47'),('103.37.96.231',NULL,'free','2024-02-01 12:47:47'),('103.37.96.232',NULL,'free','2024-02-01 12:47:47'),('103.37.96.233',NULL,'free','2024-02-01 12:47:47'),('103.37.96.234',NULL,'free','2024-02-01 12:47:47'),('103.37.96.235',NULL,'free','2024-02-01 12:47:47'),('103.37.96.236',NULL,'free','2024-02-01 12:47:47'),('103.37.96.237',NULL,'free','2024-02-01 12:47:47'),('103.37.96.238',NULL,'free','2024-02-01 12:47:47'),('103.37.96.239',NULL,'free','2024-02-01 12:47:47'),('103.37.96.24',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.240',NULL,'free','2024-02-01 12:47:47'),('103.37.96.241',NULL,'free','2024-02-01 12:47:47'),('103.37.96.242',NULL,'free','2024-02-01 12:47:47'),('103.37.96.243',NULL,'free','2024-02-01 12:47:47'),('103.37.96.244',NULL,'free','2024-02-01 12:47:47'),('103.37.96.245',NULL,'free','2024-02-01 12:47:47'),('103.37.96.246',NULL,'free','2024-02-01 12:47:47'),('103.37.96.247',NULL,'free','2024-02-01 12:47:47'),('103.37.96.248',NULL,'free','2024-02-01 12:47:47'),('103.37.96.249',NULL,'free','2024-02-01 12:47:47'),('103.37.96.25',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.250',NULL,'free','2024-02-01 12:47:47'),('103.37.96.251',NULL,'free','2024-02-01 12:47:47'),('103.37.96.252',NULL,'free','2024-02-01 12:47:47'),('103.37.96.253',NULL,'free','2024-02-01 12:47:47'),('103.37.96.26',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.27',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.28',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.29',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.30',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.31',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.32',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.33',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.34',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.35',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.36',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.37',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.38',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.39',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.40',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.41',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.42',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.43',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.44',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.45',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.46',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.47',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.48',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.49',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.50',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.51',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.52',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.53',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.54',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.55',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.56',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.57',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.58',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.59',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.60',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.61',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.62',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.63',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.64',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.65',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.66',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.67',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.68',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.69',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.70',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.71',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.72',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.73',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.74',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.75',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.76',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.77',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.78',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.79',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.80',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.81',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.82',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.83',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.84',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.85',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.86',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.87',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.88',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.89',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.90',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.91',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.92',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.93',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.94',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.95',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.96',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.97',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.98',NULL,'premium','2024-02-01 12:47:47'),('103.37.96.99',NULL,'premium','2024-02-01 12:47:47');
/*!40000 ALTER TABLE `ip` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_table`
--

DROP TABLE IF EXISTS `log_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `log_table` (
  `log_id` int NOT NULL AUTO_INCREMENT,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`log_id`)
);
--  ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_table`
--

LOCK TABLES `log_table` WRITE;
/*!40000 ALTER TABLE `log_table` DISABLE KEYS */;
INSERT INTO `log_table` VALUES (63,'/ubuntu','2024-02-13 16:07:54'),(64,'','2024-02-13 16:07:56'),(65,NULL,'2024-02-13 16:07:56'),(66,'','2024-02-13 16:07:56');
/*!40000 ALTER TABLE `log_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` varchar(128) NOT NULL,
  `name` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `verified_num` varchar(20) DEFAULT NULL,
  `sight_tour` varchar(128) DEFAULT NULL,
  `plan` varchar(128) DEFAULT NULL,
  `plan_expiry` varchar(128) DEFAULT NULL,
  `whatsapp_num` varchar(20) DEFAULT NULL,
  `additional_num` varchar(20) DEFAULT NULL,
  `address_1` varchar(512) DEFAULT NULL,
  `address_2` varchar(512) DEFAULT NULL,
  `city` varchar(128) DEFAULT NULL,
  `state` varchar(128) DEFAULT NULL,
  `country` varchar(128) DEFAULT NULL,
  `zipcode` varchar(128) DEFAULT NULL,
  `favourites` varchar(2048) DEFAULT NULL,
  `payment_ids` varchar(2048) DEFAULT NULL,
  `MAX_LIMIT` int DEFAULT NULL,
  `REMAINING_LIMIT` int DEFAULT NULL,
  PRIMARY KEY (`id`)
);
--  ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES ('09c3d38306129055e321bfb01e336ef3','Mohammed Kapasi','mohammed@codinglama.tech','','image,details,account,favourite,apps,dashboard,support,app','','','','','','','','','','','redis|https://d1q6f0aelx0por.cloudfront.net/product-logos/library-redis-logo.png|Redis is an open source key-value store that functions as a data structure server.**postgres|https://d1q6f0aelx0por.cloudfront.net/product-logos/library-postgres-logo.png|The PostgreSQL object-relational database system provides reliability and data integrity.**jellyfin/jellyfin|https://secure.gravatar.com/avatar/56b6e15d486f6407690a6cb56e3fa68e.jpg?s=80&r=g&d=mm|**jellyfin/jellyfin-web|https://secure.gravatar.com/avatar/56b6e15d486f6407690a6cb56e3fa68e.jpg?s=80&r=g&d=mm|**jellyfin/jellyfin-server|https://secure.gravatar.com/avatar/56b6e15d486f6407690a6cb56e3fa68e.jpg?s=80&r=g&d=mm|**jellyfin/jellyfin-vue|https://secure.gravatar.com/avatar/56b6e15d486f6407690a6cb56e3fa68e.jpg?s=80&r=g&d=mm|',NULL,1000,200),('70386eb981b5f686281e86691319f19f','Ankur Kumar Gupta','ankurkumargupta2000@gmail.com','','','free','','','','','','','','','','',NULL,1000,800),('8776cf96febd1c7421cb124a0f430990','Mohammed Kapasi','mohammed22091995@gmail.com','','','free','','','','','','','','','','',NULL,1000,300),('fff3dbfbcb39a25aebd481faf4937da5','John J','graphicssource@gmail.com','','','free','','','','','','','','','','',NULL,1000,1000);
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

-- Dump completed on 2024-02-21 19:44:12
