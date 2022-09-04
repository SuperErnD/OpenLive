<?php
namespace Diman\Openlive\Controllers;
// победа, подрубаю Latte
use Latte\Engine;
class MainController extends BaseController{

    public function indexAction() {

        include __DIR__ . '/../views/index.php';
    }
}
