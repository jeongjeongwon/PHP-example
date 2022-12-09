<!DOCTYPE html>
<html>
  <body>
    <?php
    //상속 연습
    class game_2{
      public $name;
      public $type;
      public $cost;

      public function __construct($name, $type, $cost)
      {
        $this->name = $name;
        $this->type = $type;
        $this->cost = $cost;
      }

      public function __destruct()
      {
        echo "이 게임의 이름은 {$this->name}이고 장르는 {$this->type}입니다. 게임의 가격은 {$this->cost}입니다.<br>";
      }
    }

    class ThisWarofMine extends game_2{
      public function message(){
        echo "이건 무슨 게임인가요?<br>";
      }
    }

    $ThisWarofMine = new ThisWarofMine("This War of Mine", "생존 시뮬레이션", "21000원");
    $ThisWarofMine->message();
    ?>
  </body>
</html>