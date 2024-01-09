-- Connexion MySQL :
sudo mysql -u root -p

USE mainDatabase;
-- Connexion MySQL :


-- Insertion utilisateur
INSERT INTO utilisateur (id_user, mail, password, status, username, nom, prenom)
VALUES (1, 'clement@pasquet.fr', 'password', 'admin', 'screeny', 'pasquet', 'clement'),
       (2, 'ju.bernier5@gmail.com', 'password', 'admin', 'ju', 'bernier', 'justine');


-- Insertion des achats
-- Achats pour l'utilisateur 1 (Clément Pasquet)
INSERT INTO achat (id_user, id_film) VALUES
(1, 40), (1, 39), (1, 38), (1, 37), (1, 36), -- Achats des 5 derniers films pour l'utilisateur 1
(1, 35), (1, 34), (1, 33), (1, 32), (1, 31), -- Ajoutez plus d'achats si nécessaire pour l'utilisateur 1
(1, 30), (1, 29), (1, 28), (1, 27), (1, 26);

-- Achats pour l'utilisateur 2 (Justine Bernier)
INSERT INTO achat (id_user, id_film) VALUES
(2, 25), (2, 24), (2, 23), (2, 22), (2, 21), -- Ajoutez plus d'achats si nécessaire pour l'utilisateur 2
(2, 20), (2, 19), (2, 18), (2, 17), (2, 16),
(2, 15), (2, 14), (2, 13), (2, 12), (2, 11);



