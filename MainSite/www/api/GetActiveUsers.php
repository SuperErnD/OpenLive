<?php
namespace Diman\Openlive\API;

require __DIR__ . "/../../../sys/conf/DatabaseConfig.php";
require '../sys/Prepare.php';
use function Diman\Openlive\Prepare\InitDatabase;
use function Diman\Openlive\Common\get_HTTP_request_headers;
// Requires end!

// Connect to database
$db = new \Diman\Openlive\PDO\PDO($MainDatabase, null, null);
InitDatabase($db);
// Check Autorization

// Basic Check

$token = get_HTTP_request_headers()['Authorization'];

if(!$token) {
    echo json_encode([
        'error' => 401,
        'message' => "Unathorizated"
    ]);
    exit(header('HTTP/1.1 401 Unathorizated'));
} else {
    $sth = $db->prepare('SELECT * FROM USER WHERE isDisabled = 0 AND authToken = ?');
    $result = $sth->execute(array($token));
    var_dump($sth->fetch());
}
// Get not disabled users
$users = array();
foreach($db->query('SELECT * FROM User WHERE isDisabled = 0') as $row) {
    array_push($users, $row);
}
bdump($users);
// Array to number
$users = strval(count($users));
echo $users;
?>