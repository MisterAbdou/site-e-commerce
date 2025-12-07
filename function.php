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


?>