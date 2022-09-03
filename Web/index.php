<?php 
require __DIR__ . "/../vendor/autoload.php";

require __DIR__ . "/autoload.php";

require __DIR__ . "/conf/routes.php";


use Tracy\Debugger;
use Diman\Openlive\core\Router;

session_save_path(__DIR__ . "/storage/sessions");
session_start();

Debugger::enable(Debugger::DEVELOPMENT);

//if(str_starts_with(trim($_SERVER['REQUEST_URI'], '/'), 'assets')) Debugger::$showBar = false;
// да нах оно рабочее
//да бля оно не нужно нахуй, оно и так без панели, попробуй а лан

// $db = new PDOConnection(); TODO
$router = new Router($routes); // да ты хуесос, надо отрубить панель чтобы просто асет был
$router->run();
?>