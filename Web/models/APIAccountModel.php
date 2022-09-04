<?php

namespace Diman\Openlive\models;
use Diman\Openlive\core\jwt_mvc;

class APIAccountModel extends BaseModel{
    protected $jwt = null;
    public function __construct($db, $jwt){
        parent::__construct($db);
        $this->jwt = $jwt;
    }
    public function register(){
        if ($_POST['iPwd']!=$_POST['iRetypePwd']){
            echo "Error";
            return;
        }
        $enc=$this->jwt->encode($_POST);
        var_dump($this->jwt->decode($enc));
        exit();
    }
}