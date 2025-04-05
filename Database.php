<?php
class Database {
    private $conn;

    public function __construct($host, $username, $password, $database) {
        $this->conn = new mysqli($host, $username, $password, $database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getRowCountA() {
        $query = "SELECT COUNT(*) AS count FROM IN453A";
        return $this->executeSingleResult($query);
    }

    public function getRowCountC() {
        $query = "SELECT COUNT(*) AS count FROM IN453C";
        return $this->executeSingleResult($query);
    }

    public function getFullNamesFromB() {
        $query = "SELECT CONCAT(first_name, ' ', last_name) AS full_name FROM IN453B";
        $result = $this->conn->query($query);
        $names = [];
        while ($row = $result->fetch_assoc()) {
            $names[] = $row['full_name'];
        }
        return $names;
    }

    private function executeSingleResult($query) {
        $result = $this->conn->query($query);
        if (!$result) return "Access Denied or No Data";
        return $result->fetch_assoc()['count'] ?? 0;
    }
}
?>
