<?php

/**
 * Security_Gen short summary.
 *
 * Security_Gen description.
 *
 * @version 1.0
 * @author Kaos
 */
class Security_Gen
{
    private $salt1 = "@@#CTYhYVTGGHghgH%%^^&7BBBNb**%^&6%";
    private $salt2 = "@$&())+KJKJHF^hj23m4mdudh88*&*8&^***";

    function salt($string, $data){
        $string = crypt($data, $string);
        return $string;
    }

    function keys($data, $string){
        $string = crypt($string, $data);
        return $string;
    }

    function iv(){
        $string = mcrypt_create_iv (mcrypt_get_block_size (MCRYPT_TripleDES, MCRYPT_MODE_CBC), MCRYPT_DEV_RANDOM);
        return $string;
    }

    function num(){
        $num = rand(0, 6);
        return $num;
    }

}
    
?>
