<!DOCTYPE html>
<html>
  <body>
    <?php
    $t = date("H");
    if($t < "20"){
      echo "하요하요<br><br>";
    }

    $color = "skyblue";
    switch($color){
      case "red":
        echo "당신이 선택한 색은 빨간색 입니다.";
        break;
      case "blue":
        echo "당신이 선택한 색은 파란색 입니다";
        break;
      case "skyblue":
        echo "당신이 선택한 색은 하늘색 입니다.";
        break;
      default:
        echo "당신이 선택한 색은 3개중에 존재하지 않습니다";
    }

    function koko($text){
      echo "$text 는 음식이다.";
    }

    koko("pizza");
    koko("pasta");
    koko("soisose");
    koko("kimchi");
    koko("chikin");
    ?>
  </body>
</html>