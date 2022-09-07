<?php

namespace Diman\Openlive\models;

class AdminModel extends BaseModel{
    public function delete_user($id){
        $this->db->query("DELETE FROM Users WHERE id=:id", ["id" => $id]);
    }
}