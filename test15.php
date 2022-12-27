<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="css/test15.css" type="text/css">
  </head>
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
      <div id="logo">로고</div>
      <div id="title">타이틀</div>
      <section id="access">
        <button id="login">로그인</button>
        <button id="logup">회원가입</button>
      </section>
    </header>
    <main>
      <section id="view">
        <div id="img">이미지or영상</div>
        <div id="text"><?php echo $content ?></div>
      </section>
      <form id="write" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <textarea type="text" name="content"></textarea>
        <input type="file" name="imgfile">
        <input type="submit">
      </form>
    </main>
    <footer></footer>
  </body>
</html>