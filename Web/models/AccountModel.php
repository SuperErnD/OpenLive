<?php

namespace Diman\Openlive\models;

class AccountModel extends BaseModel{
    public function getme(){
        if(!isset($_SESSION['user'])){
            return $this->redirect("/account/login");
        }
        $data = $this->jwt->decode($_SESSION['user']);
        //var_dump($data);
        $db_data=$this->db->row("SELECT id, email, admin FROM Users WHERE email=:email AND password=:passwd", $data)[0];
        if (empty($db_data)){
            return $this->redirect("/account/login");
        }
        //var_dump($db_data);
        return $db_data;
    }
}