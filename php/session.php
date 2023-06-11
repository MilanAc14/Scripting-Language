<?php
/*
session is a simple file or a database record which contains small pieces of data in server side ,
session stores data in a server where it creates a file 
it has a id and it send that id to browser and saves it .
for next time visit it calls that id ,
 
instead of sendind data to a server it sends id to abrowser which is unique,
on each future request ,browser will send a session id ,

how to create a session
session_start();
$_SESSION['darkmode']=true;


*/
session_start();
if(isset($_SESSION['page_count'])){
    $_SESSION['page_count']+=1;
}
else{
    $_SESSION['page_count']=1;
    }
    $_SESSION['page_count']+=1;
//session_destroy();//destroy all session
unset ($_SESSION['page_count']);//destroy page count session

echo "this page has been visited ". $_SESSION['page_count']. "   times";

?>