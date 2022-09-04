<?php
namespace Diman\Openlive\core;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class jwt_mvc{
    private $key=null;
    public function __construct(){
        require __DIR__ . "/../conf/jwt.php";
        $this->key=$key;
    }

    public function encode($data){
        return JWT::encode($data, $this->key, 'HS256');
    }
    public function decode($jwt){
        return json_decode(json_encode(JWT::decode($jwt, new Key($this->key, 'HS256'))), true);
    }
}