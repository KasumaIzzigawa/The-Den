<?php
  include "../models/config.php";
  require "../models/life_db.php"; 
  include SITE_PATH . "/application/controllers/services.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php include "./head.html"; ?>
    <title>The Den: Life Articles</title>
  </head>
  <body>
    <!-- Includes navigation bar -->
    <div id="navbar">
      <?php include "./navbar.html"; ?>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-2">
          <?php include "./twitch.html"; ?>
        </div>
        <div class="col-8">
          <div id="article">
            <h3><?php echo $article_name[count($article_name)-1]; ?></h3>
            <h6><em><?php echo $article_date[count($article_date)-1]; ?></em></h6>
            <p><?php echo $article_content[count($article_content)-1]; ?></p>
            <a id="more" class="btn btn-primary btn-sm animate__animated" type="button" href="./article_view.php?id=<?php echo $row_count ?>">Read More</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-2">
          <?php include "./yt.html"; ?>
        </div>
        <div class="col-8">
          <div id="article">
            <h3><?php echo $article_name[count($article_name)-2]; ?></h3>
            <h6><em><?php echo $article_date[count($article_date)-2]; ?></em></h6>
            <p><?php echo $article_content[count($article_content)-2]; ?></p>
            <a id="more" class="btn btn-primary btn-sm animate__animated" type="button" href="./article_view.php?id=<?php echo $row_count - 1 ?>">Read More</a>
          </div>
        </div>
      </div>
    </div>
    <?php
      $articles_left = $row_count - 2;

      $article_counter = 3;

      $row_counter = 2;

      $aID = $row_count - $row_counter;
      
      while ($articles_left > 0) {
        echo 
          '<div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-8">
                <div id="article">
                  <h3>'. $article_name[count($article_name)-$article_counter] . '</h3>
                  <h6><em>'. $article_date[count($article_date)-$article_counter] . '</em></h6>
                  <p>'. $article_content[count($article_content)-$article_counter] . '</p>
                  <a id="more" class="btn btn-primary btn-sm animate__animated" type="button" href="./article_view.php?id='. $aID . '">Read More</a>
                </div>
              </div>
            </div>
          </div>';
        
        $article_counter++;

        $row_counter++;

        $articles_left--;
      }
    ?>
    <?php include "./scripts.html"; ?>
  </body>
</html>