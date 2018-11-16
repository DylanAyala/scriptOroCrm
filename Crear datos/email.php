<?php

namespace email;

class email
{


    public function email($length = 7)
    {
        $primero= substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);

        $email= $primero . '@test.com';

        return $email;
    }


}



?>