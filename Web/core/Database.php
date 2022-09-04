<?php

namespace Diman\Openlive\core;

class Database {
    protected $db = null;
    public function __construct() {
        require __DIR__.'/../conf/database.php';
        $this->db = new \PDO($DatabaseURL);
        $this->db->setAttribute(\PDO::ATTR_EMULATE_PREPARES, 1);
        $this->db->exec(file_get_contents(__DIR__ . "/../../install/initialize-database.sql"));
    }

    public function query($sql, $params){
        $query=$this->db->prepare($sql);
        if (!empty($params)){
            foreach ($params as $key => $value) {
                $this->db->bindValue(":".$key, $value);
            }
        }
        if (!$query){
            throw new \LogicException("Query return is false");
        }
        $query->execute();
        return $query;
    }

    public function row($sql, $params){
        return $this->query($sql, $params)->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function column($sql, $params){
        return $this->query($sql, $params)->fetchColumn(\PDO::FETCH_ASSOC);
    }

}
