-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: localhost    Database: laliga_db
-- ------------------------------------------------------
-- Server version	5.6.24

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
-- Table structure for table `coach`
--

DROP TABLE IF EXISTS `coach`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coach` (
  `coach_id` int(8) NOT NULL AUTO_INCREMENT,
  `nationality` varchar(30) NOT NULL,
  `coach_name` varchar(30) NOT NULL,
  PRIMARY KEY (`coach_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coach`
--

LOCK TABLES `coach` WRITE;
/*!40000 ALTER TABLE `coach` DISABLE KEYS */;
INSERT INTO `coach` VALUES (1,'Argentine','Mauricio Pellegrino'),(2,'Spanish','Ernesto Valverde'),(3,'Argentine','Diego Simeone'),(4,'Spanish','Luis Enrique'),(5,'Argentine','Eduardo Berizzo'),(6,'Spanish','Pepe Mel'),(7,'Spanish','José Luis Mendilibar'),(8,'Spanish','Quique Sánchez Flores'),(9,'English','Tony Adams'),(10,'Spanish','Quique Setién'),(11,'Spanish','Asier Garitano'),(12,'Spanish','Míchel'),(13,'Serbian','Petar Vasiljevic'),(14,'Spanish','Alexis Trujillo'),(15,'French','Zinedine Zidane'),(16,'Spanish','Eusebio Sacristán'),(17,'Argentine','Jorge Sampaoli'),(18,'Spanish','Rubi'),(19,'Spanish','Voro'),(20,'Spanish','Fran Escribá');
/*!40000 ALTER TABLE `coach` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fouls`
--

