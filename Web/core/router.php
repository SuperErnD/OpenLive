<?php
namespace Diman\Openlive\core;
use Diman\Openlive\core\DatabaseConnection;

class Router {

    protected $routes = [];
    protected $params = [];
    protected $file = "";
    protected $db = null;

    public function __construct($routers) {
        //var_dump($debugger);
        //$this->debugger = $debugger;
        $this->db = new DatabaseConnection();
        foreach($routers as $key => $val) {
            $this->add($key, $val);
        }
    }
    public function add($route, $params) {
        $route = '#^'.$route.'$#';
        $this->routes[$route] =  $params;
    }
    
    public function match() {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        // Mini-CDN :D
        if(str_starts_with($url, 'assets')) {
            
            if(file_exists(__DIR__ . "/../assets/" . ltrim($url, 'assets'))) {
                
                $this->file = __DIR__ . "/../assets/" . ltrim($url, 'assets');

                return true;
            }
        }

        foreach($this->routes as $route => $params){
            if (preg_match($route, $url, $matches)){
                $this->params = $params;
                return true;
            }
        }
        return false;
    } 
    
    public function run() {
        if($this->match()){
            if($this->file) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename="'.basename($this->file).'"');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($this->file));
                readfile($this->file);
                return null;
            }
            $path = "Diman\Openlive\Controllers\\" . $this->params['controller'] . 'Controller';
            if(class_exists($path)) {
                $action = $this->params['action']."Action";
                if (method_exists($path, $action)){
                    $controller = new $path($this->db);
                    $controller->$action();
                } else {
                    exit("Not Found Action " . strval($action)); // ошибку дает, странно
                }
            } else {
                exit("Not Found Controller " . strval($path));
            }

        } else {
            echo "404 Not Found";
        } 
    } // скоро
}