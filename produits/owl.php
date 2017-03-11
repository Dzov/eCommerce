<?php 
  require "PHPincludes/objProduit.php"; 
?>

  <header class="flex spaceBtw">
    <h1><?= $owl -> _name;  ?></h1>
    <h2><?= "$" .$owl -> _price; ?></h2>
  </header>
  <figure>
    <img src="img/owl.jpg">
    <figcaption>
      <?= $owl -> _description; ?>
    </figcaption>
  </figure>
  