<!DOCTYPE html>
<html>
  <body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
      name: <input type="text" name="text">
      <input type="submit">
    </form>
    <?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $name = htmlspecialchars($_REQUEST['text']);
      if(empty($name)){
        echo "empty";
      } else {
        echo "$name";
      }
    }
    ?>
  </body>
</html>