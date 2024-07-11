<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action=lesson4.php method="post">
<label>x:</label>
<input type="text" name="x"><br>
<label>y:</label>
<input type="text" name="y"><br>
<label>z:</label>
<input type="text" name="z"><br>
<input type="submit" value="total">

  </form>
  
</body>
</html> -->

<?php
// $x = $_POST["x"];
// $y = $_POST["y"];
// $z = $_POST["z"];
// $total = null;

//$total = abs($x); //absolute value
//$total = round($x); //rounding function
//$total = floor($x); //rounding down function
//$total = ceil($x); //rounding up function
//$total = sqrt($x); //square root function
//$total = pow($x, $y); //power of
// $total = max($x, $y, $z); //maximum number
// $total = min($x, $y, $z); //minimum number
// $total = pi(); //prints pi
//$total = rand(1, 6); //random number 
//echo $total;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="lesson4.php" method="post">
    <label>Radius:</label>
<input type="text" name="radius" >
<input type="submit" value="calculate">
  </form>
  
</body>
</html>
<?php
$radius = $_POST['radius'];
$circumference = null;
$area = null;
$volume = null;

$circumference = 2 * pi() * $radius;
$circumference = round($circumference, 2);
$area = pi() * pow($radius,2);
$area = round($area, 2);
$volume = 4/3 * pi() * pow($radius, 3);
$volume = round($volume, 2);

echo "The circumference of the circle is: {$circumference}cm <br>" ;
echo "The area of the circle is: {$area}cm <br>" ;
echo "The volume of the circle is: {$volume}cm <br>" ;

?>