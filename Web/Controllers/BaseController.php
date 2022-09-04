<?php
namespace Diman\Openlive\Controllers;


class BaseController {
    protected $db = null;
    protected $route = null;
    protected $model = null;

    public function __construct($route, $db) {
        $this->route = $route;
        $this->db = $db;
        $this->model = $this->loadModel($route['controller']);
    }

    public function loadModel($name){
        $path = "Diman\Openlive\Models\\" . $name . "Model";
        if (class_exists($path)){
            return new $path($this->db);
        }
    }
}
