<?php 
  require "includes/objProduit.php"; 
?>

  <header class="flex spaceBtw">
    <h1><?= $mangoose -> _name;  ?></h1>
    <h2><?= "$" .$mangoose -> _price; ?></h2>
  </header>
  <figure>
    <img src="img/mangoose.jpg">
    <figcaption>
      <?php echo $mangoose -> _description; ?>
    </figcaption>
  </figure>
  