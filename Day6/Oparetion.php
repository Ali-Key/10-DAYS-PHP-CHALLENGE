<?php


include 'Conn.php';



if(isset($_POST['insert'])){



   $StudentId = $_POST ['Student_ID'];
   $StudentName = $_POST ['Student_Name'];
   $StudentClass = $_POST ['Student_Class'];

   $query = "INSERT INTO Student (Id,Name,Class) VALUES ('$StudentId','$StudentName','$StudentClass')";
  //  $query = INSERT INTO `student`(`Id`, `Name`, `Class`) VALUES ('$StudentId','$StudentName','$StudentClass')"
   $result = $conn -> query($query) ;

   if($result){
    echo "Sucessfully registered";
   }
   else{
     echo "Failed to register" ;
   }
}



// include 'Conn.php';

// if (isset($_POST['insert'])) {
//     $StudentId = $_POST['Student_ID'];
//     $StudentName = $_POST['Student_Name'];
//     $StudentClass = $_POST['Student_Class'];

//     // Create a prepared statement
//     $stmt = $conn->prepare("INSERT INTO Student (Id, Name, Class) VALUES ('$StudentId' , '$StudentName', '$StudentClass')");

//     if ($stmt) {
//         // Bind parameters and set their types
//         $stmt->bind_param("sss", $StudentId, $StudentName, $StudentClass);

//         // Execute the statement
//         if ($stmt->execute()) {
//             echo "Successfully registered";
//         } else {
//             echo "Failed to register";
//         }

//         // Close the statement
//         $stmt->close();
//     } else {
//         echo "Error in preparing the statement";
//     }
// }

























?>