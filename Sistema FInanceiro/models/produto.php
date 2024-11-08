<?php
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

    public function criar($nome, $categoria_id, $preco) {
        if (empty($nome) || empty($preco) || !is_numeric($preco)) {
            return false;
        }

        $query = "INSERT INTO " . $this->table_name . " (nome, categoria_id, preco) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        return $stmt->execute([$nome, $categoria_id, $preco]);
    }
}
?>
