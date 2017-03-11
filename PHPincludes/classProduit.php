<?php 

class Produit {
  public $_name;
  public $_image; 
  public $_description;  
  public $_price; 
  public $_cartCount; 
  private $_stock;

  public function __construct($name, $image, $description, $price, $cartCount, $stock) {
    $this -> _name = $name; 
    $this -> _image = $image; 
    $this -> _description = $description; 
    $this -> _price = $price; 
    $this -> _cartCount = $cartCount; 
    $this -> _stock = $stock; 
  }

  public function addToStock($num) {
    $this -> _stock += $num; 
    return $this -> _stock; 
  }

  public function removeFromStock($num) {
    $this -> _stock -= $num; 
    return $this -> _stock; 
  }

  public function addCartCount($num) {
    $this -> _cartCount += $num; 
    return $this -> _cartCount; 
  }

  public function removeCartCount($num) {
    $this -> _cartCount -= $num; 
    return $this -> _cartCount; 
  }

  public function calcPrice() {
    return $this -> _price * $this -> _cartCount; 
  }
  
} 



?>