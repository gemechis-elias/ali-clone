-- MariaDB dump 10.19  Distrib 10.11.3-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: alibaba_clone
-- ------------------------------------------------------
-- Server version	10.11.3-MariaDB

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
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `image` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES
(1,1,'3 In 1 Mobile Phone Usb Retractable...',1.76,2,'1.jpg'),
(2,1,'Phone i 12 Pro Max 6.7 inch Android...',54.90,2,'2.jpg'),
(3,1,'Best Selling products online activation...',2.50,2,'3.png'),
(4,1,'WEBCAM 13 MP',1.80,2,'4.jpg'),
(5,1,'HIGH FIDELITY TV 4K RESOLUTION',4.80,2,'5.png'),
(6,1,'FULL CAPACITY SELL HIGH SPEED MEMORY 16 GB',4.80,2,'6.jpg'),
(7,1,'ear podes Ruggas',4.80,2,'7.jpg'),
(8,1,'iPhone 12 Pro Max',4.80,2,'8.jpg'),
(9,1,'HIGH PERFORMANCE GAMING SET UP PS4',4.80,2,'9.jpeg'),
(10,1,'FULL CAPACITY SELL HIGH SPEED MEMORY 16 GB',4.80,2,'10.jpg'),
(11,1,'Huwawei 635 rechargable batteries',4.80,2,'11.jpg'),
(12,1,'Huwawei 635 rechargable batteries',4.80,2,'12.jpg'),
(13,1,'FULL CAPACITY SELL HIGH SPEED MEMORY 16 GB',4.80,2,'13.jpg'),
(14,1,'Phone i12 Pro Max',4.80,2,'14.jpeg'),
(15,1,'Lenovo thinkpad E15 Gen 3',4.80,2,'15.jpg'),
(16,1,'IPTV WORLD CHANNELS',4.80,2,'16.jpg'),
(17,1,'SAMSUNG EARPODES',4.80,2,'17.jpg'),
(18,1,'APPLE WATCHES',4.80,2,'18.jpg'),
(19,1,'HIGH QUALITY GORILLA 6 GLASSES FOR YOUR S8+',4.80,2,'19.jpg'),
(20,1,'FILMING TRIPOD AND CAMERA SETUP',4.80,2,'20.jpg'),
(21,1,'iPHONE 12 cases',4.80,2,'21.jpg');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'dechasa','dechasa@gmail.com','1234');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-23  8:16:00
