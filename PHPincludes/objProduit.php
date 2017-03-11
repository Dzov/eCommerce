<?php 

  require "classProduit.php";

// class parametres : name, image, description, price, cartCount, stockCount

  $lizard = new Produit(
    "Lizard", 
    "lizard.jpg",
    "This is a lizard", 
    35.8, 
    0, 
    10
  );

  $mangoose = new Produit(
    "Mangoose", 
    "mangoose.jpg", 
    "This is a mangoose", 
    45.5, 
    0, 
    10
  ); 

  $octopus = new Produit(
    "Octopus", 
    "octopus.jpg", 
    "This is a blue-ringed octopus", 
    132, 
    0, 
    10
  );

  $rabbit = new Produit(
    "Rabbit", 
    "rabbit.jpg", 
    "This is a skeptic rabbit", 
    13.4, 
    0, 
    10
  );

  $turtle = new Produit(
    "Turtle", 
    "turtle.jpg", 
    "This is a dead turtle", 
    52, 
    0, 
    10
  );

  $dragon = new Produit(
    "Dragon", 
    "dragon.jpg", 
    "This is a dragon", 
    107.99, 
    0, 
    10
  );


  $elephant = new Produit(
    "Elephant", 
    "elephant.jpg", 
    "This is a weird little elephant in a sweater", 
    309, 
    0, 
    10
  );


  $owl = new Produit(
    "Owl", 
    "owl.jpg",
    "This is a purple owl, believe it or not", 
    99.9, 
    0, 
    10
  );


  $spider = new Produit(
    "Spider", 
    "spider.jpg", 
    "This is a creepy lil spider", 
    72.5, 
    0, 
    10
  );

  $plumbus = new Produit(
    "Plumbus", 
    "plumbus.jpg", 
    "This is a plumbus, everyone has a plumbus at home! <a href='https://www.youtube.com/watch?v=SWMGd_rzRdY'>Check this out to know how plumbuses are made.</a> ", 
    100, 
    0, 
    30
  ); 




$prodObjects = [$mangoose, $lizard, $octopus, $rabbit, $turtle, $dragon, $elephant, $owl, $spider, $plumbus]; 



?>