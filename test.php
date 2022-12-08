<!DOCTYPE html>
<html>
  <body>
    <?php
    $name = "정정원";
    define("GREETING", [
      "KDT Full Stack",
      3.56
    ]);

    echo "<h2>안녕하십니까 저는 $name 입니다</h2><br>" ;

    echo GREETING[1];
    /*
    ! 금일 오류 작성
    * 상수 선언중 오류 발생 오류명 Syntax error: unexpected token "상수 이름" 오류 / 해결 class란 이름에서 문제 발생(따로 명령어가 있는 건가?) class는 예약어
    * 주석처리 오류 발생 / 해결 <?php> 내부에 작성해야함
    */
    ?>
  </body>
</html>