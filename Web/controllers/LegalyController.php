<?php
namespace Diman\Openlive\controllers;

class LegalyController extends BaseController{


    public function tosAction() {
        echo $this->render("legaly/tos", []);
    }

    public function privacyAction() {
        echo $this->render("legaly/privacy", []);
    }
}
