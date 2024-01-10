-- MariaDB dump 10.19  Distrib 10.6.12-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: mainDatabase
-- ------------------------------------------------------
-- Server version	10.6.12-MariaDB-0ubuntu0.22.04.1

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
INSERT INTO `achat` VALUES (1,26),(1,27),(1,28),(1,29),(1,30),(1,31),(1,32),(1,33),(1,34),(1,35),(1,36),(1,37),(1,38),(1,39),(1,40),(2,11),(2,12),(2,13),(2,14),(2,15),(2,16),(2,17),(2,18),(2,19),(2,20),(2,21),(2,22),(2,23),(2,24),(2,25);
/*!40000 ALTER TABLE `achat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `film`
--

DROP TABLE IF EXISTS `film`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
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
  PRIMARY KEY (`id_film`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `film`
--

LOCK TABLES `film` WRITE;
/*!40000 ALTER TABLE `film` DISABLE KEYS */;
INSERT INTO `film` VALUES (1,'Les Étoiles Brillantes','15 janvier 2024','etoiles_brillantes.jpg',10,'Science-fiction','Alice Dupont','Dans un futur lointain une équipe de scientifiques découvre une nouvelle source d\'énergie dans l\'espace.',120,'France',0),(2,'L\'Odyssée Perdue','3 mars 2023','odyssee_perdue.jpg',12,'Aventure','Jean-Luc Moreau','Un explorateur part à la recherche d\'une ancienne cité perdue pleine de mystères et de dangers.',145,'États-Unis',0),(3,'Le Secret des Âges','22 mai 2025','secret_   ages.jpg',8,'Fantasy','Sophie Tremblay','Une quête épique commence lorsqu\'un jeune héritier découvre un secret ancestral menant à un pouvoir inimaginable.',110,'Canada',0),(4,'Au-delà des Limites','7 novembre 2022','au-dela_limites.jpg',15,'Action','Alexandre Martin','Des agents secrets tentent d\'arrêter un groupe terroriste avant qu\'ils ne déclenchent une catastrophe mondiale.',130,'Royaume-Uni',0),(5,'Rêves de Demain','18 avril 2024','reves_demain.jpg',11,'Drame','Sophie Leclerc','Une histoire émouvante sur la lutte d\'une jeune artiste pour réaliser ses rêves malgré les obstacles.',105,'France',0),(6,'La Dernière Frontière','9 septembre 2023','derniere_frontiere.jpg',14,'Science-fiction','Antoine Dubois','Des pionniers entreprennent un voyage intergalactique à la recherche d\'une nouvelle planète habitable.',155,'États-Unis',0),(7,'Les Chroniques de l\'Éclipse','5 juin 2025','chroniques_eclipse.jpg',9,'Fantasy','Marie Lefèvre','Un monde fantastique est menacé par une éclipse mystique  et seuls les élus peuvent sauver l\'avenir.',125,'Canada',0),(8,'Traque Virtuelle','12 décembre 2022','traque_virtuelle.jpg',13,'Action','Lucas Blanchard','Dans un univers virtuel un hacker tente de révéler les secrets cachés du système.',135,'Japon',0),(9,'La Symphonie des Âmes','28 juillet 2024','symphonie_ames.jpg',10,'Drame','Camille Rousseau','Une jeune prodige du violon fait face à des défis personnels tout en cherchant la perfection musicale.',100,'Allemagne',0),(10,'Enquête au Crépuscule','10 octobre 2023','enquete_crepuscule.jpg',16,'Suspense','Philippe Gagnon','Un détective chevronné se retrouve confronté à une série de meurtres énigmatiques.',140,'France',0),(11,'L\'Île des Merveilles','9 janvier 2025','ile_merveilles.jpg',12,'Aventure','Jeanne Lambert','Des explorateurs découvrent une île mystérieuse remplie de créatures extraordinaires et de trésors perdus.',150,'Espagne',0),(12,'Les Gardiens de l\'Univers','28 mars 2023','gardiens_univers.jpg',11,'Science-fiction','Théo Bernard','Un groupe d\'êtres extraterrestres protège l\'équilibre de l\'univers contre une force destructrice.',125,'États-Unis',0),(13,'Le Manuscrit Caché','17 juillet 2024','manuscrit_cache.jpg',9,'Fantasy','Julie Lecomte','Un livre ancien renferme des secrets magiques et une course contre la montre commence pour sauver un royaume en péril.',115,'France',0),(14,'Opération Tempête','5 novembre 2022','operation_tempete.jpg',13,'Action','Marc Dubois','Une équipe spéciale doit empêcher un groupe terroriste d\'utiliser une arme redoutable lors d\'une tempête cataclysmique.',130,'Royaume-Uni',0),(15,'Le Pianiste sans Nom','24 avril 2024','pianiste_sans_nom.jpg',10,'Drame','Émilie Morel','Un virtuose du piano anonyme inspire et transforme la vie des personnes qu\'il rencontre.',105,'Italie',0),(16,'Mystères du Temple Perdu','15 août 2023','mysteres_temple_perdu.jpg',14,'Aventure','Louis Martin','Une équipe d\'archéologues découvre un temple antique rempli d\'énigmes et de trésors anciens.',135,'Grèce',0),(17,'L\'Éveil des Titans','12 décembre 2024','eveil_titans.jpg',8,'Fantasy','Marc-Antoine Laroche','Des héros doivent empêcher l\'émergence de titans légendaires qui menacent d\'anéantir le monde.',120,'Royaume-Uni',0),(18,'Infiltration Virtuelle','7 mai 2023','infiltration_virtuelle.jpg',11,'Action','Nadia Durand','Une espionne virtuose infiltre un réseau informatique pour arrêter une organisation criminelle.',125,'Russie',0),(19,'La Ballade du Violoncelle','18 septembre 2025','ballade_violoncelle.jpg',9,'Drame','Antoine Girard','L\'histoire émouvante d\'un violoncelliste talentueux et de son instrument magique.',100,'Autriche',0),(20,'Énigme au Musée','8 novembre 2022','enigme_musee.jpg',12,'Suspense','Sophie Martin','Une conservatrice de musée enquête sur le vol d\'une œuvre d\'art précieuse déclenchant une série d\'événements mystérieux.',140,'France',0),(21,'Les Jardins de l\'Espoir','20 janvier 2024','jardins_espoir.jpg',10,'Science-fiction','Lucie Deschamps','Des scientifiques tentent de restaurer l\'écosystème terrestre après une catastrophe environnementale.',130,'Canada',0),(22,'Le Talisman des Rois','9 mars 2023','talisman_rois.jpg',15,'Fantasy','Pierre Lambert','Un jeune prince part à la recherche d\'un talisman légendaire pour sauver son royaume de la ruine.',145,'France',0),(23,'Mission Évasion','28 juin 2025','mission_evasion.jpg',13,'Action','Éric Leclerc','Un groupe d\'agents secrets doit s\'évader d\'une prison de haute sécurité pour arrêter une menace imminente.',120,'États-Unis',0),(24,'Les Contes du Crépuscule','4 décembre 2022','contes_crepuscule.jpg',11,'Fantasy','Sarah Bouchard','Un monde féerique est menacé par l\'obscurité et seuls des conteurs spéciaux peuvent sauver la lumière.',135,'Irlande',0),(25,'Le Violon Magique','15 octobre 2024','violon_magique.jpg',9,'Drame','Antoine Lavoie','Un violon exceptionnel détient des pouvoirs magiques et celui qui le joue peut accomplir des miracles.',105,'Allemagne',0),(26,'L\'Énigme de l\'Atlantide','9 septembre 2023','enigme_atlantide.jpg',14,'Aventure','Julien Durand','Une expédition marine découvre les ruines légendaires de l\'Atlantide mais des secrets dangereux sont révélés.',155,'Égypte',0),(27,'Renaissance Technologique','6 juillet 2024','renaissance_technologique.jpg',10,'Science-fiction','Isabelle Gagnon','Un groupe de génies technologiques révolutionne la société avec une invention révolutionnaire.',100,'Japon',0),(28,'Le Destin de l\'Épée','19 février 2023','destin_epee.jpg',16,'Fantasy','Marcelle Lévesque','Un guerrier légendaire doit affronter un tyran maléfique pour restaurer la paix dans son royaume.',140,'Espagne',0),(29,'Évasion Virtuelle','28 août 2022','evasion_virtuelle.jpg',12,'Action','Vincent Dubois','Des prisonniers sont coincés dans un monde virtuel et doivent s\'échapper pour retrouver la liberté.',125,'États-Unis',0),(30,'La Symphonie du Destin','21 novembre 2025','symphonie_destin.jpg',9,'Drame','Claire Martin','Une jeune compositrice trouve l\'inspiration au milieu de la tourmente et crée une symphonie émouvante.',100,'Royaume-Uni',0),(31,'Le Trésor des Rois','2 janvier 2024','tresor_rois.jpg',12,'Aventure','Gabriel Boucher','Une chasse au trésor ancestrale mène à des épreuves dangereuses pour atteindre une richesse cachée.',145,'France',0),(32,'La Prophétie Oubliée','14 avril 2023','prophetie_oubliee.jpg',8,'Fantasy','Chloé Girard','Une ancienne prophétie oubliée révèle un destin inattendu pour une jeune héroïne.',110,'Canada',0),(33,'Code Rouge','22 septembre 2025','code_rouge.jpg',13,'Action','Théo Lefebvre','Un virus informatique redoutable menace de détruire les réseaux mondiaux et une équipe de hackers doit l\'arrêter.',125,'Chine',0),(34,'Le Peintre de l\'Éclipse','9 novembre 2022','peintre_eclipse.jpg',10,'Drame','Marie Dubois','Un artiste peintre exprime son art au milieu d\'un événement astronomique rare mais des forces obscures menacent sa créativité.',105,'Italie',0),(35,'L\'Épée du Destin','16 janvier 2024','epee_destin.jpg',14,'Fantasy','Lucas Gérard','Une épée légendaire forge le destin d\'un jeune héritier dans une quête pour restaurer la paix dans les royaumes en guerre.',155,'Royaume-Uni',0),(36,'Renaissance Cérébrale','7 mars 2023','renaissance_cerebrale.jpg',11,'Science-fiction','Julia Blanchard','Des scientifiques explorent les frontières de la conscience humaine avec une technologie révolutionnaire.',135,'États-Unis',0),(37,'L\'Énigme de la Forêt Interdite','28 juin 2025','enigme_foret_interdite.jpg',9,'Aventure','Louis Lévesque','Des explorateurs partent à la recherche d\'un mystère caché au cœur d\'une forêt mystique.',120,'Canada',0),(38,'Réalité Parallèle','3 décembre 2022','realite_parallele.jpg',12,'Science-fiction','Sophie Laurent','Des voyageurs découvrent des réalités alternatives où chaque choix a des conséquences inattendues.',140,'Japon',0),(39,'Le Violoniste de Minuit','15 septembre 2024','violoniste_minuit.jpg',10,'Drame','Alexandre Lavoie','Un virtuose du violon joue des mélodies envoûtantes la nuit attirant l\'attention d\'une audience mystérieuse.',100,'Allemagne',0),(40,'Les Mondes Parallèles','10 mai 2026','mondes_paralleles.jpg',11,'Science-fiction','Éric Dubois','Cette série raconte une découverte scientifique ouvre la porte à des mondes parallèles, chacun avec ses propres défis et mystères.',120,'Canada',1),(41,'La Quête Infinie','6 septembre 2027','quete_infinie.jpg',13,'Aventure','Juliette Martin','Cette série raconte une quête épique à travers des royaumes fantastiques à la recherche d\'un artefact mystique aux pouvoirs infinis.',135,'France',1),(42,'Le Pouvoir de l Esprit','18 janvier 2028','pouvoir_esprit.jpg',10,'Fantasy','Lucas Tremblay','Cette série raconte l histoire que des individus découvrent qu\'ils ont des pouvoirs psychiques uniques et doivent apprendre à les maîtriser pour sauver le monde.',110,'États-Unis',1),(43,'La Révolution Virtuelle','4 avril 2029','revolution_virtuelle.jpg',12,'Action','Amélie Gérard','Cette série raconte  qu une révolution se produit dans un monde virtuel où la liberté et la justice sont remises en question.',125,'Japon',1),(44,'Les Harmonies Perdues','22 novembre 2030','harmonies_perdues.jpg',9,'Drame','Thomas Boucher','Cette série raconte la recherche de mélodies oubliées révèle des secrets du passé et influence le destin de ceux qui les découvrent.',100,'Allemagne',1);
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
INSERT INTO `serie` VALUES (39,'12'),(40,'10'),(41,'14'),(42,'1'),(43,'12'),(44,'8');
/*!40000 ALTER TABLE `serie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilisateur` (
  `id_user` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'adherent',
  `username` varchar(255) DEFAULT NULL,
  `nom` varchar(64) NOT NULL,
  `prenom` varchar(64) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateur`
--

LOCK TABLES `utilisateur` WRITE;
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
INSERT INTO `utilisateur` VALUES (1,'clement@pasquet.fr','password','admin','screeny','pasquet','clement'),(2,'ju.bernier5@gmail.com','password','admin','ju','bernier','justine');
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

-- Dump completed on 2024-01-10  9:50:22
