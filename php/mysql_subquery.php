<?php
require_once"./mysql.php";
$innerSQL="select * from categories  where id in(
    select distinct categorie_id from products)";
$resut= $connection->query($innerSQL);
$data=[];
if($resut-> num_rows>0){
    while($row=$resut->fetch_assoc()){
        array_push($data,$row);
        }
}
echo'<pre>';
print_r($data);
?>
