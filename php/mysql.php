<?php
$host='localhost';
$useeName='root';
$password='';   
$dbName='student';

$connection=new mysqli($host,$useeName,$password);
if($connection->connect_error !=0)
{
    die('connection error');
}
$connection->select_db($dbName);

//my sql datatypes
/*three essential type to store 
text
number
date and time

#actual datatypes
int=integer , size 4 bytes
bigint = integer size 8 bytes
float = size 4 bytes
double = size 8 bytes
varchar[length] =255 length+1byte size  
TinyText=max length 255
text =max length 65,535 character
mediumText=max length 16777215 (string length +2bytes)
longText=max length 4294967295 (string length +4bytes)

date = yyyy-mm-dd
time = hh:mm:ss
datetime = yyyy-mm-dd hh:mm:ss
ENUM= each column can have one of the possible value (used to put specific value like male and female)


#spatial data types
point
polygon
geometry

*/
?>