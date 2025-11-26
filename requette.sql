-- creation de tables pour la base de donnees

CREATE TABLE Categories(
    idCategorie VARCHAR(6) PRIMARY KEY ,
    nomCategorie  VARCHAR(60)
);
 INSERT INTO Categories VALUES('C01',"chaussure");
 INSERT INTO  Categories VALUES( 'C02',"vetements");
 INSERT INTO  Categories VALUES( 'C03',"accesoires");



CREATE TABLE Produits(
    idProduit SERIAL VARCHAR(6) PRIMARY KEY,
    nomProduit VARCHAR(15),
    descriptionProduit TEXT,
    prix  REAL ,
    imageProduit  VARCHAR(60),
    idCategorie VARCHAR(6),
    CONSTRAINT FK FOREIGN KEY (idCategorie) REFERENCES Categories(idCategorie)
);

 INSERT INTO  Produits(nomProduit,descriptionProduit,prix,imageProduit,idCategorie)VALUES ('ceinture', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium at error ad, necessitatibus possimus dignissimos accusantium, molestias quod quas repellendus nostrum id odio! Nihil beatae tempore alias veritatis doloremque sit.
Debitis illo, exercitationt, doloremque vitae reprehenderit saepe modi ex doloribus minima amet accusantium quidem alias quibusdam dignissimos tenetur. Voluptatibus quia quasi quis ducimus, aliquam ratione dignissimos rerum?
Assumenda neque fugiat expedita fuga perspiciatis temporibus voluptatibus exercitationem iste eveniet cupiditate. Tempore nesciunt nobis ducimus ad et placeat.',44.6,'img/acc1.jpg','C03');

 INSERT INTO  Produits(nomProduit,descriptionProduit,prix,imageProduit,idCategorie) VALUES ('chemise', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium at error ad, necessitatibus possimus dignissimos accusantium, molestias quod quas repellendus nostrum id odio! Nihil beatae tempore alias veritatis doloremque sit.
Debitis illo, exercitationem nam, id impedit, doloremque vitae reprehenderit saepe modi ex doloribus minima amet accusantium quidem alias quibusdam dignissimos tenetur. Voluptatibus quia quasi quis ducimus, aliquam ratione dignissimos rerum?
Assumenda neque fugiat expedita fuga perspiciatis temporibus voluptatibus exercitationem iste eveniet cupiditate. Tempore nesciunt nobis ducimus ad et placeat.',346.5,'img/acc2.jpg','C03');

 INSERT INTO   Produits(nomProduit,descriptionProduit,prix,imageProduit,idCategorie) VALUES('lacoste', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium at error ad, necessitatibus possimus dignissimos accusantium, molestias quod quas repellendus nostrum id odio! Nihil beatae tempore alias veritatis doloremque sit.
Debitis illo, exercitationem nam, id impedit, doloremque vitae reprehenderit saepe modi ex doloribus minima amet accusantium quidem alias quibusdam dignissimos tenetur. Voluptatibus quia quasi quis ducimus, aliquam ratione dignissimos rerum?
Assumenda neque fugiat expedita fuga perspiciatis temporibus voluptatibus exercitationem iste eveniet cupiditate. Tempore nesciunt nobis ducimus ad et placeat.',215.75,'img/acc3.jpg','C03');

 INSERT INTO  Produits(nomProduit,descriptionProduit,prix,imageProduit,idCategorie)VALUES ('lacoste', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium at error ad, necessitatibus possimus dignissimos accusantium, molestias quod quas repellendus nostrum id odio! Nihil beatae tempore alias veritatis doloremque sit.
Debitis illo, exercitationem nam, id impedit, doloremque vitae reprehenderit saepe modi ex doloribus minima amet accusantium quidem alias quibusdam dignissimos tenetur. Voluptatibus quia quasi quis ducimus, aliquam ratione dignissimos rerum?
Assumenda neque fugiat expedita fuga perspiciatis temporibus voluptatibus exercitationem iste eveniet cupiditate. Tempore nesciunt nobis ducimus ad et placeat.',66.75,'img/acc4.jpg','C03');

 INSERT INTO  Produits(nomProduit,descriptionProduit,prix,imageProduit,idCategorie)VALUES ('NEW BALANCE ML574', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium at error ad, necessitatibus possimus dignissimos accusantium, molestias quod quas repellendus nostrum id odio! Nihil beatae tempore alias veritatis doloremque sit.
Debitis illo, exercitationem nam, id impedit, doloremque vitae reprehenderit saepe modi ex doloribus minima amet accusantium quidem alias quibusdam dignissimos tenetur. Voluptatibus quia quasi quis ducimus, aliquam ratione dignissimos rerum?
Assumenda neque fugiat expedita fuga perspiciatis temporibus voluptatibus exercitationem iste eveniet cupiditate. Tempore nesciunt nobis ducimus ad et placeat.',976.75,'img/acc5.jpg','C03');

 INSERT INTO  Produits(nomProduit,descriptionProduit,prix,imageProduit,idCategorie) VALUES ('NEW BALANCE ML574', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium at error ad, necessitatibus possimus dignissimos accusantium, molestias quod quas repellendus nostrum id odio! Nihil beatae tempore alias veritatis doloremque sit.
Debitis illo, exercitationem nam, id impedit, doloremque vitae reprehenderit saepe modi ex doloribus minima amet accusantium quidem alias quibusdam dignissimos tenetur. Voluptatibus quia quasi quis ducimus, aliquam ratione dignissimos rerum?
Assumenda neque fugiat expedita fuga perspiciatis temporibus voluptatibus exercitationem iste eveniet cupiditate. Tempore nesciunt nobis ducimus ad et placeat.',976.75,'img/acc6.jpg','C03');

 INSERT INTO  Produits(nomProduit,descriptionProduit,prix,imageProduit,idCategorie)VALUES ('NEW BALANCE ML574', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium at error ad, necessitatibus possimus dignissimos accusantium, molestias quod quas repellendus nostrum id odio! Nihil beatae tempore alias veritatis doloremque sit.
Debitis illo, exercitationem nam, id impedit, doloremque vitae reprehenderit saepe modi ex doloribus minima amet accusantium quidem alias quibusdam dignissimos tenetur. Voluptatibus quia quasi quis ducimus, aliquam ratione dignissimos rerum?
Assumenda neque fugiat expedita fuga perspiciatis temporibus voluptatibus exercitationem iste eveniet cupiditate. Tempore nesciunt nobis ducimus ad et placeat.',976.75,'img/cacc7.jpg','C03');

 INSERT INTO  Produits(nomProduit,descriptionProduit,prix,imageProduit,idCategorie)VALUES ('NEW BALANCE ML574', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium at error ad, necessitatibus possimus dignissimos accusantium, molestias quod quas repellendus nostrum id odio! Nihil beatae tempore alias veritatis doloremque sit.
Debitis illo, exercitationem nam, id impedit, doloremque vitae reprehenderit saepe modi ex doloribus minima amet accusantium quidem alias quibusdam dignissimos tenetur. Voluptatibus quia quasi quis ducimus, aliquam ratione dignissimos rerum?
Assumenda neque fugiat expedita fuga perspiciatis temporibus voluptatibus exercitationem iste eveniet cupiditate. Tempore nesciunt nobis ducimus ad et placeat.',976.75,'img/chauss10.jpg','C03');

 INSERT INTO  Produits VALUES ('P09','NEW BALANCE ML574', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium at error ad, necessitatibus possimus dignissimos accusantium, molestias quod quas repellendus nostrum id odio! Nihil beatae tempore alias veritatis doloremque sit.
Debitis illo, exercitationem nam, id impedit, doloremque vitae reprehenderit saepe modi ex doloribus minima amet accusantium quidem alias quibusdam dignissimos tenetur. Voluptatibus quia quasi quis ducimus, aliquam ratione dignissimos rerum?
Assumenda neque fugiat expedita fuga perspiciatis temporibus voluptatibus exercitationem iste eveniet cupiditate. Tempore nesciunt nobis ducimus ad et placeat.',976.75,'img/chauss5.jpg','C01');

 DROP TABLE IF  Utilisateur  EXISTS;
CREATE TABLE Utilisateur(
     idUtilisateur SERIAL VARCHAR(5) PRIMARY KEY ,
     email    VARCHAR(55),
     mot_de_passe VARCHAR(8) not null unique,
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
 
-- ----------------------------------------------------------------
-----------------------------------------------------------------
-----------------------------------------------------------
