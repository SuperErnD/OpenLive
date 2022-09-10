<?php
namespace Diman\Openlive\controllers;

class AdminController extends BaseController{

    public function indexAction() {
        $_SERVER['REDIRECT_URL']=$_SEVRER['REDIRECT_URL'] ?? $_SERVER['PATH_INFO'];
        echo $this->render("admin/index", [
            "users" => $this->me->get_all(),
            "delete_user" => [$this->model, "delete_user"],
            "edit_user" => [$this->model, "edit_user"]
        ]);
    }
}
