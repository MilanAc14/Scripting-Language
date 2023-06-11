
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registeration form</title>
</head>
<body>
    <h1> Registration form </h1>
    <form action="register.php" method="post">

        <label for=""> First Name</label>
        <input type="text" name= "first"><br>

        <label for=""> last Name</label>
        <input type="text" name="last" id=""><br>

        <label for="">E-mail</label>
        <input type="email" name="email" id=""><br>


<button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
//get request : all values are seen in url  --search query    - limited character(255)

//post method :value are not attached in url  --foem submit ,, security 
if(isset($_POST['first']))
{

    $firstName = $_POST['first'];
    $lastName = $_POST['last'];

    if(!preg_match("/^[a-zA-Z]*$/",$firstName))
    {
        echo "only alphabets are allowed ";
    }
    else
    {
        echo"your name is $firstName";
    }
    //echo "hello $firstName $lastName ";

    if(!preg_match("/^[a-zA-Z]*$/",$lastName))
    {
        echo "only alphabets are allowed ";
    }
    else
    {
        echo" $lastName"."<br>";
    }
  
}
if(isset($_POST['email']))
{
    $email=$_POST['email'];
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo"VALIDATE EMAIL ADDRESS";
    }
    else {
        echo" invalid email";
    }
}
?>

