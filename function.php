<?php
      include("variables.php");
   // fonction permettant de verifier la connexion dans la base de donnees
   function openDataBase(){
       $connexion=mysqli_connect("localhost","root","");
        if( $connexion == false){
                    echo"<script> alert('connexion impossible')</script>";
              
        }
        $dataBase=mysqli_select_db($connexion,"e-commerce");
        if(!$dataBase){
                    echo"<script> alert('base de donnee non trouve')</script>";
              
        }
         
        return $connexion;
   }
    function closeDataBase(){
         if( mysqli_close(openDataBase()) == false){
                    echo"<script> alert('impossible de se connecter')</script>";
             
         }
   }
      
  function seConnecter($emailUser,$motpasseUser){
      $email=$emailUser;
      $motdepasse=$motpasseUser;
      if( isset($email) && isset( $connexion) ){
         $con=openDataBase();
         $requete="SELECT COUNT(*) 
                   FROM  `  Utilisateur`
                   WHERE  `idUtilisateur` ='$motdepasse'
         ";

         $tableau=mysqli_query($con,$requete);
         return $tableau;
  }
}
    function inscription ($nom,$prenom,$email1,$motDePass,$motpass2,$cdatenaiss){
          $nomUtilisateur=$nom;
          $prenomUtilisateur=$prenom;
          $email=$email1;
          $motDePasse=$motDePass;
          $motDePasseV=$motpass2;
          $dateNaiss=$cdatenaiss;
          $con=openDataBase();
          // traitement 
          if( isset($nomUtilisateur) && isset($prenomUtilisateur) && isset($email) &&isset($motDePasse)&& isset($motDePasseV)&&  isset($dateNaiss))
           {
                if( !filter_var($email)) {
                    echo"<script> alert('donner un email valide !!')</script>";
                 }else {
                       if( $motDePasse !=$motDePasseV){
                    echo"<script> alert('mot de pass invalide)script>";
                      }else{
                          $requete= " INSERT INTO `Utilisateur`(`email`,`mot_de_passe`,`nom`,`prenom`,`date_de_naissance`) VALUES ('$email','$motDePasse','$nomUtilisateur','$prenomUtilisateur','$dateNaiss')";
                           if( !mysqli_query($con,$requete)){
                             echo"<script> alert('element exist deja !!')</script>";      
                            }
                       }
                   }  
           }
       }

       // fonction permettant d'afficher le menu
        function interrogerMenu(){
         $con=openDataBase();
             
              if(isset($_GET['id']))
              $categorie=$_GET['id'];
      
             // requete pour interroger la base
             $requetes="SELECT nomProduit,prix,imageProduit,descriptionProduit
             FROM `Produits`
              where `idCategorie` ='$categorie'
              LIMIT 8  ";
            // recuperation resultats(tableau)
              $results =mysqli_query($con,$requetes);
              return $results;
     }
     
  
?>