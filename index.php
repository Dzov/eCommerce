<?php 
  session_start(); 
  // require "PHPincludes/objProduit.php"; 

  $article_dir = "produits"; 
  $getContent = $_GET["content"]; 
  $article_Path = "$article_dir/$getContent";
  $article_Files = array_diff(scandir($article_dir), array('..', '.', '.DS_Store')); 
  $last_Article = $article_Files[0]; 


  // require "includes/classProduit.php"; 

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


  // includes either the product page or the welcome page
  // called in skeleton.php
  function includeSection() {
    global $getContent;
    $productPage_dir = "HTMLincludes"; 
    $productPage_path = "$productPage_dir/productArticle.php";

    if (isset($getContent)) { 
      if (dirname(realpath($productPage_path)) == realpath("./$productPage_dir")) {
        include $productPage_path; 
      } 
      else {
        echo "Erreur 404"; 
      }
    } 
    else {
      include  "HTMLincludes/welcome.php";
    }
  }


  // includes the product page depending on product selected in list
  // called in HTMLincludes/productArticle.php
  function includeProductPage() {
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
  }






  include 'skeleton.php';
?>