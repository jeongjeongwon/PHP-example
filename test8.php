<!DOCTYPE html>
<html>
  <body>
    <?php
    // 간단한 액세스 수정자 연습
    class game_1 {
      public $name;
      protected $type;
      private $cost;
    }

    $Genshin = new game_1();
    $Genshin->name = 'Genshin';
    $Genshin->type = '오픈월드 RPG';
    $Genshin->cost = 'free'
    ?>
  </body>
</html>