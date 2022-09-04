<?php
namespace Diman\Openlive\controllers;
use Diman\Openlive\views\Render;

class BaseController {
    protected $db = null;
    protected $route = null;
    protected $model = null;
    protected $acl = null;

    public function __construct($route, $db) {
        $this->route = $route;
        $this->db = $db;
        if(!$this->checkAcl()){
            echo $this->render("errors/403", []);
            http_response_code(403);
            exit(403);

        }
        $this->model = $this->loadModel($route['controller']);
    }

    public function loadModel($name){
        $path = "Diman\Openlive\models\\" . $name . "Model";
        if (class_exists($path)){
            return new $path($this->db);
        }
    }

    public function checkAcl(){
        require __DIR__ . "/../acl/" . $this->route['controller'] . '.php';
        $this->acl=$acl;
        if ($this->isAcl('all')){
            return true;
        }
        if ($this->isAuth() && $this->isAcl('authorize')){
            return true;
        }
        if (!$this->isAuth() && $this->isAcl('guest')){
            return true;
        }
        if ($this->isAdmin() && $this->isAcl("admin")){
            return true;
        }

        return false;

    }

    public function isAuth(){
        return isset($_SESSION['user']) && isset($_SESSION['token']);
    }

    public function isAdmin(){
        return $this->isAuth() && $_SESSION['user']['admin'];
    }

    public function isAcl($key){
        return in_array($this->route['action'], $this->acl[$key]);
    }

    public function render($name, $data){
        $render=new Render($name);
        return $render->render($data);
    }

    public function redirect($url){
        header("Location: ".$url);
    }
}
