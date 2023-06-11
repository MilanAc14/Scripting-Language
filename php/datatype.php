<?php
/*
supported data type

1. string
2. integer
3. float
4. boolean
5. null
6. array
7. object
8. resource

*/

// string 
$name ='';
$l_name = " \n \t \$";

// integer  value limit : -2^64 to + 2^64
$q = 1344;
$b = 0x1A; // for hexadecimal
$r = 0b111;  // for binary

// float 
$t = 1.777;
$h = 1.2e3; // for 10 ^3

// boolean
$isRanning = true;

// null
 $data = null ;

 // compound / complex data type
  $country = ["nepal", "india", "usa", "aus"];
  $province= array("bagmati", "gandaki", " koshi");
   echo $country [0];
   $country[3]= "china";

   // associative array
$student =[
    'name' => 'jack',
    'roll' => '23'
];
echo $student['name'];
echo $student['roll'];

// object
 class Student {
    private $name;

    function setName($name){
        $this -> name=$name;
    }
    // function printName();
    // echo this->printName;
 }

 $std = new Student();
 $std->setName("moon");
echo $name;

// resource
 $file = fopen("first.php", "r");
 fclose($file);

 // constant
define ("PI", 3.14);
echo "value of pi is ". PI;

// type conversion or type casting
$weight = (float) 60;
$age =(int) 23.8899;
echo "age=".$age;

$isMarried = (bool) 0;
var_dump ($isMarried);





?>