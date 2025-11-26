<?php
      $categorie=isset($_GET['id']) ? $_GET['id'] :null;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vente en ligne</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/formulaire.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
      <div class="nav-bare">
        <div class="nav-haut">
            <div class="logo">
                 <a href="#"><img src="img/images.png" alt=""></a>
            </div>
            <div class="panier">
                   <a href="formulaire.php">mon espace</a>
                   <a href="">mon panier</a>

            </div>
        </div>
        <div class="nav-bas">
            <ul class="nav-list">
                <li><a href="index.php?id=C00" class="btn"  >NOUVEAUTES</a></li>
                <li><a href="index.php?id=C01" class="btn"  >CHAUSSURES</a></li>
                <li><a href="index.php?id=C02" class="btn"  >VETEMENTS</a></li>
                <li><a href="index.php?id=C03" class="btn"  >ACCESSOIRES</a></li>
                <li><a href="index.php? id=C04" class="btn"  >FEMME</a></li>
                <li><a href="index.php? id=C05" class="btn"   >ENFANT</a></li>
                <li><a href="index.php?id=C06" class="btn"   >SOLDES</a></li>
                <li><a href="index.php?id=C07" class="btn"  >MARQUES</a></li>
                <li><a href="index.php? id=C08" class="btn"  >BLOCS</a></li>
            </ul>
        </div>
         
      </div>
      <div class="image" data-aos="fade-left">
            <img src="img/chaussure1.png" alt="">
       </div>
     <?php 
      include("menu.php");
      include("footer.php");
      ?>
      
<script src="js/menu.js"></script>
<script src="js/index.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js" ></script>
<script>
    AOS.init({
         duration: 1000,
         once: true
 });
</script>
</body>
</html>