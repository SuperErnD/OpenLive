<?php
namespace Diman\Openlive\core;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Firebase\JWT\SignatureInvalidException;

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
        try {
            $jwt=JWT::decode($jwt, new Key($this->key, 'HS256'));
        } catch (SignatureInvalidException $th) {
            return null;
        }
        
        return json_decode(json_encode($jwt));
    }
}