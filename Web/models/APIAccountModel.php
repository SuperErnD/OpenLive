<?php

namespace Diman\Openlive\Models;

class APIAccountModel extends BaseModel{
    public function register(){
        if ($_POST['iPwd']!=$_POST['iRetypePwd']){
            echo "Error";
            return;
        }
    }
}