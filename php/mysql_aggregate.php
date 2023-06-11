<?php
/*
types of agrregate 
1.count
2.sum
3.avg
4.max
5.min

*count :returns total num of values in specified field

*/
require_once"./mysql.php";
$countSQL="select count(*) as totalstudent from student";
$result = $connection ->query($countSQL);
if($result-> num_rows >0)
{
    $row=$result->fetch_assoc();
    print_r($row);
    echo "<br>";
}
$countSQL="select count('name') as totalstudent from student";

//sum
//returns the total number of null values in the expression

$sumSQL="select sum(rollno) as totalstudent from student";

$result1 = $connection ->query($sumSQL);
if($result1-> num_rows >0)
{
    $row2=$result1->fetch_assoc();
    print_r($row);
    echo"<br>";
}
$maxSQL="select max(rollno) as totalstudent from student";

$result1 = $connection ->query($maxSQL);
if($result1-> num_rows >0)
{
    $row2=$result1->fetch_assoc();
    print_r($row);
    echo"<br>";
}
$minSQL="select min(rollno) as totalstudent from student";
$result1 = $connection ->query($minSQL);
if($result1-> num_rows >0)
{
    $row2=$result1->fetch_assoc();
    print_r($row);
    echo"<br>";
}