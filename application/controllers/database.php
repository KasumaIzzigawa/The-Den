<?php
    //Sets up variables for PDO
    $dsn = "mysql:host=localhost;dbname=kazblog";
    $username = "kasuma";
    $password = "111324";

    $db = new PDO($dsn, $username, $password); //Creates PDO

    //Sets up variables and arrays for looping latest two articles
    $articleID = 2;
    $article_name = array(2);
    $article_date = array(2);
    $article_content = array(2);

    //Loops and sets columns of each row into arrays
    for ($i = 2; $i <= $articleID && $i > 0; $i--) {
        $selection = "SELECT articleName, articleDate, articleContent
                      FROM articles
                      WHERE articleID = $i";
    
        $articles = $db->query($selection);
        $article = $articles->fetch();

        $article_name[$i-1] = $article["articleName"];
        $article_date[$i-1] = $article["articleDate"];
        $article_content[$i-1] = $article["articleContent"];
    }
?>