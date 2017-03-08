<?php 
  session_start(); 

  $article_dir = "produits"; 
  $getContent = $_GET["content"]; 
  $article_Path = "$article_dir/$getContent";
  $article_Files = array_reverse(array_diff(scandir("produits"), array('..', '.', '.DS_Store')));
  $last_Article = $article_Files[0]; 


  // Adds items to cart key/value pair
  if(isset( $_GET['cartItem'] )) {
    $carts = isset($_SESSION['cartItems']) ? $_SESSION['cartItems'] : array();
    $cartItem = $_GET['cartItem']; 
    if (array_key_exists($cartItem, $carts)) {
      $carts[$cartItem]++;
    } else {
      $carts[$cartItem] = 1;
    }
    $_SESSION['cartItems'] = $carts;
  }


  function includeMainArticle() {
    global $getContent;
    global $article_Path; 
    global $article_dir; 
    global $last_Article; 

    if (isset($getContent)) { 
      if (dirname(realpath($article_Path)) == realpath("./$article_dir")) {
        include $article_Path; 
      } 
      else {
        echo "Erreur 404"; 
      }
    } 
    else {
      include  "./productPres.php";
    }
  }




  include 'skeleton.php';
?>