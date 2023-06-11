<?php
require_once"./mysql.php";
$innerSQL="select  categorie_id ,count(title) from products
group by categorie_id desc";//limit 10 used to show 10 data in a page and other in a next page;
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