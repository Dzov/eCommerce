<?php 
  session_start(); 

  include "includes/variables.php"; 

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

  // includes the product page depending on product selected in list
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