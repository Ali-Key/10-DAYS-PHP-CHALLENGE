<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 3</title>
</head>
<body>

  <?php 



// PHP Loops
// Loops are used to execute the same block of code again and again, as long as a certain condition is true.

// In PHP, we have the following looping statements:

// while - loops through a block of code as long as the specified condition is true
// do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true
// for - loops through a block of code a specified number of times
// foreach - loops through a block of code for each element in an array

// ----------------------------------------------------------------

// PHP while Loop

// $i = 0;
// while ($i <= 10){
//     echo "Hello, world  <br/>";
//     $i ++;
// }

// $num =10;
// while ($num ){
//     echo  "$num </br>";
    
//     $num --;
// }

// ----------------------------------------------------------------
 
// PHP do...while Loop
// $num = 0;
// do {
//     echo "The number is: $num <br>";
//     $num++;
// } while ($num <= 10);

// $num= 50;
// $sum = 0;
// do {
//     echo "The sum of the number is: $sum <br>";
//     $sum += $num;
// } while ($num >= 2);

//................................................................

// PHP for loop 
// for ($i = 0; $i <=10; $i ++){
//     echo "Number is : $i <br>";





// $numbers = array(1,2,3,4,5,6,7,8,9,10);
// $sum = 0;
// foreach ($numbers as $value){
//     echo " the arrays elements is : $value <br/>";
//     $sum += $value;
// }
// echo "<br/>";
// echo "<br/>";

// echo "The sum of array is $sum <br/>";
// echo "The max of array is ".max($numbers)."<br/>";
// echo "The min of array is ".min($numbers)."<br/>";
// echo "The count of array is ".count($numbers)."<br/>";

//................................................................

// PHP Break and Continue
// The break statement can be used to exit out of a loop.
// The continue statement can be used to skip a loop iteration and continue executing the loop.

// break

// for($i = 20; $i <40;   $i++) {
//     if ($i%3==0){
//         break;
//     }

//     echo " Hello World : " . $i;
//     echo" <br/>";
// }

// echo" <br/>";

// continue

// for($i = 0; $i < 10; $i++) {
//     if ($i==2){
//         continue;
//     }
//     echo " Hello World : " . $i;
//     echo" <br/>";
// }


// $b_num = "10001";


// $d_num = bindec($b_num);


// echo "Binary numbers is: $b_num <br/>";
// echo "Decimal number is: $d_num <br/>";

// echo "Decimal numbers is:". bindec("10001") ;


// echo "<br/>";

// $name = "ALI";
// echo  strrev($name);
// 1 declare string 

// 2 reverse string 
// 3 make loop 
// 4 multiply with power 2
// 5 sum the multiplied values 
// 6 print

// $name = "ALI";  // 1 declare string

// $rev = strrev($name); // 2 reverse string
// echo "The reverse of the string is: $rev <br/>";


// // 3 make loop
// for ($i = 0; $i < strlen($rev); $i++) {
//   echo " $$i <br/>";
    
// }
// $mul = pow($rev[$i], 2);

    
// $sum += $mul; // 5 sum th

// echo "The sum of the multiplied values is: $sum <br/>"; // 6 print




















  
  
  
  
  
  
  
  
  
  
  ?>
   
</body>
</html>