<?php

require_once "./mysql.php";
echo".<br>";
$sql="
insert into student(name,rollno) values('Karan',01)

";
$success=$connection->query($sql);
if($success){
    echo "record inserted successfully";

}
else{
    echo"error in inserting data";
}






?>