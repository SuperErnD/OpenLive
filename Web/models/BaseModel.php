<?php
namespace Diman\Openlive\models;

class BaseModel{
    protected $db = null;
    protected $jwt = null;
    public function __construct($db, $jwt){
        $this->db = $db;
        $this->jwt = $jwt;
    }

    public function redirect($url){
        header("Location: ".$url);
    }
}