<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
  Username: <br>
  <input type="text" name="username"><br>

  <input type="submit"><br>
</form>
</body>
</html>



<?php 
 // $_SERVER = SGB that contains headers, paths and script locations.
 // The entries in t his array are created by the web server.
 // Shows nearly everything you need to know about the current web page environment.
  // php $_SERVER["PHP_SELF"] USE THIS WITH A FILTER

// foreach($_SERVER as $key => $value) {
//   echo "{$key}= {$value} <br>";
// }

if($_SERVER["REQUEST_METHOD"] == "POST") {
  echo"Hello";
}


?>