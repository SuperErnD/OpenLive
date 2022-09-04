<?php
namespace Diman\Openlive\views;

class Render{
    public $path;
    public function __construct($name){
        $this->path=__DIR__ . "/" . $name . ".phtml";
    }
    public function render($data){
        if (file_exists($this->path)){
            require $this->path;
        } else{
            throw new \LogicException("file " . $this->path . " not exists");
        }
    }
}