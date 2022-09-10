<?php

$phpversion = (float)phpversion();
if ($phpversion < 8.0 && $phpversion >= 7.0){
	require __DIR__ . "/core/php7fix.php";
} elseif ($phpversion < 7.0) {
    exit("We sorry, you php version: $phpversion not supported");
}
require __DIR__ . "/../vendor/autoload.php";

require __DIR__ . "/conf/routes.php";


use Tracy\Debugger;
use Diman\Openlive\core\Router;

session_save_path(__DIR__ . "/storage/sessions");
session_start();

Debugger::enable(Debugger::DEVELOPMENT);
$router = new Router($routes);
$router->run();
?>