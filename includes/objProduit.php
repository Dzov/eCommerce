<?php 

  require "includes/classProduit.php";

  $lizard = new Produit(
    "Lizard", 
    "This is a lizard", 
    35.8, 
    0, 
    10
  );

  $mangoose = new Produit(
    "Mangoose", 
    "This is a mangoose", 
    45.5, 
    0, 
    10
  ); 

  $octopus = new Produit(
    "Octopus", 
    "This is a blue-ringed octopus", 
    132, 
    0, 
    10
  );

  $rabbit = new Produit(
    "Rabbit", 
    "This is a rabbit", 
    13.4, 
    0, 
    10
  );

  $turtle = new Produit(
    "Turtle", 
    "This is a dead turtle", 
    52, 
    0, 
    10
  );



$prodObjects = [$mangoose, $lizard, $octopus, $rabbit, $turtle]; 



?>