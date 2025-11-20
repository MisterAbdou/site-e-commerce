-- creation de tables pour la base de donnees

CREATE TABLE Categories(
    idCategorie VARCHAR(6) PRIMARY KEY ,
    nomCategorie  VARCHAR(60)
);
 INSERT INTO Categories VALUES('CO1',"chaussure");
 INSERT INTO  Categories VALUES( 'CO2',"vetements");
 INSERT INTO  Categories VALUES( 'CO3',"accesoires");



CREATE TABLE Produits(
    idProduit VARCHAR(6) PRIMARY KEY,
    nomProduit VARCHAR(15),
    descriptionProduit TEXT,
    prix  REAL ,
    imageProduit  VARCHAR(60),
    idCategorie VARCHAR(6),
    CONSTRAINT FK FOREIGN KEY (idCategorie) REFERENCES Categories(idCategorie) ON DELETE CASCADE
);

 INSERT INTO  Produits VALUES ('','NEW BALANCE ML574', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium at error ad, necessitatibus possimus dignissimos accusantium, molestias quod quas repellendus nostrum id odio! Nihil beatae tempore alias veritatis doloremque sit.
Debitis illo, exercitationt, doloremque vitae reprehenderit saepe modi ex doloribus minima amet accusantium quidem alias quibusdam dignissimos tenetur. Voluptatibus quia quasi quis ducimus, aliquam ratione dignissimos rerum?
Assumenda neque fugiat expedita fuga perspiciatis temporibus voluptatibus exercitationem iste eveniet cupiditate. Tempore nesciunt nobis ducimus ad et placeat.',45.6,'img/chauss6.jpg','C01');

 INSERT INTO  Produits VALUES ('','NIKE', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium at error ad, necessitatibus possimus dignissimos accusantium, molestias quod quas repellendus nostrum id odio! Nihil beatae tempore alias veritatis doloremque sit.
Debitis illo, exercitationem nam, id impedit, doloremque vitae reprehenderit saepe modi ex doloribus minima amet accusantium quidem alias quibusdam dignissimos tenetur. Voluptatibus quia quasi quis ducimus, aliquam ratione dignissimos rerum?
Assumenda neque fugiat expedita fuga perspiciatis temporibus voluptatibus exercitationem iste eveniet cupiditate. Tempore nesciunt nobis ducimus ad et placeat.',36.5,'img/chauss10.jpg','C01');

 INSERT INTO  Produits VALUES ('','NEW NIKE', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium at error ad, necessitatibus possimus dignissimos accusantium, molestias quod quas repellendus nostrum id odio! Nihil beatae tempore alias veritatis doloremque sit.
Debitis illo, exercitationem nam, id impedit, doloremque vitae reprehenderit saepe modi ex doloribus minima amet accusantium quidem alias quibusdam dignissimos tenetur. Voluptatibus quia quasi quis ducimus, aliquam ratione dignissimos rerum?
Assumenda neque fugiat expedita fuga perspiciatis temporibus voluptatibus exercitationem iste eveniet cupiditate. Tempore nesciunt nobis ducimus ad et placeat.',15.75,'img/chauss5.jpg','C01');

 INSERT INTO  Produits VALUES ('','NEW  NIKE 74', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium at error ad, necessitatibus possimus dignissimos accusantium, molestias quod quas repellendus nostrum id odio! Nihil beatae tempore alias veritatis doloremque sit.
Debitis illo, exercitationem nam, id impedit, doloremque vitae reprehenderit saepe modi ex doloribus minima amet accusantium quidem alias quibusdam dignissimos tenetur. Voluptatibus quia quasi quis ducimus, aliquam ratione dignissimos rerum?
Assumenda neque fugiat expedita fuga perspiciatis temporibus voluptatibus exercitationem iste eveniet cupiditate. Tempore nesciunt nobis ducimus ad et placeat.',66.75,'img/chauss2.jpg','C01');

 INSERT INTO  Produits VALUES ('P05','NEW BALANCE ML574', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium at error ad, necessitatibus possimus dignissimos accusantium, molestias quod quas repellendus nostrum id odio! Nihil beatae tempore alias veritatis doloremque sit.
Debitis illo, exercitationem nam, id impedit, doloremque vitae reprehenderit saepe modi ex doloribus minima amet accusantium quidem alias quibusdam dignissimos tenetur. Voluptatibus quia quasi quis ducimus, aliquam ratione dignissimos rerum?
Assumenda neque fugiat expedita fuga perspiciatis temporibus voluptatibus exercitationem iste eveniet cupiditate. Tempore nesciunt nobis ducimus ad et placeat.',976.75,'img/chauss7.jpg','C01');

 INSERT INTO  Produits VALUES ('P06','NEW BALANCE ML574', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium at error ad, necessitatibus possimus dignissimos accusantium, molestias quod quas repellendus nostrum id odio! Nihil beatae tempore alias veritatis doloremque sit.
Debitis illo, exercitationem nam, id impedit, doloremque vitae reprehenderit saepe modi ex doloribus minima amet accusantium quidem alias quibusdam dignissimos tenetur. Voluptatibus quia quasi quis ducimus, aliquam ratione dignissimos rerum?
Assumenda neque fugiat expedita fuga perspiciatis temporibus voluptatibus exercitationem iste eveniet cupiditate. Tempore nesciunt nobis ducimus ad et placeat.',976.75,'img/chauss8.jpg','C01');

 INSERT INTO  Produits VALUES ('P07','NEW BALANCE ML574', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium at error ad, necessitatibus possimus dignissimos accusantium, molestias quod quas repellendus nostrum id odio! Nihil beatae tempore alias veritatis doloremque sit.
Debitis illo, exercitationem nam, id impedit, doloremque vitae reprehenderit saepe modi ex doloribus minima amet accusantium quidem alias quibusdam dignissimos tenetur. Voluptatibus quia quasi quis ducimus, aliquam ratione dignissimos rerum?
Assumenda neque fugiat expedita fuga perspiciatis temporibus voluptatibus exercitationem iste eveniet cupiditate. Tempore nesciunt nobis ducimus ad et placeat.',976.75,'img/chauss9.jpg','C01');

 INSERT INTO  Produits VALUES ('P08','NEW BALANCE ML574', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium at error ad, necessitatibus possimus dignissimos accusantium, molestias quod quas repellendus nostrum id odio! Nihil beatae tempore alias veritatis doloremque sit.
Debitis illo, exercitationem nam, id impedit, doloremque vitae reprehenderit saepe modi ex doloribus minima amet accusantium quidem alias quibusdam dignissimos tenetur. Voluptatibus quia quasi quis ducimus, aliquam ratione dignissimos rerum?
Assumenda neque fugiat expedita fuga perspiciatis temporibus voluptatibus exercitationem iste eveniet cupiditate. Tempore nesciunt nobis ducimus ad et placeat.',976.75,'img/chauss10.jpg','C01');

 INSERT INTO  Produits VALUES ('P09','NEW BALANCE ML574', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium at error ad, necessitatibus possimus dignissimos accusantium, molestias quod quas repellendus nostrum id odio! Nihil beatae tempore alias veritatis doloremque sit.
Debitis illo, exercitationem nam, id impedit, doloremque vitae reprehenderit saepe modi ex doloribus minima amet accusantium quidem alias quibusdam dignissimos tenetur. Voluptatibus quia quasi quis ducimus, aliquam ratione dignissimos rerum?
Assumenda neque fugiat expedita fuga perspiciatis temporibus voluptatibus exercitationem iste eveniet cupiditate. Tempore nesciunt nobis ducimus ad et placeat.',976.75,'img/chauss5.jpg','C01');

 DROP TABLE IF  Utilisateur  EXISTS;
CREATE TABLE Utilisateur(
     idUtilisateur SERIAL VARCHAR(5) PRIMARY KEY ,
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
 
-- ----------------------------------------------------------------
-----------------------------------------------------------------
-----------------------------------------------------------
