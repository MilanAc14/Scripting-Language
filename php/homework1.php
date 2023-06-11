
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <h1>User's Detail form</h1>
    <form action="" method="post">
        <label for=""> Name</label>
        <input type="text" name="name" id="" placeholder="enter your name"> <br>
         <br>
        <button type="submit" name= "submit">Submit</button>
       

    </form>

</body>
</html>
<?php

  // Check if the form is submitted
  if (isset($_POST['name'])) {
    $name = $_POST['name'];
    if (!empty($name)) {
      // Set cookie with the user's name
      setcookie("userName", $name, time() + (365 * 24 * 60 * 60), "/");
      echo "<p>Hello $name!</p>";
    }
  }
  ?>



 
