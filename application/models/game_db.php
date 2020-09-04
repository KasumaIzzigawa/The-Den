<?php
    //Grabs file for database connection
    require "config_db.php";

    //Creates arrays to store elements
    $article = array();
    
    $article_name = array();

    $article_date = array();

    $article_content = array();

    //Loops and sets columns of each row into arrays
    $selection = "SELECT articleName, articleDate, articleContent
                  FROM articles
                  WHERE categoryID = 3
                  ORDER BY articleID";

    $results = $db->query($selection);

    $row_count = $results->rowCount();

    foreach ($results as $article) {
        $article_name[] = $article["articleName"];
        $article_date[] = $article["articleDate"];
        $article_content[] = $article["articleContent"];
    }
?>