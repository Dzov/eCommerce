<?php 
  require "PHPincludes/objProduit.php"; 
?>

  <header class="flex spaceBtw">
    <h1><?= $lizard -> _name;  ?></h1>
    <h2><?= "$" .$lizard -> _price; ?></h2>
  </header>
  <figure>
    <img src="img/lizard.jpg">
    <figcaption>
      <?= $lizard -> _description; ?>
    </figcaption>
  </figure>
  