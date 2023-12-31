-- Création de la base de données auto_moto
CREATE DATABASE IF NOT EXISTS automoto DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE automoto;

-- Désactivation des contrôles de clés étrangères pendant la création des tables
SET FOREIGN_KEY_CHECKS = 0;

-- Table vehicule
DROP TABLE IF EXISTS vehicule;
CREATE TABLE vehicule (
    veh_id INT AUTO_INCREMENT PRIMARY KEY,
    veh_type VARCHAR(500) NOT NULL,
    veh_caracteristique VARCHAR(500) NOT NULL, 
    veh_carburant VARCHAR(500) NOT NULL,
    veh_contrat VARCHAR(500) NOT NULL,
    veh_img varchar(500)
) ENGINE=InnoDB;

-- Table client
DROP TABLE IF EXISTS client;
CREATE TABLE client (
    cli_id INT AUTO_INCREMENT PRIMARY KEY,
    cli_nom VARCHAR(500) NOT NULL,
    cli_prenom VARCHAR(500) NOT NULL,
    cli_mail VARCHAR(500) NOT NULL,
    cli_pwd VARCHAR(500) NOT NULL,
    cli_profil int not null 
) ENGINE=InnoDB;

-- table staff 
DROP TABLE IF EXISTS staff; 

create table staff(
    sta_id int AUTO_INCREMENT primary key,
    sta_nom varchar(500) not null,
    sta_prenom varchar(500),
    sta_mail varchar(500),
    sta_pwd varchar(500),
    sta_profil int not null 
) ENGINE=InnoDB;


-- Table louer
DROP TABLE IF EXISTS louer;
CREATE TABLE louer (
    lou_id INT AUTO_INCREMENT PRIMARY KEY,
    lou_client INT NOT NULL, 
    lou_vehicule INT NOT NULL 
) ENGINE=InnoDB;

-- Table achat 
DROP TABLE IF EXISTS achat;
CREATE TABLE achat (
    ach_id INT AUTO_INCREMENT PRIMARY KEY,
    ach_client INT NOT NULL,
    ach_vehicule INT NOT NULL 
) ENGINE=InnoDB; 


-- table profil 
DROP TABLE IF EXISTS profil; 

create table profil(
    pro_id int AUTO_INCREMENT primary key,
    pro_label varchar(50)
) ENGINE=InnoDB; 

-- Réactivation des contrôles de clés étrangères après la création des tables
SET FOREIGN_KEY_CHECKS = 1;

-- Contraintes de clés étrangères
ALTER TABLE louer ADD CONSTRAINT cs1 FOREIGN KEY (lou_client) REFERENCES client(cli_id) ON DELETE CASCADE;
ALTER TABLE louer ADD CONSTRAINT cs2 FOREIGN KEY (lou_vehicule) REFERENCES vehicule(veh_id) ON DELETE CASCADE;
ALTER TABLE achat ADD CONSTRAINT cs3 FOREIGN KEY (ach_client) REFERENCES client(cli_id) ON DELETE CASCADE;
ALTER TABLE achat ADD CONSTRAINT cs4 FOREIGN KEY (ach_vehicule) REFERENCES vehicule(veh_id) ON DELETE CASCADE;
ALTER TABLE client ADD CONSTRAINT cs5 FOREIGN KEY (cli_profil) REFERENCES profil(pro_id) ON DELETE CASCADE;
ALTER TABLE staff ADD CONSTRAINT cs6 FOREIGN KEY (sta_profil) REFERENCES profil(pro_id) ON DELETE CASCADE;



-- création des profils
insert into profil value (null,"visitor"),(null,"user"),(null,"moderator"),(null,"adminer"); 
