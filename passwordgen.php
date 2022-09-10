<?php

require __DIR__ . "/vendor/autoload.php";
use HashDigest\Digester;

$password = "your password";
echo Digester::digest($password);
echo "\n";
