<?php

namespace Diman\Openlive\controllers;


class APIAccountController extends BaseController {
    public function registerAction(){
        $this->model->register();
    }
    public function loginAction(){}
}