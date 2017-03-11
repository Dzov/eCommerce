<?php 
  require "PHPincludes/objProduit.php"; 
?>

  <header class="flex spaceBtw">
    <h1><?= $plumbus -> _name;  ?></h1>
    <h2><?= "$" .$plumbus -> _price; ?></h2>
  </header>
  <figure>
    <img src="img/plumbus.jpg">
    <figcaption>
      <?= $plumbus-> _description; ?>
    </figcaption>
  </figure>
  