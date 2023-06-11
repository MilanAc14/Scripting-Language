<?php

class LongMessageException extends Exception{
    //created our own custom exception


}


/*
-Exception 
throw-try block 
catch -catch block

*/
function sendMessage($message){
    if($message==""){
        throw new Exception ("empty message");
    }
    if(strlen($message)>20){
        throw new LongMessageException('Message is too long must be less than 20 character');
    }
    echo "Message Sent : ".$message."<br>";
    
}


try{
    sendMessage("");
    sendMessage("hello world sadfghasdsadgm,xdhasdsancbhsdcvdshcvdsghcvdsgcvsdcgsdcsdcdscdscdscdscdscsdc");
}
catch(LongMessageException $e){
    echo "Exception : ".$e->getMessage()."<br>";
}
catch(Exception $e){
    echo " general Exception : ".$e->getMessage();
    
}
finally{
echo "finally ran.";
}
//if exception comes it catches that exception and directly goes to the catch block and doesnot run futher code 

//agex  is a client side concept 
//asynchronous : gives data without reloadig a page  
//sychronous : 

?>