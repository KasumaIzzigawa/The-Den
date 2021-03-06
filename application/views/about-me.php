<?php
  include "../models/config.php";
  include SITE_PATH . "/application/controllers/services.php"; 
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php include "./head.html"; ?>
    <title>The Den</title>
  </head>
  <body>
    <!-- Includes navigation bar -->
    <div id="navbar">
      <?php include "./navbar.html"; ?>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-2">
          <?php 
            include "./twitch.html";
            include "./yt.html";
          ?>
        </div>
        <div class="col-2">
          <div>
            <img id="bio-image" src="./components/profileImage.jpg" />
          </div>
        </div>
        <div id="bio" class="col-6">
          <p>Name: Tony "Kasuma" Proeung<br>Bio: I'm a junior developer with many hobbies, which I have made this blogsite to showcase and have others enjoy as well. I livestream video games, love cooking and do all sorts of stuff. Hope you enjoy the website.<br>
              It is under constant construction at the moment as I continue to add more things to it.
          </p>
        </div>
      </div>
    </div>
    <?php include "./scripts.html"; ?>
  </body>
</html>