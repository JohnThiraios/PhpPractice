<?php
// if statements = if a condition is true, do something
//                 if condition is false, don't do it
// order of if statements is important
// $age = 31;
// if ($age >= 100){
//   echo "You are too old to enter this website";
// }
// elseif ($age >= 18) {
//   echo "You may enter this website";
// }
// elseif ($age <= 0) {
//  echo "Not a valid age";
// }
// elseif ($age >= 100){
//   echo "You are too old to enter this website";
// }
// else {
//   echo "You must be 18 or older to enter this website";
// }

// $adult = true;
// if ($adult)  {//($adult == true)
//  echo "You may enter this website";
// }
// else {
//   echo "You must be 18 or older to enter this website";
// }

$hours = 50;
$rate = 15;
$weekly_pay = null;

if ($hours <= 0) {
  $weekly_pay = 0;
}
elseif ($hours <= 40) {
  $weekly_pay = $hours * $rate;
}
else {
  $weekly_pay = ($rate * 40) + (($hours - 40) * ($rate * 1.5)); 
}
echo "You made \${$weekly_pay} this week.";


?> 