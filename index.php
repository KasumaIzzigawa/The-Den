<?php require "./application/models/index_db.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php include "./application/views/head.html"; ?>
    <title>The Den</title>
  </head>
  <body>
    <!-- Includes navigation bar -->
    <div id="navbar">
      <?php include "./application/views/navbar.html"; ?>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div id="latest_article1">
            <h3><?php echo $article_name[1]; ?></h3>
            <h6><em><?php echo $article_date[1]; ?></em></h6>
            <p><?php echo $article_content[1]; ?></p>
            <a id="more" class="btn btn-primary btn-sm animate__animated" type="button" href="./application/views/article_view.php?id=<?php echo $row_count ?>">Read More</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div id="latest_article2">
            <h3><?php echo $article_name[0]; ?></h3>
            <h6><em><?php echo $article_date[0]; ?></em></h6>
            <p><?php echo $article_content[0]; ?></p>
            <a id="more" class="btn btn-primary btn-sm animate__animated" type="button" href="./application/views/article_view.php?id=<?php echo $row_count - 1 ?>">Read More</a>
          </div>
        </div>  
      </div>
      <div class="row" id="article_categories">
        <div class="col-4">
          <div id="image_category1"></div>
        </div>
        <div class="col-4">
          <div id="image_category2"></div>
        </div>
        <div class="col-4">
          <div id="image_category3"></div>
        </div>
      </div>
    </div>

    <?php include "./application/views/scripts.html"; ?>
  </body>
</html>