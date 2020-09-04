<?php
    //Sets up variables for PDO
    $dsn = "mysql:host=localhost;dbname=kazblog";
    
    $username = "kasuma";
    
    $password = "111324";

    try {
        $db = new PDO($dsn, $username, $password); //Creates PDO
    } catch (PDOException $e) {
        echo "An error occured while trying to connect to the database.";
    }
        
?>