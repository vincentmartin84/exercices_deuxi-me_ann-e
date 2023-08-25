-- Base de données : guinot
--
CREATE DATABASE IF NOT EXISTS guinot DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE guinot;

-- ----------------------------------------------------

CREATE TABLE individu (
    ind_id INT AUTO_INCREMENT PRIMARY KEY,
    ind_nom VARCHAR(50),
    ind_prenom VARCHAR(50),
    ind_date_naissance DATE,
    ind_sexe VARCHAR(10),
    ind_promotion VARCHAR(10),
    ind_adresse VARCHAR(100),
    ind_nationalite VARCHAR(50),
    ind_medecine BOOLEAN,
    ind_communication BOOLEAN,
    ind_informatique BOOLEAN,
    ind_newsletter BOOLEAN
);
