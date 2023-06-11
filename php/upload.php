
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form </title>
</head>
<body>
    <h1>file Upload</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">Upload a photo</label>
        <input type="file" name="photo" id="">
    <button type="submit" name ='submit'>Submit</button>
    </form>
    
</body>
</html>

<?php
if(isset ($_POST['submit']))
{
if(isset($_FILES['photo']['error']) && $_FILES['photo']['error']==0){
    $tempName=$_FILES['photo']['tmp_name'];
    $destination='photos/'.$_FILES['photo']['name'];
    $isUploaded = move_uploaded_file($tempName,$destination);//gives boolean value

    if($isUploaded =true)
    {
        echo"file uploaded successfully";
    }
    else{
        echo"file not uploaded";
    }

}else{
    die ("there was a error in uploading a file");
}
}
//(isset($_FILES['photo']['error']) checks if there is a error key in a photos.

//die  means code doesnot run futher i.e halt

/*
homeWork
before uploading files checks if the file is a valid image
hint:check $FILES['fileName][]'type']='image/jpeg","image/png","image/jpg"))
*/
?>