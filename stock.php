<?php 
  include "includes/variables.php" ;
  include "includes/objProduit.php"; 
?>


<!DOCTYPE html>
  <html>
    <head>
      <title>Stock</title>
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <link rel="stylesheet" type="text/css" href="css/flex.css">
    </head>

    <body>
      <header class="flex header"> 
        <a class="btn" href="index.php?content=<?=$last_Article?>">
          Back to store
        </a>
      </header>
      <main>
        <?php 
          foreach ($prodObjects as $produit) { 
        ?>
          <li><?= $produit -> _name ?> : <?= $produit -> addToStock(0); ?></li>
        <?php 
          } 
        ?>
      </main>
      <?php include "includes/footer.php" ?>
    </body>

  </html>