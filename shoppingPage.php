<?php 
  session_start(); 
?>


<!DOCTYPE html>
<html>
<head>
  <title>Shopping Cart</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/flex.css">
</head>
<body>
  <main class="flex flexColumn alignItemsCenter">
    <section class="cartSection">
      <h1>Shopping Cart Items</h1>
      <?php foreach ($_SESSION['cartItems'] as $item => $value) { ?>
        <p class='cartItems'> <?= $value . "x : " . ucfirst($item) ?> </p> 
      <?php } ?>
    </section>
    <a class="backToShopBtn btn" href="index.php">Continue Shopping</a>
  </main>
</body>
</html>