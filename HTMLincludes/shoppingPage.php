<?php 
  session_start(); 

  include "../PHPincludes/variables.php"; 
  require "../PHPincludes/objProduit.php"; 

  // Deletes the item
  if(isset($_GET['deleteItem'])) {
    unset($_SESSION['cartItems'][$_GET['deleteItem']]) ; 
  }

  //removes one from item value
  if (isset($_GET['minus'])) {
    if ($_SESSION['cartItems'][$_GET['minus']] > 0) {
      $_SESSION['cartItems'][$_GET['minus']] --; 
      if ($_SESSION['cartItems'][$_GET['minus']] == 0) { 
        unset($_SESSION['cartItems'][$_GET['minus']]); 
      }
    }
  }

  // adds one to item value 
  if (isset($_GET['plus'])) {
      $_SESSION['cartItems'][$_GET['plus']] ++; 
  }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content = "width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Shopping Cart</title>
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <link rel="stylesheet" type="text/css" href="../css/flex.css">
</head>
<body class="flex flexColumn spaceBtw">
  <?php include "../HTMLincludes/header.php"; ?>
  <main class="flex flexColumn alignItemsCenter justifyCenter">
    <h1 class="titleDisplay">Shopping Cart</h1>
    <section class="cartSection boxDisplay">
      <?php 
        if (count($_SESSION['cartItems']) > 0) {
          foreach ($_SESSION['cartItems'] as $item => $value) { 
        ?>
          <div class="itemContainer flex spaceBtw">
            <img class="itemImg" src="../img/<?= $item ?>.jpg">
            <ul class="cartItemsList selfCenter flex spaceBtw">
              <li class="cartItem"><?= ucfirst($item) ?></li>
              <li class="cartItem"><?= $value ?></li>
              <li class="cartItem">UnitPrice</li>
              <li class="cartItem">Total</li>
            </ul>
            <div class="flex selfCenter">
              <a  href="shoppingPage.php?plus=<?=$item?>" class="itemControl plusControl"></a>
              <a href="shoppingPage.php?minus=<?=$item?>" class="itemControl minusControl"></a>
              <a href="shoppingPage.php?deleteItem=<?=$item?>" class="itemControl deleteControl"></a>
            </div>
          </div> <!-- END cartItem_Container -->
        <?php 
          } 
        } else {
          echo "<p class='emptyCart_para'>Your cart is empty</p>"; 
        }
        ?>
    </section>
    <a class="backToShopBtn btn" href="../index.php?content=<?=$last_Article?>">
      Continue Shopping
    </a>
  </main>
  <?php include "./footer.php" ?>
</body>
</html>