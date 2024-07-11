<?php
// $_GET, $_POST == Special Variables used to collect data from an HTML form.Data is sent to the file in the action attribute of <form>
//<form action="some_file.php method="get">


//$_GET = Data is appended to the URL
//Not Secure
//Char limit
//Possible to bookmark w/ values
//GET requests can be cached
//Better for a search page

//$_POST = Data is packaged inside the body of the HTTP request
//MORE SECURE
//No data limit
//Cannot bookmark
// GET requests are not cached
// Better for submitting  credentials
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=
  , initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="lesson3.php" method="post">
  <label>Username:</label><br>
  <input type="text" name=username><br>
  <label>Password:</label><br>
  <input type="password" name=password><br>
  <input type="submit" value="Log In">
  </form>
  
</body>
</html> -->
<?php
// echo $_GET["username"] . "<br>"; //line break method
// echo "{$_POST["username"]} <br>";
// echo "{$_POST["password"]} <br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="lesson3.php" method="post">
    <label for="">quantity: </label><br>
    <input type="text" name="quantity" ><br>
    <input type="submit" value="total">
  </form>
</body>
</html>

<?php
$item = "Pizza";
$price = 4.99;
$quantity = $_POST['quantity'];
$total = null;
$total = $quantity * $price;

echo "You have Ordered {$quantity} x {$item}s <br>";
echo "Your total is: \${$total}";
?>