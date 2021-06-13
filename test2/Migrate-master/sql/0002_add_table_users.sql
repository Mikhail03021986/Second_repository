-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
      `id` int NOT NULL AUTO_INCREMENT,
      `nickname` tinytext NOT NULL,
      `content` text NOT NULL,
      `created_at` datetime NOT NULL,
      `is_visible` tinyint(1) NOT NULL DEFAULT '1',
      PRIMARY KEY (`id`)

) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

