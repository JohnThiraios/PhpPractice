<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="lesson17.php" method="post">Username: <br>
<input type="text" name="username"><br>
Age:<br>
<input type="text" name="age"><br>
Email:<br>
<input type="text" name="email"><br>
<input type="submit" name="login" value="login"><br>
  </form>
  
</body>
</html>

<?php 

if(isset($_POST["login"])) {
  // $username = $_POST["username"];
  // echo "Hello, $username!"; //can be subject to malicious attacks

// $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
// $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
// $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

echo "Hello {$username}!";
echo "You are {$age} years old!";
echo "Your email is{$email}!";

$age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

if(empty($age)){
  echo"That number is not valid!";
}
else {
  echo "You are {$age} years old!";
}

if(empty($email)){
  echo"That email is not valid!";
}
else {
  echo "Your email is {$email}";
}
}

?>