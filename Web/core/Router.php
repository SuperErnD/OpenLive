<?php
namespace Diman\Openlive\core;
use Diman\Openlive\core\Database;
use Diman\Openlive\core\jwt_mvc;

class Router {

    protected $routes = [];
    protected $params = [];
    protected $file = "";
    protected $db = null;
    protected $jwt = null;

    public function __construct($routers) {
        //var_dump($debugger);
        //$this->debugger = $debugger;
        $this->db = new Database();
        $this->jwt = new jwt_mvc;
        foreach($routers as $key => $val) {
            $this->add($key, $val);
        }
    }
    public function add($route, $params) {
        $route = '#^'.$route.'$#';
        $this->routes[$route] =  $params;
    }
    
    public function match() {
        //$url = trim($_SERVER['REQUEST_URI'], '/');
        $url = $this->getURI();
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
                $type="application/octet-stream";
                if (str_ends_with($this->file, ".css")){
                    $type="text/css";
                }
                header('Content-Type: ' . $type);
                header('Content-Disposition: attachment; filename="'.basename($this->file).'"');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($this->file));
                readfile($this->file);
                return null;
            }
            $path = "Diman\Openlive\controllers\\" . $this->params['controller'] . 'Controller';
            if(class_exists($path)) {
                $action = $this->params['action']."Action";
                if (method_exists($path, $action)){
                    $controller = new $path($this->params, $this->db, $this->jwt);
                    $controller->$action();
                    if (file_exists(".git/HEAD")){
                        $head = trim(substr(file_get_contents('.git/HEAD'), 4));
                        $hash = trim(file_get_contents('.git/'. $head));
                        echo "<br>Current commit sha256: ".$hash;
                    }
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

    private function getURI()
    {
        $uri = '';

        if (!empty($_SERVER['REQUEST_URI'])) {
            $uri = $_SERVER['REQUEST_URI'];
        }

        if (($cutoff = strpos($uri, '?')) !== false) {
            $uri = substr($uri, 0, $cutoff);
        }
        return trim($uri, '/');
        
    }
}
