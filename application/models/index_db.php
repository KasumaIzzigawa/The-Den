<?php
    //Sets up variables for PDO
    $dsn = "mysql:host=localhost;dbname=xeonsold_kaz_blog";
    $username = "xeonsold_kasuma";
    $password = "111324";

    $db = new PDO($dsn, $username, $password); //Creates PDO

    //Grabs the amount of articles within the database
    $row_query = "SELECT articleID
                  FROM articles";
    $row_results = $db->query($row_query);
    $row_count = $row_results->rowCount();
    
    //Creates arrays to store elements
    $article = array();
    $article_name = array();
    $article_date = array();
    $article_content = array();

    //Loops and sets columns of each row into arrays
    $selection = "SELECT articleName, articleDate, articleContent
                  FROM articles
                  WHERE articleID = $row_count OR articleID = $row_count - 1";
    
    $results = $db->query($selection);
    foreach($results as $article) {
        $article_name[] = $article["articleName"];
        $article_date[] = $article["articleDate"];
        $article_content[] = $article["articleContent"];
    }
?>