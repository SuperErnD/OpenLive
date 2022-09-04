<?php
namespace Diman\Openlive\Controllers;
use Diman\Openlive\Views\Render;
class MainController extends BaseController{

    public function indexAction() {
        $render=new Render("index");
        echo $render->render([]);
    }
}
