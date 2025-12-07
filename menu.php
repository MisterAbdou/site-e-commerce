
<?php
     include("variables.php");
?>

<div class="menu" data-aos="fade-up" >
    <div class="container c1" data-aos="fade-down-right">
          <div class="item i1">
              <img src="img/chauss0.jpg" alt="">    
          </div>
          <div class="item i2" data-aos="fade-down-left">
             <img src="img/chauss7.jpg" alt="">
          </div>
    </div>
    <div class="container c2" id="menu-id">

      <?php  foreach( $tabProduit as $ligne ):?>
      <?php 
        //    nomProduit,descriptionProduit,prix,imageProduit,idCategorie
          $nomProduit=$ligne['nomProduit'];
          $prix=$ligne['prix'];
          $image=$ligne['imageProduit'];
          $description=$ligne['descriptionProduit'];
      ?>
      <div class="bloc b1" data-aos="zoom-in-right">
            <div class="txt">
                 <p> <?php  echo strip_tags($nomProduit)?></p>
                 <span><?php echo strip_tags($prix)?>$</span>
            </div>
            <div class="img-produit">
                <img src="<?php echo $image?>" alt="">
            </div>
        </div> 
        <?php endforeach; ?>
     
  <div class="individual" data-aos="zoom-out-left">
    <div class="produit">
           <img src="<?php echo $image ?>" alt="">             
     </div>
      <div class="details">
              <div class="taille1">
                  <p> <?php  echo strip_tags($nomProduit)?></p>
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
<?php ?> 