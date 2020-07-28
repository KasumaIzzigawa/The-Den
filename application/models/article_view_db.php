<?php
  require "../models/config.php";
  //Selects correct row in database via ID
  $selection = "SELECT articleName, articleDate, articleContent
                FROM articles
                WHERE articleID = $id";
  $results = $db->query($selection);
  $article_view = $results->fetch();
  //Assigns each column to a variable
  $article_name = $article_view["articleName"];
  $article_date = $article_view["articleDate"];
  $article_content = $article_view["articleContent"];
?>