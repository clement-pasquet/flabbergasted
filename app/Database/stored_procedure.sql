DELIMITER //
CREATE OR REPLACE PROCEDURE sp_insert_user(
    IN le_id_user INT,
    IN le_mail VARCHAR(255),
    IN le_password VARCHAR(255),
    IN le_status VARCHAR(255),
    IN le_username VARCHAR(255),
    IN le_nom VARCHAR(64),
    IN le_prenom VARCHAR(64)
)
BEGIN
    INSERT INTO utilisateur(id_user, mail, password, status, username, nom, prenom)
    VALUES (le_id_user, le_mail, le_password, le_status, le_username, le_nom, le_prenom);
END //
DELIMITER ;


DELIMITER //
CREATE OR REPLACE PROCEDURE sp_select_film_by_categorie(
    IN le_categorie VARCHAR(255)
)
BEGIN
    SELECT * FROM film WHERE le_categorie = genre;
END //
DELIMITER ;


-- Procédure d'ajout d'un achat
DELIMITER //

CREATE PROCEDURE ajouterAchat (IN id_user INT, IN id_film INT)
BEGIN
    INSERT INTO achat (id_user, id_film)
    VALUES (id_user, id_film);
END //

DELIMITER ;


-- Partie administrateur ----

