<?php 
  require "PHPincludes/objProduit.php"; 
?>

  <header class="flex spaceBtw">
    <h1><?= $spider -> _name;  ?></h1>
    <h2><?= "$" .$spider -> _price; ?></h2>
  </header>
  <figure>
    <img src="img/spider.jpg">
    <figcaption>
      <?= $spider -> _description; ?>
    </figcaption>
  </figure>
  