<?php
require_once '../config/database.php';

$transactions = [
    ["date" => "2024-11-01", "type" => "Despesa", "category" => "Alimentação", "amount" => 150.00],
    ["date" => "2024-11-02", "type" => "Receita", "category" => "Salário", "amount" => 3000.00]
];

require '../app/views/dashboard.php';
