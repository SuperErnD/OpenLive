<?php
namespace Diman\Openlive\Controllers;


class BaseController {
    protected $db = null;
    public function __construct($db) {
        $this->db = $db;
    }
}
