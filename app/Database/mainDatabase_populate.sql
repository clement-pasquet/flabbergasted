-- Connexion MySQL :
sudo mysql -u root -p

CREATE DATABASE mainDatabase;
USE mainDatabase;
-- Connexion MySQL :

-- Faire le "dump" de la bd :
sudo mysqldump -u root -p mainDatabase > mainDatabaseDump.sql
-- Utiliser le "dump" de la bd :
sudo mysql -u root -p mainDatabase < mainDatabaseDump.sql


-- Insertion utilisateur
INSERT INTO utilisateur (id_user, mail, password, status, username, nom, prenom)
VALUES (1, 'clement@pasquet.fr', 'password', 'admin', 'screeny', 'pasquet', 'clement'),
       (2, 'ju.bernier5@gmail.com', 'password', 'admin', 'ju', 'bernier', 'justine');



-- Insertion des films
INSERT INTO film (id_film, titre, date_release, image, prix, genre, realisateur, synopsis, duree, pays, est_serie)
VALUES
    (1, 'The Matrix', '31/03/1999', 'matrix.jpg', 10, 'Science-fiction', 'Lana Wachowski, Lilly Wachowski', 'Un pirate informatique découvre la vérité sur sa réalité simulée et sa lutte contre ses oppresseurs.', 136, 'États-Unis', 0),
    (2, 'Inception', '16/07/2010', 'inception.jpg', 12, 'Science-fiction', 'Christopher Nolan', 'Un voleur d espionnage industriel utilise l architecture des rêves pour voler des secrets précieux.', 148, 'États-Unis', 0),
    (4, 'Le Parrain', '24/03/1972', 'le_parrain.jpg', 8, 'Drame', 'Francis Ford Coppola', 'La saga d une famille mafieuse italo-américaine dirigée par Don Vito Corleone.', 175, 'États-Unis', 0),
    (5, 'Forrest Gump', '06/07/1994', 'forrest_gump.jpg', 9, 'Drame', 'Robert Zemeckis', 'Les péripéties d un homme simple d esprit traversant des moments clés de l histoire américaine.', 142, 'États-Unis', 0),
    (6, 'Pulp Fiction', '21/10/1994', 'pulp_fiction.jpg', 11, 'Drame', 'Quentin Tarantino', 'Des histoires entrelacées de gangsters, de boxeurs, de tueurs à gages et d une mallette mystérieuse.', 154, 'États-Unis', 0),
    (7, 'Interstellar', '07/11/2014', 'interstellar.jpg', 13, 'Science-fiction', 'Christopher Nolan', 'Des explorateurs spatiaux voyagent à travers un trou de ver pour trouver un nouveau foyer pour l humanité.', 169, 'États-Unis', 0),
    (8, 'Jurassic Park', '11/06/1993', 'jurassic_park.jpg', 12, 'Aventure', 'Steven Spielberg', 'Des scientifiques visitent un parc à thème rempli de dinosaures génétiquement recréés.', 127, 'États-Unis', 0),
    (9, 'Les Évadés', '10/11/1995', 'les_evades.jpg', 10, 'Drame', 'Frank Darabont', 'L histoire d une amitié entre deux prisonniers condamnés à perpétuité, basée sur un roman de Stephen King.', 142, 'États-Unis', 0),
    (10, 'Le Seigneur des anneaux : La Communauté de l anneau', '19/12/2001', 'seigneur_anneaux_1.jpg', 15, 'Aventure', 'Peter Jackson', 'Un jeune hobbit entreprend un voyage périlleux pour détruire un anneau maléfique.', 178, 'Nouvelle-Zélande, États-Unis', 0),
    (11, 'Avengers: Infinity War', '25/04/2018', 'avengers_infinity_war.jpg', 14, 'Aventure', 'Anthony Russo, Joe Russo', 'Les super-héros de l univers Marvel affrontent le redoutable Thanos.', 149, 'États-Unis', 0),
    (12, 'Les Temps modernes', '24/02/1936', 'temps_modernes.jpg', 10, 'Drame', 'Charlie Chaplin', 'Une comédie satirique mettant en scène les luttes de la vie moderne.', 87, 'États-Unis', 0),
    (13, 'Avatar', '16/12/2009', 'avatar.jpg', 13, 'Science-fiction', 'James Cameron', 'Un marine paraplégique est envoyé sur Pandora dans un corps Avatar pour une mission.', 162, 'États-Unis', 0),
    (14, 'Le Hobbit : Un voyage inattendu', '12/12/2012', 'hobbit_voyage_inattendu.jpg', 13, 'Aventure', 'Peter Jackson', 'Bilbo Sacquet entame un voyage épique pour reprendre le royaume des nains dErebor.', 169, 'Nouvelle-Zélande, États-Unis', 0),
    (15, '2001: lOdyssée de lespace', '06/04/1968', '2001_espace.jpg', 10, 'Science-fiction', 'Stanley Kubrick', 'Un voyage spatial épique découvrant un mystère lié à une intelligence artificielle.', 149, 'Royaume-Uni, États-Unis', 0),
    (16, 'Matrix Reloaded', '16/05/2003', 'matrix_reloaded.jpg', 12, 'Science-fiction', 'Lana Wachowski, Lilly Wachowski', 'Suite de "The Matrix", explorant davantage la réalité simulée et la lutte contre les machines.', 138, 'États-Unis', 0),
    (17, 'Alien, le huitième passager', '09/09/1979', 'alien.jpg', 10, 'Science-fiction, Horreur', 'Ridley Scott', 'L équipage d un vaisseau spatial est traqué par une créature extraterrestre mortelle.', 117, 'Royaume-Uni, États-Unis', 0),
    (18, 'Indiana Jones : Les Aventuriers de l arche perdue', '12/09/1981', 'indiana_jones_arche_perdue.jpg', 10, 'Aventure', 'Steven Spielberg', 'Indiana Jones part à la recherche de larche de lalliance avant les nazis.', 115, 'États-Unis', 0),
    (19, 'Le Labyrinthe de Pan', '27/10/2006', 'labyrinthe_pan.jpg', 10, 'Drame', 'Guillermo del Toro', 'Dans lEspagne post-guerre civile, une jeune fille découvre un monde souterrain fantastique.', 118, 'Espagne, Mexique', 0);



