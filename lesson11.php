<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="lesson11.php" method="post">
<label>Enter a Country:</label> <br>
<input type="text" name="country"><br>
<input type="submit" "><br>
  </form>
</body>
</html>

<?php 
// associative array = An array made of key=>value pairs
//countries => capitals
// id=> username
// item => price
$capitals = array("USA"=>"WashingtonDC",
                  "Japan"=>"Kyoto",
                  "South Korea"=>"Seoul",
                  "India"=>"New Delhi",
   );

$capital = $capitals[$_POST["country"]];
echo "The Capital is {$capital}";

//$capitals["USA"] = "Last Vegas";
// $capitals["China"] = "Beijing";
// array_pop($capitals);
// array_shift($capitals);
// $keys = array_keys($capitals);
//$values = array_values($capitals);
//$capitals = array_flip($capitals);
// $capitals = array_reverse($capitals);
// echo count ($capitals)

// foreach($capitals as $key => $value){
// echo "{$key} = {$value} <br>"}
?>