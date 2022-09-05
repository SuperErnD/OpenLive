<?php
namespace Diman\Openlive\controllers;
use Diman\Openlive\core\me;

class AccountController extends BaseController {


    public function loginAction() {
        echo $this->render("login", []);
    }

    public function registerAction() {
        echo $this->render("register", []);
    }

    public function meAction(){
        echo $this->render("me", $this->me->getme());
    }

    public function logoutAction(){
        unset($_SESSION['user']);
        return $this->redirect("/account/login");
    }
}
