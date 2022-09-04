<?php
namespace Diman\Openlive\Models;

class BaseModel{
    protected $db = null;
    public function __construct($db){
        $this->db = $db;
    }
}