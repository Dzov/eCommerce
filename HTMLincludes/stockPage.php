<?php 
  include "../PHPincludes/variables.php" ;
  include "../PHPincludes/objProduit.php" ; 
?>


<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content = "width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>Stock</title>
      <link rel="stylesheet" type="text/css" href="css/normalize.css">
      <link rel="stylesheet" type="text/css" href="../css/main.css">
      <link rel="stylesheet" type="text/css" href="../css/flex.css">
    </head>

    <body>
      <?php include "../HTMLincludes/header.php";  ?>
      <main class="flex flexColumn alignItemsCenter justifyCenter">
        <h1 class="titleDisplay">Current Stock</h1>
        <section class="stockSection boxDisplay">
          <?php 
              foreach ($prodObjects as $produit) { 
            ?>
              <div class="itemContainer flex spaceBtw">
                <img class="itemImg" src="../img/<?= $produit -> _image ?>">
                <ul class="cartItemsList selfCenter flex spaceBtw">
                  <li><?= $produit -> _name ?></li>
                  <li><?= $produit -> addToStock(0); ?></li>
                </ul>
                <div class="flex selfCenter">
                  <a  href="stockPage.php?plus=<?= $produit -> _name ?>" class="itemControl plusControl"></a>
                  <a href="stockPage.php?minus=<?= $produit -> _name ?>" class="itemControl minusControl"></a>
                  <a href="stockPage.php?deleteItem=<?= $produit -> _name ?>" class="itemControl deleteControl"></a>
                </div>
              </div> <!-- END cartItem_Container -->
            <?php 
              } 
            ?>
        </section>
      </main>
      <?php include "./footer.php" ?>
    </body>

  </html>