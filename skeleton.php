<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content = "width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Site e-Commerce</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/flex.css">
  </head>

  <body >
    <header class=" header flex spaceBtw ">
      <h1 class="brand selfCenter"><a href="index.php">RandShop</a></h1>
      <div class="flex">
        <a href="HTMLincludes/shoppingPage.php" class="cartBtn"></a>
        <a href="HTMLincludes/stockPage.php" class="stockBtn"></a>
      </div>
    </header>
    <main class="mainSection spaceBtw alignItemsCenter flex"> 
      <aside class="asideSection flex flexColumn justifyCenter">
        <h2>Get some weird stuff</h2>
        <ul class="articleNav_list">
          <?php 
            foreach ($article_Files as $produit) { 
            $produit_Name = basename($produit, '.php');
          ?> 
            <li class='flex spaceBtw articleNav_listItems'>
              <a href='index.php?content=<?= $produit ?>'> 
                <?= ucfirst($produit_Name) ?> 
              </a> 
            </li>
          <?php 
            } 
          ?>
        </ul>
      </aside>
      <?php includeSection();  ?>
    </main>
    <?php include "HTMLincludes/footer.php" ?>
  </body>
</html>