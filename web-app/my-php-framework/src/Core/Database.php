<?php

namespace Core;

class Database {
    private $host;
    private $db;
    private $user;
    private $pass;
    private $charset;
    private $pdo;
    private $stmt;

    public function __construct($host, $db, $user, $pass, $charset = 'utf8mb4') {
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->pass = $pass;
        $this->charset = $charset;

        $this->connect();
    }

    private function connect() {
        $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $this->pdo = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (\PDOException $e) {
            throw new \PDOException($e->getMessage(), (int)$e->getCode());
        }
    }

    public function query($sql, $params = []) {
        $this->stmt = $this->pdo->prepare($sql);
        $this->stmt->execute($params);
    }

    public function fetchAll() {
        return $this->stmt->fetchAll();
    }

    public function fetch() {
        return $this->stmt->fetch();
    }

    public function rowCount() {
        return $this->stmt->rowCount();
    }
}