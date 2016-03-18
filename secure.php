<?php
require_once "crypto.php";
require_once "keys.php";


    //$en = protect(encrypt($string, $salt, $key, $num, $iv));
    //$string = protect($en);
    //$de = decrypt($string, $salt, $key, $num, $iv);
    //$Security_Gen = new Security_Gen();
    //echo $Security_Gen->salt('kaos2020#', '#0202soak')."\n";
    //echo $Security_Gen->keys('#0202soak', 'kaos2020#')."\n";
    //echo $Security_Gen->iv()."\n";
    //echo $Security_Gen->num()."\n";
    

//data validation
function valid($validator, $string){
    if(!preg_match( "/^[0-9]{4}$/", $string)){
        return "Error";
        
    }else{
        return $string;
    };
}

//data stripping
function strip($string){
    return trim(stripslashes($string));
    
}


?>