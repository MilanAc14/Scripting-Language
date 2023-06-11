<?php
    //unix timestand
    $time =time();
    echo "$time"."<br>";


    $time1=time()+50*24*3600;
    echo "$time1","<br>";

    //date
    $date =date('Y-M-D H:i:s');
    echo $date."<br>";

    // string to time
    $yesterday= strtotime("yesterday");
    echo date('Y-M-D',$yesterday);

    echo "<br>";
    $before= strtotime("22 years ago");
    echo date('Y-M-D',$before);



?>