<?php
namespace Diman\Openlive\models;

class BaseModel{
    protected $db = null;
    protected $jwt = null;
    public function __construct($db){
        $this->db = $db;
        $this->jwt = $jwt;
    }
}