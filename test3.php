<!DOCTYPE html>
<html>
  <body>
    <?php
    //* 파이함수값 구하기
    echo (pi())."<br>";
    //* 값중 최솟값과 최댓값을 구하는 것
    echo (min(789, 1, 0.5, 2))."<br>";
    echo (max(789, 1, 0.5, 2))."<br>";
    //* 숫자를 양수로 바꿈
    echo (abs(-59.68)) . "<br>";
    //* 제곱근 반환
    echo (sqrt(36)) . "<br>";
    //* 난수생성 rand()내부에 첫번째 최솟값과 최댓값을 선언하여 그 사이의 모든 정수중 랜덤으로 하나 출력 가능
    echo (rand(10, 100))."<br>";
    ?>
  </body>
</html>