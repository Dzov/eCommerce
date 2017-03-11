<?php 
  session_start(); 

  include "includes/variables.php"; 
  require "includes/objProduit.php"; 

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
  <title>Shopping Cart</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/flex.css">
</head>
<body class="flex flexColumn spaceBtw">
  <header class="header">
    <h1>Shopping Cart Items</h1>
  </header>
  <main class="flex flexColumn alignItemsCenter">
    
    <section class="cartSection">
      <?php 
        foreach ($_SESSION['cartItems'] as $item => $value) { 
      ?>
        <div class="itemContainer flex spaceBtw">
          <img class="itemImg" src="img/<?= $item ?>.jpg">
          <p class='cartItems selfCenter'> 
            <!-- Displays name of item with capital first letter -->
            <?=  ucfirst($item) . ": x" . $value ?>
          </p> 
          <div class="itemControls_container selfCenter">
            <a  href="shoppingPage.php?plus=<?=$item?>" class="itemControl plusControl">
              Add
            </a>
            <a href="shoppingPage.php?minus=<?=$item?>" class="itemControl minusControl">
              Remove
            </a>
            <a href="shoppingPage.php?deleteItem=<?=$item?>" class="itemControl deleteContol">
              Delete
            </a>
          </div>
        </div> <!-- END cartItem_Container -->
      <?php 
        } 
      ?>
    </section>
    <a class="backToShopBtn btn" href="index.php?content=<?=$last_Article?>">
      Continue Shopping
    </a>
  </main>
  <?php include "includes/footer.php" ?>
</body>
</html>