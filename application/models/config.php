<?php
    //Sets up variables for PDO
    $dsn = "mysql:host=localhost;dbname=xeonsold_kaz_blog";
    $username = "xeonsold_kasuma";
    $password = "111324";

    try {
        $db = new PDO($dsn, $username, $password); //Creates PDO
    } catch (PDOException $e) {
        echo "An error occured while trying to connect to the database.";
    }
        
?>