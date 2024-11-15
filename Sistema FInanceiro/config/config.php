<?php
$host = 'localhost';          
$dbname = 'sistemafinanceiro';         
$username = 'root';           
$password = '12345';          

try {
    // Conexão usando o driver pgsql para PostgreSQL
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão com PostgreSQL bem-sucedida!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
