<?php
  $id = $_REQUEST["id"];
  require "../models/article_view_db.php";
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
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="chosen_article">
                  <h3><?php echo $article_name; ?></h3>
                  <h6><em><?php echo $article_date; ?></em></h6>
                  <p><?php echo $article_content; ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php include "./scripts.html"; ?>
  </body>
</html>