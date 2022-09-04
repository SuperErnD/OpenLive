<?php

namespace Diman\Openlive\models;
use Diman\Openlive\core\jwt_mvc;
use HashDigest\Digester;

class APIAccountModel extends BaseModel{
    public function register(){
        if ($_POST['iPwd']!=$_POST['iRetypePwd']){
            echo "Error";
            return;
        }
        $this->register_db();
        $_SESSION['user'] = $this->jwt->encode([
            "email" => $_POST['imembernameeasi'],
            "passwd" => Digester::digest($_POST['iPwd'])
        ]);
        $this->redirect("/account/me");
    }

    public function register_db(){
        $params = [
            "a" => $_POST['imembernameeasi'],
            "b" => $_POST['iFirstName'],
            "c" => $_POST['iLastName'],
            "d" => (int) $_POST['iBirthYear'],
            "e" => Digester::digest($_POST['iPwd']),
            "f" => $_POST['profile_gender'],
            "g" => $_POST['iCountry']
        ];
        //var_dump($params);
        $this->db->query("INSERT INTO Users (email, name, surname, birthyear, password, gender, country) VALUES (:a, :b, :c, :d, :e, :f, :g)", $params);
        echo 1;
    }
}