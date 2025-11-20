 <!--  formulaire -->

  <?php  include("index.php");?>
 <div class="overlay"></div>
 <div class="container">
  <form action="formsolvingSub.php" method="POST" id="f1"  >
     <label for="nom"> Nom: </label>
     <input type="text" name="nom" id="" placeholder="ndiaye" require> <br>
     
     <label for="prenom">Prenom:</label>
     <input type="text" name="prenom" id="" placeholder="abdou" require> <br>

     <label for="datenaiss">Date de naissance:</label>
     <input type="date" name="datenaiss" id="" require> <br>

     <label for="email">Email:</label>
     <input type="email" name="email" id="" require> <br>

     <label for="mot_de_passe">Mot de passe:</label>
     <input type="password" name="mot_de_passe" id="" require> <br>

     <label for="mot_de_passe">Confirmer votre mot de passe:</label>
     <input type="password" name="mot_de_passe" id="" require>

     <div class="nav-validate">
         <input type="submit" name="connecteer" id="" value="envoyer">
         <input type="reset" name="annuler" id="" value="annuler">
         <input type="button" name="inscrire" id="" value="sinscrire">
    </div>
  </form>
  <form action="formsolvingCon" method="POST" id="f2">
     <label for="email">Email:</label>
     <input type="email" name="email" id="" require> <br>

     <label for="mot_de_passe">Mot de passe:</label>
     <input type="password" name="mot_de_passe" id="" require> <br> 
     
     <div class="nav-validate">
         <input type="submit" name="connecteer" id="" value="envoyer">
         <input type="reset" name="annuler" id="" value="annuler">
         <input type="button" name="inscrire" id="" value="s'inscrire">
    </div>   
  </form>
</div> 
 <?php  include("footer.php");?>