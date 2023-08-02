

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crash Course Php 30 days </title>
</head>
<body>
<?php

// echo "Hello World!";


// this is a single-line comment 
#this is a single-line comment


/* this is a multiple-lines comment block
that spans over multiple
lines
*/



// PHP Variables

// A variable can have a short name (like x and y) or a more descriptive name (age, carname, total_volume).

// Rules for PHP variables:

//     A variable starts with the $ sign, followed by the name of the variable
//     A variable name must start with a letter or the underscore character
//     A variable name cannot start with a number
//     A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
//     Variable names are case-sensitive ($age and $AGE are two different variables)

// Remember that PHP variable names are case-sensitive!

//  variables 

// $text = " world!";
// echo "Hello  $text";


// PHP has three different variable scopes:

//     local: A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function:
//     global : A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function

// Variable with local scope
// function local() {
//     $x = 5; // local scope
//     echo "<p>Variable x inside function is: $x</p>";
//   }
//   local();
  
// using x outside the function will generate an error
//   echo "<p>Variable x outside function is: $x</p>";


// Variable with global scope

// $x = 5; // global scope

// function myglobal() {
//    // using x inside this function will generate an error
// echo "<p>Variable x inside function is: $x</p>";
//   }
//   myglobal();
  
//   // using x outside the function will generate an error
//   echo "<p>Variable x outside function is: $x</p>";









// date types 
   
// string 
// $text = " world!";
// echo "Hello  $text";

// integer 
// $int = 9;
// echo "Integer is equal to $int";

// double
// $double = 9.90;
// echo "Double is equal to $double";

//float
// $float = 9.00;
// echo "Float is equal to $float";

// boolean
// $x =true;
// echo $x;




// added two  variables 

// $x =89;
// $y =100;

// $sum = $x + $y;
// printf("The sum of two number is $sum");


// swap two variables 
// $x =89;
// $y =100;


// $temp = $x;
// $x = $y;
// $y = $temp;

// echo "the value of temp is $temp "; 
// echo '<br/>';

// echo "the value of x is $x ";
// echo '<br/>';

// echo "the value of y is $y ";

// echo '<br/>';




// PHP Casting 

// integer into string
// $x=90;
// $int_cast= (String)$x;
// echo "the is a string $int_cast ";

// $binary_num= 10001;
// $dicimal_num = ()$num;
// echo "this is a float number $int_cast";






$name = "ALI";  // 1 declare string

$rev = strrev($name); // 2 reverse string
echo "The reverse of the string is: $rev <br/>";

$sum = 0; // 4 initialize sum

// 3 make loop
for ($i = 0; $i < strlen($rev); $i++) {
  echo "$i <br/>"; // Note: Removed an extra $ symbol

  $mul = (ord($rev[$i]) ** 2); // Calculate the square of ASCII value of the character
  $sum += $mul; // 5 sum the squared values
}

echo "The sum of the multiplied values is: $sum <br/>"; // 6 print







// echo '<br/>';

// integer into double
// $x =89.8;
// $int_cast = (double)$x;
// echo "this is a double number $int_cast";

// echo '<br/>';


// // float into integer
// $x =8909.99;
// $flont_cast=(int)$x;
// echo "the is a integer number $flont_cast";

// Check if the variable is numeric:
// $x = 5985;
// var_dump(is_numeric($x));

// // $x = "5985";
// // var_dump(is_numeric($x));

// // $x = "59.85" + 100;
// // var_dump(is_numeric($x));

// // $x = "Hello";
// // var_dump(is_numeric($x));



// PHP Math
// The pi() function returns the value of PI
// echo (pi());

// The min() and max() functions can be used to find the lowest or highest value in a list of arguments:
// echo (max(67,9,0));
// echo (min(90,8,0));


// $number =[2,8,9,10,11,12,13,14,15,16];

// echo 'the max number of arrays is '.max(($number)); 
// echo '<br />';


// $number =[2,8,9,10,11,12,13,14,15,16];

// echo 'the min number of arrays is '.min(($number)); 
// echo '<br />';


// PHP Operators

// Operators are used to perform operations on variables and values.

// PHP divides the operators in the following groups:

//     Arithmetic operators 
//     Assignment operators
//     Comparison operators
//     Increment/Decrement operators
//     Logical operators


//     1 Arithmetic operators : used with numeric values to perform common mathematical operations


// Operator    Name 	           Example 	        Result 	
// + 	       Addition 	       $x + $y 	    Sum of $x and $y    
// $x=90 ;
// $y=100;
// $sum = $x + $y;
// echo "the sum of two number is $sum";