-- Insertion des films
INSERT INTO film (id_film, titre, date, image, prix, genre, realisateur, synopsis, duree, pays)
VALUES
(1, 'Les Étoiles Brillantes', '15 janvier 2024', 'etoiles_brillantes.jpg', 10, 'Science-fiction', 'Alice Dupont', 'Dans un futur lointain une équipe de scientifiques découvre une nouvelle source d''énergie dans l''espace.', 120, 'France'),
(2, 'L''Odyssée Perdue', '3 mars 2023', 'odyssee_perdue.jpg', 12, 'Aventure', 'Jean-Luc Moreau', 'Un explorateur part à la recherche d''une ancienne cité perdue pleine de mystères et de dangers.', 145, 'États-Unis'),
(3, 'Le Secret des Âges', '22 mai 2025', 'secret_ages.jpg', 8, 'Fantasy', 'Sophie Tremblay', 'Une quête épique commence lorsqu''un jeune héritier découvre un secret ancestral menant à un pouvoir inimaginable.', 110, 'Canada'),
(4, 'Au-delà des Limites', '7 novembre 2022', 'au-dela_limites.jpg', 15, 'Action', 'Alexandre Martin', 'Des agents secrets tentent d''arrêter un groupe terroriste avant qu''ils ne déclenchent une catastrophe mondiale.', 130, 'Royaume-Uni'),
(5, 'Rêves de Demain', '18 avril 2024', 'reves_demain.jpg', 11, 'Drame', 'Sophie Leclerc', 'Une histoire émouvante sur la lutte d''une jeune artiste pour réaliser ses rêves malgré les obstacles.', 105, 'France'),
(6, 'La Dernière Frontière', '9 septembre 2023', 'derniere_frontiere.jpg', 14, 'Science-fiction', 'Antoine Dubois', 'Des pionniers entreprennent un voyage intergalactique à la recherche d''une nouvelle planète habitable.', 155, 'États-Unis'),
(7, 'Les Chroniques de l''Éclipse', '5 juin 2025', 'chroniques_eclipse.jpg', 9, 'Fantasy', 'Marie Lefèvre', 'Un monde fantastique est menacé par une éclipse mystique  et seuls les élus peuvent sauver l''avenir.', 125, 'Canada'),
(8, 'Traque Virtuelle', '12 décembre 2022', 'traque_virtuelle.jpg', 13, 'Action', 'Lucas Blanchard', 'Dans un univers virtuel un hacker tente de révéler les secrets cachés du système.', 135, 'Japon'),
(9, 'La Symphonie des Âmes', '28 juillet 2024', 'symphonie_ames.jpg', 10, 'Drame', 'Camille Rousseau', 'Une jeune prodige du violon fait face à des défis personnels tout en cherchant la perfection musicale.', 100, 'Allemagne'),
(10, 'Enquête au Crépuscule', '10 octobre 2023', 'enquete_crepuscule.jpg', 16, 'Suspense', 'Philippe Gagnon', 'Un détective chevronné se retrouve confronté à une série de meurtres énigmatiques.', 140, 'France'),
(11, 'L''Île des Merveilles', '9 janvier 2025', 'ile_merveilles.jpg', 12, 'Aventure', 'Jeanne Lambert', 'Des explorateurs découvrent une île mystérieuse remplie de créatures extraordinaires et de trésors perdus.', 150, 'Espagne'),
(12, 'Les Gardiens de l''Univers', '28 mars 2023', 'gardiens_univers.jpg', 11, 'Science-fiction', 'Théo Bernard', 'Un groupe d''êtres extraterrestres protège l''équilibre de l''univers contre une force destructrice.', 125, 'États-Unis'),
(13, 'Le Manuscrit Caché', '17 juillet 2024', 'manuscrit_cache.jpg', 9, 'Fantasy', 'Julie Lecomte', 'Un livre ancien renferme des secrets magiques et une course contre la montre commence pour sauver un royaume en péril.', 115, 'France'),
(14, 'Opération Tempête', '5 novembre 2022', 'operation_tempete.jpg', 13, 'Action', 'Marc Dubois', 'Une équipe spéciale doit empêcher un groupe terroriste d''utiliser une arme redoutable lors d''une tempête cataclysmique.', 130, 'Royaume-Uni'),
(15, 'Le Pianiste sans Nom', '24 avril 2024', 'pianiste_sans_nom.jpg', 10, 'Drame', 'Émilie Morel', 'Un virtuose du piano anonyme inspire et transforme la vie des personnes qu''il rencontre.', 105, 'Italie'),
(16, 'Mystères du Temple Perdu', '15 août 2023', 'mysteres_temple_perdu.jpg', 14, 'Aventure', 'Louis Martin', 'Une équipe d''archéologues découvre un temple antique rempli d''énigmes et de trésors anciens.', 135, 'Grèce'),
(17, 'L''Éveil des Titans', '12 décembre 2024', 'eveil_titans.jpg', 8, 'Fantasy', 'Marc-Antoine Laroche', 'Des héros doivent empêcher l''émergence de titans légendaires qui menacent d''anéantir le monde.', 120, 'Royaume-Uni'),
(18, 'Infiltration Virtuelle', '7 mai 2023', 'infiltration_virtuelle.jpg', 11, 'Action', 'Nadia Durand', 'Une espionne virtuose infiltre un réseau informatique pour arrêter une organisation criminelle.', 125, 'Russie'),
(19, 'La Ballade du Violoncelle', '18 septembre 2025', 'ballade_violoncelle.jpg', 9, 'Drame', 'Antoine Girard', 'L''histoire émouvante d''un violoncelliste talentueux et de son instrument magique.', 100, 'Autriche'),
(20, 'Énigme au Musée', '8 novembre 2022', 'enigme_musee.jpg', 12, 'Suspense', 'Sophie Martin', 'Une conservatrice de musée enquête sur le vol d''une œuvre d''art précieuse déclenchant une série d''événements mystérieux.', 140, 'France'),
(21, 'Les Jardins de l''Espoir', '20 janvier 2024', 'jardins_espoir.jpg', 10, 'Science-fiction', 'Lucie Deschamps', 'Des scientifiques tentent de restaurer l''écosystème terrestre après une catastrophe environnementale.', 130, 'Canada'),
(22, 'Le Talisman des Rois', '9 mars 2023', 'talisman_rois.jpg', 15, 'Fantasy', 'Pierre Lambert', 'Un jeune prince part à la recherche d''un talisman légendaire pour sauver son royaume de la ruine.', 145, 'France'),
(23, 'Mission Évasion', '28 juin 2025', 'mission_evasion.jpg', 13, 'Action', 'Éric Leclerc', 'Un groupe d''agents secrets doit s''évader d''une prison de haute sécurité pour arrêter une menace imminente.', 120, 'États-Unis'),
(24, 'Les Contes du Crépuscule', '4 décembre 2022', 'contes_crepuscule.jpg', 11, 'Fantasy', 'Sarah Bouchard', 'Un monde féerique est menacé par l''obscurité et seuls des conteurs spéciaux peuvent sauver la lumière.', 135, 'Irlande'),
(25, 'Le Violon Magique', '15 octobre 2024', 'violon_magique.jpg', 9, 'Drame', 'Antoine Lavoie', 'Un violon exceptionnel détient des pouvoirs magiques et celui qui le joue peut accomplir des miracles.', 105, 'Allemagne'),
(26, 'L''Énigme de l''Atlantide', '9 septembre 2023', 'enigme_atlantide.jpg', 14, 'Aventure', 'Julien Durand', 'Une expédition marine découvre les ruines légendaires de l''Atlantide mais des secrets dangereux sont révélés.', 155, 'Égypte'),
(27, 'Renaissance Technologique', '6 juillet 2024', 'renaissance_technologique.jpg', 10, 'Science-fiction', 'Isabelle Gagnon', 'Un groupe de génies technologiques révolutionne la société avec une invention révolutionnaire.', 100, 'Japon'),
(28, 'Le Destin de l''Épée', '19 février 2023', 'destin_epee.jpg', 16, 'Fantasy', 'Marcelle Lévesque', 'Un guerrier légendaire doit affronter un tyran maléfique pour restaurer la paix dans son royaume.', 140, 'Espagne'),
(29, 'Évasion Virtuelle', '28 août 2022', 'evasion_virtuelle.jpg', 12, 'Action', 'Vincent Dubois', 'Des prisonniers sont coincés dans un monde virtuel et doivent s''échapper pour retrouver la liberté.', 125, 'États-Unis'),
(30, 'La Symphonie du Destin', '21 novembre 2025', 'symphonie_destin.jpg', 9, 'Drame', 'Claire Martin', 'Une jeune compositrice trouve l''inspiration au milieu de la tourmente et crée une symphonie émouvante.', 100, 'Royaume-Uni'),
(31, 'Le Trésor des Rois', '2 janvier 2024', 'tresor_rois.jpg', 12, 'Aventure', 'Gabriel Boucher', 'Une chasse au trésor ancestrale mène à des épreuves dangereuses pour atteindre une richesse cachée.', 145, 'France'),
(32, 'La Prophétie Oubliée', '14 avril 2023', 'prophetie_oubliee.jpg', 8, 'Fantasy', 'Chloé Girard', 'Une ancienne prophétie oubliée révèle un destin inattendu pour une jeune héroïne.', 110, 'Canada'),
(33, 'Code Rouge', '22 septembre 2025', 'code_rouge.jpg', 13, 'Action', 'Théo Lefebvre', 'Un virus informatique redoutable menace de détruire les réseaux mondiaux et une équipe de hackers doit l''arrêter.', 125, 'Chine'),
(34, 'Le Peintre de l''Éclipse', '9 novembre 2022', 'peintre_eclipse.jpg', 10, 'Drame', 'Marie Dubois', 'Un artiste peintre exprime son art au milieu d''un événement astronomique rare mais des forces obscures menacent sa créativité.', 105, 'Italie'),
(35, 'L''Épée du Destin', '16 janvier 2024', 'epee_destin.jpg', 14, 'Fantasy', 'Lucas Gérard', 'Une épée légendaire forge le destin d''un jeune héritier dans une quête pour restaurer la paix dans les royaumes en guerre.', 155, 'Royaume-Uni'),
(36, 'Renaissance Cérébrale', '7 mars 2023', 'renaissance_cerebrale.jpg', 11, 'Science-fiction', 'Julia Blanchard', 'Des scientifiques explorent les frontières de la conscience humaine avec une technologie révolutionnaire.', 135, 'États-Unis'),
(37, 'L''Énigme de la Forêt Interdite', '28 juin 2025', 'enigme_foret_interdite.jpg', 9, 'Aventure', 'Louis Lévesque', 'Des explorateurs partent à la recherche d''un mystère caché au cœur d''une forêt mystique.', 120, 'Canada'),
(38, 'Réalité Parallèle', '3 décembre 2022', 'realite_parallele.jpg', 12, 'Science-fiction', 'Sophie Laurent', 'Des voyageurs découvrent des réalités alternatives où chaque choix a des conséquences inattendues.', 140, 'Japon'),
(39, 'Le Violoniste de Minuit', '15 septembre 2024', 'violoniste_minuit.jpg', 10, 'Drame', 'Alexandre Lavoie', 'Un virtuose du violon joue des mélodies envoûtantes la nuit attirant l''attention d''une audience mystérieuse.', 100, 'Allemagne'),
(40, 'Les Mondes Parallèles', '10 mai 2026', 'mondes_paralleles.jpg', 11, 'Science-fiction', 'Éric Dubois', 'Cette série raconte une découverte scientifique ouvre la porte à des mondes parallèles, chacun avec ses propres défis et mystères.', 120, 'Canada'),
(41, 'La Quête Infinie', '6 septembre 2027', 'quete_infinie.jpg', 13, 'Aventure', 'Juliette Martin', 'Cette série raconte une quête épique à travers des royaumes fantastiques à la recherche d''un artefact mystique aux pouvoirs infinis.', 135, 'France'),
(42, 'Le Pouvoir de l Esprit', '18 janvier 2028', 'pouvoir_esprit.jpg', 10, 'Fantasy', 'Lucas Tremblay', 'Cette série raconte l histoire que des individus découvrent qu''ils ont des pouvoirs psychiques uniques et doivent apprendre à les maîtriser pour sauver le monde.', 110, 'États-Unis'),
(43, 'La Révolution Virtuelle', '4 avril 2029', 'revolution_virtuelle.jpg', 12, 'Action', 'Amélie Gérard', 'Cette série raconte  qu une révolution se produit dans un monde virtuel où la liberté et la justice sont remises en question.', 125, 'Japon'),
(44, 'Les Harmonies Perdues', '22 novembre 2030', 'harmonies_perdues.jpg', 9, 'Drame', 'Thomas Boucher', 'Cette série raconte la recherche de mélodies oubliées révèle des secrets du passé et influence le destin de ceux qui les découvrent.', 100, 'Allemagne');


-- Insersion des informations de série avec leur foreign key sur film et leur nombre d'épisodes
INSERT INTO serie (id_serie, episodes) VALUES 
(39, '12'),(40, '10'),(41, '14'),(42, '1'),(43, '12'),(44, '8');
