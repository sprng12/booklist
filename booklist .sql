-- MySQL dump 10.13  Distrib 5.5.18, for Win32 (x86)
--
-- Host: localhost    Database: booklist
-- ------------------------------------------------------
-- Server version	5.5.18

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
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `authors` (
  `author_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(70) NOT NULL,
  `middle_name` varchar(70) DEFAULT NULL,
  `last_name` varchar(70) DEFAULT NULL,
  `country` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES (1,'Лев','Николаевич','Толстой','Российская империя'),(2,'Михаил','Афанасьевич','Булгаков','Российская империя'),(3,'Николай','Васильевич','Гоголь','Российская империя'),(4,'Джордж','','Оруэлл','Англия'),(5,'Федор','Михайлович','Достоевский','Российская империя'),(6,'Стив','','Макконел','США');
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `book_avg`
--

DROP TABLE IF EXISTS `book_avg`;
/*!50001 DROP VIEW IF EXISTS `book_avg`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `book_avg` (
  `book_id` int(11) unsigned,
  `avg_rate` decimal(4,0)
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `book_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `book_title` varchar(250) NOT NULL,
  `year` char(4) DEFAULT NULL,
  `lang_id` int(11) unsigned NOT NULL,
  `pages` int(10) unsigned DEFAULT NULL,
  `rate` float unsigned NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  PRIMARY KEY (`book_id`),
  KEY `lang_id` (`lang_id`),
  CONSTRAINT `books_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `languages` (`lang_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'Мастер и Маргарита','1966',1,384,0,'Это – самый загадочный из романов за всю историю отечественной литературы XX в. Это – роман, который почти официально называют «Евангелием от Сатаны». Это – «Мастер и Маргарита». Книга, которую можно читать и перечитывать десятки, сотни раз, но главное, вкоторой все равно понять невозможно. Итак, какие страницы «Мастера и Маргариты» надиктованы Силами Света? И какие – наоборот – писаны «со слов» Сил Тьмы? Пока что этого не знает никто. Прочитайте. Может, вы узнаете это первыми?'),(2,'1984','1949',3,352,0,'Своеобразный антипод второй великой антиутопии XX века – «О дивный новый мир» Олдоса Хаксли. Что, в сущности, страшнее: доведенное до абсурда общество потребления или доведенное до абсолюта общество идеи?По Оруэллу, нет и не может быть ничего ужаснее тотальной несвободы... '),(3,'Идиот','1868',3,672,0,'В романе великого русского писателя Ф.М.Достоевского \"Идиот\" ставится вопрос о путях духовного развития русского общества, о тяжелой судьбе передовых его слоев в России конца XIX века.'),(5,'Преступление и наказание','1866',3,736,0,'Лучшая книга, которую можно предложить школьнику или студенту - идеальная пища для размышлений. Она по истине формирует мировоззрение, ведь иногда чтобы понять чужой поступок, нужно либо совершить его самому, либо послушать того, кто однажды натворил подобное. Эта книга пропитана немного безумным духом Питера, цинизмом и глубокой философией, за что по праву становится любимой!'),(6,'Совершенный код','200',3,896,0,'Более 10 лет первое издание этой книги считалось одним из лучших практических руководств по программированию. Сейчас эта книга полностью обновлена с учетом современных тенденций и технологий и дополнена сотнями новых примеров, иллюстрирующих искусство и науку программирования. Опираясь на академические исследования, с одной стороны, и практический опыт коммерческих разработок ПО - с другой, автор синтезировал из самых эффективных методик и наиболее эффективных принципов ясное прагматичное руководство. Каков бы ни был ваш профессиональный уровень, с какими бы средствами разработками вы ни работали, какова бы ни была сложность вашего проекта, в этой книге вы найдете нужную информацию, она заставит вас размышлять и поможет создать совершенный код.'),(7,'Анна Каренина','1878',1,800,0,'Все счастливые семьи похожи друг на друга, каждая несчастливая семья несчастлива по-своему. Все смешалось в доме Облонских. Жена узнала, что муж был в связи с бывшею в их доме француженкою-гувернанткой, и объявила мужу, что не может жить с ним в одном доме. Положение это продолжалось уже третий день и мучительно чувствовалось и самими супругами, и всеми членами семьи, и домочадцами. Все члены семьи и домочадцы чувствовали, что нет смысла в их сожительстве и что на каждом постоялом дворе случайно сошедшиеся люди более связаны между собой, чем они, члены семьи и домочадцы Облонских... Роман о незаконной и трагичной любви замужней дамы Анны Карениной к блестящему офицеру Вронскому на фоне любви и счастливой семейной жизни Константина Левина и Кити Щербацкой. Масштабная картина нравов и быта дворянской среды Петербурга и Москвы второй половины XIX века, сочетающая философские размышления авторского alter ego Левина с передовыми в русской литературе психологическими зарисовками, а также сценами из жизни крестьян. ');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books_authors`
--

DROP TABLE IF EXISTS `books_authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books_authors` (
  `book_id` int(11) unsigned NOT NULL,
  `author_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`book_id`,`author_id`),
  KEY `author_id` (`author_id`),
  CONSTRAINT `books_authors_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON UPDATE CASCADE,
  CONSTRAINT `books_authors_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `authors` (`author_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books_authors`
--

LOCK TABLES `books_authors` WRITE;
/*!40000 ALTER TABLE `books_authors` DISABLE KEYS */;
INSERT INTO `books_authors` VALUES (7,1),(1,2),(2,4),(3,5),(5,5),(6,6);
/*!40000 ALTER TABLE `books_authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books_genres`
--

DROP TABLE IF EXISTS `books_genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books_genres` (
  `genre_id` int(11) unsigned NOT NULL,
  `book_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`genre_id`,`book_id`),
  KEY `book_id` (`book_id`),
  CONSTRAINT `books_genres_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`genre_id`) ON UPDATE CASCADE,
  CONSTRAINT `books_genres_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books_genres`
--

LOCK TABLES `books_genres` WRITE;
/*!40000 ALTER TABLE `books_genres` DISABLE KEYS */;
INSERT INTO `books_genres` VALUES (1,1),(1,2),(1,3),(1,5),(2,6),(1,7);
/*!40000 ALTER TABLE `books_genres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `books_with_authors`
--

DROP TABLE IF EXISTS `books_with_authors`;
/*!50001 DROP VIEW IF EXISTS `books_with_authors`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `books_with_authors` (
  `book_id` int(11) unsigned,
  `book_title` varchar(250),
  `year` char(4),
  `lang_id` int(11) unsigned,
  `pages` int(10) unsigned,
  `rate` float unsigned,
  `description` text,
  `author` text
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `differences`
--

DROP TABLE IF EXISTS `differences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `differences` (
  `first_user_id` int(10) unsigned NOT NULL,
  `second_user_id` int(10) unsigned NOT NULL,
  `diff` float unsigned DEFAULT NULL,
  PRIMARY KEY (`first_user_id`,`second_user_id`),
  KEY `second_user_id` (`second_user_id`),
  CONSTRAINT `differences_ibfk_3` FOREIGN KEY (`second_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `differences_ibfk_1` FOREIGN KEY (`first_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `differences`
--

LOCK TABLES `differences` WRITE;
/*!40000 ALTER TABLE `differences` DISABLE KEYS */;
INSERT INTO `differences` VALUES (4,5,NULL),(4,6,NULL),(5,4,NULL),(5,6,NULL),(6,4,NULL),(6,5,NULL);
/*!40000 ALTER TABLE `differences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genres`
--

DROP TABLE IF EXISTS `genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genres` (
  `genre_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `genre_title` varchar(45) NOT NULL,
  `description` varchar(250) NOT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genres`
--

LOCK TABLES `genres` WRITE;
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;
INSERT INTO `genres` VALUES (1,'роман','литературный жанр, как правило, прозаический, который предполагает развернутое повествование о жизни и развитии личности главного героя (героев) в кризисный, нестандартный период его жизни.'),(2,'учебник','книга, содержащая систематическое изложение знаний в определённой области и используемая как в системе образования, на различных её уровнях, так и для самостоятельного обучения.'),(3,'новелла','повествовательный прозаический жанр, для которого характерны краткость, острый сюжет, нейтральный стиль изложения, отсутствие психологизма, неожиданная развязка.');
/*!40000 ALTER TABLE `genres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `languages` (
  `lang_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `lang_title` varchar(75) NOT NULL,
  `short_title` varchar(10) DEFAULT NULL,
  `native_title` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`lang_id`),
  UNIQUE KEY `lang_title_UNIQUE` (`lang_title`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'русский','рус','русский'),(2,'украинский','укр','українська'),(3,'английский','анг','english'),(4,'испанский','исп','español');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rates`
--

DROP TABLE IF EXISTS `rates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rates` (
  `user_id` int(11) unsigned NOT NULL,
  `book_id` int(11) unsigned NOT NULL,
  `rate` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`book_id`),
  KEY `book_id` (`book_id`),
  CONSTRAINT `rates_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `rates_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rates`
--

LOCK TABLES `rates` WRITE;
/*!40000 ALTER TABLE `rates` DISABLE KEYS */;
/*!40000 ALTER TABLE `rates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'login','Login privileges, granted after account confirmation'),(2,'admin','Administrative user, has access to everything.');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles_users`
--

DROP TABLE IF EXISTS `roles_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`),
  CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles_users`
--

LOCK TABLES `roles_users` WRITE;
/*!40000 ALTER TABLE `roles_users` DISABLE KEYS */;
INSERT INTO `roles_users` VALUES (4,1),(5,1),(6,1),(4,2);
/*!40000 ALTER TABLE `roles_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_tokens`
--

DROP TABLE IF EXISTS `user_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_tokens`
--

LOCK TABLES `user_tokens` WRITE;
/*!40000 ALTER TABLE `user_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (4,'admin@adm.in','admin','0486bc0bba71882b7b032a47a98ec51d4a810efc69bc9905ab3bc39c76d0fca1',5,1331814725),(5,'user1@mail.ru','user1','5f532b63ed5eaa43b7b023b52566b301894030639d022cc1337c98046f758aa1',0,NULL),(6,'user2@mail.ru','user2','647bd7f079d8c6e2c7de7f130adf6bdb5ad635f4267b09adf1902d7ef91cb1be',0,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'booklist'
--
/*!50003 DROP PROCEDURE IF EXISTS `add_diff` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50020 DEFINER=`root`@`localhost`*/ /*!50003 PROCEDURE `add_diff`(IN f INT, IN s INT)
BEGIN
    DECLARE is_exists SMALLINT;
    SELECT COUNT(*) INTO is_exists FROM differences  WHERE first_user_id = f AND second_user_id = s;    
    IF is_exists THEN
        UPDATE differences SET first_user_id = f, second_user_id = s 
        WHERE first_user_id = f AND second_user_id = s;
    ELSE
        INSERT INTO differences (first_user_id, second_user_id, diff) VALUES(f, s, NULL);
    END IF;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `add_rate` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50020 DEFINER=`root`@`localhost`*/ /*!50003 PROCEDURE `add_rate`(IN u INT, IN b INT, IN r INT)
BEGIN
    DECLARE is_exists SMALLINT;
    SELECT COUNT(*) INTO is_exists FROM rates  WHERE user_id = u AND book_id = b;    
    IF is_exists THEN
        UPDATE rates SET rate = r WHERE user_id = u AND book_id = b;
    ELSE
        INSERT INTO rates (user_id, book_id, rate) VALUES(u, b, r);
    END IF;
    
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `get_best_books` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50020 DEFINER=`root`@`localhost`*/ /*!50003 PROCEDURE `get_best_books`(IN l INT)
BEGIN
    SELECT b.book_title, r.book_id, ROUND(AVG(r.rate), 1) AS rate FROM rates AS r
    INNER JOIN books AS b ON r.book_id = b.book_id
    GROUP BY r.book_id 
    ORDER BY rate DESC
    LIMIT l;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `get_user_rec_books` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50020 DEFINER=`root`@`localhost`*/ /*!50003 PROCEDURE `get_user_rec_books`(IN u INT, IN l INT)
BEGIN
    SELECT DISTINCT r.book_id, book_title, avg_rate FROM rates AS r
    INNER JOIN books AS b ON b.book_id = r.book_id 
    LEFT JOIN book_avg AS ba ON ba.book_id = r.book_id
    WHERE user_id IN (SELECT user_id FROM
        (SELECT second_user_id AS user_id, diff FROM differences WHERE first_user_id = u 
        UNION ALL
        SELECT first_user_id AS user_id, diff FROM differences WHERE second_user_id = u 
        ORDER BY diff DESC
        LIMIT l
        ) AS u) 
AND NOT r.book_id IN(SELECT book_id FROM rates WHERE user_id = u)
ORDER BY r.rate DESC
LIMIT l;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `users_diff` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50020 DEFINER=`root`@`localhost`*/ /*!50003 PROCEDURE `users_diff`(IN f INT, IN s INT)
BEGIN
    SELECT ROUND(AVG(deviation), 1) AS diff
    FROM (SELECT book_id, STD(rate) AS deviation 
            FROM rates WHERE user_id = f OR user_id = s  
            GROUP BY book_id
            HAVING COUNT(*) = 2) AS r;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Final view structure for view `book_avg`
--

/*!50001 DROP TABLE IF EXISTS `book_avg`*/;
/*!50001 DROP VIEW IF EXISTS `book_avg`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `book_avg` AS select `rates`.`book_id` AS `book_id`,round(avg(`rates`.`rate`),0) AS `avg_rate` from `rates` group by `rates`.`book_id` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `books_with_authors`
--

/*!50001 DROP TABLE IF EXISTS `books_with_authors`*/;
/*!50001 DROP VIEW IF EXISTS `books_with_authors`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `books_with_authors` AS select `books`.`book_id` AS `book_id`,`books`.`book_title` AS `book_title`,`books`.`year` AS `year`,`books`.`lang_id` AS `lang_id`,`books`.`pages` AS `pages`,`books`.`rate` AS `rate`,`books`.`description` AS `description`,group_concat(`authors`.`first_name`,' ',`authors`.`middle_name`,' ',`authors`.`last_name` separator ', ') AS `author` from ((`books` left join `books_authors` on((`books_authors`.`book_id` = `books`.`book_id`))) left join `authors` on((`books_authors`.`author_id` = `authors`.`author_id`))) group by `books`.`book_title` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-03-16  0:40:55
