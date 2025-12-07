<?php
      include("./dataBaseConnect.php");
      // partie traitant les produits
       $categorie;
       if(isset($_GET['id'])){
          $categorie=$_GET['id'];   
       }
       global $mysqlClient;
       // requete pour interroger la base
      $requeteProduits="SELECT nomProduit,prix,imageProduit,descriptionProduit
                        FROM `Produits`
                        where `idCategorie` ='$categorie'
                        LIMIT 8  ";

      $preparer=$mysqlClient->prepare($requeteProduits);
      $preparer->execute();
      $tabProduit=$preparer->fetchAll();


      // partie traitant les utilisateurs
       $requetesUser=" SELECT idUtilisateur, email
                      FROM `Utilisateur`";
       $preparerUser=$mysqlClient->prepare($requetesUser);
       $preparerUser->execute();
       $Users=$preparerUser->fetchAll();

    
        
     //   $compteur=0;
?>