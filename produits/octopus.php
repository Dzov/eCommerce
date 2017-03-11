<?php 
  require "includes/objProduit.php"; 
?>

  <header class="flex spaceBtw">
    <h1><?= $octopus -> _name;  ?></h1>
    <h2><?= "$" .$octopus -> _price; ?></h2>
  </header>
  <figure>
    <img src="img/octopus.jpg">
    <figcaption>
      <?php echo $octopus -> _description; ?>
    </figcaption>
  </figure>
  