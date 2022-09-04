<?php
namespace Diman\Openlive\models;

class BaseModel{
    protected $db = null;
    public function __construct($db){
        $this->db = $db;
    }
}