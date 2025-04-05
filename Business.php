<?php
require_once "Database.php";

class Business {
    private $db;

    public function __construct($host, $user, $pass, $dbName) {
        $this->db = new Database($host, $user, $pass, $dbName);
    }

    public function getRowCountA() {
        return $this->db->getRowCountA();
    }

    public function getRowCountC() {
        return $this->db->getRowCountC();
    }

    public function getAllFullNamesFromB() {
        return $this->db->getFullNamesFromB();
    }
}
?>