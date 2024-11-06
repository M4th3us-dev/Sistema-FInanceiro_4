<?php
// app/models/Categoria.php

class Categoria {
    private $conn;
    private $table_name = "categorias";

    public $id;
    public $nome;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function listar() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
