<?php 
// for loop = repeat some code a certain # of times
// for($i = 1; $i <= 100; $i++) {
//   echo $i . "<br>";
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="lesson8.php" method="post">
  <label>Enter a number to count down from:</label><br>
  <input type="text" name="counter"><br>
  <input type="submit" value="start"><br>
  </form>
</body>
</html>

<?php 
$counter = $_POST["counter"];
for ($i = $counter; $i >0 ; $i--){
  echo $i . "<br>";
}
?>