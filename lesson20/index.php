<?php
// session = SGB used to store information on a user to be used across multiple pages.
// A user is assigned a session-id 
// for example, login credentials 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="index.php" method="post"><br>
  Username:<br>
  <input type="text" name="username"><br>
   Password : <br>
  <input type="password" name="password"><br>
<input type="submit" name="login" value="Login">
  </form>
  <!-- <a href="home.php">Home</a><br> -->
</body>
</html>

<?php
// $_SESSION["username"] = "John Doe";
// $_SESSION["password"] = "IceTea123";
// echo $_SESSION["username"] . "<br>";
// echo $_SESSION["password"] . "<br>";

if(isset($_POST["login"])) {

if(!empty($_POST["username"]) &&
   !empty($_POST["password"])){
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];

    header("Location: home.php");
   }
   else {
    echo "Missing Username or Password";
   }
}
?>