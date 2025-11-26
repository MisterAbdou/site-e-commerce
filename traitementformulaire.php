<?php 
     include("variables.php");
     include("function.php");

       if(isset($_POST["connecter"])){
           $email=$_POST['email'];
           $motDePasse=$_POST['mot_de_passe'];
           $reponse = seConnecter($email,$motDePasse);
           if ($reponse) {
                 echo "<script>alert('Connexion réussie'); window.location.href='index.php';</script>";
           } else {
                echo "<script>alert('Email ou mot de passe incorrect'); window.history.back();</script>";
             }
       }

      if(isset($_POST["inscription"])){
         $nom = $_POST['nom'];
         $prenom = $_POST['prenom'];
         $email = $_POST['email'];
         $date = $_POST['datenaiss'];
         $mot1 = $_POST['mot_de_passe'];
         $mot2 = $_POST['mot_de_passe1'];
         inscription($nom, $prenom, $email, $mot1, $mot2, $date);
         echo "<script>alert('Inscription réussie'); window.location.href='index.php';</script>";
      }

?>

      
