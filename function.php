<?php
      include("./variables.php");
  function seConnecter($emailUser,$motpasseUser):bool{
      global $Users;
      $reponse=false;
      if( isset($emailUser) && isset( $motpasseUser) ){
        if( !filter_var($emailUser, FILTER_VALIDATE_EMAIL) ){
                echo " <script> alert(Il faut un email valide pour soumettre le formulaire); </script>";
        }else{
             foreach($Users as $user){
                 if( $user["email"] == $motpasseUser && $user['idUtilisateur'] == $emailUser ){
                        $reponse=true;
                 }
             }
        }
     }else{   
          echo " <script> alert(vueiller saisir correctement les formulaires); </script>";  
     }
      return $reponse;
}
    function inscription ($nomUtilisateur,$prenomUtilisateur,$email,$motDePasse,$motDePasseV,$dateNaiss){
         $reponse=false;
         global $mysqlClient;
          if( isset($nomUtilisateur) && isset($prenomUtilisateur) && isset($email) &&isset($motDePasse)&& isset($motDePasseV)&&  isset($dateNaiss))
           {
                if( !filter_var($email,FILTER_VALIDATE_EMAIL)) {
                    echo"<script> alert('donner un email valide !!')</script>";
                 }else {
                       if( $motDePasse ==$motDePasseV  && !seConnecter($email,$motDePasse)){
                           $requete= " INSERT INTO `Utilisateur`(`email`,`mot_de_passe`,`nom`,`prenom`,`date_de_naissance`) ;
                           VALUES ('$email','$motDePasse','$nomUtilisateur','$prenomUtilisateur','$dateNaiss')";

                           $requeteUser=$mysqlClient->prepare($requete);
                           $requeteUser->execute();
                            $reponse=true;
                      }else{
                              echo"<script> alert('mot de pass invalide ou utilisateur existe deja ');</script>";
                        } 
                   }
           }

           return $reponse;
       }

       // fonction permettant d'afficher le menu
    //     function interrogerMenu(){
    //      $con=openDataBase();
             
    //           if(isset($_GET['id']))
    //           $categorie=$_GET['id'];
      
    //          // requete pour interroger la base
    //          $requetes="SELECT nomProduit,prix,imageProduit,descriptionProduit
    //          FROM `Produits`
    //           where `idCategorie` ='$categorie'
    //           LIMIT 8  ";
    //         // recuperation resultats(tableau)
    //           $results =mysqli_query($con,$requetes);
    //           return $results;
    //  }   // fonction permettant de verifier la connexion dans la base de donnees
  //  function openDataBase(){
  //      $connexion=mysqli_connect("localhost","root","");
  //       if( $connexion == false){
  //                   echo"<script> alert('connexion impossible')</script>";
              
  //       }
  //       $dataBase=mysqli_select_db($connexion,"e-commerce");
  //       if(!$dataBase){
  //                   echo"<script> alert('base de donnee non trouve')</script>";
              
  //       }
         
  //       return $connexion;
  //  }
  //   function closeDataBase(){
  //        if( mysqli_close(openDataBase()) == false){
  //                   echo"<script> alert('impossible de se connecter')</script>";
             
  //        }
  //  }

     
  
?>