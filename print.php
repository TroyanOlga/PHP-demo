<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PHP tutorial</title>
  </head>
  <body>
    <?php
      printf("%c %d %.2f %.3s<br>", 65, 65, 1.234, "string");
      $rand_str = "         random String      ";
      printf("Length : %d<br>", strlen($rand_str));
      printf("Trim L : %d<br>", strlen(ltrim($rand_str)));
      printf("Trim R : %d<br>", strlen(rtrim($rand_str)));
      $rand_str = trim($rand_str);
      printf("Upper : %s<br>", strtoupper($rand_str));
      printf("Lower : %s<br>", strtolower($rand_str));
      printf("Upper 1st char: %s<br>", ucfirst($rand_str));
      printf("1st 6 chars : %s<br>", substr($rand_str, 0, 6));
      printf("Index : %s<br>", strpos($rand_str, "String"));
      $rand_str = str_replace("String", "Characters", $rand_str);
      printf("Replace: %s<br>", $rand_str);
      printf("A == B : %d<br>", strcmp("A", "B"));
    ?>
  </body>
</html>
