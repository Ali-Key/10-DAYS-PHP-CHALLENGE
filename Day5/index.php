<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcaton</title>
</head>

<body>
    <?php
    // function  : is a block of code that can be use repeatedly in a program.

    // function name()
    // {
    //     echo "Hey Everyone good night ";
    // }
    // name();


    // function add two numbers 
    // function sum($x,$y ){


    //   echo "the sum of two numbers is : " . $x+ $y;
    // }
    // sum(9,1);

    // Regtangle 
    // function regt($length , $width){
    //     $area =  $length * $width;
    //     echo "the area of the regtangle is : " . $area;
    // }
    // regt(6,7);



    // PHP OOP 
    // As PHP has evolved from a tool for building simple home pages to a language for serious Web development, so has its support for OOP

    // 1 Class and object 
    // PHP Class 
    // class is a template for objects, and an object is an instance of a class.
    // object is a data type which stores data and information on how to process that data.
    //Classes and objects are used to make your code more efficient and less repetitive by grouping similar tasks. A class is used to define the actions and data structure used to build objects. The objects are then built using this predefined structure.




    class People {
        // These are the class properties
        public $name;
        public $country;
        
        // These are the class methods
        function set_name($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }
        function set_country($country) {
            $this->country = $country;
        }
        function get_country() {
            return $this->country;
        }
    }
    
    // new instance of the People() class
    $alex = new People();
    // called the methods of the class
    $alex->set_name('Ali Omar');
    $alex->set_country('Somalia');
    // accessing the object properties
    echo "Name: " . $alex->get_name();
    echo "<br>";
    echo "Country: " . $alex->get_country();

   





    






    // PHP Objects

    // A PHP class is useless without an object. A PHP object is an instance of a class. The data associated with an object are called its properties; the functions it uses are called methods.






    ?>



</body>

</html>