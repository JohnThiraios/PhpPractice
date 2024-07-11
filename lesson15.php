<?php 
// functions = write code once, reuse it when you need it
// type () function name to invoke it
// example = add() substract() multiply() divide()

// function happy_birthday($first_name, $age){
// echo "Happy Birthday dear {$first_name}! <br>";
// echo "Happy birthday to you! <br>";
// echo "Happy Birthday dear {$first_name}! <br>";
// echo "You are {$age} years old <br>";
//  }
//  happy_birthday("Spongebob",30);
//  happy_birthday("Patrick",35);
//  happy_birthday("Sandy",25);

/////////////////////////////////////////////////

// function is_even($number){
//   $result = $number % 2;
//   if ($result == 0){
//    echo "Number is Even";
//   } else {
//     echo "Number is not Even";
//   }
// }
// echo is_even(6)

////////////////////////////////////////////////

function hypotenuse(float $a, float $b ) {
  $c = sqrt($a ** 2 + $b ** 2);
  return $c;
}
echo hypotenuse(5,4);

?> 

