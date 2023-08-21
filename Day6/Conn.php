<?php

// object oriented 
//procedural 



// inta lagaa rabaa inaad sameyso database oo MySQL 
//host 

//username
//password
//database name

// How to make a connection to a MySQL database using PHP

// 1 Create a connection
// 2 Check the connection
// 3 Close the connection


// 1 Create a connection

// $username = "root";
// $password = "";
// $servername= "localhost";

// $conn = new  mysqli( $servername, $username, $password);

// or  created like this :
// $conn = new mysqli("localhost","root","" ,"Mydb");



// 2 check the connection
// if ($conn->connect_error){
//     echo "Failed to connect to MySQL: " . $conn->connect_error;
// }
// else{
//     echo "Connected successfully";
// }


$conn = new mysqli("localhost","root","","demo");
if($conn->connect_error){
    echo $conn->error;
}else{
    echo "success";
}






// $servername = "localhost";
// $username = "username";
// $password = "password";
// $database = "demo";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $database);

// // // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";




    
// if (class_exists('mysqli')) {
//     echo "MySQLi is enabled.";
// } else {
//     echo "MySQLi is NOT enabled.";
// }

?>