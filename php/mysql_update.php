<?php
require_once"./mysql.php";

$sql="
update student set name ='kiran 'where rollno=1

";
$sql1="
update student set rollno=2 where id=3

";


$result=$connection->query($sql1);

if($result){
    echo"updated successfully";

}
else{
    echo"not updated";
}
?>