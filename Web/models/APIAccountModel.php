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
        $this->redir();
        
    }
    public function redir(){
        if (isset($_GET['next'])){
            $this->redirect($_GET['next']);
        } else {
            $this->redirect("/account/me");
        }
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

    public function login(){
        $data=[
            "email" => $_POST['login']
        ];
        $phash=$this->db->row("SELECT password FROM Users WHERE email=:email", $data)[0]["password"];
        if(Digester::isHashValid($phash,$_POST['passwd'])){
            $_SESSION['user'] = $this->jwt->encode([
                "email" => $_POST['login'],
                "passwd" => Digester::digest($_POST['passwd'])
            ]);
            return $this->redir();
        }
        echo "invalid";
    }
}