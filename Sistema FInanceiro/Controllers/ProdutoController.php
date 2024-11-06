<?php
// app/controllers/ProdutoController.php
require_once 'app/models/Produto.php';

class ProdutoController {
    private $model;

    public function __construct($db) {
        $this->model = new Produto($db);
    }

    public function listar() {
        return $this->model->listar();
    }
}
