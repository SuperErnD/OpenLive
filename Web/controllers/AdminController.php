<?php
namespace Diman\Openlive\controllers;

class AdminController extends BaseController{

    public function indexAction() {
        echo $this->render("admin/index", [
            "users" => $this->me->get_all(),
            "model" => $this->model
        ]);
    }
}
