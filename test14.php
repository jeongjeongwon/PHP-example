<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <?php
    $content = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $content = text_in($_POST["content"]);
    }
    function text_in($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>
    <header>
      <p>제목입니다.</p>
    </header>
    <main>
      <div id="aaa"><?php echo $content ?></div>
    </main>
    <footer>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
        <textarea type="text" name="content"></textarea>
        <input type="submit">
      </form>
    </footer>
  </body>
</html>