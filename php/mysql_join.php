<?php
/*
mysql joins
1.inner join 

*/
require_once"./mysql.php";
$innerSQL="select p.id , p.title as product_title, c.name as category_name from products as p join categories asc on p.categorie_id=c.id";
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