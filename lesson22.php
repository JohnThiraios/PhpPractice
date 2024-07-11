<?php 
// hasing = transforming sensitive data (passwords) into letters, numbers and/or symbols via a mathematical process.(Similar to encryption)
// Hides the original data from third parties

$password = "icetea31";

$hash = password_hash($password, PASSWORD_DEFAULT);

// echo $hash; // This will be a long, complex string of letters, numbers and symbols

if(password_verify("icetea31", $hash)){
  echo" You are logged in!";
}
else {
  echo "Incorrect password!";
}


?>