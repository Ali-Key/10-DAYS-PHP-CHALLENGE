<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day four</title>
</head>
<body>
    <?php


    //  echo "Hello World ";

        // advent 
    //  arrays   is a type of variable that may contain several values at onece 
    
    // There are three types of arrays, namely:
    // Indexed array - An array with a numeric key
    // Associative array — An array where each key has its own specific value
    // Multidimensional array — An array containing one or more arrays within itself

//    indexed array : An indexed array stores each array element with a numeric index.
    // $arr = array("Ali", "Ahmed", "Mohammed", "Khalid", "Sami");

    // var_dump($arr);
    
    // echo "the array elemaent is : " .$arr[0] . "<br/>";


    // Arrays can aslo be created manually:

    // $name [0]= "Ali";
    // $name [1]= "Omar";
    // $name [2]= "Abdi";

    // var_dump($name);

    // Looping through indexed arrays can be done as follows:

//    $name = array("Ali", "Ahmed", "Mohammed");
//    $array_length = count($name);

//    for ($i =0; $i < $array_length; $i++){
  
//      echo $name [$i] . " <br/>";
//    }
// $name = array("Ali", "Ahmed", "Mohammed");
// $array_length = count($name);
// $i = 0;

// while ( $i < $array_length) {
//     echo $name[$i] . " <br/>";
//     $i++;
//     # code...
// }

// $name = array("Ali", "Ahmed", "Omar");
// $array_length = count($name);
// $i = 0;
// do {

//     echo $name[$i] . " <br/>";
//     $i++;
     
// } while ($i < $array_length);


// Associative arrays are arrays that use named keys that are assigned by the user.



// $ages = array("Ali" => 22 , "Omar" => 35);
// var_dump($ages);

// which is equivalent to:

// $age ['ali']  = "22";
// $age ['omar'] = "35";


 $names =array( "Ali" => 22, "Omar " => 44);
 foreach ($names as $x => $x_value){
    echo "name = ".$x . " , Age = " . $x_value;
    echo " <br/>";
 }









     




     ?>
    
</body>
</html>