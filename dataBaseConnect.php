<?php 

 include("config/configuration.php");
     
     // connexion a la base de donnees
     try{
          $mysqlClient= new PDO("mysql:host=$hostName;dbname=$dataBaseName;charset=utf8",
          "$userName",
          "$passWord"
        );
     }catch(Exception $e){
        echo "Erreur :".$e->getMessage();
     }
?>