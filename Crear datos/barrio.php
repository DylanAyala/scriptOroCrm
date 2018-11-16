<?php
namespace  Barrios;

class barriosAleatorios
{
    static function barrios()
    {
        $barrios = array("BR-AC", "BR-AL", "BR-AM", "BR-AP", "BR-BA", "BR-CE", "BR-DF", "BR-ES", "BR-FN", "BR-GO", "BR-MA", "BR-MG", "BR-MS", "BR-MT", "BR-PA", "BR-PB",
            "BR-PE", "BR-PI", "BR-PR", "BR-RJ", "BR-RN", "BR-RO", "BR-RR", "BR-RS", "BR-SC", "BR-SE", "BR-SP", "BR-TO");


            $claves_aleatorias = array_rand($barrios, 1);
            $barrios = $barrios[$claves_aleatorias];
      
        return $barrios;
    }

}


?>