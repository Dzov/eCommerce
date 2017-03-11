<?php 
  require "PHPincludes/objProduit.php"; 
?>

  <header class="flex spaceBtw ">
    <h1><?= $elephant -> _name;  ?></h1>
    <h2><?= "$" .$elephant -> _price; ?></h2>
  </header>
  <figure>
    <img src="img/elephant.jpg">
    <figcaption>
      <?= $elephant -> _description; ?>
    </figcaption>
  </figure>
  