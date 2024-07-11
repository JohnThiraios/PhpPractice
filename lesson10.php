<?php 
// aray = "variable" which can hold more than one value at a time

$foods = array("apple", "orange","banana" , "coconut");
// echo $foods[0] . "<br>";
// echo $foods[1] . "<br>";
// echo $foods[2] . "<br>";
// echo $foods[3] . "<br>";

// $foods[0] = "pineapple  ";
// array_push($foods, "pineapple","kiwi"); //add to array
//array_pop($foods); //remove last element
//array_shift($foods); //removes first element
//$reversed_foods = array_reverse($foods); //reasign to a new or reuse same array
// echo count($foods); //counts elements of the array

foreach ($foods as $food){
  echo $food. "<br>";
}

?>