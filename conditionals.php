<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>PHP tutorial</title>
</head>
<body>
  <?php
    $num_oranges = 4;
    $num_bananas = 4;
    if(($num_oranges >25) && ($num_bananas >30)) {
      echo "25% Discount<br>";
    } elseif (($num_oranges > 30) || ($num_bananas > 35)) {
      echo "15% Discount<br";
    } elseif (!($num_oranges < 5) || (!($num_bananas < 5))) {
      echo "5% Discount<br>";
    } else {
      echo "No Discount<br>";
    }
    $age = 18;
    switch(true) {
      case ($age < 5):
        echo "Stay home<br>";
        break;
      case ($age == 5):
        echo "Go to kindergarden<br>";
        break;
      case in_array($age, range(6,17)):
        $grade = $age - 5;
        echo "Go to grade $grade<br>";
        break;
      default:
        echo "Go to college<br>";
        break;
    }
    $age_of_voter = 19;
    $can_vote = ($age_of_voter >= 18) ? "Can vote" : "Can't vote";
    echo "Vote? : $can_vote<br>";

    if("10" === 10) {
      echo "They are Equal<br>";
    } else {
      echo "They are not Equal<br>";
    }
  ?>
</body>
</html>
