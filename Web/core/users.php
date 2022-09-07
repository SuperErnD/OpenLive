<?php
namespace Diman\Openlive\core;
class users{
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
        $db_data=$this->db->row("SELECT * FROM Users WHERE email=:email AND password=:passwd", $data);
        if (empty($db_data)){
            return null;
        }
        //var_dump($db_data);
        return $db_data[0];
    }
    public function get_all(){
        return $this->db->row("SELECT * FROM Users", []);
    }
}