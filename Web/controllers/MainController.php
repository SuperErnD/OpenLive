<?php
namespace Diman\Openlive\Controllers;
// победа, подрубаю Latte
use Latte\Engine;
class MainController extends BaseController{

    public function index() {
       
        include '/../views/index.php';
    }
}
        