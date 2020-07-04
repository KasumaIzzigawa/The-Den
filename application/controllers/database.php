<?php
    //Sets up variables for PDO
    $dsn = "mysql:host=localhost;dbname=kazblog";
    $username = "kasuma";
    $password = "111324";

    $db = new PDO($dsn, $username, $password); //Creates PDO

    $articleID = 1;

    $selection = "SELECT articleName, articleDate, articleContent
                  FROM articles
                  WHERE articleID = $articleID";
    
    $articles = $db->query($selection);
    $article = $articles->fetch();

    $article_name = $article["articleName"];
    $article_date = $article["articleDate"];
    $article_content = $article["articleContent"];
    
?>