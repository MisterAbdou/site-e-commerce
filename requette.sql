-- creation de tables pour la base de donnees

CREATE TABLE Categories(
    idCategorie VARCHAR(6) PRIMARY KEY ,
    nomCategorie  VARCHAR(60)
);
 INSERT INTO Categories VALUES('CO1',"");
 INSERT INTO  Categories VALUES( 'CO2',"vetements");
 INSERT INTO  Categories VALUES( 'CO3',"");
 INSERT INTO  Categories VALUES( 'CO4',"vetements");


CREATE TABLE Produits(
    idProduit VARCHAR(6) PRIMARY KEY,
    nomProduit VARCHAR(15),
    descriptionProduit TEXT,
    prix  REAL ,
    imageProduit  VARCHAR(60),
    idCategorie VARCHAR(6) FOREIGN KEY (idCategorie) REFERENCES Categories ON DELETE CASCADE,
);
CREATE TABLE Utilisateur(
     idUtilisateur VARCHAR(5) PRIMARY KEY,
     email    VARCHAR(55),
     mot_de_passe VARCHAR(8),
     nom VARCHAR(10),
     prenom VARCHAR(15),
     date_de_naissance DATE
);

CREATE TABLE ACHAT(
    idUtilisateur VARCHAR(5),
    idProduit VARCHAR(6),
    date_achat DATE
    CONSTRAINT cle_etranger FOREIGN KEY( idUtilisateur,idProduit) 
);
 
