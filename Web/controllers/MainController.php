<?php
namespace Diman\Openlive\controllers;

class MainController extends BaseController{

    public function indexAction() {
        echo $this->render("index", []);
    }
    
    public function tosAction() {
        echo $this->render("legaly/tos", []);
    }
    
    public function privacyAction() {
        echo $this->render("legaly/privacy", []);
    }
}
