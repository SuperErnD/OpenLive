<?php
namespace Diman\Openlive\controllers;

class MainController extends BaseController{

    public function indexAction() {
        echo $this->render("index", []);
    }
    
    public function ToSAction() {
        echo $this->render("legaly/tos", []);
    }
    
    public function PrivacyAction() {
        echo $this->render("legaly/privacy", []);
    }
}
