<?php
namespace Diman\Openlive\Pages;
//error_reporting(E_ALL & ~E_DEPRECATED);
require './sys/Prepare.php';
require __DIR__ . "/../../sys/conf/DatabaseConfig.php";

use function Diman\Openlive\Prepare\InitDatabase;
use function Diman\Openlive\Prepare\showBar;

// Requires end!

// Connect to database
$db = new \Diman\Openlive\PDO\PDO($MainDatabase, null, null);
InitDatabase($db);
// Get not disabled users
$users = array();
foreach($db->query('SELECT * FROM Users WHERE isDisabled = 0', 0) as $row) {
    array_push($users, $row);
}
bdump($users);

// Array to number
$users = strval(count($users));

// Disconnect from database
$db = null;

// Enable bar
showBar();
if(!$_SESSION['Authorization']) {
    header("Location: /login.php");
    die();
}
?>

