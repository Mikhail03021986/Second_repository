-- Структура таблицы `current_state_database`
CREATE TABLE IF NOT EXISTS `current_state_database` (
    `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL DEFAULT '',
    `added` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

--                                                                                                                                                                                    
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
/*!40101 SET character_set_client = @saved_cs_client */;
LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,'fnjrsgjd','dfhgtrfdgfd','2021-05-28 15:21:08',1),(2,'fhgfdh','fxhgfdh','2021-05-28 15:23:11',1),(3,'fhgfdh','fxhgfdh','2021-05-28 15:23:17',1),(4,'fhgfdh','fxhgfdh','2021-05-28 15:23:18',1),(5,'trtr','dgfhdfhfscgfs\n','2021-05-28 15:23:30',1),(6,'greyre','46t34wrt','2021-05-28 15:59:29',1),(7,'fgfdgh','gfdhgfd','2021-05-28 16:17:33',1),(8,'sfdgfds','bfdcxgfd','2021-05-28 16:38:28',1),(9,'fghghghg','htyhkyjhlkuyn','2021-05-28 16:53:34',1),(10,'hgvhfghgh','ghjtgjhrfghrtgf','2021-05-28 16:53:40',1),(11,'rdfytfdhtgf','tgvhjnrfgcjngf','2021-05-28 16:53:47',1),(12,'рпаропаонр','ронерол','2021-05-28 16:53:57',1),(13,'арнпаргп','вавыа','2021-05-28 17:08:43',1),(14,'dsafdsf','rfdsfd','2021-05-28 17:15:18',1),(15,'tyter','treyt5r','2021-05-28 17:15:34',1),(16,'fgfd','dgfffffffffffdddddddddfdgfggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg','2021-05-28 19:25:59',1),(17,'fgfg','gfdcxgmfkdvxhnbfvmhnbdjvhgbnvmhgnbmhgbmgfbnmhbndvmhbndhgjdfkgjfkgjdf hbn dmbhn mbhndmhnfjnfmcjvnfc.vndcm.hvndfcm.vnfjvndfm.nvfcm.vnfchjvnfcjvnfcnvfcnnbmnbdfmhnbmbn mnbmbnfvmbnfmbnfmgjrkflcgjfdjyhgfjgyhsdjtlhdjldhhglfmghfl','2021-05-28 19:47:24',1),(18,'Миша','Валя, не грусти','2021-05-28 21:57:46',1),(19,'Миша','<script>alert(\"Должно быть заблокировано\");</script>','2021-05-28 22:14:52',1);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

-- Dump completed on 2021-05-31 14:10:56

REPLACE INTO `current_state_database` VALUES (1,'comments','2021-05-28 15:21:08');
