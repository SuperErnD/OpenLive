<?php
namespace Diman\Openlive\core;
class me{
    protected $db = null;
    protected $jwt = null;
    public function __construct($db, $jwt){
        $this->db = $db;
        $this->jwt = $jwt;
    }

    public function getme(){
        if(!isset($_SESSION['user'])){
            return null;
        }
        $data = $this->jwt->decode($_SESSION['user']);
        //var_dump($data);
        $db_data=$this->db->row("SELECT * FROM Users WHERE email=:email AND password=:passwd", $data)[0];
        if (empty($db_data)){
            return null;
        }
        //var_dump($db_data);
        return $db_data;
    }
}