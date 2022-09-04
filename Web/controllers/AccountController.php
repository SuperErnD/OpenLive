<?php
namespace Diman\Openlive\controllers;


class AccountController extends BaseController {

    public function loginAction() {
        echo $this->render("login", []);
    }

    public function registerAction() {
        echo $this->render("register", []);
    }

    public function meAction(){
        echo $this->render("me", $this->model->getme());
    }
}
