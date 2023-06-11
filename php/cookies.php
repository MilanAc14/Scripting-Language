<?php
/*
cookies : simple information or data saved by a server in a client computer.
there are two steps: set and 
for set cookies:
    setcookie(name,value,expire,path,domain,secure)    ,name value and expire are most important.
    */
   // setcookie('dark','true',time()+7*24*60*60);

    //access cookies
//    $_COOKIES =superglobal variable to access cookies

$darkMode=false;
if(isset($_COOKIE['dark'])){
    if($_COOKIE['dark']=='true')
    {
        $darkMode=true;
    }
}

/*
homework
on first time create a form asking user's name
on submit: set cookie with user's name
on next page visit if cookies is set ,display "hello $name"
hint set cookie ("name."")
secodn print helo name
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>
<body style="background-color:<?php echo $darkMode ? '#000':'#fff'?>">


    
</body>
</html>
