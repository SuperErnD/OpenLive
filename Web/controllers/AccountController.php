<?php
namespace Diman\Openlive\controllers;
use Diman\Openlive\core\me;

class AccountController extends BaseController {


    public function loginAction() {
        echo $this->render("login", ["query"=>$_GET]);
    }

    public function registerAction() {
        echo $this->render("register", ["query"=>$_GET]);
    }

    public function meAction(){
        echo $this->render("me", ["me" => $this->me->getme()]);
    }

    public function logoutAction(){
        unset($_SESSION['user']);
        return $this->redirect("/account/login");
    }
}
