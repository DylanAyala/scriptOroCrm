<?php

namespace nombres;

class nombresAleatorios
{


       public function nombresAlearotios($length = 5)
        {
           $nombre= substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);

           return $nombre;
        }


}


?>