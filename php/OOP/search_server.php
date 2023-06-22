<?php
require_once "../mysql.php";
$name=$_GET ['name'] ?? '';

$sqlQuery="
SELECT * from student WHERE name like '%" .$name."%'";
$result=$connection->query($sqlQuery);
$data=[];
while($row=$result->fetch_assoc()){
    array_push($data,$row);
    }
// print_r($data);//gives data in array form
echo json_encode($data); //gives data in string format
//it can be parsed in javascript 


// write  server side code to 
//server side sends data which is fetched by client side by ajax
//jason_encode sends data in jason format which is parsed in  javascript by jason.parse 


//simple create array 
// echo jason_encode ($aarayname);

//for ajax 
//object
//requst open
//request send
?>