<?php 

  $article_dir = "produits"; 
  $getContent = $_GET["content"]; 
  $article_Path = "$article_dir/$getContent";
  $article_Files = array_reverse(array_diff(scandir("produits"), array('..', '.', '.DS_Store')));
  $last_Article = $article_Files[0]; 


?>