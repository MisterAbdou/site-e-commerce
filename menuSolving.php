
<?php
// ecriture des requetes pour recuperer les infos dans la base de donnees
     
     // recuperation des variables declarees
     include("variables.php");
     // recupereration des functions de connexions et de deconnexions
     include("function.php");
      $con=openDataBase();
     if(!$con){
           echo" ouverture base de donnees echoues";
     }
      
          $categorie;
          if(isset($_GET['id'])){
            $categorie=$_GET['id'];
          }
     
         // requete pour interroger la base
          $requetes="SELECT nomProduit,prix,imageProduit,descriptionProduit
           FROM `Produits`
           where `idCategorie` ='$categorie'
           LIMIT 8  ";
     
     // recuperation resultats(tableau)
      $results =mysqli_query($con,$requetes);
                               
?>
