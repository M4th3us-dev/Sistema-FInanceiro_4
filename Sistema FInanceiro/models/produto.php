<?php
// app/models/Produto.php

class Produto {
    private $conn;
    private $table_name = "produtos";

    public $id;
    public $nome;
    public $categoria_id;
    public $preco;

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
