<?php
require_once 'app/models/Categoria.php';

class CategoriaController {
    private $model;

    public function __construct($db) {
        $this->model = new Categoria($db);
    }

    public function listar() {
        try {
            return $this->model->listar();
        } catch (Exception $e) {
            die("Erro ao listar categorias: " . $e->getMessage());
        }
    }

    public function criar($nome, $descricao) {
        if (empty($nome) || empty($descricao)) {
            return false;
        }
        return $this->model->criar($nome, $descricao);
    }
    public function atualizar($id, $nome, $descricao) {
        if (empty($id) || empty($nome) || empty($descricao)) {
            return false;
        }
        return $this->model->atualizar($id, $nome, $descricao);
    }
    public function deletar($id) {
        if (empty($id)) {
            return false;
        }
        return $this->model->deletar($id);
    }
    
}
?>
