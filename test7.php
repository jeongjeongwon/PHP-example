<!DOCTYPE html>
<html>
  <body>
    <?php
    $name = $phone = $email = $content = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $name = test_input($_POST["name"]);
      $phone = test_input($_POST["phone"]);
      $email = test_input($_POST["email"]);
      $content = test_input($_POST["content"]);
    }

    function test_input($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>

    <h2>who are you?</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method = "post">
      Name : <input type="text" name="name"><br><br>
      PhoneNum : <input type="text" name="phone"><br><br>
      Email : <input type="text" name="email"><br><br>
      Content : <textarea name="content" cols="50" rows="10"></textarea><br><br>
      <input type="submit">
    </form>

    <?php
    echo "<h2>출력 장소</h2><br><br>";
    echo "$name <br>";
    echo "$phone <br>";
    echo "$email <br>";
    echo "$content <br>";
    ?>
  </body>
</html>