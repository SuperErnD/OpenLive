<?php
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . "/../../sys/conf/DatabaseConfig.php";
require __DIR__ . "/../../sys/conf/MessengerServerConfig.php";
require __DIR__ . "/logger.php";

use React\Socket\SocketServer;
use React\Socket\ConnectionInterface;
use Idearia\Logger;

// create a log channel
$log = new Logger();
$log::$log_level = 'debug';
// create a database connection(PDO)
$DatabaseConnection = new PDO($MainDatabase);
$log->info('Connected to database');
$socket = new SocketServer('0.0.0.0:65');
$socket->SupportedVersions = $SupportedVersions;
$socket->ErrorCodes = $ErrorCodes;
$socket->on('connection', function (ConnectionInterface $connection) use ($socket) {
    $connection->write('OLNP');
    $connection->write('1');
    $connection->isOLNPClient = false;
    $connection->on('data', function ($data) use ($connection, $socket, $DatabaseConnection) {
        if(!$connection->isOLNPClient) {
            list($olnp, $verOfOlnp) = explode(' ', $data);
            try {
                $verOfOlnp = intval($verOfOlnp);
            } catch(e) {
                $connection->write('ERR VersionParseError '.$socket->ErrorCodes['VersionParseError']);
                $connection->close();
            }
            if(!($olnp === 'OLNP')) { return $connection->close(); }
            
        }
        //$connection->write();
    });
});
$log->info("Server started");