DROP TABLE IF EXISTS `fouls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fouls` (
  `player_id` int(8) NOT NULL,
  `match_id` int(11) NOT NULL,
  `foul_time` int(4) NOT NULL,
  `card_type` varchar(30) NOT NULL,
  `team_id` int(8) NOT NULL,
  PRIMARY KEY (`match_id`,`team_id`,`player_id`,`foul_time`),
  KEY `fk_fouls_team` (`team_id`),
  KEY `fk_fouls_player` (`player_id`),
  CONSTRAINT `fk_fouls_matchplay` FOREIGN KEY (`match_id`) REFERENCES `matchplay` (`match_id`),
  CONSTRAINT `fk_fouls_player` FOREIGN KEY (`player_id`) REFERENCES `player` (`player_id`),
  CONSTRAINT `fk_fouls_team` FOREIGN KEY (`team_id`) REFERENCES `team` (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fouls`
--

LOCK TABLES `fouls` WRITE;
/*!40000 ALTER TABLE `fouls` DISABLE KEYS */;
/*!40000 ALTER TABLE `fouls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goals`
--

DROP TABLE IF EXISTS `goals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goals` (
  `player_id` int(8) NOT NULL,
  `match_id` int(11) NOT NULL,
  `goal_time` int(4) NOT NULL,
  `team_id` int(8) NOT NULL,
  PRIMARY KEY (`match_id`,`team_id`,`player_id`,`goal_time`),
  KEY `fk_goals_team` (`team_id`),
  KEY `fk_goals_player` (`player_id`),
  CONSTRAINT `fk_goals_matchplay` FOREIGN KEY (`match_id`) REFERENCES `matchplay` (`match_id`),
  CONSTRAINT `fk_goals_player` FOREIGN KEY (`player_id`) REFERENCES `player` (`player_id`),
  CONSTRAINT `fk_goals_team` FOREIGN KEY (`team_id`) REFERENCES `team` (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goals`
--

LOCK TABLES `goals` WRITE;
/*!40000 ALTER TABLE `goals` DISABLE KEYS */;
/*!40000 ALTER TABLE `goals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `match_details`
--

DROP TABLE IF EXISTS `match_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `match_details` (
  `match_id` int(11) NOT NULL,
  `home_pos` int(8) NOT NULL,
  `away_pos` int(8) NOT NULL,
  `home_goals` int(8) NOT NULL,
  `away_goals` int(8) NOT NULL,
  `home_fouls` int(8) NOT NULL,
  `away_fouls` int(8) NOT NULL,
  PRIMARY KEY (`match_id`),
  CONSTRAINT `fk_match_details` FOREIGN KEY (`match_id`) REFERENCES `matchplay` (`match_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `match_details`
--

LOCK TABLES `match_details` WRITE;
/*!40000 ALTER TABLE `match_details` DISABLE KEYS */;
INSERT INTO `match_details` VALUES (1,0,0,0,0,0,0),(2,0,0,0,0,0,0),(3,0,0,0,0,0,0),(4,0,0,0,0,0,0),(5,0,0,0,0,0,0),(6,0,0,0,0,0,0),(7,0,0,0,0,0,0),(8,59,41,1,0,13,12),(9,38,62,0,4,12,4),(10,56,44,3,1,19,17),(11,58,42,2,1,7,20),(12,55,45,2,2,9,20),(13,60,40,0,2,14,17),(14,54,46,1,1,13,8);
/*!40000 ALTER TABLE `match_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matchplay`
--

DROP TABLE IF EXISTS `matchplay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matchplay` (
  `match_id` int(11) NOT NULL AUTO_INCREMENT,
  `score` varchar(30) NOT NULL,
  `stadium_name` varchar(30) NOT NULL,
  `ref_id` int(8) NOT NULL,
  `home_team_id` int(8) NOT NULL,
  `away_team_id` int(8) NOT NULL,
  PRIMARY KEY (`match_id`),
  KEY `fk_matchplay_stadium` (`stadium_name`),
  KEY `fk_matchplay_ref` (`ref_id`),
  KEY `fk_matchplay_team1` (`home_team_id`),
  KEY `fk_matchplay_team2` (`away_team_id`),
  CONSTRAINT `fk_matchplay_ref` FOREIGN KEY (`ref_id`) REFERENCES `referee` (`ref_id`),
  CONSTRAINT `fk_matchplay_stadium` FOREIGN KEY (`stadium_name`) REFERENCES `stadium` (`stadium_name`),
  CONSTRAINT `fk_matchplay_team1` FOREIGN KEY (`home_team_id`) REFERENCES `team` (`team_id`),
  CONSTRAINT `fk_matchplay_team2` FOREIGN KEY (`away_team_id`) REFERENCES `team` (`team_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matchplay`
--

LOCK TABLES `matchplay` WRITE;
/*!40000 ALTER TABLE `matchplay` DISABLE KEYS */;
INSERT INTO `matchplay` VALUES (1,'0-0','Butarque',1,11,1),(2,'0-0','Mestalla',2,19,10),(3,'0-0','Balaídos',3,5,16),(4,'0-0','Ramón Sánchez Pizjuán',4,17,8),(5,'0-0','Camp Nou',5,4,14),(6,'0-0','Riazor',6,6,15),(7,'0-0','La Rosaleda',7,12,7),(8,'1-0','Anoeta',7,16,5),(9,'0-4','Ipurua',6,7,4),(10,'3-1','RCDE Stadium',5,8,9),(11,'2-1','Santiago Bernabéu',4,15,12),(12,'2-2','Mendizorrotza',3,1,11),(13,'0-2','Estadio de la Cerámica',2,20,19),(14,'1-1','Gran Canaria',1,10,6);
/*!40000 ALTER TABLE `matchplay` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `player`
--

DROP TABLE IF EXISTS `player`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `player` (
  `player_id` int(8) NOT NULL AUTO_INCREMENT,
  `player_name` varchar(30) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `weight` int(4) NOT NULL,
  `height` int(4) NOT NULL,
  `date_of_birth` date NOT NULL,
  `player_position` varchar(30) NOT NULL,
  `team_id` int(8) NOT NULL,
  PRIMARY KEY (`player_id`),
  KEY `fk_player` (`team_id`),
  CONSTRAINT `fk_player` FOREIGN KEY (`team_id`) REFERENCES `team` (`team_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `player`
--

LOCK TABLES `player` WRITE;
/*!40000 ALTER TABLE `player` DISABLE KEYS */;
INSERT INTO `player` VALUES (1,'Marc-André ter Stegen','German',85,187,'1992-04-30','Goalkeeper',4),(2,'Gerard Piqué','Spanish',85,194,'1987-02-02','Defender',4),(3,'Ivan Rakitic','Croatian',78,184,'1988-03-10','Midfielder',4),(4,'Sergio Busquets','Spanish',76,189,'1988-07-16','Midfielder',4),(5,'Denis Suárez','Spanish',69,176,'1994-01-06','Midfielder',4),(6,'Arda Turan','Turkish',76,175,'1987-01-30','Midfielder',4),(7,'Andrés Iniesta','Spanish',68,171,'1984-05-11','Midfielder',4),(8,'Luis Suárez','Uruguayan',86,182,'1987-01-24','Forward',4),(9,'Lionel Messi','Argentine',72,170,'1987-06-24','Forward',4),(10,'Neymar Júnior','Brazilian',68,175,'1992-02-05','Forward',4),(11,'Rafael Alcántara','Brazilian',71,174,'1993-02-12','Midfielder',4),(12,'Jasper Cillessen','Dutch',83,185,'1989-04-22','Goalkeeper',4),(13,'Javier Mascherano','Argentine',73,174,'1984-06-08','Defender',4),(14,'Paco Alcácer','Spanish',71,175,'1993-08-30','Forward',4),(15,'Jordi Alba','Spanish',68,170,'1989-03-21','Defender',4),(16,'Lucas Digne','French',74,178,'1993-07-20','Defender',4),(17,'Sergi Roberto','Spanish',68,178,'1992-02-07','Midfielder',4),(18,'André Gomes','Portuguese',84,188,'1993-07-30','Midfielder',4),(19,'Aleix Vidal','Spanish',70,177,'1989-08-21','Midfielder',4),(20,'Samuel Umtiti','French',75,182,'1993-11-14','Defender',4),(21,'Gerard Deulofeu','Spanish',74,173,'1994-03-13','Forward',4),(22,'Nélson Semedo','Portuguese',67,177,'1993-11-16','Defender',4),(23,'Marlon Santos','Brazilian',80,182,'1995-09-07','Defender',4),(24,'Thomas Vermaelen','Belgian',80,183,'1985-11-14','Defender',4),(25,'Keylor Navas','Costa Rican',78,185,'1986-12-15','Goalkeeper',15),(26,'Kiko Casilla','Spanish',84,191,'1986-10-02','Goalkeeper',15),(27,'Rubén Yáñez','Spanish',80,188,'1993-10-12','Goalkeeper',15),(28,'Daniel Carvajal','Spanish',73,173,'1992-01-11','Defender',15),(29,'Jesús Vallejo','Spanish',74,183,'1997-01-05','Defender',15),(30,'Sergio Ramos','Spanish',75,183,'1986-03-30','Defender',15),(31,'Raphaël Varane','French',78,191,'1993-04-25','Defender',15),(32,'Nacho Fernández','Spanish',75,179,'1990-01-18','Defender',15),(33,'Marcelo Vieira','Brazilian',75,174,'1988-05-12','Defender',15),(34,'Theo Hernández','French',69,184,'1997-10-16','Defender',15),(35,'Toni Kroos','German',78,182,'1990-01-04','Midfielder',15),(36,'Luka Modric','Croatian',65,174,'1985-09-09','Midfielder',15),(37,'Carlos Casemiro','Brazilian',80,184,'1992-02-23','Midfielder',15),(38,'Mateo Kovacic','Croatian',77,178,'1994-05-06','Midfielder',15),(39,'Marcos Llorente','Spanish',72,182,'1995-01-30','Midfielder',15),(40,'Marco Asencio','Spanish',75,180,'1996-01-21','Midfielder',15),(41,'Isco Alarcón','Spanish',74,176,'1992-04-21','Midfielder',15),(42,'Daniel Ceballos','Spanish',74,176,'1996-08-07','Midfielder',15),(43,'Cristiano Ronaldo','Portugues',80,185,'1985-02-05','Forward',15),(44,'Karim Benzema','French',79,187,'1987-12-19','Forward',15),(45,'Gareth Bale','Welsh',74,183,'1989-07-16','Forward',15),(46,'Lucas Vázquez','Spanish',70,173,'1991-07-01','Forward',15),(47,'Borja Mayoral','Spanish',68,181,'1997-04-05','Forward',15);
/*!40000 ALTER TABLE `player` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `player_stats`
--

DROP TABLE IF EXISTS `player_stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `player_stats` (
  `player_id` int(8) NOT NULL,
  `p_season` varchar(10) NOT NULL,
  `apps` int(4) NOT NULL,
  `goals` int(4) NOT NULL,
  `assists` int(4) NOT NULL,
  `own_goals` int(4) NOT NULL,
  `yellow_card` int(4) NOT NULL,
  `red_card` int(4) NOT NULL,
  PRIMARY KEY (`player_id`,`p_season`),
  CONSTRAINT `fk_player_stats` FOREIGN KEY (`player_id`) REFERENCES `player` (`player_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `player_stats`
--

LOCK TABLES `player_stats` WRITE;
/*!40000 ALTER TABLE `player_stats` DISABLE KEYS */;
INSERT INTO `player_stats` VALUES (9,'2012/13',59,75,18,0,2,0),(9,'2013/14',50,46,13,0,3,0),(9,'2014/15',66,65,29,0,6,0),(9,'2015/16',60,49,28,0,6,0),(9,'2016/17',57,59,21,0,10,0),(43,'2012/13',68,62,14,1,16,1),(43,'2013/14',60,65,15,0,10,1),(43,'2014/15',56,61,22,0,6,1),(43,'2015/16',58,63,16,0,4,0),(43,'2016/17',50,48,14,0,6,0);
/*!40000 ALTER TABLE `player_stats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `point_table`
--

DROP TABLE IF EXISTS `point_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `point_table` (
  `team_id` int(8) NOT NULL,
  `match_played` int(8) NOT NULL,
  `wins` int(8) NOT NULL,
  `draws` int(8) NOT NULL,
  `losses` int(8) NOT NULL,
  `points` int(8) NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `point_table`
--

LOCK TABLES `point_table` WRITE;
/*!40000 ALTER TABLE `point_table` DISABLE KEYS */;
INSERT INTO `point_table` VALUES (1,38,14,13,11,55),(2,38,19,6,13,63),(3,38,23,9,6,78),(4,38,28,6,4,90),(5,38,13,6,19,45),(6,38,8,12,18,36),(7,38,15,9,14,54),(8,38,15,11,12,56),(9,38,4,8,26,20),(10,38,10,9,19,39),(11,38,8,11,19,35),(12,38,12,10,16,46),(13,38,4,10,24,22),(14,38,10,9,19,39),(15,38,29,6,3,93),(16,38,19,7,12,64),(17,38,21,9,8,72),(18,38,7,10,21,31),(19,38,13,7,18,46),(20,38,19,10,9,67);
/*!40000 ALTER TABLE `point_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `referee`
--

DROP TABLE IF EXISTS `referee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `referee` (
  `ref_id` int(8) NOT NULL AUTO_INCREMENT,
  `ref_name` varchar(30) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  PRIMARY KEY (`ref_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `referee`
--

LOCK TABLES `referee` WRITE;
/*!40000 ALTER TABLE `referee` DISABLE KEYS */;
INSERT INTO `referee` VALUES (1,'Jesús Gil Manzano','Spanish'),(2,'Alberto Undiano Mallenco','Spanish'),(3,'Carlos Clos Gómez','Spanish'),(4,'Antonio Mateu Lahoz','Spanish'),(5,'David Fernández Borbalán','Spanish'),(6,'Carlos Velasco Carballo','Spanish'),(7,'César Muñiz Fernández','Spanish');
/*!40000 ALTER TABLE `referee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedules`
--

DROP TABLE IF EXISTS `schedules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schedules` (
  `match_id` int(11) NOT NULL,
  `time_slot_id` char(1) NOT NULL,
  `play_date` date NOT NULL,
  PRIMARY KEY (`match_id`,`time_slot_id`),
  KEY `fk_schedules_time_slot` (`time_slot_id`),
  CONSTRAINT `fk_schedules_maychplay` FOREIGN KEY (`match_id`) REFERENCES `matchplay` (`match_id`),
  CONSTRAINT `fk_schedules_time_slot` FOREIGN KEY (`time_slot_id`) REFERENCES `time_slot` (`time_slot_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedules`
--

LOCK TABLES `schedules` WRITE;
/*!40000 ALTER TABLE `schedules` DISABLE KEYS */;
INSERT INTO `schedules` VALUES (1,'A','2017-08-18'),(2,'A','2017-08-18'),(3,'C','2017-08-20'),(4,'B','2017-08-20'),(5,'K','2017-08-20'),(6,'J','2017-08-20'),(7,'I','2017-08-21'),(8,'E','2017-05-18'),(9,'F','2017-05-20'),(10,'G','2017-05-20'),(11,'D','2017-05-20'),(12,'H','2017-05-20'),(13,'H','2017-05-20'),(14,'C','2017-09-28'),(14,'H','2017-05-20');
/*!40000 ALTER TABLE `schedules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stadium`
--

DROP TABLE IF EXISTS `stadium`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stadium` (
  `stadium_name` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `capacity` int(8) NOT NULL,
  PRIMARY KEY (`stadium_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stadium`
--

LOCK TABLES `stadium` WRITE;
/*!40000 ALTER TABLE `stadium` DISABLE KEYS */;
INSERT INTO `stadium` VALUES ('Anoeta','San Sebastián',32000),('Balaídos','Vigo',29000),('Benito Villamarín','Seville',51700),('Butarque','Leganés',10922),('Camp Nou','Barcelona',99354),('El Molinón','Gijón',29029),('El Sadar','Pamplona',18761),('Estadio de la Cerámica','Villarreal',24890),('Gran Canaria','Las Palmas',33111),('Ipurua','Eibar',7083),('La Rosaleda','Málaga',30044),('Mendizorrotza','Vitoria-Gasteiz',19840),('Mestalla','Valencia',55000),('Nuevo Los Cármenes','Granada',22094),('Ramón Sánchez Pizjuán','Seville',42714),('RCDE Stadium','Barcelona',40500),('Riazor','A Coruña',32912),('San Mamés','Bilbao',53289),('Santiago Bernabéu','Madrid',85454),('Vicente Calderón','Madrid',54907);
/*!40000 ALTER TABLE `stadium` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team`
--

DROP TABLE IF EXISTS `team`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team` (
  `team_id` int(8) NOT NULL AUTO_INCREMENT,
  `team_name` varchar(30) NOT NULL,
  `coach_id` int(8) NOT NULL,
  `stadium_name` varchar(30) NOT NULL,
  PRIMARY KEY (`team_id`,`team_name`),
  KEY `fk_team_coach` (`coach_id`),
  KEY `fk_team_stadium` (`stadium_name`),
  CONSTRAINT `fk_team_coach` FOREIGN KEY (`coach_id`) REFERENCES `coach` (`coach_id`),
  CONSTRAINT `fk_team_stadium` FOREIGN KEY (`stadium_name`) REFERENCES `stadium` (`stadium_name`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team`
--

LOCK TABLES `team` WRITE;
/*!40000 ALTER TABLE `team` DISABLE KEYS */;
INSERT INTO `team` VALUES (1,'Alavés',1,'Mendizorrotza'),(2,'Athletic Bilbao',2,'San Mamés'),(3,'Atlético Madrid',3,'Vicente Calderón'),(4,'Barcelona',4,'Camp Nou'),(5,'Celta Vigo',5,'Balaídos'),(6,'Deportivo La Coruña',6,'Riazor'),(7,'Eibar',7,'Ipurua'),(8,'Espanyol',8,'RCDE Stadium'),(9,'Granada',9,'Nuevo Los Cármenes'),(10,'Las Palmas',10,'Gran Canaria'),(11,'Leganés',11,'Butarque'),(12,'Málaga',12,'La Rosaleda'),(13,'Osasuna',13,'El Sadar'),(14,'Real Betis',14,'Benito Villamarín'),(15,'Real Madrid',15,'Santiago Bernabéu'),(16,'Real Sociedad',16,'Anoeta'),(17,'Sevilla',17,'Ramón Sánchez Pizjuán'),(18,'Sporting Gijón',18,'El Molinón'),(19,'Valencia',19,'Mestalla'),(20,'Villarreal',20,'Estadio de la Cerámica');
/*!40000 ALTER TABLE `team` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `team_stats`
--

DROP TABLE IF EXISTS `team_stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `team_stats` (
  `team_id` int(8) NOT NULL,
  `season` varchar(10) NOT NULL,
  `position` varchar(30) NOT NULL,
  PRIMARY KEY (`team_id`,`season`),
  CONSTRAINT `fk_team_stats` FOREIGN KEY (`team_id`) REFERENCES `team` (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `team_stats`
--

LOCK TABLES `team_stats` WRITE;
/*!40000 ALTER TABLE `team_stats` DISABLE KEYS */;
INSERT INTO `team_stats` VALUES (1,'2000/01','10th'),(1,'2001/02','7th'),(1,'2002/03','19th'),(1,'2005/06','18th'),(1,'2016/17','9th'),(2,'2012/13','12th'),(2,'2013/14','4th'),(2,'2014/15','7th'),(2,'2015/16','5th'),(2,'2016/17','7th'),(3,'2012/13','3rd'),(3,'2013/14','1st'),(3,'2014/15','3rd'),(3,'2015/16','3rd'),(3,'2016/17','3rd'),(4,'2012/13','1st'),(4,'2013/14','2nd'),(4,'2014/15','1st'),(4,'2015/16','1st'),(4,'2016/17','2nd'),(5,'2012/13','17th'),(5,'2013/14','9th'),(5,'2014/15','8th'),(5,'2015/16','6th'),(5,'2016/17','13th'),(6,'2010/11','18th'),(6,'2012/13','19th'),(6,'2014/15','16th'),(6,'2015/16','15th'),(6,'2016/17','16th'),(7,'2014/15','18th'),(7,'2015/16','14th'),(7,'2016/17','10th'),(8,'2012/13','13th'),(8,'2013/14','14th'),(8,'2014/15','10th'),(8,'2015/16','14th'),(8,'2016/17','8th'),(9,'2012/13','15th'),(9,'2013/14','15th'),(9,'2014/15','17th'),(9,'2015/16','16th'),(9,'2016/17','20th'),(10,'1987/88','20th'),(10,'2000/01','11th'),(10,'2001/02','18th'),(10,'2015/16','11th'),(10,'2016/17','14th'),(11,'2016/17','17th'),(12,'2012/13','6th'),(12,'2013/14','11th'),(12,'2014/15','9th'),(12,'2015/16','8th'),(12,'2016/17','11th'),(13,'2010/11','9th'),(13,'2011/12','7th'),(13,'2012/13','16th'),(13,'2013/14','18th'),(13,'2016/17','20th'),(14,'2011/12','13th'),(14,'2012/13','7th'),(14,'2013/14','20th'),(14,'2015/16','10th'),(14,'2016/17','15'),(15,'2012/13','2nd'),(15,'2013/14','3rd'),(15,'2014/15','2nd'),(15,'2015/16','2nd'),(15,'2016/17','1st'),(16,'2012/13','15th'),(16,'2013/14','12th'),(16,'2014/15','4th'),(16,'2015/16','7th'),(16,'2016/17','12th'),(17,'2012/13','9th'),(17,'2013/14','5th'),(17,'2014/15','5th'),(17,'2015/16','7th'),(17,'2016/17','4th'),(18,'2009/10','15th'),(18,'2010/11','10th'),(18,'2011/12','19th'),(18,'2015/16','17th'),(18,'2016/17','18th'),(19,'2012/13','5th'),(19,'2013/14','8th'),(19,'2014/15','4th'),(19,'2015/16','12th'),(19,'2016/17','12th'),(20,'2011/12','18th'),(20,'2013/14','6th'),(20,'2014/15','6th'),(20,'2015/16','4th'),(20,'2016/17','5th');
/*!40000 ALTER TABLE `team_stats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `time_slot`
--

DROP TABLE IF EXISTS `time_slot`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `time_slot` (
  `time_slot_id` char(1) NOT NULL,
  `start_time` time NOT NULL,
  PRIMARY KEY (`time_slot_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `time_slot`
--

LOCK TABLES `time_slot` WRITE;
/*!40000 ALTER TABLE `time_slot` DISABLE KEYS */;
INSERT INTO `time_slot` VALUES ('A','16:00:00'),('B','17:15:00'),('C','19:15:00'),('D','21:15:00'),('E','21:00:00'),('F','17:30:00'),('G','19:45:00'),('H','12:00:00'),('I','15:45:00'),('J','16:00:00'),('K','19:00:00');
/*!40000 ALTER TABLE `time_slot` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_feedback`
--

DROP TABLE IF EXISTS `user_feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_feedback` (
  `feedback_id` int(8) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `user_msg` text NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_feedback`
--

LOCK TABLES `user_feedback` WRITE;
/*!40000 ALTER TABLE `user_feedback` DISABLE KEYS */;
INSERT INTO `user_feedback` VALUES (1,'Sami','Keep it Up'),(2,'Fahim','Good Work!');
/*!40000 ALTER TABLE `user_feedback` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-07 14:46:51
