<!DOCTYPE html>
<html>
  <body>
    <?php
    $title = "데이터 타입 정의 연습 진행하기";
    echo "<h1>$title</h1><br>";

    $a = "저는 문자열 입니다";
    var_dump($a);
    $b = 26;
    var_dump($b);
    $c = 2.59;
    var_dump($c);
    $d = array("hi", "myname", "is", "jeongwon");
    var_dump($d);

    $title2 = "예제 연습 한번 진행해 보자";
    echo "<br><h1>$title2</h1><br>";
    /**
     * *public은 class내부에서 작동
     * *$this를 사용할때 -> 변수 이름 앞에 $를 붙이면 안됨
     */
    class game{
      public $name;
      public $type;
      public function __construct($name, $type)
      {
        $this->name = $name;
        $this->type = $type;
      }
      public function aws(){
        return "나의 스팀보관함에 게임중 " . $this->name . " 이라는 게임의 장르는 " . $this->type . " 이다.";
      }
    }

    $Mygame = new game("Frost Punk", "시뮬레이션");
    echo $Mygame->aws();
    ?>
  </body>
</html>