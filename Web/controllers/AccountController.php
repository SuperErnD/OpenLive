<?php
namespace Diman\Openlive\Controllers;

class AccountController extends BaseController {

    public function loginAction() {
        include __DIR__ . '/../views/login.php';// блять а почему пыха
    } // почему пхп латте просто хуесос

    public function registerAction() {
        include __DIR__ . '/../views/register.php';
    }
}
        