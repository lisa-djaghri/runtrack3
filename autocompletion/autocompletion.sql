CREATE DATABASE IF NOT EXISTS autocompletion;
USE autocompletion;

CREATE TABLE IF NOT EXISTS pokemon (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    description TEXT,
    type VARCHAR(50)
);

INSERT INTO pokemon (nom, type, description) VALUES
('Bulbizarre', 'Plante', 'Il a une étrange graine plantée sur son dos.'),
('Herbizarre', 'Plante', 'La graine sur son dos a grandi.'),
('Florizarre', 'Plante', 'La plante fleurit quand elle absorbe de l\'énergie solaire.'),
('Salamèche', 'Feu', 'La flamme au bout de sa queue indique son humeur.'),
('Reptincel', 'Feu', 'Il lacère ses ennemis avec ses griffes.'),
('Dracaufeu', 'Feu', 'Il crache du feu assez chaud pour fondre des rochers.'),
('Carapuce', 'Eau', 'Sa carapace ronde lui sert de protection.'),
('Carabaffe', 'Eau', 'Il a une grande queue fournie et soyeuse.'),
('Tortank', 'Eau', 'Il écrase ses ennemis de tout son poids.'),
('Chenipan', 'Insecte', 'Ses petites pattes ont des ventouses.'),
('Chrysacier', 'Insecte', 'Sa coquille est dure comme du métal.'),
('Papilusion', 'Insecte', 'Il adore le nectar des fleurs.'),
('Aspicot', 'Insecte', 'Son dard venimeux est très dangereux.'),
('Coconfort', 'Insecte', 'Il se cache sous les feuilles.'),
('Dardargnan', 'Insecte', 'Il vole à grande vitesse et attaque avec ses dards.'),
('Roucool', 'Vol', 'Il est très docile et n\'aime pas se battre.'),
('Roucoups', 'Vol', 'Il survole son territoire pour repérer ses proies.'),
('Rattata', 'Normal', 'Ses dents poussent constamment.'),
('Pikachu', 'Electrik', 'Il stocke de l\'électricité dans ses joues.'),
('Raichu', 'Electrik', 'Sa longue queue lui sert de prise de terre.'),
('Sabelette', 'Sol', 'Il creuse des terriers dans le sable.'),
('Nidoran', 'Poison', 'Ses oreilles sont très sensibles.'),
('Melofée', 'Fée', 'On dit qu\'il vient de la lune.'),
('Goupix', 'Feu', 'Il a six queues magnifiques.'),
('Rondoudou', 'Normal', 'Il chante pour endormir ses ennemis.');