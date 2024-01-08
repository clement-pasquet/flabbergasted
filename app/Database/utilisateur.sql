create table IF NOT EXISTS utilisateur(
                                          id_user int PRIMARY KEY,
                                          mail varchar2(255) not null primary key,
    password varchar2(255) not null,
    status varchar2(255) default 'adherent' not null ,
    username varchar2(255),
    nom varchar2(64) not null,
    prenom varchar2(64) not null
    );

INSERT OR REPLACE INTO utilisateur (mail,password,status, username, nom, prenom) VALUES ('clement@pasquet.fr', 'password', 'admin', 'screeny', 'pasquet', 'clement');
INSERT OR REPLACE INTO utilisateur (mail,password,status, username, nom, prenom) VALUES ('ju.bernier5@gmail.com', 'password', 'admin', 'ju', 'bernier', 'justine');

CREATE TABLE IF NOT EXISTS achat(
                            id_user INT,
                            id_film INT,
                            FOREIGN KEY (id_user) REFERENCES utilisateur(id_user),
                            FOREIGN KEY (id_film) REFERENCES film(id_film),
                            PRIMARY KEY (id_user, id_film)
    );

CREATE TABLE IF NOT EXISTS film(
                           id_film int PRIMARY KEY,
                           titre varchar2(255) not null,
                            date varchar2(64)  not null,
                            image varchar2(255) not null,
                            prix int,
                            genre varchar2(255) not null,
                            realisateur varchar2(255) not null,
                            synopsis varchar2(4000) not null,
                            duree int,
                            pays varchar2(64)
    );

CREATE TABLE IF NOT EXISTS serie(
                            id_serie INT PRIMARY KEY,
                            episodes varchar2(255),
                            FOREIGN KEY (id_serie) REFERENCES film(id_film)
    );