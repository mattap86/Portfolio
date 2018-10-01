# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.41)
# Database: portfolio
# Generation Time: 2018-10-01 08:50:28 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table about_me
# ------------------------------------------------------------

DROP TABLE IF EXISTS `about_me`;

CREATE TABLE `about_me` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bio` varchar(1000) NOT NULL DEFAULT '',
  `interests` varchar(1000) DEFAULT NULL,
  `qualifications` varchar(1000) DEFAULT NULL,
  `something_else` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `about_me` WRITE;
/*!40000 ALTER TABLE `about_me` DISABLE KEYS */;

INSERT INTO `about_me` (`id`, `bio`, `interests`, `qualifications`, `something_else`)
VALUES
	(1,'Having worked at the height of the hospitality industry for a good portion of my career, I took the life changing decision to step out of the ever fast-paced, often chaotic world of catering, and into the alien world of software/web development. The idea is to incorporate my vast knowledge of people and their needs with the functional possibilities of software development to create tools, innovated & designed by people\'s needs and everyday obstacles.','So to start with the usual, I\'m a keen runner, I love historical fiction novels, have an eclectic music taste, my preferred sports are pool, golf and tennis with a little cricket thrown in when the opportunity pops up. A major hobby (if you can call it that) is puzzling. Be it crosswords, logic or mathematics, there is generally one next to me wherever I am... Hopefully this will lend itself well to my desired future in software develpment.','Having left school part-way through my AS levels due to thinking £300 a week as a chef was a damn fine wage, my academic achievements are limited to an average spread of GCSEs. However, I have passed the WSET (Wine & Spirit Education Trust) lvl 2 course and have a personal license (retail of alcohol). A more pertinent qualification currently would be my Scrum Master Certification.','If I think of anything I\'ll let you know...');

/*!40000 ALTER TABLE `about_me` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table projects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `image_url` varchar(100) DEFAULT '',
  `url` varchar(200) DEFAULT NULL,
  `summary` varchar(300) DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;

INSERT INTO `projects` (`id`, `name`, `image_url`, `url`, `summary`, `deleted`)
VALUES
	(1,'pilotShop','pilotshop.png','file:///Users/academy/Desktop/PilotShop/pilotshop.html','OUR FIRST PROPER ATTEMPT AT A WEBSITE BUILD! CERTAINLY NOT A FINISHED ARTICLE BY ANY MEANS BUT FELT LIKE A REAL ACHIEVEMENT SO EARLY ON IN THE COURSE. LEARNT A LOT OF LESSONS...',1),
	(2,'projectTwo','comingsoon.png','file:///Users/academy/Desktop/Portfolio/new-project.html','COMING SOON...',1),
	(3,'projectThree','comingsoon.png','file:///Users/academy/Desktop/Portfolio/new-project.html','COMING SOON...',1);

/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
