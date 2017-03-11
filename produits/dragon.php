<?php 
  require "PHPincludes/objProduit.php"; 
?>

  <header class="flex spaceBtw">
    <h1><?= $dragon -> _name;  ?></h1>
    <h2><?= "$" .$dragon -> _price; ?></h2>
  </header>
  <figure>
    <img src="img/dragon.jpg">
    <figcaption>
      <?= $dragon -> _description; ?>
    </figcaption>
  </figure>
  