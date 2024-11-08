<?php
class Categoria {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function listar() {
        $stmt = $this->pdo->query('SELECT * FROM categorias');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function criar($nome, $descricao) {
        $stmt = $this->pdo->prepare('INSERT INTO categorias (nome, descricao) VALUES (?, ?)');
        return $stmt->execute([$nome, $descricao]);
    }
}
?>
