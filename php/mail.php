<?php

/*
sending email using php
mail(to,subject,message)

need to add smpt, port no and goggle configuration 


*/
$mailsent=mail('milanacharya2001@gmail.com','test mail','hello ');
if($mailsent){
    echo "mail sent";
    }
    else{
        echo "mail not sent";
        }

?>