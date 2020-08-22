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
          <div id="article_view"></div>
        </div>
      </div>
    </div>
    <?php include "./scripts.html"; ?>
    <script type="text/javascript">
      $(function() {
        const ArticleContainer = document.querySelector("#article_view");
        ReactDOM.render(<ArticleDisplay article=<?php echo json_encode($article_view);?> />, ArticleContainer);
      });
    </script>
  </body>
</html>