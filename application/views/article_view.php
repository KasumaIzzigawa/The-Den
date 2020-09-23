
<?php
  $id = $_REQUEST["id"];
  require "../models/article_view_db.php";
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
        <div class="col-8">
          <div id="article_view"></div>
        </div>
      </div>
    </div>
    <?php include "./scripts.html"; ?>
    <script type="text/babel">
      $(document).ready(function() {
        const ArticleContainer = document.querySelector("#article_view");

        const e = React.createElement;

        ReactDOM.render(
          e(ArticleDisplay, {article:<?php echo json_encode($article_view); ?>}, null),
          ArticleContainer
        );
      });
    </script>
  </body>
</html>