 <!--  formulaire -->

 <?php include("index.php");?>
 <div class="overlay"></div>
 <div class="container">
  <form action="traitementformulaire.php" method="POST" id="f1"  >
     <label for="nom"> Nom: </label>
     <input type="text" name="nom" id="n" placeholder="ndiaye" require> <br>
     
     <label for="prenom">Prenom:</label>
     <input type="text" name="prenom" id="pr" placeholder="abdou" require> <br>

     <label for="datenaiss">Date de naissance:</label>
     <input type="date" name="datenaiss" id="dat" require> <br>

     <label for="email">Email:</label>
     <input type="email" name="email" id="eml" require> <br>

     <label for="mot_de_passe">Mot de passe:</label>
     <input type="password" name="mot_de_passe" id="cf" required> <br>

     <label for="mot_de_passe">Confirmer votre mot de passe:</label>
     <input type="password" name="mot_de_passe1" id="mts" required>

     <div class="nav-validate">
         <input type="submit" name="inscription" id="c" value="valider">
         <input type="reset" name="annuler" id="a" value="annuler">
    </div>
  </form>
  <form action="traitementformulaire.php" method="POST" id="f2">
     <label for="email">Email:</label>
     <input type="email" name="email" id="em" require> <br>

     <label for="mot_de_passe">Mot de passe:</label>
     <input type="password" name="mot_de_passe" id="mt" require> <br> 
     
     <div class="nav-validate">
         <input type="submit" name="connecter" id="conn" value="se connecter">
         <input type="reset" name="annuler" id="ann" value="annuler">
         <input type="button" name="inscrire" id="ins" value="s'inscrire">
    </div>   
  </form>
</div> 
 <?php  include("footer.php");?>
 <script src="js/connexion.js"></script>
