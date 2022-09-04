<?php
namespace Diman\Openlive\controllers;

class MainController extends BaseController{

    public function indexAction() {
        echo $this->render("index", []);
    }
}
