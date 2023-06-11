<?php
require_once "./mysql.php";//linking another php file with the current file
$sql ='select * from student';
$result=$connection->query($sql);//connect is already stablished in a my ssql file so we just pull it from there 

if($result->num_rows > 0){
    $data=[];//al data rae displayed in this 
//since it doesnot display all the data at once and points only a cursor iorder to move curser we need to use while loop.
    while ($row=$result-> fetch_assoc()){  //fetch_array gives all the information including o index 1 
        array_push($data,$row);//pushes one row at a time to a array.

    }

}
echo"<pre>";//makes output structured
print_r($data);

?>
