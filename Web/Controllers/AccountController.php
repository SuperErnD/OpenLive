<?php
namespace Diman\Openlive\Controllers;
use Diman\Openlive\Views\Render;

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
