<?php
namespace Diman\Openlive\controllers;
use Diman\Openlive\views\Render;

class AccountController extends BaseController {

    public function loginAction() {
        $render=new Render("login");
        echo $render->render([]);
    }

    public function registerAction() {
        $render=new Render("register");
        echo $render->render([]);
    }
}
