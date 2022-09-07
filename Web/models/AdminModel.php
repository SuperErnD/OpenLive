<?php

namespace Diman\Openlive\models;

class AdminModel extends BaseModel{
    public function delete_user($id){
        $this->db->query("DELETE FROM Users WHERE id=:id", ["id" => $id]);
    }
    public function edit_user($id){
        $newdata=[];
        $sqldata=[];
        foreach ($_POST as $key => $value) {
            if (!\Diman\Openlive\core\str_starts_with($_POST[$key], "_")){
                if ($key == "admin"){
                    $newdata[$key] = (int) ($value == "on");
                } else{
                    $newdata[$key] = $value;
                }
                $sqldata[$key] = ":".$key;
            }
        }
        $query="UPDATE Users SET " . urldecode(http_build_query($sqldata, '', ', ')) . " WHERE id=". (int) $id;
        //var_dump($newdata);
        //exit();
        $this->db->query($query, $newdata);
    }
}