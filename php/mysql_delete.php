<?php
require_once"./mysql.php";

$sql="
delete from student where id=1
";
$result=$connection->query($sql);
if($result)
{
    echo "deleted successfully";
}
else
{
    echo "not deleted";
}