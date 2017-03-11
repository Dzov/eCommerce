
<!DOCTYPE html>
<html>
  <head>
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Site e-Commerce</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/flex.css">
  </head>

  <body class="flex flexColumn spaceBtw">
    <header class=" header flex spaceBtw mainHeader">
      <h1>Get some weird stuff</h1>
      <a href="shoppingPage.php" class="cartBtn"></a>
    </header>
    <main class="mainSection flex spaceAround"> 
      <aside>
        <h2>Product List</h2>
        <h3><a href="stock.php">Stock</a></h3>
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
      <article class="flex flexColumn spaceAround productArticle">
        <?php includeMainArticle(); ?>
        <a href="index.php?content=<?= $getContent ?>&amp;cartItem=<?= basename($getContent, '.php') ?>" class="addBtn btn selfCenter">
          Add to cart
        </a>
      </article> 
    </main>
    <?php include "includes/footer.php" ?>
  </body>
</html>