<?php
require_once 'app/models/Produto.php';

class ProdutoController {
    private $model;

    public function __construct($db) {
        $this->model = new Produto($db);
    }

    public function listar() {
        try {
            return $this->model->listar();
        } catch (Exception $e) {
            die("Erro ao listar produtos: " . $e->getMessage());
        }
    }

    public function criar($nome, $categoria_id, $preco) {
        if (empty($nome) || empty($preco) || !is_numeric($preco)) {
            return false;
        }
        return $this->model->criar($nome, $categoria_id, $preco);
    }
    public function atualizar($nome, $categoria_id, $preco) {
        if (empty($nome) || empty($preco) || !is_numeric($preco)) {
            return false;
        }
        return $this->model->atualizar($nome, $categoria_id, $preco);
    }
    public function deletar($nome, $categoria_id, $preco) {
        if (empty($nome) || empty($preco) || !is_numeric($preco)) {
            return false;
        }
        return $this->model->deletar($nome, $categoria_id, $preco);
}
}
?>
