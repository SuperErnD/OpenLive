<?php
namespace Diman\Openlive\Prepare;

// Composer
require __DIR__ . "/../../vendor/autoload.php";

// Database
require __DIR__ . '/../../plugins/database/PDO.php';
require __DIR__ . '/../../plugins/database/PDOStatement.php';

// Plugins
require __DIR__ . '/../../plugins/Tracy/Database.php';

// Common
require __DIR__ . '/../common/GetHttpHeaders.php';

use Tracy\Debugger;

session_start();
Debugger::setSessionStorage(new \Tracy\NativeSession);
Debugger::enable(Debugger::DETECT, __DIR__ . "/../../../logs");
Debugger::$email = 'phelonc33m@gmail.com'; 
Debugger::$showBar = false;
function showBar() {
    Debugger::$showBar = true;
    Debugger::$showLocation = true;
}
function InitDatabase($PDODB) {
    $db = new \Diman\Openlive\Plugins\Tracy\Database($PDODB);
    $db->title = 'Main database';
    Debugger::getBar()->addPanel($db);
}