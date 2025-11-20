<?php
    include("function.php");
   // partie permettant de recuperer les infos  sur le formaulaire
     $nomUtilisateur=$_POST["nom"];
     $prenomUtilisateur=$_POST["prenom"];
     $email=$_POST["email"];
     $motDePasse=$_POST["mot_de_passe"];
     $motDePasseV=&$_POST["mot_de_passe"];
     $dateNaiss=$_POST["datenaiss"];
     $con=openDataBase();
     // traitement 
  if( isset($nomUtilisateur) && isset($prenomUtilisateur) && isset($email) &&isset($motDePasse)&& isset($motDePasseV)&&  isset($dateNaiss))
  {
    if( !filter_var($email)) {
         echo"Donner un email valide ";
     }else {
        if( $motDePasse !=$motDePasseV){
               echo " mot de passe invalide";
         }else{
        $requete= " INSERT INTO `Utilisateur` VALUES ('','$email','$motDePasse','$nomUtilisateur','$prenomUtilisateur','$dateNaiss')";
         if( !mysqli_query($con,$requete)){
             echo" requete invalide";
         }
     }
     }
   
   }
   closeDataBase();
?>