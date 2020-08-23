<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PHP tutorial</title>
  </head>
  <body>
    <?php
      function addNumbers($num1 = 0, $num2 = 1) {
        return $num1 + $num2;
      }
      printf("5 + 4 = %d<br>", addNumbers());

      function changeMe(&$change) {
        $change = 10;
      }
      $change = 5;
      changeMe($change);
      echo "Change : $change<br>";

      function getSum(...$nums) {
        $sum = 0;
        foreach ($nums as $num) {
          $sum += $num;
        }
        return $sum;
      }
      printf("Sum = %d<br>", getSum(1, 2, 3, 4, 5));
    ?>
  </body>
</html>
