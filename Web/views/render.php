<?php
namespace Diman\Openlive\Views;

class Render{
    public $path;
    public function __construct($name){
        $this->path=__DIR__ . $name . ".php";
    }
    public function render($data){
        if (file_exists($this->path)){
            require $this->path;
        } else{
            throw new \LogicException("file " . $path . " not exists");
        }
    }
}