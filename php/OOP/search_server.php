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

?>