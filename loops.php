<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PHP tutorial</title>
  </head>
  <body>
    <?php
      $i = 0;
      while($i <10) {
        echo ++$i . ', ';
      }
      echo '<br>';
      for ($i=0; $i < 10; $i++) { 
        if(($i % 2) == 0) {
          echo $i . ', ';
        }
        if($i == 7) break;
      }
      echo '<br>';
      $i = 0;
      do {
        echo "Do While : $i<br>";
      } while ($i > 0);
    ?>
  </body>
</html>
