<?php

namespace Diman\Openlive\core;

class DatabaseConnection {
    protected $db = null;
    public function __construct() {
        require __DIR__.'/../conf/database.php';
        $this->db = new \PDO($DatabaseURL);
    }

    public function query($sql){
        $this->db->query($sql); // bb я писать игру, если хочешь помочь то в мг сри что тг* tg 
    }
}