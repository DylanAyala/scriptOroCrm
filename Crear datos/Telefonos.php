<?php

namespace telefono;

class telefonosAleatorios
{


    public function telefonoAlearotios($length = 3)
    {
        $telefono= substr(str_shuffle("1234567890"), 0, $length);
        $telefono2= substr(str_shuffle("1234567890"), 0, $length);
        $telefono3= substr(str_shuffle("1234567890"), 0, $length);

        $telefono= $telefono. '-'. $telefono2 . '-' . $telefono3;

        return $telefono;
    }


}


?>