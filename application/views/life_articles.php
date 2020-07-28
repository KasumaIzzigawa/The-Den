<?php require "../models/life_db.php"; ?>
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
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div id="article">
            <h3><?php echo $article_name[count($article_name)-1]; ?></h3>
            <h6><em><?php echo $article_date[count($article_date)-1]; ?></em></h6>
            <p><?php echo $article_content[count($article_content)-1]; ?></p>
            <a id="more" class="btn btn-primary btn-sm animate__animated" type="button" href="./article_view.php?id=<?php echo $row_count ?>">Read More</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div id="article">
            <h3><?php echo $article_name[count($article_name)-2]; ?></h3>
            <h6><em><?php echo $article_date[count($article_date)-2]; ?></em></h6>
            <p><?php echo $article_content[count($article_content)-2]; ?></p>
            <a id="more" class="btn btn-primary btn-sm animate__animated" type="button" href="./article_view.php?id=<?php echo $row_count - 1 ?>">Read More</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div id="article">
            <h3><?php echo $article_name[count($article_name)-3]; ?></h3>
            <h6><em><?php echo $article_date[count($article_date)-3]; ?></em></h6>
            <p><?php echo $article_content[count($article_content)-3]; ?></p>
            <a id="more" class="btn btn-primary btn-sm animate__animated" type="button" href="./article_view.php?id=<?php echo $row_count - 2 ?>">Read More</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div id="article">
            <h3><?php echo $article_name[count($article_name)-4]; ?></h3>
            <h6><em><?php echo $article_date[count($article_date)-4]; ?></em></h6>
            <p><?php echo $article_content[count($article_content)-4]; ?></p>
            <a id="more" class="btn btn-primary btn-sm animate__animated" type="button" href="./article_view.php?id=<?php echo $row_count - 3 ?>">Read More</a>
          </div>
        </div>
      </div>
    </div>

    <?php include "./scripts.html"; ?>
  </body>
</html>