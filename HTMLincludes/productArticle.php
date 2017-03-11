<?php 
  include "../PHPincludes/variables.php"; 
  include "../index.php"; 

?>

<section class="productSection flex justifyCenter">
  <article class="flex flexColumn boxDisplay productArticle">
    <?php includeProductPage(); ?>
    <a href="index.php?content=<?= $getContent ?>&amp;cartItem=<?= basename($getContent, '.php') ?>" class="addCartBtn btn selfCenter">
      Add to cart
    </a>
  </article> 
</section>