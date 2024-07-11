<?php
//Variables = $ aka string,integer,boolean etc
//strings
$name = "John Doe";
$food = "pizza";
$email = "john12@doe.com";

//integers = whole numbers
$age = 31;
$users = 2;
$quantity = 3;

//floats = numbers with decimal points
$gpa = 3.5;
$price = 4.99;
$tax_rate = 5.1;

//booleans true or false, will display as 1 or blank ,0 does not display anything
$employed = true;
$online = false;
$for_sale = true;

$total = null;
// echo $name;
// echo "Hello {$name}<br>";
// echo "You Like {$food}<br>";
// echo "Your email address is {$email}<br>";
// echo "You are {$age} years old <br>";
// echo"there are {$users} users online <br>";
// echo "You want to buy {$quantity} pizzas <br>";

// echo "Your GPA is {$gpa} <br>";
// echo "Your pizza costs \${$price}.<br>";
// echo "The sales tax rate is: {$tax_rate}%<br>";

// echo "Online Status: {$online} <br>";
echo"You have ordered {$quantity} x {$food}s<br>";

$total = $quantity * $price;
echo "Your total is \${$total}"
?>
