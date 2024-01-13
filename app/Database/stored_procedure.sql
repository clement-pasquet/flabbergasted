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

CREATE PROCEDURE ajouterAchat(IN p_id_user INT, IN p_id_film INT)
BEGIN
    DECLARE user_already_purchased BOOLEAN;

    -- Vérifier si l'utilisateur a déjà acheté le film
    SELECT COUNT(*) INTO user_already_purchased
    FROM achat
    WHERE id_user = p_id_user AND id_film = p_id_film;

    -- Utilisateur n'a pas encore acheté le film, ajouter l'achat
    IF user_already_purchased = 0 THEN
        INSERT INTO achat (id_user, id_film)
        VALUES (p_id_user, p_id_film);
    END IF;
END //

DELIMITER ;




-- Procédure pour récupérer les id des films achetés par un user
DELIMITER //

CREATE PROCEDURE getFilmIdsByUserId(IN current_id_user INT)
BEGIN
    SELECT id_film FROM achat WHERE id_user = current_id_user;
END //

DELIMITER ;


-- Procédure pour récupérer un film grâce à son id
DELIMITER //

CREATE PROCEDURE getFilmById(IN current_id_film INT)
BEGIN
    SELECT * FROM film WHERE id_film = current_id_film;
END //

DELIMITER ;


-- Procédure pour rajouter ou enlever un like à un film de la table film + MAJ la table likes
DELIMITER //

CREATE PROCEDURE like_movie(IN current_id_film INT, IN current_id_user INT)
BEGIN
    DECLARE existing_like_count INT;

    -- Vérifier si l'utilisateur a déjà liké ce film
    SELECT COUNT(*) INTO existing_like_count
    FROM likes
    WHERE id_film = current_id_film AND id_user = current_id_user;

    IF existing_like_count = 0 THEN
        -- Ajouter un like
        INSERT INTO likes (id_film, id_user) VALUES (current_id_film, current_id_user);
        -- Mettre à jour le nombre de likes dans la table 'film'
        UPDATE film SET likes = likes + 1 WHERE id_film = current_id_film;
    ELSE
        -- Enlever le like
        DELETE FROM likes WHERE id_film = current_id_film AND id_user = current_id_user;
        -- Mettre à jour le nombre de likes dans la table 'film'
        UPDATE film SET likes = likes - 1 WHERE id_film = current_id_film;
    END IF;
END //

DELIMITER ;





-- Partie administrateur ----

