<?php 
require __DIR__ . "/../vendor/autoload.php";

require __DIR__ . "/../Web/autoload.php";

require __DIR__ . "/../Web/conf/routes.php";


use Tracy\Debugger;
use Diman\Openlive\core\Router;

session_save_path(__DIR__ . "/../Web/storage/sessions");
session_start();

Debugger::enable(Debugger::DEVELOPMENT);
$router = new Router($routes);
$router->run();
?>
