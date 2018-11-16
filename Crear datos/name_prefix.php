<?php

namespace namePrefix;

class namePrefix
{
    static function namePrefix()
    {
        $namePrefix = array('Mr','Ms');


        $claves_aleatorias = array_rand($namePrefix, 1);
        $namePrefix = $namePrefix[$claves_aleatorias];


        return $namePrefix;
    }

}


?>