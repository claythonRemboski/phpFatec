<?php
class PostgresDB
{
    private $db;

    function __construct()
    {
        $db_host = constant("_DB_HOST");
        $db_user = constant("_DB_USER");
        $db_pass = constant("_DB_PASS");
        $db_name = constant("_DB_NAME");
        $db_port = 5432; // Sua porta PostgreSQL

        try {
            $this->db = new PDO("pgsql:host=$db_host;port=$db_port;dbname=$db_name;user=$db_user;password=$db_pass");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }

    function query($query)
    {
        try {
            $result = $this->db->query($query);
            return $result;
        } catch (PDOException $e) {
            die("Query Error: " . $e->getMessage());
        }
    }
}
