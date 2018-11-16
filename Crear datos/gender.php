<?php

namespace gender;

class gender
{
    static function gender()
    {
        $gender = array('male','female');


        $claves_aleatorias = array_rand($gender, 1);
        $gender = $gender[$claves_aleatorias];


        return $gender;
    }

}


?>