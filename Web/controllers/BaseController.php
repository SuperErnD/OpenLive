<?php
namespace Diman\Openlive\controllers;
use Diman\Openlive\views\Render;
use Diman\Openlive\core\users;


class BaseController {
    protected $db    = null;
    protected $route = null;
    protected $model = null;
    protected $acl   = null;
    protected $jwt   = null;
    protected $me    = null;

    public function __construct($route, $db, $jwt) {
        $this->route = $route;
        $this->db = $db;
        $this->jwt = $jwt;
        $this->me=new users($this->db, $this->jwt);
        if(!$this->checkAcl()){
            if(!$this->isAuth() && ($this->isAcl('authorize') or $this->isAcl("admin"))){
                return $this->redirect("/account/login");
            }else {
                echo $this->render("errors/403", []);
                http_response_code(403);
                exit(403);
            }
        }
        $this->model = $this->loadModel($route['controller']);
    }

    public function loadModel($name){
        $path = "Diman\Openlive\models\\" . $name . "Model";
        if (class_exists($path)){
            return new $path($this->db, $this->jwt);
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
        $me = $this->me->getme();
        return isset($me) and !empty($me);
    }

    public function isAdmin(){
        return $this->isAuth() && $this->me->getme()['admin'];
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
