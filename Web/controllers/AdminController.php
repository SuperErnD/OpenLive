<?php
namespace Diman\Openlive\controllers;

class AdminController extends BaseController{

    public function indexAction() {
        echo $this->render("admin/index", []);
    }
}
