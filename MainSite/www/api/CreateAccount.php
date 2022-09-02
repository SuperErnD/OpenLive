<?php
require __DIR__ . "/../../../sys/conf/DatabaseConfig.php";
require '../sys/Prepare.php';

$data = null;
if($_SERVER["REQUEST_METHOD"] === "POST") {
    if($_SERVER["CONTENT_TYPE"] ==  'application/json') {
        $postData = file_get_contents('php://input');
        if(strlen($postData) > 7168) {
            http_response_code(413);
            exit('ты хуесос, дахуя данных');
        }
        $data = json_decode($postData, true);
        if (!data['name'] || !data['email'] || !data['password'] || !data['birthday'] || !data['gender']) {
            http_response_code(400);
            exit("ты дебил");
        }
        $GLOBALS['data'] = $data;
    } else {
        http_response_code(422);
        trigger_error('Invalid data!', E_USER_NOTICE);
        exit("ты дебил");
    }
} else {
    http_response_code(405);
    trigger_error('Invalid method!', E_USER_NOTICE);
    exit("ты дебил");
}


$db = new \Diman\Openlive\PDO\PDO($MainDatabase, null, null);

// ура

$stmt = $db->prepare('INSERT INTO User (
    email,
    password,

) VALUES (
    
)');