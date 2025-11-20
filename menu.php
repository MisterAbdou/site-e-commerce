
<?php
     include("variables.php");
     include("menuSolving.php");
?>

<div class="menu">
    <div class="container c1">
          <div class="item i1">
              <!-- <img src="img/chauss0.jpg" alt="">     -->
          </div>
          <div class="item i2">
             <!-- <img src="img/chauss7.jpg" alt=""> -->
          </div>
    </div>
    <div class="container c2">

      <?php while($ligne=mysqli_fetch_row($results)):?>
      <?php 
          $nomProduit=$ligne[0];
          $prix=$ligne[1];
          $image=$ligne[2];
          $description=$ligne[3];
      ?>
      <div class="bloc b1">
            <div class="txt">
                 <p> <?php  echo strip_tags($nomProduit)?></p>
                 <span><?php echo strip_tags($prix)?>$</span>
            </div>
            <div class="img-produit">
                <img src="<?php echo $image?>" alt="">
            </div>
        </div> 
        <?php endwhile; ?>
<div class="individual" >
    <div class="produit">
           <img src="<?php echo $image ?>" alt="">             
     </div>
      <div class="details">
              <div class="taille1">
                 <?php  echo strip_tags($nomProduit)?>
                  <span><?php echo strip_tags($prix)?>$</span>
              </div>
              <div class="taille2">
                     <hr>
                    <p><?php echo strip_tags($description)?></p>
              </div>
              <div class="taille3">
                     <a href=""><i></i>AJOUTER</a>
              </div>
         </div>
      </div>
    </div>
</div>