<?php
namespace Diman\Openlive\Controllers;


class BaseController { // база? да для $this->db оке чек тг
    protected $db = null;
    public function __construct($db) {
        $this->db = $db;
    }
}