CREATE DATABASE girpss;

 USE girpss ;

 CREATE TABLE IF NOT EXISTS quartier(
     id_quartier INT NOT NULL AUTO_INCREMENT,
     nom_quartier VARCHAR (100),
     etat_quartier INT DEFAULT 0,

     CONSTRAINT cc1 PRIMARY KEY (id_quartier) 
 );

  CREATE TABLE IF NOT EXISTS parent(
     id_parent INT NOT NULL AUTO_INCREMENT,
     nom_pere VARCHAR (100),
     contact_pere INT,
     profession_pere VARCHAR(100),
     nom_mere VARCHAR (100),
     contact_mere  INT,
     profession_mere  VARCHAR(100),
     nom_tuteur VARCHAR (100),
     contact_tuteur  INT,
     profession_tuteur  VARCHAR(100),
     id_quartier INT,
     etat_parent INT DEFAULT 0,

     PRIMARY KEY (id_parent),
     FOREIGN KEY (id_quartier) REFERENCES quartier(id_quartier) ON UPDATE CASCADE ON DELETE CASCADE 
 );

 CREATE TABLE IF NOT EXISTS admin(
     id_admin INT NOT NULL AUTO_INCREMENT,
     nom_admin VARCHAR (200),
     email_admin VARCHAR (200),
     password_admin TEXT,
     id_admin INT, 
     etat_quartier INT DEFAULT 0,
     PRIMARY KEY (id_admin),
     FOREIGN KEY (id_quartier) REFERENCES quartier(id_quartier) ON UPDATE CASCADE ON DELETE CASCADE
 );

  CREATE TABLE IF NOT EXISTS classe(
     id_classe INT NOT NULL AUTO_INCREMENT,
     nom_classe VARCHAR (200),
     etat_classe INT DEFAULT 0,
     PRIMARY KEY (id_classe )
 );

  CREATE TABLE IF NOT EXISTS etablissement(
     id_etablissement INT NOT NULL AUTO_INCREMENT,
     nom_etablissement VARCHAR (200),
     etat_etablissement INT DEFAULT 0,
     PRIMARY KEY (id_etablissement)
 );

  CREATE TABLE IF NOT EXISTS classe_etablissement(
     id_classe INT NOT NULL,
     id_etablissement INT NOT NULL,
     
     FOREIGN KEY (id_classe) REFERENCES classe(id_classe) ON UPDATE CASCADE ON DELETE CASCADE,
     FOREIGN KEY (id_etablissement) REFERENCES etablissement(id_etablissement) ON UPDATE CASCADE ON DELETE CASCADE
 );

 CREATE TABLE IF NOT EXISTS enseignant(
     id_enseignant INT NOT NULL AUTO_INCREMENT,
     nom_enseignant VARCHAR (20),
     profession_enseignant VARCHAR (200),
     matiere_enseignant VARCHAR (200),
     contact_enseignant INT,
     salaire_enseignant INT,
     age_enseignant INT,
     sexe_enseignant CHAR,
     photo_enseignant VARCHAR(100),
        id_quartier INT,
        date_enregistrer DATE,
        date_supression DATE,
        date_payement_prof DATE,
        presence INT,
     etat_enseignant INT DEFAULT 0,
     PRIMARY KEY (id_enseignant),
     FOREIGN KEY (id_quartier) REFERENCES quartier(id_quartier) ON UPDATE CASCADE ON DELETE CASCADE
 );

CREATE TABLE IF NOT EXISTS planification(
     id_jour INT NOT NULL AUTO_INCREMENT,
     nom_jour VARCHAR (200),
     etat_jour INT DEFAULT 0,
     PRIMARY KEY (id_jour)
 );

CREATE TABLE IF NOT EXISTS enseignant_jour(
     id_jour INT NOT NULL,
     id_enseignant INT NOT NULL,
     
     FOREIGN KEY (id_enseignant) REFERENCES enseignant(id_enseignant) ON UPDATE CASCADE ON DELETE CASCADE,
     FOREIGN KEY (id_jour) REFERENCES planification(id_jour) ON UPDATE CASCADE ON DELETE CASCADE
 );

CREATE TABLE IF NOT EXISTS eleve(
     id_eleve INT NOT NULL,
     nom_eleve VARCHAR (200),
     prenom_eleve VARCHAR (200),
     contact_eleve INT,
     photo_eleve VARCHAR (200),
     age_eleve CHAR,
     frais_scolarite INT,
     frais_impression INT,
     id_etablissement INT,
     id_enseignant INT,
     id_parent INT,
     id_classe INT,
      date_enregistrer DATE,
        date_supression DATE,
etat_eleve INT DEFAULT 0, 
	PRIMARY KEY (id_eleve),
     FOREIGN KEY (id_etablissement) REFERENCES etablissement(id_etablissement) ON UPDATE CASCADE ON DELETE CASCADE,
     FOREIGN KEY (id_enseignant) REFERENCES enseignant(id_enseignant) ON UPDATE CASCADE ON DELETE CASCADE,
     FOREIGN KEY (id_parent) REFERENCES parent(id_parent) ON UPDATE CASCADE ON DELETE CASCADE,
     FOREIGN KEY (id_classe) REFERENCES classe(id_classe) ON UPDATE CASCADE ON DELETE CASCADE
 );
