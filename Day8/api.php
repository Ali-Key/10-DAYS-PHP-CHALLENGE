<?php

header("Content-type:  application/json");


include "conn.php";
// function readall
// fuction insert 
// function update
// function delete



$action = $_POST['action'];




function readAll($conn)
{



    $data = array();
    $messages[] = array();
    // read all students from database
    $query = "SELECT * FROM Student";


    // excute the  query 
    $result = $conn->query($query);

    // success error 
    if ($result) {
        while ($row = $result->fetch_assoc()) {

            $data[] = $row;

        }

        $messages = array("status" => true, "data" => $data);

    } else {
        $messages = array("status" => false, "data" => $conn->error);
    }
    echo json_encode($messages);  





}

if (isset($action)) {
    $action($conn);
} else {
    echo "Action is Required...";
}











?>