<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jquery</title>
</head>
<body>
    <!-- <a href="" class="home">Home</a> -->
    <button id ="show">show</button><br>
    <button id ="hide">hide</button>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum quas voluptatum voluptatibus quae voluptatum voluptatibus quae voluptatum voluptatibus quae voluptatum volupt
    </p>

<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>


<script>
    // $(selector).function(); //main syntax
    //$ in javascript is jquery
    
     $(document).ready(function(){
        //after document is ready
        $('#hide').click(function(){
            $('p').hide();//hide is jquery function just make display = none 
        });
        $('#show').click(function(){
            $('p').show();//show is jquery function just make display = block
            });
     });
    //  $(function(){
    //     $('a')//document.querySelector('a');
    //     //after document is ready
    //      $('.home');
    //       $('#home');
    //       $('[href='']');
    //  })
</script>
   
</body>
</html>





<?php
?>