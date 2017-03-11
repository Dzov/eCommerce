<?php 
  require "includes/objProduit.php"; 
?>

  <header class="flex spaceBtw">
    <h1><?= $rabbit -> _name;  ?></h1>
    <h2><?= "$" .$rabbit -> _price; ?></h2>
  </header>
  <figure>
    <img src="img/rabbit.jpg">
    <figcaption>
      <?php echo $rabbit -> _description; ?>
    </figcaption>
  </figure>
  