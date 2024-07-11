<?php
// $username = "John Doe";
//  $username = "John The Doe";
 $username =  array("John" ,"The" ,"Doe");
 $phone = "123-456-7890";

// $username = strtolower($username); // Outputs: john doe
// $username = strtoupper($username); // Outputs: JOHN DOE
// $username = trim($username); 
// $username = str_pad($username, 20, "0"); 
// $phone = str_replace("-", "", $phone); 
// $username = strrev($username); 
// $username = str_shuffle($username); 
// $equals = strcmp($username, "John Do"); 
// $count = strlen($username); 
// $index = strpos($username, " "); 
// $firstname = substr($username, 0 , 4); 
// $lastname = substr($username,4); 

// $fullname = explode (" ", $username);
$username = implode (" ",$username);

echo $username; 
// echo $phone; 
// echo $equals; 
// echo $count; 
// echo $index; 
// echo $firstname; 
// echo $lastname; 

// foreach($fullname as $name)
// echo $name . "<br>";
?>