// // - 	       Subtraction 	       $x - $y 	    Difference of $x and $y 	
// $x=90 ;
// $y=100;
// $Subtraction = $x - $y;
// echo "the sum of two number is $Subtraction"; 

// * 	       Multiplication 	   $x * $y 	    Product of $x and $y 	
// $x=90 ;
// $y=100;
// $Multiplication = $x * $y;
// echo "the Multiplication of two number is $Multiplication";

// / 	       Division 	       $x / $y 	    Quotient of $x and $y 
// $x=1000 ;
// $y=100;
// $Division = $x / $y;
// echo "the Division of two number is $Division";

// % 	       Modulus 	           $x % $y 	    Remainder of $x divided by $y 
// $x=90 ;
// $y=100;
// $Modulus = $x % $y;
// echo "the Modulus of two number is $Modulus";

// ** 	       Exponentiation  	   $x ** $y 	Result of raising $x to the $y'th power
// $x=10 ;
// $y=10;
// $Exponentiation = $x ** $y;
// echo "the Exponentiation of two number is $Exponentiation";

// 2 Assignment operators : used with numeric values to write a value to a variable

// Operator     Same as 	        Description 
// = 	        x = y 	            The left operand gets set to the value of the expression on the right
// $x = 100;
// echo $x;
// echo '<br/>';


//  += 	        x += y 	            addition
// $x = 100; 
// $x += 20; 
// echo "the value of x is: $x";
// echo '<br/>';

//  -= 	        x -= y 	            subtraction
// $x = 100; 
// $x -= 20;
// echo "the value of x is: $x";
// echo '<br/>';

//  *= 	        x *= y 	            multiplication
// $x = 100;
// $x *= 20;
// echo "the value of x is : $x";
// echo '<br/>';

//  /= 	        x /= y 	            division
// $x = 100;
// $x /= 20;
// echo "the value of x is : $x";
// echo '<br/>';

//  %= 	        x %= y 	            modulus
// $x = 100;
// $x %= 20;
// echo "the value of x is : $x";
// echo '<br/>';


// 3 Comparison operators : used to compare two values (number or string)

// operator    name 	            example 	        result
// == 	        Equal 	            $x == $y 	        Returns true if $x is equal to $y
// $x = 100; // integer
// $y = "100"; // string
// var_dump($x == $y); // returns true because values are equal
// echo '<br/>';

// === 	        Identical 	        $x === $y 	        Returns true if $x is equal to $y, and they are of the same type    
// $x = 100; // integer
// $y = "100"; // string
// var_dump($x === $y); // returns false because types are not equal
// echo '<br/>';

// != 	        Not equal 	        $x != $y 	        Returns true if $x is not equal to $y
// $x = 100;
// $y = "100";
// var_dump($x != $y); // returns false because values are equal


// <> 	        Not equal 	        $x <> $y 	        Returns true if $x is not equal to $y
// $x = 100;
// $y = "100";
// var_dump($x <> $y); // returns true because values are not equal
// echo '<br/>';

// !== 	        Not identical 	    $x !== $y 	        Returns true if $x is not equal to $y, or they are not of the same type
// $x = 100;
// $y = "100";
// var_dump($x !== $y); // returns true because types are not equal 
// echo '<br/>';


// > 	        Greater than 	    $x > $y 	        Returns true if $x is greater than $y
// $x = 100;
// $y = 50;
// var_dump($x > $y); // returns true because $x is greater than $y 


// < 	        Less than 	        $x < $y 	        Returns true if $x is less than $y
// $x = 100;
// $y = 50;
// var_dump($x < $y); // returns false because $x is not less than $y
// echo '<br/>';

// >= Greater than or equal to $ x Returns true if $x is greater than or equal to $y
// $x  = 100;
// $y = 50;
// var_dump($x >= $y); // returns true because $x is greater than or equal 
// echo '<br/>';


// <= less than $ x Returns true if $x is less than or equal to $ y
// $x = 100;
// $y = 50;
// var_dump($x <= $y); // returns false because $x is not less than
// echo '<br/>';



// 4 Increment / Decrement operators : used to increment / decrement a variable's value

// operator    name 	        description
// ++$x 	    Pre-increment 	Increments $x by one, then returns $x
// $x = 10;
// echo ++$x; // outputs 11
// echo '<br/>';

// $x++ 	    Post-increment 	Returns $x, then increments $x by one   
// $x = 10;
// echo $x++; // outputs 10
// echo '<br/>';

// --$x 	    Pre-decrement 	Decrements $x by one, then returns $x
// $x = 10;
// echo --$x; // outputs 9
// echo '<br/>';

// $x-- 	    Post-decrement 	Returns $x, then decrements $x by one





















   




















?>
</body>
</html>