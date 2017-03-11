<?php 
  require "PHPincludes/objProduit.php"; 
?>

  <header class="flex spaceBtw">
    <h1><?= $turtle -> _name;  ?></h1>
    <h2><?= "$" .$turtle -> _price; ?></h2>
  </header>
  <figure>
    <img src="img/turtle.jpg">
    <figcaption>
      <?= $turtle -> _description; ?>
    </figcaption>
  </figure>
  