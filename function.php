<?php

   // fonction permettant de verifier la connexion dans la base de donnees
   $connexion;
   function openDataBase(){
       $connexion=mysqli_connect("localhost","root","");
        if( $connexion == false){
              echo " connexion impossible";
        }
        $dataBase=mysqli_select_db($connexion,"e-commerce");
        if(!$dataBase){
              echo " base de donnees non trouve";
        }
         
        return $connexion;
   }
   function closeDataBase(){
         if( mysqli_close($connexion) == false){
             echo "impossible de se deconnecter";
         }
   }
?>