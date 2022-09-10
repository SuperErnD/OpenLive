<?php
use Diman\Openlive\core\Ext;

$jwt_key=__DIR__ . "/jwt.txt";

if(!file_exists($jwt_key)){
    file_put_contents($jwt_key, Ext::generateRandomString(512));
}
$key = file_get_contents($jwt_key);
