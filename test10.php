<!DOCTYPE html>
<html>
  <body>
    <?php
    class game_3{
      public $name;
      public $type;

      public function __construct($name, $type)
      {
        $this->name = $name;
        $this->type = $type;
      }

      public function alpha(){
        echo "이 게임의 이름은 {$this->name}이고, 장르는 {$this->type}이다";
      }
    }

    class WarZone extends game_3{
      public $cost;

      public function __construct($name, $type, $cost)
      {
        $this->name = $name;
        $this->type = $type;
        $this->cost = $cost;
      }

      public function alpha()
      {
        echo "이 게임의 이름은 {$this->name}이고, 장르는 {$this->type}이며, 가격은 {$this->cost}";
      }
    }

    $WarZone = new WarZone("WarZone", "FPS", "69000원");
    $WarZone -> alpha();
    ?>
  </body>
</html>