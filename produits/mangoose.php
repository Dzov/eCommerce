<?php 
  require "PHPincludes/objProduit.php"; 
?>

  <header class="flex spaceBtw">
    <h1><?= $mangoose -> _name;  ?></h1>
    <h2><?= "$" .$mangoose -> _price; ?></h2>
  </header>
  <figure>
    <img src="img/mangoose.jpg">
    <figcaption>
      <?= $mangoose -> _description; ?>
    </figcaption>
  </figure>
  