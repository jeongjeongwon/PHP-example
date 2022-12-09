<!DOCTYPE html>
<html>
  <body>
    <?php
    //상수 선언 self 혹은 다른 키워드 뒤에 ::(범위 결정 연산자)와 상수이름을 사용
    class Alpha{
      const a = "Thanks so much!";
      public function beta(){
        echo self::a;
      }
    }

    $alpha = new Alpha();
    $alpha->beta();
    ?>

    <?php
    //1. define으로 진행해봄 (오류 출력 1. Unexpected 'Name', 2. Unexpected 'public')
    class Testing{
      const _push = "알수 없는 정보";
      public function rara(){
        echo self::_push;
      }
    }

    $test = new Testing();
    $test->rara();
    ?>
  </body>
</html>