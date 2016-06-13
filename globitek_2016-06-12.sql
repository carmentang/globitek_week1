# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.01 (MySQL 5.7.12-0ubuntu1)
# Database: globitek
# Generation Time: 2016-06-13 03:18:49 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table countries
# ------------------------------------------------------------

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;

INSERT INTO `countries` (`id`, `name`)
VALUES
	(1,'United States'),
	(2,'Canada');

/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table salespeople
# ------------------------------------------------------------

DROP TABLE IF EXISTS `salespeople`;

CREATE TABLE `salespeople` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `last_name` varchar(9) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(13) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(26) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `salespeople` WRITE;
/*!40000 ALTER TABLE `salespeople` DISABLE KEYS */;

INSERT INTO `salespeople` (`id`, `first_name`, `last_name`, `phone`, `email`)
VALUES
	(1,' Daron',' Burke',' 555-925-3685',' dburke@salesperson.com'),
	(2,' Sherry',' Trevino',' 555-435-1036',' strevino@salesperson.com'),
	(3,' Irene',' Boling',' 555-736-2301',' iboling@salesperson.com'),
	(4,' Robert',' Hamilton',' 555-866-6131',' rhamilton@salesperson.com'),
	(5,' Ken',' Barker',' 555-352-9654',' kbarker@salesperson.com'),
	(6,' Elizabeth',' Olson',' 555-532-3209',' eolson@salesperson.com'),
	(7,' Samuel',' Hunter',' 555-682-7543',' shunter@salesperson.com'),
	(8,' Kim',' Stanley',' 555-302-7805',' kstanley@salesperson.com'),
	(9,' Barbara',' Hinckley',' 555-437-1355',' bhinckley@salesperson.com');

/*!40000 ALTER TABLE `salespeople` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table salespeople_territories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `salespeople_territories`;

CREATE TABLE `salespeople_territories` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `salespeople_ids` varchar(256) DEFAULT NULL,
  `territories_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `salespeople_territories` WRITE;
/*!40000 ALTER TABLE `salespeople_territories` DISABLE KEYS */;

INSERT INTO `salespeople_territories` (`id`, `salespeople_ids`, `territories_id`)
VALUES
	(1,'1',1),
	(2,'4',2),
	(3,'3',3),
	(4,'6',4),
	(5,'4',5),
	(6,'2',6),
	(7,'3',7),
	(8,'9',8),
	(9,'9',9),
	(10,'1',10),
	(11,'1',11),
	(12,'3',12),
	(13,'3',13),
	(14,'2',14),
	(15,'5',15),
	(16,'7',16),
	(17,'5',17),
	(18,'8',18),
	(19,'7',19),
	(20,'6',20),
	(21,'9',21),
	(22,'9',22),
	(23,'9',23),
	(24,'7',24),
	(25,'5',25),
	(26,'1',26),
	(27,'1',27),
	(28,'5',28),
	(29,'3',29),
	(30,'8',30),
	(31,'2',31),
	(32,'3',32),
	(33,'9',33),
	(34,'9',34),
	(35,'2',35),
	(36,'3',36),
	(37,'2',37),
	(38,'9',38),
	(39,'1',39),
	(40,'8',40),
	(41,'7',41),
	(42,'4',43),
	(43,'7',44),
	(44,'2',45),
	(45,'9',46),
	(46,'1',47),
	(47,'8',48),
	(48,'1',49),
	(49,'6',50),
	(50,'3',51),
	(51,'9',52),
	(52,'2',53),
	(53,'1',54),
	(54,'4',55),
	(55,'7',56),
	(56,'5',57),
	(57,'3',58),
	(58,'6',42),
	(59,'3',59),
	(60,'1',60),
	(61,'2',61),
	(62,'9',62),
	(63,'7',63),
	(64,'2',64),
	(65,'8',65),
	(66,'3',66),
	(67,'1',67),
	(68,'4',68),
	(69,'6',69),
	(70,'5',70),
	(71,'4',71),
	(72,'9',37),
	(73,'7',71);

