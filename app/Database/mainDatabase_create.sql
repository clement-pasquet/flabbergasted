CREATE TABLE IF NOT EXISTS utilisateur (
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    mail VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    status VARCHAR(255) DEFAULT 'adherent' NOT NULL,
    username VARCHAR(255),
    nom VARCHAR(64) NOT NULL,
    prenom VARCHAR(64) NOT NULL
);


CREATE TABLE IF NOT EXISTS film (
    id_film INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(255) NOT NULL,
    date_release VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    prix INT,
    genre VARCHAR(255) NOT NULL,
    realisateur VARCHAR(255) NOT NULL,
    synopsis TEXT NOT NULL,
    duree INT,
    pays VARCHAR(64),
    est_serie BOOLEAN NOT NULL DEFAULT 0 -- Ajout de la colonne pour indiquer si c'est une série (0 pour film, 1 pour série)
);


CREATE TABLE IF NOT EXISTS achat (
    id_user INT,
    id_film INT,
    FOREIGN KEY (id_user) REFERENCES utilisateur(id_user),
    FOREIGN KEY (id_film) REFERENCES film(id_film),
    PRIMARY KEY (id_user, id_film)
);


CREATE TABLE IF NOT EXISTS serie (
    id_serie INT PRIMARY KEY,
    episodes VARCHAR(255),
    FOREIGN KEY (id_serie) REFERENCES film(id_film)
);
