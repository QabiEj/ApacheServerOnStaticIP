<?php

class Database {
    private static $instance = null;
    private $connection = null;
    
    public function __construct() {
        $user = getenv('CLOUDSQL_USER');
        $pass = getenv('CLOUDSQL_PASSWORD');
        $inst = getenv('CLOUDSQL_DSN');
        $dbname = getenv('CLOUDSQL_DB');
        $this->connection = mysqli_connect(null, $user, $pass, $dbname, null, $inst);
    }

    public static function getInstance() {
        if(!self::$instance) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    function getConnection() {
        return $this->connection;
    }
}
