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
                if (!empty($_POST[$key])){
                    $newdata[$key] = $value;
                }
            }
        }
        foreach ($newdata as $key => $_) {
            $sqldata[$key] = ":".$key;
        }
        $query="UPDATE Users SET " . urldecode(http_build_query($sqldata, '', ', ')) . " WHERE id=". (int) $id;
        $this->db->query($query, $newdata);
    }
}