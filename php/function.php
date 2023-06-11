<?php
        //function overloading
        // function_num_args : gives number of arguments present in a  function
function getNUmberOfArguments()
{
    $numOfArgs=func_num_args();
    echo "number of arguments = $numOfArgs";
}
getNumberOfArguments("a","b","c");

echo"<br>";
//fun_get_arg : need to pass position of array and print single elements

function getSpecificParameter()
{
$numOfArguments=func_num_args();
if ($numOfArguments > 1)
{
    echo"second getSpecificParameter is :". func_get_arg(1);
}
   
}
getSpecificParameter("car","Bus","Truck");
echo"<br>";

//func_get_args :gives all parameter in array
function getAlllArguments()
{
    $allArgs=func_get_args();
    var_dump($allArgs); // it is used to print the all elemets in array
}
getAlllArguments("prashant","hari");

echo"<br>";

//echo cannot print all elements of array at single time.

function SumAll()
{
    $totalNUmberOfArguments=func_num_args();
    $sum=0;
    $allArguments=func_get_args();
    for($i=0; $i<$totalNUmberOfArguments;$i++)
    {
     //$index=func_get_arg($i);
     $sum=$sum+$allArguments[$i];
      
    }
    
    echo "sum of all numbers="."$sum"."<br>";
}
SumAll("6","7","9");

//php array functions

$boys=["ram","hari","shyam"];
$girls=["sita","gita","rina"];
$students= array_merge($boys,$girls);
print_r($students);     // it is used to print array and echo is used to print string only.

$first=[
    'car'=>'BMW',
    'bike'=>'Marley'

];
$second =[
    'car'=>'LAmbo',
    'bike'=>'ducati',
    'scooter'=>'Dio'
];
$third= array_merge_recursive( $first,$second);
echo"<br> <pre>";
print_r($third);

//Array Sorting
$numbers=[5,7,6,9,10,20];
sort($numbers);//ascendig
print_r($numbers);
//rsort
rsort($numbers);
print_r($numbers);


//searching array
//array_key_exists
$hasScooter= array_key_exists("scooter",$first);
var_dump ($hasScooter);

//in_array
$hasBMW=in_array("BMW",$first);
var_dump($hasBMW);

?>
