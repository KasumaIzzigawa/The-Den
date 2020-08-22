<?php
  require "../models/config.php";
  //Selects correct row in database via ID
  $selection = "SELECT articleName, articleDate, articleContent
                FROM articles
                WHERE articleID = $id";
  $results = $db->query($selection);
  $article_view = $results->fetch();
?>