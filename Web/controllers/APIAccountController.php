<?php

namespace Diman\Openlive\Controllers;
use HashDigest\Digester;

class APIAccountController extends BaseController {
    public function registerAction(){
        $this->model->register();
    }
    public function loginAction(){}
}