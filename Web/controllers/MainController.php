<?php
namespace Diman\Openlive\controllers;
use Diman\Openlive\views\Render;
class MainController extends BaseController{

    public function indexAction() {
        $render=new Render("index");
        echo $render->render([]);
    }
}
