<?php
// file handling in php
//fopen

//modes
//1.r= read only
//2.r+=reading and writing
//3.w=writing only ,clears content if file doesnot exit it creates new one
//4.W+=writing and reading and claers the content.
//5.a=writing only but appends the content if dont exist it creates one
//6.a+=reading and wring with append 
//7.x=writing only butonly existing file
//8.x+ = same behaviour as x. opens for both reading and writing


// close a file
//fclose($fileHandle)

//reading from files
// fread(filehandle,length in bytes)

// check files existance 
// file_exists($fileName)= true or false

$fileName='data.txt';
if(file_exists($fileName))
{
    $fh=fopen($fileName,"r");//open file
    $content=fread($fh,filesize($fileName));//read the file
    echo $content;
    fclose($fh);
}
else
{
    die("file doesnot exist");
}


//another way of reading file
//readfile($fileName)

if(file_exists($fileName))
{
    readfile($fileName) or die("cannot read file");
}
else
{
    die("file doesnot exist");
}

//another way of reading all file
//file_get_contents($fileName)
if(file_exists($fileName))
{
    $contents=file_get_contents($fileName) or die("cannot read file");
    echo $contents;
}

else
{
    die("file doesnot exist");
}

//writig in a file
//fwrite($filehandle,"content")

$data = "this is written from php program";
$fn= fopen($fileName,"w");
fwrite($fn,$data);
fclose($fn);

//$fn=fopen("newdata.txt","w")//creates newdata file 

//another way of writing file
//file_put_content($filename,data)

file_put_contents("data2.txt","writtingfrom php ");

//file renaming
//rename($oldFileName,$newFileName)

$oldFileName="data.txt";
$newFileName="data_new.txt";
if(file_exists($oldFileName))
{
    rename($oldFileName,$newFileName);
}


//removing or deleting file
//unlink($filename)

if (file_exists($newFileName))
{
    unlink($newFileName);
}



?>