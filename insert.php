<?php

// If you installed via composer, just use this code to require autoloader on the top of your projects.
require 'vendor/autoload.php';
require 'Crear datos/barrio.php';
require 'Crear datos/Nombre.php';
require 'Crear datos/Telefonos.php';
require 'Crear datos/name_prefix.php';
require 'Crear datos/gender.php';
require 'Crear datos/email.php';

// Using Medoo namespace
use Medoo\Medoo;
use Barrios\barriosAleatorios;
use nombres\nombresAleatorios;
use telefono\telefonosAleatorios;
use namePrefix\namePrefix;
use gender\gender;
use email\email;


// Initialize
$database = new Medoo([
    'database_type' => 'mysql',
    'database_name' => 'orocrm',
    'server' => '192.168.10.105',
    'username' => 'root',
    'password' => '321pepe321'
]);

for ($i = 0; $i < 1; $i++) {
//Buscamos el ID maximo
    $max = $database->max("orocrm_contact", 'id');

    $max++;

// INSERT orocrm_contact
    /**
     *
     * crmid (Last ID)
     * setype Contacts
     * deleted 0
     * source SCRIPT
     *
     */

    $namePrefix = new namePrefix();
    $nombre = new nombresAleatorios();
    $apellido = new nombresAleatorios();
    $gender = new gender();


    $id = $database->insert('orocrm_contact', [
        'id' => $max,
        'assigned_to_user_id' => '1',
        'updated_by_user_id' => '53',
        'created_by_user_id' => '53',
        'user_owner_id' => '1',
        'reports_to_contact_id' => $max,
        'source_name' => 'other',
        'organization_id' => '1',
        'name_prefix' => $namePrefix->namePrefix(),
        'first_name' => $nombre->nombresAlearotios(),
        'last_name' => $apellido->nombresAlearotios(),
        'gender' => $gender->gender(),
        'serialized_data' => 'Tjs=',

    ]);

// INSERT orocrm_contact_address

    $barrios = new barriosAleatorios();



    $id = $database->insert('orocrm_contact_address', [
        'owner_id' => $max,
        'region_code' => $barrios->barrios(),
        'country_code'=> 'BR',
        'is_primary' => '1',
        'label' => 'Primary Address',
        'city'=> 'Brasil',
        'first_name' => $nombre->nombresAlearotios(),
        'last_name' => $apellido->nombresAlearotios(),
        'serialized_data'=> 'Tjs=',

    ]);


// INSERT orocrm_contact_email

    $email = new email();

    $id = $database->insert('orocrm_contact_email', [
        'id' => $max,
        'owner_id' => $max,
        'email' => $email->email(),
        'is_primary' => '1',
        'serialized_data' => 'Tjs=',
    ]);

// INSERT orocrm_contact_phone

    $telefono = new telefonosAleatorios();

    $id = $database->insert('orocrm_contact_phone', [
        'id' => $max,
        'owner_id' => $max,
        'phone' => $telefono->telefonoAlearotios(),
        'is_primary' => '1',
        'serialized_data' => 'Tjs=',
    ]);


    // INSERT orocrm_contact_to_contact_grp

    $id = $database->insert('orocrm_contact_to_contact_grp', [
        'contact_id' => $max,
        'contact_group_id' => '5',
    ]);

// INSERT oro_tag_tagging


    //Buscamos el ID maximo
    $max2 = $database->max("oro_tag_tagging", 'id');

    $max2++;

    $id = $database->insert('oro_tag_tagging', [
        'id' => $max2,
        'tag_id' => '9',
        'user_owner_id' => '1',
        'entity_name' => 'Oro\Bundle\ContactBundle\Entity\Contact',
        'record_id' => $max,

    ]);
}

