create table IF NOT EXISTS utilisateur(
                            mail varchar2(255) not null primary key,
                            password varchar2(255) not null,
                            status varchar2(255) default 'adherent' not null ,
                            username varchar2(255),
                            nom varchar2(64) not null,
                            prenom varchar2(64) not null
);

INSERT OR REPLACE INTO utilisateur (mail,password,status, username, nom, prenom) VALUES ('clement@pasquet.fr', 'password', 'online', 'screeny', 'clement', 'pasquet');