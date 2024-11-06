<?php
// app/controllers/CategoriaController.php
require_once 'app/models/Categoria.php';

class CategoriaController {
    private $model;

    public function __construct($db) {
        $this->model = new Categoria($db);
    }

    public function listar() {
        return $this->model->listar();
    }
}
