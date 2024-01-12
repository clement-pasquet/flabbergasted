-- MariaDB dump 10.19-11.2.2-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: mainDatabase
-- ------------------------------------------------------
-- Server version	11.2.2-MariaDB

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
-- Table structure for table `achat`
--

DROP TABLE IF EXISTS `achat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `achat` (
  `id_user` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  PRIMARY KEY (`id_user`,`id_film`),
  KEY `id_film` (`id_film`),
  CONSTRAINT `achat_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_user`),
  CONSTRAINT `achat_ibfk_2` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `achat`
--

LOCK TABLES `achat` WRITE;
/*!40000 ALTER TABLE `achat` DISABLE KEYS */;
INSERT INTO `achat` VALUES
(1,2),
(1,4),
(2,4),
(1,5),
(2,5),
(2,6),
(2,7),
(1,11),
(2,11),
(1,12),
(2,13),
(1,15),
(2,15),
(1,16),
(1,17),
(2,17),
(1,18),
(2,18),
(1,19),
(2,19);
/*!40000 ALTER TABLE `achat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `film`
--

DROP TABLE IF EXISTS `film`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `film` (
  `id_film` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `date_release` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `prix` int(11) DEFAULT NULL,
  `genre` varchar(255) NOT NULL,
  `realisateur` varchar(255) NOT NULL,
  `synopsis` text NOT NULL,
  `duree` int(11) DEFAULT NULL,
  `pays` varchar(64) DEFAULT NULL,
  `est_serie` tinyint(1) NOT NULL DEFAULT 0,
  `lien_trailer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_film`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `film`
--

LOCK TABLES `film` WRITE;
/*!40000 ALTER TABLE `film` DISABLE KEYS */;
INSERT INTO `film` VALUES
(1,'The Matrix','31/03/1999','matrix.jpg',10,'Science-fiction','Lana Wachowski, Lilly Wachowski','Un pirate informatique découvre la vérité sur sa réalité simulée et sa lutte contre ses oppresseurs.',136,'États-Unis',0,'8xx91zoASLY'),
(2,'Inception','16/07/2010','inception.jpg',12,'Science-fiction','Christopher Nolan','Un voleur d espionnage industriel utilise l architecture des rêves pour voler des secrets précieux.',148,'États-Unis',0,'HcoZbHBDHQA'),
(4,'Le Parrain','24/03/1972','le_parrain.jpg',8,'Drame','Francis Ford Coppola','La saga d une famille mafieuse italo-américaine dirigée par Don Vito Corleone.',175,'États-Unis',0,'bmtuIhesQWA'),
(5,'Forrest Gump','06/07/1994','forrest_gump.jpg',9,'Drame','Robert Zemeckis','Les péripéties d un homme simple d esprit traversant des moments clés de l histoire américaine.',142,'États-Unis',0,'bLvqoHBptjg'),
(6,'Pulp Fiction','21/10/1994','pulp_fiction.jpg',11,'Drame','Quentin Tarantino','Des histoires entrelacées de gangsters, de boxeurs, de tueurs à gages et d une mallette mystérieuse.',154,'États-Unis',0,'_H9ZgYyqZRc'),
(7,'Interstellar','07/11/2014','interstellar.jpg',13,'Science-fiction','Christopher Nolan','Des explorateurs spatiaux voyagent à travers un trou de ver pour trouver un nouveau foyer pour l humanité.',169,'États-Unis',0,'zSWdZVtXT7E'),
(8,'Jurassic Park','11/06/1993','jurassic_park.jpg',12,'Aventure','Steven Spielberg','Des scientifiques visitent un parc à thème rempli de dinosaures génétiquement recréés.',127,'États-Unis',0,'lc0UehYemQA'),
(9,'Les Évadés','10/11/1995','les_evades.jpg',10,'Drame','Frank Darabont','L histoire d une amitié entre deux prisonniers condamnés à perpétuité, basée sur un roman de Stephen King.',142,'États-Unis',0,'wux4Vwy3_x8'),
(10,'Le Seigneur des anneaux : La Communauté de l anneau','19/12/2001','seigneur_anneaux_1.jpg',15,'Aventure','Peter Jackson','Un jeune hobbit entreprend un voyage périlleux pour détruire un anneau maléfique.',178,'Nouvelle-Zélande, États-Unis',0,'vvx7m22GGtA'),
(11,'Avengers: Infinity War','25/04/2018','avengers_infinity_war.jpg',14,'Aventure','Anthony Russo, Joe Russo','Les super-héros de l univers Marvel affrontent le redoutable Thanos.',149,'États-Unis',0,'eIWs2IUr3Vs'),
(12,'Les Temps modernes','24/02/1936','temps_modernes.jpg',10,'Drame','Charlie Chaplin','Une comédie satirique mettant en scène les luttes de la vie moderne.',87,'États-Unis',0,'gWsU67J-qUc'),
(13,'Avatar','16/12/2009','avatar.jpg',13,'Science-fiction','James Cameron','Un marine paraplégique est envoyé sur Pandora dans un corps Avatar pour une mission.',162,'États-Unis',0,'MJ3Up7By5cw'),
(14,'Le Hobbit : Un voyage inattendu','12/12/2012','hobbit_voyage_inattendu.jpg',13,'Aventure','Peter Jackson','Bilbo Sacquet entame un voyage épique pour reprendre le royaume des nains dErebor.',169,'Nouvelle-Zélande, États-Unis',0,'tiy7peMH3g8'),
(15,'2001: lOdyssée de lespace','06/04/1968','2001_espace.jpg',10,'Science-fiction','Stanley Kubrick','Un voyage spatial épique découvrant un mystère lié à une intelligence artificielle.',149,'Royaume-Uni, États-Unis',0,'oR_e9y-bka0'),
(16,'Matrix Reloaded','16/05/2003','matrix_reloaded.jpg',12,'Science-fiction','Lana Wachowski, Lilly Wachowski','Suite de \"The Matrix\", explorant davantage la réalité simulée et la lutte contre les machines.',138,'États-Unis',0,'0ha2XYVC7_s'),
(17,'Alien, le huitième passager','09/09/1979','alien.jpg',10,'Science-fiction','Ridley Scott','L équipage d un vaisseau spatial est traqué par une créature extraterrestre mortelle.',117,'Royaume-Uni, États-Unis',0,'qFCMm6gJQe8'),
(18,'Indiana Jones : Les Aventuriers de l arche perdue','12/09/1981','indiana_jones_arche_perdue.jpg',10,'Aventure','Steven Spielberg','Indiana Jones part à la recherche de larche de lalliance avant les nazis.',115,'États-Unis',0,'JdKKkWHx8pQ'),
(19,'Le Labyrinthe de Pan','27/10/2006','labyrinthe_pan.jpg',10,'Drame','Guillermo del Toro','Dans lEspagne post-guerre civile, une jeune fille découvre un monde souterrain fantastique.',118,'Espagne, Mexique',0,'5KInH8C5PyU'),
(21,'Breaking Bad','20/01/2008','breaking_bad.jpg',10,'Drame','Vince Gilligan','Un professeur de chimie se tourne vers la production de méthamphétamine après avoir été diagnostiqué d un cancer.',NULL,'États-Unis',1,'Pev38s3xPgM'),
(22,'Game of Thrones','17/04/2011','game_of_thrones.jpg',10,'Drame','David Benioff, D. B. Weiss','Une série basée sur les romans de George R. R. Martin, se déroulant dans un monde fantastique rempli de complots et de guerres pour le pouvoir.',NULL,'États-Unis',1,'aAF12LNAeNI'),
(23,'Stranger Things','15/07/2016','stranger_things.jpg',10,'Science-fiction','Duffer Brothers','Des enfants enquêtent sur la disparition mystérieuse d un ami et découvrent un monde parallèle terrifiant.',NULL,'États-Unis',1,'l7nzodXfVsg'),
(24,'Shadow and Bone : La saga Grisha','23/04/2021','shadow_and_bone.jpg',10,'Aventure','Eric Heisserer','Dans un monde divisé par des ténèbres mortelles, une jeune cartographe découvre qu elle possède un pouvoir extraordinaire capable de sauver son pays.',NULL,'États-Unis',1,'x2PL-Sl4Z54'),
(25,'The Witcher','20/12/2019','the_witcher.jpg',10,'Aventure','Lauren Schmidt Hissrich','Un chasseur de monstres lutte pour trouver sa place dans un monde où les humains se révèlent souvent plus vicieux que les bêtes.',NULL,'États-Unis, Pologne',1,'bGFpSNKtLlc'),
(26,'The Mandalorian','12/11/2019','the_mandalorian.jpg',10,'Science-fiction','Jon Favreau','Les aventures d un chasseur de primes mandalorien dans les confins de la galaxie, loin de l autorité de la Nouvelle République.',NULL,'États-Unis',1,'3QJypub6Yag');
/*!40000 ALTER TABLE `film` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `serie`
--

DROP TABLE IF EXISTS `serie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serie` (
  `id_serie` int(11) NOT NULL,
  `episodes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_serie`),
  CONSTRAINT `serie_ibfk_1` FOREIGN KEY (`id_serie`) REFERENCES `film` (`id_film`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serie`
--

LOCK TABLES `serie` WRITE;
/*!40000 ALTER TABLE `serie` DISABLE KEYS */;
INSERT INTO `serie` VALUES
(21,'12'),
(22,'10'),
(23,'14'),
(24,'12'),
(25,'12'),
(26,'8');
/*!40000 ALTER TABLE `serie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilisateur` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'adherent',
  `username` varchar(255) DEFAULT NULL,
  `nom` varchar(64) NOT NULL,
  `prenom` varchar(64) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateur`
--

LOCK TABLES `utilisateur` WRITE;
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
INSERT INTO `utilisateur` VALUES
(1,'clement@pasquet.fr','password','admin','screeny','pasquet','clement'),
(2,'ju.bernier5@gmail.com','password','admin','ju','bernier','justine');
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-12 21:28:40