/*!40000 ALTER TABLE `salespeople_territories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table states
# ------------------------------------------------------------

DROP TABLE IF EXISTS `states`;

CREATE TABLE `states` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `code` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `country_id` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;

INSERT INTO `states` (`id`, `name`, `code`, `country_id`)
VALUES
	(1,'Alabama','AL',1),
	(2,'Alaska','AK',1),
	(3,'Arizona','AZ',1),
	(4,'Arkansas','AR',1),
	(5,'California','CA',1),
	(6,'Colorado','CO',1),
	(7,'Connecticut','CT',1),
	(8,'Delaware','DE',1),
	(9,'Florida','FL',1),
	(10,'Georgia','GA',1),
	(11,'Hawaii','HI',1),
	(12,'Idaho','ID',1),
	(13,'Illinois','IL',1),
	(14,'Indiana','IN',1),
	(15,'Iowa','IA',1),
	(16,'Kansas','KS',1),
	(17,'Kentucky','KY',1),
	(18,'Louisiana','LA',1),
	(19,'Maine','ME',1),
	(20,'Maryland','MD',1),
	(21,'Massachusetts','MA',1),
	(22,'Michigan','MI',1),
	(23,'Minnesota','MN',1),
	(24,'Mississippi','MS',1),
	(25,'Missouri','MO',1),
	(26,'Montana','MT',1),
	(27,'Nebraska','NE',1),
	(28,'Nevada','NV',1),
	(29,'New Hampshire','NH',1),
	(30,'New Jersey','NJ',1),
	(31,'New Mexico','NM',1),
	(32,'New York','NY',1),
	(33,'North Carolina','NC',1),
	(34,'North Dakota','ND',1),
	(35,'Ohio','OH',1),
	(36,'Oklahoma','OK',1),
	(37,'Oregon','OR',1),
	(38,'Pennsylvania','PA',1),
	(39,'Rhode Island','RI',1),
	(40,'South Carolina','SC',1),
	(41,'South Dakota','SD',1),
	(42,'Tennessee','TN',1),
	(43,'Texas','TX',1),
	(44,'Utah','UT',1),
	(45,'Vermont','VT',1),
	(46,'Virginia','VA',1),
	(47,'Washington','WA',1),
	(48,'West Virginia','WV',1),
	(49,'Wisconsin','WI',1),
	(50,'Wyoming','WY',1),
	(51,'Ontario','ON',2),
	(52,'Quebec','QC',2),
	(53,'Nova Scotia','NS',2),
	(54,'New Brunswick','NB',2),
	(55,'Manitoba','MB',2),
	(56,'British Columbia','BC',2),
	(57,'Prince Edward Island','PE',2),
	(58,'Saskatchewan','SK',2),
	(59,'Alberta','AB',2),
	(60,'Newfoundland and Labrador','NL',2),
	(61,'Northwest Territories','NT',2),
	(62,'Yukon','YT',2),
	(63,'Nunavut','NU',2);

/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table territories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `territories`;

CREATE TABLE `territories` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(256) CHARACTER SET utf8 DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `salespeople_ids` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `territories` WRITE;
/*!40000 ALTER TABLE `territories` DISABLE KEYS */;

INSERT INTO `territories` (`id`, `name`, `state_id`, `salespeople_ids`)
VALUES
	(1,'Alabama',1,'[1]'),
	(2,'Alaska',2,'[4]'),
	(3,'Arizona',3,'[3]'),
	(4,'Arkansas',4,'[6]'),
	(5,'Northern California',5,'[4]'),
	(6,'Southern California',5,'[2]'),
	(7,'Colorado',6,'[3]'),
	(8,'Connecticut',7,'[9]'),
	(9,'Delaware',8,'[9]'),
	(10,'Florida',9,'[1]'),
	(11,'Georgia',10,'[1]'),
	(12,'Hawaii',11,'[3]'),
	(13,'Idaho',12,'[3]'),
	(14,'Chicago Metro',13,'[2]'),
	(15,'Outside Chicago',13,'[5]'),
	(16,'Indiana',14,'[7]'),
	(17,'Iowa',15,'[5]'),
	(18,'Kansas',16,'[8]'),
	(19,'Kentucky',17,'[7]'),
	(20,'Louisiana',18,'[6]'),
	(21,'Maine',19,'[9]'),
	(22,'Maryland',20,'[9]'),
	(23,'Massachusetts',21,'[9]'),
	(24,'Michigan',22,'[7]'),
	(25,'Minnesota',23,'[5]'),
	(26,'Mississippi',24,'[1]'),
	(27,'St. Louis Area',25,'[1]'),
	(28,'Kansas City Area',25,'[5]'),
	(29,'Montana',26,'[3]'),
	(30,'Nebraska',27,'[8]'),
	(31,'Las Vegas',28,'[2]'),
	(32,'Outside Las Vegas',28,'[3]'),
	(33,'New Hampshire ',29,'[9]'),
	(34,'Northern New Jersey',30,'[9]'),
	(35,'Southern New Jersey',30,'[2]'),
	(36,'New Mexico',31,'[3]'),
	(37,'New York City',32,'[2, 9]'),
	(38,'Outside New York City',32,'[9]'),
	(39,'North Carolina',33,'[1]'),
	(40,'North Dakota',34,'[8]'),
	(41,'Ohio',35,'[7]'),
	(43,'Oregon',37,'[4]'),
	(44,'Western Pennsylvania',38,'[7]'),
	(45,'Eastern Pennsylvania',38,'[2]'),
	(46,'Rhode Island',39,'[9]'),
	(47,'South Carolina',40,'[1]'),
	(48,'South Dakota',41,'[8]'),
	(49,'Tennessee',42,'[1]'),
	(50,'Texas',43,'[6]'),
	(51,'Utah',44,'[3]'),
	(52,'Vermont',45,'[9]'),
	(53,'Northern Virginia',46,'[2]'),
	(54,'Southern Virginia',46,'[1]'),
	(55,'Washington',47,'[4]'),
	(56,'West Virginia',48,'[7]'),
	(57,'Wisconsin',49,'[5]'),
	(58,'Wyoming',50,'[3]'),
	(42,'Oklahoma',36,'[6]'),
	(59,'Ontario',51,'[3]'),
	(60,'Quebec',52,'[1]'),
	(61,'Nova Scotia',53,'[2]'),
	(62,'New Brunswick',54,'[9]'),
	(63,'Manitoba',55,'[7]'),
	(64,'British Columbia',56,'[2]'),
	(65,'Prince Edward Island',57,'[8]'),
	(66,'Saskatchewan',58,'[3]'),
	(67,'Alberta',59,'[1]'),
	(68,'Newfoundland and Labrador',60,'[4]'),
	(69,'Northwest Territories',61,'[6]'),
	(70,'Yukon',62,'[5]'),
	(71,'Nunavut',63,'[4, 7]');

/*!40000 ALTER TABLE `territories` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