INSERT INTO film (id_film, titre, date_release, image, prix, genre, realisateur, synopsis, duree, pays, est_serie)
VALUES
    (21, 'Breaking Bad', '20/01/2008', 'breaking_bad.jpg', 10, 'Drame, Thriller', 'Vince Gilligan', 'Un professeur de chimie se tourne vers la production de méthamphétamine après avoir été diagnostiqué d un cancer.', NULL, 'États-Unis', 1),
    (22, 'Game of Thrones', '17/04/2011', 'game_of_thrones.jpg', 10, 'Drame, Fantastique', 'David Benioff, D. B. Weiss', 'Une série basée sur les romans de George R. R. Martin, se déroulant dans un monde fantastique rempli de complots et de guerres pour le pouvoir.', NULL, 'États-Unis', 1),
    (23, 'Stranger Things', '15/07/2016', 'stranger_things.jpg', 10, 'Science-fiction, Horreur', 'Duffer Brothers', 'Des enfants enquêtent sur la disparition mystérieuse d un ami et découvrent un monde parallèle terrifiant.', NULL, 'États-Unis', 1),
    (24, 'Shadow and Bone : La saga Grisha', '23/04/2021', 'shadow_and_bone.jpg', 10, 'Fantasy, Aventure', 'Eric Heisserer', 'Dans un monde divisé par des ténèbres mortelles, une jeune cartographe découvre qu elle possède un pouvoir extraordinaire capable de sauver son pays.', NULL, 'États-Unis', 1),
    (25, 'The Witcher', '20/12/2019', 'the_witcher.jpg', 10, 'Fantasy, Aventure', 'Lauren Schmidt Hissrich', 'Un chasseur de monstres lutte pour trouver sa place dans un monde où les humains se révèlent souvent plus vicieux que les bêtes.', NULL, 'États-Unis, Pologne', 1),
    (26, 'The Mandalorian', '12/11/2019', 'the_mandalorian.jpg', 10, 'Science-fiction, Aventure', 'Jon Favreau', 'Les aventures d un chasseur de primes mandalorien dans les confins de la galaxie, loin de l autorité de la Nouvelle République.', NULL, 'États-Unis', 1);


-- Insertion des achats
-- Achats pour l'utilisateur 1 (Clément Pasquet)
INSERT INTO achat (id_user, id_film) VALUES
                                         (1, 19), (1, 18), (1, 17), (1, 16), (1, 15), -- Achats des 5 derniers films pour l'utilisateur 1
                                         (1, 11), (1, 5), (1, 4), (1, 12), (1, 2); -- Ajoutez plus d'achats si nécessaire pour l'utilisateur 1


-- Achats pour l'utilisateur 2 (Justine Bernier)
INSERT INTO achat (id_user, id_film) VALUES
                                         (2, 7), (2, 4), (2, 13), (2, 15), (2, 17), -- Ajoutez plus d'achats si nécessaire pour l'utilisateur 2
                                         (2, 19), (2, 11), (2, 18), (2, 5), (2, 6);



-- Insersion des informations de série avec leur foreign key sur film et leur nombre d'épisodes
INSERT INTO serie (id_serie, episodes) VALUES
                                           (21, '12'),(22, '10'),(23, '14'),(24, '12'),(25, '12'),(26, '8');
